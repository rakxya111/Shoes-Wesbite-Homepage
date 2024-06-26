<?php
include("header.php");
session_start();
require_once('db.php');

$sql = "SELECT * FROM items";
$result = mysqli_query($conn1, $sql);
$total = 0;
$id=0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>MY CART</h1>
            </div>
        </div>
        <div class="col-lg-8">
            <table class="table">
                <thead class="text-center">
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Product ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Remove</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        $total += $row['price'];
                       
                    ?>
                        <tr>
                            


                        <td>
                            <div>
                            <img src="shoes/<?php echo $row['img']; ?>" width="90px" height="70px"></div></td>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['Item_name']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td>
                                <form action="mycart.php" method="post">
                                    <button class="btn btn-sm btn-outline-danger" name="Remove_item">Remove</button>
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                </form>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                    <tr>
                        <td colspan="3">Total Price</td>
                        <td><?php echo $total; ?></td>
                        <td><a href="items.php" class="btn btn-sm btn-outline-success">Add Item</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

<?php
// Handle form submission for removing items
if (isset($_POST['Remove_item'])) 
{
    $id= $_POST['id'];
 require_once('db.php');
    $sql = "DELETE FROM items WHERE id = $id";
    if ($conn1->query($sql) === TRUE) 
    {
        echo "
        <script>
        alert('Item Successfully Deleted.');
        window.location.href='mycart.php';
        </script>";
    
      }
       else {
        echo "Error deleting record: " . $conn1->error;
      }
     
      
      $conn->close();
    
}
?>
