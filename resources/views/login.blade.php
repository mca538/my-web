<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

  </head>

<body background="https://images.squarespace-cdn.com/content/v1/59d53a3ff09ca4f957debfa2/1508126920585-MLMLSVNNTVEI3M70MRIO/ke17ZwdGBToddI8pDm48kHo2gE5EFzkooOUp5QnTC8pZw-zPPgdn4jUwVcJE1ZvWQUxwkmyExglNqGp0IvTJZamWLI2zvYWH8K3-s_4yszcp2ryTI0HqTOaaUohrI8PIA-4dYj7rCsJRaHtgQ8B4gs4fs6wOWvtftR5aeqBIHfgKMshLAGzx4R3EDFOm1kBS/Cycle+Repair.jpg?format=1500w"  style="height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            
          <a class="navbar-brand" href="/front">HOME</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <!-- <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/aboutus">ABOUT US</a>
              </li>  -->
               <!-- <li class="nav-item">
                <a class="nav-link" href="/contactus">CONTACT US</a>
              </li> -->
                <a class="nav-link" href="/reg">SIGN UP</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/login">LOGIN</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="/viewproducts">VIEW PRODUCTS</a>
              </li> -->
              <!-- <form class="d-flex" method="post" action="/psearch">
               {{csrf_field() }}
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="pn">

              <button class="btn btn-outline-success" type="submit">Search</button> 
              </form>
              <li class="nav-item">
                <a class="nav-link" href="/logout">LOGOUT</a>
              </li> -->
            
            </ul>
            
            <div class="bb_anc__slide">
            <div class="icon_with_anc">
              
            <span class="bike-icon"><font><h1 style="color:black">BikersPro</h1></font></span>

              <div class="anc_text_wrap"> 
                
              </div>
              
            </div>
          </div>

          </div>
        </div>
      </nav>
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>

<div class="container">
<div class="row">
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
<br><br><br><br><br><br><br>
<form action="/logs" method="post">
{{ csrf_field() }}


<h1 style="text-align:center;background:  #f9dfdc;border-radius: 20px; color:#000">Login</h1>
    <table class="table table-borderless">
        <tr>
            <td><input type="text" placeholder="Username" name="uname" class="form-control" required></td>
        </tr>
        <tr>
            
            <td><input type="password" placeholder="Password" name="pswd" class="form-control" required></td>
        </tr>
        <tr>
         
         <td><a href="/reg" class="btn btn-primary">Sign Up</a> &nbsp; &nbsp; <button class="btn btn-success">Login</button>
        
     </tr>
    </table>
    </form>
</div>
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>