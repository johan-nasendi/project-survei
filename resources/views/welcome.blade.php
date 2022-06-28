@extends('layouts._app-home-pages.landing')
@section('title','Poltekes Jayapura')
@section('content')

 <!--==================== HOME ====================-->
 <section class="home" id="home">
    <h1 class="home__title">
        SURVEY PENELUSURAN ALUMNI <br>
        POLITEKNIK KESEHATAN KEMENKES JAYAPURA
    </h1>
    <div class="home__container container grid">
        <img src="{{asset('/img/hello.png')}}" alt="" class="home__img" style="width: 400px">

        <div class="home__data" style="margin-left: 7.28rem;">
            <p class="home__description" >
                Kuesioner Penelusuran Alumni ini adalah untuk menelusuri alumni yang lulus dari Politeknik kesehatan kemenkes Jayapura
            </p>
            <p class="home__description">
                Mohon kesedian dan kerjasama dari pada alumni untuk mengisi kuesioner demi  pengembangan poltekkes kemenkes Jayapura.
            </p>

            <a href="{{route('forum')}}" class="button button--flex"  >
                MULAI KUESIONER <i class="ri-send-plane-fill button__icon"></i>
            </a>
        </div>
    </div>
</section>
<!--==================== FOOTER ====================-->
<footer class="footer footer-alt">
    <p class="footer__copy"><script>document.write(new Date().getFullYear())</script>
        &copy; Poltekkes Kemenkes Jayapura |  <a href="{{route('login')}}" style="color: #2f3640;"> Login </a> </p>

</footer>

@stop
