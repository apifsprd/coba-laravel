@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="fs-5">Post Categories</h1>
    </div>

    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> {{session('success')}}.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="table-responsive col-lg-6">
      <a href="/dashboard/categories/create" class="btn btn-primary btn-sm mb-3">+ Create new category</a>

        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Action</th>
              <th scope="col">Category Name</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>
                  <a href="/dashboard/categories/{{$category->slug}}" class="badge bg-info"><span data-feather="eye"></span></a>
                  <a href="/dashboard/categories/{{$category->slug}}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                  <form action="/dashboard/categories/{{$category->slug}}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" type="submit" onclick="confirm('Are you sure to delete data?')"><span data-feather="x-circle"></span></button>
                  </form>
                </td>
                <td>{{$category->name}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection