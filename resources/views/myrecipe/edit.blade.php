@extends('master')

@section('content')
<div class="flex justify-center items-center">
    <div href="#" class="block max-w-2xl p-6 bg-white border border-gray-200 rounded-lg shadow-md ">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Lorem, ipsum dolor sit amet consectetur adipisicing.</h5>
        <p class="font-normal text-gray-700 py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum ducimus natus magnam, minus et doloremque.</p>

		<form method="post" action="{{ route('recipes.update', $recipe->id) }}" enctype="multipart/form-data">
		@csrf
		@method('PUT')

        <div class="row mb-3">
            <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 ">
                <div class="flex items-center justify-between px-3 py-2 border-b">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Name</label>
                    <div id="tooltip-fullscreen" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300">
                    </div>
                </div>
                <div class="px-2 py-0.5 bg-white rounded-b-lg ">
                    <input type="text" name="name" id="name" class="bg-white-50 border-0 text-gray-900 text-sm rounded-b-lg  block w-full  " placeholder="name" required>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 ">
                <div class="flex items-center justify-between px-3 py-2 border-b">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 ">Description</label>
                    <div id="tooltip-fullscreen" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300">
                    </div>
                </div>
                <div class="px-2 py-2 bg-white rounded-b-lg ">
                    <textarea name="description" id="description" rows="8" class="block w-full px-0 text-sm rounded-b-lg text-gray-800 bg-white border-0" placeholder="Write an article..." required></textarea>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 ">
                <div class="flex items-center justify-between px-3 py-2 border-b">
                    <label for="instructions" class="block mb-2 text-sm font-medium text-gray-900 ">Instructions</label>
                    <div id="tooltip-fullscreen" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300">
                    </div>
                </div>
                <div class="px-2 py-2 bg-white rounded-b-lg ">
                    <textarea name="instructions" id="instructions" rows="8" class="block w-full px-0 text-sm rounded-b-lg text-gray-800 bg-white border-0 " placeholder="Write an article..." required></textarea>
                </div>
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
            <div class="col-sm-10">
                <input name = "img" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 " id="multiple_files" type="file" multiple>
				<input type="hidden" name="hidden_img" value="{{ $recipe->img }}" />
            </div>
        </div>

		<div class="text-center">
			<input type="hidden" name="hidden_id" value="{{ $recipe->id }}" />
			<input type="submit" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50" value="Edit" />
		</div>	
        </form>
    </div>
</div>
<script>
// document.getElementsByName('recipe_gender')[0].value = "{{ $recipe->recipe_gender }}";
</script>

@endsection('content')
