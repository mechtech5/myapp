<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Jigsawme</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css" />
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<body>
<section class="section">
	<div class="container">


	<div class="columns">

		{{-- ARTICLE SCROLL ENDS --}}
		<div class="column">
			<div class="columns">
			@foreach($posts as $post)
			<div class="column is-half">
				<div class="card">
					<a href="/post/{{ $post->slug }}">
					  <div class="card-image">
					    <figure class="image is-4by3">
					      <img src="{{ Voyager::image( $post->image ) }}">
					    </figure>
					  </div>
					</a>
				  <div class="card-content">
				    <div class="content">
				      <p class="title">
				      	<span>{{ $post->title }}</span>
				      </p>
				      <br>
				      <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
				    </div>
				  </div>
				</div>
			</div>
				@endforeach
			</div>
		</div>
		{{-- ARTICLE SCROLL ENDS --}}

		{{-- SIDEBAR STARTS--}}
		<div class="column is-one-quarter">
			
		</div>
		{{-- SIDEBAR ENDS--}}	 
	</div>


</div>
</section>

</body>
</html>