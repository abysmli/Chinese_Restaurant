@extends('layout')

@section('content')

<!--Intro Fullscreen Slideshow-->
<section class="intro-slideshow" id="home">
 <ul>
   <li style="background-image: url(img/intro/1.jpg)"></li>
   <li style="background-image: url(img/intro/2.jpg)"></li>
   <li style="background-image: url(img/intro/3.jpg)"></li>
 </ul>
</section>

<!--Intro Title-->
<section class="intro-title animated">
 <h1>China Restaurant ChongQing</h1>
 <div class="social-bar">
   <a href="#" class="fa fa-instagram tooltipped" title="Instagram"></a>
   <a href="#" class="fa fa-facebook-square tooltipped" title="Facebook"></a>
   <a href="#" class="fa fa-pinterest-square tooltipped" title="Pinterest"></a>
   <a href="#" class="fa fa-google-plus-square tooltipped" title="Google+"></a>
   <a href="#" class="fa fa-linkedin-square tooltipped" title="LinkedIn"></a>
 </div>
</section>

<!--Wrapper-->
<div id="wrapper">
  
  <!--Header-->
  <header class="stiky"><!--By adding "stiky" class to header we enable stiky functionality, header will be pinned to the top, when it meets the top of the window-->
    <div class="container">
     <a class="logo scroll-up" href="#home"></a>
     
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
          <li class="active"><a class="scroll-up" href="#home">home</a></li>
          <li><a class="scroll" href="#about">about</a></li>
          <li><a class="scroll" href="#serv-reservation">services/reservation</a></li>
          <li class="last"><a class="scroll" href="#news">news</a></li>
        </ul>
        <ul class="nav navbar-nav nav-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">menu <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="/menu1">Menu</a></li>
              <li><a href="/menu2">Menu and Price</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">reviews <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="/reviews">reviews list</a></li>
              <li><a href="/reviews-single">reviews single</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">chef recipes <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="/recipes">chef recipes list</a></li>
              <li><a href="/recipes-single">chef recipes single</a></li>
            </ul>
          </li>
          <li class="last"><a class="scroll" href="#contacts">contacts</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </nav><!--Close Navigation -->
  </div>
</header>

<!--About-->
<section class="block about" id="about">
  <div class="heading"><h2>About our restaurant</h2><span class="triangle"></span></div>
  <div class="about-slider">
   <div class="info-bg"></div>
   <div class="info animation" data-animation="fadeInLeft">
     <div class="pager"></div>
     <div class="info-slider">
       <div>
        <img class="svg" src="img/about/icon1.svg" width="101" height="101" alt="Established"/>
        <img class="png" src="img/about/icon1.png" width="101" height="101" alt="Established"/>
        <h3>est. 1985</h3>
        <p><i class="fa fa-quote-left"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non.</p>
      </div>
      <div>
        <img class="svg" src="img/about/icon2.svg" width="101" height="101" alt="Our Mission"/>
        <img class="png" src="img/about/icon2.png" width="101" height="101" alt="Our Mission"/>
        <h3>Our Mission</h3>
        <p><i class="fa fa-quote-left"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
      </div>
      <div>
        <img class="svg" src="img/about/icon3.svg" width="101" height="101" alt="Cooking Traditions"/>
        <img class="png" src="img/about/icon3.png" width="101" height="101" alt="Cooking Traditions"/>
        <h3>Cooking Traditions</h3>
        <p><i class="fa fa-quote-left"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
      </div>
    </div>
  </div>
  <div class="about-slider-inner">
    <div><img src="img/about/1.jpg" width="1920" height="570" alt="Slide1"/></div>
    <div><img src="img/about/2.jpg" width="1920" height="570" alt="Slide2"/></div>
    <div><img src="img/about/3.jpg" width="1920" height="570" alt="Slide3"/></div>
  </div>
</div>
</section>

