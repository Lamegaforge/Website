@extends('layouts.base')

@section('breadcrumbs')
<section class="breadcrumbs">
<div class="container">
  <ol class="breadcrumb">
    <li><a href="/">Home</a></li>
    <li class="active">videos</li>
  </ol>
</div>
</section>
@endsection

@section('content')  

  @include('guest.stream.partials.alert')

  <!-- main -->
  <section class="bg-image" style="background-image: url('https://img.youtube.com/vi/{{$lastVideo->hash}}/maxresdefault.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="video-play" data-src="https://www.youtube.com/embed/{{$lastVideo->hash}}?rel=0&amp;amp;autoplay=1&amp;amp;showinfo=0">
        <div class="embed-responsive embed-responsive-16by9">
          <img class="embed-responsive-item" src="https://img.youtube.com/vi/{{$lastVideo->hash}}/maxresdefault.jpg">
          <div class="video-caption">
            <h5>{{$lastVideo->title}}</h5>
            <span class="length">{{$lastVideo->duration}}</span>
          </div>
          <div class="video-play-icon">
            <i class="fa fa-play"></i>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="toolbar">
    <div class="container">
      <h5><i class="fa fa-film"></i> Videos <span>({{$videos->total()}})</span></h5>
      <form method="get" action={{route('video.index')}}>
        <div class="form-group input-icon-right">
          <i class="fa fa-search"></i>
          <input type="text" class="form-control search-video form-control-secondary" name='search' id="search" placeholder="Chercher une vidéo..." value="{{old('search')}}">
        </div>
      </form>
      <a class="btn btn-secondary m-l-10 float-left hidden-md-down" href="#" role="button">Filtrer <i class="fa fa-align-right"></i></a>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="toolbar-custom">
        <div class="dropdown float-left">
          <button class="btn btn-default" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Toutes les chaines <i class="fa fa-caret-down"></i></button>
          <div class="dropdown-menu">
            <a class="dropdown-item active" href="{{route('video.index')}}">Toutes les chaines</a>
            @foreach($channels as $channel)
              <a class="dropdown-item" href="{{route('video.index', ['channel' => $channel->slug_name])}}">{{$channel->name}}</a>
            @endforeach
          </div>
        </div>

<!--         <div class="btn-group float-right m-l-5 hidden-sm-down" role="group">
          <a class="btn btn-default btn-icon" href="#" role="button"><i class="fa fa-th-large"></i></a>
          <a class="btn btn-default btn-icon" href="#" role="button"><i class="fa fa-bars"></i></a>
        </div> -->
        <div class="dropdown float-right">
          <button class="btn btn-default" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Date d'ajout <i class="fa fa-caret-down"></i></button>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item active" href="{{route('video.index', ['sort' => 'published_at'])}}">Date d'ajout</a>
            <a class="dropdown-item" href="{{route('video.index', ['sort' => 'like_count'])}}">Like</a>
            <a class="dropdown-item" href="{{route('video.index', ['sort' => 'view_count'])}}">Vues</a>
          </div>
        </div>
      </div>
      <div class="row row-5">
        @foreach($videos as $video)
        <div class="col-12 col-sm-6 col-md-3">
          <div class="card card-video">
            <div class="card-img">
              <a href="{{route('video.show', ['id' => $video->id])}}">
              <img src="https://i1.ytimg.com/vi/{{$video->hash}}/mqdefault.jpg" alt="Tom Clancy's Ghost Recon: Wildlands">
            </a>
              <div class="card-meta">
                <span>{{$video->duration}}</span>
              </div>
            </div>
            <div class="card-block">
              <h4 class="card-title"><a href="{{route('video.show', ['id' => $video->id])}}">{{$video->title}}</a></h4>
              <div class="card-meta">
                <span><i class="fa fa-clock-o"></i> 2 hours ago</span>
                <span>{{$video->view_count}} views</span>
              </div>
              <p>{{$video->description}}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      @include('paginations.default', ['paginator' => $videos])
    </div>
  </section>
  <!-- /main -->
@endsection  

@section('scripts')
<!-- plugins js -->
<script>
  (function($) {
    "use strict";
    $('.search-video, .navbar-search .form-control').keyup(function() {
      var search = $(this).val().toLowerCase();
      $.each($('.card-title'), function() {
        if ($(this).text().toLowerCase().indexOf(search) === -1) {
          $(this).parent().parent().parent().hide();
        } else {
          $(this).parent().parent().parent().show();
        }
      });
    });
  })(jQuery);
</script>
@endsection