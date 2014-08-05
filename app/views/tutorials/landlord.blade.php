@extends('layouts.minecraft-tutorials')

@section('title')
<h1>Tutorials - Landlord</h1>
@overwrite

@section('header-options')
<li><a class="blue-hover" href="/mc"><i class="fa fa-home"></i>Home</a></li>
<li><a class="blue-hover" href="/mc/tutorials"><i class="fa fa-arrow-left"></i>Back</a></li>
@stop
@section('content')
    @include('partials.sidenav', array(
        'options' => array(
            'Command Reference',
            'Showing Chunks',
            'How to claim chunks',
            'How to unclaim chunks',
            'Listing your chunks',
            'How to add a friend to your claim',
            'How to remove a friend from your claim',
            'Listing your friends',
            'Managing your chunks',
            'Using the map'),
        'anchors' => array(
            '#command',
            '#show',
            '#claim',
            '#unclaim',
            '#list',
            '#addfriend',
            '#removefriend',
            '#friends',
            '#manage',
            '#map')
        ))

    <div class="steps">
        <div class="step">
            @include('partials.command', array(
            'commands' => array(
                '/land help [Page #]',
                '/land claim',
                '/land unclaim [x,z] [world]',
                '/land addfriend &#60;player&#62;',
                '/land unfriend &#60;player&#62;',
                '/land friendall &#60;player&#62;',
                '/land unfriendall &#60;player&#62;',
                '/land friends',
                '/land manage',
                '/land list [Page #]',
                '/land info',
                '/land map'),
            'descriptions' => array(
                'Display help reference',
                'Claim the chunk you are standing in.',
                'Unclaim the current, or specified land. (If you own it)',
                'Add specified player as a friend of this land. (If you own it)',
                'Remove specified player from this land&#39;s friend list. (If you own it)',
                'Add specified player as a friend to all you currently owned land. (If you own it)',
                'Remove specified player as a friend from all your currently owned land. (If you own it)',
                'View the friends of this land (If you own it)',
                'Brings up the permissions management for this chunk. (If you own it)',
                'List your owned land.',
                'Get basic information about this current land.',
                'Toggle the land map display'),

            'alias' => 'Landlord commands can be used with either the <span>/landlord</span>, <span>/land</span> or <span>/ll</span> prefix. In the rest of this tutorial commands will use <span>/ll</span>, but can be used interchangeably.',
            'moreinfo' => 'http://dev.bukkit.org/bukkit-plugins/landlord/'
            ))
        </div>

        <div class="step">
            <?php $image = asset('images/landlord/info.png')?>
            @include('partials.category', array(
                    'title' => 'Showing Chunks',
                    'description' => '<p class="box">To see the chunk that you are currently in use the command <span>/ll info</span> and orange particles will highlight the boundaries of the chunk.</p>',
                    'anchor' => 'show'))

        </div>
        <div class="step">
            <?php $image = asset('images/landlord/claim.png')?>
            @include('partials.category', array(
                    'title' => 'Claiming Chunks',
                    'description' => '<p class="box">To claim the chunk use the <span>/ll claim</span> command. Once you have done this no one will be able to place or break anything within your area. You may edit permissions by using the <span>/ll manage</span> command.</p>',
                    'anchor' => 'claim'))

        </div>
        <div class="step">
            <?php $image = asset('images/landlord/unclaim.png')?>
            @include('partials.category', array(
                    'title' => 'Unclaiming Chunks',
                    'description' => '<p class="box">To unclaim a chunk simply stand in a chunk you own and use the <span>/ll unclaim</span> command or to unclaim a specific one use <span>/ll unclaim [x,z] [world]</span>.</p>',
                    'anchor' => 'unclaim'))

        </div>
        <div class="step">
            <?php $image = asset('images/landlord/list.png')?>
            @include('partials.category', array(
                    'title' => 'Listing Chunks',
                    'description' => '<p class="box">To view all of the chunks that you own you can use the <span>/ll list</span> command. This shows you the x, y coordinates of the chunks that you own in your chat.</p>',
                    'anchor' => 'list'))

        </div>
        <div class="step">
            <?php $image = asset('images/landlord/addfriend.png')?>
            @include('partials.category', array(
                    'title' => 'Adding a friend to a chunk',
                    'description' => '<p class="box">To allow other people to build and use inventories within land you own you may use the <span>/ll addfriend &#60;player&#62;</span> command which grants permissions to the selected player in the chunk you are standing in. You may also use the <span>/ll friendall &#60;player&#62;</span> which does the same but for all the land you own.</p>',
                    'anchor' => 'addfriend'))

        </div>
        <div class="step">
            <?php $image = asset('images/landlord/removefriend.png')?>
            @include('partials.category', array(
                    'title' => 'Removing a friend from a chunk',
                    'description' => '<p class="box">To remove a player you may use the <span>/ll unfriend &#60;player&#62;</span> for a single chunk or <span>/ll unfriendall &#60;player&#62;</span> for all of the land you own.</p>',
                    'anchor' => 'removefriend'))

        </div>
        <div class="step">
            <?php $image = asset('images/landlord/friends.png')?>
            @include('partials.category', array(
                    'title' => 'Listing your friends',
                    'description' => '<p class="box">To view who has permissions for the current chunk you are in, providing you own, you can use the <span>/ll friends</span> command. This shows a list of players in your chat.</p>',
                    'anchor' => 'friends'))

        </div>

        <div class="step">
            <?php $image = asset('images/landlord/manage.png')?>
            @include('partials.category', array(
                    'title' => 'Managing your chunks',
                    'description' => '<p class="box">To edit what friends can and cannot do in a chunk you can use the <span>/ll manage</span> command. This brings up a gui where you can specify the following.<br /><br />
                    (from left to right)<br />
                    - help<br />
                    - cause damage with tnt<br />
                    - interact with doors<br />
                    - players can pvp<br />
                    - place / break blocks<br />
                    - use redstone<br />
                    - harm animals<br />
                    - use containers<br /><br />
                    The colour of the wool represents whether the permission is enabled, to toggle simply click on the wool block. The zombie head row shows the permissions for all players and the steve head row shows the permissions for players who are friends. Changes will be saved when you exit the gui.</p>',
                    'anchor' => 'manage'))

        </div>

        <div class="step">
            <?php $image = asset('images/landlord/map.png')?>
            @include('partials.category', array(
                    'title' => 'Using the Land Map',
                    'description' => '<p class="box">Landlord also has an inbuilt map to show the status of the chunks around you. To toggle this on / off use the command <span>/ll map</span>. Green squares are chunks you own, yellow squares are claimed chunks you are friends with and red shows claimed chunks that you are not friends with. This map is updated as you move around the world and also shows you which direction you are looking in.</p>',
                    'anchor' => 'map'))

        </div>
    </div>
@stop
