

  	<title>Dashboard | Edit Categories</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="assets/img/logoadmin.png" rel="icon">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	
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
              
	          </li>
	          <li>
              <a href="logout"><span class="fa fa-arrow-left mr-3 "></span> Logout</a>
	          </li>
	        </ul>

	        

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
       <center> <h2 class="mb-4"> Edit Categories Page</h2></center> 
	   @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
       <form action="/categories-edit/{{$category->slug}}" method="post" class= "mt-4">
    @csrf
@method ('put')
           <label for="name"><i class="form-label"></i></label>
           <input type="text" name="name" id="name"  value = "{{$category->name}}"/>
       <button type="submit">Save Category</button>
       </form>
      </div>
		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>		    
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

    <script src="jsa/jquery.min.js"></script>
    <script src="jsa/popper.js"></script>
    <script src="jsa/bootstrap.min.js"></script>
    <script src="jsa/main.js"></script>
  </body>
</html>