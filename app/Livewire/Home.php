<?php

namespace App\Livewire;

use App\Models\EuCategory;
use App\Models\EuPost;
use Livewire\Component;

class Home extends Component
{

    public $pageRendered = false;
    public $data = [
        'euPosts' => [],
        'euCategories' => []
    ];
 
    public function renderComplete()
    {
        $this->pageRendered = true;
        $this->data = [
            'euPosts' => EuPost::select('id', 'title', 'image', 'eu_categories')->get(),
            'euCategories' => EuCategory::all()
        ];

        $this->dispatch('deferedEuPostDataLoaded', $this->data);
    }

    public function render()
    {

        // $this->data = [
        //     'euPosts' => EuPost::select('id', 'title', 'image', 'eu_categories')->get(),
        //     'euCategories' => EuCategory::all()
        // ];

        return view('livewire.home', [
            'euPosts' => $this->data['euPosts'],
            'euCategories' => $this->data['euCategories']
        ]);
    }
}



// eu_categories
