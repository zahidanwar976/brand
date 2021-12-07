<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('assets/admin/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
  <link 
    href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Poppins:wght@300;400;500;600;700&display=swaphttps://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Poppins:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
  <title>Home</title>
</head>
<body>
  <section class="dashboard-section" style="background-image: url('{{ asset('assets/admin/images/bg-img.jpg') }}');">




    <header>
      <div class="container-fluid">
        <div class="header-links">
          <div class="dropdown show notification-link">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell"></i><span>0</span></a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="#">
                <h4>Lorem ipsum dolor sit amet.</h4>
                <span>Mar 12, 2021</span>
              </a>
              <a class="dropdown-item" href="#">
                <h4>Lorem ipsum dolor sit amet.</h4>
                <span>Mar 12, 2021</span>
              </a>
              <a class="dropdown-item" href="#">
                <h4>Lorem ipsum dolor sit amet.</h4>
                <span>Mar 12, 2021</span>
              </a>
              <a class="dropdown-item load-more" href="#">Load More</a>
            </div>
          </div>

          <div class="dropdown show user-link">
            <a class=" dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-user-circle" aria-hidden="true"></i>
              <div class="user-info">
                <h4>Moses Indrias</h4>
                <span>Admin</span>
              </div>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="#">My Profile</a>
              <a class="dropdown-item" href="#">Logout</a>
            </div>
          </div>

        </div>
      </div>
    </header>
