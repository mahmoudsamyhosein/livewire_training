<div>
    {{-- رسائل التحقق --}}
    <section dir="rtl" style="text-align: right">
        <div class="container">
            <div class="row">
                <div class="col-m-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3>نموذج التواصل</h3>
                        </div>
                        <div class="card-body">
                            <form wire:submit.prevent='submitform'>
                                @csrf
                                <div class="form-group">
                                    <label for="name">الأسم</label>
                                    <input type="text" name="name" class="form-control" wire:model='name'>
                                    @error('name') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">البريد الألكتروني</label>
                                    <input type="email" name="email" class="form-control" wire:model='email'>
                                    @error('email') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                                <div class="form-group">
                                    <label for="phone">رقم الموبايل</label>
                                    <input type="text" name="phone" class="form-control" wire:model='phone'>
                                    @error('phone') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                                <div class="form-group">
                                    <label for="message">رسالتك</label>
                                    <textarea name="message" class="form-control" wire:model='message'></textarea>
                                    @error('message') <p class="text-danger">{{$message}}</p>@enderror
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
