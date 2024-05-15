<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<style>
	*{
	font-family: Times New Roman;
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	scroll-padding-top:4rem;
	scroll-behavior:smooth;
	list-style: none;
	text-decoration: none;
}
/*Some Variable */:root{
	--main-color: #bc9667;
	--secondary-color: #edeae3;
	--text-color: #1b1b1b;
	--bg-color: #fff;
	
	--box-shadow: 2px 2px 10px 14px rgb(14 55 54/15%);	
}
.menu {
  text-align: center;
	font-family: Times New Roman; 
}

.mhead.ing {
  margin-bottom: 20px; 
}
.menu .li.strong{
	margin:0 2px 2px 2px;
	text-align: center;
	display: inline;
	font-size: 5px;
	font-weight: 500;
	color: #060606;
}

.menu .h3{
	font-size: 10px;
	text-align: center;
}
.biriyani-container{
	display: grid;
	grid-template-columns:repeat(auto-fit,minmax(280px,auto));
	gap: 1.5rem;
	margin-top: 1rem;
}
.biriyani-container .box{
	position: relative;
	padding: 10px;
	display: flex;
	flex-direction: column;
	border-radius: 0.5rem;
	box-shadow: var(--box-shadow);
}
.biriyani-container img{
	width: 100%;
	height:250px;
	object-fit: contain;
	object-position: center;
	padding: 20px;
	background: #f1f1f1;
	border-radius: 0.5rem;
}
.biriyani-container .box h4{
	font-size: 1rem;
	font-weight: 600;
	text-transform: uppercase;
	margin: 0.5rem 0 0.5rem;
}
.biriyani-container .box .content{
	display: flex;
	align-items: center;
	justify-content: space-around;
}
.biriyani-container .box .content span{
	padding: 0 1rem;
	color: var(--bg-color);
	background: var(--main-color);
	border-radius: 4px;
	font-weight: 500;
}
.biriyani-container .box .content a{
	border:2px  solid var(--main-color);
	padding: 0 1rem;
	color: var(--text-color);
	border-radius: 4px;
	text-transform: uppercase;
}
.biriyani-container .box .content a:hover{
	background-color: var(--main-color);
	color: var(--bg-color);
	transition-property: background-color;
	transition-duration: 1s;
	transition-timing-function: linear;
}
.menu .li.strong{
	margin:0 2px 2px 2px;
	text-align: center;
	display: inline;
	font-size: 5px;
	font-weight: 500;
	color: #060606;
}
.menu .h3{
	font-size: 10px;
	text-align: center;
}
.burger-container{
	display: grid;
	grid-template-columns:repeat(auto-fit,minmax(280px,auto));
	gap: 1.5rem;
	margin-top: 1rem;
}
.burger-container .box{
	position: relative;
	padding: 10px;
	display: flex;
	flex-direction:column;
	border-radius: 0.5rem;
	box-shadow: var(--box-shadow);
}
.burger-container img{
	width: 100%;
	height:250px;
	object-fit: contain;
	object-position: center;
	padding: 20px;
	background: #f1f1f1;
	border-radius: 0.5rem;
}
.burger-container .box h3{
	font-size: 1rem;
	font-weight: 600;
	text-transform: uppercase;
	margin: 0.5rem 0 0.5rem;
}
.burger-container .box .content{
	display: flex;
	align-items: center;
	justify-content: space-around;
}
.burger-container .box .content span{
	padding: 0 1rem;
	color: var(--bg-color);
	background: var(--main-color);
	border-radius: 4px;
	font-weight: 500;
}
.burger-container .box .content a{
	border:2px  solid var(--main-color);
	padding: 0 1rem;
	color: var(--text-color);
	border-radius: 4px;
	text-transform: uppercase;
}
.burger-container .box .content a:hover{
	background-color: var(--main-color);
	color: var(--bg-color);
	transition-property: background-color;
	transition-duration: 1s;
	transition-timing-function: linear;
}
.menu .li.strong{
	margin:0 2px 2px 2px;
	text-align: center;
	display: inline;
	font-size: 5px;
	font-weight: 500;
	color: #060606;
}
.menu .h3{
	font-size: 10px;
	text-align: center;
}
.pizza-container{
	display: grid;
	grid-template-columns:repeat(auto-fit,minmax(280px,auto));
	gap: 1.5rem;
	margin-top: 1rem;
}
.pizza-container .box{
	position: relative;
	padding: 10px;
	display: flex;
	flex-direction:column;
	border-radius: 0.5rem;
	box-shadow: var(--box-shadow);
}
.pizza-container img{
	width: 100%;
	height:250px;
	object-fit: contain;
	object-position: center;
	padding: 20px;
	background: #f1f1f1;
	border-radius: 0.5rem;
}
.pizza-container .box h3{
	font-size: 1rem;
	font-weight: 600;
	text-transform: uppercase;
	margin: 0.5rem 0 0.5rem;
}
.pizza-container .box .content{
	display: flex;
	align-items: center;
	justify-content: space-around;
}
.pizza-container .box .content span{
	padding: 0 1rem;
	color: var(--bg-color);
	background: var(--main-color);
	border-radius: 4px;
	font-weight: 500;
}
.pizza-container .box .content a{
	border:2px  solid var(--main-color);
	padding: 0 1rem;
	color: var(--text-color);
	border-radius: 4px;
	text-transform: uppercase;
}
.pizza-container .box .content a:hover{
	background-color: var(--main-color);
	color: var(--bg-color);
	transition-property: background-color;
	transition-duration: 1s;
	transition-timing-function: linear;
}
.menu .li.strong{
	margin:0 2px 2px 2px;
	text-align: center;
	display: inline;
	font-size: 5px;
	font-weight: 500;
	color: #060606;
}
.menu .h3{
	font-size: 10px;
	text-align: center;
}
.taco-container{
	display: grid;
	grid-template-columns:repeat(auto-fit,minmax(280px,auto));
	gap: 1.5rem;
	margin-top: 1rem;
}
.taco-container .box{
	position: relative;
	padding: 10px;
	display: flex;
	flex-direction:column;
	border-radius: 0.5rem;
	box-shadow: var(--box-shadow);
}
.taco-container img{
	width: 100%;
	height:250px;
	object-fit: contain;
	object-position: center;
	padding: 20px;
	background: #f1f1f1;
	border-radius: 0.5rem;
}
.taco-container .box h3{
	font-size: 1rem;
	font-weight: 600;
	text-transform: uppercase;
	margin: 0.5rem 0 0.5rem;
}
.taco-container .box .content{
	display: flex;
	align-items: center;
	justify-content: space-around;
}
.taco-container .box .content span{
	padding: 0 1rem;
	color: var(--bg-color);
	background: var(--main-color);
	border-radius: 4px;
	font-weight: 500;
}
.taco-container .box .content a{
	border:2px  solid var(--main-color);
	padding: 0 1rem;
	color: var(--text-color);
	border-radius: 4px;
	text-transform: uppercase;
}
.taco-container .box .content a:hover{
	background-color: var(--main-color);
	color: var(--bg-color);
	transition-property: background-color;
	transition-duration: 1s;
	transition-timing-function: linear;
}
.menu .li.strong{
	margin:0 2px 2px 2px;
	text-align: center;
	display: inline;
	font-size: 5px;
	font-weight: 500;
	color: #060606;
}
.menu .h3{
	font-size: 10px;
	text-align: center;
}
.paratha-container{
	display: grid;
	grid-template-columns:repeat(auto-fit,minmax(280px,auto));
	gap: 1.5rem;
	margin-top: 1rem;
}
.paratha-container .box{
	position: relative;
	padding: 10px;
	display: flex;
	flex-direction:column;
	border-radius: 0.5rem;
	box-shadow: var(--box-shadow);
}
.paratha-container img{
	width: 100%;
	height:250px;
	object-fit: contain;
	object-position: center;
	padding: 20px;
	background: #f1f1f1;
	border-radius: 0.5rem;
}
.paratha-container .box h3{
	font-size: 1rem;
	font-weight: 600;
	text-transform: uppercase;
	margin: 0.5rem 0 0.5rem;
}
.paratha-container .box .content{
	display: flex;
	align-items: center;
	justify-content: space-around;
}
.paratha-container .box .content span{
	padding: 0 1rem;
	color: var(--bg-color);
	background: var(--main-color);
	border-radius: 4px;
	font-weight: 500;
}
.paratha-container .box .content a{
	border:2px  solid var(--main-color);
	padding: 0 1rem;
	color: var(--text-color);
	border-radius: 4px;
	text-transform: uppercase;
}
.paratha-container .box .content a:hover{
	background-color: var(--main-color);
	color: var(--bg-color);
	transition-property: background-color;
	transition-duration: 1s;
	transition-timing-function: linear;
}
		
