@extends('app')


@section('content')
<div class="row">
    <div class="col-12">
        <div class="card p-4">
            <div class="d-flex justify-content-between">
                <h1 class="card-title">Category Edit Page</h1>
                <a href="{{ route('category.index') }}" class="btn btn-primary">Back to List</a>
            </div>
            <div class="card-body">

                <div class="card-body">
                    <form method="POST" action="{{ route('category.update',['category' => $category->id]) }}">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Category Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $category->title }}">
                        </div>
                        <button class="btn btn-danger">submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
