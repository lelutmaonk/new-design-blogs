@extends('user_templates.default')

@section('content')

<div class="container mt-4">
    <div class="row">
        <div class="col-lg-8">
            <article>
                <header class="mb-4">
                    <h1 class="fw-bolder mb-1">{{ $post->title }}</h1>
                    <div class="text-muted fst-italic mb-2">Posted on {{ $post->created_at->format('d M Y') }}</div>
                    <div class="badge bg-secondary text-decoration-none link-light" href="">{{ $post->category->name }}</div>
                </header>
                <div class="mb-4">
                    <img class="w-100 rounded" src="{{ asset('storage/' . $post->image )}}"/>
                </div>
                <section class="mb-5">

                    <div class="card mb-3">
                        <div class="card-body">
                          <blockquote class="blockquote mb-0 mt-3">
                            <footer class="blockquote-footer">{{ $post->excerpt }} </footer>
                          </blockquote>
                        </div>
                      </div>

                    <p class="fs-5 mb-4">{!! $post->body !!}</p>
                    
                </section>
            </article>
            <!-- Comments section-->
            <section class="mb-5">
                <div class="card bg-light">
                    <div class="card-body">
                        <!-- Comment form-->
                        <form class="mb-4"><textarea class="form-control" rows="3" placeholder="Join the discussion and leave a comment!"></textarea></form>
                        <!-- Comment with nested comments-->
                        
                    </div>
                </div>
            </section>
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Search widget-->
            <div class="card mb-4">
                <div class="card-header">Search</div>
                <div class="card-body">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Enter search term..." disabled />
                        <button class="btn btn-dark" id="button-search" type="button" disabled>Go!</button>
                    </div>
                </div>
            </div>
            
            <!-- Side widget-->
            <div class="card mb-4">
                <div class="card-header">Side Widget</div>
                <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
            </div>
        </div>
    </div>
</div>
 
@endsection
