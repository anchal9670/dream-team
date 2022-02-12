<!DOCTYPE html>
<html>

<head>
	
	<meta name="viewport"
		content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
	<style>
		
		/* Navigation bar styling */
		.menu-list {
			
			margin: auto;
			padding: 5px;
			color: white;
			background-color:#17bd19;
			border-radius: 10px;
            font-family:"Calibri";
            font-style: italic;
		}
		
		/* logo, navigation menu styling */
		.Dream {
			margin: auto;
			overflow: hidden;
			background-color:#17bd19;
			position: relative;
		}
		
		/* stylinf navigation menu */
		.Dream #menus {
			display: none;
		}
		
		/* link specifi styling */
		.Dream a {
			text-decoration: none;
			color: white;
			padding: 14px 16px;
			font-size: 24px;
			display: block;
			
		}
		
		/* navigation toggle menu styling */
		.Dream a.icon {
			display: block;
			position: absolute;
			right: 0;
			top: 0;
		
		}
		a:hover {
			color: #0056b3;
			text-decoration: underline;
		}
        .footer {
        background-color: #39464a;
        color: #ffffff;
        text-align: center;
        font-size: 12px;
        padding: 15px;
        }
		
		/* hover effect on navigation logo and menu */
		
		/* For mobile phones: */
		[class*="menu-list"] {
		width: 100%;
		}
		.h2{
		margin-left: 10px;
  		padding-left: 15px;
		padding-bottom: 15px;
		font-family: 'Playfair Display', serif;
		}
		@media only screen and (min-width: 600px) {
/* For tablets: */

.menu-list {width: 100%;}


}
@media only screen and (min-width: 768px) {
/* For desktop: */


.menu-list {width: 100%;}
}
	</style>
</head>

<body>

	<div class="menu-list">
	
		<!-- Logo and navigation menu -->
		<div class="Dream">
			
			<h3 class="pb-2 pt-4 pl-1">Dream Team </h3>
		
			<div id="menus">
    
				<a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                </svg> Home</a>
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                </svg> Download App</a>
                <a href="AboutUs.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-info-lg" viewBox="0 0 16 16">
                <path d="m10.277 5.433-4.031.505-.145.67.794.145c.516.123.619.309.505.824L6.101 13.68c-.34 1.578.186 2.32 1.423 2.32.959 0 2.072-.443 2.577-1.052l.155-.732c-.35.31-.866.434-1.206.434-.485 0-.66-.34-.536-.939l1.763-8.278zm.122-3.673a1.76 1.76 0 1 1-3.52 0 1.76 1.76 0 0 1 3.52 0z"/>
                </svg> About Us</a>
                                <a href="OurTeam.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-lightbulb-fill" viewBox="0 0 16 16">
                <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13h-5a.5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm3 8.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1-.5-.5z"/>
                </svg> Our Team</a>

                <a href="contact.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                </svg> Contact Us</a>
				<a href="refund.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-file-earmark-check-fill" viewBox="0 0 16 16">
				<path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm1.354 4.354-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
				</svg>  Our Policy</a>

			</div>
			

			<!-- Bar icon for navigation -->
			<a href="javascript:void(0);" class="icon"
					onclick="DreamTeam()">

				<i onclick="myFunction(this)"
						class="fa fa-bars fa-2x" >
				</i>
			</a>
		</div>
	</div>
	
    

	<script>
		
		// Function to toggle the bar
		function DreamTeam() {
			var x = document.getElementById("menus");
			if (x.style.display === "block") {
				x.style.display = "none";
			} else {
				x.style.display = "block";
			}
		}
	</script>

	<script>
		
		// Function to toggle the plus menu into minus
		function myFunction(x) {
			x.classList.toggle("fa-minus-circle");
		}
	</script>
</body>

</html>
