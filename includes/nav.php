<script>document.body.className += ' fade-out';</script>
<div class="off-canvas-wrap" data-offcanvas>
<div class="inner-wrap"> 
  
<!-- off-canvas nav for small screens -->
<nav class="tab-bar show-for-small" aria-hidden="true">
  <div class="left-small">
    <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
  </div>

  <div class="middle left tab-bar-section">
    <div class="title">Menu</div>
  </div>
</nav>

<aside class="left-off-canvas-menu">
  <ul class="off-canvas-list">
    <li><label>PharMed Consulting</label></li>
    <li><a href="index.php">Home</a></li>
    <li><a href="services.php">Services</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li><label>Case Studies</label></li>   
    <li><a href="studies.php">View All</a></li> 
    <li><a href="studies.php#clientA">Client A</a></li>
    <li><a href="studies.php#clientB">Client B</a></li>
    <li><a href="studies.php#clientC">Client C</a></li>    
    <li><label>Resources</label></li>    
    <li><a href="news.php">FDA News</a></li>
    <li><a href="news.php#cdrh">CDRH News</a></li>
    <li><a href="resources.php">Other Resources</a></li>    
  </ul>
</aside>

<div class="main-section">

  <div class="show-for-small-only">
   <header class="row">
      <div class="small-12 columns">
        <a href="index.php"><?php include("logo-mobile.php"); ?></a>   
      </div>
    </header>
  </div>

  <div class="tablet-logo show-for-medium-only">
   <header class="row text-center">
      <div class="small-12 columns">
        <a href="index.php"><?php include("logo.php"); ?></a>   
      </div>
    </header>
  </div>

<!-- top bar nav for medium/large screens -->
 
  <nav class="top-bar show-for-medium-up" data-topbar>
   
   <ul class="title-area show-for-large-up">
     <li class="name">
       <a href="index.php"><?php include("logo.php"); ?></a>
     </li>
   </ul>
 
   <div class="top-bar-section">           
     <ul class="right center-buttons">
       <li class="divider"></li>
       <li><a href="index.php">Home</a></li>
       <li class="divider"></li>
       <li><a href="services.php">Services</a></li>
       <li class="divider"></li>
       <li><a href="about.php">About</a></li>
       <li class="divider"></li>
       <li><a href="contact.php">Contact</a></li>
       <li class="divider"></li>
       <li class="has-dropdown">
         <a href="#">Case Studies</a>
         <ul class="dropdown">
           <li><a href="studies.php">View All</a></li>
           <li><a href="studies.php#clientA">Client A</a></li>
           <li><a href="studies.php#clientB">Client B</a></li>
           <li><a href="studies.php#clientC">Client C</a></li>          
         </ul>
       </li>
       <li class="divider"></li>
       <li class="has-dropdown">
         <a href="#">Resources</a>
         <ul class="dropdown">
           <li><a href="news.php">FDA News</a></li>
           <li><a href="news.php#cdrh">CDRH News</a></li>
           <li><a href="resources.php">Other Resources</a></li>
         </ul>
       </li>
     </ul>   
   </div><!-- top bar section -->  
   
  </nav>

