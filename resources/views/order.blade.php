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
              <input type="radio" value="cash" name="payment"> <span>QR Code</span> <br>
              {{-- <input type="radio" value="cash" name="payment"> <span>Mandiri</span> <br> --}}
              {{-- <input type="radio" value="cash" name="payment"> <span>COD</span> --}}
            </div>
            {{-- <form-group>
               <button type="button" class="btn btn-dark mb-3" data-toggle="modal" data-target="#myModal">
                  QRIS
               </button>
               <div class="modal" id="myModal">
                  <div class="modal-dialog">
                    <div class="modal-content">
                    
                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">Scan Pembayaran</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      
                      <!-- Modal body -->
                      <div class="modal-body">
                        {!! QrCode::size(450)->generate('http://127.0.0.1:8000/my-orders') !!}
                        <div id="bottomdiv">
                           <p class="mytext2"><span id="countdown" class="timer"></span></p>
                         </div>
                      </div>
                      
                      <!-- Modal footer -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-dark btn-block" data-dismiss="modal">OK</button>
                      </div>
                      
                    </div>
                  </div>
                </div>
            </form-group> --}}
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
                        Rp. {{ $total }}
                     </div>
                  </div>
               </div>
               <div class="list-group-item">
                  <div class="row">
                     <div class="col">
                        Tax
                     </div>
                     <div class="col">
                        Rp. 0
                     </div>
                  </div>
               </div>
               <div class="list-group-item">
                  <div class="row">
                     <div class="col">
                        Shipping
                     </div>
                     <div class="col">
                        Rp. 7
                     </div>
                  </div>
               </div>
               <div class="list-group-item">
                  <div class="row">
                     <div class="col">
                        Total Amount
                     </div>
                     <div class="col">
                        Rp. {{$total + 7}}
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection