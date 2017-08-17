<div class="dropdown" style='display:inline-block;'>
    
     <a class="btn  dropdown-toggle nav-link" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="display:inline-block" href="/admin">Hello, {{auth()->user()->name}}</a>  
    
  
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    
    <a class="dropdown-item" href="/user">Profile</a>
    <a class="dropdown-item" href="#" onclick="lfrm.submit();">Logout</a> <form  hidden id="lfrm" action="{{ route('logout') }}" method="POST">{{ csrf_field() }}    </form>
  </div>
      
     
  </div>
