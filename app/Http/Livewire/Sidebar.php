<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\File;
use Livewire\Component;

class Sidebar extends Component
{
    public $gettingStartedArticles = [];
    public $cheatSheetArticles = [];
    public $featureArticles = [];
    public $componentArticles = [];
    public $roadmapArticles = [];

    public function mount()
    {
        $this->gettingStartedArticles = File::files(resource_path('/views/markdown/getting-started/'));
        $this->cheatSheetArticles = File::files(resource_path('/views/markdown/cheat-sheet/'));
        $this->featureArticles = File::files(resource_path('/views/markdown/features/'));
        $this->componentArticles = File::files(resource_path('/views/markdown/components/'));
        $this->roadmapArticles = File::files(resource_path('/views/markdown/roadmap/'));

    }

    public function render()
    {
        return view('pages.sidebar');
    }
}
