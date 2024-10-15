<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'description' => fake()->randomHtml(),
            'ends_at' => fake()->dateTimeBetween('now', '+ 5 days'),
            'status' => fake()->randomElement(['open', 'closed']),
            'tech_stack' => fake()->randomElements(['vite', 'react', 'javascript', 'nodejs', 'nextjs', 'laravel', 'php', 'livewire', 'csharp', 'java', 'angular', 'python', 'vue', 'postgresql', 'mysql'], random_int(1, 5)),
            'created_by' => User::factory(),
        ];
    }
}
