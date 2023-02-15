<?php
    
    require_once('connection.php');
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
            $user = $_POST['user'];
            $pass = $_POST['pass'];

            $sql = "select password from users where userName = '$user'";
            $result = mysqli_query($connection, $sql);

            if($result){
                $record = mysqli_fetch_assoc($result);
                if($record['password'] == $pass){
                    $done = '';
                    $_SESSION['userName'] = $user;
                   
                }else{
                    $error = '<div class="alert alert-danger mt-2 mb-2" role="alert">
                    Invalid user name or password!
                  </div>';
                }
            }
       
    }

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDAPZ | INVENTORY MANAGEMENT SYSTEM | LOGIN</title>
    <link rel="icon" type="image/png" href="img/Logo.png">
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="css/stylee.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body style="background-image: url('img/back.jpg')">
    <div id="logdiv">
        <img src="img/Logo.png" style="width:250px; height:250px; margin-top:-40px;" class="img rounded-5" alt="">
        <?php if(!isset($done)) {?>
        <div id="loginDiv" class="border rounded-5 p-5">
       
        <form action="" method="post">
                <h2 class="pb-4" style="color:white;">LOG IN</h2>

                <span><?php if(isset($error)) echo $error?></span>
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="text" class="form-control" placeholder="User Name" name="user" id="user" required/>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="pass"  name="pass" class="form-control" placeholder="Password" />
               
                </div>

        

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4 w-100">Sign in</button>

                <!-- Register buttons -->
                <div class="text-center">

                    <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-google"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                    </button>

            
                </div>
            </form>
            
                
           
                
              
                
        </div>
            <?php }else{?>
            <div class="text-center" style="padding-top:160px; padding-left: 480px; padding-right: 480px;">
                <div class="row">

                <?php if(isset($ab))?><span><?php $ab?></span>
                    <div class="col-6">
                    <button class="bt"><a href="inventory.php" name="inv">INVENTORY</a></button>
                    </div>

                
                    <div class="col-6">
                    <button class="bt"><a href="takeout.php" name="takeout">TAKE-OUTS</a></button>
                    </div>
                   

                 </div>
                       
                        
            </div>

                <?php }?>
    
    </div>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
</body>
<script> $(document).ready(function() {
     $('[title="Hosted on free web hosting 000webhost.com. Host your own website for FREE."]').hide();
 });</script>
</html>

<?php
    mysqli_close($connection);
?>