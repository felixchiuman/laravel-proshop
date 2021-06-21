<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
   <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
   <style>
      * {
         text-transform: uppercase;
         color: rgb(68, 68, 68);
      }
      nav {
         font-size: 13px;
         letter-spacing: 1px
      }
      input.form-control {
         border-radius: 0px;
         text-transform: none;
         font-size: 14px;
      }
      label {
         text-transform: none;
      }
      .btn {
         border-radius: 0px;
      }
      .search {
         border-radius: 0px;
      }
      .dropdown-item {
         text-transform: none;
         font-size: 12px;   
      }
      .img {
         width: 100%;
         height: 420px;
      }
      .carousel-caption {
         background-color: #35443585;
      }
      .product img{
         border-radius: 0px;
      }
      a {
         text-decoration: none;
         color: rgb(54, 53, 53);
      }
      p {
         font-size: 13px;
         text-transform: none;
      }
      .detail {
         width: 480px;
         height: 480px;
      }
      ul li {
         text-transform: none;
      }
      .cart {
         width: 85px;
         height: 85px;
      }
      tr th {
         font-weight: 400;
         text-transform: none;
      }
   </style>
</head>
<body>
   {{View::make('header')}}
   @yield('content')
   {{View::make('footer')}}
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script>
   $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').trigger('focus')
   })
</script>
{{-- <script>
   var seconds = 300; //**change 120 for any number you want, it's the seconds **//
   function secondPassed() {
      var minutes = Math.round((seconds - 30)/60);
      var remainingSeconds = seconds % 60;
      if (remainingSeconds < 10) {
         remainingSeconds = "0" + remainingSeconds;  
      }
      document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds;
      if (seconds == 0) {
         clearInterval(countdownTimer);
         document.getElementById('countdown').innerHTML = "Last chance!";
      } else {
         seconds--;
      }
   }
 
   var countdownTimer = setInterval('secondPassed()', 1000);
</script> --}}

</html>