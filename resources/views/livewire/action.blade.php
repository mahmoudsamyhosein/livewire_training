<div dir="rtl" style="text-align: center">
    {{-- شرح الأفعال actions --}}
    <button type="button" wire:click='AddTwoNumbers(32,100)'>
        جمع 
    </button>
    <br>
    <textarea  placeholder="رسالتك" wire:keydown.enter='display_message($event.target.value)'></textarea>
    <br>
    <form wire:submit.prevent='getsum'>
    رقم 1 :<input type="text" name="num1" wire:model='num1'>
    رقم 2 :<input type="text" name="num2"  wire:model='num2'>
        <button type="submit">أدخال</button>
    </form>
    <h1> المجموع : {{$sum}} </h1>
    <br>
    <h1>الرسالة : {{ $message }}</h1>
</div>
