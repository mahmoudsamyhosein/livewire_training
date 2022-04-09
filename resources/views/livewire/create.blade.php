<div dir="rtl" style="text-align: right">
    <title>الأعدادات</title>
    {{-- الأعدادات --}}
    <section >
        <div class="container">
            <div class="row">
                <div class="col-m-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">الأعدادات</h3>
                        </div>
                        <div class="card-body">
                            @if(session()->has('message'))
                                <div class="alert alert-success">{{ session('message') }}</div>
                            @endif
                            <form wire:submit.prevent='storedoc' enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 pull-right">
                                        <div class="form-group col-md-3">
                                            <label for="link_introd">رابط المقدمة</label>
                                            <input type="text" name="text" class="form-control" wire:model='link_introd'>
                                            @error('link_introd') <p class="text-danger">{{$message}}</p>@enderror
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="introd">المقدمة</label>
                                            <textarea type="text" name="introd" class="form-control" wire:model='introd'></textarea>
                                            @error('introd') <p class="text-danger">{{$message}}</p>@enderror
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="doc_title">عنوان الوثيقة title </label>
                                            <input type="text" name="text" class="form-control" wire:model='doc_title'>
                                            @error('doc_title') <p class="text-danger">{{$message}}</p>@enderror
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="doc_name">أسم الوثيقة</label>
                                            <input type="text" name="doc_name" class="form-control" wire:model='doc_name'>
                                            @error('doc_name') <p class="text-danger">{{$message}}</p>@enderror
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group col-md-4">
                                                <label for="doc_color">لون الوثيقة</label>
                                                <input type="text" name="doc_color" class="form-control" wire:model='doc_color'>
                                                @error('doc_color') <p class="text-danger">{{$message}}</p>@enderror
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="image_alt"> للصورة alt</label>
                                                <input type="text" name="image_alt" class="form-control" wire:model='image_alt'>
                                                @error('image_alt') <p class="text-danger">{{$message}}</p>@enderror
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="image_cover">صورة الغلاف</label>
                                                <input type="file" name="image_cover" class="form-control" wire:model='image_cover' >
                                                @error('image_cover') <p class="text-danger">{{$message}}</p>@enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12" >
                                            <div class="form-group col-md-6">
                                                <label for="copy_right_link">رابط حقوق الملكية</label>
                                                <input type="text" name="text" class="form-control" wire:model='copy_right_link'>
                                                @error('copy_right_link') <p class="text-danger">{{$message}}</p>@enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="copy_right">حقوق الملكية</label>
                                                <input type="text" name="text" class="form-control" wire:model='copy_right'>
                                                @error('copy_right') <p class="text-danger">{{$message}}</p>@enderror
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
