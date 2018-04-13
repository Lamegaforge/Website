<div class="post-thumbnail">
  <div class="video-play" data-src="https://www.youtube.com/embed/{{$post->thumbnail->hash}}?rel=0&amp;amp;autoplay=1&amp;amp;showinfo=0">
    <div class="embed-responsive embed-responsive-16by9">
      <img class="embed-responsive-item" src="https://img.youtube.com/vi/{{$post->thumbnail->hash}}/maxresdefault.jpg">
      <div class="video-play-icon"><i class="fa fa-play"></i></div>
    </div>
  </div>
  <span class="badge badge-steam">{{$post->category->name}}</span>
</div>