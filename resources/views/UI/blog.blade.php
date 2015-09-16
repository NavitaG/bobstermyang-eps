@extends('layouts.homePage')

@section('metainfo')
<title>{{$page->title}} | {{$page->meta_title}}</title>
<meta name="description" content="{{$page->meta_description}}">
<meta name="keywords" content="{{$page->keywords}}">
@stop
@section('extrastyle')
<style>
@media (min-width: 1292px) {
.home-page .hero .image, .home-page .banner .image {
	background-image: url("images/blogbanner.jpg");
    height: 500px;
    background-size: 100% 100%;
}
}

.hero .content h1, .hero .content p {
	color: {{$page->headingTextColor}} !important;
    text-align: {{$page->headingPosition}} !important;
    max-width:100%;
}
.hero .content a {
    float: {{$page->headingPosition}} !important;
}
</style> 
@stop
@section('content')
<section class="headersection">
	<div class="innersection"> 
		<div class="content">
				<div class="headline">
				<h1 class="inline-block gap-top-col gap-top-none-at-medium ">{{$page->title}}</h1>
				<span class="bullet"></span>
				</div>
		</div>
	</div>
</section>
<section>
<div class="container">
	<div class="row grid">
		<div class="col-md-12 p-t-50">	
			<div class="inner_content col-md-8 col-sm-8">
			
			<p class="m-t-20 m-b-20">{!! $page->content !!}</p>
			<div class="m-t-50"></div>
					
		</div>
			@include('UI.innersidebar')
			</div>
		
	  
	</div>
		
</div> <!--end container -->
</section>

</div>
</div>
<!----------- End content  ------------>
@endsection


@section('moreJS')

@stop
