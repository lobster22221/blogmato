 <div class="blog-masthead container-fluid">
     
        <nav class="nav">
          <a class="nav-link active" href="#">Home</a>
          <a class="nav-link" href="#">About</a>
          <a class="nav-link" href="#">Projects</a>     
          <a class="nav-link" href="/admin">Admin</a>  
         
          <span class="ml-auto">
            @if(Auth::check())
                @include('components.userDropdown')               

                <a class="nav-link" href="/admin" style='display:inline-block;'> <h3  style='display:inline-block; color:white;'>✉</h3></a>  
            @else   
                <a class="nav-link" href="/login">login</a> 
            @endif
          </span>
         
       
    
        </nav>
      
    </div>