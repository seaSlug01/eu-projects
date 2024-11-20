<?php

namespace App\Livewire;

use Carbon\Carbon;
use App\Models\EuPost;
use Livewire\Component;
use Illuminate\Support\Facades\Log;
use Barryvdh\Debugbar\Facades\Debugbar;

class EuPosts extends Component
{
    public $postId;
    public $euPost;

    public function mount($id)
    {
        $this->postId = $id;
        $this->euPost = EuPost::find($this->postId);

        if ($this->euPost) {
            $this->euPost->partners = json_decode($this->euPost->partners, true);

            $monthsCount = Carbon::parse($this->euPost->starts_from)->diffInMonths(Carbon::parse($this->euPost->ends_at));
            $this->euPost->starts_from = Carbon::parse($this->euPost->starts_from)->format('d-m-Y');
            $this->euPost->ends_at = Carbon::parse($this->euPost->ends_at)->format('d-m-Y');
            $this->euPost->program_duration = intval($monthsCount);
        }

        if (!$this->euPost) {
            abort(404, "Post not found");
        }
    }

    public function render()
    {
        return view('livewire.eu-posts', [
            'euPost' => $this->euPost,
        ]);
    }
}
