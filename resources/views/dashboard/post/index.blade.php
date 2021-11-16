@extends('dashboard.init')

@section('content')

@section('title')
    Posts
@endsection


<h2>Posts</h2>
<a href="{{ route('posts.create') }}">
    <button class="btn btn-success btn-lg d-grid gap-2 col-2 float-end">
        Create Post
    </button>

</a>
</div>

<div class="p-3"></div>
<div class="container row mx-auto">
    <div class="col-md-12">
        <table class="table table-responsive table-bordered table-striped">
            <thead>
                <tr>
                    <th width="70" class="text-center">#</th>
                    <th>POST NAME</th>
                    <th>Date</th>
                    <th width="300">MANAGE</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>
                            <span class="text-muted">{{ $post->title }}</span>
                        </td>
                        <td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
                        <td>
                            <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <a href="{{ route('posts.show', $post) }}" class="btn btn-primary">
                                <i class="fas fa-info-circle"></i>
                            </a>

                            <span class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#{{ $post->title }}">
                                <i class="fas fa-trash"></i>
                            </span>

                            <div class="modal fade" id="{{ $post->title }}" tabindex="-1"
                                aria-labelledby="{{ $post->title }}Label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Delete {{ $post->title }} Forever</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>

                                            <form action="{{ route('posts.destroy', $post) }}" method="Post">
                                                @csrf
                                                @method('DELETE')

                                                <input type="submit" class="btn btn-danger" value="Delete">
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
