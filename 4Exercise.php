<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<h1>Form</h1>
  <form action="conection.php" method="post">
    <div class="form-group">
      <label for="InputName">Name</label>
      <input type="text" class="form-control" placeholder="Name" name="name">
    </div>
    <div class="form-group">
      <label for="InputEmail">Email</label>
      <input type="email" class="form-control" placeholder=Email name="email">
    </div>
    <div class="form-group">
      <label for="InputPhone">Phone</label>
      <input type="text" class="form-control" placeholder="Phone" name="phone">
    </div>
    <div class="form-group">
      <label for="InputMessage">Message</label>
      <input type="textarea" class="form-control" placeholder="Message" name="message">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</body>
</html>