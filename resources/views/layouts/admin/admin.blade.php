
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="\css\admin.css" rel="stylesheet">
  </head>

  <body>
    @include('components.admin.navbar')
    <div class="container-fluid">
      <div class="row">
         @include('components.admin.sidebar')

        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
         @include('components.admin.header')
        
         @yield('content')

         
          
        </main>
      </div>
    </div>

    @include ('components.scripts')
    
  </body>
</html>
