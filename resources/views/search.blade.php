@extends('master')
@section('content')
<div class="container">
   <h4>Result Product</h4>
   <div class="row">
      @foreach ($data as $item)
      <div class="col-sm-3 mt-2">
         <div class="card mb-4" style="height: 365px;">
            <img class="product" src="{{ $item->gallery }}" class="card-img-top" alt="...">
            <div class="card-body">
               <a href="detail/{{ $item->id }}">
                  <p class="card-title" style="color: #333;">{{ $item->name }}</p>
               </a>
               <h5 class="card-text">$ {{ $item->price }}</h5>
            </div>
         </div>
      </div>
      @endforeach
   </div>
</div>
@endsection