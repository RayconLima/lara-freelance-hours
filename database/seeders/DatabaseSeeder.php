<?php

namespace Database\Seeders;

use App\Actions\ArrangePositions;
use App\Models\{User, Project, Proposal, Technology};
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(TechnologySeeder::class);
        User::factory()->count(25)->create();

        User::query()->inRandomOrder()->limit(10)->get()->each(function (User $user) {
            $project = Project::factory()->create(['created_by' => $user->id]);

            $technologyIds = Technology::inRandomOrder()->limit(random_int(1, 6))->pluck('id');

            $project->technologies()->attach($technologyIds);

            Proposal::factory()->count(random_int(4, 45))->create(['project_id' => $project->id]);

            ArrangePositions::run($project->id);
        });
    }
}
