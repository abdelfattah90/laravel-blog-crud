@extends('dashboard.init')

@section('content')

@section('title')
    Categories
@endsection


<h2>Categories</h2>
<a href="{{ route('categories.create') }}">
    <button class="btn btn-success btn-lg d-grid gap-2 col-2 float-end">
        Create Category
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
                    <th>CATEGORY NAME</th>
                    <th width="300">MANAGE</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>
                            <span class="text-muted">{{ $category->name }}</span>
                        </td>
                        <td>
                            <a href="{{ route('categories.edit', $category) }}" class="btn btn-warning">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <a href="{{ route('categories.show', $category) }}" class="btn btn-primary">
                                <i class="fas fa-info-circle"></i>
                            </a>

                            <span class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#{{ $category->name }}">
                                <i class="fas fa-trash"></i>
                            </span>

                            <div class="modal fade" id="{{ $category->name }}" tabindex="-1"
                                aria-labelledby="{{ $category->name }}Label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Delete {{ $category->name }} Forever</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>

                                            <form action="{{ route('categories.destroy', $category) }}" method="Post">
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
