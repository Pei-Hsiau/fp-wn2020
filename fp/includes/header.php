<?php include 'fp-config.php'?>
<!doctype html>
<html lang="en">
<head>
<title><?=$title?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/styles.css"/>
<link rel="stylesheet" href="js/script.js" />
</head>
<body>
<div class="wrapper d-flex align-items-stretch">
<nav id="sidebar">
<div class="p-4 pt-5">
<a href="https://holisticpronerd.com/fp/template.php">
<img src="images/mwlogo.png"
     class="logo"
     alt="MadisonWoo"
     width="150"
     height="110">
</a>
<ul class="list-unstyled components mb-5">
<li>
<a href="template.php">Home</a>
</li>
<li class="active">
<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">About</a>
<ul class="collapse list-unstyled" id="homeSubmenu">
<li>
<a href="aboutme.php">About Me</a>
</li>
<li>
<a href="uploads/madisonwoo.pdf">Resume</a>
</li>
</ul>
</li>
<li>
<a href="work.php">Work</a>
</li>
<li>
<a href="contact.php">Contact</a>
</li>
</ul>
<div class="footer">
<p><small>&copy;<?=date('Y')?>by <a href="contactme.php" target="_blank">Pearlable Studio</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
</div>
</div>
</nav>
<section>
<div id="content" class="p-4 p-md-5">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container-fluid">
<button type="button" id="sidebarCollapse" class="btn btn-primary">
<i class="fa fa-bars"></i>
<span class="sr-only">Toggle Menu</span>
</button>
</div>
</nav>