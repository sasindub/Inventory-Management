<?php
   
    session_start();
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        if(isset($_GET['submit'])){
            $branch = $_GET['branch'];
            $cat = $_GET['category'];
            $pcode = $_GET['pcode'];
            $pname = $_GET['pname'];
            $serial = $_GET['sno'];

            if($branch != "" && $cat != ""){

                $done = addItems();
              

                
            }else{
                $done = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> Please fill the all fields!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }

           
        }
    }

    function addItems(){

        require_once('connection.php');
        $branch = $_GET['branch'];
        $cat = $_GET['category'];
        $pcode = $_GET['pcode'];
        $pname = $_GET['pname'];
        $serial = $_GET['sno'];

    try{
        $sql = "insert into equipment(product_code, name, category, serial_no, availability, branch) values ('$pcode','$pname', '$cat', '$serial', 'true', '$branch')";
                
        $result = mysqli_query($connection, $sql);

        if($result){
            $done = '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> New item has been added successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }else{
            $done = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Something Went Wrong Please contact the developer.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }

        }catch(Exception $e){
            $done = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Something went wrong, please try a different product code or contact the developer.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        mysqli_close($connection);
        return $done;
    }


 if(isset($_SESSION['userName'])){
   
 
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDAPZ | INVENTORY | ADD NEW ITEM</title>
    <link rel="icon" type="image/png" href="img/Logo.png">
      <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="css/stylee.css">
<link rel="stylesheet" href="css/admin.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>
        
            <nav class="navbar shadow">
            <div class="container">
                <span class="navbar-brand mb-0 h1">

                <a href="inventory.php"><img src="img/Logo1.png" style="height:80px; " class="img" alt=""></a>
                
                </span>

                <div style="float:right;">
                    <a href="logout.php" class="btn btn-outline-danger rounded-5">LOG OUT <i class="fa fa-sign-out" aria-hidden="true"></i> </a>    
                </div>
            </div>
            </nav>

            <div class="text-center mt-5" style="padding-left:500px; padding-right:500px;">

            <?php if(isset($done)){?> 
            
            <?php echo $done; }?> 

              <form action="" method="GET"> 
                <span style="color:black; float:left;"><span style="color:red;">*</span> Branch</span>    
                <div class="input-group mb-3 mt-1">
                <label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-code-branch"></i></label>
                <select class="form-select" id="branch" name="branch">
                        <option value="">Select the branch</option>
                        <option value="Kandy">Kandy</option>
                        <option value="Colombo">Colombo</option>
                </select>
                </div>

                <span style="color:black; float:left;"><span style="color:red;">*</span> Category</span>    
                <div class="input-group mb-3 mt-1">
                <label class="input-group-text" for="inputGroupSelect01"><i class="fa fa-list-alt" aria-hidden="true"></i></label>
                <select class="form-select" id="category" name="category">
                        <option value="">Select the category</option>
                        <option value="Camera">Camera</option>
                        <option value="Lense">Lense</option>
                        <option value="Battery">Battery</option>
                        <option value="Charger">Charger</option>
                        <option value="Tripod">Tripod</option>
                        <option value="Stand">Stand</option>
                        <option value="Light">Light</option>
                        <option value="Mic">Mic</option>
                        <option value="Audio Interface">Audio Interface</option>
                        <option value="Wire Code">Wire Code</option>
                        <option value="Cable">Cable</option>
                        <option value="SD Card">SD Card</option>
                        <option value="Computer">Computer</option>
                </select>
                </div>


                <span style="color:black; float:left;"><span style="color:red;">*</span> Product Code</span>   
                <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-sort-alpha-asc" aria-hidden="true"></i></span>
                <input type="text" class="form-control" placeholder="Product Code" aria-label="Product Name" name="pcode" id="pcode" aria-describedby="basic-addon1" required>
                </div>

                <span style="color:black; float:left;"><span style="color:red;">*</span> Procduct Name</span>   
                <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-cube" aria-hidden="true"></i></span>
                <input type="text" class="form-control" placeholder="Product Name" id="pname"  name="pname" aria-label="Procuct Name" aria-describedby="basic-addon1" required>
                </div>

                <span style="color:black; float:left;"><span style="color:red;">*</span> Serial Number</span>   
                <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-sort-numeric-desc" aria-hidden="true"></i></span>
                <input type="text" class="form-control" placeholder="Serial Number" aria-label="Serial Number" name="sno" id="sno" aria-describedby="basic-addon1" required>
                </div>

                <button type="submit" name="submit" id="submit" class="btn btn-danger w-100" style="float:right;">ADD <i class="fa fa-plus" aria-hidden="true"></i></button>
            </form>              

            </div>
            <footer class="text-center text-white mt-3" style="padding-top:58px;">


<!-- Copyright -->
<div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
  © 2023 IDAPZ Digital Media Solutions. All Rights Reserved. Design & Development by TIOSS
  <a class="text-dark" href="sasindulakshithabandara@gmail.com">(sasindulakshithabandara@gmail.com)</a>
  

 
    <p><i class="fab fa-google me-1"></i
    > sasindulakshithabandara@gmail.com | <i class='fab fa-whatsapp-square ms-2 me-1' style='font-size:20px'></i><a class="text-dark col-4"  href="https://wa.me/qr/7EXBEZI25XZZM1">+94774186332</a> | <i class="fab fa-twitter me-1 ms-2"></i
    ><a class="text-dark col-4"  href="https://twitter.com/Sasindubandara6">Sasindubandara6</a> </p>

    
</div>
<!-- Copyright -->
</footer>

            <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
</body>
<script> $(document).ready(function() {
     $('[title="Hosted on free web hosting 000webhost.com. Host your own website for FREE."]').hide();
 });</script>
</html>

<?php 
 }else{
     header('Location: Login.php');
 }
?>