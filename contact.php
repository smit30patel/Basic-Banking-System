<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="style.css" rel="stylesheet" type="text/css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>TSF Bank</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <img src="./images/bank-meta.png" class="boo-logo">
      <a class="navbar-brand" href="#">TSF Bank </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="./index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="./transfer-money.php">Transfer Money</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="./contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="support-form"
    style="border-radius: 9px;  border: 1px solid black; align-items: center; margin-left: 487px; margin-top: 60px; width: 550px; height: 360px; background-color: rgb(216, 229, 243);">
    <div class="mb-3" style="padding-left: 50px; padding-right: 50px; padding-top: 36px;">
      <label for="exampleFormControlInput1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" style="border-radius: 9px;"
        placeholder="name@gmail.com">
    </div>
    <div class="mb-3" style="padding-left: 50px; padding-right: 50px; padding-top: 10px;">
      <label for="exampleFormControlTextarea1" class="form-label">Comments</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="border-radius: 9px;"></textarea>
    </div>
    <input type="submit" class="btn btn-primary" value="Submit"
      style="margin-left: 228px; margin-top: 22px; border-radius: 9px;">
    <!-- <button type="submit" value="submit" class="btn btn-primary"  style="margin-left: 228px; margin-top: 30px;">Submit</button> -->

  </div>

  <div class="container-footer">
  <footer>
        <h4>TSF Bank</h4>
        
        <p>@ TSF Bank 2022 All Rights Reserved </p>
        <p>Created By : Smit Patel</p>
    </footer>
</div>



  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>