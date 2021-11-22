@extends('provider.master')

@section('content')
    <div class="card">
        <div class="card-header">
            افزودن کاربر
        </div>
        <div class="card-body">
            <form id="userCreate"> 
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />                
                <div class="row">                                
                    <div class="col-md-4 mt-2">
                        <label for="email">ایمیل :</label> 
                        <input type="email" class="form-control mt-1" id="email" name="email">                                        
                    </div>
                    <div class="col-md-4 mt-2">
                        <label for="mobile">موبایل :</label> 
                        <input type="text" class="form-control mt-1" id="mobile" name="mobile">                                        
                    </div>
                    <div class="col-md-4 mt-2">
                        <label for="password">رمز عبور :</label> 
                        <input type="password" class="form-control mt-1" id="password" name="password">                                        
                    </div>
                    <div class="col-md-6 mt-1">
                        <label for="access">دسترسی :</label> 
                        <select class="form-control mt-1" name="access" id="access">                            
                            <option value="1">کاربر عادی</option>
                            <option value="2">منشی</option>
                            <option value="3">سرویس دهنده</option>
                            <option value="4">مدیر</option>
                        </select>
                    </div>
                    <div class="col-md-6 mt-1">
                        <label for="confirmed">وضعیت :</label> 
                        <select class="form-control mt-1" name="confirmed" id="confirmed">
                            <option value="0">غیرفعال</option>
                            <option value="1">فعال</option>
                        </select>
                    </div>
                </div>
                <input class="btn btn-primary mt-4" type="submit" value="ذخیره">
            </form>
        </div>
    </div>

    <script>
        $("#userCreate").submit(function(e){
            e.preventDefault();
            
            var email = $("#email").val();
            var mobile = $("#mobile").val();        
            var password = $("#password") .val();    
            var access = $("#access").val();            
            var confirmed = $("#confirmed").val();              
            var _token = $("input[name=_token]").val(); 

            var data = {
                email: email,
                mobile: mobile,
                password: password,
                access: access,
                confirmed: confirmed,                
                _token: _token,
            }        
            console.log(data);
                        
            $.ajax({
                type: "POST",        
                dataType: "json", 
                url:"/user/store",        
                data:data,        
                success:function(data){        
                    alert("ok");
                }  
            });

        });
    </script>

@endsection