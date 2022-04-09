<div>
    {{--  --}}
    الأسم : <input type="text" wire:model='name'><br>
    العنوان : <input type="text" wire:model='title'><br>
    <h3>الأسم : {{$name}}</h3>
    <br>
    <h3>العنوان : {{$title}}</h3>
    <br>
    <h3>
        طرق دورة حياة الخطفات 
    </h3>
    @foreach($infos as $info)
        <h4>{{$info}}</h4>
    @endforeach
</div>
