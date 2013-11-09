@extends('layouts.master')
{{-- Web site Title --}}
@section('title')
@parent
:: Home
@stop

{{-- Content --}}
@section('content')
<style>
    #mustache {
    color: #000;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    text-align: center;
    display: block;
    font-size: 250px;
    font-family: Georgia;
    margin: 0;
    margin-bottom: -30px;
}
</style>
<div class="row">
    <div class="large-12 columns">
        <h2>Laravel v4.0.9</h2>
    </div>
</div>
<div class="row">
    <div class="large-12 columns" style="text-align: center;">
        <a href="http://laravel.com" title="Laravel PHP Framework"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIcAAACHCAYAAAA850oKAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoTWFjaW50b3NoKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDoyNUVCMTdGOUJBNkExMUUyOTY3MkMyQjZGOTYyREVGMiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDoyNUVCMTdGQUJBNkExMUUyOTY3MkMyQjZGOTYyREVGMiI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjI1RUIxN0Y3QkE2QTExRTI5NjcyQzJCNkY5NjJERUYyIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjI1RUIxN0Y4QkE2QTExRTI5NjcyQzJCNkY5NjJERUYyIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+g6J7EAAAEL1JREFUeNrsXQmU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"></a>
    </div>
</div>
<div class="row">
    <div class="large-12 columns">
        <h2>mustache.js</h2>
        <span id="mustache">}</span>
    </div>
</div>
<div class="row">
    <div class="large-12 columns">
        <h2>history.js</h2>
    </div>
</div>
<div class="row">
    <div class="large-12 columns">
        <h2>Welcome to Foundation</h2>
        <p>This is version 4.3.2.</p>
        <hr />
    </div>
</div>

<div class="row">
    <div class="large-8 columns">
        <h3>The Grid</h3>

        <!-- Grid Example -->
        <div class="row">
            <div class="large-12 columns">
                <div class="panel">
                    <p>This is a twelve column section in a row. Each of these includes a div.panel element so you can see where the columns are - it's not required at all for the grid.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="large-6 columns">
                <div class="panel">
                    <p>Six columns</p>
                </div>
            </div>
            <div class="large-6 columns">
                <div class="panel">
                    <p>Six columns</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="large-4 columns">
                <div class="panel">
                    <p>Four columns</p>
                </div>
            </div>
            <div class="large-4 columns">
                <div class="panel">
                    <p>Four columns</p>
                </div>
            </div>
            <div class="large-4 columns">
                <div class="panel">
                    <p>Four columns</p>
                </div>
            </div>
        </div>

        <h3>Buttons</h3>

  <div class="row">
    <div class="large-6 columns">
      <p><a href="#" class="small button">Small Button</a></p>
      <p><a href="#" class="button">Medium Button</a></p>
      <p><a href="#" class="large button">Large Button</a></p>
    </div>
    <div class="large-6 columns">
      <p><a href="#" class="small alert button">Small Alert Button</a></p>
      <p><a href="#" class="success button">Medium Success Button</a></p>
      <p><a href="#" class="large secondary button">Large Secondary Button</a></p>
    </div>
  </div>
    </div>

    <div class="large-4 columns">
        <h4>Getting Started</h4>
        <p>We're stoked you want to try Foundation! To get going, this file (index.html) includes some basic styles you can modify, play around with, or totally destroy to get going.</p>

        <h4>Other Resources</h4>
        <p>Once you've exhausted the fun in this document, you should check out:</p>
        <ul class="disc">
            <li><a href="http://foundation.zurb.com/docs">Foundation Documentation</a><br />Everything you need to know about using the framework.</li>
            <li><a href="http://github.com/zurb/foundation">Foundation on Github</a><br />Latest code, issue reports, feature requests and more.</li>
            <li><a href="http://twitter.com/foundationzurb">@foundationzurb</a><br />Ping us on Twitter if you have questions. If you build something with this we'd love to see it (and send you a totally boss sticker).</li>
        </ul>
    </div>
