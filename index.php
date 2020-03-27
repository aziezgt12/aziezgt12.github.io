<?php  
 $sumber = 'https://api.kawalcorona.com/indonesia/provinsi';
 $konten = file_get_contents($sumber);
 $data = json_decode($konten, true);
	
$url = 'https://api.kawalcorona.com/indonesia';
$json = file_get_contents($url);
$arr = json_decode($json, true);
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- <link rel="stylesheet" type="text/css" href="icons/font-awesome/css/font-awesome.min.css"> -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
	<!-- Image and text --><!-- 
	<nav class="navbar navbar-dark bg-dark" style="display: block; margin: auto;">
	  <a class="navbar-brand" href="#" >
	    <img src="img/logo12.png" width="140" height="50" class="" alt="" >
	  </a>
	</nav> -->

<!-- Just an image -->
		<nav class="navbar navbar-dark bg-dark mb-3" >
			<div class="row">
				<div class="col-6">
					<a class="" href="#"><img src="img/logo12.png" width="140" height="50" alt=""></a>
				</div>
				<div class="col-6">
					<h5 class="mt-3 ml-3 text-white" style="text-align: right;" ><?php echo date('d F Y') ?></h5>
				</div>
			</div>
		</nav>
		 <div class="row m-1">
		 	<div class="col-12">
		 		<div class="card gradient">
		 			<div class="row">
		 			<div class="col-6">
			 			<div class="card-body">
			 				<h3 class="card-title  text-center"><span class="fa fa-plus-square fa-3x gradient-4-text" style="color: red"></span></h3>
			 				<div class=" text-center"><h4> Positif</h4></div><hr>
			 				<h2 class=" text-center"><?php echo $arr[0]['positif']; ?></h2>
			 			</div>
		 			</div>
		 			<div class="col-6">
			 			<div class="card-body">
			 				<h3 class="card-title  text-center"><span class="fa fa-heart fa-3x gradient-4-text" style="color: green"></span></h3>
			 				<div class=" text-center"><h4> Sembuh</h4></div><hr>
			 				<h2 class=" text-center"><?php echo $arr[0]['sembuh']; ?></h2>
			 			</div>
		 			</div>
		 		</div>
		 		</div>
		 	</div>
		 	<div class="col-12">
		 		<div class="card gradient">
		 			<div class="card-body">
		 				<h3 class="card-title text-center"><span class="fa fa-heartbeat fa-3x gradient-4-text" style="color: red"></span></h3>
		 				<div class=" text-center"><h4>Meninggal</h4></div><hr>
		 				<h2 class=" text-center"><?php echo $arr[0]['meninggal']; ?></h2>
		 			</div>
		 		</div>
		 	</div>


		 </div>
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<div class="card-title">
						<h4>Informasi terkini mengenai virus corona</h4>
					</div>
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr style="width: 100%">
									<th>No</th>
                                    <th>Provinsi</th>
                                    <th>Positif</th>
                                    <th>Sembuh</th>
                                    <th>Meninggal</th>
                                 </tr>
                            </thead>
                        	<tbody>
                            		<?php 
                            		$no=1;
	                                 foreach($data as $item) { ?>
                                            <tr>
                                            	<td><?php echo $no++ ?></td>
                                                <td><?php echo $item['attributes']['Provinsi']; ?></td>
                                                <td><?php echo $item['attributes']['Kasus_Posi']; ?></td>
                                                <td><?php echo $item['attributes']['Kasus_Semb']; ?></td>
                                                <td><?php echo $item['attributes']['Kasus_Meni']; ?></td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html><?php  
 $sumber = 'https://api.kawalcorona.com/indonesia/provinsi';
 $konten = file_get_contents($sumber);
 $data = json_decode($konten, true);
	
$url = 'https://api.kawalcorona.com/indonesia';
$json = file_get_contents($url);
$arr = json_decode($json, true);
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- <link rel="stylesheet" type="text/css" href="icons/font-awesome/css/font-awesome.min.css"> -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Hello, world!</title>
    <script>
           setInterval(function() { $(".tempat").load("file.txt"); }, 5000);
    </script>
  </head>
  <body class="tempat">
	<!-- Image and text --><!-- 
	<nav class="navbar navbar-dark bg-dark" style="display: block; margin: auto;">
	  <a class="navbar-brand" href="#" >
	    <img src="img/logo12.png" width="140" height="50" class="" alt="" >
	  </a>
	</nav> -->

<!-- Just an image -->
		<nav class="navbar navbar-dark bg-dark mb-3" >
			<div class="row">
				<div class="col-6">
					<a class="" href="#"><img src="img/logo12.png" width="140" height="50" alt=""></a>
				</div>
				<div class="col-6">
					<h5 class="mt-3 ml-3 text-white" style="text-align: right;" ><?php echo date('d F Y') ?></h5>
				</div>
			</div>
		</nav>
		 <div class="row m-1">
		 	<div class="col-12">
		 		<div class="card gradient">
		 			<div class="row">
		 			<div class="col-6">
			 			<div class="card-body">
			 				<h3 class="card-title  text-center"><span class="fa fa-plus-square fa-3x gradient-4-text" style="color: red"></span></h3>
			 				<div class=" text-center"><h4> Positif</h4></div><hr>
			 				<h2 class=" text-center"><?php echo $arr[0]['positif']; ?></h2>
			 			</div>
		 			</div>
		 			<div class="col-6">
			 			<div class="card-body">
			 				<h3 class="card-title  text-center"><span class="fa fa-heart fa-3x gradient-4-text" style="color: green"></span></h3>
			 				<div class=" text-center"><h4> Sembuh</h4></div><hr>
			 				<h2 class=" text-center"><?php echo $arr[0]['sembuh']; ?></h2>
			 			</div>
		 			</div>
		 		</div>
		 		</div>
		 	</div>
		 	<div class="col-12">
		 		<div class="card gradient">
		 			<div class="card-body">
		 				<h3 class="card-title text-center"><span class="fa fa-heartbeat fa-3x gradient-4-text" style="color: red"></span></h3>
		 				<div class=" text-center"><h4>Meninggal</h4></div><hr>
		 				<h2 class=" text-center"><?php echo $arr[0]['meninggal']; ?></h2>
		 			</div>
		 		</div>
		 	</div>


		 </div>
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<div class="card-title">
						<h4>Informasi terkini mengenai virus corona</h4>
					</div>
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr style="width: 100%">
									<th>No</th>
                                    <th>Provinsi</th>
                                    <th>Positif</th>
                                    <th>Sembuh</th>
                                    <th>Meninggal</th>
                                 </tr>
                            </thead>
                        	<tbody>
                            		<?php 
                            		$no=1;
	                                 foreach($data as $item) { ?>
                                            <tr>
                                            	<td><?php echo $no++ ?></td>
                                                <td><?php echo $item['attributes']['Provinsi']; ?></td>
                                                <td><?php echo $item['attributes']['Kasus_Posi']; ?></td>
                                                <td><?php echo $item['attributes']['Kasus_Semb']; ?></td>
                                                <td><?php echo $item['attributes']['Kasus_Meni']; ?></td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>