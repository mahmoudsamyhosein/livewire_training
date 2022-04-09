<div>
    <style>
        nav svg{
            max-height:20px;
        }
    </style>
    {{-- المستخدمين --}}
    <section dir="rtl" style="text-align: right">
        <div class="container">
            <div class="row">
                <div class="col-m-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3>المستخدمين</h3>
                        </div>
                        <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>الأسم</th>
                                            <th>البريد الالكتروني</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
