@extends('master')
@section('content')
{{View::make('hero')}}
<section class="mt-4 mb-4">
<div class="container">
   <h2>TOP TRENDING PRODUCTS</h2>
   <div class="row">
         @foreach ($product as $data)
            <div class="col-sm-3 mt-3">
               <div class="card mb-4" style="height: 365px;">
                  <img class="product" src="{{ $data->gallery }}" class="card-img-top" alt="...">
                  <div class="card-body">
                     <a href="detail/{{ $data->id }}">
                        <p class="card-title" style="color: #333;">{{ $data->name }}</p>
                     </a>
                     <h5 class="card-text">$ {{ $data->price }}</h5>
                     </div>
                  </div>
            </div>
         @endforeach
      </div>
   </div>
</section>
@endsection