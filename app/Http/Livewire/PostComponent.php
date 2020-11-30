<?php

namespace App\Http\Livewire;

use Livewire\Component;
use TCG\Voyager\Models\Post;

class PostComponent extends Component
{
    public $post;

    public function mount($slug)
    {
        $this->post = Post::where('slug', $slug)->first();
    }

    public function render()
    {
       
        return view('livewire.post-component')->layout('layouts.master');
    }
}
