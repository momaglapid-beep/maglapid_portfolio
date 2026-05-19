<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Setting;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Work;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin User
        User::create([
            'name' => 'Monico Maglapid',
            'email' => 'monico.maglapid@gmail.com',
            'password' => Hash::make('password'),
        ]);

        // Settings
        Setting::create([
            'hero_title' => 'Monico Maglapid',
            'hero_subtitle' => 'Web Designer & Front-end Developer',
            'hero_bg_image' => 'img/1920x1080/01.jpg',
            'about_intro_title' => 'Intro',
            'about_intro_text' => 'What I am all about.',
            'about_description' => "I'm Monico Maglapid, orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.",
            'contact_location' => 'Philippines',
            'contact_phone' => '+63 900 000 0000',
            'contact_email' => 'monico.maglapid@gmail.com',
            'contact_web' => 'monico.maglapid.com',
        ]);

        // Skills
        Skill::create(['name' => 'PHP', 'percentage' => 87]);
        Skill::create(['name' => 'HTML5', 'percentage' => 96]);
        Skill::create(['name' => 'JavaScript', 'percentage' => 52]);
        Skill::create(['name' => 'Photoshop', 'percentage' => 77]);

        // Experiences
        Experience::create([
            'icon' => 'icon-chemistry',
            'title' => 'HTML5/CSS3',
            'description' => 'Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor'
        ]);
        Experience::create([
            'icon' => 'icon-screen-tablet',
            'title' => 'Photoshop',
            'description' => 'Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor'
        ]);
        Experience::create([
            'icon' => 'icon-badge',
            'title' => 'Front-end',
            'description' => 'Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor'
        ]);

        // Works
        Work::create([
            'title' => 'Art Of Coding',
            'category' => 'Clean & Minimalistic Design',
            'image' => 'img/800x400/01.jpg',
            'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.',
            'leader' => 'Monico Maglapid',
            'designer' => 'Monico Maglapid',
            'developer' => 'Monico Maglapid',
            'customer' => 'Portfolio Client',
        ]);
        
        Work::create([
            'title' => 'Art Of Coding',
            'category' => 'Clean & Minimalistic Design',
            'image' => 'img/397x400/01.jpg',
            'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'leader' => 'Monico Maglapid',
            'designer' => 'Monico Maglapid',
            'developer' => 'Monico Maglapid',
            'customer' => 'Portfolio Client',
        ]);

        Work::create([
            'title' => 'Art Of Coding',
            'category' => 'Clean & Minimalistic Design',
            'image' => 'img/397x300/01.jpg',
            'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'leader' => 'Monico Maglapid',
            'designer' => 'Monico Maglapid',
            'developer' => 'Monico Maglapid',
            'customer' => 'Portfolio Client',
        ]);
    }
}