<!--Services Reservation-->
<section class="block reservation" id="serv-reservation">
 <div class="overlay"></div>
 <div class="heading"><h2>Services reservation</h2><span class="triangle"></span></div>
 
 <!-- Nav tabs -->
 <div class="tab-navigation">
  <div class="container">
    <ul class="nav nav-tabs">
      <li class="active"><a class="group" href="#table" data-toggle="tab"><span class="icon icon-key"></span><span class="text">table reservation</span></a></li>
      <li><a class="group" href="#banquet" data-toggle="tab"><span class="icon icon-plate"></span><span class="text">banqueting and events</span></a></li>
      <li><a class="group" href="#catering" data-toggle="tab"><span class="icon icon-pan"></span><span class="text">catering</span></a></li>
      <li><a class="group" href="#chef-at-home" data-toggle="tab"><span class="icon icon-hat"></span><span class="text">chef at home</span></a></li>
      <li class="last"><a class="group" href="#food-delivery" data-toggle="tab"><span class="icon icon-truck"></span><span class="text">food delivery</span></a></li>
    </ul>
  </div>
</div>

<div class="reservation-inner">
  
 <!-- Tab panes -->
 <div class="tab-content">
  <div class="tab-pane fade in active" id="table">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 animation" data-animation='fadeInLeft'>
          <form class="form form-table" method="post" name="table_reservation">
            <h4>Fill the form for table reservation (all fields required)</h4>
            <div class="row">
              <div class="col-lg-12 col-md-12 form-group">
                <label class="sr-only" for="service_name1">table reservation</label>
                <input class="form-control" type="text" id="service_name1" name="service_name" value="table reservation" disabled>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 form-group">
                <label class="sr-only" for="first_name1">first name</label>
                <input class="form-control" type="text" id="first_name1" name="first_name" placeholder="first name" required>
              </div>
              <div class="col-lg-6 col-md-6 form-group">
                <label class="sr-only" for="last_name1">last name</label>
                <input class="form-control" type="text" id="last_name1" name="last_name" placeholder="last name" required>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 form-group">
                <label class="sr-only" for="email1">email</label>
                <input class="form-control" type="email" id="email1" name="email" placeholder="email@" required>
              </div>
              <div class="col-lg-6 col-md-6 form-group">
                <label class="sr-only" for="phone1">phone</label>
                <input class="form-control" type="text" id="phone1" name="phone" placeholder="phone" required>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 form-group">
                <label class="sr-only" for="reserv_date1">reservation date</label>
                <input class="form-control datepicker" type="text" id="reserv_date1" name="reserv_date" placeholder="reservation date" required>
              </div>
              <div class="col-lg-6 col-md-6 form-group">
                <label class="sr-only" for="numb_guests1">number of guests</label>
                <input class="form-control" type="text" id="numb_guests1" name="numb_guests" placeholder="number of guests" required>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 form-group">
                <label class="sr-only" for="alt_reserv_date1">alternate reservation date</label>
                <input class="form-control datepicker" type="text" id="alt_reserv_date1" name="alt_reserv_date" placeholder="alternate reservation date" required>
              </div>
              <div class="col-lg-6 col-md-6 form-group">
                <label class="sr-only" for="time1">time</label>
                <input class="form-control timepicker" type="text" id="time1" name="time" placeholder="time" required>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <p>Due to the limitation of seats, we only accept a maximum of six people per booking. Private hire of the premises is available (for 14 people) with bespoke menus on request.</p>
                <div class="subscribe-chbx group">
                  <span></span>
                  <label><input type="checkbox" name="subscription">Subscribe me to Eattie Restaurant newsletter</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <button type="submit" class="btn btn-primary">submit</button>
              </div>
            </div>
          </form>
        </div>
        <div class="serv-info col-lg-5 col-md-5 col-lg-offset-1 col-md-offset-1 animation" data-animation='fadeInRight'>
          <h3>Allergies &amp; Special Diets</h3>
          <p>Although every attempt will be made to accommodate food intolerances and allergies, we cannot guarantee that every dish will be completely allergen free.</p>
          <h3>Children</h3>
          <p>Restaurant is open to children over the age of 12.</p>
          <h3>Service Charge</h3>
          <p>An optional 12.5% gratuity will be added to your bill.</p>
          <h3>Cancellation Policy</h3>
          <p>Please be considerate of the small nature of this business. If in the event you do need to cancel, kindly let us have at least 48 hours' notice or we will need to charge you £50 per person.</p>
        </div>
      </div>
    </div>
  </div>
  
  <!--Tab Banquet-->
  <div class="tab-pane fade" id="banquet">
   <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 animation" data-animation='fadeInLeft'>
        <form class="form form-banquet" method="post" name="banquet_reservation">
          <h4>Fill the form for banquet reservation (all fields required)</h4>
          <div class="row">
            <div class="col-lg-12 col-md-12 form-group">
              <label class="sr-only" for="service_name2">banquet reservation</label>
              <input class="form-control" type="text" id="service_name2" name="service_name" value="banquet reservation" disabled>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 form-group">
              <label class="sr-only" for="first_name2">first name</label>
              <input class="form-control" type="text" id="first_name2" name="first_name" placeholder="first name" required>
            </div>
            <div class="col-lg-6 col-md-6 form-group">
              <label class="sr-only" for="last_name2">last name</label>
              <input class="form-control" type="text" id="last_name2" name="last_name" placeholder="last name" required>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 form-group">
              <label class="sr-only" for="email2">email</label>
              <input class="form-control" type="email" id="email2" name="email" placeholder="email@" required>
            </div>
            <div class="col-lg-6 col-md-6 form-group">
              <label class="sr-only" for="phone2">phone</label>
              <input class="form-control" type="text" id="phone2" name="phone" placeholder="phone" required>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 form-group">
              <label class="sr-only" for="reserv_date2">banquet date</label>
              <input class="form-control datepicker" type="text" id="reserv_date2" name="reserv_date" placeholder="banquet date" required>
            </div>
            <div class="col-lg-6 col-md-6 form-group">
              <label class="sr-only" for="numb_guests2">number of guests</label>
              <input class="form-control" type="text" id="numb_guests2" name="numb_guests" placeholder="number of guests" required>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12">
             <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
             <div class="subscribe-chbx group">
              <span></span>
              <label><input type="checkbox" name="subscription">Subscribe me to Eattie Restaurant newsletter</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <button type="submit" class="btn btn-primary">submit</button>
          </div>
        </div>
      </form>
    </div>
    <div class="serv-info col-lg-5 col-md-5 col-lg-offset-1 col-md-offset-1 animation" data-animation="fadeInRight">
      <h3>Banqueting and events</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
      <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    </div>
  </div>