.menu .li.strong{
	margin:0 2px 2px 2px;
	text-align: center;
	display: inline;
	font-size: 5px;
	font-weight: 500;
	color: #060606;
}
.menu .h3{
	font-size: 10px;
	text-align: center;
}
.pancake-container{
	display: grid;
	grid-template-columns:repeat(auto-fit,minmax(280px,auto));
	gap: 1.5rem;
	margin-top: 1rem;
}
.pancake-container .box{
	position: relative;
	padding: 10px;
	display: flex;
	flex-direction:column;
	border-radius: 0.5rem;
	box-shadow: var(--box-shadow);
}
.pancake-container img{
	width: 100%;
	height:250px;
	object-fit: contain;
	object-position: center;
	padding: 20px;
	background: #f1f1f1;
	border-radius: 0.5rem;
}
.pancake-container .box h3{
	font-size: 1rem;
	font-weight: 600;
	text-transform: uppercase;
	margin: 0.5rem 0 0.5rem;
}
.pancake-container .box .content{
	display: flex;
	align-items: center;
	justify-content: space-around;
}
.pancake-container .box .content span{
	padding: 0 1rem;
	color: var(--bg-color);
	background: var(--main-color);
	border-radius: 4px;
	font-weight: 500;
}
.pancake-container .box .content a{
	border:2px  solid var(--main-color);
	padding: 0 1rem;
	color: var(--text-color);
	border-radius: 4px;
	text-transform: uppercase;
}
.pancake-container .box .content a:hover{
	background-color: var(--main-color);
	color: var(--bg-color);
	transition-property: background-color;
	transition-duration: 1s;
	transition-timing-function: linear;
}
		
