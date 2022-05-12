<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet" type="text/css">
  <title> TSF Bank </title>
</head>

<body>

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <img src="./images/bank-meta.png" class="boo-logo">
      <a class="navbar-brand" href="#">TSF Bank</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="./transfer-money.php">Transfer Money</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-text">
    <p class="welcome-text">Welcome to TSF Bank</p>
  </div>
  
  <br><br>
  
  <!-- card -->
  
  
  <div class="card-outer">
  <div class="card" style="width: 18rem;">
    <img src="./images/transfermoney.jpg" class="card-img-top" id="img3" alt="transfer money">
    <div class="card-body">
        <h5 class="card-title">Transfer Money</h5>
        <a href="transfer-money.php" class="btn btn-primary">Transfer Money</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="./images/transhistory.png" class="card-img-top" alt="history">
      <div class="card-body">
        <h5 class="card-title">Transection History</h5>
        <a href="history.php" class="btn btn-primary">Transection History</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="./images/customer.jpg" class="card-img-top" alt="create user">
      <div class="card-body">
        <h5 class="card-title">Online Banking</h5>
        <a href="create-user.php" class="btn btn-primary">Online Banking</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="./images/aboutus.jpg" class="card-img-top" alt="delete user">
      <div class="card-body">
        <h5 class="card-title">Check Balence</h5>
        <a href="delete-user.php" class="btn btn-primary">Check Balence</a>
      </div>
    </div>
    
  </div>
    <br>
  <!-- Footer -->

  <div class="container-footer">
    <footer>
        <h4>TSF Bank</h4>
        
        <p>@ TSF Bank 2022 All Rights Reserved </p>
        <p>Created By : Smit Patel</p>
    </footer>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

</body>

</html>