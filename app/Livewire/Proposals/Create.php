<?php

namespace App\Livewire\Proposals;

use App\Models\Project;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Create extends Component
{
    public Project $project;
    public bool $modal = false;

    public function render()
    {
        return view('livewire.proposals.create');
    }

    #[Rule(['required', 'email'])]
    public string $email = '';

    #[Rule(['required', 'numeric', 'min:1', 'max:800'])]
    public int $hours = 0;

    #[Rule(['required', 'boolean', 'accepted'])]
    public bool $agree = false;

    public function save()
    {
        $this->validate();
        $this->project->proposals()->updateOrCreate(
            ['email' => $this->email],
            ['hours' => $this->hours]
        );

        $this->modal = false;
    }
}
