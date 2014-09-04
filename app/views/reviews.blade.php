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
          <li class="dropdown active">
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

<!--Reviews-->
<section class="block reviews">
  <div class="heading"><h2>Reviews</h2><span class="triangle"></span></div>
  <div class="inner">
   <div class="container">
     <div class="row">
      <div class="col-lg-7 col-md-7 col-sm-7">
        <div class="row review">
          <div class="col-lg-12">
            <h3>Bacon Wrapped Chicken Breasts</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,  ipsa...</p>
            <a class="read-more" href="reviews-single">read more</a>
            <div class="tags group"><span class="name">John Doe</span><span class="date">13.01.14</span></div>
            <div class="rating">
              <span class="on"></span>
              <span class="on"></span>
              <span class="on"></span>
              <span class="on"></span>
              <span class="off"></span>
            </div>
          </div>
        </div>
        <div class="row review">
          <div class="col-lg-12">
            <h3>Review Title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,  ipsa...</p>
            <a class="read-more" href="reviews-single">read more</a>
            <div class="tags group"><span class="name">Jane Stewart</span><span class="date">20.12.13</span></div>
            <div class="rating">
              <span class="on"></span>
              <span class="on"></span>
              <span class="on"></span>
              <span class="off"></span>
              <span class="off"></span>
            </div>
          </div>
        </div>
        <div class="row review">
          <div class="col-lg-12">
            <h3>Review Title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,  ipsa...</p>
            <a class="read-more" href="reviews-single">read more</a>
            <div class="tags group"><span class="name">Paul Jones</span><span class="date">08.11.13</span></div>
            <div class="rating">
              <span class="on"></span>
              <span class="on"></span>
              <span class="on"></span>
              <span class="on"></span>
              <span class="on"></span>
            </div>
          </div>
        </div>
        <div class="row">
         <div class="col-lg-12">
           <div class="pagination">
             <a href="#">1</a>
             <a class="active" href="#">2</a>
             <a href="#">3</a>
             <a href="#">4</a>
             <span class="dots">...</span>
             <a href="#">15</a>
           </div>
         </div>
       </div>
     </div>
     <div class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
      <h3>place review</h3>
      <form class="form review-form" method="post" role="form">
       <div class="form-group">
         <label class="sr-only" for="name">name</label>
         <input class="form-control" type="text" id="name" name="name" placeholder="name" required>
       </div>
       <div class="form-group">
         <label class="sr-only" for="email">email</label>
         <input class="form-control" type="email" id="email" name="email" placeholder="email" required>
       </div>
       <div class="form-group">
         <label class="sr-only" for="review_title">review title</label>
         <input class="form-control" type="text" id="review_title" name="review_title" placeholder="review title" required>
       </div>
       <div class="form-group">
         <label class="sr-only" for="review">review</label>
         <textarea class="form-control" id="review" name="review" placeholder="your review" required></textarea>
       </div>
       <h4>rate our restaurant</h4>
       <div class="score"></div>
       <button type="submit" class="btn btn-primary">submit</button>
     </form>
   </div>
 </div>
</div>
</div>
</section>

@stop