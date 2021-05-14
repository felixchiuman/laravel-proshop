@extends('master')
@section('content')
<div class="container mt-5">
   <div class="row">
      <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto form p-4">
         <form action="/register" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1" class="form-label">Name</label>
              <input type="text" class="form-control" name="name" id="formGroupExampleInput" placeholder="Name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" id="formGroupExampleInput" placeholder="Email">
            </div>
            <div class="form-group mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="formGroupExampleInput2" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-dark w-100">Sign Up</button>
         </form>
      </div>
   </div>
</div>
@endsection