<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REAL STATE</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<style>
    image{
        
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .image img{
        height: 300px;
        width: 300px;
        border-radius: 150px;
        margin-top: 10px;
        margin-bottom: 10px;
    }
    .wrapper-parent h1{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .wrapper-parent p{
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 15px;
        margin-bottom: 25px;
    }
    .wrapper-form{
        margin-top: 10px;
    }
    .wrapper-city{
       margin-right: 30px;
       margin-left: 18px;
    }
    .wrapper-city select{
        height: 30px;
        width: 189px;
    }
    .wrapper-submit{
       margin-top: 40px;
       
    }
    .wrapper-submit input{
        background-color: rgb(30,50,135);
        color: white;
        font-weight: bold;
    }
    .wrapper-contact select{
        height: 35px;
        width: 189px;
        margin-left: -10px;
        margin-right: 10px;
    }
    .wrapper-input{
        position: absolute;

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
<body>
    <div class="logo">
       <img src="images/jameslogo.png" alt="">
       <p>Protech, James Inc.</p>
    </div>

<div>
    <table border="1">
    <form action="submitted.php" method="get">
        <div class="div container">
            <div class="image d-flex justify-content-center align-items-center">
            <img src="images/preslogo.png" alt="">
            </div>
            
            <div class="wrapper-parent ">
            <h1>REGISTRATION FORM</h1>
            <p>Fill this out!</p>

            <div class="wrapper-info d-flex justify-content-center align-items-center">

            <div class="wrapper-firstname">
            <label for="firstname"> <b>First Name</b></label>
            <input type="text" name="firstname" required> 
            </div>
            
            <div class="wrapper-lastname">
            <label for="lastname"> <b>Last Name</b></label>
            <input type="text" name="lastname" required>
            </div>
            

            <div class="wrapper-contact">
            <label for="select"> <b>Contact</b> </label>
            <select name="select" id="select" class="form-control" onchange="javascript()" required>
                <option value="">select choice</option>
                <option value="phone">phone</option>
                <option value="email">email</option>
            </select>
            <div class="wrapper-input" name="contact" id="contact" for="contact" required >
                <input name="email" type="email" id="email" type="text" placeholder="email"  />
                 <input name="phone" id="phone" type="text" placeholder="phone" />
            
            </div>
            
            
            </div>


            <div class="wrapper-city">
            <label for="city"><b>City</b></label>
            <select name="city" id="city" required>
                <option value=""> </option>
                <option value="MANILA">MANILA</option>
                <option value="CEBU">CEBU</option>
                <option value="DAVAO">DAVAO</option>
            </select>
            </div>
            

            <div class="wrapper-comment">
            <label for="comment"> <b>Comment</b></label>
            <input type="comment" name="comment" required>
            </div>
    
            </div>
            

            </div>
            
            
        </div>
        <div class="wrapper-submit d-flex justify-content-center align-items-center">
            <input type="submit" name="create" values="Sign Up">
            </div>
    
    </form>
    </table>
    
</div>
<script>
      document.getElementById("phone").style.display = "none";
      document.getElementById("email").style.display = "none";

      function javascript() {
        const value = document.getElementById("select").value;

        console.log(value);

        if (value === "phone") {
          document.getElementById("phone").style.display = "block";
          document.getElementById("email").style.display = "none";
        } else {
          document.getElementById("email").style.display = "block";
          document.getElementById("phone").style.display = "none";
        }
      }
    </script>
  
</body>
</html>