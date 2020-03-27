<?php 
	$con = new mysqli('localhost','root','','aplikasi_kp');
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Autoload</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
pt>
</head>
<body>
	<div class="tempat">
           Ini div yang akan di refresh dengan jquery .
    		

    		<?php $sql = $con->query("SELECT * FROM kelas");
    		while ($d = $sql->fetch_object()) { ?>
    			<li><?php echo $d->id	 ?></li>
    		<?php } ?>

    <div>


<script type="text/javascript">
    function autoRefreshPage()
    {
        window.location = window.location.href;
    }
    setInterval('autoRefreshPage()', 1000);
</script>

</body>
</html>