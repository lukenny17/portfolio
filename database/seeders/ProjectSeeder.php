<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create placeholder projects
        Project::create([
            'name' => 'Portfolio Website',
            'description' => 'A personal portfolio showcasing my projects, skills, and contact information.',
            'image_path' => 'images/portfolio.jpg', 
            'url' => 'https://example.com/portfolio',
            'is_featured' => true
        ]);

        Project::create([
            'name' => 'E-commerce Store',
            'description' => 'A fully functional e-commerce website with payment gateway integration.',
            'image_path' => 'images/ecommerce.jpg',
            'url' => 'https://example.com/ecommerce',
            'is_featured' => true
        ]);

        Project::create([
            'name' => 'Task Management App',
            'description' => 'A simple task management tool to track daily activities and to-dos.',
            'image_path' => 'images/task_manager.jpg',
            'url' => 'https://example.com/task-manager',
            'is_featured' => true
        ]);
    }
}
