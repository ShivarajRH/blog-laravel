@section("blogabout")
<div class="sidebar-module sidebar-module-inset">
      <h4>About</h4>
      <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
    </div>
@endsection

@section("blogarchives")
    <div class="sidebar-module">
      <h4>Archives</h4>
      <ol class="list-unstyled">
      @foreach($archives as $archive)
        <li>
          <a href="/?month={{$archive['month']}}&year={{$archive['year']}}">
            {{$archive['month']}} {{$archive['year']}}
          </a>
        </li>
      @endforeach
      </ol>
    </div>
@endsection

@section("blogelsewhere")
<div class="sidebar-module">
  <h4>Elsewhere</h4>
  <ol class="list-unstyled">
    <li><a href="#">GitHub</a></li>
    <li><a href="#">Twitter</a></li>
    <li><a href="#">Facebook</a></li>
  </ol>
</div>
@endsection