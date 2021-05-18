<?php namespace Database\Seeders;

use App\Models\CourseCategory;
use Illuminate\Database\Seeder;

class CourseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course_categories = [
            [
                'name'          => 'Business and Management',
                'short_name'    => 'Business & Management',
                'description'   => 'Business and Management courses are designed for people who want to understand the concepts and principles of business education while acquiring skills through practical experience in a business environment.',
                'slug'          => 'business',
            ],
            [
                'name'          => 'Coding and Computing',
                'short_name'    => 'Coding & Computing',
                'description'   => 'Computer literacy is a very important skill to possess for life in a variety of business, scientific and social contexts and a platform through which an individual sees problem in the light of solutions.',
                'slug'          => 'computer-programming',
            ],
            [
                'name'          => 'Applied Sciences and Technology',
                'short_name'    => 'Applied Sci-Tech ',
                'description'   => 'The Applied Science and technology courses provide an extensive understanding of the contents, methods, principles and applications of Science and technology and further insights at the highest level',
                'slug'          => 'applied-science-and-technology',
            ],
            [
                'name'          => 'Languages and Culture',
                'short_name'    => 'Languages & Culture',
                'description'   => 'Language impacts the daily lives of members of any race, creed, and region of the world. It helps express our feelings, desires, and queries to the world around us.',
                'slug'          => 'language-and-culture',
            ]
        ];

        CourseCategory::insert($course_categories);
    }
}
