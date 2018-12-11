@extends("layout")

@push("_style")
	{{-- <link rel="stylesheet" href="{{asset('css/logged/bank/changes.css')}}"> --}}
@endpush

@push("title","Home page")
@push("desc","")

@section("content")
	
	<div class="container">
		<table class="table table-bordered table-hover">
			<tr>
				<th>Url</th>
			</tr>

			@foreach($result as $r)
				<tr>
					<td>
						<a href="/{{$r['url']}}">{{$r['title']}}</a>
					</td>
				</tr>
			@endforeach
		</table>
	</div>



@endsection