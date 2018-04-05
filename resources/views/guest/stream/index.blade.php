@extends('layouts.base')

@section('breadcrumbs')
<section class="breadcrumbs">
<div class="container">
  <ol class="breadcrumb">
    <li><a href="/">Home</a></li>
    <li class="active">Stream</li>
  </ol>
</div>
</section>
@endsection

@section('content')  
  <!-- main -->

  @if($stream)
  <section class="bg-image bg-image-sm section-streamer player p-y-65" style="background-image: url('https://img.youtube.com/vi/oqElIW1mjlQ/maxresdefault.jpg');" data-property="{videoURL:'1GWRDuL04-Q',containment:'self',mute:true,stopMovieOnBlur:false, showControls: false, realfullscreen: true, showYTLogo: false, quality: 'hd1080',autoPlay:true,loop:true,opacity:1}">
    <div class="overlay"></div>
    <div class="container">
      <div class="video-play video-live" style="background-image: url({{$stream->template}});background-size: 100%;" data-src="https://player.twitch.tv/?channel=lamegaforgelive&autoplay=true">
        <div class="embed-responsive embed-responsive-16by9 player" data-property="{videoURL:'28190860416',containment:'self',mute:true,showControls: false, stopMovieOnBlur:false,showYTLogo: false, quality: 'hd1080',autoPlay:true,loop:true,opacity:1}">
          <div class="video-caption">
            <h5><i class="fa fa-circle"></i> Live Now: {{$stream->status}}</h5>
          </div>
          <div class="video-play-icon">
            <i class="fa fa-play"></i>
          </div>
        </div>
      </div>
      <div class="text-right m-t-20">
        <a href="{{config('stream.donate_url')}}" class="btn btn-outline-default btn-rounded btn-lg float-left m-r-30">Donate me <i class="fa fa-heart-o"></i></a>
        <a href="https://www.twitch.tv/{{$stream->name}}" class="btn btn-twitch btn-shadow btn-rounded btn-lg m-l-20">Watch on Twitch <i class="fa fa-twitch"></i></a>
      </div>
    </div>
  </section>
  @endif
  <section>
    <div class="container">
      <div class="heading">
        <i class="fa fa-twitch"></i>
        <h2>Recent Streams</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div class="row row-5">
        @foreach($videos as $video)
        <div class="col-12 col-sm-6 col-md-3">
          <div class="card card-video">
            <div class="card-img">
              <a href="{{route('video.show', [$video->id])}}">
              <img src="https://i.ytimg.com/vi/{{$video->hash}}/mqdefault.jpg" class="card-img-top" alt="{{$video->title}}">
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
              <p>{{$video->description}}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div class="text-center"><a href="videos.html" class="btn btn-primary btn-shadow btn-rounded btn-effect btn-lg m-t-10">Show More</a></div>
    </div>
  </section>

  <!-- /main --> 
@endsection  
@section('scripts')
<script src="/plugins/ytplayer/jquery.mb.YTPlayer.min.js"></script>
<script>
  (function($) {
    "use strict";
    // Background Player
    $(".player").mb_YTPlayer();
  })(jQuery);
</script>
@endsection