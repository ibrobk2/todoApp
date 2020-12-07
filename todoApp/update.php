<?php 
include 'server.php';
//include 'index.php';

$id = $_GET['id'];

$sql = "SELECT * FROM tasks WHERE id='$id'";
$rows = $db->query($sql);



$row = $rows->fetch_assoc();

  if(isset($_POST['send'])){
    $task = $_POST['update'];

    $sql = "UPDATE tasks SET name = '$task' WHERE id='$id'";

    $db->query($sql);
    header("location: index.php");
  }

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Task</title>

	<link rel="stylesheet" type="text/css" href="file:///E:/xampp/htdocs/todoApp/bootstrap/css/bootstrap.min.css">

	<script type="text/javascript" src="file:///E:/xampp/htdocs/todoApp/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="file:///E:/xampp/htdocs/todoApp/jquery/jquery.js"></script>
	
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style type="text/css">
  .container{
    text-align: center;
  }
</style>

</head>
<body>
	<div class="container" style="width: 40%" >
		<h1 style="text-align: center; margin-top: 70px;">Update Task</h1>
    <hr>
		
			<form action="#" method="post" >
            <label>Task Name</label>

            <input type="text" name="update" class="form-control" value="<?php echo $row['name'];?>"><br>


        		<input type="submit" name="send" class="btn btn-success" value="Update Task">
        		
        	</div>

        </form>
      </div>
      
    </div>

  </div>
</div>

  


				
			</div>
			
		</div>
	</div>


</body>
</html>