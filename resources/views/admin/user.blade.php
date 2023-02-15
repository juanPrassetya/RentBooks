<!doctype html>
<html lang="en">
  <head>
  @extends ('layouts.main')
@section('tittle','juan')
  	<title> List Users | Pages</title>
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

        <!-- Page Content  -->
      <!-- <div id="content" class="p-4 p-md-5 pt-5">
       <center> <h2 class="mb-4">List Users</h2></center> 
	   <br>
		<div class="mt-4 d-flex justify-content-end">

			<a href="#" class="btn btn-danger me-5">View Ben User</a>
			<br>
			<a href="#" class="btn btn-primary  me-5">View New User</a>

		</div>
		<div class="mt-4">
		<tabel class="tabel">
			<thead>
				<tr>
					<td>No</td>
					<td>Username</td>
					<td>Phone</td>
					<td>Address</td>
					<td>Action</td>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $value)
				<tr>
					<td>{{$loop->iteration}}</td>
					<td>{{$value->username}}</td>
					<td>{{$value->phone}}</td>
					<td>{{$value->address}}</td>
					<td>
						<a href="" class="btn btn-secondary">Detail</a>
						<a href="" class="btn btn-danger">Ben User</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</tabel>
		</div>
      </div>
		</div> -->
		<div id="content" class="p-4 p-md-5 pt-5">
       <center> <h6 class="mb-4">List User Pages</h6></center> 
	   <!-- <div class="mt-4 d-flex justify">
	   <a href="" class="btn btn-danger me-3">Ben User</a>
</div> -->
<div class="mt-4 d-flex justify-content-end">
	<a href="/users-registered" class="btn btn-success me-3">New Register User</a>
</div>
<div class="mt-4 d-flex justify-content-end">
	<a href="/users-benned" class="btn btn-danger me-3">View Users Benned</a>
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
				@foreach($users as $value)
				<tr>
					<td>{{$loop->iteration}}</td>
					<td>{{$value->username}}</td>
					<td>{{$value->phone}}</td>
					<td>{{$value->address}}</td>
					<td>
						<a href="/users-detail/{{$value->slug}}" class="btn btn-secondary">Detail</a>
						<a href="/users-ben/{{$value->slug}}" class="btn btn-danger">Ben User</a>
					</td>
				</tr>
				@endforeach
			
		
		

    <script src="jsa/jquery.min.js"></script>
    <script src="jsa/popper.js"></script>
    <script src="jsa/bootstrap.min.js"></script>
    <script src="jsa/main.js"></script>
  </body>
</html>