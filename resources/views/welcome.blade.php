<!DOCTYPE html>
<html>
<head>
<title>Poltekkes Jayapura</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!--EXTERNAL CSS-->
<link rel="shortcut icon" href="{{asset('/img/logo.png')}}">

<!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;800&display=swap" rel="stylesheet">

<link href="{{ asset('/css/custom.css') }}" rel="stylesheet">

<!--PLUGIN-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

<!--FONT AWESOME-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<!--HEADER-->
<header>
        <div class="banner">
            <span>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            </span>
        </div>
        <nav class="nav" id="nav">
            <a href="#" class="active">®<em>POLTEKKES</em> <l style="font-weight:200;">|</l> JAYAPURA</a>
            <a href="#">HOME</a>
            <a href="#">ABOUT</a>
            <a href="#">CONTACT</a>
            <a href="{{route('login')}}" style="float:right;padding:10px 0;"><i class="fa fa-user"></i> LOGIN</a>
            <a class="icon" id="icon" onclick="opennav()"><i class="fa fa-bars"></i></a>
        </nav>

        <div id="navbar">
            <a href="#" class="active">®<em>POLTEKKES </em> <l style="font-weight:200;">|</l> Jayapura</a>
            <a href=" {{route('login')}}"><i class="fa fa-user"></i> LOGIN</a>
            <a href="#">CONTACT</a>
            <a href="#">ABOUT</a>
            <a href="#">HOME</a>
        </div>
</header>

<!--CONTAINER-->
<div class="container">
    <table>
         <tr>
         <td>
             <section>
                    <em>WELCOME TO POLTEKKES JAYAPURA </em>
                     <h3 class="title ml9">
                        <span class="text-wrapper">
                            <span class="letters">PEDOMAN PELAKSANAAN TRACER STUDY POLTEKKES KEMENKES</span>
                        </span>
                     </h3>
                  <h5 class="sub-title">Apakah Anda Siap Untuk Mengikuti Kuesioner Tracer Study (Alumni) ?
                      Klik <b style="color: #fbc01a;">START</b> </h5>
                    <a href="{{route('forum')}}"  class="btn1">START <i class="fa fa-paper-plane"></i>  </a>
             </section>
         </td>
         <td>
         {{-- <img src="https://i.ibb.co/WB37jWp/LOGO-POLTEKES-JAYAPURA.png" style="width: 400px"; height="400px"; alt=""> --}}
         <img src="https://i.ibb.co/RSZ2DJ7/02-tes.jpg"  alt="01">
         </td>
         </tr>
    </table>
</div>



<!--JAVASCRIPT-->
<script src="{{asset('/js/custom.js')}}"></script>
<script src="https://kit.fontawesome.com/b00263187e.js" crossorigin="anonymous"></script>
</body>
</html>





