<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">  
    <title>درخواست های سرویس دهنده</title>
</head>
<body>
    <div class="container py-5">
        <div class="col-md-6 py-5">
            <div class="card">
                <div class="card-header">
                    لیست درخواست های {{ $provider->getSexTitle() }} {{ $provider->fname }} {{ $provider->lname }}
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">ردیف</th>
                                <th scope="col" class="text-center">نام سرویس</th>
                                <th scope="col" class="text-center">نام بیمار</th>
                                <th scope="col" class="text-center">عملیات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($patient_requests as $key => $patient_request)
                                <tr>
                                    <td class="text-center" >
                                        {{ $key+1 }}
                                    </td>
                                    <td class="text-center" >
                                        {{ $patient_request->name }}
                                    </td>
                                    <td class="text-center" >                                                                
                                        {{ $patient_request->fname }} {{ $patient_request->lname }}
                                    </td>
                                    <td class="text-center">
                                        <span class="editpatient" id="">
                                            <i class="fas fa-edit m-1"></i> 
                                        </span>
                                        <span class="deletepatient" id="">
                                            <i class="fas fa-trash m-1"></i>
                                        </span>
                                    </td>
                                </tr>
                            @endforeach                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>