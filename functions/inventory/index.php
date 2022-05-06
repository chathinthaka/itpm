<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Customer</title>
  <link rel="stylesheet" type="text/css" href="style.css">
<script src="../../js/jquery.min.js"></script>  
<script src="../../js/jquery-ui.js"></script>
<link rel="stylesheet" href="../../css/jquery-ui.css">
</head>
<body>
    <div class="inside">
      <div id="wrapper" class="wrapper">
        <div id="container" class="container">
          <header id="header" class="header" role="banner">
            <h1>Header</h1>
          </header><!-- /header -->
          <div id="side-a" class="side-a">
            <nav id="main-menu" class="main-menu" role="navigation">
              <ul>
                <li>
                  <button class="tablink" onclick="openPage('Home', this, 'gray')" id="defaultOpen">Manage</button>
                </li>
                <li>
                  <button class="tablink" onclick="openPage('report', this, 'gray')">Report</button>
                </li>
                <li>
                  <button class="tablink" onclick="openPage('report', this, 'gray')">Report</button>
                </li>
                <li>
                  <button class="tablink" onclick="openPage('report', this, 'gray')">Report</button>
                </li>
              </ul>
            </nav><!-- /main-menu -->
          </div><!-- /side-a -->
          <div id="main" class="main  two-column">
            <div id="Home" class="tabcontent">
            <?php
              include 'table.php';
            ?>
          </div>
          <div id="report" class="tabcontent">
            <h3>report</h3>
            <p>This page is for the report!!</p>
          </div>
          </div><!-- /main two-column -->
        </div><!-- /container -->
      </div><!-- /wrapper -->
    </div>
</body>
</html>

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