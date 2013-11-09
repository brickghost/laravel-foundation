<!DOCTYPE html>
<!--[if IE 8]>               <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>
      @section('title')
        Laravel 4.0.9 Skeleton With Zurb Foundation 4.3.2
      @show
    </title>
  
  {{ HTML::style('assets/foundation/css/app.css') }}

  @section('styles')
  @show

  {{ HTML::script('assets/foundation/js/vendor/custom.modernizr.js') }}
  {{ HTML::script('assets/foundation/js/vendor/jquery.js') }}

  @section('scripts')
  @show

</head>
<body>

  <div class="row">
    <!-- Content -->
    @yield('content')
    <!-- ./ content -->
  </div> 

  {{ HTML::script('assets/foundation/js/foundation/foundation.js') }}
  {{ HTML::script('assets/foundation/js/foundation/foundation.clearing.js') }}
  {{ HTML::script('assets/foundation/js/foundation/foundation.cookie.js') }}
  {{ HTML::script('assets/foundation/js/foundation/foundation.dropdown.js') }}
  {{ HTML::script('assets/foundation/js/foundation/foundation.forms.js') }}
  {{ HTML::script('assets/foundation/js/foundation/foundation.joyride.js') }}
  {{ HTML::script('assets/foundation/js/foundation/foundation.magellan.js') }}
  {{ HTML::script('assets/foundation/js/foundation/foundation.orbit.js') }}
  {{ HTML::script('assets/foundation/js/foundation/foundation.placeholder.js') }}
  {{ HTML::script('assets/foundation/js/foundation/foundation.reveal.js') }}
  {{ HTML::script('assets/foundation/js/foundation/foundation.section.js') }}
  {{ HTML::script('assets/foundation/js/foundation/foundation.tooltips.js') }}
  {{ HTML::script('assets/foundation/js/foundation/foundation.topbar.js') }}
  {{ HTML::script('assets/foundation/js/foundation/foundation.interchange.js') }}
  {{ HTML::script('assets/js/jquery.history.js') }}
  {{ HTML::script('assets/js/jquery.mustache.js') }}

  
  <script>
    $(document).foundation();
  </script>
</body>
</html>
