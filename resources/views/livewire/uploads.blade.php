<div>
    {{--  رفع ملف--}}
    <section dir="rtl" style="text-align: right">
        <div class="container">
            <div class="row">
                <div class="col-m-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3> رفع ملف</h3>
                        </div>
                        @if(Session()->has('message'))
                            <div class="alert alert-success">{{ Session('message') }}</div>
                        @endif
                        <div class="card-body">
                            <form wire:submit.prevent='fileupload' id="fileupload">
                                @csrf
                                <div class="form-group">
                                    <label for="title">الاسم</label>
                                    <input type="title" name="title" class="form-control" wire:model='title'>
                                    @error('title')
                                     <p class="text-danger">{{$message}}</p>   
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="filename">الملف</label>
                                    <input type="file" name="file_name" class="form-control" wire:model='file_name'>
                                    @error('file_name')
                                    <p class="text-danger">{{$message}}</p>   
                                   @enderror
                                </div>
                                
                                <button type="submit" class="btn btn-success" style="margin-top: 5px;">أرسال</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
