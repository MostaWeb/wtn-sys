@extends('layouts.app')

@section('content')
                      
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="card-title">الموظفين / المستخدمين</h5>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('users.create') }}" style="float:left" class="btn btn-primary" type="button">إضافة مستخدم</a>

                        </div>
                    </div>
                <table id="zero-conf" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>الاسم</th>
                            <th>الصلاحية</th>
                            <th>المسمى الوظيفي</th>
                            <th>الرقم الوظيفي</th>
                            <th>الحالة</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td> @foreach ($user->roles()->get() as $role)
                                {{ $role->display_name }}
                                @endforeach</td>
                            <td>{{ $user->job_name }}</td>
                            <td>{{ $user->emp_number }}</td>
                            <td>{{ $user->status }}</td>
                            <td><a class="text-dark" href="{{ route('users.show', $user->id) }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg> عرض</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                    {{-- <tfoot>
                        <tr>
                            <th>#</th>
                            <th>الاسم</th>
                            <th>المسمى الوظيفي</th>
                            <th>الرقم الوظيفي</th>
                            <th>الحالة</th>
                            <th></th>
                        </tr>
                    </tfoot> --}}
                </table>
            </div>
        </div>
    </div>
</div>
@endsection