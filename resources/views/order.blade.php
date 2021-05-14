@extends('master')
@section('content')
<div class="container mt-4">
   <div class="row">
      <div class="col-md-8">
         <form action="/placeorder" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1" class="form-label">Address</label>
              <textarea name="address" class="form-control" style="text-transform: none;"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1" class="form-label">Payment Method: </label> <br>
              <input type="radio" value="cash" name="payment"> <span>BCA</span> <br>
              <input type="radio" value="cash" name="payment"> <span>Mandiri</span> <br>
              <input type="radio" value="cash" name="payment"> <span>COD</span>
            </div>
            <button type="submit" class="btn btn-dark w-100">ORDER NOW</button>
         </form>
      </div>
      <div class="col-md-4">
         <div class="card" style="border-radius: 0px">
            <div class="list-group-flush">
               <div class="list-group-item">
                  <h4 style="font-weight: 400;">ORDER SUMMARY</h4>
                  <div class="row">
                     <div class="col">
                        Amount
                     </div>
                     <div class="col">
                        $ {{ $total }}
                     </div>
                  </div>
               </div>
               <div class="list-group-item">
                  <div class="row">
                     <div class="col">
                        Tax
                     </div>
                     <div class="col">
                        $ 0
                     </div>
                  </div>
               </div>
               <div class="list-group-item">
                  <div class="row">
                     <div class="col">
                        Shipping
                     </div>
                     <div class="col">
                        $ 7
                     </div>
                  </div>
               </div>
               <div class="list-group-item">
                  <div class="row">
                     <div class="col">
                        Total Amount
                     </div>
                     <div class="col">
                        $ {{$total + 7}}
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection