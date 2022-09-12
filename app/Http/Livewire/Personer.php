<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Person;

class Personer extends Component
{
    public $isOpen = 0;
    public $person, $person_id;
    public $personer;
    public function render()
    {
        $this->personer = Person::all();
        return view('livewire.personer');
        //return view('livewire.posts');
    }
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function skolist($id)
    {
        $this->person = Person::findOrFail($id);
        $this->person_id = $id;
        $this->openModal();
    }
    public function openModal()
    {
        $this->isOpen = true;
    }
    public function closeModal()
    {
        $this->isOpen = false;
    }
}
