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
  <!-- main -->
  <section class="bg-image" style="background-image: url('https://img.youtube.com/vi/BhTkoDVgF6s/maxresdefault.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="video-play" data-src="https://www.youtube.com/embed/zFUymXnQ5z8?rel=0&amp;amp;autoplay=1&amp;amp;showinfo=0">
        <div class="embed-responsive embed-responsive-16by9">
          <img class="embed-responsive-item" src="https://img.youtube.com/vi/BhTkoDVgF6s/maxresdefault.jpg">
          <div class="video-caption">
            <h5>For Honor: Walkthrough Gameplay Warlords</h5>
            <span class="length">5:32</span>
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
      <h5><i class="fa fa-film"></i> Recent Videos <span>(123)</span></h5>
      <form method="post">
        <div class="form-group input-icon-right">
          <i class="fa fa-search"></i>
          <input type="text" class="form-control search-video form-control-secondary" id="search" placeholder="Search Video...">
        </div>
      </form>
      <a class="btn btn-secondary m-l-10 float-left hidden-md-down" href="#" role="button">Filter Videos <i class="fa fa-align-right"></i></a>
      <a class="btn btn-primary btn-shadow float-right hidden-sm-down" href="#" role="button">Upload Video <i class="fa fa-cloud-upload"></i></a>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="toolbar-custom">
        <a class="btn btn-default btn-icon m-r-10 float-left hidden-sm-down" href="#" data-toggle="tooltip" title="refresh" data-placement="bottom" role="button"><i class="fa fa-refresh"></i></a>
        <div class="dropdown float-left">
          <button class="btn btn-default" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">All Platform <i class="fa fa-caret-down"></i></button>
          <div class="dropdown-menu">
            <a class="dropdown-item active" href="#">All Platform</a>
            <a class="dropdown-item" href="#">Playstation 4</a>
            <a class="dropdown-item" href="#">Xbox One</a>
            <a class="dropdown-item" href="#">Origin</a>
            <a class="dropdown-item" href="#">Steam</a>
          </div>
        </div>

        <div class="btn-group float-right m-l-5 hidden-sm-down" role="group">
          <a class="btn btn-default btn-icon" href="#" role="button"><i class="fa fa-th-large"></i></a>
          <a class="btn btn-default btn-icon" href="#" role="button"><i class="fa fa-bars"></i></a>
        </div>
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
      <div class="row row-5">
        <div class="col-12 col-sm-6 col-md-3">
          <div class="card card-video">
            <div class="card-img">
              <a href="video-post.html">
              <img src="https://i1.ytimg.com/vi/GaERL8Nrl9k/mqdefault.jpg" alt="Tom Clancy's Ghost Recon: Wildlands">
            </a>
              <div class="card-meta">
                <span>4:32</span>
              </div>
            </div>
            <div class="card-block">
              <h4 class="card-title"><a href="video-post.html">Tom Clancy's Ghost Recon: Wildlands</a></h4>
              <div class="card-meta">
                <span><i class="fa fa-clock-o"></i> 2 hours ago</span>
                <span>423 views</span>
              </div>
              <p>Defeating the corrupt tyrants entrenched there will require not only strength.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="card card-video">
            <div class="card-img">
              <a href="video-post.html">
              <img src="https://i.ytimg.com/vi/N1NsF9c90f0/mqdefault.jpg" alt="Final Fantasy VII Remake">
            </a>
              <div class="card-meta">
                <span>3:05</span>
              </div>
            </div>
            <div class="card-block">
              <h4 class="card-title"><a href="video-post.html">Final Fantasy VII Remake</a></h4>
              <div class="card-meta">
                <span><i class="fa fa-clock-o"></i> 2 days ago</span>
                <span>589 views</span>
              </div>
              <p>Final Fantasy VII Remake was revealed at E3 2015 and we've gotten very little news.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="card card-video">
            <div class="card-img">
              <a href="video-post.html">
              <img src="https://i1.ytimg.com/vi/mW4LMCtoIkg/mqdefault.jpg" alt="Anthem Official Gameplay Reveal">
            </a>
              <div class="card-meta">
                <span>3:07</span>
              </div>
            </div>
            <div class="card-block">
              <h4 class="card-title"><a href="video-post.html">Anthem Official Gameplay Reveal</a></h4>
              <div class="card-meta">
                <span><i class="fa fa-clock-o"></i> 2 weeks ago</span>
                <span>1798 views</span>
              </div>
              <p>In Anthem, a new shared-world action-RPG from EA's BioWare studio.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="card card-video">
            <div class="card-img">
              <a href="video-post.html">
              <img src="https://i.ytimg.com/vi/orVd8a2eafw/mqdefault.jpg" alt="Top 5 Brutal Gameplay Moments in For Honor">
            </a>
              <div class="card-meta">
                <span>15:56</span>
              </div>
            </div>
            <div class="card-block">
              <h4 class="card-title"><a href="video-post.html">Top 5 Brutal Gameplay Moments</a></h4>
              <div class="card-meta">
                <span><i class="fa fa-clock-o"></i> 1 month ago</span>
                <span>6521 views</span>
              </div>
              <p>Check out these 5 brutal For Honor clips shared by you.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="card card-video">
            <div class="card-img">
              <a href="video-post.html">
              <img src="https://i.ytimg.com/vi/lQXpDL3SNWQ/mqdefault.jpg" alt="Spider-Man Official 4K Trailer">
            </a>
              <div class="card-meta">
                <span>6:46</span>
              </div>
            </div>
            <div class="card-block">
              <h4 class="card-title"><a href="video-post.html">Spider-Man Official 4K Trailer</a></h4>
              <div class="card-meta">
                <span><i class="fa fa-clock-o"></i> July 21, 2017</span>
                <span>447 views</span>
              </div>
              <p>Spider-Man for PS4 was a surprise hit last year, will we see it at...</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="card card-video">
            <div class="card-img">
              <a href="video-post.html">
              <img src="https://i1.ytimg.com/vi/9EzRBzdf--g/mqdefault.jpg" alt="METRO EXODUS Gameplay Trailer">
            </a>
              <div class="card-meta">
                <span>1:24</span>
              </div>
            </div>
            <div class="card-block">
              <h4 class="card-title"><a href="video-post.html">Wolfenstein II Gameplay Trailer</a></h4>
              <div class="card-meta">
                <span><i class="fa fa-clock-o"></i> July 16, 2017</span>
                <span>7330 views</span>
              </div>
              <p>The latest installment in the post-apocalyptic first-person shooter from...</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="card card-video">
            <div class="card-img">
              <a href="video-post.html">
              <img src="https://i1.ytimg.com/vi/ckUrcdnWZ2g/mqdefault.jpg" alt="The Last Guardian Pet Cosplay Contest">
            </a>
              <div class="card-meta">
                <span>1:58</span>
              </div>
            </div>
            <div class="card-block">
              <h4 class="card-title"><a href="video-post.html">The Last Guardian Pet Cosplay Contest</a></h4>
              <div class="card-meta">
                <span><i class="fa fa-clock-o"></i> June 19, 2017</span>
                <span>812 views</span>
              </div>
              <p>Take a sneak peek at some new footage for The Last Guardian.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="card card-video">
            <div class="card-img">
              <a href="video-post.html">
              <img src="https://i1.ytimg.com/vi/-PohBqV_i7s/mqdefault.jpg" alt="Watch Dogs 2 - Reveal Trailer">
            </a>
              <div class="card-meta">
                <span>4:04</span>
              </div>
            </div>
            <div class="card-block">
              <h4 class="card-title"><a href="video-post.html">Shadow of War Gameplay Walkthrough</a></h4>
              <div class="card-meta">
                <span><i class="fa fa-clock-o"></i> June 17, 2017</span>
                <span>546 views</span>
              </div>
              <p>Join us as we take a look at Shadow of War and discuss...</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="card card-video">
            <div class="card-img">
              <a href="video-post.html">
              <img src="https://i1.ytimg.com/vi/1Y_DVbmRNhc/mqdefault.jpg" alt="Ghost in the Shell (2017) - Official Trailer">
            </a>
              <div class="card-meta">
                <span>2:12</span>
              </div>
            </div>
            <div class="card-block">
              <h4 class="card-title"><a href="video-post.html">Ghost in the Shell (2017) - Official Trailer</a></h4>
              <div class="card-meta">
                <span>
                <i class="fa fa-clock-o"></i> June 18, 2017</span>
                <span>7879 views</span>
              </div>
              <p>The first teasers for the upcoming live-action adaptation of classic...</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="card card-video">
            <div class="card-img">
              <a href="video-post.html">
              <img src="https://i1.ytimg.com/vi/VHDmlMVWIwQ/mqdefault.jpg" alt="Battlefield 1: In the Name of the Tsar Trailer">
            </a>
              <div class="card-meta">
                <span>9:58</span>
              </div>
            </div>
            <div class="card-block">
              <h4 class="card-title"><a href="video-post.html">Battlefield 1: In the Name of the Tsar</a></h4>
              <div class="card-meta">
                <span><i class="fa fa-clock-o"></i> June 10, 2017</span>
                <span>914 views</span>
              </div>
              <p>Battlefield 1 heads to the Eastern front in its next huge expansion, which introduces...</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="card card-video">
            <div class="card-img">
              <a href="video-post.html">
              <img src="https://i1.ytimg.com/vi/y3Cpetu4ke4/mqdefault.jpg" alt="Friday the 13th: Taking Down Every Camp">
            </a>
              <div class="card-meta">
                <span>5:40</span>
              </div>
            </div>
            <div class="card-block">
              <h4 class="card-title"><a href="video-post.html">Friday the 13th: Taking Down Every Camp</a></h4>
              <div class="card-meta">
                <span><i class="fa fa-clock-o"></i> June 08, 2017</span>
                <span>1254 views</span>
              </div>
              <p>Watch as we brutally take down every camp counselor and win the match while playing.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="card card-video">
            <div class="card-img">
              <a href="video-post.html">
              <img src="https://i1.ytimg.com/vi/feqIj5PaqCQ/mqdefault.jpg" alt="Call of Duty WW2 Multiplayer Gameplay">
            </a>
              <div class="card-meta">
                <span>15:38</span>
              </div>
            </div>
            <div class="card-block">
              <h4 class="card-title"><a href="video-post.html">Call of Duty WW2 Multiplayer Gameplay</a></h4>
              <div class="card-meta">
                <span><i class="fa fa-clock-o"></i> June 01, 2017</span>
                <span>7236 views</span>
              </div>
              <p>We head into some intense battles in this new Call of Duty WW2 gameplay...</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="card card-video">
            <div class="card-img">
              <a href="video-post.html">
              <img src="https://i1.ytimg.com/vi/B6qY-P4eo1Q/mqdefault.jpg" alt="Mafia 3: The Movie (All Cutscenes HD)">
            </a>
              <div class="card-meta">
                <span>2:47:52</span>
              </div>
            </div>
            <div class="card-block">
              <h4 class="card-title"><a href="video-post.html">Mafia 3: The Movie (All Cutscenes HD)</a></h4>
              <div class="card-meta">
                <span><i class="fa fa-clock-o"></i> May 30, 2017</span>
                <span>12376 views</span>
              </div>
              <p>Mafia 3 tackles some controversial subject matter and 2K has not provided copies...</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="card card-video">
            <div class="card-img">
              <a href="video-post.html">
              <img src="https://i1.ytimg.com/vi/KsHHiWqgbw8/mqdefault.jpg" alt="I’m Ready To Spend Another 100 Hours in Animal Crossing">
            </a>
              <div class="card-meta">
                <span>4:59</span>
              </div>
            </div>
            <div class="card-block">
              <h4 class="card-title"><a href="video-post.html">I’m Ready To Spend Another 100 Hours in Animal Crossing</a></h4>
              <div class="card-meta">
                <span><i class="fa fa-clock-o"></i> May 28, 2017</span>
                <span>1236 views</span>
              </div>
              <p>Use the brand new wardrobe to select the right outfit for your days and nights...</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="card card-video">
            <div class="card-img">
              <a href="video-post.html">
              <img src="https://i1.ytimg.com/vi/qZmnPUNP2Ps/mqdefault.jpg" alt="A Minute of Crazy Cosplay from Blizzcon">
            </a>
              <div class="card-meta">
                <span>1:15</span>
              </div>
            </div>
            <div class="card-block">
              <h4 class="card-title"><a href="video-post.html">A Minute of Crazy Cosplay from Blizzcon</a></h4>
              <div class="card-meta">
                <span><i class="fa fa-clock-o"></i> Max 27, 2017</span>
                <span>772 views</span>
              </div>
              <p>Feast your eyes on some new Diablo III gameplay footage from BlizzCon...</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="card card-video">
            <div class="card-img">
              <a href="video-post.html">
              <img src="https://i1.ytimg.com/vi/WfBhaP6sIX0/mqdefault.jpg" alt="Hearthstone Mean Streets of Gadgetzan Trailer">
            </a>
              <div class="card-meta">
                <span>1:31</span>
              </div>
            </div>
            <div class="card-block">
              <h4 class="card-title"><a href="video-post.html">Hearthstone Mean Streets of Gadgetzan Trailer</a></h4>
              <div class="card-meta">
                <span><i class="fa fa-clock-o"></i> May 26, 2017</span>
                <span>558 views</span>
              </div>
              <p>Blizzard's free-to-play card game Hearthstone is rolling out...</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="card card-video">
            <div class="card-img">
              <a href="video-post.html">
              <img src="https://i1.ytimg.com/vi/E6US9bGubjo/mqdefault.jpg" alt="Hearthstone Mean Streets of Gadgetzan Trailer">
            </a>
              <div class="card-meta">
                <span>1:31</span>
              </div>
            </div>
            <div class="card-block">
              <h4 class="card-title"><a href="video-post.html">Hearthstone: Knights of the Frozen Throne Opening Cinematic</a></h4>
              <div class="card-meta">
                <span><i class="fa fa-clock-o"></i> May 25, 2017</span>
                <span>670 views</span>
              </div>
              <p>Take a look at the intro cinematic for the upcoming Hearthstone expansion.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="card card-video">
            <div class="card-img">
              <a href="video-post.html">
              <img src="https://i1.ytimg.com/vi/QEuEOugOXcc/mqdefault.jpg" alt="Metro Exodus: Gameplay Trailer 2017">
            </a>
              <div class="card-meta">
                <span>34:44</span>
              </div>
            </div>
            <div class="card-block">
              <h4 class="card-title"><a href="video-post.html">Metro Exodus: Gameplay Trailer 2017</a></h4>
              <div class="card-meta">
                <span><i class="fa fa-clock-o"></i> May 23, 2017</span>
                <span>234 views</span>
              </div>
              <p>The latest installment in the post-apocalyptic first-person shooter from...</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="card card-video">
            <div class="card-img">
              <a href="video-post.html">
              <img src="https://i1.ytimg.com/vi/lqUUstkJbrc/mqdefault.jpg" alt="Overwatch Animated Short Infiltration">
            </a>
              <div class="card-meta">
                <span>15:05</span>
              </div>
            </div>
            <div class="card-block">
              <h4 class="card-title"><a href="video-post.html">Overwatch Animated Short Infiltration</a></h4>
              <div class="card-meta">
                <span><i class="fa fa-clock-o"></i> May 21, 2017</span>
                <span>411 views</span>
              </div>
              <p>What do you get when you spend $39.99 on Overwatch loot crates?</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="card card-video">
            <div class="card-img">
              <a href="video-post.html">
              <img src="https://i1.ytimg.com/vi/xUGRjNzGz3o/mqdefault.jpg" alt="Mass Effect: Andromeda Devastating Biotic">
            </a>
              <div class="card-meta">
                <span>15:05</span>
              </div>
            </div>
            <div class="card-block">
              <h4 class="card-title"><a href="video-post.html">Mass Effect: Andromeda Devastating Biotic</a></h4>
              <div class="card-meta">
                <span><i class="fa fa-clock-o"></i> May 21, 2017</span>
                <span>436 views</span>
              </div>
              <p>Destin and James test out what biotic combos they can do in Mass Effect.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="pagination-results m-t-10">
        <span>Showing 10 to 20 of 48 videos</span>
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
    </div>
  </section>
  <!-- /main -->
@endsection  