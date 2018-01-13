<?php 
     if (!isset($_SESSION)) { 
         session_start(); 
     } 
 ?> 
 <!DOCTYPE html> 
<html lang="en"> 
  <head> 
 <title> Rajagiri Hospital 
     </title> 
     <link href="bootstrap.min.css" rel="stylesheet"> 
     <link href="jumbotron.css" rel="stylesheet"> 
   </head> 
   <body> 
       <div class="container"> 
         <nav class="navbar  navbar-static-top"> 
           <a class="navbar-brand"> RAJAGIRI HOSPITAL</a>
             <ul class="nav nav-pills"> 
               <!--<li class="nav-item"> 
                 <!--<a href="https://goo.gl/maps/PyT52gM87su" target="_blank"> Address: Plot no- 1, Opposite SBI, Sector 12, Kharghar, Navi Mumbai</a>
               </li> -->
               <!--<li class="nav-item"> 
                 <a class="" href="tel:+917709473553">Ambulance Number: +91 7709473553</a> 
               </li> -->
               <p align="right"> 
               <?php 
                 if (isset($_SESSION['username'])) { 
                     
                     echo '<a class="nav-link" href="logout.php">LOGOUT</a> 
                   </li>'; 
                 } 
               ?> 
               </p>
             </ul> 
         </nav> 
         </div> 
