<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        return view('admin.settings', compact('setting'));
    }

    public function update(Request $request)
    {
        $setting = Setting::first();
        $validated = $request->validate([
            'logo' => 'nullable|image|max:2048',
            'logo_dark' => 'nullable|image|max:2048',
            'hero_title' => 'required|string|max:255',
            'hero_subtitle' => 'nullable|string|max:255',
            'hero_bg_image' => 'nullable|image|max:2048',
            'about_intro_title' => 'nullable|string|max:255',
            'about_intro_text' => 'nullable|string|max:255',
            'about_description' => 'nullable|string',
            'contact_location' => 'nullable|string|max:255',
            'contact_phone' => 'nullable|string|max:255',
            'contact_email' => 'nullable|email|max:255',
            'contact_web' => 'nullable|string|max:255',
            'social_facebook' => 'nullable|url|max:255',
            'social_twitter' => 'nullable|url|max:255',
            'social_dribbble' => 'nullable|url|max:255',
            'social_behance' => 'nullable|url|max:255',
            'social_linkedin' => 'nullable|url|max:255',
        ]);

        if ($request->hasFile('logo')) {
            $validated['logo'] = $request->file('logo')->store('settings', 'public');
        }
        if ($request->hasFile('logo_dark')) {
            $validated['logo_dark'] = $request->file('logo_dark')->store('settings', 'public');
        }
        if ($request->hasFile('hero_bg_image')) {
            $validated['hero_bg_image'] = $request->file('hero_bg_image')->store('settings', 'public');
        }

        $setting->update($validated);
        return back()->with('success', 'Settings updated successfully.');
    }
}