.menu .li.strong{
	margin:0 2px 2px 2px;
	text-align: center;
	display: inline;
	font-size: 5px;
	font-weight: 500;
	color: #060606;
}
.menu .h3{
	font-size: 10px;
	text-align: center;
}
.noodles-container{
	display: grid;
	grid-template-columns:repeat(auto-fit,minmax(280px,auto));
	gap: 1.5rem;
	margin-top: 1rem;
}
.noodles-container .box{
	position: relative;
	padding: 10px;
	display: flex;
	flex-direction:column;
	border-radius: 0.5rem;
	box-shadow: var(--box-shadow);
}
.noodles-container img{
	width: 100%;
	height:250px;
	object-fit: contain;
	object-position: center;
	padding: 20px;
	background: #f1f1f1;
	border-radius: 0.5rem;
}
.noodles-container .box h3{
	font-size: 1rem;
	font-weight: 600;
	text-transform: uppercase;
	margin: 0.5rem 0 0.5rem;
}
.noodles-container .box .content{
	display: flex;
	align-items: center;
	justify-content: space-around;
}
.noodles-container .box .content span{
	padding: 0 1rem;
	color: var(--bg-color);
	background: var(--main-color);
	border-radius: 4px;
	font-weight: 500;
}
.noodles-container .box .content a{
	border:2px  solid var(--main-color);
	padding: 0 1rem;
	color: var(--text-color);
	border-radius: 4px;
	text-transform: uppercase;
}
.noodles-container .box .content a:hover{
	background-color: var(--main-color);
	color: var(--bg-color);
	transition-property: background-color;
	transition-duration: 1s;
	transition-timing-function: linear;
}

