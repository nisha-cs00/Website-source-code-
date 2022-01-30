<div class="row">
<?php
require('productdb.php');
include('addnewproduct.php');
include('editproduct.php');
include('deleteproduct.php');
 
 $stmt = $DB_con->prepare('SELECT id, pimage, pname, pcost FROM productinfo ORDER BY id DESC');
 $stmt->execute();
 
 if($stmt->rowCount() > 0)
 {
  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
  {
   extract($row);
   ?>
   <div class="col-xs-3">
    <p class="page-header"><?php echo $pname."&nbsp;/&nbsp;".$pcost; ?></p>
    <img src="images/<?php echo $row['pimage']; ?>" class="img-rounded" width="250px" height="250px" />
    <p class="page-header">
    <span>
    <a class="btn btn-info" href="editproduct.php?edit_id=<?php echo $row['id']; ?>" title="click for edit" onclick="return confirm('sure to edit ?')"><span class="glyphicon glyphicon-edit"></span> Edit</a> 
    <a class="btn btn-danger" href="deleteproduct.php ?>?delete_id=<?php echo $row['id']; ?>" title="click for delete" onclick="return confirm('sure to delete ?')"><span class="glyphicon glyphicon-remove-circle"></span> Delete</a>
    </span>
    </p>
   </div>       
   <?php
  }
 }
 else
 {
  ?>
        <div class="col-xs-12">
         <div class="alert alert-warning">
             <span class="glyphicon glyphicon-info-sign"></span> &nbsp; No Data Found ...
            </div>
        </div>
        <?php
 }
 
?>
</div>
