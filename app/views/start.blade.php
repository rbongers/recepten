@extends('layout.base')


@section('content')
<header>
	<div class="top-nav">
		<nav>
			<ul>
				<li><a href="#" id="login-btn">login</a></li>
				<li><a href="#" class="register-btn">register</a></li>
				<li><a href="about.html">about</a></li>
				<li><a href="contact.html">contact</a></li>
				<li><a href="menu.html">menu</a></li>
				<li>
					<a href="menu.html">Sub menu</a>
					<ul>
						<li>
							<a href="menu.html">level 2</a>
							<ul>
								<li><a href="menu.html">level 3</a></li>
								<li><a href="menu.html">level 3</a></li>
								<li><a href="menu.html">level 3</a></li>
							</ul>
						</li>
						<li>
							<a href="menu.html">level 2</a>
							<ul>
								<li><a href="menu.html">level 3</a></li>
								<li><a href="menu.html">level 3</a></li>
								<li><a href="menu.html">level 3</a></li>
							</ul>
						</li>
						<li><a href="menu.html">level 2</a></li>
						<li><a href="menu.html">level 2</a></li>
						<li><a href="menu.html">level 2</a></li>
					</ul>
				</li>
		  	</ul>
		</nav>
		<form class="search-form" method="post">
		 	<input type="text" class="search">
		 	<input type="submit" class="search-submit" value="">
		</form>
	</div>
	<a href="index-2.html" class="logo"><img src="images/logo.png" alt="your logo" /></a>
	<nav class="main-menu">
		<ul>
			<li id="lava-elm"></li>
			<li class="current">
				<a href="listing.html">Fruits and vegetables</a>
				<ul>
					<li><a href="menu.html">level 2</a></li>
					<li><a href="menu.html">level 2</a></li>
					<li><a href="menu.html">level 2</a></li>
					<li><a href="menu.html">level 2</a></li>
				</ul>
			</li>
			<li>
				<a href="listing.html">Seafood</a>
				<ul>
					<li><a href="menu.html">level 2</a></li>
					<li><a href="menu.html">level 2</a></li>
					<li><a href="menu.html">level 2</a></li>
					<li><a href="menu.html">level 2</a></li>
				</ul>
			</li>
			<li><a href="listing.html">Meat</a></li>
			<li><a href="listing.html">Entrees</a></li>
			<li><a href="listing.html">Pizza and pasta</a></li>
			<li><a href="listing.html">Desserts</a></li>
		</ul>
	</nav>
  	<div class="header-slider-canvas">
		<div class="parts part-1"></div>
		<div class="parts part-2"></div>
		<div class="parts part-3"></div>
	</div>
	<ul id="mycarousel" class="jcarousel-skin-header-slider">
		<li><img src="images/slider-1.jpg" width="680px" height="464" alt="" /><div class="description"><span class='price'>$24.00</span><span class='name'>Lamb chops and asparagus</span><a href="#" class="shop">shop now</a></div></li>
		<li><img src="images/slider-2.jpg" width="680px"  height="464" alt="" /><div class="description"><span class='price'>$39.00</span><span class='name'>Lamb chops and asparagus</span><a href="#" class="shop">shop now</a></div></li>
		<li><img src="images/slider-3.jpg" width="680px"  height="464" alt="" /></li>
	</ul>
