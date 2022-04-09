<div dir="rtl" style="text-align: right;">
    <style>
        nav svg{
            max-height:20px;
        }
    </style>
   
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">                       
                            <div class="row" style="margin-top:10px;">
                                <div class="col-md-2 pull-right" style="margin-top: 5px;">
                                   كل التلاميذ
                                </div>
                                <div class="col-md-2 " style="margin-top: 5px;">
                                    <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#addStudentModal">أضافة تلميذ جديد</button>
                                    
                                </div>
                                <div class="col-md-2">
                                    <div class="form-outline">
                                      <input type="search" id="form1" class="form-control" wire:model='searchTerm' placeholder="بحث ..." />
                                    </div>
                                    
                                </div>
                            </div>                      
                        </div>
                        <div class="card-body">
                            @if(Session::has('message'))
                                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                            @endif
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <td>الأسم الأول</td>
                                        <td>الأسم الأخير</td>
                                        <td>البريد الألكتروني</td>
                                        <td>الموبايل</td>
                                        <td>أجراء</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($students as $student)
                                        <tr>
                                            <td>{{$student->firstname}}</td>
                                            <td>{{$student->lastname}}</td>
                                            <td>{{$student->email}}</td>
                                            <td>{{$student->phone}}</td>
                                            <td>
                                                <button wire:click="edit({{$student->id}})" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#updateStudentModal">تعديل</button>
                                                <button wire:click="delete({{$student->id}})" class="btn btn-danger btn-sm">حذف</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{$students->links()}}
                        </div>
                        <div wire:ignore.self class="modal fade" id="updateStudentModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="modal-title">
                                           تحديث تلميذ
                                        </div>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true close-btn">x</span> 
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form >                    
                                            <div class="form-group">
                                                <label for="firstname">الأسم الأول</label>
                                                <input type="text" name="firstname" class="form-control" wire:model="firstname" />
                                                @error('firstname') <span class="text-danger error">{{$message}}</span> @enderror
                                            </div>
                        
                                            <div class="form-group">
                                                <label for="lastname">الأسم الأخير </label>
                                                <input type="text" name="lastname" class="form-control" wire:model="lastname" />
                                                @error('lastname') <span class="text-danger error">{{$message}}</span> @enderror
                                            </div>
                        
                                            <div class="form-group">
                                                <label for="email">البريد الألكتروني</label>
                                                <input type="text" name="email" class="form-control" wire:model="email" />
                                                @error('email') <span class="text-danger error">{{$message}}</span> @enderror
                                            </div>
                        
                                            <div class="form-group">
                                                <label for="phone">رقم الموبايل</label>
                                                <input type="text" name="phone" class="form-control" wire:model="phone" />
                                                @error('phone') <span class="text-danger error">{{$message}}</span> @enderror
                                            </div>                    
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">أغلاق</button>
                                        <button type="button" wire:click.prevent="update()" class="btn btn-primary">حفظ التعديلات</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div wire:ignore.self class="modal fade" id="addStudentModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="modal-title">
                                            أضافة تلميذ جديد
                                        </div>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true close-btn">x</span> 
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form >
                                            <div class="form-group">
                                                <label for="firstname">الأسم الأول</label>
                                                <input type="text" name="firstname" class="form-control" wire:model="firstname" />
                                                @error('firstname') <span class="text-danger error">{{$message}}</span> @enderror
                                            </div>
                        
                                            <div class="form-group">
                                                <label for="lastname">الأسم الأخير</label>
                                                <input type="text" name="lastname" class="form-control" wire:model="lastname" />
                                                @error('lastname') <span class="text-danger error">{{$message}}</span> @enderror
                                            </div>
                        
                                            <div class="form-group">
                                                <label for="email">البريد الألكتروني</label>
                                                <input type="text" name="email" class="form-control" wire:model="email" />
                                                @error('email') <span class="text-danger error">{{$message}}</span> @enderror
                                            </div>
                        
                                            <div class="form-group">
                                                <label for="phone">الموبايل</label>
                                                <input type="text" name="phone" class="form-control" wire:model="phone" />
                                                @error('phone') <span class="text-danger error">{{$message}}</span> @enderror
                                            </div>                    
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">أغلاق</button>
                                        <button type="button" wire:click.prevent="store()" class="btn btn-primary">حفظ التعديلات</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>