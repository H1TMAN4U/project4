@extends('master')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)

		<li>{{ $error }}</li>

	@endforeach
	</ul>
</div>

@endif

<div class="card">
	<div class="card-header">Add Student</div>
	<div class="card-body">
		{{--  --}}
		<form method="post" action="{{ route('recipes.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Name</label>
				<div class="col-sm-10">
					<input type="text" name="name" class="form-control" />
				</div>
			</div>gytgygygygyg
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">description</label>
				<div class="col-sm-10">
					<input type="text" name="description" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">instructions</label>
				<div class="col-sm-10">
					<input type="text" name="instructions" class="form-control" />
				</div>
			</div>
			{{-- <div class="row mb-4">
				<label class="col-sm-2 col-label-form">Student Gender</label>
				<div class="col-sm-10">
					<select name="student_gender" class="form-control">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</div>
			</div> --}}
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form"> Image</label>
				<div class="col-sm-10">
					<input type="file" name="img" />
				</div>
			</div>
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>
		</form>
	</div>
</div>

@endsection('content')
