<?php

namespace App\Http\Livewire;

use App\Models\User as Users;
use Livewire\Component;
use Livewire\WithPagination;
class User extends Component
{
    use WithPagination;
    public $users;
    public function render()
    {
        $this->users = Users::all();

        return <<<'blade'
            <div>
                {{-- مكون inline  livewire تستطيع كتابة محتوي العرض view --}}
                <title>أول صفحة livewire</title>
                <h1 style="text-align: center;"> بسم الله الرحمن الرحيم وبعد الصلاه والسلام علي سيدنا محمد خير المرسلين</h1>
                <hr>
                <h4 style="text-align: center;"> livewire هذه أول صفحة عرض بأستخدام مكون inline مكون user </h4>
            </div>
        blade;

        return view('livewire.user');
    }
}
