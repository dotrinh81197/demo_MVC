<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CodeGym's Products Management</title>

  <link rel="shortcut icon" href="/assets/images/CG_logo.png" type="image/x-icon" />
  <link rel="stylesheet" href="/assets/styles/bootstrap.min.css" />
  <link rel="stylesheet" href="/assets/styles/style.css" />
</head>

<body>
  <!-- APPLICATION HEADER -->
  <nav class="navbar navbar-light bg-light justify-content-between">
    <a class="navbar-brand" href="?controller=home&action=welcome">
      <div class="app-logo">
        <img src="/assets/images/CG_logo.png" alt="" />
      </div>
      Manager
    </a>

    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link <?php showActive("home") ?>" href="?controller=home&action=welcome"> Welcome </a>
      </li>

      <li class="nav-item">
        <a class="nav-link <?php showActive("products") ?>" href="?controller=products&action=index"> Products </a>
      </li>

      <li class="nav-item">
        <a class="nav-link <?php showActive("categories") ?>" href="?controller=categories&action=index"> Categories </a>
      </li>
    </ul>

    <form action="../login/login.html" method="GET">
      <a class="nav-link" onclick="confirm('Do you want to sign out?') && this.parentNode.submit();" ; href="javascript:;">Sign Out</a>
    </form>
  </nav>
  <!-- END APPLICATION HEADER -->
  <div class="container-fluid mt-3">

    <?php if (isset($content)) {
      echo $content;
    }
    ?>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html