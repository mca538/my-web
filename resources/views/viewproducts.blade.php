@extends("utheme")
@section("content")
@if(Session::get('success'))
            <div class="alert alert-success">
            {{Session::get('success')}}
            </div>
     @endif


<h4><center>Our Products</center></h4><br>
@foreach($prod as $prods)
<form action="/add_to_cart" method="post">
      {{csrf_field()}}
      <input type="hidden" name="pid" value= "{{ $prods->pid }}">

      <div class="container">
      <div class="row">
      <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
      <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4"> <div class="card mb-3" style="max-width:540px;">
  <div class="row g-0">
    <div class="col-md-4">
 <img height="200x"  src="{{ URL ::asset('assets/project_img/'.$prods->pimage) }}" class="card-img-top" alt="...">    </div>
    <div class="col-md-8">
      <div class="card-body">
      <h4 class="card-title">{{$prods->pn}}</h4>
        <h5 class="card-title">Rs{{$prods->pp}}</h5>
        <p class="card-text">{{$prods->pd}}</p>
        <!-- <p class="card-text"><small class="text-muted">{{$prods->pid}}</small></p> -->
        <button class="btn btn-primary" type="submit">Add to cart</button>
      </div>
    </div>
  </div>
  <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
</div>
</div>



      </div>
      </div>

                                </form>
                                
                                @endforeach
                                @endsection
                               
