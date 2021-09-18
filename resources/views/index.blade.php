@extends('layouts.app')
@section('content')

<body>
  <!-- img Banner -->
  <section class="tm-banner-section" id="tmVideoSection">
    <div class="container tm-banner-text-container">
      <div class="row">
        <div class="col-12">
          <header>
            <h2 class="tm-banner-title">Pro Line Video</h2>
            <p class="mx-auto tm-banner-subtitle">
              The video background has a parallax effect. This is fluid and
              full-width.
            </p>
          </header>
        </div>
      </div>
    </div>

    <!-- img -->

    <img src="https://cdn.pixabay.com/photo/2018/02/03/11/19/gallery-3127444_960_720.jpg" alt="" />

  </section>

  <section class="container tm-company-section" id="company">
    <div class="row">
      <div class=" tm-company">
        <div class="tm-company-about">
          <div class="tm-company-img-container">
            <img src="https://images.unsplash.com/photo-1537267470831-2d781a5d2ae6?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=600&fit=min&ixid=eyJhcHBfaWQiOjkyMjE3fQ&h=600" alt="Image" />
          </div>
          <div class="tm-company-about-text">
            <header>
              <h2 class="tm-company-about-header">عن الشركة</h2>
            </header>
            <p>
              Phasellus fringilla convallis libero non aliquam. Morbi justo
              lorem, varius ultricies pulvinar ac, aliquet quis ipsum.
            </p>
            <p class="mb-4">
              Suspendisse aliquam pulvinar odio sed rhoncus. Cras pretium diam
              ut metus tristique, a ultricies sapien euismod. Duis dui diam,
              maximus ac ligula a, accumsan cursus ante.
            </p>
            <!-- <a href="#" class="btn tm-btn tm-float-right">Read More</a> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Activities -->
  <div class="container" id="activities">
    <div class="row">
      <div class="col-12">
        <div class="tm-parallax">
          <header class="tm-parallax-header">
            <h2 class="">أخر المنتجات</h2>
          </header>
        </div>
      </div>
    </div>


    @foreach ($posts as $post)
    <!-- <div class="card-grpup "  > -->
      <div class="row" id="late-post" style="justify-content: center !important;">
        <div class="card" id="card">
          <img src="{{asset ('images/' . $post->image_path)}}" class="card-img-top" id="img-late" alt="img">
          <div class="card-body">
            <div class="card-header">
              <h6 class="card-title " id="card-title">{{$post->title}}</h6>
              <h6 class="card-title">{{$post->price}}</h6>
            </div>
            <div class="overlay">
              <p class="card-text" id="card-text">{{$post->description}}</p>
            </div>
          </div>
        </div>
      </div>
    <!-- </div> -->
    @endforeach

  </div>






  <!-- Contact -->
  <section id="contact">
    <div class="container" id="reservation">
      <div class="section-heading">
        <h2>تواصل معنا</h2>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="phone">
            <i class="fa fa-phone"></i>
            <h4>Phone Numbers</h4>
            <span><a href="#">+(964) 780 148 8884</a><br></span>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="location">
            <i class="fa fa-map-marker"></i>
            <h4>Location</h4>
            <span><a href="#">العراق - بغداد - المنصور - المأمون</a><br><a href="#">العراق - الرمادي - شارع المستودع</a><br><a href="#"> العراق - البصرة - الاندلس</a><br><a href="#">العراق - كركوك - شارع المحافظة</a><br><a href="#">العراق - الحلة - شارع 40</a><br><a href="#">تركيا - اسطنبول - بيلك دزو </a></span>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="message">
            <i class="fa fa-envelope"></i>
            <h4>Emails</h4>
            <span><a href="#">info@nooralawab.com</a><br></span>
          </div>
        </div>
      </div>
    </div>
  </section>
  </div>




</body>
@endsection