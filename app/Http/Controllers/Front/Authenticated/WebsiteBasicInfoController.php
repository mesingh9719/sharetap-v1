<?php

namespace App\Http\Controllers\Front\Authenticated;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WebsiteBasicInfo;
use Illuminate\Support\Facades\Auth;

class WebsiteBasicInfoController extends Controller
{
    public function index()
    {
        // Get authenticated user's website info
        $website = Auth::user()->website;

        if (!$website) {
            return redirect()->route('website.create')
                           ->with('error', 'Please create a website first.');
        }

        // Get or create basic info for this website
        $basicInfo = WebsiteBasicInfo::firstOrCreate(
            ['website_id' => $website->id],
            [
                'site_name' => $website->name ?? 'My Website',
                'primary_color' => '#000000',
                'secondary_color' => '#ffffff'
            ]
        );

        return view('front.website.basic-info.edit', compact('basicInfo'));
    }

    public function edit()
    {
        // Get authenticated user's website info
        $website = Auth::user()->website;

        if (!$website) {
            return redirect()->route('website.create')
                           ->with('error', 'Please create a website first.');
        }

        $basicInfo = $website->basicInfo;

        return view('front.website.basic-info.edit', compact('basicInfo'));
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'site_name' => 'required|string|max:255',
            'tagline' => 'nullable|string|max:255',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'favicon' => 'nullable|image|mimes:ico,png|max:1024',
            'primary_color' => 'required|string|max:7',
            'secondary_color' => 'required|string|max:7',
            'accent_color' => 'nullable|string|max:7',
            'footer_text' => 'nullable|string',
            'footer_logo' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string',
            'google_maps_link' => 'nullable|url|max:255',
            'social_links' => 'nullable|array',
            'social_links.facebook' => 'nullable|url',
            'social_links.twitter' => 'nullable|url',
            'social_links.instagram' => 'nullable|url',
            'social_links.linkedin' => 'nullable|url'
        ]);

        $basicInfo = WebsiteBasicInfo::firstOrCreate(
            [], // Empty condition to find first record
            [
                'site_name' => $validatedData['site_name'],
                'primary_color' => $validatedData['primary_color'],
                'secondary_color' => $validatedData['secondary_color']
            ]
        );

        // Handle file uploads
        foreach (['logo', 'favicon', 'footer_logo'] as $image) {
            if ($request->hasFile($image)) {
                // Delete old file if exists
                if ($basicInfo->$image) {
                    Storage::disk('public')->delete($basicInfo->$image);
                }
                // Store new file
                $validatedData[$image] = $request->file($image)->store('website', 'public');
            }
        }

        $basicInfo->update($validatedData);

        return back()->with('success', 'Website settings updated successfully!');
    }
}
