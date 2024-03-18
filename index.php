<?php require('./config/products.php'); 

// Create SQL query
$sql = "SELECT id,name, price FROM items";
// Query the db and add the result to a php array
$result = mysqli_query($conn, $sql);
$items = mysqli_fetch_all($result, MYSQLI_ASSOC);
// free resultfrom memory and close SQL connection
mysqli_free_result($result);
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 11-1 table with database records</title>
    <link rel="stylesheet" href="./asset/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <div class="wrapper w3-container">
        <h2>Our Products</h2>
<table class="table w3-table-all w3-large">
    <tr>
        <th><h2>Name</h2></th>
        <th><h2>Price</h2></th>
    </tr>
  <tr>  
  <?php foreach ($items as $item) :  ?>
    <th><?php echo $item["name"]; ?>  
    <th><?php echo $item["price"]; ?>      
   </th>
   </tr>
  <?php endforeach ?>
</table>
</div>
</body>
</html>