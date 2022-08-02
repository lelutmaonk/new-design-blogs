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

        <form method="POST" action="/dashboard/categories">
          @csrf

          <div class="mb-3">
            <label for="name" class="form-label">Category Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
            <div id="" class="form-text">example: Web Developer</div>
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
           @enderror
          </div>

          <div class="mb-3">
            <label for="slug" class="form-label">Category Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug">
            <div id="" class="form-text">example: web-developer</div>
            @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
           @enderror
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

      </main>

     
      
    </div>
  </div>

  @include('templates.partials._script')

</body>

</html>