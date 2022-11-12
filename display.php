<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Document</title>

</head>
<body>
    
    <div class="container-fluid bg-success vh-100">
        <div class="logo text-white d-flex justify-content-center align-items-center">
            <h1 class="fw-bold">DU30 Real Estate</h1>
            <img src="./logo.png" alt="">
        </div>
        <h1 class="text-center text-white">Thank you for submiiting the form!</h1>
        <div class="user-info text-white d-flex justify-content-center align-items-start flex-column">
            <div class="firstName d-flex justify-content-center align-items-center">
                <h1 class="mx-3" >First Name: </h1>
                <?php echo "<h1>" . $_GET['firstName'] . "</h1>" ; ?>
            </div>
            <div class="firstName d-flex justify-content-center align-items-center">
                <h1 class="mx-3" >Last Name: </h1>
                <?php echo "<h1>" . $_GET['lastName'] . "</h1>" ; ?>
            </div>
            <div class="firstName d-flex justify-content-center align-items-center">
                <h1 class="mx-3" >Email: </h1>
                <?php echo "<h1>" . $_GET['email'] . "</h1>" ; ?>
            </div>
            <div class="firstName d-flex justify-content-center align-items-center">
                <h1 class="mx-3" >Phone: </h1>
                <?php echo "<h1>" . $_GET['phone'] . "</h1>" ; ?>
            </div>
            <div class="firstName d-flex justify-content-center align-items-center">
                <h1 class="mx-3" >Comment: </h1>
                <?php echo "<h1>" . $_GET['city'] . "</h1>" ; ?>
            </div>
            <div class="firstName d-flex justify-content-center align-items-center">
                <h1 class="mx-3" >Comment: </h1>
                <?php echo "<h1>" . $_GET['comment'] . "</h1>" ; ?>
            </div>
            
            
        </div>
    </div>

    
</body>
</html>