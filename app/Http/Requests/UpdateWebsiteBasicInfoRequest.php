<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWebsiteBasicInfoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */

     public function rules()
     {
         return [
             'site_name' => 'required|max:255',
             'tagline' => 'nullable|max:255',
             'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
             'favicon' => 'nullable|image|mimes:ico,png|max:1024',
             'primary_color' => 'required|regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/',
             'secondary_color' => 'required|regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/',
             'accent_color' => 'nullable|regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/',
             'footer_text' => 'nullable',
             'footer_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
             'email' => 'nullable|email',
             'phone' => 'nullable',
             'address' => 'nullable',
             'google_maps_link' => 'nullable|url',
             'social_links.facebook' => 'nullable|url',
             'social_links.twitter' => 'nullable|url',
             'social_links.instagram' => 'nullable|url',
             'social_links.linkedin' => 'nullable|url',
         ];
     }
}
