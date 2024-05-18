<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Prompt;

class PromptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prompt_test = new Prompt;
        $prompt_test->content = '
            Lorem ipsum dolor sit amet. In nihil velit et voluptatibus sequi ab nisi illo et commodi possimus est maxime optio! A dolores Quis et maxime esse 33 impedit architecto.
        ';

        $prompt_test->save();

        $prompts = Prompt::factory()->count(50)->create();
    }
}
