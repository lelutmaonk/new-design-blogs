<!DOCTYPE html>
<html lang="en">

@include('user_templates.partials._head')

<body>
    
    @include('user_templates.partials._nav')
   
   

    <div class="container px-4 px-lg-5 mb-4">
        
         @yield('content')

    </div>
    
    @include('user_templates.partials._footer')
    
    <div class="container py-4"></div>

</body>

</html>