
<?php include 'config.php';?>

<!doctype html>
<html lang="en">
	<head>
		<?php include 'components/header.php';?>
		
		<title>Flick | Bollywood Movies</title>
	</head>
	<body>
		<?php include 'components/navbar.php';?>

		<div class="container">

			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Bollywood Movies
						<small>Now Showing</small>
					</h1>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li class="active">Bollywood Movies</li>
					</ol>
				</div>
			</div>
			<?php
			$sql="select * from  movies ";
			$qry2=mysqli_query($conn,$sql);
			while($m=mysqli_fetch_array($qry2))
                   {
					   ?>
			<div class="row">
				<div class="col-md-7">
				<?php
						
						?>
					<a href="moviedetail.php?MovieName=<?php echo $m['MovieName'];?>">
						<img class="img-responsive img-hover poster" src="<?php echo $m['attach'];?>" alt=""/>
					</a>
				</div>
				<div class="col-md-5">
					<h3><?php echo $m['MovieName'];?></h3>
					<h4><i class="fa fa-star"></i> <?php echo $m['Ratings'];?></h4>
					<h4> <?php echo $m['Description'];?></h4>
					 <p>
					 
					</p>
					<a class="btn btn-danger" href="moviedetail.php?MovieName=<?php echo $m['MovieName'];?>">View Timings</a>
				</div>
			</div>
			<hr>
			<?php	
		}
		?>
			

  	</div>

	  <div>
	    <p class="spacer"></p>
	  </div>

		<?php include 'components/footer.php';?>
	</body>
</html>
