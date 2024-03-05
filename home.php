<?php
	include "header.php";
	include "menu.php";
	$con = mysqli_connect("localhost","root","","email");
	if(isset($_POST['txtsen']))
	{
		$sen = $_POST['txtsen'];
		$rev = $_POST['txtrev'];
		$sub = $_POST['txtsub'];
		$cont = $_POST['txtcont'];
		$sql = "INSERT INTO `inbox_mail`(`sender`,`receiver`,`subject`,`content`) VALUES ('$sen','$rev','$sub','$cont')";
		$res = mysqli_query($con,$sql);
	}
?>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Inbox</h1>
			<form action="home.php" method="POST">
				<input type="text" name="txtsen" class="form-control mt-2" placeholder="Enter Sender Name" required>
				<input type="text" name="txtrev" class="form-control mt-2" placeholder="Enter Receiver Name" required>
				<input type="text" name="txtsub" class="form-control mt-2" placeholder="Enter Subject " required>
				<textarea name="txtcont" class="form-control mt-2 " placeholder="Enter Contant"></textarea>
				<input type="submit" value="Send" class="btn btn-primary w-100 mt-2">
			</form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

<?php
	include "footer.php"
?>
