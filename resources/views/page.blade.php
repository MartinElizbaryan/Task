@extends("layout")

@push("_style")
	{{-- <link rel="stylesheet" href="{{asset('css/logged/bank/changes.css')}}"> --}}
@endpush

@push("title",$page["title"])
@push("desc",$page["desc"])

@section("content")
	<div class="container">
		{!! $page["content"] !!}
	</div>


@endsection