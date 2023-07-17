<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Header;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Image;
use App\Models\Project;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create(['name' => 'majd', 'email' => 'admin@admin', 'password' => bcrypt('adminadmin')]);
        Category::factory(3)->create();
        Project::factory(2)->has(Image::factory(3))->sequence(fn ($sequence) => ['category_id' => Category::all()->random()->id])->create();
        Header::factory()->has(Image::factory())->create(['outroTitle' => 'Connecting people to place', 'portfolioDescription' => 'Whether it’s an office space, retail space, restaurant, or hotel, Abel Design Group offers a trifecta of crossover expertise, service, and agility that has resulted in successful projects and longstanding relationships.', 'aboutDescription' => 'Smart Dekor have evolved an expertise in interior. We provide hands-on interior design services that are tailored to our client’s requirements and personal brief. Our painstaking attention to detail from the earliest concept stage right through to the completion of a project, consistently provides our clients with homes that exceed their expectations. Our architectural approach considers every aspect of the interior design process so that each element progresses logically. From structural space planning, furniture layouts and lighting design to the selection of materials balanced to create homes that are unique to their owners.']);
        Contact::factory()->create();
    }
}