</div>
</div>

<!--Tab Catering-->
<div class="tab-pane fade" id="catering">
  <div class="container">
   <div class="row">
    <div class="col-lg-6 col-md-6 animation" data-animation='fadeInLeft'>
      <form class="form form-catering" method="post" name="catering_reservation">
        <h4>Fill the form to order catering services (all fields required)</h4>
        <div class="row">
          <div class="col-lg-12 col-md-12 form-group">
            <label class="sr-only" for="service_name3">catering order</label>
            <input class="form-control" type="text" id="service_name3" name="service_name" value="catering order" disabled>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 form-group">
            <label class="sr-only" for="first_name3">first name</label>
            <input class="form-control" type="text" id="first_name3" name="first_name" placeholder="first name" required>
          </div>
          <div class="col-lg-6 col-md-6 form-group">
            <label class="sr-only" for="last_name3">last name</label>
            <input class="form-control" type="text" id="last_name3" name="last_name" placeholder="last name" required>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 form-group">
            <label class="sr-only" for="email3">email</label>
            <input class="form-control" type="email" id="email3" name="email" placeholder="email@" required>
          </div>
          <div class="col-lg-6 col-md-6 form-group">
            <label class="sr-only" for="phone3">phone</label>
            <input class="form-control" type="text" id="phone3" name="phone" placeholder="phone" required>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 form-group">
            <label class="sr-only" for="reserv_date3">reservation date</label>
            <input class="form-control datepicker" type="text" id="reserv_date3" name="reserv_date" placeholder="reservation date" required>
          </div>
          <div class="col-lg-6 col-md-6 form-group">
            <label class="sr-only" for="numb_guests3">number of guests</label>
            <input class="form-control" type="text" id="numb_guests3" name="numb_guests" placeholder="number of guests" required>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 form-group">
            <label class="sr-only" for="adress1">adress</label>
            <input class="form-control" type="text" name="adress" id="adress1" placeholder="adress" required>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="subscribe-chbx group">
              <span></span>
              <label><input type="checkbox" name="subscription">Subscribe me to Eattie Restaurant newsletter</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <button type="submit" class="btn btn-primary">submit</button>
          </div>
        </div>
      </form>
    </div>
    <div class="serv-info col-lg-5 col-md-5 col-lg-offset-1 col-md-offset-1 animation" data-animation='fadeInRight'>
      <h3>Catering</h3>
      <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    </div>
  </div>
