<?php

namespace Database\Seeders;

use App\Actions\ArrangePositions;
use App\Models\Project;
use App\Models\Proposal;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()
            ->count(100)
            ->create();

        User::query()->inRandomOrder()->limit(10)->get()
            ->each(function (User $user) {
                $project = Project::factory()->create([
                    'created_by' => $user->id,
                ]);

                Proposal::factory()->count(random_int(5, 30))->create([
                    'project_id' => $project->id,
                ]);

                ArrangePositions::run($project->id);
            });
    }
}
