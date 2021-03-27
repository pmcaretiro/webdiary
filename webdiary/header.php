<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <title>Home</title>
  </head>


<!-- NAVBAR -->
  <style>

         body {
                background-image: url(./bg4.jpg);
                background-attachment: fixed;
                background-position: center;
                background-size: cover;
              }

        #mainNav{
                background: #343a40;
                font-family:Courier;
                font-size: 20px;
                letter-spacing: -1px;
                }
        .nav-item a {
                color: #ff9aa2;
                }
        .nav-link::after{
                content: '';
                display: block;
                width: 0;
                height: 2px;
                background-color: #ff9aa2;
                transition: width .3s
        }

        .nav-link:hover::after{
                width: 100%;
                transition: width .3s;

        }

        .custom-toggler .navbar-toggler-icon {
              background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgb(255, 154, 162, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
            }

            .custom-toggler.navbar-toggler {
              border-color: rgb(255, 154, 162);
            } 



        @media screen and (min-width: 992px) {
                #mainNav {
                position: relative;
                }
              }
    </style>
<!-- NAVBAR CSS -->

<body>
  <!-- NAVBAR BODY -->
      <nav class="navbar navbar-expand-lg py-lg-4" id="mainNav">
         <div class="container-fluid">
        <a class="navbar-brand" href="#">Diary Website</a>
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon navbar-light"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbars">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="header.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="entries.html">My Entries</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="entryfin.html">Write New Entry</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="accountfin.html">Account</a>
            </li>
          </ul>
        </div>
      </nav>
<!-- NAVBAR END -->



  </body>
</html>