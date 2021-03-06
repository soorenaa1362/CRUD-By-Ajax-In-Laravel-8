@extends('provider.master')

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
                    <div class="col-md-4 mt-3">
                        <label for="sex">جنسیت :</label>
                        <div class="row">
                            <div class="form-check col-md-8 mt-1">
                                <input class="" type="radio" name="sex" id="sex" value="0" checked>                            
                                    خانم
                                </input>                            
                            </div>
                            <div class="form-check col-md-4 mt-1">
                                <input class="" type="radio" name="sex" id="sex" value="1">                            
                                    آقا
                                </input>                            
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-2">
                        <label for="birthday">تاریخ تولد :</label> 
                        <!-- <input type="text" class="form-control mt-1" id="birthday" name="birthday">                                         -->                        
                        <input type="text" class="form-control mt-1"
                            id="birthday"
                            name="birthday" 
                            required
                            value="{{(isset($provider)) ? $provider->getdateJalali() : ''}}">
                        <input id="date" name="date" type="hidden"
                            value="{{(isset($provider)) ? $provider->getdateTimestamp() : ''}}">
                    </div>
                    <div class="col-md-4 mt-2">
                        <label for="married">وضعیت تاهل :</label> 
                        <select class="form-control mt-1" name="married" id="married">
                            <option value="0">مجرد</option>
                            <option value="1">متاهل</option>
                        </select>
                    </div>
                    <div class="col-md-4 mt-2">
                        <label for="tel">تلفن :</label> 
                        <input type="text" class="form-control mt-1" id="tel" name="tel">                                        
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

    <script src="{{asset('js/persian-date.min.js')}}"></script>
    <script src="{{asset('js/persian-datepicker.js')}}"></script>
    <script>
        $(document).ready(function () {
            $("#birthday").pDatepicker({
                initialValueType: 'persian',
                initialValue: false,
                format: 'YYYY/MM/DD',
                autoClose: true,
                altField: '#date',
                altFormat: 'X', //timestarmp
            });

        });
    </script>

@endsection
