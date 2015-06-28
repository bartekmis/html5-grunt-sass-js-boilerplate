<!DOCTYPE html>
<!--[if IE 7]>         <html class="no-js ie7 oldie" lang="en" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if IE 8]>         <html class="no-js ie8 oldie" lang="en" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if IE 9]>         <html class="no-js ie9" lang="en" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if gt IE 9]><!--><html dir="ltr" lang="en" prefix="og: http://ogp.me/ns#"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>IPI - THEME</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="format-detection" content="telephone=no">

	<meta name="description" content="Project description">
	<meta name="robots" content="noindex, nofollow">

	<?php $critical_css_path = 'assets/css/critical_innerpage.css'; include '../app/criticalCssCompiler.php'; ?>

	<!-- Add to homescreen for Chrome on Android -->
	<meta name="mobile-web-app-capable" content="yes">
	<link rel="icon" sizes="192x192" href="assets/img/touch/chrome-touch-icon-192x192.png">

	<!-- Add to homescreen for Safari on iOS -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-title" content="Project title">
	<link rel="apple-touch-icon-precomposed" href="assets/img/touch/apple-touch-icon-precomposed.png">

	<!-- Tile icon for Win8 (144x144 + tile color) -->
	<meta name="msapplication-TileImage" content="assets/img/touch/ms-touch-icon-144x144-precomposed.png">
	<meta name="msapplication-TileColor" content="#000000">

	<!-- OG -->
	<meta property="og:locale" content="en_GB">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Project title">
	<meta property="og:description" content="Project description">
	<meta property="og:url" content="http://www.studiosidekicks.com">
	<meta property="og:site_name" content="Project name">
	<meta property="og:image" content="assets/img/touch/chrome-touch-icon-192x192.png" />

	<noscript><link href="assets/css/main.css" rel="stylesheet" media="all"></noscript>

	<style>
	.theme-container {
		width: 90%;
		max-width: 1380px;
		margin: 50px auto;

		color: #444;
	}

	.grids .grid {
		margin: 20px 0;
	}

	.bg-grey {
		padding: 10px;
		border-radius: 7px;

		background: #dedede;
		color: #666;
		font-size: .8em;
	}

	.theme-headline {
		display: block;
		padding: .2em .5em;
		margin: 1em 0 .5em 0;

		background: #ededed;
		border-bottom: 1px solid #cfcfcf;
		border-right: 1px solid #cfcfcf;

		font-size: 2em;
		font-weight: 700;
		text-transform: uppercase;
		color: #111;
	}

	.theme-form {
		max-width: 700px;
	}

	.theme-forms-section {
		max-width: 600px;
	}

	pre {
		padding: 10px 20px;

		background: #555;

		color: #dedede;
	}
	</style>
