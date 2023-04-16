@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">
        <table class="table">
            <tbody>
              <tr>
                <td>Amount</td>
                <td>$ {{$total}}</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td>$ 0</td>
              </tr>
              <tr>
                <td>Delivery</td>
                <td>$ 10</td>
              </tr>
              <tr>
                <td>Total Amount</td>
                <td>$ {{$total+10}}</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/orderplaced" method="POST">
              @csrf
                <div class="mb-3">
                  <textarea name="address" placeholder="Your Address" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                  <h5 style="text-decoration: bold;">Payment</h5>
                  <input type="radio" value="cash" name="payment">&nbsp;<span>Mpamba Payment</span>&nbsp;
                  <input type="radio" value="cash" name="payment">&nbsp;<span>Airtel Money Payment</span>&nbsp;
                  <input type="radio" value="cash" name="payment">&nbsp;<span>Bank Payment</span>
                </div>
                <button type="submit" class="btn btn-primary">Order now</button>
              </form>
          </div>
      </div>
</div>
@endsection
