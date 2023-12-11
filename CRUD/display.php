<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display data</title>
    <link rel="stylesheet" href="style.css">

    <style>
        table th,td{
    padding: 10px;
    border: 1px solid white;
    color:white;
      }
      a,div{
        color:white;
      }
     </style>
</head>

<body>

    <h1>DISPLAY DATA</h1>
    <a href="index.php">BACK</a>
 
    <!-- <table> 
      <thead>
        <th>id</th>
        <th>username</th>
        <th>email</th>
        <th>mobile</th>
        <th>address</th>  
        <th>operation</th>  
      </thead>
      <tbody> -->

      <?php
      $display_data = mysqli_query($conn,"SELECT * FROM `phpcrud`");
      $num=1;// 1:11:20 variablecreat bez id value 1,2,3,4 print honasti

      if(mysqli_num_rows( $display_data)>0){//mysqli_num_rows database madhun data kiti ahe tey check karte
       echo" <table>
          <thead>
             <th>id</th>
             <th>username</th>
             <th>email</th>
             <th>mobile</th>
             <th>address</th>  
             <th>operation</th>  
          </thead>
     ";
        
      while($row = mysqli_fetch_assoc( $display_data)){//mysqli_fetch_assoc -database mdli value fetch karto
        // $row['userName'];//only username print
        ?>
        
         <tbody>
          <tr>
        <!-- <td><?php echo $row['id'] ?></td> --> 
        <td><?php echo $num ?></td>
        <td><?php echo $row['userName'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['mobile'] ?></td>
        <td><?php echo $row['address'] ?></td>
        <td>
         <a href="delete.php?delete= <?php echo $row['id']?>" 
         onclick="return confirm('are you sure delete data');" > Delete</a>
         <a href="">Edit</a>
        </td>
       </tr> 
    <?php  
    $num++; 
    }
      }else {
        echo "<div>NO DATA</div>";
      }
      ?>

        
      </tbody>
    </table>
</body>
</html>