<!doctype html>
<html lang="en">
  <head>
  @extends ('layouts.main')
@section('tittle','juan')
  	<title>Books Pages</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="assets/img/logocrud2.png" rel="icon">
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
	          <li class=" ">
	            <a href="pageadmin"><span class="fa fa-home mr-3"></span> Dashboard</a>
	          </li>
	          <li>
	              <a href="user"><span class="fa fa-user mr-3"></span> User</a>
	          </li>
	          <li class = "active">
              <a href="book"><span class="fa fa-book mr-3"></span> Book</a>
	          </li>
	          <li >
              <a href="categories"><span class="fa fa-sticky-note mr-3"></span>category Books</a>
	          </li>
			  <li>
              
	          </li>
	          <li>
              <a href="logout"><span class="fa fa-arrow-left mr-3 "></span> Logout</a>
	          </li>
			  <li>
              <a href="rentlog"><span class="fa fa-sticky-note mr-3"></span>RentLog  </a>
	          </li>
	        </ul>

	        

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
       <center> <h6 class="mb-4">Books Pages</h6></center> 
	
<div class="mt-4 d-flex justify-content-end">
	<a href="/books-add" class="btn btn-success">Add Books</a>
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
						<th>Book Code</th>
						<th>Tittle</th>
						 <th>cover</th>
						<th>category</th>
						<th>status</th>
					</tr>
				</thead>
		
<tbody>
	@foreach($book as $value)
	<tr>
		<!-- loop iteration ini buat kalau misalkan di php my admin kan klo datanya di hapus bakal tetep no urutnya kalo ini nyusun -->
<td>{{$loop->iteration}}</td>
<td>{{$value->book_code}}</td>
<td>{{$value->tittle}}</td>
<td>
	<center> 
	<!-- tanda seru itu sselain yang kosong -->
	@if($value->cover != '')
	<!-- ini bagian cover (menampilkan gambar) , kita harus manggil foto yang ada di public di storage--> 
	<img src="{{asset('storage/cover/'.$value->cover)}}" alt="" width="120px">
		<!-- jika value cover kosong maka akan menampilkan gambar covernotfound -->
	@else
	<!-- <img src="covernot.png" alt="" width="50px"> -->
	<p class="inactive">"Gambar Kosong"</p>
	@endif
	</center>
</td>

<td>
	<!-- ini buat menampilkan pilihan kategori yang kita pilih tadi -->
	@foreach ($value->categories as $category)
{{$category ->name}} <br>
	@endforeach
</td>

<td>{{$value->status}}</td>
<td>
	<!-- ini kenapa pake $item, karena itu di atas pake as $item makanya di ambil pake $ item -->
	<a href="/books-edit/{{$value->slug}}"><span class="fa fa-pencil mr-3" ></span></a>
	<a href="/books-delete/{{$value->slug}}"><span class="fa fa-trash mr-3 alert-danger" ></span></a>
	
	
</td>
	</tr>
	@endforeach
</tbody>

			</table>
		</div>
      </div>
		</div>
		
		

    <script src="jsa/jquery.min.js"></script>
    <script src="jsa/popper.js"></script>
    <script src="jsa/bootstrap.min.js"></script>
    <script src="jsa/main.js"></script>
  </body>
</html>