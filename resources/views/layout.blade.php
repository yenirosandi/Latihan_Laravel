<!doctype html>
<html lang="en">
    <head>
  	    <title>Latihan AMBIZ</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap.min.css"> 

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap.min.js"></script>

    </head>
    
    <body>
        <?php $no=1;?>
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            } );
        </script>

        <!-- Navbar -->
        <nav class="navbar navbar-dark bg-dark">
            <!-- Navbar content -->
            <nav class="navbar navbar-inverse navbar-fixed-top">
              <div class="container-fluid">
                <div class="navbar-header">
                  <b><a style='color:blue;'class="navbar-brand" href="/trial">Training</a></b>
                </div>
                <ul class="nav navbar-nav">
                  <!-- <li class="active"><a href="#">Home</a></li> -->
                  <li class="{{Request::path()==='latihan1' ? 'active':''}}"><a href="/latihan1">Latihan 1</a></li>
                  <li class="{{Request::path()==='latihan2' ? 'active':''}}"><a href="/latihan2">Latihan 2</a></li>
                  <li class="{{Request::path()==='latihan3' ? 'active':''}}"><a href="/latihan3">Latihan 3</a></li>
                  <li class="{{Request::path()==='latihan4' ? 'active':''}}"><a href="/latihan4">Latihan 4</a></li>
                  <li class="{{Request::path()==='latihan5' ? 'active':''}}"><a href="/latihan5">Latihan 5</a></li>
                </ul>
              </div>
            </nav>
  
        <div class="container" style="margin-top:100px">
            <h3>QUESTION</h3>
            <p>@yield('task')</p>
            <br>
            @yield('content')
        </div>

    </body>
</html>