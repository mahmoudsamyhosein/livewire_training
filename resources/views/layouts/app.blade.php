<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('icon-2.png')}}" style="width:24px; height:24px;">
    <link rel="stylesheet" href="{{asset('css/documenter_style.css')}}" media="all">
	<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">

    {{-- أمر أستدعاء ملفات css الخاصة ب livewire --}}
    @livewireStyles
</head>
<body>
    {{-- لعمل rendring for classes or controllers حتي يمكن لك أستدعاء المتغيرات من المتحكمات --}}
    {{$slot}}
    <script src="{{asset('js/jquery.js')}}"></script>
	<script src="{{asset('js/jquery.scrollTo.js')}}"></script>
	<script src="{{asset('js/jquery.easing.js')}}"></script>
	<script src="{{asset('js/script.js')}}"></script>
    {{-- أمر أستدعاء ملفات javascript الخاصة ب livewire --}}
    @livewireScripts
    <script type="text/javascript">
        window.livewire.on('studentAdded',()=>{
            $('#addStudentModal').modal('hide');
        });

        window.livewire.on('studentUpdated',()=>{
            $('#updateStudentModal').modal('hide');
        });
        window.livewire.on('fileuploaded',()=>{
            $('#form-upload')[0].reset();
        });
        window.livewire.on('imagesuploaded',()=>{
            $('#imagesuploaded')[0].reset();
        });
    </script>
</body>
</html>