<!doctype html>
<html lang="en">

@include('templates.partials._head')

<body>

    @include('templates.partials._header')

  <div class="container-fluid">
    <div class="row">
      
    @include('templates.partials._nav')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div
          class="flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">{{ $title }}</h1>
          <div class="d-flex">
            <a href="/dashboard/posts"><span class="btn btn-sm btn-success"><i class="bi bi-arrow-left"></i> Back To All My Post</span></a>
            <a href="" class="mx-2"><span class="btn btn-sm btn-primary"><i class="bi bi-pencil-square"></i> Edit</span></a>
            <a href=""><span class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Delete</span></a>
          </div>
          <div class="btn-toolbar mb-2 mb-md-0">  
          </div>
        </div>

        @yield('isi')

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <article>
                        <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge bg-danger border-0 p-2" onclick="return confirm('Are You Sure?')"><i class="bi bi-trash"></i></button>
                        </form>
                        <div class="mb-4">
                            <img class="w-100 rounded" src="{{ asset('storage/' . $post->image )}}"/>
                        </div>
                        <section class="mb-5">
                            <header class="mb-4">
                                <div class="text-muted fst-italic mb-2">Posted on {{ $post->created_at->format('d M Y') }}</div>
                                <a class="badge bg-secondary text-decoration-none link-light" href="#!">{{ $post->category->name }}</a>
                            </header>
                            <div class="card mb-3">
                                <div class="card-body">
                                <blockquote class="blockquote mb-0 mt-3">
                                    <footer class="blockquote-footer">{{ $post->excerpt }} </footer>
                                </blockquote>
                                </div>
                            </div>

                            {!! $post->body !!}
                            
                        </section>
                    </article>
                </div>
            </div>
        </div>
 

  @include('templates.partials._script')

</body>

</html>