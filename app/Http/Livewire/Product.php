<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Product extends Component
{
    public $name;
    public $title;
    public $infos=[];

    public function mount(){
        $this->infos[] ='Application is mounting.......';
    }

    public function hydrate(){
        $this->infos[] ='Application is hydrating.......';
    }
    public function updating($name,$value){
        $this->infos[] ='Application is updating.......';
    }
    public function updated($name,$value){
        $this->infos[] ='Application is updated.......';
    }
    public function updatingName(){
        $this->infos[] ='Application is updating Name Property.......';
    }
    public function updatedName(){
        $this->infos[] ='Application is updated Name Property.......';
    }

    public function render()
    {
        return view('livewire.product');
    }
}
