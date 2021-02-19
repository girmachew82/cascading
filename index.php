<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Populate multiple dropdown list using Ajax, jQuery, PHP, and MySQL | Mitrajit's Tech Blog</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
<!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->

<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js.js"></script>
<style>
/*body { background-color: #0a5656 }*/
.post-title { font-size:20px; }
.mtb-margin-top { margin-top: 20px; }
.top-margin { border-bottom:2px solid #ccc; margin-bottom:20px; display:block; font-size:1.3rem; line-height:1.7rem;}
.btn-success {
	cursor:pointer;
}

label {
	display: block;
	width:100%;
}

</style>
</head>

<body>
	<?php include('db.php'); ?>

	<div class="container-fluid mtb-margin-top">
		<div class="row">
			<div class="col-md-12">
				<h1 class="top-margin">Read the full article on -- <a href="" target="_blank" title="Populate multiple dropdown list based on selection of other dropdown list using PHP, jQuery, Ajax and MySQL">Populate multiple dropdown list using Ajax, jQuery, PHP, and MySQL</a> in <a href="http://www.mitrajit.com/" title="Mitrajit's Tech Blog">Mitrajit's Tech Blog</a></h1>
			</div>
		</div>
    </div> 


    <div class="container-fluid">
    	<div class="row">

			<div class="col-xs-12 col-md-sm-6 col-md-3">
				<label>Continent :</label>
				<select name="continent" class="form-control" id="continent">
					<option value=''>------- Select --------</option>
					<?php 
					$sql = "select * from `continents`";
					$res = mysqli_query($con, $sql);
					if(mysqli_num_rows($res) > 0) {
						while($row = mysqli_fetch_object($res)) {
							echo "<option value='".$row->continent_id."'>".$row->continent."</option>";
						}
					}
					?>
				</select>
			</div>

			<div class="col-xs-12 col-md-sm-6 col-md-3">
				<label>Country :</label>
				<select name="country" class="form-control" id="country" disabled="disabled"><option>------- Select --------</option></select>
			</div>


			<div class="col-xs-12 col-md-sm-6 col-md-3">
				<label>State / Province / County :</label>
				<select name="state" class="form-control" id="state" disabled="disabled"><option>------- Select --------</option></select>
			</div>


			<div class="col-xs-12 col-md-sm-6 col-md-3">
				<label>City / Popular Place :</label>
				<select name="city" class="form-control" id="city" disabled="disabled"><option>------- Select --------</option></select>
			</div>
		</div>
	</div>
	
</body>
</html>
