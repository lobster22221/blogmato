

<div class="col-sm-4 offset-sm-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
             
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>
          
    <ul>
        @foreach($archives as $date)
            <li>
                <?php $entries = "entry"; if( $date['publish'] > 1) $entries = "entries"?>
                <a href="/?Month={{$date['month']}}&Year={{$date['year']}}"> {{ $date['month']. " " . $date['year'] }} ({{$date['publish']}})<?=$entries ?></a>
            </li>
        @endforeach

    </ul>

            
        </div><!-- /.blog-sidebar -->