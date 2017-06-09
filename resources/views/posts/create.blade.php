@extends ("layouts.master")

@section("content")
  <div class="col-sm-8 blog-main">
    <h1>Publish a post</h1>
    <hr>
    <form method="post" action="/posts">
        {{csrf_field()}}
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" required>
      </div>
          
      <div class="form-group">
        <label for="body">Body text</label>
        <textarea id="body" name="body" class="form-control" required ></textarea>
      </div>

      <div class="form-group">
        <label for="ispublish">Publish?</label>
        <input type="radio" id="ispublish" value="1" name="ispublish" checked="checked" required>Yes
        <input type="radio" id="ispublish" value="0" name="ispublish" required>No
      </div>
      
      <div class="form-group">
         <button type="submit" class="btn btn-primary">Publish</button> 
      </div>      
    
      @include('layouts.errors')

  </form>

</div>

@endsection
