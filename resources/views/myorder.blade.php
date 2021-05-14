@extends('master')
@section('content')
<div class="container mt-4">
   <div class="row">
         <h4 style="font-weight: 400;">My Order</h4>
         <table class="table striped">
            <thead>
               <tr>
                  <th>#</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th width="20%">Delivery Status</th>
                  <th>Address</th>
                  <th width="20%">Payment Status</th>
                  <th width="20%">Payment Method</th>
               </tr>
            </thead>
            <tbody>
               <?php $i=1 ?>
               @foreach ($orders as $item)
               <tr>
                  <th>{{ $i++ }}</th>
                  <th>
                     <img class="cart" src="{{$item->gallery}}" alt="">
                  </th>
                  <th>{{ $item->name }}</th>
                  <th><span class="badge badge-pill badge-warning">{{ $item->status }}</span></th>
                  <th>{{ $item->address }}</th>
                  <th><span class="badge badge-pill badge-warning">{{ $item->payment_status }}</span></th>
                  <th>{{ $item->payment_method }}</th>
               </tr>
               @endforeach
            </tbody>
         </table>
   </div>
</div>
@endsection