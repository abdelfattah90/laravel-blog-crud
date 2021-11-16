@extends('dashboard.init')

@section('content')

@section('title')
    Create Category
@endsection


<div class="container p5">
    <h4>Add Category</h4>
    <div class="container row p-3">
        <div class="col-md-8">
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" name="name" placeholder="Category name"
                            value="{{ old('name') }}">
                    </div>
                </div>
                @error('name')
                    <span class="text-danger" role="alert">{{ $message }}</span>
                @enderror

                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" name="slug" placeholder="category-slug"
                            value="{{ old('slug') }}">
                    </div>
                </div>
                @error('slug')
                    <span class="text-danger" role="alert">{{ $message }}</span>
                @enderror

                <div class="m-2 pb-2"></div>


                <button type="submit" class="btn btn-success">Add</button>

            </form>


        </div>
    </div>
</div>


@endsection
