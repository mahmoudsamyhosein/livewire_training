<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Action extends Component
{
    public $sum;
    public $num1;
    public $num2;
    public $message;
    public function AddTwoNumbers($num1,$num2){
        $this->sum = $num1 + $num2 ;
    }

    public function display_message($msg){
        $this->message = $msg;
    }

    public function getsum(){
        $this->sum = $this->num1 + $this->num2;
    }
    public function render()
    {
        return view('livewire.action');
    }
}
