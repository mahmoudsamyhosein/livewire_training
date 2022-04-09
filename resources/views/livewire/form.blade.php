<div dir="rtl" style="text-align: right">
    {{-- مكون للتعامل مع الاستمارات forms --}}
    الأسم: <br>
    <input type="text" wire:model.debounce.1000ms ="name" /><br>
    الرسالة: <br>
    <textarea wire:model='message'></textarea><br>
    <br>
    الحالة الأجتماعية :
    أعزب  <input type="radio" value="أعزب"    wire:model='marital_state'>
    متزوج <input type="radio" value="متزوج"   wire:model='marital_state'>
    <br>
     اللون المفضل: 
     أحمر <input type="checkbox" value="أحمر" wire:model='colors'>
     أخضر <input type="checkbox" value="أخضر" wire:model='colors'>
     أزرق <input type="checkbox" value="أزرق" wire:model='colors'>
    <br>
    الفاكهة المضلة :
    <select wire:model='fruit'>
        <option value="">أختر فاكهتك المفضلة :</option>
        <option value="تفاح">تفاح</option>
        <option value="فراولة">فراولة</option>
        <option value="مانجا">مانجا</option>
    </select>


    <h1>يتم عرض نتيجة الفورم هنا </h1>
    <hr>
    الأسم: {{$name}}<br>
    الرسالة: {{$message}}<br>
    الحالة الأجتماعية: {{$marital_state}}
    <br>
    اللون المفضلة: 
    <br>
    <ul>
        @foreach ($colors as $color)
            {{$color}}
        @endforeach
    </ul>
    <br>
    الفاكهة المفضلة: {{$fruit}}

</div>
