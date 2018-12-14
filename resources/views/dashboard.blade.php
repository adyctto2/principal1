@extends('layouts.app')
@section('content')
<section id="main-content">

  <section class="wrapper site-min-height">

    <div class="row">


      <div class="col-lg-12">
              <h3 align="center">¿Que página desea administrar?</h3><hr>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="custom-box">
            <div class="servicetitle">
              <h4>Bio-Well Bolivia</h4>
              <hr>
            </div>
            <div class="icn-main-container">
              <span class="icn-container"></span>
            </div>
            <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p> -->

            <a class="btn btn-theme" href="{{route('biowell')}}">Administrar</a>
          </div>
          <!-- end custombox -->
        </div>
        <!-- end col-4 -->
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="custom-box">
            <div class="servicetitle">
              <h4>Nesth-Healt</h4>
              <hr>
            </div>
            <div class="icn-main-container">
              <span class="icn-container1"></span>
            </div>
            <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p> -->

            <a class="btn btn-theme" href="{{route('neshealth')}}">Administrar</a>
          </div>
          <!-- end custombox -->
        </div>
        <!-- end col-4 -->
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="custom-box">
            <div class="servicetitle">
              <h4>Quantum Center</h4>
              <hr>
            </div>
            <div class="icn-main-container">
              <span class="icn-container2"></span>
            </div>
            <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p> -->

            <a class="btn btn-theme" href="{{route('quantumCenter')}}">Administrar</a>
          </div>
          <!-- end custombox -->
        </div>
        <!-- end col-4 -->
      </div>
      <!--  /col-lg-12 -->
    </div>
    <!--  /row -->
  </section>
  <!-- /wrapper -->
</section>
@endsection
