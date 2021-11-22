@extends('provider.master')

@section('content')
    <span class="btn btn-success" id="add-user">
        افزودن کاربر
    </span>
    <br> <br>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col" class="text-center">ردیف</th>
                <th scope="col" class="text-center">موبایل</th>
                <th scope="col" class="text-center">ایمیل</th>
                <th scope="col" class="text-center">دسترسی</th>
                <th scope="col" class="text-center">وضعیت</th>
                <th scope="col" class="text-center">عملیات</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $key => $user)
                <tr>
                    <td class="text-center" >
                        {{ $key+1 }}
                    </td>
                    <td class="text-center" >                        
                        {{ $user->mobile }}                        
                    </td>
                    <td class="text-center" >
                        {{ $user->email }}
                    </td>
                    <td class="text-center" >
                        {{ $user->getAccessTitle() }}
                    </td>
                    <td class="text-center" >
                        {{ $user->getConfirmedTitle() }}
                    </td>
                    <td class="text-center">
                        <span class="edit-user" id="{{ $user->id }}">
                            <i class="fas fa-edit m-1"></i> 
                        </span>
                        <span class="delete-user" id="{{ $user->id }}">
                            <i class="fas fa-trash m-1"></i>
                        </span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        $("#add-user").click(function(){            
            $("#content").load("/user/create");
        });

        $(".edit-user").click(function(){
            $("#content").load("/user/edit/"+this.id);
        });

        $(".delete-user").click(function(){
            $("#content").load("/user/delete/"+this.id);
        });
    </script>

@endsection