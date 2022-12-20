@extends('master')

@section('content')

<div class="card">
	<div class="card-header">Edit recipe</div>
	<div class="card-body">
		<form method="post" action="{{ route('recipes.update', $recipe->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Name</label>
				<div class="col-sm-10">
					<input type="text" name="name" class="form-control" value="{{ $recipe->name }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">description</label>
				<div class="col-sm-10">
					<input type="text" name="description" class="form-control" value="{{ $recipe->description }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">instructions</label>
				<div class="col-sm-10">
					<input type="text" name="instructions" class="form-control" value="{{ $recipe->instructions }}" />
				</div>
			</div>
			{{-- <div class="row mb-4">
				<label class="col-sm-2 col-label-form">recipe Gender</label>
				<div class="col-sm-10">
					<select name="recipe_gender" class="form-control">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</div>
			</div> --}}
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Image</label>
				<div class="col-sm-10">
					<input type="file" name="img" />
					<br />
					<img src="{{ asset('images/' . $recipe->img) }}" width="100" class="img-thumbnail" />
					<input type="hidden" name="hidden_img" value="{{ $recipe->img }}" />
				</div>
			</div>
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $recipe->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>	
		</form>
	</div>
</div>
<script>
// document.getElementsByName('recipe_gender')[0].value = "{{ $recipe->recipe_gender }}";
</script>

@endsection('content')
