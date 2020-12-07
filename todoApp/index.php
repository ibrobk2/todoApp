<!DOCTYPE html>
<?php 
include 'server.php';

/*

$page = (isset($_GET['page']) ? $_GET['page'] : 1);
$perpage = (isset($_GET['per-page']) && ($_GET['per-page'])<=50 ? $_GET['per-page'] : 5);
$start = ($page>1) ? ($page*$perpage)-$perpage : 0;

$sql = "select * from tasks limit".$start.",".$perpage."";


 $total =  $db->query("SELECT * FROM tasks")->num_rows;
 $pages = ceil($page/$perpage);


 */

 $sql = "select * from tasks";

 $rows = $db->query($sql);
 ?>


<html>
<head>
	<title>Todo List App: By IbroBk</title>

	<link rel="stylesheet" type="text/css" href="file:///E:/xampp/htdocs/todoApp/bootstrap/css/bootstrap.min.css">

	<script type="text/javascript" src="file:///E:/xampp/htdocs/todoApp/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="file:///E:/xampp/htdocs/todoApp/jquery/jquery.js"></script>
	
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



</head>
<body>
	<div class="container">
		<h1 style="text-align: center; margin-top: 70px;">Todo List</h1>
    <hr>
		<div class="row" >
			
			<div class="col-md-10 col-md-offset-1">
				
				<table class="table">
              <!-- Trigger the modal with a button -->
					<button type="button" class="btn btn-success" data-target="#myModal" data-toggle="modal">Add Task</button>
				

					<button type="button" class="btn btn-primary pull-right">Print</button>
					<br><br>

			



<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      	<h3 class="modal-title">Add Task</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        <form method="post" action="insert.php">
        	<div class="form-group">
        		<label>Task Name</label>
        		<input type="text" name="task" class="form-control"><br>
        		<input type="submit" name="send" class="btn btn-success" value="Add Task">
        		
        	</div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Task Name</th>
      <th scope="col" class="row-md-2">Action</th>
    
    </tr>
  </thead>
  <tbody>
    <tr>
    	<?php 
      	while ($row = $rows->fetch_assoc()) :
       ?>
      <th scope="row"><?php echo $row['id']; ?></th>
      


      <td class="col-md-10"><?php echo $row['name']; ?></td>
     
      <td><a href="update.php?id=<?php echo$row['id']; ?>" class="btn btn-primary">Edit</a></td>
      <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
      
    </tr>
<?php endwhile; ?>
    
  </tbody>
</table>
        <div style="text-align: center;">
          <ul class="pagination"><li><a href="#"></a>1</li></ul>
        </div>
				
			</div>
			
		</div>
	</div>


</body>
</html>