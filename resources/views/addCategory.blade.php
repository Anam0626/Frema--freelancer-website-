@extends('dashboard')
@section('title', 'AddCategory')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <form action="{{ route('category.store') }}" method="POST">
                @csrf
                <!-- Post Your ad start -->
                <fieldset class="border border-gary p-4 mb-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2>Add New Category</h2>
                        </div>
                        <div class="col-lg-12">
                            <h6 class="font-weight-bold pt-4 pb-1">Name:</h6>
                            <input type="text" name="name" class="border w-100 p-2 bg-white text-capitalize"
                                placeholder="Enter Category">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            <button type="submit" class="btn btn-primary d-block mt-2">Post</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <form action="{{ route('sub_category.store') }}" method="POST">
                @csrf
                <!-- Post Your ad start -->
                <fieldset class="border border-gary p-4 mb-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2>Add New Sub Category</h2>
                        </div>
                        <div class="col-lg-12">
                            <h6 class="font-weight-bold pt-4 pb-1">Name:</h6>
                            <input type="text" name="name" class="border w-100 p-2 bg-white text-capitalize"
                                placeholder="Enter Sub Category">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <h6 class="font-weight-bold pt-4 pb-1">Category:</h6>
                            <select name="category_id" id="inputGroupSelect" class="w-100">
                                <option selected="true" disabled="disabled">Select Category </option>
                                @foreach ($category as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="text-danger">{{$message}}</div>
                            @enderror
                            <button type="submit" class="btn btn-primary d-block mt-2">Post</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection
