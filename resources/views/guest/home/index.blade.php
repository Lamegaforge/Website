@extends('layouts.base')

@section('breadcrumbs')
@endsection

@section('content') 

  @include('guest.stream.partials.alert')

  <!-- main -->
  <section class="bg-secondary p-t-15 p-b-5 p-x-15">
    <div class="owl-carousel owl-videos">
      @foreach($videos as $video)
      <div class="card card-video">
        <div class="card-img">
          <a href="{{route('video.show', [$video->id])}}">
          <img src="https://i1.ytimg.com/vi/{{$video->hash}}/mqdefault.jpg" alt="{{$video->title}}">
        </a>
          <div class="card-meta">
            <span>{{$video->duration}}</span>
          </div>
        </div>
        <div class="card-block">
          <h4 class="card-title"><a href="{{route('video.show', [$video->id])}}">{{$video->title}}</a></h4>
          <div class="card-meta">
            <span><i class="fa fa-clock-o"></i> {{$video->published_at}}</span>
            <span>{{$video->view_count}} views</span>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </section>

  <section class="p-t-35">
    <div class="container">
      <div class="row">
        <!-- posts -->
        <div class="col-lg-8">
          @include('guest.home.partials.posts', ['posts' => $posts])
        </div>
        <!-- sidebar -->
        <div class="col-lg-4">
          @include('guest.home.partials.widgets', [])
        </div>
      </div>
    </div>
  </section>

  <!-- /main -->
@endsection  

@section('scripts')
  <script src="plugins/owl-carousel/js/owl.carousel.min.js"></script>
  <script>
    (function($) {
      "use strict";
      // owl carousel
      $('.owl-posts').owlCarousel({
        margin: 5,
        loop: true,
        dots: false,
        autoplay: true,
        responsive: {
          0: {
            items: 1
          },
          1024: {
            items: 1,
            center: false
          },
          1200: {
            items: 2,
            center: true
          }
        }
      });

      $('.owl-videos').owlCarousel({
        margin: 15,
        loop: true,
        dots: false,
        responsive: {
          0: {
            items: 1
          },
          700: {
            items: 2
          },
          800: {
            items: 3
          },
          1000: {
            items: 4
          },
          1200: {
            items: 6
          }
        }
      });
    })(jQuery);
  </script>
@endsection