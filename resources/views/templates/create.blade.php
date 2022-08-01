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
          class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">{{ $title }}</h1>
          <div class="btn-toolbar mb-2 mb-md-0">  
          </div>
        </div>

        @yield('isi')

        <form method="POST" action="/dashboard/posts" class="mb-5">
            @csrf

            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="title" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" name="category_id">
                    @foreach ($categories as $cat)
                        @if (old('category_id') == $cat->id)
                            <option value="{{ $cat->id }}" selected>{{ $cat->name }}</option>
                        @else
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endif
                    @endforeach
                  </select>
              </div>

              <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <input id="body" type="hidden" name="body" class="@error('body') is-invalid @enderror" value="{{ old('body') }}">
                <trix-editor input="body"></trix-editor>
                @error('body')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>          

            <button type="submit" class="btn btn-dark">Submit</button>
          </form>
        
      </main>

     
      
    </div>
  </div>

  @include('templates.partials._script')

</body>

</html>