<!DOCTYPE html>
<html>
<head>
	<title>Online Food Ordering System</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" href="path/to/logo.png" type="image/png">

</head>
<body>
	<header class="fixed-header">
		<div class="header-container">
			<div class="logo-container">
				<h1> Kayboafo Food Ordering System</h1>
			</div>
			<div class="search-login-container">
				<div class="search-container">
					<form action="userlog in.php" method="get">
						<input type="text" name="search" placeholder="Search">
						<button type="submit">Search</button>
					</form>
				</div>
				<div class="login-container">
					<div class="dropdown">
						<button class="dropbtn">Login</button>
						<div class="dropdown-content">
							<a href="userlog in.php">User</a>
							<a href="login admin.php">Admin</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div  >
		<nav>
	<ul>
    <li><a href="midsem.php" style="color: #fff;">Home</a></li>
    <li><a href="menu.php" style="color: #fff;">Menu</a></li>
    <li><a href="menu.php" style="color: #fff;">Orders</a></li>
    <li><a href="contact us.php" style="color: #fff;">Contact Us</a></li>
</ul>
</ul>
		</div>
		</nav>
	</header>
	<main>
		<div class="home-image">
			<img src="h1.jpg" alt="Home image">
		</div>
		<section id="featured-restaurants">
  <h2>Featured Restaurants</h2>

  <div class="restaurant-card">
    <img src="r1.jpeg" alt="Restaurant 1">
    <h3>Jay Foods</h3>
    <p>Cuisine Type</p>
    <p>Location</p>
    <p>Rating</p>
<div>
    <a href="menu.php" ><button>View</button></a>
</div>

</div>


  <div class="restaurant-card">
    <img src="r2.jpeg" alt="Restaurant 2">
    <h3>Kay & Kay Food Joint</h3>
    <p>Cuisine Type</p>
    <p>Location</p>
    <p>Rating</p>

	<div>
    <a href="menu.php" ><button>View</button></a>
</div>

  </div>
  <div class="restaurant-card">
    <img src="r3.jpeg" alt="Restaurant 3">
    <h3>Kayboafo Joint</h3>
    <p>Cuisine Type</p>
    <p>Location</p>
    <p>Rating</p>

	<div>
    <a href="menu.php" ><button>View</button></a>
</div>

  </div>
</section>

		<section id="categories">																		
			<h2>Browse by Categories</h2>
			<ul>
				<li><a href="menu.php">Carbohydrates</a></li>
				<li><a href="menu.php">Fats</a></li>
				<li><a href="menu.php">Proteins</a></li>
			</ul>
		</section>
		<section id="search">
			<h2>Search for Restaurants</h2>
			<form>
				<input type="text" placeholder="Search by name, location or cuisine,Rate">
				<button type="submit">Search</button>
			</form>
		</section>
	</main>
	<footer>
		<p>&copy; Kayboafo Food Ordering System</p>
	</footer>
</body>
</html>