<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTERED</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<style>
    .wrapper-display{
        font-weight: bold;
        font-size: 30px;
        margin-left: 50px;
    }
    .wrapper-display strong{
        color: white;
        font-style: bold;
        background-color: black;
        border-radius: 2px;
        padding: 2px;
        margin-right: 5px;
        padding-left: zpx;
        
        

    }
    .wrapper-image img{
        width: 300px;
        height: 300px;
        border-radius: 150px;
        margin: 0px;
       margin-bottom: 10px;
       margin-right: 0px;
    }
    .wrapper-image{
        margin-right: 0px;
    }
    .wrapper-image strong{
        font-weight: bold;
        color: red;
        padding: 0px;
        margin: 0px;
    }
    .child img{
        height: 40px;
        width: 40px;
        
    }
    .logo img{
        position: absolute;
        width: 100px;
        height: 100px;
        right: 1px;
        top: 1px;
    }
    .logo p{
        position: absolute;
        right: 2px;
        top: 100px;
        font-size: 11px;
        font-weight: bold;
    }
    
</style>
</head>

<body>
    <div class="parent bg-primary">
    <div class="logo">
        <img src="images/jameslogo.png" alt="">
        <p class="pro text-white">Protech, James Inc.</p>
        </div>
    <div class="wrapper-image d-flex align-items-center justify-content-center ">
    <img src="images/preslogo.png" alt="">
        <div class="child w-100 d-flex align-items-center justify-content-start">
        <h1 class="thanks text-white">THANKYOU FOR REGISTERING THE FORM!</h1>
        <img src="images/check.png" alt="">
        </div>    
   
    </div>
    </div>
    
    
    
<div>
    <div class="wrapper-display my-5">
    <strong>NAME </strong> <?php echo $_GET['firstname'] . ' ' . $_GET['lastname'] ?> <br>

    <strong><?php   

        if ($_GET['select'] == "phone"){
            echo "Phone ";
        }
        else{
            echo "Email";
        }
    

    ?>  </strong> <?php    
        if ($_GET['select'] == "phone"){
            echo $_GET['phone'];
        }else{
            echo $_GET['email'];
        }


    ?> <br>

    <strong>CITY </strong> <?php echo $_GET['city'] ?> <br>
    <strong>COMMENT </strong> <?php echo $_GET['comment'] ?>
    </div>
    
</div>

</body>
</html>