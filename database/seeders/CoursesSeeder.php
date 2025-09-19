<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i <= 10; $i++) {
            Course::create([
                'title' =>"course $i",
                'description' => "course description $i",
                'max_students' => fake()->randomNumber(),
                "category_id" => 1,
                "instructor_id" => 1,
                "image" => "uploads/courses/images/$i.jpg",
                "video" => "uploads/courses/videos/$i.mp4",
            ]);
        }
    }
}
