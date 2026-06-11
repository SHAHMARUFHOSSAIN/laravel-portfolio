<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;
use App\Models\Skill;

class ProjectFilter extends Component
{
    public $selectedTechnology = null;
    public $projects = [];

    protected $listeners = ['filterProjects' => 'filterProjects'];

    public function mount()
    {
        $this->loadProjects();
    }

    public function filterProjects($technology = null)
    {
        $this->selectedTechnology = $technology;
        $this->loadProjects();
    }

    public function loadProjects()
    {
        $query = Project::where('is_visible', true)->with('technologies');

        if ($this->selectedTechnology) {
            $query->whereHas('technologies', function ($q) {
                $q->where('slug', $this->selectedTechnology);
            });
        }

        $this->projects = $query->orderBy('order')->get();
    }

    public function clearFilter()
    {
        $this->selectedTechnology = null;
        $this->loadProjects();
    }

    public function getTechnologiesProperty()
    {
        return Skill::where('category', 'technology')
            ->where('is_visible', true)
            ->orderBy('name')
            ->get();
    }

    public function render()
    {
        return view('livewire.project-filter', [
            'projects' => $this->projects,
            'technologies' => $this->technologies,
        ]);
    }
}
