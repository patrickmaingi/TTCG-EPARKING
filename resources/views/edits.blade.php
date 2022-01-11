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
                        update details
                    </div>
                    <div class="card-body p-5">
                        @if(isset($success))
                        <p>{{$success}}</p>
                        @endif
                        <form  method="post" action="/edit/save" >
                            @csrf
                            <input type="text" name="id" hidden value="{{ $detail[0]->id}}">
                            <div class="form-group">
                                <label for="username">parking zone</label>
                                <input type="text" value="{{ $detail[0]->parking_zone}}" class="form-control" name="parking_zone">
                            </div>
                            <div class="form-group">
                                <label for="username">vehicle type</label>
                                <input type="text" value="{{ $detail[0]->vehicle_type}}" class="form-control" name="vehicle_type">
                            </div>
                            <div class="form-group">
                                <label for="username">vehicle number plate</label>
                                <input type="text" value="{{ $detail[0]->plate_number}}" class="form-control" name="plate_number">
                            </div>
                            <div class="form-group">
                                <label for="username">Amount paid</label>
                                <input type="text" value="{{ $detail[0]->amount_paid}}" class="form-control" name="amount_paid">
                            </div><br>
                            <button class="btn btn-primary p-1">Update information</button>
                        </form>   
                    </div>
                </div>

            </div>
    </div>
    
</body>
</html>