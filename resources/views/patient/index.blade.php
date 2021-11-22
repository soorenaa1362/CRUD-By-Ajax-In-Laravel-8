@extends('provider.master')

@section('content')
    
    <div class="row">
        <div class="col-md-3" style="background-color: #71bdca;">
            <h6 class="py-3 px-2">کلینیک پردیس</h6>
            <ul class="py-3">
                <li class="nav-item active">                    
                    <i class="fas fa-medkit" style="color: #eee;"></i>
                    <span id="provider-list" style="color: #eee;" class="btn"> سرویس دهنده ها </span>                    
                </li>
                <li class="nav-item active">                    
                    <i class="fas fa-bed" style="color: #eee;"></i>
                    <span id="patient-list" style="color: #eee;" class="btn"> بیماران </span>                    
                </li>
            </ul>
        </div>
        <div class="col-md-9" style="background: #eee;">
            <div id="content">

            </div>
        </div>
    </div>

    <script>
        $("#provider-list").click(function(){
            $("#content").load("/provider/list");
        });

        $("#patient-list").click(function(){            
            $("#content").load("/patient/list");
        });
    </script>

@endsection