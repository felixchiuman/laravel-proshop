@extends('master')
@section('content')
<?php
use App\Http\Controllers\ProductController;
$total = 0;
if(Session::has('user'))
{
   $total = ProductController::cartItem();
}
?>
<div class="container mt-4">
   <div class="row">
      <div class="col-md-8">
         <h1 style="letter-spacing: 3px; font-weight: 400;">Shopping Cart</h1>
         @foreach ($products as $item)
         <div class="list-group-flush">
            <div class="list-group-item">
               <div class="row">
                  <div class="col-md-2">
                     <img class="cart" src="{{ $item->gallery }}" alt="">
                  </div>
                  <div class="col-md-4">
                     <a href="/detail/{{ $item->id }}" style="text-transform: none;">{{ $item->name }}</a>
                  </div>
                  <div class="col-md-2">${{ $item->price }}</div>
                  <div class="col-md-2">
                     <a href="/remove/{{$item->cart_id}}"><i class="fas fa-trash text-danger"></i></a>
                  </div>
               </div>
            </div>
         </div>
         @endforeach
      </div>
      <div class="col-md-4">
         <div class="card" style="border-radius: 0px">
            <div class="list-group-flush">
               <div class="list-group-item">
                  <h4 style="letter-spacing: 3px; font-weight: 400;">
                     Subtotal ({{$total}}) Items
                  </h4>
               </div>
               <div class="list-group-item">
                  <a href="/order" class="btn btn-dark btn-block" style="font-size: 11px">PROCEED TO CHECKOUT</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection