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


<!--Menu (1 column layout Accordion)-->
<section class="block menu1">
  <div class="fsbg">
    <!--The id (like id="r_1") of the div element should correspond with the rel attribute (like rel="r_1") of the link below. Thus we connect link with background image-->
    <div class="visible" style="background-image: url(img/menu/default.jpg)"></div><!--Generic Default Image not connected with any recipe-->
    <div id="m_1" style="background: url(img/menu/m_1.jpg)"></div>
    <div id="m_2" style="background: url(img/menu/m_2.jpg)"></div>
    <div id="m_3" style="background: url(img/menu/m_3.jpg)"></div>
    <div id="m_4" style="background: url(img/menu/m_4.jpg)"></div>
    <div id="m_5" style="background: url(img/menu/m_5.jpg)"></div>
    <div id="m_6" style="background: url(img/menu/m_6.jpg)"></div>
  </div>
  <div class="heading"><h2>Menu (1 columns layout)</h2><span class="triangle"></span></div>
  <div class="panel-group" id="accordion">
    @foreach($itemcategorys as $key => $itemcategory)
    <div class="panel">
      <a class="panel-heading collapsed" data-toggle="collapse" data-parent="#accordion" data-menu="m_{{ $key+1 }}" href="#menu{{ $key+1 }}">
        <div class="bg"></div>
        <div class="container">
          <h3>{{ $itemcategory->name_de }}</h3>
          <span class="arrowDown"></span>
        </div>
      </a>
      <div id="menu{{ $key+1 }}" class="panel-collapse collapse"><!--href attribute of the link above should correspond with id of current div-->
        <div class="panel-body">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="menu-block">
                  @foreach($items as $item)
                  @if ($item->category_id == $itemcategory->id)
                  <div class="item">
                    <h4>{{ $item->name_de }}</h4>
                    <p>{{ $item->description }}</p>
                    <span class="price">{{ $item->price }}</span>
                  </div>
                  @endif
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</section>

@stop