<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Doc;

class MainPage extends Component
{
    public function render()
    {
        $setting = Doc::find(1);
        return view('livewire.main-page',['setting' => $setting]);
    }
}
