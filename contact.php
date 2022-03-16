<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Let's Connect</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="contact.css">
</head>

<style type="text/css">

*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Poppins',sans-serif;
}

.contact
{
	position: relative;
	min-height: 100vh;
	padding: 50px 100px;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	background: url(edge.jpg);
	background-size: cover;
}

.contact .content
{
	max-width: 800px;
	text-align: center;

}
.contact .content h2
{
	font-size: 36px;
	font-weight: 500;
	color: #fff;
}
.container
{
	width: 100%;
	display: flex;
	justify-items: center;
	align-items: center;
	margin-top: 30px;
}

.container .ContactInfo
{
	width: 50%;
	display: flex;
	flex-direction: column;
}

.container .ContactInfo .box
{
	position: relative;
	padding: 20px 0;
	display: flex;

}

.container .ContactInfo .box .icon 
{
	min-width: 60px;
	height: 60px;
	background: #fff;
	display: flex;
	justify-content: center;
	align-items: center;
	border-radius: 50%;
	font-size: 22px;
}
.container .ContactInfo .box .text 
{
	display: flex;
	margin-left: 20px;
	font-size: 16px;
	color: #fff;
	flex-direction: column;
	font-weight: 300;
}

.container .ContactInfo .box .text h3
{
	font-weight: 500;
	color: #00bcd4;

}
.ContactForm
{
	width: 40%;
	padding: 40px;
	background: #fff;
}
.ContactForm h1
{
	font-size: 30px;
	color: #222;
	font-weight: 150;
}
.ContactForm .inputbox
{
	position: relative;
	width: 100%;
	margin-top: 10px;
}

.ContactForm .inputbox input,
.ContactForm .inputbox textarea
{
	width: 100%;
	padding: 5px 0;
	font-size: 16px;
	margin: 10px 0;
	border: none;
	border-bottom: 2px solid #333;
	outline: none;
	resize: none;
}

.ContactForm .inputbox span
{
	position: absolute;
	left: 0;
	padding: 5px 0;
	font-size: 16px;
	margin: 10px 0;
	pointer-events: none;
	transition: 0.5s;
	color: #666;
}

.ContactForm .inputbox input:focus ~ span,
.ContactForm .inputbox input:valid ~ span,
.ContactForm .inputbox textarea:focus ~ span,
.ContactForm .inputbox textarea:valid ~ span
{
	color: #e91e63;
	font-size: 12px;
	transform: translateY(-20px);

}


.ContactForm .inputbox input[type="submit"]
{
	width: 100px;
	background: #00bcd4;
	color: #fff;
	border: none;
	cursor: pointer;
	padding: 10px;
	font-size: 18px;
}



*{margin: 0; padding: 0; box-sizing: border-box;}


.carousel-inner img {
    width: 100%;
    height: 90vh;
  }

.aboutimg
{
	width: 100%;
	height: 400px;
}
</style>

<body>





	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">HEALTH AND SAFETY ORGANIZATION </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About US</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="form.php">Test your HEALTH</a>
      </li>
     
       <li class="nav-item">
        <a class="nav-link" href="safety.php">Industry Safety</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="book.html">Books</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>


      
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button href="https://www.google.com" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>

	<section class="contact">
		<div class="content">
			<h2>Contact Us</h2>
			<p>Feel free to connect for any query related to your industry related safety and your workers health!</p>
		</div>
		<div class="container">
			<div class="ConatctInfo">
				<div class="box">
					<div class="icon"></div>
					<div class="text">
						<h3>Address</h3><br>
						<p>4671 Sugar Camp Road,<br>Rajendra Nagar, Oshiwara,<br>Mumbai, 372018</p>

					</div>	
				</div>
				<br>

				<div class="box">
					<div class="icon"></div>
					<div class="text">
						<h3>Phone</h3><br>
						<p>502-274-0081</p>

					</div>	
					<br>
				</div>
				<div class="box">
					<div class="icon"></div>
					<div class="text">
						<h3>E-mail ID</h3><br>
						<p>healthandsafety@hso.com</p>

					</div>	
				</div>
			
		</div>
		



		<!-- <div class="ContactForm">
			<form action="user.php" method="post">
				<h2>Send Message</h2>
		
		<div class="form-group">
			
			<input type="text" name="yourname" autocomplete="off" class="form-control">
			<span>Your Name Here</span>
		</div>
		
		<div class="inputbox">
			
			<input type="text" name="email" autocomplete="off" class="form-control">
			<span>Email ID</span>
		</div>
		
		<div class="form-group">
			
			<input type="text" name="msg" autocomplete="off" class="form-control">
			<span>Type Your Message</span>
		</div>
		


		





		


<button type="submit" class="btn btn-primary">SUBMIT</button>




	</form> -->
			<div class="ContactForm">
				
			<form action="query.php" method="post">
				<h1>Send Your Message</h1>
				<div class="inputbox">
					<input type="text" name="yourname" required="required">
					<span>Full Name</span>
				</div>
				<div class="inputbox">
					<input type="text" name="mail" required="required">
					<span>Email</span>
				</div>
				<div class="inputbox">
					<textarea name="msg" required="required"></textarea>
					<span>Type Your Meassage...</span>
				</div>
				<div class="inputbox">

				<input type="submit" name="" value="Send">

				</div>
			</form>
		</div>


	
	</section>

</body>
</html>
