@extends('master')
@section('content')
<div class="container p-2 mt-5">
   <div class="row text-center">
      <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto">
         <div class="card text-center" style="width: 20rem;">
            <div class="card-header">
              QRIS
            </div>
            <ul class="list-group list-group-flush">
              <div class="list-group-item">
               {!! QrCode::size(250)->generate('http://127.0.0.1:8000/my-orders') !!}
              </div>
            </ul>
            <div class="card-body">
               <a class="btn btn-dark btn-block" onclick="myFunction()" href="/my-orders">OK</a>
            </div>
          </div>
      </div>
   </div>
</div>
@endsection