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
			<form action="outbox.php" method="POST">
				<table class="table table-bordered table-striped">
					<tr>
						<th>Receiver
						<th>Subject
						<th>Date-Time
						<th>Delete
					</tr>
					<?php
							$con = mysqli_connect("localhost","root","","email");
							$sql = "select * from `inbox_mail`";
							$res = mysqli_query($con,$sql);
							while($row=mysqli_fetch_assoc($res)){
							
					?>
					<tr>
						<td><?php echo $row['receiver']; ?>
						<td><?php echo $row['subject']; ?>
						<td><?php echo $row['date_time']; ?>
						<td><a href="">DELETE</a>
					</tr>
					<?php } ?>
				</table>
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
