<!doctype html>
<html class="no-js" lang="en">

  <head>
    <?php include("includes/head.php"); ?>    
    <title>PharMed | Industry News</title>    
  </head>

  <body>
  <?php include("includes/nav.php"); ?>
    
    <div id="header" class="animated fadeIn column row news-header">
      <div id="title" class="animated slideInLeft">
        <div class="row">
          <div class="small-12 medium-10 medium-offset-2 columns">
            <h1>Latest News</h1>
          </div>
        </div>
        <div class="row">
          <div class="small-12 medium-8 medium-offset-2 large-4 large-offset-2 columns">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit illum, quae provident in. Assumenda vero suscipit dolor pariatur ducimus sint aspernatur, tenetur officia harum sequi quos voluptate omnis, illum ipsa?</p>
          </div>
        </div>
      </div>
    </div><!-- column row -->
    
    <div class="row">
      <div class="small-12 columns">
        <h2>Regulatory News Feeds</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore nihil ducimus quo optio quasi esse adipisci modi iste commodi, voluptatibus aut provident ea nesciunt, magnam sed. Quam nostrum assumenda maiores.</p>
      </div>
    </div><!-- row -->

    <div class="row">
      <div class="small-12 columns">
        <h3>FDA What's New: Drugs</h3>         
      </div>
      <div class="small-11 small-centered columns news">
        <?php $xmlDoc = new DOMDocument();
          $xmlDoc->load("http://www.fda.gov/AboutFDA/ContactFDA/StayInformed/RSSFeeds/Drugs/rss.xml");

          $items = $xmlDoc->getElementsByTagName("item");

            foreach( $items as $item )
            {
            $titles = $item->getElementsByTagName( "title" );
            $title = $titles->item(0)->nodeValue;
            
            
            $links = $item->getElementsByTagName( "link" );
            $link = $links->item(0)->nodeValue;
            
            $pubDates = $item->getElementsByTagName( "pubDate" );
            $pubDate = $pubDates->item(0)->nodeValue;

            $descriptions = $item->getElementsByTagName( "description" );
            $description = $descriptions->item(0)->nodeValue;
            

            echo "<h4><a href='",$link,"'>",$title,"</a></h4><p>",$pubDate,"</p><p>",$description,"</p>";   
            } ?>
      </div>
    </div><!-- row -->

    <div class="row">
      <div class="small-12 columns ">
        <hr>
      </div>
    </div><!-- row -->
    
    <div class="row" id="cdrh">
      <div class="small-12 columns">
        <h3>CDRHNew: News and Updates</h3>         
      </div>
      <div class="small-11 small-centered columns news">
        <?php $xmlDoc = new DOMDocument();
          $xmlDoc->load("http://www.fda.gov/AboutFDA/ContactFDA/StayInformed/RSSFeeds/Biologics/rss.xml");

          $items = $xmlDoc->getElementsByTagName("item");

            foreach( $items as $item )
            {
            $titles = $item->getElementsByTagName( "title" );
            $title = $titles->item(0)->nodeValue;
            
            
            $links = $item->getElementsByTagName( "link" );
            $link = $links->item(0)->nodeValue;
            
            $pubDates = $item->getElementsByTagName( "pubDate" );
            $pubDate = $pubDates->item(0)->nodeValue;

            $descriptions = $item->getElementsByTagName( "description" );
            $description = $descriptions->item(0)->nodeValue;
            

            echo "<h4><a href='",$link,"'>",$title,"</a></h4><p>",$pubDate,"</p><p>",$description,"</p>";   
            } ?>
      </div>
    </div><!-- row -->

  <?php include("includes/footer.php"); ?>  
  </body>
</html>