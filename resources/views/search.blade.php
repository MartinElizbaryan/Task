@extends("layout")

@push("_style")
	{{-- <link rel="stylesheet" href="{{asset('css/logged/bank/changes.css')}}"> --}}
@endpush

@push("title","Home page")
@push("desc","")

@section("content")
	
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<form action="/search" method="POST">
					@csrf()
					<div class="form-group">
						<label for="">Search</label>
						<input type="text" class="form-control" name="text">
					</div>
					
					<div class="form-group">
						<input type="submit" value="Search" class="btn btn-primary pull-right">
					</div>
				</form>
			</div>
		</div>
	</div>



@endsection