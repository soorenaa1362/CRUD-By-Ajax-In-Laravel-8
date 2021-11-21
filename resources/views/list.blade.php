@extends('master')

@section('content')
    <span class="btn btn-success" id="add-provider">
        افزودن سرویس دهنده
    </span>
    <br> <br>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col" class="text-center">ردیف</th>
                <th scope="col" class="text-center">نام و نام خانوادگی</th>
                <th scope="col" class="text-center">کد ملی</th>
                <th scope="col" class="text-center">وضعیت تاهل</th>
                <th scope="col" class="text-center">تلفن</th>
                <th scope="col" class="text-center">عملیات</th>
            </tr>
        </thead>
        <tbody>
            @foreach($providers as $key => $provider)
                <tr>
                    <td class="text-center" >{{ $key+1 }}</td>
                    <td class="text-center" >
                        @if ($provider->sex == 1)
                            خانم
                        @else
                            آقای
                        @endif
                        {{ $provider->fname }} {{ $provider->lname }}                        
                    </td>
                    <td class="text-center" >{{ $provider->nationalcode }}</td>
                    <td class="text-center" >{{ $provider->married }}</td>
                    <td class="text-center" >{{ $provider->tel }}</td>
                    <td class="text-center">
                        <span class="editProvider" id="{{ $provider->id }}">
                            <i class="fas fa-edit m-1"></i> 
                        </span>
                        <span class="deleteProvider" id="{{ $provider->id }}">
                            <i class="fas fa-trash m-1"></i>
                        </span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        $("#add-provider").click(function(){
            $('#content').load("provider/create");
        });

        $(".editProvider").click(function(){
            $("#content").load("/provider/edit/"+this.id);
        });

        $(".deleteProvider").click(function(){
            $("#content").load("/provider/delete/"+this.id);
        });

    </script>

@endsection