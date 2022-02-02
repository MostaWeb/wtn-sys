@extends('layouts.app')

@section('content')
    
<div class="row">
    <div class="col-xl-12">
        <div class="profile-cover"></div>
        <div class="profile-header">
            <div class="profile-img">
                <img src="{{ asset("storage/$user->avatar") }}" alt="">
            </div>
            <div class="profile-name">
                <h3 class="m-0">{{ $user->name }}</h3>
                <h5>{{ $user->job_name }}</h5>
            </div>
            <div class="profile-header-menu file-manager-menu label-menu">
                <ul class="list-unstyled m-0 p-0"><li class="w-100">
                <a style="margin-right:-15px"><i class="bg-success"></i> {{ $user->status }}</a>
            </li></ul>
            </div>
        </div>
    </div>
</div>



  <div class="row">


  <div class="col-md-12 col-lg-4">
    <div class="card">
      <div class="card-body">
          <ul class="list-unstyled profile-about-list">
              <li><i class="far fa-compass m-l-xxs"></i><span>{{ $user->emp_number }}<p>1</p></span></li>

          </ul>
      </div>
  </div>

  </div>
  
  
        <div class="col-md-12 col-lg-4">
    <div class="card">
      <div class="card-body">
          <ul class="list-unstyled profile-about-list">
              <li><i class="far fa-clock m-l-xxs"></i><span>تاريخ الإلتحاق <p>{{ $user->emp_date }}</p></span></li>

          </ul>
      </div>
  </div>

  </div>
  
  
        <div class="col-md-12 col-lg-4">
    <div class="card">
      <div class="card-body">
          <ul class="list-unstyled profile-about-list">
              <li><i class="far fa-edit m-l-xxs"></i><span> تاريخ الميلاد<p>{{ $user->date_of_birth }}</p></span></li>

          </ul>
      </div>
  </div>

  </div>
  


  <div class="col-md-12 col-lg-12">
                  <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">معلومات التواصل</h5>
                        <ul class="list-unstyled profile-about-list">
                            <li><i class="far fa-envelope m-l-xxs"></i><span>{{ $user->email }}</span></li>
                            <li><i class="far fa-address-book m-l-xxs"></i><span>{{ $user->phone }}</span></li>

                        </ul>
                    </div>
                </div>

</div>


                
<div class="col-md-12 col-lg-12">
                  <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">تعديل كلمة المرور</h5>
                        
                        <form method="post">
                        <div class="row mb-3">
                          <label for="password" class="col-sm-2 col-form-label">كلمة المرور</label>
                          <div class="col">
                            <input type="password" class="form-control" id="password" name="password">
                          </div>
                        </div>
                            <input type="submit" name="update" value="تعديل" class="btn btn-primary">
                    </form>
                    
                    </div>
                </div>

</div>


</div>


         
         
         
@if($user->id != 1)
<form method="post" action="{{ route('users.destroy', $user->id) }}">
@method('delete')
@csrf
<button type="submit" name="delete" value="delete" class="btn btn-danger w-100">حذف المستخدم</button>
</form>
@endif
 

                    


@endsection