<?php 
    session_start();


      require_once('connection.php');

      //camera
      $sql = "select COUNT(product_code) as count from equipment where category = 'Camera'";
              
      $result = mysqli_query($connection, $sql);
      $row = mysqli_fetch_assoc($result);
      $camCount = $row['count'];

      $sql1 = "select COUNT(product_code) as count from equipment where category = 'Camera' && availability = 'true'";
              
      $result1 = mysqli_query($connection, $sql1);
      $row1 = mysqli_fetch_assoc($result1);
      $camCountA = $row1['count'];

      $sql2 = "select COUNT(product_code) as count from equipment where category = 'Camera' && availability = 'false'";
              
      $result2 = mysqli_query($connection, $sql2);
      $row2 = mysqli_fetch_assoc($result2);
      $camCountUa = $row2['count'];

      $sql3 = "select COUNT(product_code) as count from equipment where category = 'Camera' && branch = 'Colombo'";
              
      $result3 = mysqli_query($connection, $sql3);
      $row3 = mysqli_fetch_assoc($result3);
      $camCountC = $row3['count'];


      $sql4 = "select COUNT(product_code) as count from equipment where category = 'Camera' && branch = 'Kandy'";
              
      $result4 = mysqli_query($connection, $sql4);
      $row4 = mysqli_fetch_assoc($result4);
      $camCountK = $row4['count'];

      //Lense

      $sql5 = "select COUNT(product_code) as count from equipment where category = 'Lense'";
              
      $result5 = mysqli_query($connection, $sql5);
      $row5 = mysqli_fetch_assoc($result5);
      $lenCount = $row5['count'];

      $sql6 = "select COUNT(product_code) as count from equipment where category = 'Lense' && availability = 'true'";
              
      $result6 = mysqli_query($connection, $sql6);
      $row6 = mysqli_fetch_assoc($result6);
      $lenCountA = $row6['count'];

      $sql7 = "select COUNT(product_code) as count from equipment where category = 'Lense' && availability = 'false'";
              
      $result7 = mysqli_query($connection, $sql7);
      $row7 = mysqli_fetch_assoc($result7);
      $lenCountUa = $row7['count'];

      $sql8 = "select COUNT(product_code) as count from equipment where category = 'Lense' && branch = 'Colombo'";
              
      $result8 = mysqli_query($connection, $sql8);
      $row8 = mysqli_fetch_assoc($result8);
      $lenCountC = $row8['count'];


      $sql9 = "select COUNT(product_code) as count from equipment where category = 'Lense' && branch = 'Kandy'";
              
      $result9 = mysqli_query($connection, $sql9);
      $row9 = mysqli_fetch_assoc($result9);
      $lenCountK = $row9['count'];

      //Battery
      $sql10 = "select COUNT(product_code) as count from equipment where category = 'Battery'";
              
      $result10 = mysqli_query($connection, $sql10);
      $row10 = mysqli_fetch_assoc($result10);
      $batCount = $row10['count'];

      $sql11 = "select COUNT(product_code) as count from equipment where category = 'Battery' && availability = 'true'";
              
      $result11 = mysqli_query($connection, $sql11);
      $row11 = mysqli_fetch_assoc($result11);
      $batCountA = $row11['count'];

      $sql12 = "select COUNT(product_code) as count from equipment where category = 'Battery' && availability = 'false'";
              
      $result12 = mysqli_query($connection, $sql12);
      $row12 = mysqli_fetch_assoc($result12);
      $batCountUa = $row12['count'];

      $sql13 = "select COUNT(product_code) as count from equipment where category = 'Battery' && branch = 'Colombo'";
              
      $result13 = mysqli_query($connection, $sql13);
      $row13 = mysqli_fetch_assoc($result13);
      $batCountC = $row13['count'];


      $sql14 = "select COUNT(product_code) as count from equipment where category = 'Battery' && branch = 'Kandy'";
              
      $result14 = mysqli_query($connection, $sql14);
      $row14 = mysqli_fetch_assoc($result14);
      $batCountK = $row14['count'];

      //Charges
      $sql15 = "select COUNT(product_code) as count from equipment where category = 'Charger'";
              
      $result15 = mysqli_query($connection, $sql15);
      $row15 = mysqli_fetch_assoc($result15);
      $chaCount = $row15['count'];

      $sql16 = "select COUNT(product_code) as count from equipment where category = 'Charger' && availability = 'true'";
              
      $result16 = mysqli_query($connection, $sql16);
      $row16 = mysqli_fetch_assoc($result16);
      $chaCountA = $row16['count'];

      $sql17 = "select COUNT(product_code) as count from equipment where category = 'Charger' && availability = 'false'";
              
      $result17 = mysqli_query($connection, $sql17);
      $row17 = mysqli_fetch_assoc($result17);
      $chaCountUa = $row17['count'];

      $sql18= "select COUNT(product_code) as count from equipment where category = 'Charger' && branch = 'Colombo'";
              
      $result18= mysqli_query($connection, $sql18);
      $row18 = mysqli_fetch_assoc($result18);
      $chaCountC = $row18['count'];


      $sql19 = "select COUNT(product_code) as count from equipment where category = 'Charger' && branch = 'Kandy'";
              
      $result19 = mysqli_query($connection, $sql19);
      $row19 = mysqli_fetch_assoc($result19);
      $chaCountK = $row19['count'];

      //tripod

      $sql20 = "select COUNT(product_code) as count from equipment where category = 'Tripod'";
              
      $result20 = mysqli_query($connection, $sql20);
      $row20 = mysqli_fetch_assoc($result20);
      $triCount = $row20['count'];

      $sql21 = "select COUNT(product_code) as count from equipment where category = 'Tripod' && availability = 'true'";
              
      $result21 = mysqli_query($connection, $sql21);
      $row21 = mysqli_fetch_assoc($result21);
      $triCountA = $row21['count'];

      $sql22 = "select COUNT(product_code) as count from equipment where category = 'Tripod' && availability = 'false'";
              
      $result22 = mysqli_query($connection, $sql22);
      $triCountUa = mysqli_fetch_assoc($result22)['count'];
    

      $sql23= "select COUNT(product_code) as count from equipment where category = 'Tripod' && branch = 'Colombo'";
              
      $result23= mysqli_query($connection, $sql23);
      $triCountC  = mysqli_fetch_assoc($result23)['count'];


      $sql24 = "select COUNT(product_code) as count from equipment where category = 'Tripod' && branch = 'Kandy'";
              
      $result24 = mysqli_query($connection, $sql24);
      $triCountK = mysqli_fetch_assoc($result24)['count'];


      //Stands
      $sql25 = "select COUNT(product_code) as count from equipment where category = 'Stand'";
              
      $result25 = mysqli_query($connection, $sql25);
      $stCount = mysqli_fetch_assoc($result25)['count'];

      $sql26 = "select COUNT(product_code) as count from equipment where category = 'Stand' && availability = 'true'";
              
      $result26 = mysqli_query($connection, $sql26);
      $stCountA = mysqli_fetch_assoc($result26)['count'];

      $sql27 = "select COUNT(product_code) as count from equipment where category = 'Stand' && availability = 'false'";
              
      $result27 = mysqli_query($connection, $sql27);
      $stCountUa = mysqli_fetch_assoc($result27)['count'];
    

      $sql28= "select COUNT(product_code) as count from equipment where category = 'Stand' && branch = 'Colombo'";
              
      $result28= mysqli_query($connection, $sql28);
      $stCountC  = mysqli_fetch_assoc($result28)['count'];


      $sql29 = "select COUNT(product_code) as count from equipment where category = 'Stand' && branch = 'Kandy'";
              
      $result29 = mysqli_query($connection, $sql29);
      $stCountK = mysqli_fetch_assoc($result29)['count'];


      //Lights
      $sql30 = "select COUNT(product_code) as count from equipment where category = 'Light'";
              
      $result30 = mysqli_query($connection, $sql30);
      $liCount = mysqli_fetch_assoc($result30)['count'];

      $sql31 = "select COUNT(product_code) as count from equipment where category = 'Light' && availability = 'true'";
              
      $result31 = mysqli_query($connection, $sql31);
      $liCountA = mysqli_fetch_assoc($result31)['count'];

      $sql32 = "select COUNT(product_code) as count from equipment where category = 'Light' && availability = 'false'";
              
      $result32 = mysqli_query($connection, $sql32);
      $liCountUa = mysqli_fetch_assoc($result32)['count'];
    

      $sql33= "select COUNT(product_code) as count from equipment where category = 'Light' && branch = 'Colombo'";
              
      $result33= mysqli_query($connection, $sql33);
      $liCountC  = mysqli_fetch_assoc($result33)['count'];


      $sql34 = "select COUNT(product_code) as count from equipment where category = 'Light' && branch = 'Kandy'";
              
      $result34 = mysqli_query($connection, $sql34);
      $liCountK = mysqli_fetch_assoc($result34)['count'];


      //Mic
      $sql35 = "select COUNT(product_code) as count from equipment where category = 'Mic'";
              
      $result35 = mysqli_query($connection, $sql35);
      $miCount = mysqli_fetch_assoc($result35)['count'];

      $sql36 = "select COUNT(product_code) as count from equipment where category = 'Mic' && availability = 'true'";
              
      $result36 = mysqli_query($connection, $sql36);
      $miCountA = mysqli_fetch_assoc($result36)['count'];

      $sql37 = "select COUNT(product_code) as count from equipment where category = 'Mic' && availability = 'false'";
              
      $result37 = mysqli_query($connection, $sql37);
      $miCountUa = mysqli_fetch_assoc($result37)['count'];
    

      $sql38= "select COUNT(product_code) as count from equipment where category = 'Mic' && branch = 'Colombo'";
              
      $result38 = mysqli_query($connection, $sql38);
      $miCountC  = mysqli_fetch_assoc($result38)['count'];


      $sql39 = "select COUNT(product_code) as count from equipment where category = 'Mic' && branch = 'Kandy'";
              
      $result39 = mysqli_query($connection, $sql39);
      $miCountK = mysqli_fetch_assoc($result39)['count'];

      //Audio Interfaces
      $sql40 = "select COUNT(product_code) as count from equipment where category = 'Audio Interface'";
              
      $result40 = mysqli_query($connection, $sql40);
      $aiCount = mysqli_fetch_assoc($result40)['count'];

      $sql41 = "select COUNT(product_code) as count from equipment where category = 'Audio Interface' && availability = 'true'";
              
      $result41 = mysqli_query($connection, $sql41);
      $aiCountA = mysqli_fetch_assoc($result41)['count'];

      $sql42 = "select COUNT(product_code) as count from equipment where category = 'Audio Interface' && availability = 'false'";
              
      $result42 = mysqli_query($connection, $sql42);
      $aiCountUa = mysqli_fetch_assoc($result42)['count'];
    

      $sql43= "select COUNT(product_code) as count from equipment where category = 'Audio Interface' && branch = 'Colombo'";
              
      $result43= mysqli_query($connection, $sql43);
      $aiCountC  = mysqli_fetch_assoc($result43)['count'];


      $sql44 = "select COUNT(product_code) as count from equipment where category = 'Audio Interface' && branch = 'Kandy'";
              
      $result44 = mysqli_query($connection, $sql44);
      $aiCountK = mysqli_fetch_assoc($result44)['count'];

      //Wire Code

      $sql45 = "select COUNT(product_code) as count from equipment where category = 'Wire Code'";
              
      $result45 = mysqli_query($connection, $sql45);
      $wcCount = mysqli_fetch_assoc($result45)['count'];

      $sql46 = "select COUNT(product_code) as count from equipment where category = 'Wire Code' && availability = 'true'";
              
      $result46 = mysqli_query($connection, $sql46);
      $wcCountA = mysqli_fetch_assoc($result46)['count'];

      $sql47 = "select COUNT(product_code) as count from equipment where category = 'Wire Code' && availability = 'false'";
              
      $result47 = mysqli_query($connection, $sql47);
      $wcCountUa = mysqli_fetch_assoc($result47)['count'];
    

      $sql48= "select COUNT(product_code) as count from equipment where category = 'Wire Code' && branch = 'Colombo'";
              
      $result48= mysqli_query($connection, $sql48);
      $wcCountC  = mysqli_fetch_assoc($result48)['count'];


      $sql48 = "select COUNT(product_code) as count from equipment where category = 'Wire Code' && branch = 'Kandy'";
              
      $result48 = mysqli_query($connection, $sql48);
      $wcCountK = mysqli_fetch_assoc($result48)['count'];

      //Cables
      $sql49 = "select COUNT(product_code) as count from equipment where category = 'Cable'";
              
      $result49 = mysqli_query($connection, $sql49);
      $cabCount = mysqli_fetch_assoc($result49)['count'];

      $sql50 = "select COUNT(product_code) as count from equipment where category = 'Cable' && availability = 'true'";
              
      $result50 = mysqli_query($connection, $sql50);
      $cabCountA = mysqli_fetch_assoc($result50)['count'];

      $sql51 = "select COUNT(product_code) as count from equipment where category = 'Cable' && availability = 'false'";
              
      $result51 = mysqli_query($connection, $sql51);
      $cabCountUa = mysqli_fetch_assoc($result51)['count'];
    

      $sql52= "select COUNT(product_code) as count from equipment where category = 'Cable' && branch = 'Colombo'";
              
      $result52= mysqli_query($connection, $sql52);
      $cabCountC  = mysqli_fetch_assoc($result52)['count'];


      $sql53 = "select COUNT(product_code) as count from equipment where category = 'Cable' && branch = 'Kandy'";
              
      $result53 = mysqli_query($connection, $sql53);
      $cabCountK = mysqli_fetch_assoc($result53)['count'];
      
      //SD Cards

      $sql54 = "select COUNT(product_code) as count from equipment where category = 'SD Card'";
              
      $result54 = mysqli_query($connection, $sql54);
      $sdCount = mysqli_fetch_assoc($result54)['count'];

      $sql55 = "select COUNT(product_code) as count from equipment where category = 'SD Card' && availability = 'true'";
              
      $result55 = mysqli_query($connection, $sql55);
      $sdCountA = mysqli_fetch_assoc($result55)['count'];

      $sql56 = "select COUNT(product_code) as count from equipment where category = 'SD Card' && availability = 'false'";
              
      $result56 = mysqli_query($connection, $sql56);
      $sdCountUa = mysqli_fetch_assoc($result56)['count'];
    

      $sql57= "select COUNT(product_code) as count from equipment where category = 'SD Card' && branch = 'Colombo'";
              
      $result57= mysqli_query($connection, $sql57);
      $sdCountC  = mysqli_fetch_assoc($result57)['count'];


      $sql59 = "select COUNT(product_code) as count from equipment where category = 'SD Card' && branch = 'Kandy'";
              
      $result59 = mysqli_query($connection, $sql59);
      $sdCountK = mysqli_fetch_assoc($result59)['count'];

      //Computers

      $sql60 = "select COUNT(product_code) as count from equipment where category = 'Computer'";
              
      $result60 = mysqli_query($connection, $sql60);
      $comCount = mysqli_fetch_assoc($result60)['count'];

      $sql61 = "select COUNT(product_code) as count from equipment where category = 'Computer' && availability = 'true'";
              
      $result61 = mysqli_query($connection, $sql61);
      $comCountA = mysqli_fetch_assoc($result61)['count'];    

      $sql63= "select COUNT(product_code) as count from equipment where category = 'Computer' && branch = 'Colombo'";
              
      $result63= mysqli_query($connection, $sql63);
      $comCountC  = mysqli_fetch_assoc($result63)['count'];


      $sql64 = "select COUNT(product_code) as count from equipment where category = 'Computer' && branch = 'Kandy'";
              
      $result64 = mysqli_query($connection, $sql64);
      $comCountK = mysqli_fetch_assoc($result64)['count'];
      
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDAPZ | INVENTORY</title>
    <link rel="icon" type="image/png" href="img/Logo.png">
      <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="css/stylee.css">
