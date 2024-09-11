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
            'details' => 'Implemented a comprehensive booking management system with customer, employee, and admin dashboards. Designed database schema and ER diagrams to support data handling. Utilised Figma for UI mock-ups and Bootstrap for responsive design, enhancing user experience across devices. Integrated Laravel Breeze for secure role-based access control, with email verification, and automated notifications using queues and scheduling for real-time updates. Applied Agile methodologies with GitHub for project management and version control, ensuring iterative development and continuous integration.',
            'technologies' => 'Laravel, PHP, JavaScript, SQL, Github, Bootstrap, Mailtrap, Figma',
            'tags' => 'development',
            'is_featured' => true
        ]);

        Project::create([
            'name' => 'HEAT Software Enhancement',
            'description' => 'Enhanced accessibility in HEAT software using Java, adding scalable UI components and improved usability features.',
            'url' => 'https://example.com/portfolio',
            'details' => 'Expanded HEAT\'s functionality by implementing accessibility features such as scalable UI components, customizable colour schemes, and a new toolbar. Conducted thorough reviews of the existing software architecture, prioritising user stories for high-impact features. Ensured software reliability and usability through unit and functional testing. Managed the project using GitLab for version control, issue tracking, and documentation, resulting in achieving the top grade in the class for the project.',
            'technologies' => 'Java, Gitlab',
            'tags' => 'development',
            'is_featured' => true
        ]);

        Project::create([
            'name' => 'Personal Portfolio',
            'description' => 'Developed a responsive personal portfolio website using Laravel to showcase projects and skills.',
            'url' => 'https://github.com/lukenny17/portfolio',
            'details' => 'Developed this portfolio website with sections for projects, skills, experience, and contact, all designed to professionally present my growing skillset. Utilised Laravel for backend functionality, Bootstrap for styling, and JavaScript for interactivity. MySQL was used to manage project content, images, and store contact form submissions, enabling straightforward updates and data management.',
            'technologies' => 'Laravel, SQL, JavaScript, Bootstrap',
            'tags' => 'development',
            'is_featured' => true
        ]);

        Project::create([
            'name' => 'Data Analysis in WEKA',
            'description' => 'Optimised J48 decision trees in WEKA for breast cancer data analysis, focusing on accuracy and interpretability.',
            'url' => 'https://1drv.ms/b/s!AqY8LVlSszeriMBPyFaBl99nKuzQ_Q?e=tSWCph',
            'details' => 'Applied cross-validation techniques to evaluate and optimise J48 decision trees, focusing on critical diagnostic attributes that align with clinical practices. Conducted parameter tuning, including adjusting confidence factors and pruning strategies, to balance model complexity and performance. Enhanced understanding of data mining concepts through practical application in WEKA, emphasising the importance of model interpretability and clinical relevance.',
            'technologies' => 'WEKA, J48 Decision Trees',
            'tags' => 'data-analysis',
            'is_featured' => true
        ]);
    }
}
