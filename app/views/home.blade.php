<html>
    <head>
        <link rel="stylesheet" href="{{asset('css/home.css')}}">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300' rel='stylesheet' type='text/css'>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="carousel">
            <?php 
                
                foreach ($serverdata as $key => $server){
                    $info = $server->Info;?>
                    <div class="background" style="background-image:url({{asset($info->Background)}})"></div>
                <?php
                }
            ?>
        
        </div>
        <div class="serverInfo">
            <?php 
                
                foreach ($serverdata as $key => $server){
                    $info = $server->Info;?>
                    @include('partials.serverstats', array('title' => $key, 'data' => $info))
                <?php
                }
            ?>
        </div>
    </body>

</html>
