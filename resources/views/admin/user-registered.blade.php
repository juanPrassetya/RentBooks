<!doctype html>
<html lang="en">
  <head>
  @extends ('layouts.main')
@section('tittle','juan')
  	<title>List User Register | Pages</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="assets/img/logocrud2.png" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="cssa/style.css">
  </head>
  <body>
		
		
    	</nav>
        <div id="content" class="p-4 p-md-5 pt-5">
       <center> <h6 class="mb-4">List Register User</h6></center> 
    
<div id="content" class="p-4 p-md-5 pt-5">
        
	   <!-- <div class="mt-4 d-flex justify">
	   <a href="" class="btn btn-danger me-3">Ben User</a>
</div> -->
<div class="mt-4 d-flex justify-content-end">
	<a href="user" class="btn btn-success me-3">Approve User List </a>
</div>
@if (session('status'))
<div class="alert alert-success" >
    <b>{{ session('status') }}  </b>
</div>
@endif
		<div class="mt-5 text-center">
			<table class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>Username</th>
						<th>Phone</th>
                        <th>Password</th>
                        <th>Action</th>
						 
						
					</tr>
				</thead>
				<tbody>
				@foreach($usersRegistered as $item)
				<tr>
					<td>{{$loop->iteration}}</td>
					<td>{{$item->username}}</td>
					<td>{{$item->phone}}</td>
                    <td>{{$item->password}}</td>
					
					<td>
						<a href="/users-detail/{{$item->slug}}" class="btn btn-secondary">Detail</a>
						
					</td>
				</tr>
				@endforeach
			</tbody>