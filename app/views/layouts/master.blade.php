<!DOCTYPE html>
<!--[if IE 8]>               <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>
    @section('title')
      code FU Creative - Andrew Bricker
    @show
  </title>
  
  {{ HTML::style('assets/foundation/css/app.css') }}

  @section('styles')
  @show

  {{ HTML::script('assets/foundation/js/vendor/custom.modernizr.js') }}
  {{ HTML::script('assets/foundation/js/vendor/jquery.js') }}
  <script type="text/javascript" src="//use.typekit.net/xmv6hhx.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

</head>
<body>
  <div class="full-width" id="site-header">
    <header>
      <div class="contain-to-grid sticky">
        <nav class="top-bar" data-topbar>
          <ul class="title-area">
            <li class="name">
              <h1 id="codefu"><a href="#">&lt;code&gt; FU Creative</a></h1>
            </li>
          </ul>

          <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">
              <li class="active"><a href="#">hello</a></li>
              <li><a href="#">let's chat</a></li>
              <!-- <li class="has-dropdown"><a href="#">Right</a></li>
              <li class="has-dropdown"><a href="#">Right</a></li>
              <li class="has-dropdown"><a href="#">Right</a></li>
              <li class="has-dropdown"><a href="#">Right</a></li> -->
            </ul>
          </section>
        </nav>
      </div>
    </header>
  </div>
  <div class="main-content">
    <!-- Content -->
    @yield('content')
    <!-- ./ content -->
  </div> 

  {{ HTML::script('assets/foundation/js/foundation.min.js') }}
  {{ HTML::script('assets/js/jquery.history.js') }}
  {{ HTML::script('assets/js/jquery.mustache.js') }}
  {{ HTML::script('assets/foundation/js/app.js') }}
  <script>
    $(document).foundation();
  </script>

  @section('scripts')
  @show

</body>
</html>
