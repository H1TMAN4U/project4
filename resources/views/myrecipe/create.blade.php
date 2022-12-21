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

    <div class="container mx-auto px-4">

    <div href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md ">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy technology acquisitions 2021</h5>
        <p class="font-normal text-gray-700">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>

    <form method="post" action="{{ route('recipes.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Name</label>
            <div>
                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="name" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 ">Description</label>
            <div>
                <input type="text" name="description" id="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="name" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="instructions" class="block mb-2 text-sm font-medium text-gray-900 ">Instructions</label>
            <div>
                <input type="text" name="instructions" id="instructions" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="name" required>
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
            <label for="instructions" class="block mb-2 text-sm font-medium text-gray-900 ">Image</label>
            <div class="col-sm-10">
                <input name = "img" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 " id="multiple_files" type="file" multiple>
            </div>
        </div>
        <div class="text-center">
            <input value="Add" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 " id="multiple_files" type="submit" multiple>
        </div>
    </form>
    </div>


    <form method="post" action="{{ route('recipes.store') }}" enctype="multipart/form-data">
        @csrf
<a href="#" class="flex flex-col items-center bg-white border rounded-lg shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <div>
        <div class="col-md-10">

            <div class="flex items-center justify-center w-full">
                <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                    </div>
                    <input value="Add" name="img" id="dropzone-file" type="file" class="hidden" />
                </label>
            </div>

        </div>
    </div>
    <div class="flex flex-col justify-between p-4 leading-normal">
        <div class="row mb-3">
            <div>
                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="name" required>
            </div>
        </div>
        <div class="row mb-3">
            <div>
                <input type="text" name="description" id="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="name" required>
            </div>
        </div>
        <div class="row mb-3">
            <div>
                <input type="text" name="instructions" id="instructions" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="name" required>
            </div>
        </div>
    </div>
    <input value="Add" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 " id="multiple_files" type="submit" multiple>

</a>
</form>
</div>

    @endsection('content')

