@extends('layouts.app')

@section('content')
    
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">إضافة مستخدم</h5>
                <form method="post" action="{{ route('users.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                      <label for="username" class="col-sm-2 col-form-label">إسم المستخدم</label>
                      <div class="col">
                        <input type="text" class="form-control" id="username" name="username" required>
                      </div>
                
                      <label for="password" class="col-sm-2 col-form-label">كلمة المرور</label>
                      <div class="col">
                        <input type="password" class="form-control" id="password" name="password">
                      </div>
                    </div>
            
            
                     <hr class="mt-5 mb-5">


                    <div class="row mb-3">
                        
                     <label for="name" class="col-sm-2 col-form-label">الإسم</label>
                      <div class="col">
                        <input type="text" class="form-control" id="name" name="name" required>
                      </div>
                      
                      
                      <label for="birthday" class="col-sm-2 col-form-label">تاريخ الميلاد</label>
                      <div class="col">
                        <input type="date" class="form-control" id="birthday" name="date_of_birth">
                      </div>
                    </div>
                    
                    
                    <div class="row mb-3">
                      <label for="phone" class="col-sm-2 col-form-label">رقم الجوال</label>
                      <div class="col">
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                      </div>
               
                      <label for="email" class="col-sm-2 col-form-label">البريد الإلكتروني</label>
                      <div class="col">
                        <input type="email" class="form-control" id="email" name="email" required>
                      </div>
                    </div>
                    
                    
                    <hr class="mt-5 mb-5">

                    <div class="row mb-3">

                      <label for="start" class="col-sm-2 col-form-label"> تاريخ التعيين</label>
                      <div class="col">
                        <input type="date" class="form-control" id="start" name="emp_date">
                      </div>
                      
                      

                      <label for="empNo" class="col-sm-2 col-form-label">الرقم الوظيفي</label>
                      <div class="col">
                        <input type="number" class="form-control" id="empNo" name="emp_number">
                      </div>
                      

                    </div>
                    
            
                      
                    <div class="row mb-3">
                      
                      <label for="jobRole" class="col-sm-2 col-form-label">المسمى الوظيفي</label>
                      <div class="col">
                        <input type="text" class="form-control" id="jobRole" name="job_name" required>
                      </div>
                
                      <label for="department" class="col-sm-2 col-form-label">الإدارة</label>
                          <div class="col">
                        <select class="form-select" name="department_id" aria-label="Default">
                            
                          @foreach ($departments as $department)
                          <option value="{{ $department->id }}"  name="department_id">{{ $department->name }}</option>
                          @endforeach                                             
                                                                                    
                                                                          
                      </select>
                      </div>
                      
                      
                    </div>
                    
                    
                    
                    <div class="row mb-3">
                      <label for="nationality" class="col-sm-2 col-form-label"> الجنسية</label>
                      <div class="col">
                        <input type="text" class="form-control" id="nationality" name="nationality">
                      </div>
                      
                      
                    <label for="region" class="col-sm-2 col-form-label"> المنطقة</label>
                      <div class="col">
                        <input type="text" class="form-control" id="region" name="area">
                      </div>
                      
                   
                    </div>
                    
                    
                    <div class="row mb-3">
                    
                
                      <label for="department" class="col-sm-2 col-form-label">الصلاحية</label>
                          <div class="col-sm-10">
                        <select class="form-select" name="role" aria-label="Default">
                            
                          @foreach ($roles as $role)
                          <option value="{{ $role->name }}"  name="role">{{ $role->display_name }}</option>
                         @endforeach
                                             
                                                                                    
                                                                          
                      </select>
                      </div>
                      
                      
                    </div>

                    
                    
                    <fieldset class="row mb-3" id="status" name="status">
                      <legend class="col-form-label col-sm-2 pt-0">الحالة</legend>
                      <div class="col-sm-10">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="status" id="vecation" value="اجازة" >
                          <label class="form-check-label" for="vecation">
                            إجازة
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="status" id="available" value="متاح">
                          <label class="form-check-label" for="available">
                            متاح
                          </label>
                        </div>
                        
                           <div class="form-check">
                          <input class="form-check-input" type="radio" name="status" id="retired" value="خارج الخدمة">
                          <label class="form-check-label" for="retired">
                            خارج الخدمة
                          </label>
                        </div>


                    </fieldset>
                    
                    <div class="row mb-3">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">الصورة الشخصية</label>
                            <input name="avatar" class="form-control" type="file" id="formFile">
                          </div>
                        
                      </div>
                        
                          
                    <input type="submit" name="save" value="إضافة" class="btn btn-primary">
                  </form>
            </div>
        </div>
    </div>
</div>
@endsection