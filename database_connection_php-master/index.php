<?php

require_once("config/db.php");
$query = "select * from registration";
$result = mysqli_query($cons,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data facth from database</title>
    <link rel="stylesheet" href="css/boostrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display6 text-center" >facth data from database in php</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-white">
                            <td>user id</td>
                            <td>First name</td>
                            <td>Last name</td>
                            <td>Gender </td>
                            <td>Email </td>
                            <td>Password </td>
                            <td>Phone no </td>
                            </tr>
                            <tr>
                            <?php
                            while($row = mysqli_fetch_assoc($result))
                            {
                        ?>      
                            <td><?php echo $row ['id'];  ?></td>
                            <td><?php echo $row ['firstName'];  ?></td>
                            <td><?php echo $row ['lastName'];  ?></td>
                            <td><?php echo $row ['gender'];  ?></td>
                            <td><?php echo $row ['email'];  ?></td>
                            <td><?php echo $row ['password'];  ?></td>
                            <td><?php echo $row ['number'];  ?></td>
                         
                          

                        </tr>
                        <?php
                        }
                        ?>
                            
                            

                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html> 