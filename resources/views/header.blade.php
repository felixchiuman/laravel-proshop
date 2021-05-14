<?php
use App\Http\Controllers\ProductController;
$total = 0;
if(Session::has('user'))
{
   $total = ProductController::cartItem();
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-4">
   <div class="container">
     <a class="navbar-brand" href="/">Proshop</a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarNavDropdown">
       <ul class="navbar-nav me-auto mb-2 mb-lg-0 mr-auto">
         <form class="form-inline" action="/search">
            <input class="form-control mr-2" type="search" name="query" placeholder="Search Products..." aria-label="Search" style="border: none">
            <button class="btn btn-outline-light search" type="submit">Search</button>
          </form>
       </ul>
       <ul class="navbar-nav ml-auto">
         <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/cart"><i class="fas fa-shopping-cart" style="color: rgb(182, 182, 182)"></i> {{$total}}</a>
          </li>
          @if (Session::has('user'))
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Hi, {{Session::get('user')['name']}}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/my-orders">Profile</a>
              <a class="dropdown-item" href="/logout">Logout</a>
            </ul>
          </li>
          @else
          <li class="nav-item">
              <a class="nav-link" href="/login">Login</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/register">Register</a>
          </li>
         @endif
       </ul>
     </div>
   </div>
</nav>