.menu .li.strong{
	margin:0 2px 2px 2px;
	text-align: center;
	display: inline;
	font-size: 5px;
	font-weight: 500;
	color: #060606;
}
.menu .h3{
	font-size: 10px;
	text-align: center;
}
.desert-container{
	display: grid;
	grid-template-columns:repeat(auto-fit,minmax(280px,auto));
	gap: 1.5rem;
	margin-top: 1rem;
}
.desert-container .box{
	position: relative;
	padding: 10px;
	display: flex;
	flex-direction:column;
	border-radius: 0.5rem;
	box-shadow: var(--box-shadow);
}
.desert-container img{
	width: 100%;
	height:250px;
	object-fit: contain;
	object-position: center;
	padding: 20px;
	background: #f1f1f1;
	border-radius: 0.5rem;
}
.desert-container .box h3{
	font-size: 1rem;
	font-weight: 600;
	text-transform: uppercase;
	margin: 0.5rem 0 0.5rem;
}
.desert-container .box .content{
	display: flex;
	align-items: center;
	justify-content: space-around;
}
.desert-container .box .content span{
	padding: 0 1rem;
	color: var(--bg-color);
	background: var(--main-color);
	border-radius: 4px;
	font-weight: 500;
}
.desert-container .box .content a{
	border:2px  solid var(--main-color);
	padding: 0 1rem;
	color: var(--text-color);
	border-radius: 4px;
	text-transform: uppercase;
}
.desert-container .box .content a:hover{
	background-color: var(--main-color);
	color: var(--bg-color);
	transition-property: background-color;
	transition-duration: 1s;
	transition-timing-function: linear;
}
.menu .li.strong{
	margin:0 2px 2px 2px;
	text-align: center;
	display: inline;
	font-size: 5px;
	font-weight: 500;
	color: #060606;
}
.menu .h3{
	font-size: 10px;
	text-align: center;
}
.soup-container{
	display: grid;
	grid-template-columns:repeat(auto-fit,minmax(280px,auto));
	gap: 1.5rem;
	margin-top: 1rem;
}
.soup-container .box{
	position: relative;
	padding: 10px;
	display: flex;
	flex-direction:column;
	border-radius: 0.5rem;
	box-shadow: var(--box-shadow);
}
.soup-container img{
	width: 100%;
	height:250px;
	object-fit: contain;
	object-position: center;
	padding: 20px;
	background: #f1f1f1;
	border-radius: 0.5rem;
}
.soup-container .box h3{
	font-size: 1rem;
	font-weight: 600;
	text-transform: uppercase;
	margin: 0.5rem 0 0.5rem;
}
.soup-container .box .content{
	display: flex;
	align-items: center;
	justify-content: space-around;
}
.soup-container .box .content span{
	padding: 0 1rem;
	color: var(--bg-color);
	background: var(--main-color);
	border-radius: 4px;
	font-weight: 500;
}
.soup-container .box .content a{
	border:2px  solid var(--main-color);
	padding: 0 1rem;
	color: var(--text-color);
	border-radius: 4px;
	text-transform: uppercase;
}
.soup-container .box .content a:hover{
	background-color: var(--main-color);
	color: var(--bg-color);
	transition-property: background-color;
	transition-duration: 1s;
	transition-timing-function: linear;
}
		
