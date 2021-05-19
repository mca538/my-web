@extends("utheme")
@section("content")
@if(Session::get('success'))
            <div class="alert alert-success">
            {{Session::get('success')}}
            </div>
     @endif
      
      {{session('username')}}
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img width="50px"  height="370px" src="https://ms-spares.in/wp-content/uploads/2020/01/Banner-2-Copy.jpg" class="d-block w-100" alt="50">
          </div>
          <div class="carousel-item">
            <img height="370px" src="https://www.owen-carbon.com/wp-content/uploads/2020/09/banner-owen.png" class="d-block w-100" alt="50">
          </div>
          <div class="carousel-item">
            <img height="370px" src="https://images-eu.ssl-images-amazon.com/images/G/31/img17/Auto/2018/BikeStore/XCM64._CB466738927_.jpg" class="d-block w-100" alt="50">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


      <div class="bb_anc__slide">
            <div class="icon_with_anc">
              
              
              <span class="bike-icon"><img src="//cdn.shopify.com/s/files/1/0519/0084/2163/t/15/assets/Bike-icon_1024x1024.png?v=6657187349174243104" /></span>
              <div class="anc_text_wrap"> 
              Biker Nation is a pioneer in the automobile business in Kerala having more than seven decades of experience in the service and sales of bikespare parts.Now, “Biker Nation” is the No.1 dealer in Kerala with more than 28 bikespare shops spread across Kerala.
              </div>
              
            </div>
          </div>
 
      <p ></p>We are taking orders and all shipments will be dispatched  as soon as  lockdown is relaxed in Kerala. Thank you for understanding . Stay safe.</p>

      <br>
     
      <div class="card mb-3">
        <!-- <img src="images/exploretopbrands.jpg" class="card-img-top" alt="..."> -->
        <div class="card-body">
          <h5 class="card-title">Best sellers</h5>
          <p class="card-text"></p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>


      <div class="row row-cols-1 row-cols-md-3 lg-4">
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img height="250px" src="http://127.0.0.1:8000/assets/project_img/DOMINOGRIP_1024x1024@2x.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Domino Grip For Motorcycle</h5>
              <p class="card-text">Rs280 <br>Presenting the Domino aftermarket rubber grips for motorcycles. These are full rubber grips that offer better grip and feel when you ride.</p>
                <a href="/viewproducts" class="btn btn-primary">View More</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img height="250px" src="http://127.0.0.1:8000/assets/project_img/K_N-RC-1060-airfilter2_f0cc2944-0b37-41b3-92f2-6eb4b5f39db5_1024x1024@2x.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">RF28N9780SG French Door with Family Hub 810L</h5>
              <p class="card-text">Rs2999<br>K&N's Universal Air Filters are designed and manufactured for a wide variety of applications including racing vehicles. </p>
              <a href="/viewproducts" class="btn btn-primary">View More</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img height="250px" src="http://127.0.0.1:8000/assets/project_img/REINTERCEPTOR650BELTDRIVE_4_1024x1024@2x.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">RE Interceptor 650 Belt Drive</h5>
              <p class="card-text">Rs19990<br>Here is the RE Interceptor 650 Belt Drive which includes the Legundary Motorcycle Band Belt Conversion system for Royal Enfield .</p>
              <a href="/viewproducts" class="btn btn-primary">View More</a><br><br><br>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img height="250px" src="http://127.0.0.1:8000/assets/project_img/POWERTRONIC-ROYAL-ENFIELD-THUNDERBIRD-500-_TWIN-SPARK_-_2009-2017_-_3_1024x1024@2x.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Xpulse 200 PowerTronic</h5>
              <p class="card-text">Rs18000<br>PowerTRONIC is the most advanced full feature Piggyback ECU for motorcycles currently available worldwide. Designed to be universally adaptable</p>
              <a href=/viewproducts"" class="btn btn-primary">View More</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img height="250px" src="http://127.0.0.1:8000/assets/project_img/Himalayan-Radiator-Grill-3_1_1024x1024@2x.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">RE Himalayan Radiator Grill</h5>
              <p class="card-text">Rs920<br>
ntroducing RE Himalayan Radiator Grill which safeguards your radiator. Now, take your motorcycle wherever you want more confidently, after installing it.</p>
              <a href="/viewproducts" class="btn btn-primary">View More</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img height="250px" src="http://127.0.0.1:8000/assets/project_img/hondah_nessvambracebashplate_2_1024x1024@2x.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Honda H'ness Vambrace Bash Plate</h5>
              <p class="card-text">Rs2780<br>
Presenting our engine guard from Legundary Custom for Honda H’ness CB350. Protect your engine and other vital parts with this bash plate that is designed for maximum protection and looks.
                </p>
              <a href="/viewproducts" class="btn btn-primary">View More</a>
            </div>
          </div>
        </div>
      </div>      


     





 





                                

 


     

    
      
      
      
      
      
      
      
      
      
      
      
     
     
     
     
     
     
      <div class="row">
        <table class="table table-borderless">
            
            </table>
       
      <div class="col col-12 col-sm-6 col-md-8 col-lg-8 col-xl-8 col-xxl-9">
      <br>
      <br>
      <h6 style="font-family:verdana;color:rgb(12, 11, 11);">USEFUL LINKS</h6>
      <table class="table table-borderless">
        <tr><td><a class="navbar-brand" href="/userhome"><black>Home</a></td></tr>  
        <tr><td><a class="navbar-brand" href="/contactus">Contact us</a></td></tr>
        
        <tr><td><a class="navbar-brand" href="/aboutus">About us</a></td></tr>
        <tr><td><a class="navbar-brand" href="ogout">Logout</a></td></tr>
       
      </table>
        </div>
        <!-- <div class="col col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-3">
            <br>
            <br>
            <h6 style="font-family:verdana;color:rgb(12, 11, 11);">CONTACT</h6>
            <table class="table table-borderless">
                <tr><td><a class="navbar-brand" href="" style="font-family:verdana;color:rgb(12, 11, 11);">                                                 -->
<!--                     
                    Biker Nation<br>
                    contact for further enquiries<br>
                    9736201476 -->
<!--         
            </table>
           
        </div>
      </div>   -->
      <div class="card text-center">
        <div class="card-header">

        </div>
        <div class="card-body">
          <h5 class="card-title"></h5>
          <p class="card-text"></p>
          <a href="/userhome" class="btn btn-primary">Back To Top</a>
        </div>
        <div class="card-footer text-muted">
        </div>
      </div>

      
   
    @endsection