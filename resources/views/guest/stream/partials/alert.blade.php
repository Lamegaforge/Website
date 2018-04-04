@if(app('App\Services\StreamService')->isOnline())
<section class="bg-danger promo promo-subscribe">
<div class="container">
  <h3>Un stream est actuellement en cours !</h3>
  <a class="btn btn-outline-default" href="{{route('stream.index')}}" role="button">S'y rendre ! <i class="fa fa-heart-o"></i></a>
</div>
</section>
@endif