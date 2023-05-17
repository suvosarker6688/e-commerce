@extends('app')


@section('content')
<div class="row">
    <div class="col-12">
        <div class="card p-4">
            <div class="d-flex justify-content-between">
                <h1 class="card-title">Category List Page</h1>
                <a href="{{ route('category.create') }}" class="btn btn-primary">Create New</a>
            </div>
            <div class="card-body">

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Create Date</th>
                        <th scope="col">Title</th>
                        <th scope="col">Active</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ( $categories as  $category)
                      <tr>
                        <th scope="row">{{ $category->id }}</th>
                        <td> {{ $category->created_at->format('Y/d/m') }}</td>
                        <td>{{ $category->title }}</td>
                        <td>{{ $category->is_active }}</td>
                        <td>
                         <a href="{{ route('category.edit',['category' =>  $category->id]) }}" class="btn btn-info">Edit</a>

                        <form action="{{ route('category.destroy', ['category' => $category->id]) }} " method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger">Delete</button>
                        </form>
                        </td>
                      </tr>
                      @endforeach

                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>

@endsection


