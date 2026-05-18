<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('General Settings') }}
            </h2>
            <a href="{{ route('home') }}" target="_blank" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500">View Website</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                @if(session('success'))
                    <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-lg">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Branding -->
                        <div class="col-span-2 border-b border-gray-200 pb-4">
                            <h3 class="text-xl font-bold text-gray-800">Branding</h3>
                        </div>
                        <div>
                            <label class="block font-semibold text-sm text-gray-700">Logo (Light Background)</label>
                            @if($setting->logo)
                                <img src="{{ asset('storage/' . $setting->logo) }}" class="h-10 mb-2 bg-gray-200 p-1">
                            @endif
                            <input type="file" name="logo" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                        </div>
                        <div>
                            <label class="block font-semibold text-sm text-gray-700">Logo (Dark Background)</label>
                            @if($setting->logo_dark)
                                <img src="{{ asset('storage/' . $setting->logo_dark) }}" class="h-10 mb-2 bg-gray-800 p-1">
                            @endif
                            <input type="file" name="logo_dark" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                        </div>

                        <!-- Hero Section -->
                        <div class="col-span-2 border-b border-gray-200 pb-4 mt-4">
                            <h3 class="text-xl font-bold text-gray-800">Hero Section</h3>
                        </div>
                        <div>
                            <label class="block font-semibold text-sm text-gray-700">Hero Title</label>
                            <input type="text" name="hero_title" value="{{ $setting->hero_title }}" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">
                        </div>
                        <div>
                            <label class="block font-semibold text-sm text-gray-700">Hero Subtitle</label>
                            <input type="text" name="hero_subtitle" value="{{ $setting->hero_subtitle }}" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">
                        </div>
                        <div class="col-span-2">
                            <label class="block font-semibold text-sm text-gray-700">Hero Background Image</label>
                            @if($setting->hero_bg_image)
                                <img src="{{ Str::startsWith($setting->hero_bg_image, 'img/') ? asset($setting->hero_bg_image) : asset('storage/' . $setting->hero_bg_image) }}" class="w-40 mb-2 rounded shadow">
                            @endif
                            <input type="file" name="hero_bg_image" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                        </div>

                        <!-- Social Links -->
                        <div class="col-span-2 border-b border-gray-200 pb-4 mt-4">
                            <h3 class="text-xl font-bold text-gray-800">Social Media</h3>
                        </div>
                        <div>
                            <label class="block font-semibold text-sm text-gray-700">Facebook URL</label>
                            <input type="text" name="social_facebook" value="{{ $setting->social_facebook }}" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">
                        </div>
                        <div>
                            <label class="block font-semibold text-sm text-gray-700">Twitter URL</label>
                            <input type="text" name="social_twitter" value="{{ $setting->social_twitter }}" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">
                        </div>
                        <div>
                            <label class="block font-semibold text-sm text-gray-700">Dribbble URL</label>
                            <input type="text" name="social_dribbble" value="{{ $setting->social_dribbble }}" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">
                        </div>
                        <div>
                            <label class="block font-semibold text-sm text-gray-700">Behance URL</label>
                            <input type="text" name="social_behance" value="{{ $setting->social_behance }}" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">
                        </div>
                        <div>
                            <label class="block font-semibold text-sm text-gray-700">LinkedIn URL</label>
                            <input type="text" name="social_linkedin" value="{{ $setting->social_linkedin }}" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">
                        </div>

                        <!-- About Section -->
                        <div class="col-span-2 border-b border-gray-200 pb-4 mt-4">
                            <h3 class="text-xl font-bold text-gray-800">About Section</h3>
                        </div>
                        <div>
                            <label class="block font-semibold text-sm text-gray-700">Intro Title</label>
                            <input type="text" name="about_intro_title" value="{{ $setting->about_intro_title }}" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">
                        </div>
                        <div>
                            <label class="block font-semibold text-sm text-gray-700">Intro Text</label>
                            <input type="text" name="about_intro_text" value="{{ $setting->about_intro_text }}" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">
                        </div>
                        <div class="col-span-2">
                            <label class="block font-semibold text-sm text-gray-700">About Description</label>
                            <textarea name="about_description" rows="4" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">{{ $setting->about_description }}</textarea>
                        </div>

                        <!-- Contact Section -->
                        <div class="col-span-2 border-b border-gray-200 pb-4 mt-4">
                            <h3 class="text-xl font-bold text-gray-800">Contact Section</h3>
                        </div>
                        <div>
                            <label class="block font-semibold text-sm text-gray-700">Location</label>
                            <input type="text" name="contact_location" value="{{ $setting->contact_location }}" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">
                        </div>
                        <div>
                            <label class="block font-semibold text-sm text-gray-700">Phone</label>
                            <input type="text" name="contact_phone" value="{{ $setting->contact_phone }}" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">
                        </div>
                        <div>
                            <label class="block font-semibold text-sm text-gray-700">Email</label>
                            <input type="email" name="contact_email" value="{{ $setting->contact_email }}" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">
                        </div>
                        <div>
                            <label class="block font-semibold text-sm text-gray-700">Web</label>
                            <input type="text" name="contact_web" value="{{ $setting->contact_web }}" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">
                        </div>
                    </div>

                    <div class="mt-8 flex justify-end">
                        <button type="submit" class="inline-flex items-center px-6 py-3 bg-gray-800 border border-transparent rounded-md font-bold text-sm text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none transition ease-in-out duration-150 shadow-lg">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>