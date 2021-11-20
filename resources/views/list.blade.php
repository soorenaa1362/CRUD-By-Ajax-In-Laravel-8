@extends('master')

@section('content')
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col" class="text-center">ردیف</th>
                <th scope="col" class="text-center">نام و نام خانوادگی</th>
                <th scope="col" class="text-center">کد ملی</th>
                <th scope="col" class="text-center">وضعیت تاهل</th>
                <th scope="col" class="text-center">تلفن</th>
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
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection