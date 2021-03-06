<?php

require_once ("../question 1/php/component.php");
require_once ("../question 1/php/operation.php");

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Question 1</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <div class="container text-center">
        <h1 class="py-4 bg-dark text-danger rounded"><i class="fas fa-tv"></i> Solution Of Question 1</h1>
        <div class="d-flex justify-content-center">
            <form action="" method="post" class="w-50">
                <div class="pt-2">
                    <?php inputElement("<i class='fas fa-id-card'></i>","ID", "id",""); ?>
                </div>
                <div class="pt-2">
                    <?php inputElement("<i class='fas fa-signature'></i>","Name", "name",""); ?>
                </div>
                <div class="row pt-2">
                    <div class="col">
                        <?php inputElement("<i class='fas fa-male'></i>","Age", "age",""); ?>
                    </div>
        
                    <div class="col">
                        <?php inputElement("<i class='fas fa-user'></i>","UserName", "username",""); ?>
                    </div>
                
                    <div class="col">
                        <?php inputElement("<i class='fas fa-key'></i>","Password", "password",""); ?>
                    </div>
                   
                </div>
                <div class="d-flex justify-content-center">
                        <?php buttonElement("btn-create","btn btn-primary","<i class='fas fa-plus'></i>","create","data-toggle='tooltip' data-placement='bottom' title='Create'"); ?>
                        <?php buttonElement("btn-read","btn btn-danger","<i class='fas fa-sync'></i>","read","data-toggle='tooltip' data-placement='bottom' title='Read'"); ?>
                </div>
            </form>
        </div>
        <div class="d-flex table-data">
            <table class="table table-striped table-dark">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Username</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                   <?php
                   if(isset($_POST['read'])){
                       $result = getData();
                       if($result){
                           while ($row = mysqli_fetch_assoc($result)){ ?>
                               <tr>
                                   <td> <?php echo $row['id'];?></td>
                                   <td> <?php echo $row['name'];?></td>
                                   <td> <?php echo $row['age'];?></td>
                                   <td> <?php echo $row['username'];?></td>
                                   <td> <?php echo $row['password'];?></td>
                               </tr>
                   <?php
                           }
                       }
                   }
          
                   ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>