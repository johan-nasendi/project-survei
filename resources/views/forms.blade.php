@extends('layouts._app-home-pages.landing')
@section('title','Poltekkes Jayapura')
@section('content')

@push('css-internal')
    <!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;800&display=swap" rel="stylesheet">
@endpush

@push('js-external')
<link href="{{ asset('/css/background.css') }}" rel="stylesheet">
@endpush

        <h1 class="header-titl"> Kuesioner Tracer Study (Alumni) </h1>
        <br>
        <div id="basicwizard">
            @include('layouts.component.nav-form')
            <form  action="{{route('forum.post')}}"  method="POST">
                <div class="tab-content b-0 mb-0 pt-0">
                    @include('layouts.component.content-form')
                </div> <!-- tab-content -->
                @csrf
            </form>
        </div> <!-- end #basicwizard-->

@stop
@push('js-internal')
<script type="text/javascript">

    function showDiv(){
        getSelectValue = document.getElementById("test").value;
        if(getSelectValue == "Yes"){
            document.getElementById("hidden_div_yes_one").style.display="block";
        }
        if(getSelectValue == "Yes"){
            document.getElementById("hidden_div_yes_two").style.display="block";
        }
        if(getSelectValue == "Yes"){
            document.getElementById("hidden_div_yes_three").style.display="block";
        }
        if(getSelectValue == "Yes"){
            document.getElementById("hidden_div_yes_four").style.display="block";
        }
        if(getSelectValue == "Yes"){
            document.getElementById("hidden_div_yes_five").style.display="block";
        }
        if(getSelectValue == "Yes"){
            document.getElementById("hidden_div_yes_six").style.display="block";
        }
        if(getSelectValue == "Yes"){
            document.getElementById("hidden_div_yes_seven").style.display="block";
        }
        if(getSelectValue == "Yes"){
            document.getElementById("hidden_div_yes_eight").style.display="block";
        }
        if(getSelectValue == "Yes"){
            document.getElementById("hidden_div_yes_nine").style.display="block";
        }
        if(getSelectValue == "Yes"){
            document.getElementById("hidden_div_yes_ten").style.display="block";
        }
        if(getSelectValue == "Yes"){
            document.getElementById("hidden_div_yes_eleven").style.display="block";
        }
        if(getSelectValue == "Yes"){
            document.getElementById("hidden_div_yes_twelve").style.display="block";
        }

        else  {
            document.getElementById("hidden_div_yes_one").style.display="none";
            document.getElementById("hidden_div_yes_two").style.display="none";
            document.getElementById("hidden_div_yes_three").style.display="none";
            document.getElementById("hidden_div_yes_four").style.display="none";
            document.getElementById("hidden_div_yes_five").style.display="none";
            document.getElementById("hidden_div_yes_six").style.display="none";
            document.getElementById("hidden_div_yes_seven").style.display="none";
            document.getElementById("hidden_div_yes_ten").style.display="none";
            document.getElementById("hidden_div_yes_eight").style.display="none";
            document.getElementById("hidden_div_yes_nine").style.display="none";
            document.getElementById("hidden_div_yes_eleven").style.display="none";
            document.getElementById("hidden_div_yes_twelve").style.display="none";

        }
        if(getSelectValue == "No"){
            document.getElementById("hidden_div_no").style.display="block";

        } else {
            document.getElementById("hidden_div_no").style.display="none";
        }

    }

    function showArea(){
        getSelectValue = document.getElementById("other").value;
        if(getSelectValue == "1"){
            document.getElementById("hidden_textarea").style.display="block";
        } else {
            document.getElementById("hidden_textarea").style.display="none";
        }
    }

    function success() {
	 if(document.getElementById("textsend").value==="") {
            document.getElementById('button').disabled = true;
        } else {
            document.getElementById('button').disabled = false;
        }
    }

    </script>

@endpush

