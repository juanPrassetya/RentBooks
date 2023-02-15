<!doctype html>
<html lang="en">
  <head>
  @extends ('layouts.main')
@section('tittle','juan')
  	<title> Benned Users | Pages</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="assets/img/logoadmin.png" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="cssa/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="active">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
				<div class="p-4">
		  		<h1><a href="index.html" class="logo">Admin</a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li class="">
	            <a href="pageadmin"><span class="fa fa-home mr-3"></span> Dashboard</a>
	          </li>
	          <li class = "active">
	              <a href="user"><span class="fa fa-user mr-3"></span> User</a>
	          </li>
	          <li>
              <a href="book"><span class="fa fa-book mr-3"></span> Book</a>
	          </li>
	          <li>
              <a href="categories"><span class="fa fa-sticky-note mr-3"></span>category Books</a>
	          </li>
			  <li>
              
	          <li>
              <a href="rentlog"><span class="fa fa-sticky-note mr-3"></span>RentLog  </a>
	          </li>
	          <li>
              <a href="logout"><span class="fa fa-arrow-left mr-3 "></span> Logout</a>
	          </li>
			  
	        </ul>

	        

	      </div>
    	</nav>

        
		<div id="content" class="p-4 p-md-5 pt-5">
       <center> <h6 class="mb-4">List User Benned</h6></center> 
	   <!-- <div class="mt-4 d-flex justify">
	   <a href="" class="btn btn-danger me-3">Ben User</a>
</div> -->
<div class="mt-4 d-flex justify-content-end">
	<a href="/user" class="btn btn-danger me-3">Back</a>
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
						 <th>Address</th>
						
					</tr>
				</thead>
				<tbody>
				@foreach($userBenned as $value)
				<tr>
					<td>{{$loop->iteration}}</td>
					<td>{{$value->username}}</td>
					<td>{{$value->phone}}</td>
					<td>{{$value->address}}</td>
					<td>
						<a href="/users-restore/{{$value->slug}}" class="btn btn-success">Restore User</a>
						
					</td>
				</tr>
				@endforeach
			
		
		

    <script src="jsa/jquery.min.js"></script>
    <script src="jsa/popper.js"></script>
    <script src="jsa/bootstrap.min.js"></script>
    <script src="jsa/main.js"></script>
  </body>
</html>