.menu .li.strong{
	margin:0 2px 2px 2px;
	text-align: center;
	display: inline;
	font-size: 5px;
	font-weight: 500;
	color: #060606;
}
.menu .h3{
	font-size: 10px;
	text-align: center;
}
.coffee-container{
	display: grid;
	grid-template-columns:repeat(auto-fit,minmax(280px,auto));
	gap: 1.5rem;
	margin-top: 1rem;
}
.coffee-container .box{
	position: relative;
	padding: 10px;
	display: flex;
	flex-direction:column;
	border-radius: 0.5rem;
	box-shadow: var(--box-shadow);
}
.coffee-container img{
	width: 100%;
	height:250px;
	object-fit: contain;
	object-position: center;
	padding: 20px;
	background: #f1f1f1;
	border-radius: 0.5rem;
}
.coffee-container .box h3{
	font-size: 1rem;
	font-weight: 600;
	text-transform: uppercase;
	margin: 0.5rem 0 0.5rem;
}
.coffee-container .box .content{
	display: flex;
	align-items: center;
	justify-content: space-around;
}
.coffee-container .box .content span{
	padding: 0 1rem;
	color: var(--bg-color);
	background: var(--main-color);
	border-radius: 4px;
	font-weight: 500;
}
.coffee-container .box .content a{
	border:2px  solid var(--main-color);
	padding: 0 1rem;
	color: var(--text-color);
	border-radius: 4px;
	text-transform: uppercase;
}
.coffee-container .box .content a:hover{
	background-color: var(--main-color);
	color: var(--bg-color);
	transition-property: background-color;
	transition-duration: 1s;
	transition-timing-function: linear;
}
.menu .li.strong{
	margin:0 2px 2px 2px;
	text-align: center;
	display: inline;
	font-size: 5px;
	font-weight: 500;
	color: #060606;
}
.menu .h3{
	font-size: 10px;
	text-align: center;
}
.juice-container{
	display: grid;
	grid-template-columns:repeat(auto-fit,minmax(280px,auto));
	gap: 1.5rem;
	margin-top: 1rem;
}
.juice-container .box{
	position: relative;
	padding: 10px;
	display: flex;
	flex-direction:column;
	border-radius: 0.5rem;
	box-shadow: var(--box-shadow);
}
.juice-container img{
	width: 100%;
	height:250px;
	object-fit: contain;
	object-position: center;
	padding: 20px;
	background: #f1f1f1;
	border-radius: 0.5rem;
}
.juice-container .box h3{
	font-size: 1rem;
	font-weight: 600;
	text-transform: uppercase;
	margin: 0.5rem 0 0.5rem;
}
.juice-container .box .content{
	display: flex;
	align-items: center;
	justify-content: space-around;
}
.juice-container .box .content span{
	padding: 0 1rem;
	color: var(--bg-color);
	background: var(--main-color);
	border-radius: 4px;
	font-weight: 500;
}
.juice-container .box .content a{
	border:2px  solid var(--main-color);
	padding: 0 1rem;
	color: var(--text-color);
	border-radius: 4px;
	text-transform: uppercase;
}
.juice-container .box .content a:hover{
	background-color: var(--main-color);
	color: var(--bg-color);
	transition-property: background-color;
	transition-duration: 1s;
	transition-timing-function: linear;
}
	</style>
</head>

<body>
	  <section class="menu" id="menu">
	<div class="heading">
		<h2>Our Menu</h2>
	</div>
	<a href="#">
		<li><strong>Biriyani</strong></li>
        </a>
      
		<!--biriyani-container-->
		
		<div class="biriyani-container">
		
			<!--box 1-->
		<div class="box">
			<img src="img/vege biriyani.png" alt="">
			<h3>veg biriyani</h3>
			<div class="content">
				<span>Rs.1000/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 2-->
			<div class="box">
			<img src="img/mutton bir.png" alt="">
			<h3>Ambur Mutton Biriyani</h3>
			<div class="content">
				<span>Rs.1500/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 3 -->
			<div class="box">
			<img src="img/egg roasted biriyani.png" alt="">
			<h3>Egg Roasted Biriyani</h3>
			<div class="content">
				<span>Rs.1100/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 4-->
			<div class="box">
			<img src="img/chicken bir.png" alt="">
			<h3>Chicken Biriyani</h3>
			<div class="content">
				<span>Rs.1600/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 5-->
			<div class="box">
			<img src="img/prawn_bir.jpg" alt="">
			<h3>Prawns Biriyani</h3>
			<div class="content">
			<span>Rs.1800/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
	    </div>
