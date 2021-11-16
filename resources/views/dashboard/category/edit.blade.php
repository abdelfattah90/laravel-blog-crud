@extends('dashboard.init')

@section('content')

@section('title')
    Category Edit
@endsection

<div class="container p5">
    <h4>Category Edit</h4>
    <div class="container row p-3">
        <div class="col-md-8">
            <form action="{{ route('categories.update', $category) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                    </div>
                </div>
                @error('name')
                    <span class="text-danger" role="alert">{{ $message }}</span>
                @enderror

                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" name="slug" value="{{ $category->slug }}">
                    </div>
                </div>
                @error('slug')
                    <span class="text-danger" role="alert">{{ $message }}</span>
                @enderror

                <div class="m-2 pb-2"></div>


                <button type="submit" class="btn btn-warning">Update</button>

            </form>


        </div>
    </div>
</div>

@endsection
