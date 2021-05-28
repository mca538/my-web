
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

  </head>
<body background="https://i.pinimg.com/originals/be/45/3f/be453fdcc7a758c2ff13f76af2bccfdc.jpg" style="background-color:grey" >


    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            
          <a class="navbar-brand" href="/userhome">HOME</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <!-- <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/aboutus">ABOUT US</a>
              </li> -->
              <!-- <li class="nav-item">
                <a class="nav-link" href="/contactus">CONTACT US</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="/cartlist">MY CART</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/myorders">MY ORDERS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/viewproducts">VIEW PRODUCTS</a>
              </li>
              <form class="d-flex" method="post" action="/psearch">
               {{csrf_field() }}
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="pn">

              <button class="btn btn-outline-success" type="submit">Search</button> 
              </form>
              <li class="nav-item">
                <a class="nav-link" href="/logout">LOGOUT</a>
              </li>
            
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
      @yield("content");
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>