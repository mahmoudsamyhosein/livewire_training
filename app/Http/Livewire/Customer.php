<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;


class Customer extends Component
{
    use WithPagination;
    public function render()
    {
        $customers = User::paginate(12);
        return view('livewire.customer',[ 'customers' => $customers]);
    }
}