</section>
		  
		 <section class="menu" id="menu">
			 <a href="#">
		<li><strong>Burger</strong></li>
			 </a>
			
	<!--burger-container-->
			
		<div class="burger-container">
		
			<!--box 1-->
		<div class="box">
			<img src="img/veggie bur.png" alt="">
			<h3>veggie burger</h3>
			<div class="content">
				<span>Rs.500/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 2-->
			<div class="box">
			<img src="img/hamburger.png" alt="">
			<h3>Hamburger</h3>
			<div class="content">
				<span>Rs.600/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 3-->
			<div class="box">
			<img src="img/bacon cheeseburger.png" alt="">
			<h3>Bacon Cheese Burger</h3>
			<div class="content">
				<span>Rs.750/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 4-->
			<div class="box">
			<img src="img/ham with cheese burger.png" alt="">
			<h3>Burger with ham and cheese</h3>
			<div class="content">
				<span>Rs.850/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 5-->
			<div class="box">
			<img src="img/three patty burger.png" alt="">
			<h3>Three patty burger</h3>
			<div class="content">
				<span>Rs.1200/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			 </div>
			</section>

	 <section class="menu" id="menu">
			 <a href="#">
		<li><strong>Pizza</strong></li>
			 </a>
			
	<!--pizza-container-->
			
		<div class="pizza-container">
		
			<!--box 1-->
		<div class="box">
			<img src="img/veggie pizza.png" alt="">
			<h3>veggie pizza</h3>
			<div class="content">
				<span>Rs.900/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 2-->
			<div class="box">
			<img src="img/cheesy tomato pizza.png" alt="">
			<h3>Cheese with tomato pizza</h3>
			<div class="content">
				<span>Rs.1200/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 3-->
			<div class="box">
			<img src="img/tandoori chicken pizza.png" alt="">
			<h3>Tandoori chicken pizza</h3>
			<div class="content">
				<span>Rs.1650/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 4-->
			<div class="box">
			<img src="img/seafood pizza.png" alt="">
			<h3>Seafood pizza</h3>
			<div class="content">
				<span>Rs.1700/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 5-->
			<div class="box">
			<img src="img/margherita pasta pizza.png" alt="">
			<h3>Margherita pizza</h3>
			<div class="content">
				<span>Rs.2000/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			 </div>
			</section>
	
	 <section class="menu" id="menu">
			 <a href="#">
		<li><strong>Taco</strong></li>
			 </a>
			
	<!--taco-container-->
			
		<div class="taco-container">
		
			<!--box 1-->
		<div class="box">
			<img src="img/mexicon chicken taco.png" alt="">
			<h3>mexican chicken taco</h3>
			<div class="content">
				<span>Rs.600/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 2-->
			<div class="box">
			<img src="img/bbq taco.png" alt="">
			<h3>BBQ taco</h3>
			<div class="content">
				<span>Rs.600/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 3-->
			<div class="box">
			<img src="img/tacoss.png" alt="">
			<h3>Ground beef taco</h3>
			<div class="content">
				<span>Rs.800/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 4-->
			<div class="box">
			<img src="img/taco.jpg" alt="">
			<h3>Cheese with ham and potato taco</h3>
			<div class="content">
				<span>Rs.800/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			 </div>
			</section>
	
	 <section class="menu" id="menu">
			 <a href="#">
		<li><strong>Paratha</strong></li>
			 </a>

	<!--paratha-container-->
			
		<div class="paratha-container">
		
			<!--box 1-->
		<div class="box">
			<img src="img/Naan Paratha Roti.png" alt="">
			<h3>Naan Paratha</h3>
			<div class="content">
				<span>Rs.100/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 2-->
			<div class="box">
			<img src="img/cheese Paratha.png" alt="">
			<h3>Cheese Paratha</h3>
			<div class="content">
				<span>Rs.200/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 3-->
			<div class="box">
			<img src="img/paratha.png" alt="">
			<h3>Seasame oil mixed paratha</h3>
			<div class="content">
				<span>Rs.300/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 4-->
			<div class="box">
			<img src="img/Spanish omelette Laobing Cong you bing Vegetarian cuisine Paratha.png" alt="">
			<h3>Eggs and vegitable mixed paratha</h3>
			<div class="content">
				<span>Rs.800/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			 </div>
			</section>
	
	 <section class="menu" id="menu">
			 <a href="#">
		<li><strong>Pancakes</strong></li>
			 </a>

	<!--pancake-container-->
			
		<div class="pancake-container">
		
			<!--box 1-->
		<div class="box">
			<img src="img/buttermilk pancake.png"alt="">
			<h3>Buttermilk Pancake</h3>
			<div class="content">
				<span>Rs.250/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 2-->
			<div class="box">
			<img src="img/pancake with hiney syrup.png" alt="">
			<h3>Pancake with honey syrup</h3>
			<div class="content">
				<span>Rs.200/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 3-->
			<div class="box">
			<img src="img/pancake with berrie.png" alt="">
			<h3>Berrie Pancake</h3>
			<div class="content">
				<span>Rs.250/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 4-->
			<div class="box">
			<img src="img/pancake with strawberry.png" alt="">
			<h3>Strawberry and berrie mixed Pancakes</h3>
			<div class="content">
				<span>Rs.300/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 4-->
			<div class="box">
			<img src="img/pancakes.png" alt="">
			<h3>Strawberry and grapes mixed Pancakes</h3>
			<div class="content">
				<span>Rs.280/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			 </div>
			</section>

	 <section class="menu" id="menu">
			 <a href="#">
		<li><strong>Noodles</strong></li>
			 </a>

	<!--noodles-container-->
			
		<div class="noodles-container">
		
			<!--box 1-->
		<div class="box">
			<img src="img/Ramen chinese noodles.png"alt="">
			<h3>Ramen Chinese noodles</h3>
			<div class="content">
				<span>Rs.990/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 2-->
			<div class="box">
			<img src="img/Beef noodle.png" alt="">
			<h3>Beef Noodles</h3>
			<div class="content">
				<span>Rs.1150/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 3-->
			<div class="box">
			<img src="img/seafood noodles.png"alt="">
			<h3>Seafood Noodles</h3>
			<div class="content">
				<span>Rs.1300/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 4-->
			<div class="box">
			<img src="img/Dandan noodles.png"alt="">
			<h3>Dandan Chinease Noodles</h3>
			<div class="content">
				<span>Rs.1380/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 4-->
			<div class="box">
			<img src="img/Laksa Braised noodles Chinese cuisine Red curry, Tomato egg noodle,.png" alt="">
			<h3>Chinease tomato egg Noodles</h3>
			<div class="content">
				<span>Rs.1500/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			 </div>
			</section>

	 <section class="menu" id="menu">
			 <a href="#">
		<li><strong>Desert</strong></li>
			 </a>

	<!--desert-container-->
			
		<div class="desert-container">
		
			<!--box 1-->
		<div class="box">
			<img src="img/Chocolate brownie.png" alt="">
			<h3>Chocolate Brownie</h3>
			<div class="content">
				<span>Rs.150/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 2-->
			<div class="box">
			<img src="img/Chocolate ice cream Ice Cream Cones.png" alt="">
			<h3>Icecream with chocolate syrup</h3>
			<div class="content">
				<span>Rs.280/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 3-->
			<div class="box">
			<img src="img/Donuts.png"alt="">
			<h3>Donuts</h3>
			<div class="content">
				<span>Rs.200/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 4-->
			<div class="box">
			<img src="img/Cheesecake Mousse Tart Pastry, Desserts.png"alt="">
			<h3>Strawberry cheesecake</h3>
			<div class="content">
				<span>Rs.300/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 4-->
			<div class="box">
			<img src="img/Fruit salad.png" alt="">
			<h3>Fruits salad</h3>
			<div class="content">
				<span>Rs.400/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 5-->
			<div class="box">
			<img src="img/Ice cream Crème caramel Frutti di bosco Cheesecake.png" alt="">
			<h3>Ice cream caramel fruits cheesecake</h3>
			<div class="content">
				<span>Rs.450/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 6-->
			<div class="box">
			<img src="img/ice cream with cherry on top, Ice Cream Cones Milkshake Sundae Kulfi, desserts, cream, food, frozen Dessert.png" alt="">
			<h3>Ice cream with cherry</h3>
			<div class="content">
				<span>Rs.150/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 7-->
			<div class="box">
			<img src="img/Tart Cream Custard Salad Dessert.png" alt="">
			<h3>Tart cream custard salad dessert</h3>
			<div class="content">
				<span>Rs.200/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			 </div>
			</section>
	
	<section class="menu" id="menu">
			 <a href="#">
		<li><strong>Soup</strong></li>
			 </a>

	<!--soup-container-->
			
		<div class="soup-container">
		
			<!--box 1-->
		<div class="box">
			<img src="img/corn soup mixed vegetable soup.png"alt="">
			<h3>Corn with vegetable soup</h3>
			<div class="content">
				<span>Rs.500/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 2-->
			<div class="box">
			<img src="img/Fish soup.png" alt="">
			<h3>Fish Soup</h3>
			<div class="content">
				<span>Rs.400/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 3-->
			<div class="box">
			<img src="img/Miso soup Japanese Cuisine Chicken soup.png"alt="">
			<h3>Japanese Cuisine chicken soup</h3>
			<div class="content">
				<span>Rs.600/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 4-->
			<div class="box">
			<img src="img/tomato soup.png"alt="">
			<h3>Tomato soup</h3>
			<div class="content">
				<span>Rs.550/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 5-->
			<div class="box">
			<img src="img/Chicken soup Solyanka Pea soup.png" alt="">
			<h3>Solyanka pea chicken soup</h3>
			<div class="content">
				<span>Rs.800/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			 </div>
			</section>
	
	<section class="menu" id="menu">
			 <a href="#">
		<li><strong>Coffee</strong></li>
			 </a>

	<!--coffee-container-->
			
		<div class="coffee-container">
		
			<!--box 1-->
		<div class="box">
			<img src="img/cappuccino.png"alt="">
			<h3>Cappuccino</h3>
			<div class="content">
				<span>Rs.650/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 2-->
			<div class="box">
			<img src="img/milk coffee cappuccino.png" alt="">
			<h3>Milk Cappuccino coffee</h3>
			<div class="content">
				<span>Rs.700/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 3-->
			<div class="box">
			<img src="img/toffee pudding coffee cappuccino.png"alt="">
			<h3>Toffee Pudding coffee</h3>
			<div class="content">
				<span>Rs.600/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 4-->
			<div class="box">
			<img src="img/coffee tea.png"alt="">
			<h3>Coffee Tea</h3>
			<div class="content">
				<span>Rs.400/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 5-->
			<div class="box">
			<img src="img/coffee.png" alt="">
			<h3>Ice Coffee</h3>
			<div class="content">
				<span>Rs.400/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 6-->
			<div class="box">
			<img src="img/latte.png" alt="">
			<h3>Latte</h3>
			<div class="content">
				<span>Rs.300/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			 </div>
			</section>
	
	 <section class="menu" id="menu">
			 <a href="#">
		<li><strong>Juice</strong></li>
			 </a>
			
	<!--juice-container-->
			
		<div class="juice-container">
		
			<!--box 1-->
		<div class="box">
			<img src="img/Anoda juice.png" alt="">
			<h3>Anoda Juice</h3>
			<div class="content">
				<span>Rs.200/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 2-->
			<div class="box">
			<img src="img/apple juice.png" alt="">
			<h3>Apple Juice</h3>
			<div class="content">
				<span>Rs.200/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 3-->
			<div class="box">
			<img src="img/Milkshake Juice.png" alt="">
			<h3>Milkshake</h3>
			<div class="content">
				<span>Rs.500/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 4-->
			<div class="box">
			<img src="img/mango juice.png" alt="">
			<h3>Mango Juice</h3>
			<div class="content">
				<span>Rs.300/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 5-->
			<div class="box">
			<img src="img/pinnapple juice.png" alt="">
			<h3>Pineapple Juice</h3>
			<div class="content">
				<span>Rs.400/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
			<!--box 6-->
			<div class="box">
			<img src="img/mojito.jpg" alt="">
			<h3>Mojito</h3>
			<div class="content">
				<span>Rs.200/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
				<!--box 7-->
			<div class="box">
			<img src="img/juice.png" alt="">
			<h3>Orange Juice</h3>
			<div class="content">
				<span>Rs.200/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			
				<!--box 8-->
			<div class="box">
			<img src="img/mocha milkshake.png" alt="">
			<h3>Mocha</h3>
			<div class="content">
				<span>Rs.580/=</span>
				<a href="#">Add-To-Cart</a>
			</div>
			</div>
			 </div>
			</section>
</body>
</html>