</div>
</div>

<!--Tab Chef at home-->
<div class="tab-pane fade" id="chef-at-home">
 <div class="container">
   <div class="row">
    <div class="col-lg-6 col-md-6 animation"  data-animation='fadeInLeft'>
      <form class="form form-chef-at-home" method="post" name="chef_at_home">
        <h4>Fill the form to order chef at home (all fields required)</h4>
        <div class="row">
          <div class="col-lg-12 col-md-12 form-group">
            <label class="sr-only" for="service_name4">chef at home</label>
            <input class="form-control" type="text" id="service_name4" name="service_name" value="chef at home" disabled>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 form-group">
            <label class="sr-only" for="first_name4">first name</label>
            <input class="form-control" type="text" id="first_name4" name="first_name" placeholder="first name" required>
          </div>
          <div class="col-lg-6 col-md-6 form-group">
            <label class="sr-only" for="last_name4">last name</label>
            <input class="form-control" type="text" id="last_name4" name="last_name" placeholder="last name" required>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 form-group">
            <label class="sr-only" for="email4">email</label>
            <input class="form-control" type="email" id="email4" name="email" placeholder="email@" required>
          </div>
          <div class="col-lg-6 col-md-6 form-group">
            <label class="sr-only" for="phone4">phone</label>
            <input class="form-control" type="text" id="phone4" name="phone" placeholder="phone" required>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 form-group">
            <label class="sr-only" for="reserv_date4">reservation date</label>
            <input class="form-control datepicker" type="text" id="reserv_date4" name="reserv_date" placeholder="reservation date" required>
          </div>
          <div class="col-lg-6 col-md-6 form-group">
            <label class="sr-only" for="time3">time</label>
            <input class="form-control timepicker" type="text" id="time3" name="time" placeholder="time" required>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 form-group">
            <label class="sr-only" for="adress2">adress</label>
            <input class="form-control" type="text" id="adress2" name="adress" placeholder="adress" required>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="subscribe-chbx group">
              <span></span>
              <label><input type="checkbox" name="subscription">Subscribe me to Eattie Restaurant newsletter</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <button type="submit" class="btn btn-primary">submit</button>
          </div>
        </div>
      </form>
    </div>
    <div class="serv-info col-lg-5 col-md-5 col-lg-offset-1 col-md-offset-1 animation" data-animation='fadeInRight'>
      <h3>Chef at home</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    </div>
  </div>
</div>
</div>

