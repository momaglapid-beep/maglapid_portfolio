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
        $data = $request->except(['logo', 'logo_dark', 'hero_bg_image']);

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('settings', 'public');
        }
        if ($request->hasFile('logo_dark')) {
            $data['logo_dark'] = $request->file('logo_dark')->store('settings', 'public');
        }
        if ($request->hasFile('hero_bg_image')) {
            $data['hero_bg_image'] = $request->file('hero_bg_image')->store('settings', 'public');
        }

        $setting->update($data);
        return back()->with('success', 'Settings updated successfully.');
    }
}
