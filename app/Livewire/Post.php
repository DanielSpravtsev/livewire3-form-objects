<?php

namespace App\Livewire;

use App\Livewire\Forms\PostForm;
use Livewire\Component;

class Post extends Component
{
    public PostForm $form;

    public function submit()
    {
        $this->form->save();
    }

    public function mount()
    {
        $this->form->fillFormWithDummyData();
    }

    public function render()
    {
        return view('livewire.post');
    }
}
