<?php

namespace App\Http\Livewire;

use Livewire\Component;
use TCG\Voyager\Models\Post;

class HomeComponent extends Component
{

    public function render()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        return view('livewire.home-component',['posts'=>$posts])->layout('layouts.master');
    }
}
