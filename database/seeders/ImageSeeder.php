<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Image;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Garage Booking App
        $garageImageFiles = [
            'garagebookingapp/customerdashboard.png',
            'garagebookingapp/admindashboard.png',
            'garagebookingapp/createbooking.png',
            'garagebookingapp/emailverification.png',
            'garagebookingapp/homepage.png',
            'garagebookingapp/services.png'
        ];

        // Seed each image into the images table
        foreach ($garageImageFiles as $file) {
            Image::create([
                'project_id' => 1,
                'path' => 'images/' . $file,
            ]);
        }

        // Heat group project
        $heatImageFiles = [
            'heat/gitlabwiki.png',
            'heat/userstories.png',
        ];

        foreach ($heatImageFiles as $file) {
            Image::create([
                'project_id' => 2,
                'path' => 'images/' . $file,
            ]);
        }

        // Portfolio
        $portfolioImageFiles = [
            'portfolio/hero.png',
        ];

        foreach ($portfolioImageFiles as $file) {
            Image::create([
                'project_id' => 3,
                'path' => 'images/' . $file,
            ]);
        }

        // WEKA
        $wekaImageFiles = [
            'weka/table1.png',
            'weka/figure4.png',
        ];

        foreach ($wekaImageFiles as $file) {
            Image::create([
                'project_id' => 4,
                'path' => 'images/' . $file,
            ]);
        }
    }
}
