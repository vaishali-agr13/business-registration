@extends('layout.app')

@section('content')

<div class="card">
    <div class="card-body">

        <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control" rows="5"></textarea>
            </div>

            <input type="date" name="publish_date" class="form-control mb-2">

            <input type="file" name="image" class="form-control mb-2">

            <button class="btn btn-success">Save</button>
        </form>

    </div>
</div>

@stop