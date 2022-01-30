<h2>Hello Admin</h2>

<?php
    include 'cartdb.php';       
    if(isset($_POST["addproduct"])){
        $count=0;
        $product_name = mysqli_real_escape_string($con,$_POST['pname']);
        $p_price = mysqli_real_escape_string($con,$_POST['pprice']);
        $res=mysqli_query($con,"select * from products where product_name='$product_name' && price='$p_price'");
        $count=mysqli_num_rows($res);
        if($count>0){
            echo "Product alredy exist.";
        }else{
            $pr_name=$_POST['pname'];
            $pr_price=$_POST['pprice'];
            $pr_image=$_FILES['pimage'];
            //print_r($pr_image);
            $fname=$pr_image['name'];
            $fpath=$pr_image['tmp_name'];
            $ferror=$pr_image['error'];

            if($ferror==0){
                $dst='images/'.$fname;
                move_uploaded_file($fpath,$dst);
                $query="insert into products(image,product_name,price) values('$dst','$pr_name','$pr_price')";
                $query1=mysqli_query($con,$query);
        }         
    }
}
?>

<?php
  if(isset($_POST['remove_product'])){
    $pr_id=$_POST['product_id'];
    $delete_query="delete from products where id='$pr_id'";
    $query2=mysqli_query($con,$delete_query);
    if($query2){
      $_SESSION['msg']="Deleted";
    }else{
      $_SESSION['msg']="Not deleted";
    }
  }
?>
<!doctype html>
<html lang="en">
  <head>
     <link rel="stylesheet" href="css/dd.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Admin Products</title>
  </head>
  <body>



<div class="modal fade" id="addproducts" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="admin_product.php" method="POST" enctype="multipart/form-data">
        <div class="modal-body">  
            
            <div class="form-group">
                <label>Product Name:</label>
                <input type="text" class="form-control" placeholder="Enter name" name="pname">
            </div>
            <div class="form-group">
                <label>Product Price:</label>
                <input type="text" class="form-control" placeholder="Enter price" name="pprice">
            </div>
            <div class="form-group">
                <label>Product Image:</label>
                <input type="file" class="form-control" name="pimage">
            </div>
        </div>     
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="addproduct" class="btn btn-primary">Add</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="deleteproduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Product Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="admin_product.php" method="POST">
        <div class="modal-body">   
          <input type="hidden" name="product_id" id="delete_id">
          <h5>Are you sure,you want to Remove this product??</h5>          
        </div>     
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
          <button type="submit" name="remove_product" class="btn btn-danger">Yes..Remove</button>
        </div>
      </form>
    </div>
  </div>
</div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light">
                <h1>Products</h1>
            </div>
            <div class="card-body">
                <div class="col-lg-12">
                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#addproducts">Add Product</button>
                </div>         
            </div>
            <div class="col-lg-12">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                            $s_product="select * from products";
                            $resultset = mysqli_query($con, $s_product) or die("database error:". mysqli_error($con));      
                            while( $record = mysqli_fetch_assoc($resultset) ) {
                        ?>
                        <tr>
                        <tr>
                            <td class="pro_id"><?php echo $record['id'];?></td>
                            <td><?php echo $record['product_name']; ?></td>
                            <td><img src="<?php echo $record['image']; ?>" height="150" width="150"></td>
                            <td>Rs.<?php echo $record['price']; ?></td>
                            <td>
                               
                                <button type="button" class="btn btn-outline-danger delete_btn" data-toggle="modal" data-target="#deleteproduct">Remove</button>
                            </td>
                        </tr>
                        <
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function(){
        

        $('.delete_btn').click(function (e){
          e.preventDefault();
          var pro_id=$(this).closest('tr').find('.pro_id').text();
          $('#delete_id').val(pro_id);
          $('#deleteproduct').modal('show');
        });
      });

    </script>
    <div class="footer">
    <div class="menubar">
  <a href="logout.php">Logout</a>
 </div>
</div>
 
  </body>
</html>