<!--Tab Food delivery-->
<div class="tab-pane fade" id="food-delivery">
 <div class="container">
   <div class="row">
    <div class="col-lg-6 col-md-6 animation" data-animation='fadeInLeft'>
      <form class="form form-food-delivery" method="post" name="food delivery">
        <h4>Fill the form to order food delivery (all fields required)</h4>
        <div class="row">
          <div class="col-lg-12 col-md-12 form-group">
            <label class="sr-only" for="service_name5">food delivery</label>
            <input class="form-control" type="text" id="service_name5" name="service_name" value="food delivery" disabled>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 form-group">
            <label class="sr-only" for="first_name5">first name</label>
            <input class="form-control" type="text" id="first_name5" name="first_name" placeholder="first name" required>
          </div>
          <div class="col-lg-6 col-md-6 form-group">
            <label class="sr-only" for="last_name5">last name</label>
            <input class="form-control" type="text" id="last_name5" name="last_name" placeholder="last name" required>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 form-group">
            <label class="sr-only" for="email5">email</label>
            <input class="form-control" type="email" id="email5" name="email" placeholder="email@" required>
          </div>
          <div class="col-lg-6 col-md-6 form-group">
            <label class="sr-only" for="phone5">phone</label>
            <input class="form-control" type="text" id="phone5" name="phone" placeholder="phone" required>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 form-group">
            <label class="sr-only" for="reserv_date5">date</label>
            <input class="form-control datepicker" type="text" id="reserv_date5" name="reserv_date" placeholder="date" required>
          </div>
          <div class="col-lg-6 col-md-6 form-group">
            <label class="sr-only" for="time4">time</label>
            <input class="form-control timepicker" type="text" id="time4" name="time" placeholder="time" required>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 form-group">
            <label class="sr-only" for="adress3">adress</label>
            <input class="form-control" type="text" id="adress3" name="adress" placeholder="adress" required>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 form-group">
            <label class="sr-only" for="order1">write your order</label>
            <textarea class="form-control" id="order1" name="order" placeholder="write your order" required></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="subscribe-chbx group">
              <span></span>
              <label><input type="checkbox" name="subscription">Subscribe me to Eattie Restaurant newsletter</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <button type="submit" class="btn btn-primary">submit</button>
          </div>
        </div>
      </form>
    </div>
    <div class="serv-info col-lg-5 col-md-5 col-lg-offset-1 col-md-offset-1 animation" data-animation='fadeInRight'>
      <h3>Food delivery</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p>Please check our <a href="#">latest menu</a> to make your order</p>
    </div>
  </div>
</div>
</div>

</div><!--Close all Tabs Panes-->
</div>      
</section>

<!--News-->
<section class="block news" id="news">
  <div class="heading"><h2>News and promotions</h2><span class="triangle"></span></div>
  
  <div class="container animation" data-animation="fadeInUp">
    
    <!--News Carousel-->
    <div id="news-carousel" class="carousel slide" data-ride="carousel">
      
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#news-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#news-carousel" data-slide-to="1"></li>
        <li data-target="#news-carousel" data-slide-to="2"></li>
      </ol>
      
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        
        <!--Slide1-->
        <div class="item active">
          <div class="container">
            <div class="col-lg-5 col-md-5 col-lg-offset-1 col-md-offset-1">
              <h3>Season menu</h3>
              <h4>1.06.2014</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p>
            </div>
            <div class="col-lg-6 col-md-6">
              <img src="img/news/1.png" width="322" height="282" alt="News1"/>
            </div>
          </div>
        </div>
        
        <!--Slide2-->
        <div class="item">
          <div class="container">
            <div class="col-lg-5 col-md-5 col-lg-offset-1 col-md-offset-1">
              <h3>New openning hours</h3>
              <h4>22.08.2014</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p>
            </div>
            <div class="col-lg-6 col-md-6">
              <img src="img/news/2.png" width="322" height="282" alt="News2"/>
            </div>
          </div>
        </div>
        
        <!--Slide3-->
        <div class="item">
          <div class="container">
            <div class="col-lg-5 col-md-5 col-lg-offset-1 col-md-offset-1">
              <h3>Christams at Eattie</h3>
              <h4>15.10.2014</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p>
            </div>
            <div class="col-lg-6 col-md-6">
              <img src="img/news/3.png" width="322" height="282" alt="News3"/>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--App Presentation-->
