@extends('user_templates.default')

@section('content')

@if ($posts->count() > 0)
<div class="row gx-4 gx-lg-5 align-items-center my-3">
    <div class="col-lg-7">
        <a href="" class="position-absolute btn btn-dark rounded m-2 p-1 text-center text-decoration-none text-light"><span class="bi bi-tag"> {{ $posts[0]->category->name }}</span></a>
        <img class="img-fluid rounded mb-4 mb-lg-0"
            src="{{ $posts[0]->image }}" /></div>
    <div class="col-lg-5">
        <h1 class="font-weight-light">{{ $posts[0]->title }}</h1>
        <p>{{ $posts[0]->excerpt }}</p>
        <a class="btn btn-dark" href="blogs/{{ $posts[0]->slug }}">Read More</a>
    </div>
</div>

{{-- search --}}
<div class="row">
    <div class="col-md-12">
      <form action="/blog" method="get">
        @if(request('category'))
        <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        @if(request('author'))
        <input type="hidden" name="author" value="{{ request('author') }}">
        @endif
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="search" value="{{ request('search') }}" placeholder="Apa yang anda pikirkan">
          <button class="btn btn-dark" type="submit">Button</button>
        </div>
      </form>
    </div>
  </div>

<div class="row gx-4 gx-lg-5">
    {{-- Looping data posts --}}
    @foreach ($posts->skip(1) as $post)
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="">
                    <a href="" class="position-absolute btn btn-dark rounded m-2 p-1 text-center text-decoration-none text-light"><span class="bi bi-tag"> {{ $post->category->name }}</span></a>
                    <img class="img-fluid rounded mb-4 mb-lg-0"
                    src="{{ $post->image }}"/></div>
                
                <div class="mt-2">
                    <a href="" class="text-decoration-none text-secondary"><span class="bi bi-person"> {{ $post->user->name }}</span></a><br>
                </div>

                <h4 class="card-title">{{ $post->title }}</h4>
                <p class="card-text">{{ $post->excerpt }}</p>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <div class="nav-link text-muted" href="#!"><i class="bi bi-clock" style="font-size:15px"></i> {{ $post->created_at->diffForHumans() }}</div>
                <a class="btn btn-secondary" href="blogs/{{ $post->slug }}">Read More</a>
            </div>
        </div>
    </div>  
    @endforeach
    {{-- end looping data posts --}}
</div>
@else
<div class="card text-white bg-secondary my-5 py-4 text-center">
    <div class="card-body">
        <p class="text-white m-0">No Post Found . . .</p>
    </div>
</div>
@endif
    
<ul class="d-flex justify-content-end">
    {{ $posts->links() }}
</ul>

@endsection
