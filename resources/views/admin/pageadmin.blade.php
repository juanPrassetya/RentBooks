<!doctype html>
<html lang="en">
  <head>
  @extends ('layouts.main')
@section('tittle','juan')
  	<title>Dashboard Admin</title>
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
		  		<h1><a href="index.html" class="logo">Dashboard</a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#"><span class="fa fa-home mr-3"></span> Dashboard</a>
	          </li>
	          <li>
	              <a href="user"><span class="fa fa-user mr-3"></span> User</a>
	          </li>
	          <li>                       
              <a href="book"><span class="fa fa-book mr-3"></span> Book</a>
	          </li>
	          <li>
              <a href="categories"><span class="fa fa-sticky-note mr-3"></span>category Books</a>
	          </li>
              <li>
              <a href="rentlog"><span class="fa fa-sticky-note mr-3"></span>RentLog  </a>
	          </li>
			  <li>
              
	          </li>
	          <li>
              <a href="logout"><span class="fa fa-arrow-left mr-3 "></span> Logout</a>
	          </li>
	        </ul>

	        

	      </div>
    	</nav>

       
      <div id="content" class="p-4 p-md-5 pt-5">
	  <!-- {{Auth::user()->username}} ini buat manggil nama sesuai nama yang udah di gunakan untuk login -->
         <center> <h6 class="mb-4">   Welcome, {{Auth::user()->username}}</h6></center> 


	   <div class="section-admin container-fluid">
            <div class="row admin ">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                                <h4 class="text-left text-uppercase"><b>  Category</b></h4> 
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-3 mar-bot-15 text-left">
									<label class="label bg-red">3% <i class="fa fa-level-" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-left no-margin">{{$kategori}}</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 3%;" class="progress-bar bg-green"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12" style="margin-bottom:1px;">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Books</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-red">4% <i class="fa fa-level-" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">{{$book_count}}</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 4%;" class="progress-bar progress-bar-danger bg-red"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>User</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-blue">3% <i class="fa fa-level-" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">{{$user_count}}</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 3%;" class="progress-bar bg-blue"></div>
                                </div>
                            </div>
                        </div>
                       
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>        
        


		<!-- table rent log -->
		<div class="mt-4">
			<table class="table">
				<thead>
					<tr>
						<th>no</th>
						<th>user</th>
						<th>book tittle</th>
						<th>Rent date</th>
						<th>Return date</th>
						<th>Actual Return date</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td colspan="7" class="text-center">No Data</td>
					</tr>
				</tbody>
			</table>
		</div>

    <script src="jsa/jquery.min.js"></script>
    <script src="jsa/popper.js"></script>
    <script src="jsa/bootstrap.min.js"></script>
    <script src="jsa/main.js"></script>
  </body>
</html>