<link rel="stylesheet" href="css/admin.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
</head>
<body>
            <nav class="navbar shadow">
            <div class="container">
                <span class="navbar-brand mb-0 h1">

                <img src="img/Logo1.png" style="height:80px; " class="img" alt="">
                
                </span>

                <div style="float:right;">
                    <a href="logout.php" class="btn btn-outline-danger rounded-5">LOG OUT <i class="fa fa-sign-out" aria-hidden="true"></i> </a>    
                </div>
            </div>
            </nav>

            <div class="container mt-5">
                <span class="wlcm">Welcome back, <span class="ps-1" style="color:#BE1E2D;"><?php echo $_SESSION['userName'].' !'; ?></span></span>
                <a href="addItems.php" class="btn btn-outline-danger ms-1" style="float:right;" role="button"><i class="fa fa-plus" aria-hidden="true"></i></a>
                <form class="example" action="search.php" action="GET" style="float:right;">
                    
                    <div class="input-group">
                        <div class="form-outline">
                            <input  type="search" id="search" name="search" placeholder="Search..." style="color: #BE1E2D;" class="form-control" />
                        </div>
                        <button id="sbutton" type="submit" name="ssubmit" class="btn btn-danger">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
               </form>
               
                </div>


            <!-- admin cards start -->

            <div class="container mt-2">
  