</div>
<div class="large-12 columns">

  <!-- general icons -->
  <a id="allicons"><h2 class="with-download-link">General Icons</h2></a>
  <ul class="small-block-grid-2 large-block-grid-4">
    <li>
      <p data-dropdown="heart" data-options="is_hover:true"><i class="fi-heart"></i> heart</p>
      <ul id="heart" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="" style="position: absolute; top: 116px; left: -99999px;">
        <li><i class="fi-heart large"></i>
            <i class="fi-heart medium"></i>
            <i class="fi-heart small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="star" data-options="is_hover:true"><i class="fi-star"></i> star</p>
      <ul id="star" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-star large"></i>
            <i class="fi-star medium"></i>
            <i class="fi-star small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="plus" data-options="is_hover:true"><i class="fi-plus"></i> plus</p>
      <ul id="plus" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-plus large"></i>
            <i class="fi-plus medium"></i>
            <i class="fi-plus small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="minus" data-options="is_hover:true"><i class="fi-minus"></i> minus</p>
      <ul id="minus" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-minus large"></i>
            <i class="fi-minus medium"></i>
            <i class="fi-minus small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="x" data-options="is_hover:true"><i class="fi-x"></i> x</p>
      <ul id="x" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-x large"></i>
            <i class="fi-x medium"></i>
            <i class="fi-x small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="check" data-options="is_hover:true"><i class="fi-check"></i> check</p>
      <ul id="check" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-check large"></i>
            <i class="fi-check medium"></i>
            <i class="fi-check small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="upload" data-options="is_hover:true"><i class="fi-upload"></i> upload</p>
      <ul id="upload" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-upload large"></i>
            <i class="fi-upload medium"></i>
            <i class="fi-upload small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="download" data-options="is_hover:true"><i class="fi-download"></i> download</p>
      <ul id="download" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-download large"></i>
            <i class="fi-download medium"></i>
            <i class="fi-download small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="widget" data-options="is_hover:true"><i class="fi-widget"></i> widget</p>
      <ul id="widget" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-widget large"></i>
            <i class="fi-widget medium"></i>
            <i class="fi-widget small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="marker" data-options="is_hover:true"><i class="fi-marker"></i> marker</p>
      <ul id="marker" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-marker large"></i>
            <i class="fi-marker medium"></i>
            <i class="fi-marker small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="refresh" data-options="is_hover:true"><i class="fi-refresh"></i> refresh</p>
      <ul id="refresh" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-refresh large"></i>
            <i class="fi-refresh medium"></i>
            <i class="fi-refresh small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="home" data-options="is_hover:true"><i class="fi-home"></i> home</p>
      <ul id="home" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-home large"></i>
            <i class="fi-home medium"></i>
            <i class="fi-home small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="trash" data-options="is_hover:true"><i class="fi-trash"></i> trash</p>
      <ul id="trash" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-trash large"></i>
            <i class="fi-trash medium"></i>
            <i class="fi-trash small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="paperclip" data-options="is_hover:true"><i class="fi-paperclip"></i> paperclip</p>
      <ul id="paperclip" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-paperclip large"></i>
            <i class="fi-paperclip medium"></i>
            <i class="fi-paperclip small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="lock" data-options="is_hover:true"><i class="fi-lock"></i> lock</p>
      <ul id="lock" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-lock large"></i>
            <i class="fi-lock medium"></i>
            <i class="fi-lock small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="unlock" data-options="is_hover:true"><i class="fi-unlock"></i> unlock</p>
      <ul id="unlock" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-unlock large"></i>
            <i class="fi-unlock medium"></i>
            <i class="fi-unlock small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="calendar" data-options="is_hover:true"><i class="fi-calendar"></i> calendar</p>
      <ul id="calendar" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-calendar large"></i>
            <i class="fi-calendar medium"></i>
            <i class="fi-calendar small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="cloud" data-options="is_hover:true"><i class="fi-cloud"></i> cloud</p>
      <ul id="cloud" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-cloud large"></i>
            <i class="fi-cloud medium"></i>
            <i class="fi-cloud small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="magnifying-glass" data-options="is_hover:true"><i class="fi-magnifying-glass"></i> magnifying-glass</p>
      <ul id="magnifying-glass" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-magnifying-glass large"></i>
            <i class="fi-magnifying-glass medium"></i>
            <i class="fi-magnifying-glass small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="zoom-out" data-options="is_hover:true"><i class="fi-zoom-out"></i> zoom-out</p>
      <ul id="zoom-out" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-zoom-out large"></i>
            <i class="fi-zoom-out medium"></i>
            <i class="fi-zoom-out small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="zoom-in" data-options="is_hover:true"><i class="fi-zoom-in"></i> zoom-in</p>
      <ul id="zoom-in" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="" style="position: absolute; top: 381px; left: -99999px;">
        <li><i class="fi-zoom-in large"></i>
            <i class="fi-zoom-in medium"></i>
            <i class="fi-zoom-in small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="wrench" data-options="is_hover:true"><i class="fi-wrench"></i> wrench</p>
      <ul id="wrench" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-wrench large"></i>
            <i class="fi-wrench medium"></i>
            <i class="fi-wrench small"></i>      
        </li>
      </ul>
    </li>

    <li>
      <p data-dropdown="rss" data-options="is_hover:true"><i class="fi-rss"></i> rss</p>
      <ul id="rss" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-rss large"></i>
            <i class="fi-rss medium"></i>
            <i class="fi-rss small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="share" data-options="is_hover:true"><i class="fi-share"></i> share</p>
      <ul id="share" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-share large"></i>
            <i class="fi-share medium"></i>
            <i class="fi-share small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="flag" data-options="is_hover:true"><i class="fi-flag"></i> flag</p>
      <ul id="flag" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-flag large"></i>
            <i class="fi-flag medium"></i>
            <i class="fi-flag small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="list-thumbnails" data-options="is_hover:true"><i class="fi-list-thumbnails"></i> list-thumbnails</p>
      <ul id="list-thumbnails" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-list-thumbnails large"></i>
            <i class="fi-list-thumbnails medium"></i>
            <i class="fi-list-thumbnails small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="list" data-options="is_hover:true"><i class="fi-list"></i> list</p>
      <ul id="list" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-list large"></i>
            <i class="fi-list medium"></i>
            <i class="fi-list small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="thumbnails" data-options="is_hover:true"><i class="fi-thumbnails"></i> thumbnails</p>
      <ul id="thumbnails" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-thumbnails large"></i>
            <i class="fi-thumbnails medium"></i>
            <i class="fi-thumbnails small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="annotate" data-options="is_hover:true"><i class="fi-annotate"></i> annotate</p>
      <ul id="annotate" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="" style="position: absolute; top: 487px; left: -99999px;">
        <li><i class="fi-annotate large"></i>
            <i class="fi-annotate medium"></i>
            <i class="fi-annotate small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="folder" data-options="is_hover:true"><i class="fi-folder"></i> folder</p>
      <ul id="folder" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-folder large"></i>
            <i class="fi-folder medium"></i>
            <i class="fi-folder small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="folder-lock" data-options="is_hover:true"><i class="fi-folder-lock"></i> folder-lock</p>
      <ul id="folder-lock" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-folder-lock large"></i>
            <i class="fi-folder-lock medium"></i>
            <i class="fi-folder-lock small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="folder-add" data-options="is_hover:true"><i class="fi-folder-add"></i> folder-add</p>
      <ul id="folder-add" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-folder-add large"></i>
            <i class="fi-folder-add medium"></i>
            <i class="fi-folder-add small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="clock" data-options="is_hover:true"><i class="fi-clock"></i> clock</p>
      <ul id="clock" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-clock large"></i>
            <i class="fi-clock medium"></i>
            <i class="fi-clock small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="play-video" data-options="is_hover:true"><i class="fi-play-video"></i> play-video</p>
      <ul id="play-video" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-play-video large"></i>
            <i class="fi-play-video medium"></i>
            <i class="fi-play-video small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="crop" data-options="is_hover:true"><i class="fi-crop"></i> crop</p>
      <ul id="crop" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-crop large"></i>
            <i class="fi-crop medium"></i>
            <i class="fi-crop small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="archive" data-options="is_hover:true"><i class="fi-archive"></i> archive</p>
      <ul id="archive" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-archive large"></i>
            <i class="fi-archive medium"></i>
            <i class="fi-archive small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="pencil" data-options="is_hover:true"><i class="fi-pencil"></i> pencil</p>
      <ul id="pencil" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-pencil large"></i>
            <i class="fi-pencil medium"></i>
            <i class="fi-pencil small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="graph-trend" data-options="is_hover:true"><i class="fi-graph-trend"></i> graph-trend</p>
      <ul id="graph-trend" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-graph-trend large"></i>
            <i class="fi-graph-trend medium"></i>
            <i class="fi-graph-trend small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="graph-bar" data-options="is_hover:true"><i class="fi-graph-bar"></i> graph-bar</p>
      <ul id="graph-bar" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-graph-bar large"></i>
            <i class="fi-graph-bar medium"></i>
            <i class="fi-graph-bar small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="graph-horizontal" data-options="is_hover:true"><i class="fi-graph-horizontal"></i> graph-horizontal</p>
      <ul id="graph-horizontal" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-graph-horizontal large"></i>
            <i class="fi-graph-horizontal medium"></i>
            <i class="fi-graph-horizontal small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="graph-pie" data-options="is_hover:true"><i class="fi-graph-pie"></i> graph-pie</p>
      <ul id="graph-pie" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-graph-pie large"></i>
            <i class="fi-graph-pie medium"></i>
            <i class="fi-graph-pie small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="checkbox" data-options="is_hover:true"><i class="fi-checkbox"></i> checkbox</p>
      <ul id="checkbox" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-checkbox large"></i>
            <i class="fi-checkbox medium"></i>
            <i class="fi-checkbox small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="minus-circle" data-options="is_hover:true"><i class="fi-minus-circle"></i> minus-circle</p>
      <ul id="minus-circle" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-minus-circle large"></i>
            <i class="fi-minus-circle medium"></i>
            <i class="fi-minus-circle small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="x-circle" data-options="is_hover:true"><i class="fi-x-circle"></i> x-circle</p>
      <ul id="x-circle" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-x-circle large"></i>
            <i class="fi-x-circle medium"></i>
            <i class="fi-x-circle small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="eye" data-options="is_hover:true"><i class="fi-eye"></i> eye</p>
      <ul id="eye" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-eye large"></i>
            <i class="fi-eye medium"></i>
            <i class="fi-eye small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="database" data-options="is_hover:true"><i class="fi-database"></i> database</p>
      <ul id="database" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-database large"></i>
            <i class="fi-database medium"></i>
            <i class="fi-database small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="results" data-options="is_hover:true"><i class="fi-results"></i> results</p>
      <ul id="results" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-results large"></i>
            <i class="fi-results medium"></i>
            <i class="fi-results small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="results-demographics" data-options="is_hover:true"><i class="fi-results-demographics"></i> results-demographics</p>
      <ul id="results-demographics" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-results-demographics large"></i>
            <i class="fi-results-demographics medium"></i>
            <i class="fi-results-demographics small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="like" data-options="is_hover:true"><i class="fi-like"></i> like</p>
      <ul id="like" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-like large"></i>
            <i class="fi-like medium"></i>
            <i class="fi-like small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="dislike" data-options="is_hover:true"><i class="fi-dislike"></i> dislike</p>
      <ul id="dislike" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-dislike large"></i>
            <i class="fi-dislike medium"></i>
            <i class="fi-dislike small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="upload-cloud" data-options="is_hover:true"><i class="fi-upload-cloud"></i> upload-cloud</p>
      <ul id="upload-cloud" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-upload-cloud large"></i>
            <i class="fi-upload-cloud medium"></i>
            <i class="fi-upload-cloud small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="camera" data-options="is_hover:true"><i class="fi-camera"></i> camera</p>
      <ul id="camera" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-camera large"></i>
            <i class="fi-camera medium"></i>
            <i class="fi-camera small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="alert" data-options="is_hover:true"><i class="fi-alert"></i> alert</p>
      <ul id="alert" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="" style="position: absolute; top: 805px; left: -99999px;">
        <li><i class="fi-alert large"></i>
            <i class="fi-alert medium"></i>
            <i class="fi-alert small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="bookmark" data-options="is_hover:true"><i class="fi-bookmark"></i> bookmark</p>
      <ul id="bookmark" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-bookmark large"></i>
            <i class="fi-bookmark medium"></i>
            <i class="fi-bookmark small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="contrast" data-options="is_hover:true"><i class="fi-contrast"></i> contrast</p>
      <ul id="contrast" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-contrast large"></i>
            <i class="fi-contrast medium"></i>
            <i class="fi-contrast small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="mail" data-options="is_hover:true"><i class="fi-mail"></i> mail</p>
      <ul id="mail" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-mail large"></i>
            <i class="fi-mail medium"></i>
            <i class="fi-mail small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="video" data-options="is_hover:true"><i class="fi-video"></i> video</p>
      <ul id="video" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-video large"></i>
            <i class="fi-video medium"></i>
            <i class="fi-video small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="phone" data-options="is_hover:true"><i class="fi-telephone"></i> phone</p>
      <ul id="phone" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-telephone large"></i>
            <i class="fi-telephone medium"></i>
            <i class="fi-telephone small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="comment" data-options="is_hover:true"><i class="fi-comment"></i> comment</p>
      <ul id="comment" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-comment large"></i>
            <i class="fi-comment medium"></i>
            <i class="fi-comment small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="comment-video" data-options="is_hover:true"><i class="fi-comment-video"></i> comment-video</p>
      <ul id="comment-video" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-comment-video large"></i>
            <i class="fi-comment-video medium"></i>
            <i class="fi-comment-video small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="comment-quotes" data-options="is_hover:true"><i class="fi-comment-quotes"></i> comment-quotes</p>
      <ul id="comment-quotes" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-comment-quotes large"></i>
            <i class="fi-comment-quotes medium"></i>
            <i class="fi-comment-quotes small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="comment-minus" data-options="is_hover:true"><i class="fi-comment-minus"></i> comment-minus</p>
      <ul id="comment-minus" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-comment-minus large"></i>
            <i class="fi-comment-minus medium"></i>
            <i class="fi-comment-minus small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="comments" data-options="is_hover:true"><i class="fi-comments"></i> comments</p>
      <ul id="comments" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-comments large"></i>
            <i class="fi-comments medium"></i>
            <i class="fi-comments small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="microphone" data-options="is_hover:true"><i class="fi-microphone"></i> microphone</p>
      <ul id="microphone" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-microphone large"></i>
            <i class="fi-microphone medium"></i>
            <i class="fi-microphone small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="megaphone" data-options="is_hover:true"><i class="fi-megaphone"></i> megaphone</p>
      <ul id="megaphone" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-megaphone large"></i>
            <i class="fi-megaphone medium"></i>
            <i class="fi-megaphone small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="sound" data-options="is_hover:true"><i class="fi-sound"></i> sound</p>
      <ul id="sound" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-sound large"></i>
            <i class="fi-sound medium"></i>
            <i class="fi-sound small"></i>      
        </li>
      </ul>
    </li>
    
    <li>
      <p data-dropdown="address-book" data-options="is_hover:true"><i class="fi-address-book"></i> address-book</p>
      <ul id="address-book" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-address-book large"></i>
            <i class="fi-address-book medium"></i>
            <i class="fi-address-book small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="bluetooth" data-options="is_hover:true"><i class="fi-bluetooth"></i> bluetooth</p>
      <ul id="bluetooth" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-bluetooth large"></i>
            <i class="fi-bluetooth medium"></i>
            <i class="fi-bluetooth small"></i>      
        </li>
      </ul>
    </li>
    
    <li>
      <p data-dropdown="html5" data-options="is_hover:true"><i class="fi-html5"></i> html5</p>
      <ul id="html5" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-html5 large"></i>
            <i class="fi-html5 medium"></i>
            <i class="fi-html5 small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="css3" data-options="is_hover:true"><i class="fi-css3"></i> css3</p>
      <ul id="css3" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-css3 large"></i>
            <i class="fi-css3 medium"></i>
            <i class="fi-css3 small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="layout" data-options="is_hover:true"><i class="fi-layout"></i> layout</p>
      <ul id="layout" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-layout large"></i>
            <i class="fi-layout medium"></i>
            <i class="fi-layout small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="web" data-options="is_hover:true"><i class="fi-web"></i> web</p>
      <ul id="web" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-web large"></i>
            <i class="fi-web medium"></i>
            <i class="fi-web small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="foundation" data-options="is_hover:true"><i class="fi-foundation"></i> foundation</p>
      <ul id="foundation" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-foundation large"></i>
            <i class="fi-foundation medium"></i>
            <i class="fi-foundation small"></i>      
        </li>
      </ul>
    </li>
  </ul>
  
  <!-- pages -->
  <h2 class="with-download-link">Page Icons</h2>
  <ul class="small-block-grid-2 large-block-grid-4">
    <li>
      <p data-dropdown="page" data-options="is_hover:true"><i class="fi-page"></i> page</p>
      <ul id="page" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-page large"></i>
            <i class="fi-page medium"></i>
            <i class="fi-page small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="page-csv" data-options="is_hover:true"><i class="fi-page-csv"></i> page-csv</p>
      <ul id="page-csv" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-page-csv large"></i>
            <i class="fi-page-csv medium"></i>
            <i class="fi-page-csv small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="page-doc" data-options="is_hover:true"><i class="fi-page-export-csv"></i> page-doc</p>
      <ul id="page-doc" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-page-doc large"></i>
            <i class="fi-page-doc medium"></i>
            <i class="fi-page-doc small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="page-pdf" data-options="is_hover:true"><i class="fi-page-export-csv"></i> page-pdf</p>
      <ul id="page-pdf" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-page-pdf large"></i>
            <i class="fi-page-pdf medium"></i>
            <i class="fi-page-pdf small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="page-export" data-options="is_hover:true"><i class="fi-page-export"></i> page-export</p>
      <ul id="page-export" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-page-export large"></i>
            <i class="fi-page-export medium"></i>
            <i class="fi-page-export small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="page-export-csv" data-options="is_hover:true"><i class="fi-page-export-csv"></i> page-export-csv</p>
      <ul id="page-export-csv" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-page-export-csv large"></i>
            <i class="fi-page-export-csv medium"></i>
            <i class="fi-page-export-csv small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="page-export-doc" data-options="is_hover:true"><i class="fi-page-export-doc"></i> page-export-doc</p>
      <ul id="page-export-doc" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-page-export-doc large"></i>
            <i class="fi-page-export-doc medium"></i>
            <i class="fi-page-export-doc small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="page-export-pdf" data-options="is_hover:true"><i class="fi-page-export-pdf"></i> page-export-pdf</p>
      <ul id="page-export-pdf" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-page-export-pdf large"></i>
            <i class="fi-page-export-pdf medium"></i>
            <i class="fi-page-export-pdf small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="page-add" data-options="is_hover:true"><i class="fi-page-add"></i> page-add</p>
      <ul id="page-add" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-page-add large"></i>
            <i class="fi-page-add medium"></i>
            <i class="fi-page-add small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="page-remove" data-options="is_hover:true"><i class="fi-page-remove"></i> page-remove</p>
      <ul id="page-remove" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-page-remove large"></i>
            <i class="fi-page-remove medium"></i>
            <i class="fi-page-remove small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="page-delete" data-options="is_hover:true"><i class="fi-page-delete"></i> page-delete</p>
      <ul id="page-delete" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-page-delete large"></i>
            <i class="fi-page-delete medium"></i>
            <i class="fi-page-delete small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="page-edit" data-options="is_hover:true"><i class="fi-page-edit"></i> page-edit</p>
      <ul id="page-edit" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-page-edit large"></i>
            <i class="fi-page-edit medium"></i>
            <i class="fi-page-edit small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="page-search" data-options="is_hover:true"><i class="fi-page-search"></i> page-search</p>
      <ul id="page-search" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-page-search large"></i>
            <i class="fi-page-search medium"></i>
            <i class="fi-page-search small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="page-copy" data-options="is_hover:true"><i class="fi-page-copy"></i> page-copy</p>
      <ul id="page-copy" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-page-copy large"></i>
            <i class="fi-page-copy medium"></i>
            <i class="fi-page-copy small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="page-filled" data-options="is_hover:true"><i class="fi-page-filled"></i> page-filled</p>
      <ul id="page-filled" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-page-filled large"></i>
            <i class="fi-page-filled medium"></i>
            <i class="fi-page-filled small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="page-multiple" data-options="is_hover:true"><i class="fi-page-multiple"></i> page-multiple</p>
      <ul id="page-multiple" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-page-multiple large"></i>
            <i class="fi-page-multiple medium"></i>
            <i class="fi-page-multiple small"></i>      
        </li>
      </ul>
    </li>
    
  </ul>
  
  <!-- arrows -->
  <h2 class="with-download-link">Arrow Icons</h2>
  <ul class="small-block-grid-2 large-block-grid-4">
    <li>
      <p data-dropdown="arrow-up" data-options="is_hover:true"><i class="fi-arrow-up"></i> arrow-up</p>
      <ul id="arrow-up" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-arrow-up large"></i>
            <i class="fi-arrow-up medium"></i>
            <i class="fi-arrow-up small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="arrow-right" data-options="is_hover:true"><i class="fi-arrow-right"></i> arrow-right</p>
      <ul id="arrow-right" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-arrow-right large"></i>
            <i class="fi-arrow-right medium"></i>
            <i class="fi-arrow-right small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="arrow-down" data-options="is_hover:true"><i class="fi-arrow-down"></i> arrow-down</p>
      <ul id="arrow-down" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-arrow-down large"></i>
            <i class="fi-arrow-down medium"></i>
            <i class="fi-arrow-down small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="arrow-left" data-options="is_hover:true"><i class="fi-arrow-left"></i> arrow-left</p>
      <ul id="arrow-left" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-arrow-left large"></i>
            <i class="fi-arrow-left medium"></i>
            <i class="fi-arrow-left small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="arrows-out" data-options="is_hover:true"><i class="fi-arrows-out"></i> arrows-out</p>
      <ul id="arrows-out" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-arrows-out large"></i>
            <i class="fi-arrows-out medium"></i>
            <i class="fi-arrows-out small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="arrows-in" data-options="is_hover:true"><i class="fi-arrows-in"></i> arrows-in</p>
      <ul id="arrows-in" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-arrows-in large"></i>
            <i class="fi-arrows-in medium"></i>
            <i class="fi-arrows-in small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="arrows-expand" data-options="is_hover:true"><i class="fi-arrows-expand"></i> arrows-expand</p>
      <ul id="arrows-expand" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-arrows-expand large"></i>
            <i class="fi-arrows-expand medium"></i>
            <i class="fi-arrows-expand small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="arrows-compress" data-options="is_hover:true"><i class="fi-arrows-compress"></i> arrows-compress</p>
      <ul id="arrows-compress" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-arrows-compress large"></i>
            <i class="fi-arrows-compress medium"></i>
            <i class="fi-arrows-compress small"></i>      
        </li>
      </ul>
    </li>
  </ul>
  
  <!-- people -->
  <h2 class="with-download-link">People Icons</h2>
  <ul class="small-block-grid-2 large-block-grid-4">
    <li>
      <p data-dropdown="torso" data-options="is_hover:true"><i class="fi-torso"></i> torso</p>
      <ul id="torso" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-torso large"></i>
            <i class="fi-torso medium"></i>
            <i class="fi-torso small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="torso-female" data-options="is_hover:true"><i class="fi-torso-female"></i> torso-female</p>
      <ul id="torso-female" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-torso-female large"></i>
            <i class="fi-torso-female medium"></i>
            <i class="fi-torso-female small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="torsos" data-options="is_hover:true"><i class="fi-torsos"></i> torsos</p>
      <ul id="torsos" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-torsos large"></i>
            <i class="fi-torsos medium"></i>
            <i class="fi-torsos small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="torsos-female-male" data-options="is_hover:true"><i class="fi-torsos-female-male"></i> torsos-female-male</p>
      <ul id="torsos-female-male" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-torsos-female-male large"></i>
            <i class="fi-torsos-female-male medium"></i>
            <i class="fi-torsos-female-male small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="torsos-male-female" data-options="is_hover:true"><i class="fi-torsos-male-female"></i> torsos-male-female</p>
      <ul id="torsos-male-female" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-torsos-male-female large"></i>
            <i class="fi-torsos-male-female medium"></i>
            <i class="fi-torsos-male-female small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="torsos-all" data-options="is_hover:true"><i class="fi-torsos-all"></i> torsos-all</p>
      <ul id="torsos-all" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-torsos-all large"></i>
            <i class="fi-torsos-all medium"></i>
            <i class="fi-torsos-all small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="torsos-all-female" data-options="is_hover:true"><i class="fi-torsos-all-female"></i> torsos-all-female</p>
      <ul id="torsos-all-female" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-torsos-all-female large"></i>
            <i class="fi-torsos-all-female medium"></i>
            <i class="fi-torsos-all-female small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="torso-business" data-options="is_hover:true"><i class="fi-torso-business"></i> torso-business</p>
      <ul id="torso-business" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-torso-business large"></i>
            <i class="fi-torso-business medium"></i>
            <i class="fi-torso-business small"></i>      
        </li>
      </ul>
    </li>
  </ul>
  
  <!-- devices -->
  <h2 class="with-download-link">Device Icons</h2>
  <ul class="small-block-grid-2 large-block-grid-4">
    <li>
      <p data-dropdown="monitor" data-options="is_hover:true"><i class="fi-monitor"></i> monitor</p>
      <ul id="monitor" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-monitor large"></i>
            <i class="fi-monitor medium"></i>
            <i class="fi-monitor small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="laptop" data-options="is_hover:true"><i class="fi-laptop"></i> laptop</p>
      <ul id="laptop" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-laptop large"></i>
            <i class="fi-laptop medium"></i>
            <i class="fi-laptop small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="tablet-portrait" data-options="is_hover:true"><i class="fi-tablet-portrait"></i> tablet-portrait</p>
      <ul id="tablet-portrait" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-tablet-portrait large"></i>
            <i class="fi-tablet-portrait medium"></i>
            <i class="fi-tablet-portrait small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="tablet-landscape" data-options="is_hover:true"><i class="fi-tablet-landscape"></i> tablet-landscape</p>
      <ul id="tablet-landscape" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-tablet-landscape large"></i>
            <i class="fi-tablet-landscape medium"></i>
            <i class="fi-tablet-landscape small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="mobile" data-options="is_hover:true"><i class="fi-mobile"></i> mobile</p>
      <ul id="mobile" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-mobile large"></i>
            <i class="fi-mobile medium"></i>
            <i class="fi-mobile small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="mobile-signal" data-options="is_hover:true"><i class="fi-mobile-signal"></i> mobile-signal</p>
      <ul id="mobile-signal" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-mobile-signal large"></i>
            <i class="fi-mobile-signal medium"></i>
            <i class="fi-mobile-signal small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="usb" data-options="is_hover:true"><i class="fi-usb"></i> usb</p>
      <ul id="usb" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-usb large"></i>
            <i class="fi-usb medium"></i>
            <i class="fi-usb small"></i>      
        </li>
      </ul>
    </li>
  </ul>  
  
  
  <!-- text editor -->
  <h2 class="with-download-link">Text Editor Icons</h2>
  <ul class="small-block-grid-2 large-block-grid-4">
    <li>
      <p data-dropdown="bold" data-options="is_hover:true"><i class="fi-bold"></i> bold</p>
      <ul id="bold" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-bold large"></i>
            <i class="fi-bold medium"></i>
            <i class="fi-bold small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="italic" data-options="is_hover:true"><i class="fi-italic"></i> italic</p>
      <ul id="italic" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-italic large"></i>
            <i class="fi-italic medium"></i>
            <i class="fi-italic small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="underline" data-options="is_hover:true"><i class="fi-underline"></i> underline</p>
      <ul id="underline" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-underline large"></i>
            <i class="fi-underline medium"></i>
            <i class="fi-underline small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="strikethrough" data-options="is_hover:true"><i class="fi-strikethrough"></i> strike</p>
      <ul id="strikethrough" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-strikethrough large"></i>
            <i class="fi-strikethrough medium"></i>
            <i class="fi-strikethrough small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="text-color" data-options="is_hover:true"><i class="fi-text-color"></i> text-color</p>
      <ul id="text-color" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-text-color large"></i>
            <i class="fi-text-color medium"></i>
            <i class="fi-text-color small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="background-color" data-options="is_hover:true"><i class="fi-background-color"></i> background-color</p>
      <ul id="background-color" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-background-color large"></i>
            <i class="fi-background-color medium"></i>
            <i class="fi-background-color small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="superscript" data-options="is_hover:true"><i class="fi-superscript"></i> superscript</p>
      <ul id="superscript" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-superscript large"></i>
            <i class="fi-superscript medium"></i>
            <i class="fi-superscript small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="subscript" data-options="is_hover:true"><i class="fi-subscript"></i> subscript</p>
      <ul id="subscript" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-subscript large"></i>
            <i class="fi-subscript medium"></i>
            <i class="fi-subscript small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="align-left" data-options="is_hover:true"><i class="fi-align-left"></i> align-left</p>
      <ul id="align-left" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-align-left large"></i>
            <i class="fi-align-left medium"></i>
            <i class="fi-align-left small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="align-center" data-options="is_hover:true"><i class="fi-align-center"></i> align-center</p>
      <ul id="align-center" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-align-center large"></i>
            <i class="fi-align-center medium"></i>
            <i class="fi-align-center small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="align-right" data-options="is_hover:true"><i class="fi-align-right"></i> align-right</p>
      <ul id="align-right" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-align-right large"></i>
            <i class="fi-align-right medium"></i>
            <i class="fi-align-right small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="align-justify" data-options="is_hover:true"><i class="fi-align-justify"></i> align-justify</p>
      <ul id="align-justify" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-align-justify large"></i>
            <i class="fi-align-justify medium"></i>
            <i class="fi-align-justify small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="list-number" data-options="is_hover:true"><i class="fi-list-number"></i> list-numbered</p>
      <ul id="list-number" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-list-number large"></i>
            <i class="fi-list-number medium"></i>
            <i class="fi-list-number small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="list-bullet" data-options="is_hover:true"><i class="fi-list-bullet"></i> list-bullet</p>
      <ul id="list-bullet" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-list-bullet large"></i>
            <i class="fi-list-bullet medium"></i>
            <i class="fi-list-bullet small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="indent-more" data-options="is_hover:true"><i class="fi-indent-more"></i> indent-more</p>
      <ul id="indent-more" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-indent-more large"></i>
            <i class="fi-indent-more medium"></i>
            <i class="fi-indent-more small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="indent-less" data-options="is_hover:true"><i class="fi-indent-less"></i> indent-less</p>
      <ul id="indent-less" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-indent-less large"></i>
            <i class="fi-indent-less medium"></i>
            <i class="fi-indent-less small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="print" data-options="is_hover:true"><i class="fi-print"></i> print</p>
      <ul id="print" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-print large"></i>
            <i class="fi-print medium"></i>
            <i class="fi-print small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="save" data-options="is_hover:true"><i class="fi-save"></i> save</p>
      <ul id="save" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-save large"></i>
            <i class="fi-save medium"></i>
            <i class="fi-save small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="photo" data-options="is_hover:true"><i class="fi-photo"></i> photo</p>
      <ul id="photo" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-photo large"></i>
            <i class="fi-photo medium"></i>
            <i class="fi-photo small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="filter" data-options="is_hover:true"><i class="fi-filter"></i> filter</p>
      <ul id="filter" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-filter large"></i>
            <i class="fi-filter medium"></i>
            <i class="fi-filter small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="paint-bucket" data-options="is_hover:true"><i class="fi-paint-bucket"></i> paint-bucket</p>
      <ul id="paint-bucket" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-paint-bucket large"></i>
            <i class="fi-paint-bucket medium"></i>
            <i class="fi-paint-bucket small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="link" data-options="is_hover:true"><i class="fi-link"></i> link</p>
      <ul id="link" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-link large"></i>
            <i class="fi-link medium"></i>
            <i class="fi-link small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="unlink" data-options="is_hover:true"><i class="fi-unlink"></i> unlink</p>
      <ul id="unlink" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-unlink large"></i>
            <i class="fi-unlink medium"></i>
            <i class="fi-unlink small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="quote" data-options="is_hover:true"><i class="fi-quote"></i> quote</p>
      <ul id="quote" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-quote large"></i>
            <i class="fi-quote medium"></i>
            <i class="fi-quote small"></i>      
        </li>
      </ul>
    </li>
  </ul>
          
  <!-- media controls -->
  <h2 class="with-download-link">Media Control Icons</h2>
  <ul class="small-block-grid-2 large-block-grid-4">
    <li>
      <p data-dropdown="play" data-options="is_hover:true"><i class="fi-play"></i> play</p>
      <ul id="play" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="" style="position: absolute; top: 2517px; left: -99999px;">
        <li><i class="fi-play large"></i>
            <i class="fi-play medium"></i>
            <i class="fi-play small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="stop" data-options="is_hover:true"><i class="fi-stop"></i> stop</p>
      <ul id="stop" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-stop large"></i>
            <i class="fi-stop medium"></i>
            <i class="fi-stop small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="pause" data-options="is_hover:true"><i class="fi-pause"></i> pause</p>
      <ul id="pause" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-pause large"></i>
            <i class="fi-pause medium"></i>
            <i class="fi-pause small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="previous" data-options="is_hover:true"><i class="fi-previous"></i> previous</p>
      <ul id="previous" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-previous large"></i>
            <i class="fi-previous medium"></i>
            <i class="fi-previous small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="rewind" data-options="is_hover:true"><i class="fi-rewind"></i> rewind</p>
      <ul id="rewind" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-rewind large"></i>
            <i class="fi-rewind medium"></i>
            <i class="fi-rewind small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="fast-forward" data-options="is_hover:true"><i class="fi-fast-forward"></i> fast-forward</p>
      <ul id="fast-forward" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-fast-forward large"></i>
            <i class="fi-fast-forward medium"></i>
            <i class="fi-fast-forward small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="next" data-options="is_hover:true"><i class="fi-next"></i> next</p>
      <ul id="next" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-next large"></i>
            <i class="fi-next medium"></i>
            <i class="fi-next small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="record" data-options="is_hover:true"><i class="fi-record"></i> record</p>
      <ul id="record" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-record large"></i>
            <i class="fi-record medium"></i>
            <i class="fi-record small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="play-circle" data-options="is_hover:true"><i class="fi-play-circle"></i> play-circle</p>
      <ul id="play-circle" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-play-circle large"></i>
            <i class="fi-play-circle medium"></i>
            <i class="fi-play-circle small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="volume-none" data-options="is_hover:true"><i class="fi-volume-none"></i> volume-none</p>
      <ul id="volume-none" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-volume-none large"></i>
            <i class="fi-volume-none medium"></i>
            <i class="fi-volume-none small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="volume" data-options="is_hover:true"><i class="fi-volume"></i> volume</p>
      <ul id="volume" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-volume large"></i>
            <i class="fi-volume medium"></i>
            <i class="fi-volume small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="volume-strike" data-options="is_hover:true"><i class="fi-volume-strike"></i> volume-strike</p>
      <ul id="volume-strike" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-volume-strike large"></i>
            <i class="fi-volume-strike medium"></i>
            <i class="fi-volume-strike small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="loop" data-options="is_hover:true"><i class="fi-loop"></i> loop</p>
      <ul id="loop" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-loop large"></i>
            <i class="fi-loop medium"></i>
            <i class="fi-loop small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="shuffle" data-options="is_hover:true"><i class="fi-shuffle"></i> shuffle</p>
      <ul id="shuffle" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-shuffle large"></i>
            <i class="fi-shuffle medium"></i>
            <i class="fi-shuffle small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="eject" data-options="is_hover:true"><i class="fi-eject"></i> eject</p>
      <ul id="eject" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-eject large"></i>
            <i class="fi-eject medium"></i>
            <i class="fi-eject small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="rewind-ten" data-options="is_hover:true"><i class="fi-rewind-ten"></i> rewind-ten</p>
      <ul id="rewind-ten" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-rewind-ten large"></i>
            <i class="fi-rewind-ten medium"></i>
            <i class="fi-rewind-ten small"></i>      
        </li>
      </ul>
    </li>
  </ul>
  
  <!-- ecommerce -->
  
  <h2 class="with-download-link">Ecommerce Icons</h2>
  <ul class="small-block-grid-2 large-block-grid-4">
    <li>
      <p data-dropdown="dollar" data-options="is_hover:true"><i class="fi-dollar"></i> dollar</p>
      <ul id="dollar" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-dollar large"></i>
            <i class="fi-dollar medium"></i>
            <i class="fi-dollar small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="euro" data-options="is_hover:true"><i class="fi-euro"></i> euro</p>
      <ul id="euro" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-euro large"></i>
            <i class="fi-euro medium"></i>
            <i class="fi-euro small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="pound" data-options="is_hover:true"><i class="fi-pound"></i> pound</p>
      <ul id="pound" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-pound large"></i>
            <i class="fi-pound medium"></i>
            <i class="fi-pound small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="yen" data-options="is_hover:true"><i class="fi-yen"></i> yen</p>
      <ul id="yen" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-yen large"></i>
            <i class="fi-yen medium"></i>
            <i class="fi-yen small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="bitcoin" data-options="is_hover:true"><i class="fi-bitcoin"></i> bitcoin</p>
      <ul id="bitcoin" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-bitcoin large"></i>
            <i class="fi-bitcoin medium"></i>
            <i class="fi-bitcoin small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="bitcoin-circle" data-options="is_hover:true"><i class="fi-bitcoin-circle"></i> bitcoin-circle</p>
      <ul id="bitcoin-circle" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-bitcoin-circle large"></i>
            <i class="fi-bitcoin-circle medium"></i>
            <i class="fi-bitcoin-circle small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="credit-card" data-options="is_hover:true"><i class="fi-credit-card"></i> credit-card</p>
      <ul id="credit-card" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-credit-card large"></i>
            <i class="fi-credit-card medium"></i>
            <i class="fi-credit-card small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="shopping-cart" data-options="is_hover:true"><i class="fi-shopping-cart"></i> shopping-cart</p>
      <ul id="shopping-cart" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-shopping-cart large"></i>
            <i class="fi-shopping-cart medium"></i>
            <i class="fi-shopping-cart small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="burst" data-options="is_hover:true"><i class="fi-burst"></i> burst</p>
      <ul id="burst" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-burst large"></i>
            <i class="fi-burst medium"></i>
            <i class="fi-burst small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="burst-new" data-options="is_hover:true"><i class="fi-burst-new"></i> burst-new</p>
      <ul id="burst-new" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-burst-new large"></i>
            <i class="fi-burst-new medium"></i>
            <i class="fi-burst-new small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="burst-sale" data-options="is_hover:true"><i class="fi-burst-sale"></i> burst-sale</p>
      <ul id="burst-sale" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-burst-sale large"></i>
            <i class="fi-burst-sale medium"></i>
            <i class="fi-burst-sale small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="paypal" data-options="is_hover:true"><i class="fi-paypal"></i> paypal</p>
      <ul id="paypal" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-paypal large"></i>
            <i class="fi-paypal medium"></i>
            <i class="fi-paypal small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="price-tag" data-options="is_hover:true"><i class="fi-price-tag"></i> price-tag</p>
      <ul id="price-tag" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-price-tag large"></i>
            <i class="fi-price-tag medium"></i>
            <i class="fi-price-tag small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="pricetag-multiple" data-options="is_hover:true"><i class="fi-pricetag-multiple"></i> pricetag-multiple</p>
      <ul id="pricetag-multiple" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-pricetag-multiple large"></i>
            <i class="fi-pricetag-multiple medium"></i>
            <i class="fi-pricetag-multiple small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="shopping-bag" data-options="is_hover:true"><i class="fi-shopping-bag"></i> shopping-bag</p>
      <ul id="shopping-bag" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-shopping-bag large"></i>
            <i class="fi-shopping-bag medium"></i>
            <i class="fi-shopping-bag small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="dollar-bill" data-options="is_hover:true"><i class="fi-dollar-bill"></i> dollar-bill</p>
      <ul id="dollar-bill" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-dollar-bill large"></i>
            <i class="fi-dollar-bill medium"></i>
            <i class="fi-dollar-bill small"></i>      
        </li>
      </ul>
    </li>
  </ul>  
  
  <!-- accessibility -->
  <h2 class="with-download-link">Accessibility Icons</h2>
  <ul class="small-block-grid-2 large-block-grid-4">
    <li>
      <p data-dropdown="wheelchair" data-options="is_hover:true"><i class="fi-wheelchair"></i> wheelchair</p>
      <ul id="wheelchair" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-wheelchair large"></i>
            <i class="fi-wheelchair medium"></i>
            <i class="fi-wheelchair small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="braille" data-options="is_hover:true"><i class="fi-braille"></i> braille</p>
      <ul id="braille" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-braille large"></i>
            <i class="fi-braille medium"></i>
            <i class="fi-braille small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="closed-caption" data-options="is_hover:true"><i class="fi-closed-caption"></i> closed-caption</p>
      <ul id="closed-caption" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-closed-caption large"></i>
            <i class="fi-closed-caption medium"></i>
            <i class="fi-closed-caption small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="blind" data-options="is_hover:true"><i class="fi-blind"></i> blind</p>
      <ul id="blind" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-blind large"></i>
            <i class="fi-blind medium"></i>
            <i class="fi-blind small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="asl" data-options="is_hover:true"><i class="fi-asl"></i> asl</p>
      <ul id="asl" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-asl large"></i>
            <i class="fi-asl medium"></i>
            <i class="fi-asl small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="hearing-aid" data-options="is_hover:true"><i class="fi-hearing-aid"></i> hearing-aid</p>
      <ul id="hearing-aid" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-hearing-aid large"></i>
            <i class="fi-hearing-aid medium"></i>
            <i class="fi-hearing-aid small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="guide-dog" data-options="is_hover:true"><i class="fi-guide-dog"></i> guide-dog</p>
      <ul id="guide-dog" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-guide-dog large"></i>
            <i class="fi-guide-dog medium"></i>
            <i class="fi-guide-dog small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="universal-access" data-options="is_hover:true"><i class="fi-universal-access"></i> universal-access</p>
      <ul id="universal-access" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-universal-access large"></i>
            <i class="fi-universal-access medium"></i>
            <i class="fi-universal-access small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="telephone-accessible" data-options="is_hover:true"><i class="fi-telephone-accessible"></i> telephone-accessible</p>
      <ul id="telephone-accessible" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-telephone-accessible large"></i>
            <i class="fi-telephone-accessible medium"></i>
            <i class="fi-telephone-accessible small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="elevator" data-options="is_hover:true"><i class="fi-elevator"></i> elevator</p>
      <ul id="elevator" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-elevator large"></i>
            <i class="fi-elevator medium"></i>
            <i class="fi-elevator small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="male" data-options="is_hover:true"><i class="fi-male"></i> male</p>
      <ul id="male" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-male large"></i>
            <i class="fi-male medium"></i>
            <i class="fi-male small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="female" data-options="is_hover:true"><i class="fi-female"></i> female</p>
      <ul id="female" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-female large"></i>
            <i class="fi-female medium"></i>
            <i class="fi-female small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="male-female" data-options="is_hover:true"><i class="fi-male-female"></i> male-female</p>
      <ul id="male-female" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-male-female large"></i>
            <i class="fi-male-female medium"></i>
            <i class="fi-male-female small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="male-symbol" data-options="is_hover:true"><i class="fi-male-symbol"></i> male-symbol</p>
      <ul id="male-symbol" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-male-symbol large"></i>
            <i class="fi-male-symbol medium"></i>
            <i class="fi-male-symbol small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="female-symbol" data-options="is_hover:true"><i class="fi-female-symbol"></i> female-symbol</p>
      <ul id="female-symbol" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-female-symbol large"></i>
            <i class="fi-female-symbol medium"></i>
            <i class="fi-female-symbol small"></i>      
        </li>
      </ul>
    </li>
  </ul>

  
  <!-- social and brand -->
  <h2 class="with-download-link">Social &amp; Brand Icons</h2>
  <ul class="small-block-grid-2 large-block-grid-4">
    <li>
      <p data-dropdown="social-500px" data-options="is_hover:true"><i class="fi-social-500px"></i> social-500px</p>
      <ul id="social-500px" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-500px large"></i>
            <i class="fi-social-500px medium"></i>
            <i class="fi-social-500px small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-adobe" data-options="is_hover:true"><i class="fi-social-adobe"></i> social-adobe</p>
      <ul id="social-adobe" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-adobe large"></i>
            <i class="fi-social-adobe medium"></i>
            <i class="fi-social-adobe small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-amazon" data-options="is_hover:true"><i class="fi-social-amazon"></i> social-amazon</p>
      <ul id="social-amazon" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-amazon large"></i>
            <i class="fi-social-amazon medium"></i>
            <i class="fi-social-amazon small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-android" data-options="is_hover:true"><i class="fi-social-android"></i> social-android</p>
      <ul id="social-android" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-android large"></i>
            <i class="fi-social-android medium"></i>
            <i class="fi-social-android small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-apple" data-options="is_hover:true"><i class="fi-social-apple"></i> social-apple</p>
      <ul id="social-apple" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-apple large"></i>
            <i class="fi-social-apple medium"></i>
            <i class="fi-social-apple small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-behance" data-options="is_hover:true"><i class="fi-social-behance"></i> social-behance</p>
      <ul id="social-behance" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-behance large"></i>
            <i class="fi-social-behance medium"></i>
            <i class="fi-social-behance small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-bing" data-options="is_hover:true"><i class="fi-social-bing"></i> social-bing</p>
      <ul id="social-bing" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-bing large"></i>
            <i class="fi-social-bing medium"></i>
            <i class="fi-social-bing small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-blogger" data-options="is_hover:true"><i class="fi-social-blogger"></i> social-blogger</p>
      <ul id="social-blogger" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-blogger large"></i>
            <i class="fi-social-blogger medium"></i>
            <i class="fi-social-blogger small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-delicious" data-options="is_hover:true"><i class="fi-social-delicious"></i> social-delicious</p>
      <ul id="social-delicious" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-delicious large"></i>
            <i class="fi-social-delicious medium"></i>
            <i class="fi-social-delicious small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-designer-news" data-options="is_hover:true"><i class="fi-social-designer-news"></i> social-designer-news</p>
      <ul id="social-designer-news" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-designer-news large"></i>
            <i class="fi-social-designer-news medium"></i>
            <i class="fi-social-designer-news small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-deviant-art" data-options="is_hover:true"><i class="fi-social-deviant-art"></i> social-deviant-art</p>
      <ul id="social-deviant-art" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-deviant-art large"></i>
            <i class="fi-social-deviant-art medium"></i>
            <i class="fi-social-deviant-art small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-digg" data-options="is_hover:true"><i class="fi-social-digg"></i> social-digg</p>
      <ul id="social-digg" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-digg large"></i>
            <i class="fi-social-digg medium"></i>
            <i class="fi-social-digg small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-dribbble" data-options="is_hover:true"><i class="fi-social-dribbble"></i> social-dribbble</p>
      <ul id="social-dribbble" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-dribbble large"></i>
            <i class="fi-social-dribbble medium"></i>
            <i class="fi-social-dribbble small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-drive" data-options="is_hover:true"><i class="fi-social-drive"></i> social-drive</p>
      <ul id="social-drive" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-drive large"></i>
            <i class="fi-social-drive medium"></i>
            <i class="fi-social-drive small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-dropbox" data-options="is_hover:true"><i class="fi-social-dropbox"></i> social-dropbox</p>
      <ul id="social-dropbox" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-dropbox large"></i>
            <i class="fi-social-dropbox medium"></i>
            <i class="fi-social-dropbox small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-evernote" data-options="is_hover:true"><i class="fi-social-evernote"></i> social-evernote</p>
      <ul id="social-evernote" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-evernote large"></i>
            <i class="fi-social-evernote medium"></i>
            <i class="fi-social-evernote small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-facebook" data-options="is_hover:true"><i class="fi-social-facebook"></i> social-facebook</p>
      <ul id="social-facebook" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-facebook large"></i>
            <i class="fi-social-facebook medium"></i>
            <i class="fi-social-facebook small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-flickr" data-options="is_hover:true"><i class="fi-social-flickr"></i> social-flickr</p>
      <ul id="social-flickr" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-flickr large"></i>
            <i class="fi-social-flickr medium"></i>
            <i class="fi-social-flickr small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-forrst" data-options="is_hover:true"><i class="fi-social-forrst"></i> social-forrst</p>
      <ul id="social-forrst" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-forrst large"></i>
            <i class="fi-social-forrst medium"></i>
            <i class="fi-social-forrst small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-foursquare" data-options="is_hover:true"><i class="fi-social-foursquare"></i> social-foursquare</p>
      <ul id="social-foursquare" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-foursquare large"></i>
            <i class="fi-social-foursquare medium"></i>
            <i class="fi-social-foursquare small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-game-center" data-options="is_hover:true"><i class="fi-social-game-center"></i> social-game-center</p>
      <ul id="social-game-center" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-game-center large"></i>
            <i class="fi-social-game-center medium"></i>
            <i class="fi-social-game-center small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-github" data-options="is_hover:true"><i class="fi-social-github"></i> social-github</p>
      <ul id="social-github" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-github large"></i>
            <i class="fi-social-github medium"></i>
            <i class="fi-social-github small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-google-plus" data-options="is_hover:true"><i class="fi-social-google-plus"></i> social-google-plus</p>
      <ul id="social-google-plus" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-google-plus large"></i>
            <i class="fi-social-google-plus medium"></i>
            <i class="fi-social-google-plus small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-hacker-news" data-options="is_hover:true"><i class="fi-social-hacker-news"></i> social-hacker-news</p>
      <ul id="social-hacker-news" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-hacker-news large"></i>
            <i class="fi-social-hacker-news medium"></i>
            <i class="fi-social-hacker-news small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-hi5" data-options="is_hover:true"><i class="fi-social-hi5"></i> social-hi5</p>
      <ul id="social-hi5" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-hi5 large"></i>
            <i class="fi-social-hi5 medium"></i>
            <i class="fi-social-hi5 small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-instagram" data-options="is_hover:true"><i class="fi-social-instagram"></i> social-instagram</p>
      <ul id="social-instagram" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-instagram large"></i>
            <i class="fi-social-instagram medium"></i>
            <i class="fi-social-instagram small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-joomla" data-options="is_hover:true"><i class="fi-social-joomla"></i> social-joomla</p>
      <ul id="social-joomla" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-joomla large"></i>
            <i class="fi-social-joomla medium"></i>
            <i class="fi-social-joomla small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-lastfm" data-options="is_hover:true"><i class="fi-social-lastfm"></i> social-lastfm</p>
      <ul id="social-lastfm" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-lastfm large"></i>
            <i class="fi-social-lastfm medium"></i>
            <i class="fi-social-lastfm small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-linkedin" data-options="is_hover:true"><i class="fi-social-linkedin"></i> social-linkedin</p>
      <ul id="social-linkedin" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-linkedin large"></i>
            <i class="fi-social-linkedin medium"></i>
            <i class="fi-social-linkedin small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-medium" data-options="is_hover:true"><i class="fi-social-medium"></i> social-medium</p>
      <ul id="social-medium" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-medium large"></i>
            <i class="fi-social-medium medium"></i>
            <i class="fi-social-medium small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-myspace" data-options="is_hover:true"><i class="fi-social-myspace"></i> social-myspace</p>
      <ul id="social-myspace" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-myspace large"></i>
            <i class="fi-social-myspace medium"></i>
            <i class="fi-social-myspace small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-orkut" data-options="is_hover:true"><i class="fi-social-orkut"></i> social-orkut</p>
      <ul id="social-orkut" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-orkut large"></i>
            <i class="fi-social-orkut medium"></i>
            <i class="fi-social-orkut small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-path" data-options="is_hover:true"><i class="fi-social-path"></i> social-path</p>
      <ul id="social-path" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-path large"></i>
            <i class="fi-social-path medium"></i>
            <i class="fi-social-path small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-picasa" data-options="is_hover:true"><i class="fi-social-picasa"></i> social-picasa</p>
      <ul id="social-picasa" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-picasa large"></i>
            <i class="fi-social-picasa medium"></i>
            <i class="fi-social-picasa small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-pinterest" data-options="is_hover:true"><i class="fi-social-pinterest"></i> social-pinterest</p>
      <ul id="social-pinterest" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-pinterest large"></i>
            <i class="fi-social-pinterest medium"></i>
            <i class="fi-social-pinterest small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-rdio" data-options="is_hover:true"><i class="fi-social-rdio"></i> social-rdio</p>
      <ul id="social-rdio" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-rdio large"></i>
            <i class="fi-social-rdio medium"></i>
            <i class="fi-social-rdio small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-reddit" data-options="is_hover:true"><i class="fi-social-reddit"></i> social-reddit</p>
      <ul id="social-reddit" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-reddit large"></i>
            <i class="fi-social-reddit medium"></i>
            <i class="fi-social-reddit small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-skype" data-options="is_hover:true"><i class="fi-social-skype"></i> social-skype</p>
      <ul id="social-skype" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-skype large"></i>
            <i class="fi-social-skype medium"></i>
            <i class="fi-social-skype small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-skillshare" data-options="is_hover:true"><i class="fi-social-skillshare"></i> social-skillshare</p>
      <ul id="social-skillshare" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-skillshare large"></i>
            <i class="fi-social-skillshare medium"></i>
            <i class="fi-social-skillshare small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-smashing-mag" data-options="is_hover:true"><i class="fi-social-smashing-mag"></i> social-smashing-mag</p>
      <ul id="social-smashing-mag" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-smashing-mag large"></i>
            <i class="fi-social-smashing-mag medium"></i>
            <i class="fi-social-smashing-mag small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-snapchat" data-options="is_hover:true"><i class="fi-social-snapchat"></i> social-snapchat</p>
      <ul id="social-snapchat" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-snapchat large"></i>
            <i class="fi-social-snapchat medium"></i>
            <i class="fi-social-snapchat small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-spotify" data-options="is_hover:true"><i class="fi-social-spotify"></i> social-spotify</p>
      <ul id="social-spotify" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-spotify large"></i>
            <i class="fi-social-spotify medium"></i>
            <i class="fi-social-spotify small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-squidoo" data-options="is_hover:true"><i class="fi-social-squidoo"></i> social-squidoo</p>
      <ul id="social-squidoo" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-squidoo large"></i>
            <i class="fi-social-squidoo medium"></i>
            <i class="fi-social-squidoo small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-stack-overflow" data-options="is_hover:true"><i class="fi-social-stack-overflow"></i> social-stack-overflow</p>
      <ul id="social-stack-overflow" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-stack-overflow large"></i>
            <i class="fi-social-stack-overflow medium"></i>
            <i class="fi-social-stack-overflow small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-steam" data-options="is_hover:true"><i class="fi-social-steam"></i> social-steam</p>
      <ul id="social-steam" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-steam large"></i>
            <i class="fi-social-steam medium"></i>
            <i class="fi-social-steam small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-stumbleupon" data-options="is_hover:true"><i class="fi-social-stumbleupon"></i> social-stumbleupon</p>
      <ul id="social-stumbleupon" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-stumbleupon large"></i>
            <i class="fi-social-stumbleupon medium"></i>
            <i class="fi-social-stumbleupon small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-treehouse" data-options="is_hover:true"><i class="fi-social-treehouse"></i> social-treehouse</p>
      <ul id="social-treehouse" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-treehouse large"></i>
            <i class="fi-social-treehouse medium"></i>
            <i class="fi-social-treehouse small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-tumblr" data-options="is_hover:true"><i class="fi-social-tumblr"></i> social-tumblr</p>
      <ul id="social-tumblr" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-tumblr large"></i>
            <i class="fi-social-tumblr medium"></i>
            <i class="fi-social-tumblr small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-twitter" data-options="is_hover:true"><i class="fi-social-twitter"></i> social-twitter</p>
      <ul id="social-twitter" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-twitter large"></i>
            <i class="fi-social-twitter medium"></i>
            <i class="fi-social-twitter small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-vimeo" data-options="is_hover:true"><i class="fi-social-vimeo"></i> social-vimeo</p>
      <ul id="social-vimeo" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-vimeo large"></i>
            <i class="fi-social-vimeo medium"></i>
            <i class="fi-social-vimeo small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-windows" data-options="is_hover:true"><i class="fi-social-windows"></i> social-windows</p>
      <ul id="social-windows" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-windows large"></i>
            <i class="fi-social-windows medium"></i>
            <i class="fi-social-windows small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-xbox-20" data-options="is_hover:true"><i class="fi-social-xbox-20"></i> social-xbox</p>
      <ul id="social-xbox-20" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-xbox-20 large"></i>
            <i class="fi-social-xbox-20 medium"></i>
            <i class="fi-social-xbox-20 small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-yahoo" data-options="is_hover:true"><i class="fi-social-yahoo"></i> social-yahoo</p>
      <ul id="social-yahoo" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-yahoo large"></i>
            <i class="fi-social-yahoo medium"></i>
            <i class="fi-social-yahoo small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-yelp" data-options="is_hover:true"><i class="fi-social-yelp"></i> social-yelp</p>
      <ul id="social-yelp" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-yelp large"></i>
            <i class="fi-social-yelp medium"></i>
            <i class="fi-social-yelp small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-youtube" data-options="is_hover:true"><i class="fi-social-youtube"></i> social-youtube</p>
      <ul id="social-youtube" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-youtube large"></i>
            <i class="fi-social-youtube medium"></i>
            <i class="fi-social-youtube small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-zerply" data-options="is_hover:true"><i class="fi-social-zerply"></i> social-zerply</p>
      <ul id="social-zerply" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-zerply large"></i>
            <i class="fi-social-zerply medium"></i>
            <i class="fi-social-zerply small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="social-zurb" data-options="is_hover:true"><i class="fi-social-zurb"></i> social-zurb</p>
      <ul id="social-zurb" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-social-zurb large"></i>
            <i class="fi-social-zurb medium"></i>
            <i class="fi-social-zurb small"></i>      
        </li>
      </ul>
    </li>
  </ul>
    
  <!-- miscellaneous -->
  <h2 class="with-download-link">Miscellaneous Icons</h2>
  <ul class="small-block-grid-2 large-block-grid-4">
    <li>
      <p data-dropdown="compass" data-options="is_hover:true"><i class="fi-compass"></i> compass</p>
      <ul id="compass" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-compass large"></i>
            <i class="fi-compass medium"></i>
            <i class="fi-compass small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="music" data-options="is_hover:true"><i class="fi-music"></i> music</p>
      <ul id="music" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-music large"></i>
            <i class="fi-music medium"></i>
            <i class="fi-music small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="lightbulb" data-options="is_hover:true"><i class="fi-lightbulb"></i> lightbulb</p>
      <ul id="lightbulb" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-lightbulb large"></i>
            <i class="fi-lightbulb medium"></i>
            <i class="fi-lightbulb small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="battery-full" data-options="is_hover:true"><i class="fi-battery-full"></i> battery-full</p>
      <ul id="battery-full" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-battery-full large"></i>
            <i class="fi-battery-full medium"></i>
            <i class="fi-battery-full small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="battery-half" data-options="is_hover:true"><i class="fi-battery-half"></i> battery-half</p>
      <ul id="battery-half" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-battery-half large"></i>
            <i class="fi-battery-half medium"></i>
            <i class="fi-battery-half small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="battery-empty" data-options="is_hover:true"><i class="fi-battery-empty"></i> battery-empty</p>
      <ul id="battery-empty" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-battery-empty large"></i>
            <i class="fi-battery-empty medium"></i>
            <i class="fi-battery-empty small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="projection-screen" data-options="is_hover:true"><i class="fi-projection-screen"></i> projection-screen</p>
      <ul id="projection-screen" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-projection-screen large"></i>
            <i class="fi-projection-screen medium"></i>
            <i class="fi-projection-screen small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="info" data-options="is_hover:true"><i class="fi-info"></i> info</p>
      <ul id="info" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-info large"></i>
            <i class="fi-info medium"></i>
            <i class="fi-info small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="power" data-options="is_hover:true"><i class="fi-power"></i> power</p>
      <ul id="power" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-power large"></i>
            <i class="fi-power medium"></i>
            <i class="fi-power small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="asterisk" data-options="is_hover:true"><i class="fi-asterisk"></i> asterisk</p>
      <ul id="asterisk" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-asterisk large"></i>
            <i class="fi-asterisk medium"></i>
            <i class="fi-asterisk small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="at-sign" data-options="is_hover:true"><i class="fi-at-sign"></i> at-sign</p>
      <ul id="at-sign" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-at-sign large"></i>
            <i class="fi-at-sign medium"></i>
            <i class="fi-at-sign small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="key" data-options="is_hover:true"><i class="fi-key"></i> key</p>
      <ul id="key" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-key large"></i>
            <i class="fi-key medium"></i>
            <i class="fi-key small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="ticket" data-options="is_hover:true"><i class="fi-ticket"></i> ticket</p>
      <ul id="ticket" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-ticket large"></i>
            <i class="fi-ticket medium"></i>
            <i class="fi-ticket small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="book" data-options="is_hover:true"><i class="fi-book"></i> book</p>
      <ul id="book" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-book large"></i>
            <i class="fi-book medium"></i>
            <i class="fi-book small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="book-bookmark" data-options="is_hover:true"><i class="fi-book-bookmark"></i> book-bookmark</p>
      <ul id="book-bookmark" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-book-bookmark large"></i>
            <i class="fi-book-bookmark medium"></i>
            <i class="fi-book-bookmark small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="anchor" data-options="is_hover:true"><i class="fi-anchor"></i> anchor</p>
      <ul id="anchor" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-anchor large"></i>
            <i class="fi-anchor medium"></i>
            <i class="fi-anchor small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="puzzle" data-options="is_hover:true"><i class="fi-puzzle"></i> puzzle</p>
      <ul id="puzzle" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-puzzle large"></i>
            <i class="fi-puzzle medium"></i>
            <i class="fi-puzzle small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="foot" data-options="is_hover:true"><i class="fi-foot"></i> foot</p>
      <ul id="foot" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-foot large"></i>
            <i class="fi-foot medium"></i>
            <i class="fi-foot small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="paw" data-options="is_hover:true"><i class="fi-paw"></i> paw</p>
      <ul id="paw" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-paw large"></i>
            <i class="fi-paw medium"></i>
            <i class="fi-paw small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="mountains" data-options="is_hover:true"><i class="fi-mountains"></i> mountains</p>
      <ul id="mountains" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-mountains large"></i>
            <i class="fi-mountains medium"></i>
            <i class="fi-mountains small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="trees" data-options="is_hover:true"><i class="fi-trees"></i> trees</p>
      <ul id="trees" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-trees large"></i>
            <i class="fi-trees medium"></i>
            <i class="fi-trees small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="sheriff-badge" data-options="is_hover:true"><i class="fi-sheriff-badge"></i> sheriff-badge</p>
      <ul id="sheriff-badge" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-sheriff-badge large"></i>
            <i class="fi-sheriff-badge medium"></i>
            <i class="fi-sheriff-badge small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="first-aid" data-options="is_hover:true"><i class="fi-first-aid"></i> first-aid</p>
      <ul id="first-aid" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-first-aid large"></i>
            <i class="fi-first-aid medium"></i>
            <i class="fi-first-aid small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="trophy" data-options="is_hover:true"><i class="fi-trophy"></i> trophy</p>
      <ul id="trophy" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-trophy large"></i>
            <i class="fi-trophy medium"></i>
            <i class="fi-trophy small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="prohibited" data-options="is_hover:true"><i class="fi-prohibited"></i> prohibited</p>
      <ul id="prohibited" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-prohibited large"></i>
            <i class="fi-prohibited medium"></i>
            <i class="fi-prohibited small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="no-dogs" data-options="is_hover:true"><i class="fi-no-dogs"></i> no-dogs</p>
      <ul id="no-dogs" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-no-dogs large"></i>
            <i class="fi-no-dogs medium"></i>
            <i class="fi-no-dogs small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="no-smoking" data-options="is_hover:true"><i class="fi-no-smoking"></i> no-smoking</p>
      <ul id="no-smoking" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-no-smoking large"></i>
            <i class="fi-no-smoking medium"></i>
            <i class="fi-no-smoking small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="safety-cone" data-options="is_hover:true"><i class="fi-safety-cone"></i> safety-cone</p>
      <ul id="safety-cone" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-safety-cone large"></i>
            <i class="fi-safety-cone medium"></i>
            <i class="fi-safety-cone small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="shield" data-options="is_hover:true"><i class="fi-shield"></i> shield</p>
      <ul id="shield" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-shield large"></i>
            <i class="fi-shield medium"></i>
            <i class="fi-shield small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="crown" data-options="is_hover:true"><i class="fi-crown"></i> crown</p>
      <ul id="crown" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-crown large"></i>
            <i class="fi-crown medium"></i>
            <i class="fi-crown small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="target" data-options="is_hover:true"><i class="fi-target"></i> target</p>
      <ul id="target" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-target large"></i>
            <i class="fi-target medium"></i>
            <i class="fi-target small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="target-two" data-options="is_hover:true"><i class="fi-target-two"></i> target-two</p>
      <ul id="target-two" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-target-two large"></i>
            <i class="fi-target-two medium"></i>
            <i class="fi-target-two small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="die-one" data-options="is_hover:true"><i class="fi-die-one"></i> die-one</p>
      <ul id="die-one" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-die-one large"></i>
            <i class="fi-die-one medium"></i>
            <i class="fi-die-one small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="die-two" data-options="is_hover:true"><i class="fi-die-two"></i> die-two</p>
      <ul id="die-two" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-die-two large"></i>
            <i class="fi-die-two medium"></i>
            <i class="fi-die-two small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="die-three" data-options="is_hover:true"><i class="fi-die-three"></i> die-three</p>
      <ul id="die-three" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-die-three large"></i>
            <i class="fi-die-three medium"></i>
            <i class="fi-die-three small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="die-four" data-options="is_hover:true"><i class="fi-die-four"></i> die-four</p>
      <ul id="die-four" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-die-four large"></i>
            <i class="fi-die-four medium"></i>
            <i class="fi-die-four small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="die-five" data-options="is_hover:true"><i class="fi-die-five"></i> die-five</p>
      <ul id="die-five" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-die-five large"></i>
            <i class="fi-die-five medium"></i>
            <i class="fi-die-five small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="die-six" data-options="is_hover:true"><i class="fi-die-six"></i> die-six</p>
      <ul id="die-six" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-die-six large"></i>
            <i class="fi-die-six medium"></i>
            <i class="fi-die-six small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="skull" data-options="is_hover:true"><i class="fi-skull"></i> skull</p>
      <ul id="skull" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-skull large"></i>
            <i class="fi-skull medium"></i>
            <i class="fi-skull small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="map" data-options="is_hover:true"><i class="fi-map"></i> map</p>
      <ul id="map" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-map large"></i>
            <i class="fi-map medium"></i>
            <i class="fi-map small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="clipboard" data-options="is_hover:true"><i class="fi-clipboard"></i> clipboard</p>
      <ul id="clipboard" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-clipboard large"></i>
            <i class="fi-clipboard medium"></i>
            <i class="fi-clipboard small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="clipboard-pencil" data-options="is_hover:true"><i class="fi-clipboard-pencil"></i> clipboard-pencil</p>
      <ul id="clipboard-pencil" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-clipboard-pencil large"></i>
            <i class="fi-clipboard-pencil medium"></i>
            <i class="fi-clipboard-pencil small"></i>      
        </li>
      </ul>
    </li>
    <li>
      <p data-dropdown="clipboard-notes" data-options="is_hover:true"><i class="fi-clipboard-notes"></i> clipboard-notes</p>
      <ul id="clipboard-notes" class="f-dropdown content" data-options="is_hover:true" data-dropdown-content="">
        <li><i class="fi-clipboard-notes large"></i>
            <i class="fi-clipboard-notes medium"></i>
            <i class="fi-clipboard-notes small"></i>      
        </li>
      </ul>
    </li>
  </ul>      
</div>

@stop