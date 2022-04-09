<div>
    {{--  رفع الصور --}}
    <section dir="rtl" style="text-align: right">
        <div class="container">
            <div class="row">
                <div class="col-m-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3>رفع الصور</h3>
                        </div>
                        @if(Session()->has('message'))
                            <div class="alert alert-success">{{ Session('message') }}</div>
                        @endif
                        <div class="card-body">
                            <form wire:submit.prevent='uploadimages' id="imagesuploaded" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="images">أختيار الصور</label>
                                    <input type="file" name="images" class="form-control" wire:model='images' multiple >
                                    @error('images')
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
