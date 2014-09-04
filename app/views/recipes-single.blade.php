@extends('layout')

@section('content')

    <!--Header-->
    <header class="reveal"><!--By adding "reveal" class to header we enable its animated appearance on scroll. Just for receipe-single!! Not going to work in other pages!!-->
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
              <li class="last"><a class="scroll" href="/#contacts">contacts</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </nav><!--Close Navigation -->
      </div>
    </header>
    
    <!--Fullscreen Recipe Image-->
    <div class="fsbg">
      <div class="visible" id="r_4" style="background: url(img/recipes/r_4.jpg)"></div>
    </div>
    
    <!--Recipes Single-->
    <section class="block recipes-single" id="recipe">
    	<div class="header">
      	<div class="bg"></div>
        <div class="header-inner">
          <div class="table"><!--This two classes 'table' and 'table-cell' for vertical centering text inside div-->
            <div class="table-cell heading"><h1>bacon wrapped chicken breasts</h1></div>
            <div class="controls group">
              <a class="back-to-list" href="recipes"></a>
              <a class="arrowDown recipe-scroll" href="#recipe"></a>
            </div>
          </div>
        </div>
      </div>
      <div class="inner">
      	<div class="container">
        	<div class="row">
          	<div class="col-lg-12 col-md-12">
            	<h2>Bacon Wrapped Chicken Breasts</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor.</p>
            </div>
          </div>
          <div class="row">
          	<div class="col-lg-5 col-md-5 col-sm-5">
            	<h2>ingredients</h2>
            	<ul>
              	<li>2 large skinless, boneless chicken breasts (450g each)</li>
              	<li>1/4 tsp Himalayan or unrefined sea salt</li>
              	<li>10 slices organic, sugar free bacon</li>
              	<li>1/2 can (3-4 pieces) artichoke hearts, chopped</li>
              	<li>1/2 cup sliced water chestnuts, chopped</li>
              	<li>50g sundried tomatoes, finely chopped</li>
              	<li>1/4 cup pine nuts</li>
              	<li>1 large clove garlic, minced</li>
              	<li>1 tsp fresh rosemary, finely chopped</li>
              	<li>1 tsp freshly cracked black pepper</li>
              	<li>1/2 tsp smoked paprika</li>
              </ul>
            </div>
          	<div class="col-lg-6 col-md-6 col-sm-7 col-lg-offset-1 col-md-offset-1">
            	<h2>instructions</h2>
              <p>First, make the stuffing by mixing all the ingredients in a small mixing bowl. Set aside.</p>
              <p>Preheat your oven to 375F.</p>
              <p>Now slice your chicken breasts open. To do that, place the blade of your knife parallel to your cutting board, put your hand flat on top of the breast and carefully slice down the middle almost all the way to the end. You will want to stop about 3/4 of the way through.</p>
              <p>Lay the chicken breasts open on a cutting board and, with a meat mallet or small saucepan, delicately pound them until they are about 1/2 inch thick.</p>
              <p>Place your now flat chicken breasts on your cutting board, sprinkle with salt and deposit half the stuffing in the middle of each breast. Spread the stuffing as evenly as possible but don't go all the way to the edge; you want to leave about one inch all around.</p>
              <p>Roll the breasts as tightly as you can then carefully wrap each one with the bacon strips. I like to put 4 around and 1 across.</p>
              <p>Place the breasts seam side down in a baking dish, cover loosely with aluminum foil and bake at 375F for 40 minutes.</p>
              <p>Remove foil, drain pan juices (do not discard, this is tasty stuff!) and return to the oven, uncovered, for 15-20 minutes or until bacon is crispy.</p>
              <p>f you want your bacon really crispy, you can set your oven to broil for the final 5 minutes or so. Keep a close eye on the prize, though. You would not want your precious bundles to burn!</p>
              <p>Remove from oven, tent loosely and let the meat rest for 10-15 minutes before slicing.</p>
            </div>
          </div>
        </div>      
      </div>
    </section>
    
@stop