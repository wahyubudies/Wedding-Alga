<?php

namespace App\Http\Livewire;

use App\Models\Greeting as ModelsGreeting;
use Illuminate\Http\Request;
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
        return view('livewire.greeting', [
            'greetings' => ModelsGreeting::select('name', 'location', 'attendance', 'text')->latest()->get()
        ]);
    }

    public function submit()
    {
        $this->validate();
        
        try {            
            $data = new ModelsGreeting();
            $data->name = $this->name;
            $data->location = $this->location;
            $data->attendance = $this->attendance;
            $data->text = $this->text;
            $data->save();

        } catch (\Throwable $th) {
            throw $th;
        }
        session()->flash('message', 'Sukses mengirim ucapan!');
        $this->reset(['name', 'location', 'attendance', 'text']);
    }
}
