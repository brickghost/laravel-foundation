@extends('layouts.master')
{{-- Web site Title --}}
@section('title')
@parent
:: Home
@stop

{{-- Content --}}
@section('content')

<div class="row">
	<article class="panel">
		<h1 class="hero">HELLO.</h1>
		<p>
			My name is Andrew, I write code. I build everything on the web from simple small business brochure web sites to large, big data applications. I offer my services to individuals, businesses and very often other successfull development shops in the St. Louis area.
		</p>
		<p>
			This site is being updated between all the efforts taken to keep clients happy. Look soon for a portfolio, client testimonials and further details on all my favorite tech used to keep acheiving those development "wins".
		</p>
	</article>
	<aside>
		<ul class="pricing-table">
		  <li class="title">CONTACT</li>
		  <li class="price">Andrew Bricker</li>
		  <li class="description">Call, text, email, tweet, or send a pigeon</li>
		  <li class="bullet-item">(314)889-1119</li>
		  <li class="bullet-item">andrew (at) codefucreative (dot) com</li>
		  <li class="bullet-item">@brickghost on twitter</li>
		  <!-- <li class="cta-button"><a class="button" href="#">Buy Now</a></li> -->
		</ul>
	</aside>
</div>

@stop