<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Template;
use App\Models\UserTemplate;

class TemplatesController extends Controller
{
    public function index()
    {
        $templates = Template::all();
        return view('front.templates.index',compact('templates'));
    }

    public function show($id)
    {
        $template = Template::find($id);
        return response()->json($template);
    }

    public function update($id, Request $request){

        $userTemplate = UserTemplate::where('user_id',auth()->id())->where('template_id',$id)->first();

        if($userTemplate){
            $userTemplate->update([
                'template_id' => $request->template_id
            ]);
        }else{
            UserTemplate::create([
                'user_id' => auth()->id(),
                'template_id' => $request->template_id,
            ]);
        }

        return redirect()->back()->with('success','Template updated successfully');

    }

    public function recommendedTemplates()
    {
        $templates = Template::where('is_active',1)->where('is_recommended',1)->get();
        return response()->json($templates);
    }

    public function activeTemplates()
    {
        $templates = Template::where('is_active',1)->get();
        return response()->json($templates);
    }
}
