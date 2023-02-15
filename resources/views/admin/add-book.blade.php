
  @extends ('layouts.main')
@section('tittle','juan')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  	<title>Dashboard | Add Book</title>
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
	        </ul>

	        

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
       <center> <h6 class="mb-4">Books pages</h6></center> 
	
<div class="mt-4 d-flex justify-content-end">
	
</div>
@if (session('status'))
<div class="alert alert-success" >
    <b>{{ session('status') }}  </b>
</div>
@endif
<div class="mt-4 d-flex justify-content-end">
	<a href="book" class="btn btn-danger">Back</a>
</div>

 <!-- ini pakai multipart biar bisa masukin file gambar -->
<form action="" method="post" enctype="multipart/form-data">
    @csrf
      <label for="book_code"
      class="form-lable">Book Code</lable>
      <input type="text" name="book_code" id="book_code" class="form-control" placeholder="Book Code">

    <label for="tittle" >  title</label>
    <input type="text" name="tittle" id="tittle" class="form-control 2" placeholder="tittle">

    <label for="status" class="form-lable">Status</lable>
    <input type="text" name="status" id="status" class="form-control" placeholder="status">

    <label for="categories" class="form-label">  Category</label>
    <select name="categories[]" id="categories" multiple="multiple" class="form-control tes">
<!-- ini untuk memannggil data data kategori yang tersedia di $categories yang udah di buat di admin controller bagian booksadd -->
        @foreach($categories as $item)
        <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
    </select><br>

    <label for="image" class="form-label ">Cover</label>
    <input type="file" name="image" id="image" class="form-control w-500" >
    <br>
    <button type="submit" class="btn btn-primary">Add Books</button>
</form>
		
		

<td>
	
	
	
</td>
	</tr>
	
</tbody>

			</table>
		</div>
      </div>
		</div>
		
		
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
        $('.tes').select2();
        });
    </script>
    </script>
    <script src="jsa/jquery.min.js"></script>
    <script src="jsa/popper.js"></script>
    <script src="jsa/bootstrap.min.js"></script>
    <script src="jsa/main.js"></script>
  </body>
</html>