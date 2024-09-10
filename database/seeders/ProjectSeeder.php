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
            'name' => 'Garage Booking Application',
            'description' => 'Built a Laravel web app for vehicle maintenance bookings with role-based dashboards and automated notifications.',
            'url' => 'https://github.com/lukenny17/GarageApp',
            'details' => 'Developed a full-stack web application using Laravel for managing vehicle maintenance bookings. The app features role-based dashboards for customers, employees, and admin, along with automated email notifications and feedback mechanisms. Implemented Agile methodologies with GitHub for version control.',
            'technologies' => 'Laravel, PHP, JavaScript, SQL, Github, Bootstrap, Mailtrap, Figma',
            'is_featured' => true
        ]);

        Project::create([
            'name' => 'HEAT Software Enhancement',
            'description' => 'Enhanced accessibility in HEAT software using Java, adding scalable UI components and improved usability features.',
            'url' => 'https://example.com/portfolio',
            'details' => 'Enhanced the accessibility of the Haskell Educational Advancement Tool (HEAT) by adding features including scalable UI components, colour scheme options, and a new toolbar. Conducted unit and functional testing to ensure improved usability for visually impaired users.',
            'technologies' => 'Java, Gitlab',
            'is_featured' => true
        ]);

        Project::create([
            'name' => 'Personal Portfolio',
            'description' => 'Developed a responsive personal portfolio website using Laravel to showcase projects and skills.',
            'url' => 'https://github.com/lukenny17/portfolio',
            'details' => 'Developed a personal portfolio website to professionally present as part of a search for a new career in software engineering. The site features sections for projects, skills, professional experience, and a contact form, all designed with a responsive layout to provide a seamless user experience across devices.',
            'technologies' => 'Laravel, Bootstrap, MySQL, JavaScript',
            'is_featured' => true
        ]);

        Project::create([
            'name' => 'Data Analysis in WEKA',
            'description' => 'Optimised J48 decision trees in WEKA for breast cancer data analysis, focusing on accuracy and interpretability.',
            'url' => asset('files/weka_data_analysis.pdf'),
            'details' => 'Applied J48 decision trees in WEKA to analyze breast cancer datasets, optimizing models with cross-validation and parameter tuning. Identified critical diagnostic attributes that aligned with clinical practices, enhancing model interpretability and accuracy.',
            'technologies' => 'WEKA, J48 Decision Trees',
            'is_featured' => true
        ]);
    }
}
