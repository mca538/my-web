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


    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
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
              
              
              <span class="bike-icon"><font style="color:white">Biker</font><img src="//cdn.shopify.com/s/files/1/0519/0084/2163/t/15/assets/Bike-icon_1024x1024.png?v=6657187349174243104" /><font style="color:white">Nation</font></span>
              <div class="anc_text_wrap"> 
                
              </div>
              
            </div>
          </div>

          </div>
        </div>
      </nav>

<div class="container">
<div class="row">
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
<br><br><br><br>
<img height="500px" src="https://images.pexels.com/photos/6156531/pexels-photo-6156531.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="img-thumbnail" alt="...">
</div>
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
<br><br><br>
<center><h4>Sign Up</h4></center>
<form action="/store" method="post">
    {{csrf_field()}}
    <table class="table table-borderless">
    
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" class="form-control">
            <span class="text-danger">@error('name'){{$message}} @enderror  </span>
            </td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input type="text" name="uname" class="form-control">
            <span class="text-danger">@error('uname'){{$message}} @enderror  </span>
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" class="form-control">
            <span class="text-danger">@error('email'){{$message}} @enderror  </span>
            </td>
        </tr>
        <tr>
            <td>Mobile</td>
            <td><input type="text" name="mobile" class="form-control">
            <span class="text-danger">@error('mobile'){{$message}} @enderror  </span>
            </td>
        </tr>
        <tr>
                <td>Gender</td>
                <td>
                     <input class="form-check-input" type="radio" name="ugend" id="flexRadioDefault1" value="male" >
                
                     <label class="form-check-label" for="flexRadioDefault1">
                     Male
                     </label> &nbsp &nbsp &nbsp &nbsp
                     <input class="form-check-input" type="radio" name="ugend" id="flexRadioDefault2" value="female" >
                     <label class="form-check-label" for="flexRadioDefault2">
                     Female
                    </label><br>
                    <span class="text-danger">@error('ugend'){{$message}} @enderror  </span>
                </td>

                </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" name="pswd" class="form-control">
            <span class="text-danger">@error('pswd'){{$message}} @enderror  </span>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><button class="btn btn-primary" type="submit">Sign Up</button></td>
        </tr>
    </table>
    
    </form>
</div>

</div>
</div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>