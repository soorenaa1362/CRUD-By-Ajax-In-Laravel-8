@extends('provider.master')

@section('content')
    <div class="card">
        <div class="card-header">
            ویرایش کاربر
        </div>
        <div class="card-body">
            <form id="userUpdate"> 
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />                
                <input type="hidden" name="id" value="{{ $user->id }}" />  
                <div class="row">                                
                    <div class="col-md-6 mt-2">
                        <label for="email">ایمیل :</label> 
                        <input type="text" class="form-control mt-1" id="email" name="email" 
                            value="{{ $user->email }}" disabled>                                        
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="mobile">موبایل :</label> 
                        <input type="text" class="form-control mt-1" id="mobile" name="mobile" 
                            value="{{ $user->mobile }}" disabled>                                        
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="access">دسترسی :</label> 
                        <!-- <input type="text" class="form-control mt-1" id="access" name="access">                                         -->
                        <select class="form-control mt-1" name="access" id="access">                            
                            <option value="1">کاربر عادی</option>
                            <option value="2">منشی</option>
                            <option value="3">سرویس دهنده</option>
                            <option value="4">مدیر</option>
                        </select>
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="confirmed">وضعیت :</label> 
                        <!-- <input type="text" class="form-control mt-1" id="confirmed" name="confirmed">                                         -->
                        <select class="form-control mt-1" name="confirmed" id="confirmed">
                            <option value="0">غیرفعال</option>
                            <option value="1">فعال</option>
                        </select>
                    </div>
                </div>
                <input class="btn btn-primary mt-4" type="submit" value="ویرایش">
            </form>
        </div>
    </div>

    <script>
        $("#userUpdate").submit(function(e){
            e.preventDefault();
            
            var access = $("#access").val();            
            var confirmed = $("#confirmed").val();  
            var id = $("input[name=id]").val(); 
            var _token = $("input[name=_token]").val(); 

            var data = {
                access: access,
                confirmed: confirmed,
                id: id,
                _token: _token,
            }            
                        
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