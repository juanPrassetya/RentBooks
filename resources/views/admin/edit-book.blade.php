
@extends ('layouts.main')
@section('tittle','juan')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  	<title>Dashboard | Edit Book</title>
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
				
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
       <center> <h6 class="mb-4">Edit Books pages</h6></center> 
	
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
    @method('put')
      <label for="book_code"
      class="form-lable">Book Code</lable>
      <input type="text" name="book_code" id="book_code" class="form-control" placeholder="Book Code" value="{{$books->book_code}}">
<br><br>
    <label for="tittle" >  title</label>
    <input type="text" name="tittle" id="tittle" class="form-control 2" placeholder="tittle" value="{{$books->tittle}}">
<br> <br>
    <label for="status" class="form-lable">Status</lable>
    <input type="text" name="status" id="status" class="form-control" placeholder="status">
<br> <br> 

<label for="categories" class="form-label">  Category</label>
    <select name="categories[]" id="categories" multiple="multiple" class="form-control tes">
<!-- ini untuk memannggil data data kategori yang tersedia di $categories yang udah di buat di admin controller bagian booksadd -->
        @foreach($categories as $item)
        <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
    </select><br>
<!-- 

    <label for="categories" class="form-label">  Category</label>
    <label for="listcategory" id="categories" multiple="multiple" class="form-label" >

<ul> 
    @foreach($books->categories as $category)
    <li>
        {{$category->name}}
    </li>
    @endforeach
</ul> -->

   
    <label for="currentCover" class="form-label">Current Cover</label>
    @if($books->cover != '')
    <input type="file" name="image" id="image" class="form-control w-500" >
	<!-- ini bagian cover (menampilkan gambar) , kita harus manggil foto yang ada di public di storage--> 
	<img src="{{asset('storage/cover/'.$books->cover)}}" alt="" width="120px">
		<!-- jika value cover kosong maka akan menampilkan gambar covernotfound -->
	@else
	<img src="covernot.png" alt="" width="50px">
	@endif
    </div>
   
    <br>
    <button type="submit" class="btn btn-primary">Update</button>
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