</header>
<div class="content clearfix">
	<div id="meals-of-the-day">
		<h3 class="title-separator"><span class="title">Meals of the day</span><span class="sep"></span></h3>
		<ul>
			<li class="meal">
				<div class="img-holder"><img src="images/meal-1.png" alt=""></div>
				<div class="desc-holder">
					<h1><a href="#">Lorem ipsum dolar sit amet consectetur</a></h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac massa mauris, vitae viverra mauris. Proin libero purus, feugiat rhoncus auctor ut, tempus dictum nunc.</p>
					<span class="price">$15.45</span>
					<a href="check-out.html" class="add-to-cart-button">add to cart</a>
				</div>
			</li>
			<li class="meal">
				<div class="img-holder"><img src="images/meal-2.png" alt=""></div>
				<div class="desc-holder">
					<h1><a href="#">Lorem ipsum dolar sit amet consectetur</a></h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac massa mauris, vitae viverra mauris. Proin libero purus, feugiat rhoncus auctor ut, tempus dictum nunc.</p>
					<span class="price">$15.45</span>
					<a href="check-out.html" class="add-to-cart-button">add to cart</a>
				</div>
			</li>
			<li class="meal">
				<div class="img-holder"><img src="images/meal-3.png" alt=""></div>
				<div class="desc-holder">
					<h1><a href="#">Lorem ipsum dolar sit amet consectetur</a></h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac massa mauris, vitae viverra mauris. Proin libero purus, feugiat rhoncus auctor ut, tempus dictum nunc.</p>
					<span class="price">$15.45</span>
					<a href="check-out.html" class="add-to-cart-button">add to cart</a>
				</div>
			</li>
			<li class="meal">
				<div class="img-holder"><img src="images/meal-1.png" alt=""></div>
				<div class="desc-holder">
					<h1><a href="#">Lorem ipsum dolar sit amet consectetur</a></h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac massa mauris, vitae viverra mauris. Proin libero purus, feugiat rhoncus auctor ut, tempus dictum nunc.</p>
					<span class="price">$15.45</span>
					<a href="check-out.html" class="add-to-cart-button">add to cart</a>
				</div>
			</li>
			<li class="meal">
				<div class="img-holder"><img src="images/meal-2.png" alt=""></div>
				<div class="desc-holder">
					<h1><a href="#">Lorem ipsum dolar sit amet consectetur</a></h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac massa mauris, vitae viverra mauris. Proin libero purus, feugiat rhoncus auctor ut, tempus dictum nunc.</p>
					<span class="price">$15.45</span>
					<a href="check-out.html" class="add-to-cart-button">add to cart</a>
				</div>
			</li>
			<li class="meal">
				<div class="img-holder"><img src="images/meal-3.png" alt=""></div>
				<div class="desc-holder">
					<h1><a href="#">Lorem ipsum dolar sit amet consectetur</a></h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac massa mauris, vitae viverra mauris. Proin libero purus, feugiat rhoncus auctor ut, tempus dictum nunc.</p>
					<span class="price">$15.45</span>
					<a href="check-out.html" class="add-to-cart-button">add to cart</a>
				</div>
			</li>
		</ul>
	</div>
	<h3 class="title-separator"><span class="title">Featured meals</span><span class="sep"></span></h3>
	<div id="featured-meals">
		<ul>
			<li class="meal">
				<div class="img-holder"><img src="images/meal-4.jpg" alt=""></div>
				<h1><a href="#">Lorem ipsum</a></h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				<span class="price">$15.45</span>
				<a href="check-out.html" class="add-to-cart-button">add to cart</a>
			</li>
			<li class="meal">
				<div class="img-holder"><img src="images/meal-5.jpg" alt=""></div>
				<h1><a href="#">Lorem ipsum</a></h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
				<span class="price">$15.45</span>
				<a href="check-out.html" class="add-to-cart-button">add to cart</a>
			</li>
			<li class="meal">
				<div class="img-holder"><img src="images/meal-6.jpg" alt=""></div>
				<h1><a href="#">Lorem ipsum</a></h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				<span class="price">$15.45</span>
				<a href="check-out.html" class="add-to-cart-button">add to cart</a>
			</li>
		</ul>
	</div>

	<div class="cart-box">
		<div class="top">Cart</div>
		<div class="body">
			<ul>
				<li class="info">
					<span class="products"><strong>5</strong> products</span>
					<a href="#">View cart</a>
				</li>
				<li class="price">
					<span class="label">Shipping</span>
					<span class="value">$0.00</span>
				</li>
				<li class="price">
					<span class="label">Total</span>
					<span class="value">$0.00</span>
				</li>
			</ul>
			<a class="submit-button" href="check-out.html">Check out</a>
			<div class="graphic"></div>
		</div>
	</div>
</div>

@stop

