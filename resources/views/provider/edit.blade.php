@extends('provider.master')

@section('content')
    <div class="card">
        <div class="card-header">
            ویرایش سرویس دهنده
        </div>
        <div class="card-body">
            <form id="providerUpdate"> 
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />                
                <input type="hidden" name="id" value="{{ $provider->id }}" />  
                <div class="row">                                
                    <div class="col-md-4 mt-2">
                        <label for="fname">نام :</label> 
                        <input type="text" class="form-control mt-1" id="fname" name="fname" 
                            value="{{ $provider->fname }}">                                        
                    </div>
                    <div class="col-md-4 mt-2">
                        <label for="lname">نام خانوادگی :</label> 
                        <input type="text" class="form-control mt-1" id="lname" name="lname" 
                            value="{{ $provider->lname }}">                                        
                    </div>
                    <div class="col-md-4 mt-2">
                        <label for="nationalcode">کد ملی :</label> 
                        <input type="text" class="form-control mt-1" id="nationalcode" name="nationalcode" 
                            value="{{ $provider->nationalcode }}">                                        
                    </div>
                    <div class="col-md-4 mt-2">
                        <label for="sex">جنسیت :</label> 
                        <!-- <input type="text" class="form-control mt-1" id="sex" name="sex">                                         -->
                        <select class="form-control" name="sex" id="sex">                            
                            <option value="0">آقا</option>
                            <option value="1">خانم</option>
                        </select>
                    </div>
                    <div class="col-md-4 mt-2">
                        <label for="birthday">تاریخ تولد :</label> 
                        <input type="text" class="form-control mt-1" id="birthday" name="birthday" 
                            value="{{ $provider->getdateJalali() }}">                                        
                    </div>
                    <div class="col-md-4 mt-2">
                        <label for="married">وضعیت تاهل :</label> 
                        <!-- <input type="text" class="form-control mt-1" id="married" name="married">                                         -->
                        <select class="form-control" name="married" id="married">
                            <option value="0">مجرد</option>
                            <option value="1">متاهل</option>
                        </select>
                    </div>
                    <div class="col-md-4 mt-2">
                        <label for="tel">تلفن :</label> 
                        <input type="text" class="form-control mt-1" id="tel" name="tel" 
                            value="{{ $provider->tel }}">                                        
                    </div>
                    <div class="col-md-4 mt-2">
                        <label for="user_id">شخص مورد نظر :</label> 
                        <!-- <input type="text" class="form-control mt-1" id="user_id" name="user_id">                                         -->
                        <select class="form-control" name="mainId" id="user_id">
                            <option value="1">خودم</option>
                            <option value="2">همسر</option>
                            <option value="3">فرزند</option>
                            <option value="4">پدر</option>
                            <option value="5">مادر</option>
                            <option value="6">برادر</option>
                            <option value="7">خواهر</option>
                            <option value="8">غیره</option>
                        </select>
                    </div>
                </div>
                <input class="btn btn-primary mt-4" type="submit" value="ویرایش">
            </form>
        </div>
    </div>

    <script>
        $("#providerUpdate").submit(function(e){
            e.preventDefault();
            
            var fname = $("#fname").val();            
            var lname = $("#lname").val();            
            var nationalcode = $("#nationalcode").val();            
            var birthday = $("#birthday").val();            
            var sex = $("#sex").val();            
            var married = $("#married").val();            
            var tel = $("#tel").val();            
            var user_id = $("#user_id").val();  
            var id = $("input[name=id]").val(); 
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
                id: id,
                _token: _token,
            }            
                        
            $.ajax({
                type: "POST",        
                dataType: "json", 
                url:"/provider/store",        
                data:data,        
                success:function(data){        
                    alert("ok");
                }  
            });

        });
    </script>

@endsection