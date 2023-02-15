<?php
session_start();
require_once('connection.php');
$category = $_GET['category'];
$_SESSION['category'] = $category;

if(isset($_SESSION['userName'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDAPZ | INVENTORY | INVENTORY DETAILS</title>
    <link rel="icon" type="image/png" href="img/Logo.png">
      <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
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

            <div class="container mt-5">
                <h3 style=" font-weight: 600 ; opacity: 0.4;"><?php echo $category.' details'?></h3>
             <div style="margin-top: -36px;">   
                <form  style="float:right;" action="search.php" method="POST">
               <div class="input-group">
                <select class="form-select" id="branch" name="branch" aria-label="Example select with button addon">
                    <option value="">Select the branch</option>
                    <option value="Kandy">Kandy</option>
                    <option value="Colombo">Colombo</option>
                </select>
                <button class="btn btn-outline-danger" type="submit" name="submitb">Branch</button>
                </div>
               </form>
                
                
                <form class="example me-3" action="search.php" method="GET" style="float:right;">
                    
                    <div class="input-group">
                        <div class="form-outline">
                            <input  type="search" id="search" name="search" placeholder="Search..." style="color: #BE1E2D;" class="form-control" />
                        </div>
                        <button id="sbutton" type="submit" name="submits" class="btn btn-danger">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
               </form>
            </div>  

              
            </div>


            <div class="container" style="padding-top:50px;">
            <table class="table caption-top shadow-sm rounded-2 table-striped table-hove" id="dtbl" style="font-size:14pt;">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product Code</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Srial No.</th>
                    <th scope="col">Branch</th>
                    <th scope="col">Availability</th>
                    <th scope="col"></th>
                    
                    </tr>
                </thead>
                <tbody>

                <?php
                    switch($category){
                        case 'Lense':
                        $sql = "Select * from equipment where category = 'Lense' ";
                        $result = mysqli_query($connection, $sql);
                        $i = 0;
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                            
                                if($row['branch'] == "Kandy"){
                                    $branch = '<span class="badge bg-primary">Kandy</span>';
                                }else{
                                    $branch = '<span class="badge bg-secondary">Colombo</span>';
                                }

                                if($row['availability'] == "true"){
                                    $av = '<span class="badge bg-success">available</span>';
                                }else{
                                    $av = '<span class="badge bg-danger">unavailable</span>';
                                }

                          echo "<tr>
                            <th scope='row'>$i</th>
                            <td>".$row['product_code']."</td>
                            <td>".$row['name']."</td>
                            <td>".$row['category']."</td>
                            <td>".$row['serial_no']."</td>
                            <td>".$branch."</td>
                            <td>".$av."</td>
                            <td><a href='delete.php?delid=".$row['product_code']."' class='btn btn-danger btn-sm'>Delete</a></td>
                            </tr>";

                            $i++;
                        }
                    }else{
                        echo '<div style="text-align:center;" class="pt-5"><img src="img/no.jpg" style="height:250px; opacity:0.1"></div>
                        ';
                        echo "<script>
                        $('.table').hide();
                        </script>";
                    }
                        break;


                        case 'Camera':
                            $sql = "Select * from equipment where category = 'Camera' ";
                            $result = mysqli_query($connection, $sql);
                            $i = 0;
                            if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                               
                                if($row['branch'] == "Kandy"){
                                    $branch = '<span class="badge bg-primary">Kandy</span>';
                                }else{
                                    $branch = '<span class="badge bg-secondary">Colombo</span>';
                                }
    
                                if($row['availability'] == "true"){
                                    $av = '<span class="badge bg-success">available</span>';
                                }else{
                                    $av = '<span class="badge bg-danger">unavailable</span>';
                                }
    
                              echo "<tr>
                                <th scope='row'>$i</th>
                                <td>".$row['product_code']."</td>
                                <td>".$row['name']."</td>
                                <td>".$row['category']."</td>
                                <td>".$row['serial_no']."</td>
                                <td>".$branch."</td>
                                <td>".$av."</td>
                                <td><a href='delete.php?delid=".$row['product_code']."'  class='btn btn-danger btn-sm'>Delete</a></td>
                                </tr>";
    
                                $i++;
                            }
                        }else{
                            echo '<div style="text-align:center;" class="pt-5"><img src="img/no.jpg" style="height:250px; opacity:0.1"></div>
                            ';
                            echo "<script>
                            $('.table').hide();
                            </script>";
                        }
                            break;

                            case 'Mic':
                                $sql = "Select * from equipment where category = 'Mic' ";
                                $result = mysqli_query($connection, $sql);
                                $i = 0;
                                if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)){
                                   
                                    if($row['branch'] == "Kandy"){
                                        $branch = '<span class="badge bg-primary">Kandy</span>';
                                    }else{
                                        $branch = '<span class="badge bg-secondary">Colombo</span>';
                                    }
        
                                    if($row['availability'] == "true"){
                                        $av = '<span class="badge bg-success">available</span>';
                                    }else{
                                        $av = '<span class="badge bg-danger">unavailable</span>';
                                    }
        
                                  echo "<tr>
                                    <th scope='row'>$i</th>
                                    <td>".$row['product_code']."</td>
                                    <td>".$row['name']."</td>
                                    <td>".$row['category']."</td>
                                    <td>".$row['serial_no']."</td>
                                    <td>".$branch."</td>
                                    <td>".$av."</td>
                                    <td><a href='delete.php?delid=".$row['product_code']."'  class='btn btn-danger btn-sm'>Delete</a></td>
                                    </tr>";
        
                                    $i++;
                                }
                            }else{
                                echo '<div style="text-align:center;" class="pt-5"><img src="img/no.jpg" style="height:250px; opacity:0.1"></div>
                                ';
                                echo "<script>
                                $('.table').hide();
                                </script>";
                            }
                                break;

                                case 'SDCard':
                                    $sql = "Select * from equipment where category = 'SDCard' ";
                                    $result = mysqli_query($connection, $sql);
                                    $i = 0;
                                    if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                       
                                        if($row['branch'] == "Kandy"){
                                            $branch = '<span class="badge bg-primary">Kandy</span>';
                                        }else{
                                            $branch = '<span class="badge bg-secondary">Colombo</span>';
                                        }
            
                                        if($row['availability'] == "true"){
                                            $av = '<span class="badge bg-success">available</span>';
                                        }else{
                                            $av = '<span class="badge bg-danger">unavailable</span>';
                                        }
            
                                      echo "<tr>
                                        <th scope='row'>$i</th>
                                        <td>".$row['product_code']."</td>
                                        <td>".$row['name']."</td>
                                        <td>".$row['category']."</td>
                                        <td>".$row['serial_no']."</td>
                                        <td>".$branch."</td>
                                        <td>".$av."</td>
                                        <td><a href='delete.php?delid=".$row['product_code']."'  class='btn btn-danger btn-sm'>Delete</a></td>
                                        </tr>";
            
                                        $i++;
                                    }
                                }else{
                                    echo '<div style="text-align:center;" class="pt-5"><img src="img/no.jpg" style="height:250px; opacity:0.1"></div>
                                    ';
                                    echo "<script>
                                    $('.table').hide();
                                    </script>";
                                }
                                    break;


                                    case 'AudioInterface':
                                        $sql = "Select * from equipment where category = 'AudioInterface' ";
                                        $result = mysqli_query($connection, $sql);
                                        $i = 0;
                                        if(mysqli_num_rows($result) > 0){
                                        while($row = mysqli_fetch_assoc($result)){
                                           
                                            if($row['branch'] == "Kandy"){
                                                $branch = '<span class="badge bg-primary">Kandy</span>';
                                            }else{
                                                $branch = '<span class="badge bg-secondary">Colombo</span>';
                                            }
                
                                            if($row['availability'] == "true"){
                                                $av = '<span class="badge bg-success">available</span>';
                                            }else{
                                                $av = '<span class="badge bg-danger">unavailable</span>';
                                            }
                
                                          echo "<tr>
                                            <th scope='row'>$i</th>
                                            <td>".$row['product_code']."</td>
                                            <td>".$row['name']."</td>
                                            <td>".$row['category']."</td>
                                            <td>".$row['serial_no']."</td>
                                            <td>".$branch."</td>
                                            <td>".$av."</td>
                                            <td><a href='delete.php?delid=".$row['product_code']."'  class='btn btn-danger btn-sm'>Delete</a></td>
                                            </tr>";
                
                                            $i++;
                                        }
                                    }else{
                                        echo '<div style="text-align:center;" class="pt-5"><img src="img/no.jpg" style="height:250px; opacity:0.1"></div>
                                        ';
                                        echo "<script>
                                        $('.table').hide();
                                        </script>";
                                    }
                                        break;


                                        case 'Light':
                                            $sql = "Select * from equipment where category = 'Light' ";
                                            $result = mysqli_query($connection, $sql);
                                            $i = 0;
                                            if(mysqli_num_rows($result) > 0){
                                            while($row = mysqli_fetch_assoc($result)){
                                               
                                                if($row['branch'] == "Kandy"){
                                                    $branch = '<span class="badge bg-primary">Kandy</span>';
                                                }else{
                                                    $branch = '<span class="badge bg-secondary">Colombo</span>';
                                                }
                    
                                                if($row['availability'] == "true"){
                                                    $av = '<span class="badge bg-success">available</span>';
                                                }else{
                                                    $av = '<span class="badge bg-danger">unavailable</span>';
                                                }
                    
                                              echo "<tr>
                                                <th scope='row'>$i</th>
                                                <td>".$row['product_code']."</td>
                                                <td>".$row['name']."</td>
                                                <td>".$row['category']."</td>
                                                <td>".$row['serial_no']."</td>
                                                <td>".$branch."</td>
                                                <td>".$av."</td>
                                                <td><a href='delete.php?delid=".$row['product_code']."'  class='btn btn-danger btn-sm'>Delete</a></td>
                                                </tr>";
                    
                                                $i++;
                                            }
                                        }else{
                                            echo '<div style="text-align:center;" class="pt-5"><img src="img/no.jpg" style="height:250px; opacity:0.1"></div>
                                            ';
                                            echo "<script>
                                            $('.table').hide();
                                            </script>";
                                        }
                                            break;


                                            case 'Battery':
                                                $sql = "Select * from equipment where category = 'Battery' ";
                                                $result = mysqli_query($connection, $sql);
                                                $i = 0;  
                                                if(mysqli_num_rows($result) > 0){
                                                while($row = mysqli_fetch_assoc($result)){
                                                   
                                                    if($row['branch'] == "Kandy"){
                                                        $branch = '<span class="badge bg-primary">Kandy</span>';
                                                    }else{
                                                        $branch = '<span class="badge bg-secondary">Colombo</span>';
                                                    }
                        
                                                    if($row['availability'] == "true"){
                                                        $av = '<span class="badge bg-success">available</span>';
                                                    }else{
                                                        $av = '<span class="badge bg-danger">unavailable</span>';
                                                    }
                        
                                                  echo "<tr>
                                                    <th scope='row'>$i</th>
                                                    <td>".$row['product_code']."</td>
                                                    <td>".$row['name']."</td>
                                                    <td>".$row['category']."</td>
                                                    <td>".$row['serial_no']."</td>
                                                    <td>".$branch."</td>
                                                    <td>".$av."</td>
                                                    <td><a href='delete.php?delid=".$row['product_code']."'  class='btn btn-danger btn-sm'>Delete</a></td>
                                                    </tr>";
                        
                                                    $i++;
                                                }
                                            }else{
                                                echo '<div style="text-align:center;" class="pt-5"><img src="img/no.jpg" style="height:250px; opacity:0.1"></div>
                                                ';
                                                echo "<script>
                                                $('.table').hide();
                                                </script>";
                                            }
                                                break;


                                                case 'Stand':
                                                    $sql = "Select * from equipment where category = 'Stand' ";
                                                    $result = mysqli_query($connection, $sql);
                                                    $i = 0;
                                                      if(mysqli_num_rows($result) > 0){
                                                    while($row = mysqli_fetch_assoc($result)){
                                                       
                                                        if($row['branch'] == "Kandy"){
                                                            $branch = '<span class="badge bg-primary">Kandy</span>';
                                                        }else{
                                                            $branch = '<span class="badge bg-secondary">Colombo</span>';
                                                        }
                            
                                                        if($row['availability'] == "true"){
                                                            $av = '<span class="badge bg-success">available</span>';
                                                        }else{
                                                            $av = '<span class="badge bg-danger">unavailable</span>';
                                                        }
                            
                                                      echo "<tr>
                                                        <th scope='row'>$i</th>
                                                        <td>".$row['product_code']."</td>
                                                        <td>".$row['name']."</td>
                                                        <td>".$row['category']."</td>
                                                        <td>".$row['serial_no']."</td>
                                                        <td>".$branch."</td>
                                                        <td>".$av."</td>
                                                        <td><a href='delete.php?delid=".$row['product_code']."'  class='btn btn-danger btn-sm'>Delete</a></td>
                                                        </tr>";
                            
                                                        $i++;
                                                    }
                                                }else{
                                                    echo '<div style="text-align:center;" class="pt-5"><img src="img/no.jpg" style="height:250px; opacity:0.1"></div>
                                                    ';
                                                    echo "<script>
                                                    $('.table').hide();
                                                    </script>";
                                                }
                                                    break;


                                                    case 'WireCode':
                                                        $sql = "Select * from equipment where category = 'WireCode' ";
                                                        $result = mysqli_query($connection, $sql);
                                                        $i = 0;
                                                        if(mysqli_num_rows($result) > 0){
                                                        while($row = mysqli_fetch_assoc($result)){
                                                           
                                                            if($row['branch'] == "Kandy"){
                                                                $branch = '<span class="badge bg-primary">Kandy</span>';
                                                            }else{
                                                                $branch = '<span class="badge bg-secondary">Colombo</span>';
                                                            }
                                
                                                            if($row['availability'] == "true"){
                                                                $av = '<span class="badge bg-success">available</span>';
                                                            }else{
                                                                $av = '<span class="badge bg-danger">unavailable</span>';
                                                            }
                                
                                                          echo "<tr>
                                                            <th scope='row'>$i</th>
                                                            <td>".$row['product_code']."</td>
                                                            <td>".$row['name']."</td>
                                                            <td>".$row['category']."</td>
                                                            <td>".$row['serial_no']."</td>
                                                            <td>".$branch."</td>
                                                            <td>".$av."</td>
                                                            <td><a href='delete.php?delid=".$row['product_code']."'  class='btn btn-danger btn-sm'>Delete</a></td>
                                                            </tr>";
                                
                                                            $i++;
                                                        }
                                                    }else{
                                                        echo '<div style="text-align:center;" class="pt-5"><img src="img/no.jpg" style="height:250px; opacity:0.1"></div>
                                                        ';
                                                        echo "<script>
                                                        $('.table').hide();
                                                        </script>";
                                                    }
                                                        break;


                                                        case 'Charger':
                                                            $sql = "Select * from equipment where category = 'Chager' ";
                                                            $result = mysqli_query($connection, $sql);
                                                            $i = 0;
                                                            if(mysqli_num_rows($result) > 0){
                                                            while($row = mysqli_fetch_assoc($result)){
                                                               
                                                                if($row['branch'] == "Kandy"){
                                                                    $branch = '<span class="badge bg-primary">Kandy</span>';
                                                                }else{
                                                                    $branch = '<span class="badge bg-secondary">Colombo</span>';
                                                                }
                                    
                                                                if($row['availability'] == "true"){
                                                                    $av = '<span class="badge bg-success">available</span>';
                                                                }else{
                                                                    $av = '<span class="badge bg-danger">unavailable</span>';
                                                                }
                                    
                                                              echo "<tr>
                                                                <th scope='row'>$i</th>
                                                                <td>".$row['product_code']."</td>
                                                                <td>".$row['name']."</td>
                                                                <td>".$row['category']."</td>
                                                                <td>".$row['serial_no']."</td>
                                                                <td>".$branch."</td>
                                                                <td>".$av."</td>
                                                                <td><a href='delete.php?delid=".$row['product_code']."'  class='btn btn-danger btn-sm'>Delete</a></td>
                                                                </tr>";
                                    
                                                                $i++;
                                                            }
                                                        }else{
                                                            echo '<div style="text-align:center;" class="pt-5"><img src="img/no.jpg" style="height:250px; opacity:0.1"></div>
                                                            ';
                                                            echo "<script>
                                                            $('.table').hide();
                                                            </script>";
                                                        }
                                                            break;


                                                            case 'Tripod':
                                                                $sql = "Select * from equipment where category = 'Tripod' ";
                                                                $result = mysqli_query($connection, $sql);
                                                                $i = 0;
                                                                if(mysqli_num_rows($result) > 0){
                                                                while($row = mysqli_fetch_assoc($result)){
                                                                   
                                                                    if($row['branch'] == "Kandy"){
                                                                        $branch = '<span class="badge bg-primary">Kandy</span>';
                                                                    }else{
                                                                        $branch = '<span class="badge bg-secondary">Colombo</span>';
                                                                    }
                                        
                                                                    if($row['availability'] == "true"){
                                                                        $av = '<span class="badge bg-success">available</span>';
                                                                    }else{
                                                                        $av = '<span class="badge bg-danger">unavailable</span>';
                                                                    }
                                        
                                                                  echo "<tr>
                                                                    <th scope='row'>$i</th>
                                                                    <td>".$row['product_code']."</td>
                                                                    <td>".$row['name']."</td>
                                                                    <td>".$row['category']."</td>
                                                                    <td>".$row['serial_no']."</td>
                                                                    <td>".$branch."</td>
                                                                    <td>".$av."</td>
                                                                    <td><a href='delete.php?delid=".$row['product_code']."'  class='btn btn-danger btn-sm'>Delete</a></td>
                                                                    </tr>";
                                        
                                                                    $i++;
                                                                }
                                                            }else{
                                                                echo '<div style="text-align:center;" class="pt-5"><img src="img/no.jpg" style="height:250px; opacity:0.1"></div>
                                                                ';
                                                                echo "<script>
                                                                $('.table').hide();
                                                                </script>";
                                                            }
                                                                break;

                                                                case 'Cable':
                                                                    $sql = "Select * from equipment where category = 'Cable' ";
                                                                    $result = mysqli_query($connection, $sql);
                                                                    $i = 0;
                                                                    if(mysqli_num_rows($result) > 0){
                                                                    while($row = mysqli_fetch_assoc($result)){
                                                                       
                                                                        if($row['branch'] == "Kandy"){
                                                                            $branch = '<span class="badge bg-primary">Kandy</span>';
                                                                        }else{
                                                                            $branch = '<span class="badge bg-secondary">Colombo</span>';
                                                                        }
                                            
                                                                        if($row['availability'] == "true"){
                                                                            $av = '<span class="badge bg-success">available</span>';
                                                                        }else{
                                                                            $av = '<span class="badge bg-danger">unavailable</span>';
                                                                        }
                                            
                                                                      echo "<tr>
                                                                        <th scope='row'>$i</th>
                                                                        <td>".$row['product_code']."</td>
                                                                        <td>".$row['name']."</td>
                                                                        <td>".$row['category']."</td>
                                                                        <td>".$row['serial_no']."</td>
                                                                        <td>".$branch."</td>
                                                                        <td>".$av."</td>
                                                                        <td><a href='delete.php?delid=".$row['product_code']."'  class='btn btn-danger btn-sm'>Delete</a></td>
                                                                        </tr>";
                                            
                                                                        $i++;
                                                                    }
                                                                }else{
                                                                    echo '<div style="text-align:center;" class="pt-5"><img src="img/no.jpg" style="height:250px; opacity:0.1"></div>
                                                                    ';
                                                                    echo "<script>
                                                                    $('.table').hide();
                                                                    </script>";
                                                                }
                                                                    break;

                                                                    case 'Computer':
                                                                        $sql = "Select * from equipment where category = 'Computer' ";
                                                                        $result = mysqli_query($connection, $sql);
                                                                        $i = 0;
                                                                        if(mysqli_num_rows($result) > 0){
                                                                        while($row = mysqli_fetch_assoc($result)){
                                                                           
                                                                            if($row['branch'] == "Kandy"){
                                                                                $branch = '<span class="badge bg-primary">Kandy</span>';
                                                                            }else{
                                                                                $branch = '<span class="badge bg-secondary">Colombo</span>';
                                                                            }
                                                
                                                                            if($row['availability'] == "true"){
                                                                                $av = '<span class="badge bg-success">available</span>';
                                                                            }else{
                                                                                $av = '<span class="badge bg-danger">unavailable</span>';
                                                                            }
                                                
                                                                          echo "<tr>
                                                                            <th scope='row'>$i</th>
                                                                            <td>".$row['product_code']."</td>
                                                                            <td>".$row['name']."</td>
                                                                            <td>".$row['category']."</td>
                                                                            <td>".$row['serial_no']."</td>
                                                                            <td>".$branch."</td>
                                                                            <td>".$av."</td>
                                                                            <td><a href='delete.php?delid=".$row['product_code']."' class='btn btn-danger btn-sm'>Delete</a></td>
                                                                            </tr>";
                                                
                                                                            $i++;
                                                                        }
                                                                    }else{
                                                                        echo '<div style="text-align:center;" class="pt-5"><img src="img/no.jpg" style="height:250px; opacity:0.1"></div>
                                                                        ';
                                                                        echo "<script>
                                                                        $('.table').hide();
                                                                        </script>";
                                                                    }
                                                                        break;

                                                                        default:
                                                                        $sql = "Select * from equipment where category LIKE '%".$category."%' OR name LIKE '%".$category."%' OR serial_no LIKE '%".$category."%' OR branch LIKE '%".$category."%' OR product_code LIKE '%".$category."%'";
                                                                        $result = mysqli_query($connection, $sql);
                                                                        $i = 0;
                                                                        if(mysqli_num_rows($result) > 0){
                                                                        while($row = mysqli_fetch_assoc($result)){
                                                                           
                                                                            if($row['branch'] == "Kandy"){
                                                                                $branch = '<span class="badge bg-primary">Kandy</span>';
                                                                            }else{
                                                                                $branch = '<span class="badge bg-secondary">Colombo</span>';
                                                                            }
                                                
                                                                            if($row['availability'] == "true"){
                                                                                $av = '<span class="badge bg-success">available</span>';
                                                                            }else{
                                                                                $av = '<span class="badge bg-danger">unavailable</span>';
                                                                            }
                                                
                                                                          echo "<tr>
                                                                            <th scope='row'>$i</th>
                                                                            <td>".$row['product_code']."</td>
                                                                            <td>".$row['name']."</td>
                                                                            <td>".$row['category']."</td>
                                                                            <td>".$row['serial_no']."</td>
                                                                            <td>".$branch."</td>
                                                                            <td>".$av."</td>
                                                                            <td><a href='delete.php?delid=".$row['product_code']."' class='btn btn-danger btn-sm'>Delete</a></td>
                                                                            </tr>";
                                                
                                                                            $i++;
                                                                        }
                                                                    }else{
                                                                        echo '<div style="text-align:center;" class="pt-5"><img src="img/no.jpg" style="height:250px; opacity:0.1"></div>
                                                                        ';
                                                                        echo "<script>
                                                                        $('.table').hide();
                                                                        </script>";
                                                                    }
                                                                        break;

                        
                        

                    }
                ?>
                    
                


                </tbody>
                </table>
            </div>



  <footer>
  <div class="text-center text-dark p-3 mt-5" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 IDAPZ Digital Media Solutions. All Rights Reserved. Design & Development by TIOSS
    <a class="text-dark" href="sasindulakshithabandara@gmail.com">(sasindulakshithabandara@gmail.com)</a>
    

   
      <p><i class="fab fa-google me-1"></i
      > sasindulakshithabandara@gmail.com | <i class='fab fa-whatsapp-square ms-2 me-1' style='font-size:20px'></i><a class="text-dark col-4"  href="https://wa.me/qr/7EXBEZI25XZZM1">+94774186332</a> | <i class="fab fa-twitter me-1 ms-2"></i
      ><a class="text-dark col-4"  href="https://twitter.com/Sasindubandara6">Sasindubandara6</a> </p>

      
  </div>
  </footer>

</body>
<script> $(document).ready(function() {
     $('[title="Hosted on free web hosting 000webhost.com. Host your own website for FREE."]').hide();
 });</script>
</html>
<?php }else{
    header('Location: Login.php');
}?>