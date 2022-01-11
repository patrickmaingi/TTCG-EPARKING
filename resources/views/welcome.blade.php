<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <title>TTCG Epayments</title>
</head>
<body>
    <div class="container">
            <div class= "m-5">
            <h4 class="alert alert-success">Welcome to TTCG epayments portal </h4>
            </div>

            <div class="m-5">
                <div class="card">
                    <div class="card-header">
                        Fill in the form below to continue
                    </div>
                    <div class="card-body p-5">
                        @if(isset($success))
                        <p>{{$success}}</p>
                        @endif
                        <form  method="post" action="/save" >
                            @csrf
                            <div class="form-group">
                                <label for="username">parking zone</label>
                                <input type="text" class="form-control" name="parking_zone">
                            </div>
                            <div class="form-group">
                                <label for="username">vehicle type</label>
                                <input type="text" class="form-control" name="vehicle_type">
                            </div>
                            <div class="form-group">
                                <label for="username">vehicle number plate</label>
                                <input type="text" class="form-control" name="plate_number">
                            </div>
                            <div class="form-group">
                                <label for="username">Amount paid</label>
                                <input type="text" class="form-control" name="amount_paid">
                            </div><br>
                            <button class="btn btn-primary p-1">save to proceed with payment</button>

                            <div class="card_body p-5">
                         @if(isset($data))
                                 <table class="table mt-5">
                                  <thead>
                                     <tr>
                                    <th>parking zone</th>
                                    <th>vehicle tpe</th>
                                    <th>vehicle number plate</th>
                                    <th>amount to be paid</th>
                                    <th>valid untill </th>
                                    <th>options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $item)
                                <tr>
                                    <td>{{ $item -> parking_zone}}</td>
                                    <td>{{ $item -> vehicle_type}}</td>
                                    <td>{{ $item -> plate_number}}</td>
                                    <td>{{ $item -> amount_paid}}</td>
                                    <td>{{ $item -> created_at}}</td>
                                     <td><a href="/edit/{{ $item->id}}">Edit</a> || 
                                     <a href="/delete/{{ $item->id}}">Delete</a></td>   
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endif
                        </form>   
                    </div>
                </div>

            </div>
    </div>
    
</body>
</html>