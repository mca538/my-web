@extends('atheme')
@section('content')
<div>
<table class="table table-striped">
    
    <tbody>
      <tr>
        <td>Amount</td>
        <td>{{$total}}</td>
      </tr>
      <tr>
        <td>GST</td>
        <td>300</td>
      </tr>
      <tr>
        <td>Delivery Charge</td>
        <td>50</td>
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>{{$total+350}}</td>
      </tr>
    </tbody>
  </table>
  <div>
  <form action="/orderplace" method="post">
      {{csrf_field()}}
  <div class="form-group">
    <textarea name="address" class="form-control" placeholder="Enter your address"></textarea>
  </div>
  <div class="form-group">
    <label for="pwd">Payment Method</label><br><br>
    <!-- <input type="radio" value="card" name="payment"><span>Debit/Credit card</span><br><br>
    <input type="radio" value="upi" name="payment"><span>UPI</span><br><br> -->
    <input type="radio" value="cod" name="payment"><span>Cash On delivery</span><br><br>
  <button type="submit" class="btn btn-primary">Order Now</button>
</form>
  </div>
 </div>
 


 @endsection