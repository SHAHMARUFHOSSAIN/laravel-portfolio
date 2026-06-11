<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ThemeToggle extends Component
{
    public $theme;
    
    public function mount()
    {
        $this->theme = request()->session()->get('theme', 'light');
    }
    
    public function toggleTheme()
    {
        $this->theme = $this->theme === 'light' ? 'dark' : 'light';
        session()->put('theme', $this->theme);
    }

    public function render()
    {
        return view('components.theme-toggle');
    }
}
