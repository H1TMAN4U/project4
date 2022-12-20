@extends('master')

@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>recipe Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('recipes.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Name</b></label>
			<div class="col-sm-10">
				{{ $recipe->name }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>description</b></label>
			<div class="col-sm-10">
				{{ $recipe->description }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>instructions</b></label>
			<div class="col-sm-10">
				{{ $recipe->instructions }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b> Image</b></label>
			<div class="col-sm-10">
				<img src="{{ asset('images/' .  $recipe->img) }}" width="200" class="img-thumbnail" />
			</div>
		</div>
	</div>
</div>

@endsection('content')
