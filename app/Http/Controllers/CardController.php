<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardController extends Controller
{
    public function create()
    {
        return view('front.card.create');
    }

    public function store(Request $request)
    {
        $userData = [
            'name' => $request->full_name,
            'dateOfBirth' => $request->date_of_birth,
            'gender' => $request->gender,
            'email' => $request->email,
            'phone' => $request->phone,
            'alternateEmail' => $request->alternate_email,
        ];

        $templateData = [
            'plan_id' => $request->selected_plan_id,
            'template_id' => $request->template,
            'profession' => $request->profession,
            'linkedin' => $request->linkedin,
            'twitter' => $request->twitter,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'location' => $request->location,
        ];
    }
}
