Meredith Wiegman
January 12, 2016

* The PharMed Consulting website consists of 8 pages. I built the site with the Foundation 5 framework.  I wrote custom CSS styles using Sass in the app.scss file and/or modified the Foundation 5 settings file. Foundation 6 was released shortly before beginning the project build. It includes a new command-line interface, Sass compiler, and modified components. However, I decided to complete the build with Foundation 5, using Compass for Sass compiling, as originally planned. 

* I used Jekyll static site generator to include common components on each page, including the head, nav, logo, mobile logo, and footer. Meta tags are present on each page. All pages validate as valid HTML5. 

* I created the mobile and tablet/desktop SVG logos in Adobe Illustrator and incorporated them as inline SVG code.  The logo graphic was obtained from freepik.com. Attribution link is: <'http://www.freepik.com/free-vector/medical-logo-template_783181.htm'>. All other images were found on librestock or pixabay and do not require attribution. 

* I made the site fully responsive, with modified layout and navigation for small, medium, and large screens. 

* I added dynamic content and enhanced user experience in the following ways:

  1. I included an inline JS script on each page. Combined with CSS transitions, it enables a fade-in effect on page load. I followed the method described at <http://www.abeautifulsite.net/a-clean-fade-in-effect-for-webpages/> to implement this effect.  

  2. I used the Animate.CSS library <https://daneden.github.io/animate.css/> to add more dynamic content after page load. The index page title area fades-in upwardly, then the content slider appears. On all other pages, the header image fades in, then the header title area slides in left.
  
  3. I used jQuery's built in XML support to parse the FDA RSS feeds.  

* The form located on contact.html is processed using form mail service provided by http://formspree.io. The form is validated prior to submission using Foundation 5 Abide validation. 

* Based on results from GTmetrix, all pages load within 3 seconds or less.  I used the browser caching method described on the GTmetrix site to specify caching of the site's images. 

* I tested the site on Chrome, Firefox, Internet Explorer, and Safari for Windows to ensure cross-browser functionality.
