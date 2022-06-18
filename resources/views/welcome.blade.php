@extends('layouts._app-home-pages.landing')
@section('title','Poltekes Jayapura')
@section('content')

 <!--==================== HOME ====================-->
 <section class="home" id="home">
    <div class="home__container container grid">
        <img src="{{asset('/img/hello.png')}}" alt="" class="home__img" style="width: 500px">

        <div class="home__data">
            <h1 class="home__title">
                SURVEY PENELUSURAN ALUMNI <br>
                POLITEKNIK KESEHATAN KEMENKES JAYAPURA
            </h1>
            <p class="home__description">
                Kuesioner Penelusuran Alumni ini adalah untuk menelusuri alumni yang lulus dari Politeknik kesehatan kemenkes Jayapura
            </p>
            <p class="home__description">
                Mohon kesedian dan kerjasama dari pada alumni untuk mengisi kuesioner demi  pengembangan poltekkes kemenkes Jayapura.
            </p>
            <a href="{{route('forum')}}" class="button button--flex">
                MULAI KUESIONER <i class="ri-send-plane-fill button__icon"></i>
                </a>
        </div>

        {{-- <div class="home__social">
            <span class="home__social-follow">Ikuti Kami</span>

            <div class="home__social-links">
                <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                    <i class="ri-facebook-fill"></i>
                </a>
                <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                    <i class="ri-instagram-line"></i>
                </a>
                <a href="https://twitter.com/" target="_blank" class="home__social-link">
                    <i class="ri-twitter-fill"></i>
                </a>
            </div>
        </div> --}}
    </div>
</section>
<!--==================== FOOTER ====================-->
<footer class="footer footer-alt">
    <p class="footer__copy"><script>document.write(new Date().getFullYear())</script>
        &copy; Poltekkes Kemenkes Jayapura</p>
</footer>
@stop
