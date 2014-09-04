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
          <li class="dropdown active">
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
          <li class="dropdown">
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

<!--Menu (2 columns layout)-->
<section class="block menu2">
  <div class="heading"><h2>Menu (2 columns layout)</h2><span class="triangle"></span></div>
  <div class="inner">
   <div class="container">
     <div class="row">
      <div class="col-lg-5 col-md-5 col-sm-6">
       <h3>breakfast</h3>
       <div class="menu-block">
         <div class="item">
           <h4>Soft-Boiled Organic Egg</h4>
           <p>with "soldiers"</p>
           <span class="price">5 .00</span>
         </div>
         <div class="item">
           <h4>Omelette</h4>
           <p>plain or additional toppings</p>
           <span class="price">8 .00</span>
         </div>
         <div class="item">
           <h4>Breakfast Plate</h4>
           <p>Two eggs, sausage or bacon, grits</p>
           <span class="price">20 .00</span>
         </div>
         <div class="item">
           <h4>Sour Cream Hazelnut Waffles</h4>
           <p>with warm berries</p>
           <span class="price">13 .00</span>
         </div>
         <div class="item">
           <h4>Scratch Biscuits</h4>
           <p>plain or with sausage</p>
           <span class="price">10 .00</span>
         </div>
       </div>
     </div>
     <div class="col-lg-5 col-md-5 col-sm-6 col-lg-offset-2 col-md-offset-2">
       <h3>lunch</h3>
       <div class="menu-block">
         <div class="item">
           <h4>Menu Item #1</h4>
           <p>Sed ut perspiciatis unde omnis</p>
           <span class="price">10 .00</span>
         </div>
         <div class="item">
           <h4>Menu Item #2</h4>
           <p>Lorem ipsum</p>
           <span class="price">12 .00</span>
         </div>
         <div class="item">
           <h4>Menu Item #3</h4>
           <p>Sed ut perspiciatis unde omnis</p>
           <span class="price">18 .00</span>
         </div>
         <div class="item">
           <h4>Menu Item #4</h4>
           <p>Lorem ipsum</p>
           <span class="price">10 .00</span>
         </div>
         <div class="item">
           <h4>Menu Item #5</h4>
           <p>Sed ut perspiciatis unde omnis</p>
           <span class="price">15 .00</span>
         </div>
       </div>
     </div>
   </div>
   <div class="row">
    <div class="col-lg-5 col-md-5 col-sm-6">
     <h3>dinner</h3>
     <div class="menu-block">
       <div class="item">
         <h4>Menu Item #1</h4>
         <p>Sed ut perspiciatis unde omnis</p>
         <span class="price">10 .00</span>
       </div>
       <div class="item">
         <h4>Menu Item #2</h4>
         <p>Lorem ipsum</p>
         <span class="price">12 .00</span>
       </div>
       <div class="item">
         <h4>Menu Item #3</h4>
         <p>Sed ut perspiciatis unde omnis</p>
         <span class="price">18 .00</span>
       </div>
       <div class="item">
         <h4>Menu Item #4</h4>
         <p>Lorem ipsum</p>
         <span class="price">10 .00</span>
       </div>
       <div class="item">
         <h4>Menu Item #5</h4>
         <p>Sed ut perspiciatis unde omnis</p>
         <span class="price">15 .00</span>
       </div>
     </div>
   </div>
   <div class="col-lg-5 col-md-5 col-sm-6 col-lg-offset-2 col-md-offset-2">
     <h3>wines</h3>
     <div class="menu-block">
       <div class="item">
         <h4>Menu Item #1</h4>
         <p>Sed ut perspiciatis unde omnis</p>
         <span class="price">10 .00</span>
       </div>
       <div class="item">
         <h4>Menu Item #2</h4>
         <p>Lorem ipsum</p>
         <span class="price">12 .00</span>
       </div>
       <div class="item">
         <h4>Menu Item #3</h4>
         <p>Sed ut perspiciatis unde omnis</p>
         <span class="price">18 .00</span>
       </div>
       <div class="item">
         <h4>Menu Item #4</h4>
         <p>Lorem ipsum</p>
         <span class="price">10 .00</span>
       </div>
       <div class="item">
         <h4>Menu Item #5</h4>
         <p>Sed ut perspiciatis unde omnis</p>
         <span class="price">15 .00</span>
       </div>
     </div>
   </div>
 </div>
</div>
</div>
</section>

@stop