<section class="block app">
 <div class="container">
   <div class="row">
    <div class="col-lg-4 col-md-4 animation" data-animation="fadeInLeft">
      <h2>Download our app for your mobile</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
      <div class="row">
       <div class="col-lg-6 col-md-6">
         <a class="appstore-btn" href="#"></a>
       </div>
       <div class="col-lg-6 col-md-6">
         <a class="google-play-btn" href="#"></a>
       </div>
     </div>
   </div>
   <div class="col-lg-4 col-md-4 animation" data-animation="bounceIn">
     <div class="phone"><img src="img/app/screen.jpg" width="157" height="278" alt="App Screen"/></div>
   </div>
   <div class="app-features col-lg-4 col-md-4 animation" data-animation="fadeInRight">
     <div class="row">
       <div class="col-lg-6 col-md-6">
         <div class="app-feature">
          <img class="svg" src="img/app/bread.svg" width="50" height="50" alt="Feature1"/>
          <img class="png" src="img/app/bread.png" width="50" height="50" alt="Feature1"/>
          <p>Lorem ipsum dolor sit amet, labore consectetur adipisicing elite, sed do eiusmod tempor incididunt</p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
       <div class="app-feature">
        <img class="svg" src="img/app/drop.svg" width="50" height="50" alt="Feature1"/>
        <img class="png" src="img/app/drop.png" width="50" height="50" alt="Feature1"/>
        <p>Lorem ipsum dolor sit amet, labore consectetur adipisicing elite, sed do eiusmod tempor incididunt</p>
      </div>
    </div>
  </div>
  <div class="row">
   <div class="col-lg-6 col-md-6">
     <div class="app-feature">
      <img class="svg" src="img/app/cheese.svg" width="50" height="50" alt="Feature1"/>
      <img class="png" src="img/app/cheese.png" width="50" height="50" alt="Feature1"/>
      <p>Lorem ipsum dolor sit amet, labore consectetur adipisicing elite, sed do eiusmod tempor incididunt</p>
    </div>
  </div>
  <div class="col-lg-6 col-md-6">
   <div class="app-feature">
    <img class="svg" src="img/app/chili.svg" width="50" height="50" alt="Feature1"/>
    <img class="png" src="img/app/chili.png" width="50" height="50" alt="Feature1"/>
    <p>Lorem ipsum dolor sit amet, labore consectetur adipisicing elite, sed do eiusmod tempor incididunt</p>
  </div>
</div>
</div>
</div>
</div>
</div>
</section>

<!--Contacts-->
<section class="block contacts" id="contacts">
  <div class="heading"><h2>Contacts</h2><span class="triangle"></span></div>
  <div id="map_canvas"></div>
  <div class="container">
    <div class="col-lg-3 col-md-5 col-lg-offset-1">
      <h3><i class="fa fa-clock-o"></i>Hours</h3>
      <h4>ÖFFNUNGSZEITEN</h4>
      <p>Mon to Fri: 7:30 AM - 11:30 AM<br/>Sat & Sun: 8:00 AM - 9:00 AM (continental only)</p>
      <h4>Brunch</h4>
      <p>Sat & Sun: 9:00 AM - 4:00 PM</p>
      <h4>Lunch &amp; Late Lunch</h4>
      <p>Mon to Fri: 12:00 PM - 5:00 PM</p>
      <h4>Dinner &amp; After Hours</h4>
      <p>Mon to Thu: 6:00 PM - 12:00 AM<br/>Fri  & Sat: 6:00 PM -  1:00 AM<br/>Sun: 5:30 PM - 12:00 AM</p>
    </div>
    <div class="col-lg-3 col-md-4 col-lg-offset-1">
      <h3><i class="fa fa-map-marker"></i>Directions</h3>
      <p>Kirchheimer Straße 126, 70619 Stuttgart</p>
    </div>
    <div class="col-lg-2 col-md-3 col-lg-offset-1">
      <h3><i class="fa fa-mobile"></i>Contacts</h3>
      <p>www.beijinggarden.de</p>
      <p>phone:<br/>0049-711-4791300<br/>+48 555 234 54 34<br/>+48 555 234 54 33</p>
    </div>
  </div> 
</section>

@stop