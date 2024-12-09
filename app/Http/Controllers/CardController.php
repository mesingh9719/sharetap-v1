<?php

namespace App\Http\Controllers;

use App\Helpers\GlobalHelper;
use Illuminate\Http\Request;
use App\Models\Template; // Add this line to import the Template model
use App\Models\User;
use App\Models\UserTemplate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str; // Add this line to import Str

class CardController extends Controller
{
    public function create()
    {
        $templates = Template::all();
        return view('front.card.create',compact('templates'));
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
            'password' => Hash::make('password'.$request->email),
        ];

        $templateData = [
            'plan_id' => $request->selected_plan_id,
            'templates' => $request->templates,
            'profession' => $request->profession,
            'template_id' => $request->templates[0],
        ];

        $socialMedias = [
            'linkedin' => $request->linkedin,
            'twitter' => $request->twitter,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'location' => $request->location,
        ];



        $image = GlobalHelper::uploadFile($request->profile_picture,'profile');
        $userData['profile_picture'] = $image ?? '';

        $coverImage = GlobalHelper::uploadFile($request->cover_picture,'cover');
        $userData['cover_picture'] = $coverImage ?? '';

        $user = User::create($userData);
        $templateData['user_id'] = $user->id;
        $templateData['unique_url'] = Str::random(10);
        $templateData['social_medias'] = json_encode($socialMedias);
        UserTemplate::create($templateData);

        \Auth::login($user);

        return redirect()->route('front.card.show', $templateData['unique_url']);
    }

    public function show($unique_url)
    {
        $userTemplate = UserTemplate::where('unique_url', $unique_url)->first();
        $template = Template::find($userTemplate->template_id);
        $view = $template->file_path.$template->file_name;
        return view($view,compact('userTemplate'));
    }
}
