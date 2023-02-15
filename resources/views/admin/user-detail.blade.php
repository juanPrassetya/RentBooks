<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@if (session('status'))
<div class="alert alert-success" >
    <b>{{ session('status') }}  </b>
</div>
@endif
    <div class="mt-4 d-flex justify-content-end">
        @if($user->status == 'inactive')
        <a href="/users-approve/{{$user->slug}}" class="btn btn-primary me-3">Approve</a> <br>
        <a href="/users-registered" class="btn btn-danger me-3">back</a>
        @else
        <a href="/user" class="btn btn-danger me-3">back</a>
        @endif
    </div>
<br>
    <div class="mt-4">
        <div class="mb-3"> 
        <label for="" class="form-label">Username</label>
        <input type="text" class="form-control" readonly value="{{$user->username}}" >
        </div> <br>
        <div class="mb-3"> 
        <label for="" class="form-label">Phone</label>
        <input type="text" class="form-control" readonly value="{{$user->phone}}" >
        </div> <br>
        <div class="mb-3"> 
        <label for="" class="form-label">Address</label>
        <input type="text" class="form-control" readonly value="{{$user->address}}" >
        </div> <br>
        <div class="mb-3"> 
        <label for="" class="form-label">Status</label>
        <input type="text" class="form-control" readonly value="{{$user->status}}" >
        </div>
    </div>
</body>
</html>