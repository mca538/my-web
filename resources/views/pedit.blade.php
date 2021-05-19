@extends("atheme")
@section("content")
<div class="container">
<div class="row">
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
<br><br><br><br><br>
<form action="update" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
    <table class="table table-borderless">
        <tr>
            <td>Product id</td>
            <td><input type="text" name="pid" value="{{ $user->pid}}" class="form-control">
            <span class="text-danger">@error('pid'){{$message}} @enderror  </span></td>    
        </td>
        </tr>
        <tr>
            <td>Product name</td>
            <td><input type="text" name="pn" value="{{ $user->pn}}" class="form-control">
            <span class="text-danger">@error('pn'){{$message}} @enderror  </span></td>
        </td>
        </tr>
        
        <tr>
            <td>Product description</td>
            <td><input type="text" name="pd" value="{{ $user->pd}}" class="form-control">
            <span class="text-danger">@error('pd'){{$message}} @enderror  </span></td>
        </td>
        </tr>
        <tr>
            <td>Product price</td>
            <td><input type="text" name="pp" value="{{ $user->pp}}" class="form-control"> 
            <span class="text-danger">@error('pp'){{$message}} @enderror  </span></td>
        </td>
        </tr>
        <tr>
    
   
        
            <td><input type="hidden" name="id"  value="{{$user->id}}"/></td>
            <td><button type="submit" class="btn btn-primary">Update</button></td>
        </tr>
      
    </table>
</form>
</div>
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
</div>
</div>

    @endsection