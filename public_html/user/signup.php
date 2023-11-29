<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<bodyS>
  <div class="container mt-4">
    <div class="row justify-content-center ">
      <form class="col-4" action="save.php" method="post">
        <label for="Name" class="form-item ">Name:</label><br>
        <input type="text" class="form-control mt-1" name="name">
        <label for="Phone no.">Phone no.:</label><br>
        <input type="text" class="form-control mt-1" minlength="10" maxlength="10" name="phone">
        <label for="Email id" class="form-item">Email id</label><br>
        <input type="email" class="form-control mt-1" name="email">
        <label for="Create a password">create a password:</label><br>
        <input type="password" class="form-control mt-1" name="password" id="password">
        <input type="submit" value="submit" class="btn btn-primary mt-3">
      </form>
    </div>
  </div>
  </body>

</html>