<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Electrotric Store</title>
	<link rel="stylesheet" type="text/css" href="style/cate.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="header">
		<div class="menu">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About Us</a></li>
				<li><a href="login.php">Login</a></li>
			</ul>

		</div>
		<div class ="search_item">
			<form action="searchPage.php">
				<input type="text" name="Product" value="Search a product..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required="">
				<input type="submit" value="Search">
			</form>
		</div>
	</div>

	<div class="main">
		<div class="sidebar">
			<div class="sidenav">
			  <?php 
					//including library
					require_once('./dbconnector.php');
					$conn = new DBConnector();
					$sql = "Select * From categories";
					$rows = $conn->runQuery($sql);
					foreach($rows as $r)
					{
					?>
						<a href="categoryPage.php?cateID=<?=$r['cateID']?>"><?=$r['cateName']?></a>

				<?php
					}
				?>
			</div>
		</div>
		
		<div class="content">
			<h1>All Products</h1>
			<h1>-------------</h1>
			<?php 
						//get parameter from client
						if(isset($_GET['cateID']))
						{
							$cateID = $_GET['cateID'];
							//create sql query
							$sql = "Select * from products where cateID=" . $cateID;
							//instance an object DBConnector
							$cn = new DBConnector();
							//call the function of object DBConnector
							$rows = $cn->runQuery($sql);
							foreach($rows as $r)
							{
					?>
			<a href="ShowDetail.php?productID=<?=$r['productID']?>">
				<div class="item">
					<div class="context">
						<div class="image_1"><img src="<?=$r['image']?>"></div>
						<div class="name_1"><h3><?=$r['productName']?></h3></div>
						<div class="price_1"><h2><?=$r['price']?></h2></div>
					</div>
				</div>
			</a>
					<?php
						}
					}
					?>

			
		</div>
		
	</div>

	<div class="footer">
		<div class="intro">
			<h1>Assignment 2</h1>
		</div>
	</div>
</body>
</html>