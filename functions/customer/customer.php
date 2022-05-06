<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="../../css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">  
<link rel="stylesheet" href="../../css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

<script src="../../js/jquery.min.js"></script>  
<script src="../../js/jquery-ui.js"></script>
</head>
<body>


<div class="sidenav">
	<button class="tablink" onclick="openPage('Home', this, 'gray')" id="defaultOpen">Manage</button>
	<button class="tablink" onclick="openPage('report', this, 'gray')">Report</button>
</div>

<!--===================================================================-->

<div class="main">
	<h3 style="padding: 20px; margin: 0px; color: white; background-color: #111;" align="center">Customer Management</h3>

	
	

	<div id="Home" class="tabcontent">
		<?php
			include 'table.php';
		?>
	</div>
	<div id="report" class="tabcontent">
		<h3>report</h3>
		<p>This page is for the report!!</p>
	</div>
</div>

<script>
	function openPage(pageName,elmnt,color) {
		var i, tabcontent, tablinks;
		tabcontent = document.getElementsByClassName("tabcontent");
		for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
		}
		tablinks = document.getElementsByClassName("tablink");
		for (i = 0; i < tablinks.length; i++) {
		tablinks[i].style.backgroundColor = "";
		}
		document.getElementById(pageName).style.display = "block";
		elmnt.style.backgroundColor = color;
	}

	document.getElementById("defaultOpen").click();
</script>
   
</body>
</html> 
