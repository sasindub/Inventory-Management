<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
 
        $branch = $_POST['branch'];
        header('Location: inventoryDetails.php?category='.$branch);
        
}

if($_SERVER["REQUEST_METHOD"] == "GET"){
 
    $search = $_GET['search'];
    header('Location: inventoryDetails.php?category='.$search);
    
}



?>