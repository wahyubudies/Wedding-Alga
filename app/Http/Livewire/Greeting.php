<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Greeting extends Component
{
    public $name, $location, $attendance = 0, $text;

    protected $rules = [
      'name' => 'required',
      'location' => 'required',
      'attendance' => 'required', 
      'text' => 'required'
    ];

    public function render()
    {
        return view('livewire.greeting');
    }

    public function submit()
    {
        $this->validate();
        
    }
}
