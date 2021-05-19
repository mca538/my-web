@extends("atheme")
@section("content")


<div class="container">
<div class="row">

<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">

<form action="/ordereditprocess/{{$prod->id}}" method="post" >
{{csrf_field()}}<table class="table table-borderless  table-secondary">
<br><br><br>
<tr>
    <td></td><td></td>
</tr>

<tr>
    <td>Order Id</td>
    <td>{{$prod->id}}</td>

</tr>


<tr>
    <td>Product Id</td>
    <td>{{$prod->pid}}</td>
</tr>


<tr>
    <td>User Id</td>
    <td>{{$prod->userid}}</td>
</tr>


<tr>
    <td>Address</td>
    <td>{{$prod->address}}</td>
</tr>


<tr>
    <td>Payment Method</td>
    <td>{{$prod->paymentmethod}}</td>
</tr>
<tr>
    <td>Update Customer Status</td>
    <td><select class="form-select" aria-label="Default select example" name="status">
          <option selected value="pending">pending</option>
            <option value="Your Order has been placed">Your Order has been placed</option>
              <option value="Your item has been delivered">Your item has been delivered</option>
              <option value="Order Cancelled">Order Cancelled</option>
       </select></td>



</tr>

<tr>

    <td><td>  <button class="btn btn-secondary"> Update Data </button></td></td>

</tr>
</table>
</form>
</div>
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
</div>
</div>
@endsection