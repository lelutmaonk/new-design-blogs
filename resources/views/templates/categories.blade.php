@extends('templates.default')

@section('isi')

    <div class="table-responsive col-lg-10">

    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
       {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
         
<a href="/dashboard/categories/create"><span class="btn btn-sm btn-success mb-2"><i class="bi bi-file-earmark-plus"></i> Create New Categoy</span></a>

<table class="table table-light table-striped">
    <thead>
      <tr class="">
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    
  <tbody>
    @foreach ($categories as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->name }}</td>
        <td>
            <a href="/dashboard/categories/{{ $item->slug }}/edit" class="badge bg-primary border-0 p-2"><i class="bi bi-pencil-square"></i></a>
            <form action="/dashboard/categories/{{ $item->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0 p-2" onclick="return confirm('Are You Sure?')"><i class="bi bi-trash"></i></button>
            </form>
        </td>
      </tr>    
    @endforeach
    
  </tbody>
  </table>

    </div>

@endsection