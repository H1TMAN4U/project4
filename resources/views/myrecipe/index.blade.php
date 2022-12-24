@extends('master')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
	{{ $message }}
</div>

@endif
<style>
	.delete-icon{
		cursor: pointer;
		background-image: url("/images/trash-solid.svg");
		background-repeat: no-repeat;
	}
</style>
@foreach($data as $value)
		<div class="flex-col flex ">
		<form class="flex bg-white border rounded-lg shadow-md md:flex-row max-w-full" method="post" action="{{ route('recipes.destroy', $value->id) }}">
			@csrf
			@method('DELETE')
				{{-- <a href="{{ route('recipes.create') }}" class="flex flex-col items-center bg-white border rounded-lg shadow-md md:flex-row max-w-full"><i class="fa-solid fa-plus fa-2x" style="color: green"></i></a> --}}
				<a href="FullRecipeData/{{$value->id}}" class="flex flex-col items-center bg-white border rounded-lg shadow-md md:flex-row max-w-full" style="width: 100%;">
					<img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ asset('images/' . $value->img) }}" style=" height: 150px; width: 100px;">
				<div>
					<div class="flex flex-col justify-between p-4 leading-normal">
						<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{$value['name']}} </h5>
						<p class="mb-3 font-normal text-gray-700">{{$value['description']}} </p>
					</div>
				</div>
				</a>
				<div class="flex items-start p-2 flex-col ">
					{{-- <input name="delete" type="submit" class="flex flex-col items-center bg-white md:flex-row max-w-full" value="Delete"/> --}}
					<a href="{{ route('recipes.edit', $value->id) }}" class="flex flex-col items-center bg-white md:flex-row max-w-full"><i class="fa-solid fa-pen-to-square fa-2x" style="color: green"></i></a>

				</div>
		</form>
</div>
@endforeach

{{-- <div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Student Data</b></div>
			<div class="col col-md-6">
				<a href="{{ route('recipes.create') }}" class="btn btn-success btn-sm float-end">Add</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>name</th>
				<th>description</th>
				<th>instructions</th>
				<th>img</th>
				<th>Action</th>
			</tr>
			@if(count($data) > 0)

				@foreach($data as $row)

					<tr>
						<td><img src="{{ asset('images/' . $row->img) }}" width="75" /></td>
						<td>{{ $row->name }}</td>
						<td>{{ $row->description }}</td>
						<td>{{ $row->instructions }}</td>
						<td>
							<form method="post" action="{{ route('recipes.destroy', $row->id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('recipes.show', $row->id) }}" class="btn btn-primary btn-sm">View</a>
								<a href="{{ route('recipes.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
								<input type="submit" class="btn btn-danger btn-sm" value="Delete" />
							</form>
							
						</td>
					</tr>

				@endforeach

			@else
				<tr>
					<td colspan="5" class="text-center">No Data Found</td>
				</tr>
			@endif
		</table>
		{!! $data->links() !!}
	</div> 
</div>--}}

@endsection