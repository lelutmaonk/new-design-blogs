@extends('user_templates.default')

@section('content')

@if ($posts->count() > 0)
<div class="row gx-4 gx-lg-5 align-items-center my-3">
    <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0"
            src="https://c4.wallpaperflare.com/wallpaper/527/757/70/aesthetic-neon-wallpaper-preview.jpg" alt="..." /></div>
    <div class="col-lg-5">
        <h1 class="font-weight-light">{{ $posts[0]->title }}</h1>
        <p>{{ $posts[0]->excerpt }}</p>
        <a class="btn btn-dark" href="#!">Call to Action!</a>
    </div>
</div>

<div class="row gx-4 gx-lg-5">
    {{-- Looping data posts --}}
    @foreach ($posts->skip(1) as $post)
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <div class=""><img class="img-fluid rounded mb-4 mb-lg-0"
                    src="https://c4.wallpaperflare.com/wallpaper/527/757/70/aesthetic-neon-wallpaper-preview.jpg" alt="..." /></div>
                <h5 class="card-title mt-2">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->excerpt }}</p>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <div class="nav-link text-muted" href="#!"><i class="bi bi-clock" style="font-size:15px"></i> {{ $post->created_at->diffForHumans() }}</div>
                <a class="btn btn-secondary" href="#!">Read More</a>
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
