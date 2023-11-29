 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
   <h1>Registration Form </h1>
    <div class="container mt-5">
     <div class="row justify-content-center">
       <form action="./create.php" method="post" class="col-5">
    
          <label for="username" class = "form-item ">username:</label><br>
          <input type="text" class="form-control mt-3" name="username" placeholder="email/contact no.">
         
           <label for="password">Password:</label>
         <input type="password" id="password" name="password" class="form-control mt-3" placeholder="password"> <br>
         <input type="submit" value="submit" class="btn btn-primary mt-3">
         <a class="btn btn-primary mt-3" href="signup.php">signup: </a>
       </form>
      </div>
    </div> 
</body>
</html>