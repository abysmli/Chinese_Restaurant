<!DOCTYPE html>
<html>
<head>
	<title>{{ $title }}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	{{ HTML::style('backend_resource/css/normalize.css'); }}
	{{ HTML::style('backend_resource/css/foundation.min.css'); }}
	{{ HTML::style('backend_resource/css/application.css'); }}
	{{ HTML::script('backend_resource/js/jquery-2.1.1.min.js'); }}
	{{ HTML::script('backend_resource/js/modernizr.js'); }}
	{{ HTML::script('backend_resource/js/foundation.min.js'); }}
	{{ HTML::script('backend_resource/js/application.js')}}
</head>
<body>
    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="/backend">Restaurant Backend</a></h1>
        </li>
         <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
      </ul>
      <section class="top-bar-section">
        <!-- Right Nav Section -->
        <!--
        <ul class="right">
          <li class="has-dropdown">
            <a href="#">User</a>
            <ul class="dropdown">
              <li><a href="#">Logout</a></li>
            </ul>
          </li>
        </ul>
        -->
        <!-- Left Nav Section -->
        <ul class="left">
          <li id="page_1"><a href="/backend/itemcategory">Item Category</a></li>
          <li id="page_2"><a href="/backend/item">Item</a></li>
          <li id="page_3"><a href="/backend/meta">Meta</a></li>
        </ul>
      </section>
    </nav>

    <main class="site-main large-12 columns">
      @yield('content')
    </main>

    <footer class="site-footer large-12 columns">
    </footer>
    <script>
      $(document).foundation(); 
      $(document).ready(function(){
        $('#page_{{ $page }}').addClass('active');
      });
    </script>
  </body>
</html>
