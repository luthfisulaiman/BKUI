<?php 
	include 'head.php';
?>
<nav class="navbar-default navbar-head">
	<div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        
      </div>

      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right menu-top-right" id="nav-right">
        	<li><a href="#"> Back To Home</a></li>
        	<li><a href="#"> FAQ</a></li>
            <li><a href="#">Need Help?</a></li>
        	</ul>
      </div>
    </div>
</nav>	 
<body class="wrapper">

<div id="buy-content">
	<div class="row">
		<a href="../tiket/" class="pull-right">Back To Home</a>
		<br><br>
		<div class="col-md-4">
			<h3>Filter</h3>
			<div class="row">
				<div class="col-md-1">
					<img src ="app/images/move-to-next.png" width="10px;" height="10px;">
				</div>
				<div class="col-md-10">
					<p>Sudah Membayar</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-1">
					<img src ="app/images/move-to-next.png" width="10px;" height="10px;">
				</div>
				<div class="col-md-10">
					<p>Belum Membayar</p>
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<h3 style="text-align: center;">Dashboard Admin</h3>
		<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari Pembeli">
		<table class="table table-responsive" id="myTable">
		  <thead>
		    <tr>
		      <th>No</th>
		      <th>Nama Pemesan</th>
		      <th>Jumlah Pesanan</th>
		      <th>Action</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <th scope="row">1</th>
		      <td>Sandya Sekar</td>
		      <td>1</td>
		      <td><div class="row">
		      <div class="col-md-6">
			      <button id="continue" class="btn btn-pay" style="font-size: 1em;" onclick="window.location.href='view-transaction.php'">View</button>
			  </div>
			  <div class="col-md-6">
			      <button id="continue" class="btn btn-pay" style="font-size: 1em;">Delete</button>
			  </div>
			  </div></td>
		    </tr>
		    <tr>
		      <th scope="row">2</th>
		      <td>Mary Sue</td>
		      <td>2</td>
		      <td>
		      <div class="row">
		      <div class="col-md-6">
			      <button id="continue" class="btn btn-pay" style="font-size: 1em;" onclick="window.location.href='view-transaction.php'">View</button>
			  </div>
			  <div class="col-md-6">
			      <button id="continue" class="btn btn-pay" style="font-size: 1em;">Delete</button>
			  </div>
			  </div>
		      </td>
		    </tr>
		    <tr>
		      <th scope="row">3</th>
		      <td>Gary Stu</td>
		      <td>3</td>
		     <td><div class="row">
		      <div class="col-md-6">
			      <button id="continue" class="btn btn-pay" style="font-size: 1em;" onclick="window.location.href='view-transaction.php'">View</button>
			  </div>
			  <div class="col-md-6">
			      <button id="continue" class="btn btn-pay" style="font-size: 1em;">Delete</button>
			  </div>
			  </div></td>
		    </tr>
		    <tr>
		      <th scope="row">4</th>
		      <td>Gary Stu</td>
		      <td>3</td>
		     <td><div class="row">
		      <div class="col-md-6">
			      <button id="continue" class="btn btn-pay" style="font-size: 1em;" onclick="window.location.href='view-transaction.php'">View</button>
			  </div>
			  <div class="col-md-6">
			      <button id="continue" class="btn btn-pay" style="font-size: 1em;">Delete</button>
			  </div>
			  </div></td>
		    </tr>
		    <tr>
		      <th scope="row">5</th>
		      <td>Gary Stu</td>
		      <td>3</td>
		      <td><div class="row">
		      <div class="col-md-6">
			      <button id="continue" class="btn btn-pay" style="font-size: 1em;" onclick="window.location.href='view-transaction.php'">View</button>
			  </div>
			  <div class="col-md-6">
			      <button id="continue" class="btn btn-pay" style="font-size: 1em;">Delete</button>
			  </div>
			  </div></td>
		     </tr>
		  </tbody>
		</table>
		</div>
	</div>
</div>
</body>
<img src ="app/images/wave.png" class = "img-responsive" style="width: 100%;">
	<footer>
		<p class="text-center">Copyright &copy; 2017. Tim Sistem Informasi BKUI17</p>
	</footer>
	<?php include "foot.php";?>
