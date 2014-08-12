@extends('layouts.minecraft-tutorials')
@section('header-options')
<li><a class="blue-hover" href="/minecraft"><i class="fa fa-home"></i>Home</a></li>
@stop
@section('content')
    <div class="tutorialItem">
        <a class="blue-hover" href="/minecraft/tutorials/landlord">
            <img src="{{asset('images/plugin-logos/landlord.png')}}">
            <h3>Landlord</h3>
            <p>Protection</p>
            <p class="desc box">Landlord is a protection plugin designed to protect player builds with minimal gameplay interference.</p>
        </a>
    </div>
    <div class="tutorialItem">
        <a class="blue-hover" href="/minecraft/tutorials/mcMMO">
            <img src="{{asset('images/plugin-logos/mcMMO.png')}}">
            <h3>mcMMO</h3>
            <p>RPG & Abilities</p>
            <p class="desc box">A RPG plugin that allows you to have multiple skills and abilities to aid you.</p>
        </a>
    </div>

    <div class="tutorialItem">
        <a class="blue-hover" href="/minecraft/tutorials/trading">
            <img src="{{asset('images/plugin-logos/trading.png')}}">
            <h3>Trading</h3>
            <p>Trading</p>
            <p class="desc box">A user friendly, simple and safe way of trading items between players using a GUI screen.</p>
        </a>
    </div>

    <div class="tutorialItem">
        <a class="blue-hover" href="/minecraft/tutorials/essentials">
            <img src="{{asset('images/plugin-logos/essentials.png')}}">
            <h3>Essentials</h3>
            <p>Utilities & Tools</p>
        </a>
    </div>

    <div class="tutorialItem">
        <a class="blue-hover" href="/minecraft/tutorials/myhome">
            <img src="{{asset('images/plugin-logos/myhome.png')}}">
            <h3>MyHome</h3>
            <p>Teleportation</p>
        </a>
    </div>
@stop

