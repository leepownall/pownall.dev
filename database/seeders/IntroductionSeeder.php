<?php

namespace Database\Seeders;

use App\Models\Introduction;
use Illuminate\Database\Seeder;

class IntroductionSeeder extends Seeder
{
    public function run()
    {
        Introduction::create([
            'content' => 'I’m Lee, a PHP Developer from the West Midlands. I specialise in Laravel and focus on writing clean, maintainable, and testable code.',
        ]);
    }
}
