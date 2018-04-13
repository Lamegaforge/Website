<div class="toolbar-custom">
  <a class="btn btn-default btn-icon m-r-10 float-left hidden-xs-down" href="#" data-toggle="tooltip" title="refresh" data-placement="bottom" role="button"><i class="fa fa-refresh"></i></a>
  <div class="dropdown float-left">
    <button class="btn btn-default" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">All Platform <i class="fa fa-caret-down"></i></button>
    <div class="dropdown-menu">
      <a class="dropdown-item active" href="#">All platform</a>
      <a class="dropdown-item" href="#">Playstation 4</a>
      <a class="dropdown-item" href="#">Xbox One</a>
      <a class="dropdown-item" href="#">Origin</a>
      <a class="dropdown-item" href="#">Steam</a>
    </div>
  </div>

  <a class="btn btn-default btn-icon m-l-10 float-right hidden-xs-down" href="#" data-toggle="tooltip" title="list" data-placement="bottom" role="button"><i class="fa fa-bars"></i></a>
  <div class="dropdown float-right">
    <button class="btn btn-default" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Date Added <i class="fa fa-caret-down"></i></button>
    <div class="dropdown-menu dropdown-menu-right">
      <a class="dropdown-item active" href="#">Date Added</a>
      <a class="dropdown-item" href="#">Popular</a>
      <a class="dropdown-item" href="#">Newest</a>
      <a class="dropdown-item" href="#">Oldest</a>
    </div>
  </div>
</div>

<!-- post -->
@foreach($posts as $post)

<div class="post">
  <h2 class="post-title"><a href="blog-post.html">{{$post->title}}</a></h2>
  <div class="post-meta">
    <span><i class="fa fa-clock-o"></i> June 16, 2017 by <a href="profile.html">Constantine</a></span>
    <span><a href="blog-post.html#comments"><i class="fa fa-comment-o"></i> 98 comments</a></span>
  </div>
  @if ($post->thumbnail->type == 'video')
  <div class="post-thumbnail">
    <div class="video-play" data-src="https://www.youtube.com/embed/{{$post->thumbnail->hash}}?rel=0&amp;amp;autoplay=1&amp;amp;showinfo=0">
      <div class="embed-responsive embed-responsive-16by9">
        <img class="embed-responsive-item" src="https://img.youtube.com/vi/{{$post->thumbnail->hash}}/maxresdefault.jpg">
        <div class="video-play-icon"><i class="fa fa-play"></i></div>
      </div>
    </div>
    <span class="badge badge-steam">{{$post->category->name}}</span>
  </div>
  @else
  <div class="post-thumbnail">
    <img src="{{$post->thumbnail->hash}}" alt="{{$post->thumbnail->name}}">
    <span class="badge badge-ps4">{{$post->category->name}}</span>
  </div>
  @endif
  <p>{{$post->description}}</p>
</div>
@endforeach

<div class="pagination-results">
  <span>Showing 10 to 20 of 48 results</span>
  <nav aria-label="Page navigation">
    <ul class="pagination">
      <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-angle-left"></i></span></a></li>
      <li class="page-item active"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">4</a></li>
      <li class="page-item"><a class="page-link" href="#">5</a></li>
      <li class="separate"><span>...</span></li>
      <li class="page-item"><a class="page-link" href="#">25</a></li>
      <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-angle-right"></i></span></a></li>
    </ul>
  </nav>
</div>
<!-- /.post -->
