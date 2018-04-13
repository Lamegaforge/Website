<div class="sidebar">
  <!-- widget-games -->
<!--   <div class="widget widget-games">
    <h5 class="widget-title">Upcoming Games</h5>
    <a href="#" style="background-image: url('https://i1.ytimg.com/vi/mW4LMCtoIkg/mqdefault.jpg')">
    <span class="overlay"></span>
    <div class="widget-block">
      <div class="count">1</div>
      <div class="description">
        <h5 class="title">Horizon: Zero Dawn The Frozen Wilds</h5>
        <span class="date">November 14, 2017</span>
      </div>
    </div>
  </a>
    <a href="#" style="background-image: url('https://i1.ytimg.com/vi/GaERL8Nrl9k/mqdefault.jpg')">
    <span class="overlay"></span>
    <div class="widget-block">
      <div class="count">2</div>
      <div class="description">
        <h5 class="title">Tom Clancy's Ghost Recon: Wildlands</h5>
        <span class="date">August 29, 2017</span>
      </div>
    </div>
  </a>
    <a href="#" style="background-image: url('https://i1.ytimg.com/vi/feqIj5PaqCQ/mqdefault.jpg')">
    <span class="overlay"></span>
    <div class="widget-block">
      <div class="count">3</div>
      <div class="description">
        <h5 class="title">Call of Duty WW2</h5>
        <span class="date">December 15, 2017</span>
      </div>
    </div>
  </a>
    <a href="#" style="background-image: url('https://i.ytimg.com/vi/N1NsF9c90f0/mqdefault.jpg')">
    <span class="overlay"></span>
    <div class="widget-block">
      <div class="count">4</div>
      <div class="description">
        <h5 class="title">Final Fantasy VII</h5>
        <span class="date">Q3 2018</span>
      </div>
    </div>
  </a>
    <a href="#" style="background-image: url('https://i1.ytimg.com/vi/xUGRjNzGz3o/mqdefault.jpg')">
    <span class="overlay"></span>
    <div class="widget-block">
      <div class="count">5</div>
      <div class="description">
        <h5 class="title">Mass Effect Andromeda</h5>
        <span class="date">Q1, 2018</span>
      </div>
    </div>
  </a>
  </div> -->

  <!-- widget post  -->
  @include('guest.home.widgets.recommends', [])
  
  <!-- widget facebook -->
  @include('guest.home.widgets.facebook', [])
  




  <!-- widget post -->
  <div class="widget widget-post">
    <h5 class="widget-title">Popular on Gameforest</h5>
    <a href="blog-post.html"><img src="img/blog/blog-widget-popular-1.jpg" alt=""></a>
    <h4><a href="blog-post.html">Red Dead Redemption Being Modded Into GTA5 Multiplayer</a></h4>
    <span><i class="fa fa-clock-o"></i> June 16, 2017</span>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel neque sed anter.</p>
    <ul class="widget-list">
      <li>
        <div class="widget-img"><a href="blog-post.html"><img src="img/blog/blog-widget-1.jpg" alt=""></a></div>
        <div>
          <h4><a href="blog-post.html">Dead Island 2 and Escape Impressions</a></h4>
          <span>June 16, 2017</span>
        </div>
      </li>
      <li>
        <div class="widget-img"><a href="blog-post.html"><img src="img/blog/blog-widget-2.jpg" alt=""></a></div>
        <div>
          <h4><a href="blog-post.html">How to Finish Mafia 3 With All of Your Underbosses</a></h4>
          <span>May 30, 2017</span>
        </div>
      </li>
      <li>
        <div class="widget-img"><a href="blog-post.html"><img src="img/blog/blog-widget-3.jpg" alt=""></a></div>
        <div>
          <h4><a href="blog-post.html">Spider-Man Spin-Off, Venom, Gets Release Date</a></h4>
          <span>June 10, 2017</span>
        </div>
      </li>
      <li>
        <div class="widget-img"><a href="blog-post.html"><img src="img/blog/blog-widget-4.jpg" alt=""></a></div>
        <div>
          <h4><a href="blog-post.html">Is Ghost Recon: Wildlands Worth Your Time?</a></h4>
          <span>June 16, 2017</span>
        </div>
      </li>
    </ul>
  </div>

  <!-- widget tabs -->
  <div class="widget widget-tabs">
    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item"><a class="nav-link active" href="#comments" aria-controls="comments" role="tab" data-toggle="tab"><i class="fa fa-comment-o"></i> Comments</a></li>
      <li class="nav-item"><a class="nav-link" href="#popular" aria-controls="popular" role="tab" data-toggle="tab">Popular</a></li>
      <li class="nav-item"><a class="nav-link" href="#recent" aria-controls="recent" role="tab" data-toggle="tab">Recent</a></li>
    </ul>
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="comments">
        <ul class="widget-comments">
          <li>
            <div><a href="profile.html"><img src="img/user/user-2.jpg" alt=""></a></div>
            <div>
              <a href="blog-post.html#comments"><b>Elizabeth:</b> It would have taken a ridiculous amount of careful precise actions.</a>
            </div>
          </li>
          <li>
            <div><a href="profile.html"><img src="img/user/user-3.jpg" alt=""></a></div>
            <div>
              <a href="blog-post-disqus.html#comments"><b>Clark:</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit curabitur risque.</a>
            </div>
          </li>
          <li>
            <div><a href="profile.html"><img src="img/user/user-1.jpg" alt=""></a></div>
            <div>
              <a href="blog-post-video.html#comments"><b>Venom:</b> Practically no verticality, which on levels like The Spire (Geonosis) incredible.</a>
            </div>
          </li>
          <li>
            <div><a href="profile.html"><img src="img/user/user-3.jpg" alt=""></a></div>
            <div>
              <a href="blog-post-disqus.html#comments"><b>Clark:</b> I'm low level at this point and have almost nothing unlocked, and veteran players have an unfair advantage over me thanks.</a>
            </div>
          </li>
          <li>
            <div><a href="profile.html"><img src="img/user/user-5.jpg" alt=""></a></div>
            <div>
              <a href="blog-post-disqus.html#comments"><b>Trevor:</b> A lot of people would have stopped playing now if it wasn't for the online stuff!</a>
            </div>
          </li>
        </ul>
      </div>
      <div role="tabpanel" class="tab-pane" id="popular">
        <div class="widget-post">
          <ul class="widget-list">
            <li>
              <img src="https://i1.ytimg.com/vi/B6qY-P4eo1Q/mqdefault.jpg" alt="">
              <h4><a href="blog-post.html">How to Finish Mafia 3 With All of Your Underbosses</a></h4>
              <span><i class="fa fa-clock-o"></i> July 12, 2017</span>
              <span>19 comments</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel neque sed anter.</p>
            </li>
            <li>
              <h4><a href="blog-post.html">Uncharted: The Lost Legacy's Demo</a></h4>
              <span>June 28, 2017</span>
              <span>41 comments</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel neque sed anter.</p>
            </li>
            <li>
              <h4><a href="blog-post.html">Mafia III Stones Unturned DLC Launch Trailer</a></h4>
              <span>June 17, 2017</span>
              <span>7 comments</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel neque sed anter.</p>
            </li>
          </ul>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="recent">
        <div class="widget-post">
          <ul class="widget-list">
            <li>
              <img src="https://i1.ytimg.com/vi/ckUrcdnWZ2g/mqdefault.jpg" alt="">
              <h4><a href="blog-post.html">Free Mass Effect: Andromeda Trial Now Available On All Platforms</a></h4>
              <span><i class="fa fa-clock-o"></i> July 12, 2017</span>
              <span>76 comments</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel neque sed anter.</p>
            </li>
            <li>
              <h4><a href="blog-post.html">GTA 5 Online Players Find Secret Alien Mission</a></h4>
              <span>June 23, 2017</span>
              <span>34 comments</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel neque sed anter.</p>
            </li>
            <li>
              <h4><a href="blog-post.html">Mafia III Stones Unturned DLC Launch Trailer</a></h4>
              <span>June 17, 2017</span>
              <span>7 comments</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel neque sed anter.</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>