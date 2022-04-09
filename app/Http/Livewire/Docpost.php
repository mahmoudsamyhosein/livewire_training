<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Docpost extends Component
{
    public $image;
    public $link;
    public $link_subject;
    public $pre;
    // public function genaeratlink(){
        
    // }
    // public function generateslug(){
    //     $this->slug = Str::slug($this->name,'-');
    // }
    public function render()
    {
        return view('livewire.docpost');
    }
}