</head>
<body>
	<div class="theme-container container container--large">
		<span class="theme-headline">1. Headlines</span>

		<h1 class="headline-1">The UK’s leading independent Systems Integrator</h1>
		<h2 class="headline-2">Latest Resource</h2>
		<h3 class="headline-3">IPI Business Solutions</h3>
		<h4 class="headline-4">Virtual strategy, tangible benefits</h4>
		<h5 class="headline-5">Who we’ve helped</h5>
		<h6 class="headline-6">Categories</h6>
		<h6 class="headline-7">Categories</h6>

		<span class="theme-headline">2. Buttons</span>
		<p>
			<a class="btn btn--big btn--green btn--arrow" href="#">Big green, red</a> 
			<a class="btn btn--big btn--black" href="#">Big button, black</a>
		</p>

		<p>
			<a class="btn btn--small btn--green btn--arrow" href="#">Small button, green</a> 
			<a class="btn btn--small btn--grey btn--arrow" href="#">Small button, grey</a>
			<a class="btn btn--small btn--red btn--arrow" href="#">Small button, red</a>
		</p>

		<div class="content">
			<span class="theme-headline">2. Paragraph</span>
			<p><strong>Important Note!</strong> Remember that all paragraphs should have <strong>.content</strong> parent.</p>

			<!-- normal paragraph stylisation inside .content container -->
			<p>
				This is normal text. Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies.
			</p>
			<!-- // -->

			<hr>

			<!-- small paragraph -->
			<p class="content__small-text">
				This is small text. Curabitur et ligula. Ut molestie a, ultricies porta urna. Vestibulum commodo volutpat a, convallis ac, laoreet enim.
			</p>
			<!-- // -->

			<hr>

			<!-- large paragraph -->
			<p class="content__large-text">
				This is large text. Curabitur et ligula. Ut molestie a, ultricies porta urna. Vestibulum commodo volutpat a, convallis ac, laoreet enim.<br>
			</p>
			<!-- // -->
		</div>

		<span class="theme-headline">3. List (unordered)</span>

		<!-- unordered list -->
		<ul class="list-ul">
			<li>Lorem ipsum dolor sit amet enim</li>
			<li>Etiam ullamcorper</li>
			<li>Suspendisse a pellentesque dui, non felis</li>
			<li>Vestibulum commodo volutpat a</li>
		</ul>
		<!-- // -->

		<hr>

		<!-- unordered list with nested ul list -->
		<ul class="list-ul">
			<li>Lorem ipsum dolor sit amet enim</li>
			<li>Etiam ullamcorper</li>
			<li>Suspendisse a pellentesque dui, non felis</li>
			<li>Vestibulum commodo volutpat a
				<ul class="list-ul">
					<li>Lorem ipsum dolor sit amet enim</li>
					<li>Etiam ullamcorper</li>
					<li>Suspendisse a pellentesque dui, non felis</li>
					<li>Vestibulum commodo volutpat a</li>
				</ul>
			</li>
		</ul>
		<!-- // -->

		<hr>

		<!-- unordered 2 columns list -->
		<ul class="list-ul list-2-cols">
			<li>Lorem ipsum dolor sit amet enim</li>
			<li>Etiam ullamcorper</li>
			<li>Suspendisse a pellentesque dui, non felis</li>
			<li>Vestibulum commodo volutpat a</li>
		</ul>
		<!-- // -->

		<hr>

		<!-- unordered list -->
		<span class="theme-headline">4. List (ordered)</span>
		<ol class="list-ol">
			<li>Lorem ipsum dolor sit amet enim</li>
			<li>Etiam ullamcorper</li>
			<li>Suspendisse a pellentesque dui, non felis</li>
			<li>Vestibulum commodo volutpat a</li>
		</ol>
		<!-- // -->

		<hr>

		<!-- unordered list with nested ol list -->
		<ol class="list-ol">
			<li>Lorem ipsum dolor sit amet enim</li>
			<li>Etiam ullamcorper
				<ol class="list-ol">
					<li>Lorem ipsum dolor sit amet enim</li>
					<li>Etiam ullamcorper</li>
					<li>Suspendisse a pellentesque dui, non felis</li>
					<li>Vestibulum commodo volutpat a</li>
				</ol>
			</li>
			<li>Suspendisse a pellentesque dui, non felis</li>
			<li>Vestibulum commodo volutpat a
				<ol class="list-ol">
					<li>Lorem ipsum dolor sit amet enim</li>
					<li>Etiam ullamcorper</li>
					<li>Suspendisse a pellentesque dui, non felis</li>
					<li>Vestibulum commodo volutpat a</li>
				</ol>
			</li>
		</ol>
		<!-- // -->

		<hr>

		<!-- unordered 2 columns list -->
		<ol class="list-ol list-2-cols">
			<li>Lorem ipsum dolor sit amet enim</li>
			<li>Etiam ullamcorper</li>
			<li>Suspendisse a pellentesque dui, non felis</li>
			<li>Vestibulum commodo volutpat a</li>
		</ol>
		<!-- // -->

	   	<span class="theme-headline">5. Form items</span>
	   		<div class="theme-forms-section">
		   		<p>
		   			<!-- checkbox -->
		   			<input type="checkbox" id="male" class="form__checkbox"><label for="male" class="form__checkbox-label">Checkbox</label>
		   			<!-- // --> 
		   		</p>
		   		<p>
		   			<!-- checkboxes in one line -->
		   			<input type="checkbox" id="option1" class="form__checkbox"><label for="option1" class="form__checkbox-label">Inline Checkbox 1</label> 
		   			<input type="checkbox" id="option2" class="form__checkbox"><label for="option2" class="form__checkbox-label">Inline Checkbox 2</label>
		   			<!-- // -->
		   		</p>

		   		<hr>

		   		<p>
		   			<!-- radio -->
		   			<input type="radio" id="female" class="form__radio"><label for="female" class="form__radio-label">Radio</label>
		   			<!-- // -->
		   		</p>
		   		<p>
		   			<!-- radios in one line -->
		   			<input type="radio" id="option3" name="radio-group" class="form__radio"><label for="option3" class="form__radio-label">Inline Radio 1</label> 
		   			<input type="radio" id="option4" name="radio-group" class="form__radio"><label for="option4" class="form__radio-label">Inline Radio 2</label>
		   			<!-- // -->
		   		</p>

		   		<hr>

		   		<!-- select -->
		   		<div class="form__select">
		   			<select name="select" id="select">
		   				<option value="1">Option 1</option>
		   				<option value="2">Option 2</option>
		   				<option value="3">Option 3</option>
		   				<option value="4">Option 4</option>
		   				<option value="5">Option 5</option>
		   			</select>
		   		</div>
		   		<!-- // -->

		   		<hr>

		   		<p>
		   			<!-- normal input -->
		   			<input type="text" name="input-text" class="form__input" placeholder="Text input">
		   			<!-- // -->
		   		</p>

		   		<hr>

		   		<p>
		   			<!-- textarea -->
		   			<textarea name="textarea" class="form__textarea" placeholder="Textarea"></textarea>
		   			<!-- // -->
		   		</p>

		   		<hr>
		   		<p>
		   			<!-- label + input -->
		   			<label for="input-text2" class="form__label">Label</label>
		   			<input type="text" name="input-text2" id="input-text2" class="form__input" placeholder="Text input and the label above">
		   			<!-- // -->
		   		</p>
		   		<p>
		   			<!-- label + radios in one line below -->
		   			<label class="form__label">Your gender (label)</label>
		   			<input type="radio" id="option5" name="radio-group" class="form__radio" checked><label for="option5" class="form__radio-label">Male</label> 
		   			<input type="radio" id="option6" name="radio-group" class="form__radio"><label for="option6" class="form__radio-label">Female</label>
		   		</p>

		   		<hr>

		   		<!-- response with OK status -->
		   		<div class="form__response form__response--ok">
		   			<p>
		   				The message has been sent successfully.
		   			</p>
		   		</div>
		   		<!-- // -->

		   		<!-- response with ERROR status -->
		   		<div class="form__response form__response--error">
		   			<p>
		   				Fill all the required fields below.
		   			</p>
		   		</div>
		   		<!-- // -->

		   		<!-- form row -->
		   		<div class="form__row">
		   			<!-- left column in the form row -->
		   			<div class="form__row__left">
		   				<label class="form__label" for="example-1">Label 1:</label>
		   			</div>
		   			<!-- // -->

		   			<!-- right column in the form row -->
		   			<div class="form__row__right">
		   				<input type="text" class="form__input" id="example-1">
		   			</div>
		   			<!-- // -->
		   		</div>
		   		<!-- // -->

		   		<!-- form row -->
		   		<div class="form__row">
		   			<!-- left column in the form row -->
		   			<div class="form__row__left">
		   				<label class="form__label" for="example-2">Label 2:</label>
		   			</div>
		   			<!-- // -->

		   			<!-- right column in the form row -->
		   			<div class="form__row__right">
				   		<div class="form__select">
				   			<select name="select" id="example-2">
				   				<option value="1">Option 1</option>
				   				<option value="2">Option 2</option>
				   				<option value="3">Option 3</option>
				   				<option value="4">Option 4</option>
				   				<option value="5">Option 5</option>
				   			</select>
				   		</div>
		   			</div>
		   			<!-- // -->
		   		</div>
		   		<!-- // -->

		   		<!-- form row -->
		   		<div class="form__row">
		   			<!-- left column in the form row -->
		   			<div class="form__row__left">
		   				<label class="form__label" for="example-3">Label 3:</label>
		   			</div>
		   			<!-- // -->

		   			<!-- right column in the form row -->
		   			<div class="form__row__right">
		   				<input type="checkbox" id="option8" class="form__checkbox"><label for="option8" class="form__checkbox-label">Inline Checkbox 1</label> 
		   				<input type="checkbox" id="option9" class="form__checkbox"><label for="option9" class="form__checkbox-label">Inline Checkbox 2</label> 
		   			</div>
		   			<!-- // -->
		   		</div>
		   		<!-- // -->

		   		<!-- form row -->
		   		<div class="form__row">
		   			<!-- left column in the form row -->
		   			<div class="form__row__left">
		   				<label class="form__label" for="example-4">Label 4:</label>
		   			</div>
		   			<!-- // -->

		   			<!-- right column in the form row -->
		   			<div class="form__row__right">
		   				<textarea name="textarea" id="example-4" class="form__textarea" placeholder="Textarea" required></textarea>
		   			</div>
		   			<!-- // -->
		   		</div>
		   		<!-- // -->

		   		<!-- form row -->
		   		<div class="form__row text-align-right">
		   			<button class="btn btn--red">Send</button>
		   		</div>
	   		</div>

	   	<span class="theme-headline">6. Grid (default)</span>
		<p><strong>Basic Example (Bootstrap):</strong></p>
		<pre>
		&lt;div class="row"&gt;
			&lt;div class="col-md-8 bg-grey"&gt;.col-md-8&lt;/div&gt;
			&lt;div class="col-md-4 bg-grey"&gt;.col-md-4&lt;/div&gt;
		&lt;/div&gt;
		</pre>

		<div class="grids">
			<div class="row">
				<div class="col-md-1 bg-grey">.col-md-1</div>
				<div class="col-md-1 bg-grey">.col-md-1</div>
				<div class="col-md-1 bg-grey">.col-md-1</div>
				<div class="col-md-1 bg-grey">.col-md-1</div>
				<div class="col-md-1 bg-grey">.col-md-1</div>
				<div class="col-md-1 bg-grey">.col-md-1</div>
				<div class="col-md-1 bg-grey">.col-md-1</div>
				<div class="col-md-1 bg-grey">.col-md-1</div>
				<div class="col-md-1 bg-grey">.col-md-1</div>
				<div class="col-md-1 bg-grey">.col-md-1</div>
				<div class="col-md-1 bg-grey">.col-md-1</div>
				<div class="col-md-1 bg-grey">.col-md-1</div>
			</div>
			<div class="row">
				<div class="col-md-11 bg-grey">.col-md-11</div>
				<div class="col-md-1 bg-grey">.col-md-1</div>
			</div>
			<div class="row">
				<div class="col-md-10 bg-grey">.col-md-10</div>
				<div class="col-md-2 bg-grey">.col-md-2</div>
			</div>
			<div class="row">
				<div class="col-md-9 bg-grey">.col-md-9</div>
				<div class="col-md-3 bg-grey">.col-md-3</div>
			</div>
			<div class="row">
				<div class="col-md-8 bg-grey">.col-md-8</div>
				<div class="col-md-4 bg-grey">.col-md-4</div>
			</div>
			<div class="row">
				<div class="col-md-4 bg-grey">.col-md-4</div>
				<div class="col-md-4 bg-grey">.col-md-4</div>
				<div class="col-md-4 bg-grey">.col-md-4</div>
			</div>
			<div class="row">
				<div class="col-md-7 bg-grey">.col-md-7</div>
				<div class="col-md-5 bg-grey">.col-md-5</div>
			</div>
			<div class="row">
				<div class="col-md-6 bg-grey">.col-md-6</div>
				<div class="col-md-6 bg-grey">.col-md-6</div>
			</div>
		</div>
	</div>

	   
  	<div class="theme-container container container--large">
		<span class="theme-headline">7. Pagination</span>

		<!-- pagination -->
		<div class="pagination">
			<ul>
				<li><a href="#" rel="prev">Prev</a></li>
				<li><a href="#">1</a></li>
				<li><a class="active" href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li>...</li>
				<li><a href="#">7</a></li>
				<li><a href="#" rel="next">Next</a></li>
			</ul>
		</div>
		<!-- // -->

		<span class="theme-headline">8. Breadcrumbs</span>

		<!-- breadcrumbs -->
		<div class="breadcrumbs">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Company</a></li>
				<li>About us</li>
			</ul>
		</div>
		<!-- // -->

		<span class="theme-headline">9. Blockquote</span>

		<!-- blockquote -->
		<blockquote class="blockquote">
			<p>
				The team’s high level of technical competence, flexibility and responsiveness was what really impressed us
			</p>
			<footer>
				<p>xxx at Ovo Energy</p>
			</footer>
		</blockquote>
		<!-- // -->

		<span class="theme-headline">10. Table</span>

		<!-- table -->
		<table class="table">
		    <thead>
		        <tr>
		            <th>#</th>
		            <th>Make</th>
		            <th>Model</th>
		            <th>Year</th>
		        </tr>
		    </thead>
		    <tbody>
		        <tr>
		            <td>1</td>
		            <td>Honda</td>
		            <td>Accord</td>
		            <td>2009</td>
		        </tr>

		        <tr>
		            <td>2</td>
		            <td>Toyota</td>
		            <td>Camry</td>
		            <td>2012</td>
		        </tr>

		        <tr>
		            <td>3</td>
		            <td>Hyundai</td>
		            <td>Elantra</td>
		            <td>2010</td>
		        </tr>
		    </tbody>
		</table>
		<!-- // -->

		<hr>
		
		<!-- full-width table -->
		<table class="table table--full-width">
		    <thead>
		        <tr>
		            <th>#</th>
		            <th>Make</th>
		            <th>Model</th>
		            <th>Year</th>
		        </tr>
		    </thead>
		    <tbody>
		        <tr>
		            <td>1</td>
		            <td>Honda</td>
		            <td>Accord</td>
		            <td>2009</td>
		        </tr>

		        <tr>
		            <td>2</td>
		            <td>Toyota</td>
		            <td>Camry</td>
		            <td>2012</td>
		        </tr>

		        <tr>
		            <td>3</td>
		            <td>Hyundai</td>
		            <td>Elantra</td>
		            <td>2010</td>
		        </tr>
		    </tbody>
		</table>
		<!-- // -->

		<span class="theme-headline">11. Helpers</span>
		<h1 class="headline-1">Text is <span class="color--red">red here</span>.<br> Here the text is <span class="color--green">green</span>.</h1>

		<div class="text-align-left">
			<p>Text should be left aligned here (.text-align-left).</p>
		</div>

		<div class="text-align-center">
			<p>Text should be center aligned here (.text-align-center).</p>
		</div>

		<div class="text-align-right">
			<p>Text should be right aligned here (.text-align-right).</p>
		</div>

		<p>
			<strong>Go to scss/components/_helper.scss to add/remove helpers.</strong>
		</p>

		<span class="theme-headline">12. Horizontal rule</span>
		<hr>
  </div>
  <script>var ms = document.createElement('link');ms.rel = 'stylesheet';ms.href = 'assets/css/main.css';document.getElementsByTagName("head")[0].appendChild(ms);</script>
  
  <!-- Use just when developing -->
  <script src="//localhost:35729/livereload.js"></script>
  <!-- // -->
</body>
</html>