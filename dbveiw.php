<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
	<header>
		<h1>Admin Dashboard</h1>
		<nav>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Orders</a></li>
				<li><a href="#">Menu</a></li>
				<li><a href="#">Reviews</a></li>
				<li><a href="#">Settings</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<section id="orders">
			<h2>Orders</h2>
			<table>
				<thead>
					<tr>
						<th>Order ID</th>
						<th>Customer Name</th>
						<th>Order Total</th>
						<th>Order Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1234</td>
						<td>John Doe</td>
						<td>$50.00</td>
						<td>Processing</td>
						<td><button>Edit</button></td>
					</tr>
					<tr>
						<td>5678</td>
						<td>Jane Smith</td>
						<td>$25.00</td>
						<td>Shipped</td>
						<td><button>Edit</button></td>
					</tr>
				</tbody>
			</table>
		</section>
		<section id="menu">
			<h2>Menu</h2>
			<table>
				<thead>
					<tr>
						<th>Item Name</th>
						<th>Description</th>
						<th>Price</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Spaghetti Bolognese</td>
						<td>Tomato sauce, beef, spaghetti</td>
						<td>$10.00</td>
						<td><button>Edit</button></td>
					</tr>
					<tr>
						<td>Chicken Alfredo</td>
						<td>Alfredo sauce, chicken, fettuccine</td>
						<td>$12.00</td>
						<td><button>Edit</button></td>
					</tr>
				</tbody>
			</table>
		</section>
		<section id="reviews">
			<h2>Reviews</h2>
			<table>
				<thead>
					<tr>
						<th>Restaurant</th>
						<th>Customer Name</th>
						<th>Rating</th>
						<th>Review</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Restaurant 1</td>
						<td>John Doe</td>
						<td>4.5</td>
						<td>The food was delicious!</td>
						<td><button>Edit</button></td>
					</tr>
					<tr>
						<td>Restaurant 2</td>
						<td>Jane Smith</td>
					
