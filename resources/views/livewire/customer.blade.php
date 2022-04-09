<div>
    {{-- The best athlete wants his opponent at his best. --}}
</div>
<div>
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
                                        @foreach ($customers as $customer)
                                            <tr>
                                                <td>{{$customer->id}}</td>
                                                <td>{{$customer->name}}</td>
                                                <td>{{$customer->email}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            {{ $customers->links() }}        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
