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
				<form action="/page_adding" method="POST">
					@csrf()
					<div class="form-group">
						<label for="">Url</label>
						<input type="text" class="form-control" name="url">
					</div>
					<div class="form-group">
						<label for="">Title</label>
						<input type="text" class="form-control" name="title">
					</div>

					<div class="form-group">
						<label for="">Description</label>
						<input type="text" class="form-control" name="desc">
					</div>

					<div class="form-group">
						<label for="">Content</label>
						<textarea type="text" class="form-control" name="content"></textarea>
					</div>

					<div class="form-group">
						<input type="submit" value="Create" class="btn btn-primary pull-right">
					</div>
				</form>
			</div>
		</div>
	</div>



@endsection