<div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link active" href="/">Home</a>
          <a class="nav-link" href="/posts/create">New Post</a>
          <a class="nav-link" href="#">Press</a>
          <a class="nav-link" href="#">New Feature</a>

          @if(Auth::check())
            <a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>, <small><a class="nav-link ml-auto" href="/logout">Logout</a></small> 
          @else
            <a class="nav-link ml-auto" href="/login">Login</a>
          @endif
          
        </nav>
      </div>
    </div>




