<?php
include('config.php');

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>





<button class="btn btn-danger"><a style="text-decoration: none; color: white;" href="additem.php">ADD ITEM</a></button>


    <table class="table">
        <thead>
          <tr>
            <th scope="col">SNO</th>
            <th scope="col">Names</th>
            <th scope="col">Quantities</th>
            <th scope="col">Prices</th>
          
          </tr>
        </thead>
        <tbody>

        <?php

$sql = "SELECT * FROM `items`";

$query = mysqli_query($conn,$sql);

$count = mysqli_num_rows($query);

if($count>0)
{
    while($row = mysqli_fetch_assoc($query))
    {


        $sid = $row['ID'];
        $iname = $row['Item Name'];
        $quantity = $row['Quantity'];
        $price = $row['Price'];

echo '<tr>';
    echo '<th scope="row">' .  $sid .'</th>';
    echo '<td>' . $iname . '</td>';
    echo '<td>' . $quantity . '</td>';
    echo '<td>' . $price . '</td>';
    echo '<td>';
      echo  '<button class="btn btn-info"><a style="text-decoration: none;color: aliceblue;" href="update.php?updateid='.$sid.'">Update</a></button>';
    
    echo '</td>';
 echo '</tr>';
        


    }
}

            else{
    
        echo "Error Occurs";
    
}


?>
         
</tbody>
</table>


   









</body>

</html>