<div class="row">

<div class="col-md-3">
    <a class="datcard my-3" href="inventoryDetails.php?category=Camera">
      <span style="color:white; font-weight:700;" class="h4 hd">Cameras</span><br>
       <span class="hdcount"><?php echo '0'.$camCount?></span><br>


       <div style="float:left; font-size: 14pt; ">
        <span>Colombo - <b><?php echo $camCountC?></b></span><br>
        <span>Kandy - <b><?php echo $camCountK?></b></span>
       </div>

       <div style="float:right; font-size: 14pt; ">
        <span>Available - <b><?php echo $camCountA?></b></span><br>
        <span>Take-Out - <b><?php echo $camCountUa?></b></span>
       </div>

      <div class="go-corner">
      </div>
    </a>
  </div>


  <div class="col-md-2">
    <a class="datcard my-3" href="inventoryDetails.php?category=Lense">
      <span style="color:white; font-weight:700;" class="h4 hd">Lenses</span><br>
      <span class="hdcount"><?php echo '0'.$lenCount?></span><br>

      <div style="float:left; font-size: 14pt; ">
        <span>C - <b><?php echo $lenCountC?></b></span><br>
        <span>K - <b><?php echo $lenCountK?></b></span>
       </div>


      <div style="font-size: 14pt; float:right; ">
        <span>Available - <b><?php echo $lenCountA?></b></span><br>
        <span>Take-Out - <b><?php echo $lenCountUa?></b></span>
       </div>

      <div class="go-corner">
      </div>
    </a>
  </div>

  <div class="col-md-2">
    <a class="datcard my-3" href="inventoryDetails.php?category=Battery">
      <span style="color:white; font-weight:700;" class="h4 hd">Batteries</span><br>
      <span class="hdcount"><?php echo '0'.$batCount?></span><br>


      <div style="float:left; font-size: 14pt; ">
        <span>C - <b><?php echo $batCountC?></b></span><br>
        <span>K - <b><?php echo $batCountK?></b></span>
       </div>

      <div style="font-size: 14pt; float:right;">
        <span>Available - <b><?php echo $batCountA?></b></span><br>
        <span>Take-Out - <b><?php echo $batCountUa?></b></span>
       </div>

      <div class="go-corner">
      </div>
    </a>
  </div>

  <div class="col-md-2">
    <a class="datcard my-3" href="inventoryDetails.php?category=Charger">
      <span  class="h4 hd">Chargers</span><br>
      <span class="hdcount"><?php echo "0".$chaCount?></span><br>

      <div style="float:left; font-size: 14pt; ">
        <span>C - <b><?php echo $chaCountC?></b></span><br>
        <span>K - <b><?php echo $chaCountK?></b></span>
       </div>

      <div style="font-size: 14pt; float:right;">
        <span>Available - <b><?php echo $chaCountA?></b></span><br>
        <span>Take-Out - <b><?php echo $chaCountUa?></b></span>
       </div>

      <div class="go-corner">
      </div>
    </a>
  </div>

  <div class="col-md-3">
    <a class="datcard my-3" href="inventoryDetails.php?category=Tripod">
      <span  class="h4 hd">Tripods</span><br>
       <span class="hdcount"><?php echo '0'.$triCount?></span><br>

       
      <div style="float:left; font-size: 14pt; ">
        <span>Colombo - <b><?php echo $triCountC?></b></span><br>
        <span>Kandy - <b><?php echo $triCountK?></b></span>
       </div>

       <div style="float:right; font-size: 14pt; ">
        <span>Available - <b><?php echo $triCountA?></b></span><br>
        <span>Take-Out - <b><?php echo $triCountUa?></b></span>
       </div>

      <div class="go-corner">
      </div>
    </a>
  </div>

  <div class="col-md-3">
    <a class="datcard my-3" href="inventoryDetails.php?category=Stand">
      <span style="color:white; font-weight:700;" class="h4 hd">Stands</span><br>
       <span class="hdcount"><?php echo '0'.$stCount?></span><br>

       <div style="float:left; font-size: 14pt; ">
        <span>Colombo - <b><?php echo $stCountC?></b></span><br>
        <span>Kandy - <b><?php echo $stCountK?></b></span>
       </div>

       <div style="float:right; font-size: 14pt; ">
        <span>Available - <b><?php echo $stCountA?></b></span><br>
        <span>Take-Out - <b><?php echo $stCountUa?></b></span>
       </div>

      <div class="go-corner">
      </div>
    </a>
  </div>


  <div class="col-md-3">
    <a class="datcard my-3" href="inventoryDetails.php?category=Light">
      <span style="color:white; font-weight:700;" class="h4 hd">Lights</span><br>
       <span class="hdcount"><?php echo '0'.$liCount?></span><br>

       <div style="float:left; font-size: 14pt; ">
        <span>Colombo - <b><?php echo $liCountC?></b></span><br>
        <span>Kandy - <b><?php echo $liCountK?></b></span>
       </div>


       <div style="float:right; font-size: 14pt; ">
        <span>Available - <b><?php echo $liCountA?></b></span><br>
        <span>Take-Out - <b><?php echo $liCountUa?></b></span>
       </div>

      <div class="go-corner">
      </div>
    </a>
  </div>

  <div class="col-md-3">
    <a class="datcard my-3" href="inventoryDetails.php?category=Mic">
      <span style="color:white; font-weight:700;" class="h4 hd">Mics</span><br>
       <span class="hdcount"><?php echo '0'.$miCount?></span><br>

       
       <div style="float:left; font-size: 14pt; ">
        <span>Colombo - <b><?php echo $miCountC?></b></span><br>
        <span>Kandy - <b><?php echo $miCountK?></b></span>
       </div>

       <div style="float:right; font-size: 14pt; ">
        <span>Available - <b><?php echo $miCountA?></b></span><br>
        <span>Take-Out - <b><?php echo $miCountUa?></b></span>
       </div>

      <div class="go-corner">
      </div>
    </a>
  </div>


  <div class="col-md-3">
    <a class="datcard my-3" href="inventoryDetails.php?category=AudioInterfaces">
      <span style="color:white; font-weight:700;" class="h4 hd">Audio Interfaces</span><br>
       <span class="hdcount"><?php echo '0'.$aiCount?></span><br>

       
       <div style="float:left; font-size: 14pt; ">
        <span>Colombo - <b><?php echo $aiCountC?></b></span><br>
        <span>Kandy - <b><?php echo $aiCountK?></b></span>
       </div>

       <div style="float:right; font-size: 14pt; ">
        <span>Available - <b><?php echo $aiCountA?></b></span><br>
        <span>Take-Out - <b><?php echo $aiCountUa?></b></span>
       </div>

      <div class="go-corner">
      </div>
    </a>
  </div>

  <div class="col-md-3">
    <a class="datcard my-3" href="inventoryDetails.php?category=WireCode">
      <span style="color:white; font-weight:700;" class="h4 hd">Wire Codes</span><br>
       <span class="hdcount"><?php echo '0'.$wcCount?></span><br>

       
       <div style="float:left; font-size: 14pt; ">
        <span>Colombo - <b><?php echo $wcCountC?></b></span><br>
        <span>Kandy - <b><?php echo $wcCountK?></b></span>
       </div>

       <div style="float:right; font-size: 14pt; ">
        <span>Available - <b><?php echo $wcCountA?></b></span><br>
        <span>Take-Out - <b><?php echo $wcCountUa?></b></span>
       </div>

      <div class="go-corner">
      </div>
    </a>
  </div>


  <div class="col-md-3">
    <a class="datcard my-3" href="inventoryDetails.php?category=Cable">
      <span style="color:white; font-weight:700;" class="h4 hd">Cables</span><br>
       <span class="hdcount"><?php echo '0'.$cabCount?></span><br>

       
       <div style="float:left; font-size: 14pt; ">
        <span>Colombo - <b><?php echo $cabCountC?></b></span><br>
        <span>Kandy - <b><?php echo $cabCountK?></b></span>
       </div>

       <div style="float:right; font-size: 14pt; ">
        <span>Available - <b><?php echo $cabCountA?></b></span><br>
        <span>Take-Out - <b><?php echo $cabCountUa?></b></span>
       </div>

      <div class="go-corner">
      </div>
    </a>
  </div>


  <div class="col-md-3">
    <a class="datcard my-3" href="inventoryDetails.php?category=SDCard">
      <span  class="h4 hd">SD Cards</span><br>
       <span class="hdcount"><?php echo '0'.$sdCount?></span><br>

       
       <div style="float:left; font-size: 14pt; ">
        <span>Colombo - <b><?php echo $sdCountC?></b></span><br>
        <span>Kandy - <b><?php echo $sdCountK?></b></span>
       </div>

       <div style="float:right; font-size: 14pt; ">
        <span>Available - <b><?php echo $sdCount?></b></span><br>
        <span>Take-Out - <b><?php echo $sdCount?></b></span>
       </div>

      <div class="go-corner">
      </div>
    </a>
  </div>


  <div class="col-md-3">
    <a class="datcard my-3" href="inventoryDetails.php?category=Computer">
      <span  class="h4 hd">Computers</span><br>
       <span class="hdcount"><?php echo '0'.$comCount?></span><br>

       
       <div style="float:left; font-size: 14pt; ">
        <span>Colombo - <b><?php echo $comCountC?></b></span><br>
        <span>Kandy - <b><?php echo $comCountK?></b></span>
       </div>

       <div style="float:right; font-size: 14pt; ">
        <span>Available - <b><?php echo '0'.$comCountA?></b></span>
       </div>

      <div class="go-corner">
      </div>
    </a>
  </div>

  
</div>
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


            <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
</body>
<script> $(document).ready(function() {
     $('[title="Hosted on free web hosting 000webhost.com. Host your own website for FREE."]').hide();
 });</script>
</html>