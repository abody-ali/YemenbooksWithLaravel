<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 1;

    public function addcount() {
        $this->count++;
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
