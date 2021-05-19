@extends("atheme")
@section("content")

<div class="container">
<div class="row">

 <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 ">
 <br><br>
 <table class="table table-borderless">
 <tr>
     <td>Product Id</td>
     <td>Product Name</td>
     <td>Product Description</td>
     <td>Product Price</td>
     <td>Image</td>
     <td>&nbsp&nbsp&nbspAction</td>
     


 </tr>

  @foreach($user as $userf)
 <tr>
     <td>{{$userf->pid}}</td>
     <td>{{$userf->pn}}</td>
     <td>{{$userf->pd}}</td>
     <td>{{$userf->pp}}</td>
     <td>{{$userf->pimage}}</td>
     
     <td><a class="btn btn-warning" href="/edit/{{$userf->id}}">  Edit  </a></td>
     <td><a class="btn btn-danger" href="/delete/{{$userf->id}}">  delete  </a></td>
     


 </tr>
 
 @endforeach
 </table>
 </div>
 
</div>
</div>
@endsection

