<div dir="rtl" style="text-align: right">
    {{-- الأعدادات --}}
    <section >
        <div class="container">
            <div class="row">
                <div class="col-m-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">اضافة محتوي جديد</h3>
                        </div>
                        <div class="card-body">
                            @if(Session()->has('message'))
                                <div class="alert alert-success">{{ Session('message') }}</div>
                            @endif
                            <form wire:submit.prevent='storedoc'>
                                @csrf
                                <div class="row">
                                    <div class="col-md-12" >
                                        <div class="form-group col-md-6">
                                            <label for="link">الرابط</label>
                                            <input type="text" name="text" class="form-control" wire:model='link'>
                                            @error('link') <p class="text-danger">{{$message}}</p>@enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="link_subject">موضوع الرابط</label>
                                            <input type="text" name="text" class="form-control" wire:model='link_subject'>
                                            @error('link_subject') <p class="text-danger">{{$message}}</p>@enderror
                                        </div>
                                        <div class="col-md-12" >
                                            <div class="form-group col-md-6">
                                                <label for="image">صورة</label>
                                                <input type="text" name="image" class="form-control" wire:model='image'>
                                                @error('image') <p class="text-danger">{{$message}}</p>@enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="image">صورة</label>
                                                <input type="text" name="image" class="form-control" wire:model='image'>
                                                @error('image') <p class="text-danger">{{$message}}</p>@enderror
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-group col-md-6">
                                                <label for="image">صورة</label>
                                                <input type="text" name="image" class="form-control" wire:model='image'>
                                                @error('image') <p class="text-danger">{{$message}}</p>@enderror
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                               
                                <button type="submit" class="btn btn-success" style="margin-top: 5px;">حفظ</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
