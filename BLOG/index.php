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
<link   rel="stylesheet"  href="blog.css">
<script src="https://kit.fontawesome.com/d19b8e1807.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="header">
  <img src="capa.png" alt="">
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Dec 7, 2017</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
    <div class="card">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>Sobre mim</h2>
      <div class="fakeimg" style="height:100px;">Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    </div>
    <div class="card">
      <h3>Popular Post</h3>
      <div class="fakeimg">Image</div><br>
      <div class="fakeimg">Image</div><br>
      <div class="fakeimg">Image</div>
    </div>
    <div class="card">
      <h3>Siga-me</h3>
      <p>
             <li>
               <a  href=""><i class="fab fa-whatsapp aumentoIcone">51 985371479</i></a>
</li>
              <li>   
        <a  href="https://www.instagram.com/belezafroboxbraids_/"><i  class="fab fa-instagram aumentoIcone">@belezaafroboxbraids</i></a>
</li>
                <li>
            <a  href="https://www.facebook.com/belezaafroboxbraids/"><i  class="fab fa-facebook-f aumentoIcone"></i>belezaafroboxbraids</a>  
</li>

            
      </p>
    </div>
  </div>
</div>

<div class="footer">
  <h2>Dev Ernani Silveira</h2>
</div>

</body>
</html>