@extends("atheme")
@section("content")
@if(Session::get('success'))
            <div class="alert alert-success">
            {{Session::get('success')}}
            </div>
     @endif
<div class="container">
<div class="row">
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
<br><br><br><br><br>
<form action="/ap" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
    <table class="table table-borderless">
        <tr>
            <td>Product id</td>
            <td><input type="text" name="pid" class="form-control"value="{{old('pid')}}">
            <span class="text-danger">@error('pid'){{$message}} @enderror  </span></td>    
        </td>
        </tr>
        <tr>
            <td>Product name</td>
            <td><input type="text" name="pn" class="form-control"value="{{old('pn')}}">
            <span class="text-danger">@error('pn'){{$message}} @enderror  </span></td>
        </td>
        </tr>
        
        <tr>
            <td>Product description</td>
            <td><input type="text" name="pd" class="form-control"value="{{old('pd')}}">
            <span class="text-danger">@error('pd'){{$message}} @enderror  </span></td>
        </td>
        </tr>
        <tr>
            <td>Product price</td>
            <td><input type="text" name="pp" class="form-control"value="{{old('pp')}}"> 
            <span class="text-danger">@error('pp'){{$message}} @enderror  </span></td>
        </td>
        </tr>
        <tr>
    
    <td>Image</td>
    <td><input type="file" name="pimage"class="form-control" required></td>
        </tr>
        <tr>
        
            <td></td>
            <td><button type="submit" class="btn btn-primary">Add</button></td>
        </tr>
      
    </table>
</form>
</div>
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
</div>
</div>

@endsection 