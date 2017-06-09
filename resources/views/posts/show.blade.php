@extends ('layouts.master')




@section ('content')
	<div class="col-sm-8 blog-main">

		<h1>{{$post->title}}</h1>
    
    	{{$post->body}}
    	
    	<hr>

    	<div class="comments">
    		<ul class="list-group">
	    		@foreach($post->comments as $comment)
	    		 
	    		<li class="list-group-item">

	    			<strong>
	    				{{ $comment->created_at->diffForHumans() }}:  
	    			</strong>

	    			{{$comment->body}}
	    			
	    		</li>

	    		@endforeach
    		</ul>
    	</div>

    	<div class="card">
    		
    		<div class="card-block">
    			
    			<form action="/posts/{{ $post->id }}/comments" method="post">
    				{{csrf_field()}}

    				<div class="form-group">
    					
    					<textarea class="form-control" name="body" placeholder="Enter your comment here" required></textarea>

    				</div>

    				<div class="form-group">
    					
    					<button type="submit" class="btn btn-primary">Add comment</button>

    				</div>
    			</form>

    			@include("layouts.errors")

    		</div>

    	</div>
    </div>
@endsection
