<!-- You views don't have to be always in blade -->
<h1>{{$heading}}</h1>

@unless(count($listings) == 0)

@foreach($listings as $listing)
		<h2>
			{{ $listing['title'] }}
		</h2>
		<p>
			{{ $listing['description']}}
		</p>
@endforeach

@else
	<h4><em>No Listings at the moment</em></h4>
@endunless