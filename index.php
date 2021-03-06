<!doctype html>
<html class="no-js" lang="en">
  <head>
    <?php include("includes/head.php"); ?>        
    <title>PharMed | Quality and Compliance Consulting</title>    
  </head>
  
  <body>    
  <?php include("includes/nav.php"); ?>

  <div id="title" class="row show-for-large-up text-center animated fadeInUp">    
    <h2>Quality and Compliance Consulting</h2> <h3><em>for</em></h3> <h2>Pharmaceuticals and Medical Devices</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta eveniet cupiditate harum perferendis itaque, natus ducimus facilis, possimus a iure corrupti necessitatibus libero ab nulla quaerat magnam fugiat eos odio?</p>
  </div>  

  <div id="flipster" class="my-flipster animated fadeIn">
      <ul>
        <li>
          <a href="studies.php#clientB">
            <div class="clientB">
              <div>                
                <h1>Case Study - Client B</h1>
                <h2>Multinational Pharmaceutical Manufacturer</h2>
                <p>Laboratory Deviations Retroactive Review</p>
                <img src="images/search-disease-icon.png" alt="maginifying glass">
              </div>
            </div>
          </a>
        </li>
        <li>
          <a href="studies.php#clientA">
            <div class="clientA">
              <div>                
                <h1>Case Study - Client A</h1>
                <h2>Generic Pharmaceutical Manufacturer</h2>
                <p>Subject Matter Expert - CMC</p>
                <img src="images/formula-icon.png" alt="chemistry flask">
              </div>
            </div>
          </a>          
        </li>
        <li>
          <a href="studies.php#clientC">
            <div class="clientC">
              <div>
                <h1>Case Study - Client C</h1>
                <h2>Medical Device Manufacturer</h2>
                <p>Quality System Design</p>
                <img src="images/medicine-box-icon2.png" alt="medicine box">
              </div>
            </div>
          </a>
        </li>        
      </ul>
  </div><!-- flipster -->
  
  <div class="row show-for-small-only">
    <div class="small-12 columns">
      <h3>Case Studies</h3>        
    </div>
    <div class="small-11 small-offset-1 columns">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi at fugiat facere optio quia nemo, qui error amet enim accusantium inventore odit, minus perferendis aspernatur dicta quo ipsam, ex? Excepturi.</p>
    </div>
  </div><!-- row -->
  
  <div class="row">
    <hr class="medium-12 medium-centered columns show-for-medium-up">
    <div id="services" class="small-12 medium-6 columns">
      <div>
        <h2>What We Do</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint necessitatibus, iusto quis illum provident deleniti et suscipit totam explicabo rerum officia dicta. Illo ducimus, voluptate nesciunt iusto commodi quo quisquam!</p>
        <a href="services.php" class="button small radius">Services</a>
      </div>
    </div>
  
    <div id="about" class="small-12 medium-6 columns">
      <div>
        <h2>Who We Are</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint necessitatibus, iusto quis illum provident deleniti et suscipit totam explicabo rerum officia dicta. Illo ducimus, voluptate nesciunt iusto commodi quo quisquam!</p>
        <a href="about.php" class="button small radius">About Us</a>
      </div>
    </div>

    <div id="contact" class="small-12 show-for-small-only columns">
      <div>
        <h2>Let's Talk</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint necessitatibus, iusto quis illum provident deleniti et suscipit totam explicabo rerum officia dicta. Illo ducimus, voluptate nesciunt iusto commodi quo quisquam!</p>
        <a href="contact.php" class="button small radius">Contact Us</a>
      </div>
    </div>
  </div><!-- row -->  

  <?php include("includes/footer.php"); ?>
  <script src="js/jquery.flipster.min.js"></script>
  <script>
      $('.my-flipster').flipster({
        scrollwheel: false,
        buttons: true,
        loop: true
      });      
  </script>
  </body>
</html>
