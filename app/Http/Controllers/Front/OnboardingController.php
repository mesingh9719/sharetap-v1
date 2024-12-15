<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Website;
use App\Models\BusinessProfile;
use App\Models\IndividualProfile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class OnboardingController extends Controller
{
    public function store(Request $request)
    {
        try {
            // Validate common fields
            $validator = Validator::make($request->all(), [
                'account_type' => 'required|in:business,individual',
                'website_goal' => 'required|in:sell,showcase,service',
                'website_template' => 'required'
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            // Validate type-specific fields
            if ($request->account_type === 'business') {
                $validator = Validator::make($request->all(), [
                    'business_name' => 'required|min:2|max:100',
                    'business_type' => 'required',
                    'business_description' => 'required|min:20'
                ]);
            } else {
                $validator = Validator::make($request->all(), [
                    'full_name' => 'required|min:2|max:100',
                    'profession' => 'required|max:100',
                    'specialization' => 'required',
                    'bio' => 'required|min:20'
                ]);
            }

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            // Begin transaction
            DB::beginTransaction();

            // Create website
            $website = Website::create([
                'user_id' => auth()->id(),
                'type' => $request->account_type,
                'website_goal' => $request->website_goal,
                'template' => $request->website_template,
                'status' => 'draft'
            ]);

            // Create profile based on type
            if ($request->account_type === 'business') {
                BusinessProfile::create([
                    'website_id' => $website->id,
                    'business_name' => $request->business_name,
                    'business_type' => $request->business_type,
                    'business_description' => $request->business_description
                ]);
            } else {
                IndividualProfile::create([
                    'website_id' => $website->id,
                    'full_name' => $request->full_name,
                    'profession' => $request->profession,
                    'specialization' => $request->specialization,
                    'bio' => $request->bio
                ]);
            }

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Website created successfully',
                'redirect' => route('website.builder', ['id' => $website->id])
            ]);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while creating your website'
            ], 500);
        }
    }
}
