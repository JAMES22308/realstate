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
        margin: 20px;
        margin-bottom: 40px
    }
    .wrapper-image strong{
        font-weight: bold;
        color: red;
        padding: 0px;
        margin: 0px;
    }
    .wrapper-image h3 img{
        height: 40px;
        width: 40px;
        position: absolute;
        right: 290px;
        top: 133px;
    }
</style>
</head>

<body>
    <div class="wrapper-image">
    <h1><img src="images/preslogo.png" alt=""> <strong>Thankyou for registering the form!</strong> <h3><img src="images/check.png" alt=""> </h3></h1>
    </div>
    
    
<div>
    <div class="wrapper-display ">
    <strong>NAME </strong> <?php echo $_GET['firstname'] . ' ' . $_GET['lastname'] ?> <br>
    <strong>EMAIL </strong> <?php echo $_GET['email'] ?> <br>
    <strong>PHONE </strong> <?php echo $_GET['phone'] ?> <br>
    <strong>CITY </strong> <?php echo $_GET['city'] ?> <br>
    <strong>COMMENT </strong> <?php echo $_GET['comment'] ?>
    </div>
    
</div>
</body>
</html>