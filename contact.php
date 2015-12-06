<!doctype html>
<html class="no-js" lang="en">

  <head>
    <?php include("includes/head.php"); ?>    
    <title>PharMed | Contact Us</title>    
  </head>

  <body>
  <?php include("includes/nav.php"); ?>

    <div id="header" class="animated fadeIn column row contact-header">
      <div id="title" class="animated slideInLeft">
        <div class="row">
          <div class="small-12 medium-10 medium-offset-2 columns">
            <h1>Let's Talk</h1>
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
        <h2>General Contact Information:</h2>
        <ul class="vcard">            
          <li class="fn">Richard Wiegman</li>
          <li class="title">President</li>
          <li class="org">PharMed Consulting, LLC</li>
          <li class="street-address">10929 Mill Pond Way</li>
          <li><span class="locality">Orlando</span>, 
          <span class="region">Florida</span>, <span class="postal-code">32825</span></li>
          <li class="country-name">USA</li>
          <li class="tel">+1-321-947-8066</li>
          <li class="email"><a href="mailto:richardwiegman@live.com">richardwiegman@live.com</a></li>
          <li class="vcard_li"><a href="Richard_Wiegman_vcard.vcf"><img src="images/vcard.svg" alt="vcard icon"> Download vcard</a></li>
        </ul>
      </div>
    </div><!-- row -->
    
    <div class="row">
      <div class="small-12 columns">
        <p>Have questions? Drop us a line. We look forward to hearing from you!</p>
        <hr>
      </div>
    </div><!-- row -->
    
    <div class="row">
      <form data-abide class="small-11 large-10 small-centered columns" id="comment_form" name="comment_form" method="post" action="form_script.php">
        <input type="hidden" id="recipient" name="recipient" value="webdevteacher@gmail.com" />
        <input type="hidden" id="redirect" name="redirect" value="confirmation.php" />
        <input type="hidden" id="subject" name="subject" value="PharMed comment form" />     

        <div class="row">
          <div class="small-12 columns">
            <label for="help_topic">How can we help you?<span class="field_required"> *</span>
              <select name="help_topic" id="help_topic" required>
                <option value="" selected disabled>Select an option.</option>
                <option value="interim">Interim Professional Services</option>
                <option value="auditing">Auditing Services</option>
                <option value="sme">SME Services</option>
                <option value="cmc">CMC Regulatory Strategy Services</option>
                <option value="quality">Quality Systems Services</option>
                <option value="general">General Inquiry</option>
              </select>
            </label>
            <small class="error">This field is required.</small>
          </div>
        </div><!-- row -->

        <div class="row">
          <div class="small-12 columns ">
            <label for="organization">Organization
              <input type="text" id="organization" name="organization">
            </label>
          </div>
        </div><!-- row -->

          <div class="row">
            <div class="small-12 columns">
              <label>Name<span class="field_required"> *</span></label>            
              <div class="row">
                <div class="medium-6 columns">
                  <div class="row collapse prefix-radius">
                    <div class="small-2 columns">
                      <label for="first_name" class="prefix">First</label>
                    </div>
                    <div class="small-10 columns">
                      <input id="first_name" name="first_name" type="text" required>
                      <small class="error">This field is required.</small>
                    </div>                      
                  </div><!-- row collapse -->
                </div><!-- medium-6 -->
                <div class="medium-6 columns">
                  <div class="row collapse prefix-radius">
                    <div class="small-2 columns">
                      <label for="last_name" class="prefix">Last</label>
                    </div>
                    <div class="small-10 columns">
                      <input type="text" id="last_name" name="last_name" required>
                      <small class="error">This field is required.</small>
                    </div>                
                  </div><!-- row collapse -->
                </div><!-- medium-6 -->
              </div><!-- row --> 
            </div><!-- small-12 -->    
          </div><!-- row -->

        <div class="row">
          <div class="small-12 columns">
            <label for="location">Location
              <input type="text" id="location" name="location">
            </label>
          </div>
        </div><!-- row -->

        <div class="row">
          <div class="small-12 columns ">
            <label for="email">Email<span class="field_required"> *</span>
              <input type="email" id="email" name="email" required>
            </label>
            <small class="error">This field is required.</small>
          </div>
        </div><!-- row -->

        <div class="row">
          <div class="small-12 columns ">
            <label for="message">Message<span class="field_required"> *</span>
              <textarea name="message" id="message" cols="30" rows="10" required></textarea>
            </label>
            <small class="error">This field is required.</small>
          </div>
        </div><!-- row -->

        <div class="row">
          <div class="small-12 columns ">
            <button class="small radius" type="submit">Submit</button>
          </div>
        </div><!-- row -->

      </form>
    </div><!-- row -->

  <?php include("includes/footer.php"); ?>  
  </body>
</html>