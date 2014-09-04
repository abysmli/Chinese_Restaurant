@extends('layout')

@section('content')

<!--Header-->
<header class="pinned"><!--By adding "pinned" class we pinned header to the top of the window-->
  <div class="container">
    <a class="logo" href="/"></a>
    
    <!--Navigation-->
    <nav class="navbar" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="navi-collapse">
        <ul class="nav navbar-nav nav-left">
          <li><a href="/">home</a></li>
          <li><a href="/#about">about</a></li>
          <li><a href="/#serv-reservation">services/reservation</a></li>
          <li class="last"><a href="/#news">news</a></li>
        </ul>
        <ul class="nav navbar-nav nav-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">menu <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="menu1">1 column layout</a></li>
              <li><a href="menu2">2 columns layout</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">reviews <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="reviews">reviews list</a></li>
              <li><a href="reviews-single">reviews single</a></li>
            </ul>
          </li>
          <li class="dropdown active">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">chef recipes <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="recipes">chef recipes list</a></li>
              <li><a href="recipes-single">chef recipes single</a></li>
            </ul>
          </li>
          <li class="last"><a href="/#contacts">contacts</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </nav><!--Close Navigation -->
  </div>
</header>

<!--Recipes-->
<section class="block recipes">
  <div class="fsbg">
    <!--The id (like id="r_1") of the div element should correspond with the rel attribute (like rel="r_1") of the link below. Thus we connect link with background image-->
    <div class="visible" style="background-image: url(img/recipes/default.jpg)"></div><!--Generic Default Image not connected with any recipe-->
    <div id="r_1" style="background: url(img/recipes/r_1.jpg)"></div>
    <div id="r_2" style="background: url(img/recipes/r_2.jpg)"></div>
    <div id="r_3" style="background: url(img/recipes/r_3.jpg)"></div>
    <div id="r_4" style="background: url(img/recipes/r_4.jpg)"></div>
    <div id="r_5" style="background: url(img/recipes/r_5.jpg)"></div>
  </div>
  <div class="recipes-inner">
    <div class="heading"><h2>Chef recipes</h2><span class="triangle"></span></div>
    <a href="recipes-single" data-recipe="r_1">
      <div class="bg"></div>
      <div class="inner">
        <h3>cream cherry pie</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <span class="arrowRight"></span>
      </div>
    </a>
    <a href="recipes-single" data-recipe="r_2">
      <div class="bg"></div>
      <div class="inner">
        <h3>veal stew with boiled vegetables</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <span class="arrowRight"></span>
      </div>
    </a>
    <a href="recipes-single" data-recipe="r_3">
      <div class="bg"></div>
      <div class="inner">
        <h3>cheesecake with caramel</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <span class="arrowRight"></span>
      </div>
    </a>
    <a href="recipes-single" data-recipe="r_4">
      <div class="bg"></div>
      <div class="inner">
        <h3>bacon wrapped chicken breasts</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <span class="arrowRight"></span>
      </div>
    </a>
    <a href="recipes-single" data-recipe="r_5">
      <div class="bg"></div>
      <div class="inner">
        <h3>donuts topped with sugar powder</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <span class="arrowRight"></span>
      </div>
    </a>
  </div>
</section>

@stop