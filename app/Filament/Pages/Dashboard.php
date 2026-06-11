<?php

namespace App\Filament\Pages;

use App\Models\Project;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Contact;
use App\Models\Profile;
use Filament\Pages\Page;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static string $view = 'filament.pages.dashboard';
    protected static ?string $navigationLabel = 'Dashboard';
    protected static ?string $title = 'Dashboard';
    protected static ?string $slug = 'dashboard';

    public $totalProjects;
    public $totalSkills;
    public $totalExperiences;
    public $totalServices;
    public $totalTestimonials;
    public $totalContacts;
    public $unreadContacts;
    public $profiles;

    public function mount()
    {
        $this->totalProjects = Project::count();
        $this->totalSkills = Skill::count();
        $this->totalExperiences = Experience::count();
        $this->totalServices = Service::count();
        $this->totalTestimonials = Testimonial::count();
        $this->totalContacts = Contact::count();
        $this->unreadContacts = Contact::where('is_read', false)->count();
        $this->profiles = Profile::count();
    }
}