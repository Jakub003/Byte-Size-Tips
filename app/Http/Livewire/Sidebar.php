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

    // public function mount()
    // {
    //     $this->articles = File::files(resource_path('/views/articles/'));

    // }

    public function render()
    {
        return view('pages.sidebar');
    }
}
