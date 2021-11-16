@extends('dashboard.init')

@section('content')

@section('title')
    Category Edit
@endsection

<div class="container p5">
    <h4>Category Edit</h4>
    <div class="container row p-3">
        <div class="col-md-8">
            <form action="{{ route('posts.update', $post) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                    </div>
                </div>
                @error('title')
                    <span class="text-danger" role="alert">{{ $message }}</span>
                @enderror

                <br />
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" name="slug" value="{{ $post->slug }}">
                    </div>
                </div>
                @error('slug')
                    <span class="text-danger" role="alert">{{ $message }}</span>
                @enderror

                <div class="form-group">
                    <div class="p-3"></div>
                    <label>Category</label>
                    <select name="category_id" class="form-select">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"  {{ $category->id == $post->category->id ? 'selected' : '' }}>{{ $category->name }} </option>
                            
                        @endforeach
                    </select>
                    @error('category_id')
                        <span class="text-danger" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <div class="p-3"></div>

                <div class="form-floating">
                    <textarea class="form-control" name="content" placeholder="Leave a comment here"
                        id="floatingTextarea2" style="height: 100px">{{ $post->content }}</textarea>
                    <label for="floatingTextarea2">Post</label>
                </div>


                @error('content')
                    <span class="text-danger" role="alert">{{ $message }}</span>
                @enderror


                <div class="m-2 pb-2"></div>


                <button type="submit" class="btn btn-warning">Update</button>

            </form>


        </div>
    </div>
</div>

@endsection
