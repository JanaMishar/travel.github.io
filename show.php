<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <?php include 'links.php'; ?>
</head>
<body>

    <table>
    <td>
        <th colspan="4">ID</th>
        <th colspan="4">NAME</th>
        <th colspan="4">EMAIL</th>
        <th colspan="4">PHONE</th>

    </td>


<?php
    include 'connection.php';

   
        $selectquery="select * from finaltour";
        $processquery=mysqli_query($con,$selectquery);
        
        
        while($fetch_data=mysqli_fetch_array($processquery)){
            ?>
            <td>

            <tr colspan="2"> <?php echo $fetch_data['id']; ?></tr>
             <tr colspan="2"> <?php echo $fetch_data['name']; ?></tr>
              <tr colspan="2"> <?php echo $fetch_data['email']; ?></tr>
              <tr colspan="2"> <?php echo $fetch_data['phone']; ?></tr>
              <tr colspan="2"><a href="update.php?id=<?php echo $fetch_data['id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"> update </tr>
                <tr colspan="2"><a href="delete.php?ide=<?php echo $fetch_data['id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"> delete </tr>

             </td>
         </table>
         <br><br>
            <?php

        }



    


?>




</body>
</html>

