@extends('master')

@section('content')
    <div class="card">
        <div class="card-header">
            افزودن سرویس دهنده
        </div>
        <div class="card-body">
            <form id="providerCreate">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="row">                                
                    <div class="col-md-4 mt-2">
                        <label for="fname">نام :</label> 
                        <input type="text" class="form-control mt-1" id="fname" name="fname">                                        
                    </div>
                    <div class="col-md-4 mt-2">
                        <label for="lname">نام خانوادگی :</label> 
                        <input type="text" class="form-control mt-1" id="lname" name="lname">                                        
                    </div>
                    <div class="col-md-4 mt-2">
                        <label for="nationalcode">کد ملی :</label> 
                        <input type="text" class="form-control mt-1" id="nationalcode" name="nationalcode">                                        
                    </div>
                    <div class="col-md-4 mt-2">
                        <label for="sex">جنسیت :</label> 
                        <input type="text" class="form-control mt-1" id="sex" name="sex">                                        
                    </div>
                    <div class="col-md-4 mt-2">
                        <label for="birthday">تاریخ تولد :</label> 
                        <input type="text" class="form-control mt-1" id="birthday" name="birthday">                                        
                    </div>
                    <div class="col-md-4 mt-2">
                        <label for="married">وضعیت تاهل :</label> 
                        <input type="text" class="form-control mt-1" id="married" name="married">                                        
                    </div>
                    <div class="col-md-4 mt-2">
                        <label for="tel">تلفن :</label> 
                        <input type="text" class="form-control mt-1" id="tel" name="tel">                                        
                    </div>
                    <div class="col-md-4 mt-2">
                        <label for="user_id">شخص مورد نظر :</label> 
                        <input type="text" class="form-control mt-1" id="user_id" name="user_id">                                        
                    </div>
                </div>
                <input class="btn btn-primary mt-4" type="submit" value="ذخیره">
            </form>
        </div>
    </div>

    <script>

        $("#providerCreate").submit(function(e){
            e.preventDefault();
            
            var fname = $("#fname").val();
            var lname = $("#lname").val();
            var nationalcode = $("#nationalcode").val();
            var birthday = $("#birthday").val();
            var sex = $("#sex").val();
            var married = $("#married").val();
            var tel = $("#tel").val();
            var user_id = $("#user_id").val();           
            var _token = $("input[name=_token]").val();           

            var data = {
                fname: fname,
                lname: lname,
                nationalcode: nationalcode,
                birthday: birthday,
                sex: sex,
                married: married,
                tel: tel,
                user_id: user_id,
                _token: _token,
            }

            console.log(data);
            $.ajax({
                type: "POST",        
                dataType: "json", 
                url:"/provider/store",        
                data:data,        
                success:function(data){        
                    alert("عملیات با موفقیت انجام شد.");
                }        
            });  

        });
    </script>

@endsection