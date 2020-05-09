<?php
session_start();

if (!$_SESSION['usuario'] ){
    header('Location:/Login/');
}
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="menu.css">
</head>
<body>

<h2>MENU</h2>

<button class="btn"><a href= "/SITE/" <i class="fa fa-download"></i> SITE</button></a>

<p>BLOG</p>
 <button class="btn" ><a href="/BLOG/" <i class="fa fa-download"></i> BLOG</button></a>

 <p>MENSAGENS</p>
 <button class="btn" ><a href="/MENSAGENS/" <i class="fa fa-download"></i> MENSAGENS</button></a>

</body>
</html>
