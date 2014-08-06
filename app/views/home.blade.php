<html>
    <head>
        <link rel="stylesheet" href="{{asset('css/home.css')}}">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300' rel='stylesheet' type='text/css'>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="carousel"></div>
        <div class="serverInfo">
            @include('partials.serverstats', array('title' => 'Minecraft', 'playerNum' => $serverdata['Minecraft']['Info']['Players'], 'maxPlayers' => $serverdata['Minecraft']['Info']['MaxPlayers']))
            @include('partials.serverstats', array('title' => 'Garry\'s Mod', 'playerNum' => $serverdata['Gmod']['Info']['Players'], 'maxPlayers' => $serverdata['Gmod']['Info']['MaxPlayers']))
        </div>
    </body>

</html>
