<div class="blog-post">

    <a href="/posts/{{$post->id}}"<h2 class="blog-post-title">{{$post->postName}}</h2></a> 
            <p class="blog-post-meta">{{$post->updated_at->diffForHumans()}} by <a href="#">{{$post->user->name}}</a></p>
              
            <p> {{$post->postContent}}</p>
          </div><!-- /.blog-post -->
          
          <div  class="replyform">
              <form method="POST" action="/posts/{{$post->id}}/comments">
                  {{ csrf_field() }}
                  <div class="form-group">
                      <label for="title">Comment</label>
                      <input type="text" class="form-control" id="body" name="body" placeholder="" required>  
                  </div>                  
                  <button type="submit" class="btn btn-primary">Reply</button>
              </form>

          </div>
          
          <div class="comments">  
          @foreach($post->comments as $comment)
          <div id="comment">
              <a href ="#">{{$comment->user->name}} </a> says: 
              <br> &nbsp&nbsp{{$comment->body}}
          </div>
          @endforeach
      
  </div>
  
  <hr>
 
          
          