<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Display</title>
	
</head>
<style>
	*{
		margin: 0;
		padding: 0;
	}
	body{
		background-color: grey;
	}
	#navbar{
		margin-top: 15px;
		background-color: #993333;
		height: 70px;

	}

	#items{


		padding: 20px;
		margin: 20px;
		/* background-color: black; */
		width: 50%;
		margin-left: auto;
	}
	.item{
		display: inline;
		padding: 30px;
		font-size: 1.6rem;


	}
	.item:hover{
		background-color:	#404040;
		border-radius: 10px;
	}

	a{
		color: darkgrey;
		text-transform: capitalize;
		text-decoration: none;
	}
	a:hover{
		color: white;
	}
	#main{
		width: 70%;
		background-color: floralwhite;
		margin: 50px 200px 50px 200px;
		height: 100vh;
		border-radius: 15px;


	}	
table
{
	padding: 15px;
	max-height: 100vh;
width: 75%;
background-color: grey;
border-color: #993333;
margin: 13%;
display: table;
    border-collapse: separate;
    box-sizing: border-box;
    text-indent: initial;
    border-spacing: 2px;
  

}
caption
{
	color: brown;
	font-size: 1.8rem;
	align-items: center;
	
}
.table-heading{
	padding: 25px;

}




	</style>
<body>
	<nav id="navbar">
		<ul id="items">
			<li class="item"><a href=#>home </a>  </li>
			<li class="item"><a href=#>gallery</a></li>
			<li class="item"><a href=form.php>contect Us</a></li>
			<li class="item"><a href=#>about Us</a></li>
		</ul>	
	</nav>

	<main id="main">
		<table >
			<caption>Registered Users</caption>
			<thead>
				<tr class="table-heading">
					<th>User id</th>
					<th>Name</th>
					<th>Email</th>
					<th>Mobile No.</th>
					<th>Password</th>
				</tr>
			</thead>
			
			

										<?php
												$server="localhost";
												$username="root";
												$password="";
												$database="form";
												$conn=mysqli_connect($server,$username,$password,$database);
												if($conn)
													{
														$selectquery="select * from test";
														$query=mysqli_query($conn,$selectquery);
															
														while($res=mysqli_fetch_array($query))
															{
																?>
																<tbody>
																	<tr class="table-heading">

																<td><?php echo $res['id']; ?></td>
																<td><?php echo $res['name']; ?></td>
																<td><?php echo $res['email']; ?></td>
																<td><?php echo $res['gender']; ?></td>
																<td><?php echo $res['password']; ?></td>
																</tr>
				
																</tbody>
																<?php
	
															}
													}
												else
													{
														echo "Error:". $conn . "<br>" . mysqli_connect_error($conn);
													}

?>



					
		</table>
		

	</main>
	
</body>
</html>
