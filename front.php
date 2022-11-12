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
    <div class="container-fluid bg-primary" style="min-height: 100vh">
        <div class="logo text-white d-flex justify-content-center align-items-center">
            <h1 class="fw-bold">DU30 Real Estate</h1>
            <img src="./logo.png" alt="">
        </div>
        <div class="container-fluid bg-white p-5">
            <form action="php.php" method="get">
                <div class="form-group">
                    <input type="text" class="form-control my-3" name="firstName" id="firstName" placeholder="First Name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control my-3" name="lastName" id="lastName" placeholder="Last Name">
                </div>
                <select class="form-select" id="contact" onchange="handleContact()" >
                    <option selected>How would you like to contact</option>
                    <option value="phone">Phone</option>
                    <option value="email">Email</option>
                </select>
                <div id="contactInfo">
                    <div class="form-group my-3" id="email-wrapper" style="display: none">
                        <label for="email">Please Enter Email: </label>
                        <input type="email" class="form-control my-3" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="form-group my-3" id="phone-wrapper" style="display: none">
                        <label for="phone">Please enter Phone Number: </label>
                        <input name="phone" type="text" class="form-control my-3" id="phone" placeholder="Phone">
                    </div>
                </div>
                
                <div class="form-group">
                    <input type="text" class="form-control my-3" name="city" id="lastName" placeholder="Enter City">
                </div>
                
                <div class="form-outline" >
                    <label class="form-label" for="textAreaExample">Comments</label>
                    <textarea class="form-control" id="textAreaExample1" rows="4" name="comment"></textarea>
                </div>
                
                <div class="submit-wrapper w-100 d-flex justify-content-center align-items-center">
                    <input type="submit" value="Submit" class="btn btn-primary px-5 py-2 my-4">
                </div>
            </form>
        </div>
        
    </div>
    <script>
        function handleContact(){
            const contact = document.getElementById("contact").value;
           if (contact === "phone"){
            document.getElementById("email-wrapper").style.display = "none";
            document.getElementById("phone-wrapper").style.display = "block";
            
           }
           else if (contact === "email"){
            document.getElementById("phone-wrapper").style.display = "none";
            document.getElementById("email-wrapper").style.display = "block";

           }
           else{
            document.getElementById("email-wrapper").style.display = "none";
            document.getElementById("phone-wrapper").style.display = "none";

           }

        }
      
    </script>
    
</body>
</html>