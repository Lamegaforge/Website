<div class="pagination-results m-t-10">
	<span>Showing 10 to 20 of {{$paginator->total()}} videos</span>
    <nav aria-label="Page navigation">
	@if ($paginator->lastPage() > 1)
	<ul class="pagination">
	    <li class="page-item {{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
	        <a class="page-link" href="{{ $paginator->url(1) }}" aria-label="Previous">
	        	<span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
	        </a>
	    </li>
	    @for ($i = 1; $i <= $paginator->lastPage(); $i++)
	        <li class="page-item {{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
	            <a class='page-link' href="{{ $paginator->url($i) }}">{{ $i }}</a>
	        </li>
	    @endfor
	    <li class="page-item {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
	        <a class="page-link" href="{{ $paginator->url($paginator->currentPage()+1) }}" aria-label="Next">
	        	<span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
	        </a>
	    </li>
	</ul>
	@endif
    </nav>
</div>