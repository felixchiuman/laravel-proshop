@extends('master')
@section('content')
<div class="container mt-4 mb-5">
   <a href="/" class="btn btn-dark mb-4">Go Back</a>
   <div class="row">
      <div class="col-md-6">
         <img class="detail" src="{{ $product->gallery }}" alt="">
      </div>
      <div class="col-md-6">
         <ul class="list-group list-group-flush">
            <li class="list-group-item">
               <h2>{{ $product->name }}</h2>
            </li>
            <li class="list-group-item">
               Price: ${{ $product->price }}
            </li>
            <li class="list-group-item">
               Description: {{ $product->description }}
            </li>
            <li class="list-group-item">
               {!! QrCode::size(100)->generate(Request::url()) !!}
            </li>
            <li class="list-group-item">
               <form action="/add-to-cart" method="POST">
                  @csrf
                  <input type="hidden" name="product_id" value="{{$product->id}}">
                  <button class="btn btn-dark btn-block w-100">Add To Cart</button>
               </form>
            </li>
         </ul>
      </div>
   </div>
</div>
@endsection