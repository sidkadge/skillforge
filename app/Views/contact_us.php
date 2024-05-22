<?php include('header.php') ?>

     <!-- Mailform-->
     <section class="section section-lg bg-default">
        <div class="container">
         <div class="row row-50 justify-content-xl-between flex-lg-row-reverse">
            <div class="col-lg-4 col-xl-3">
             <div class="row row-30 row-xl-60">
                <div class="col-sm-4 col-lg-12">
                 <h4>Address</h4>
                 <p class="offset-top-1"><a class="link-default" href="#">8734 S. Ashland Ave, <br class="d-none d-md-block">San Diego, CA 60608-2013, US</a></p>
                </div>
                <div class="col-sm-4 col-lg-12">
                 <h4>Phones</h4>
                 <ul class="list-0 offset-top-1">
                    <li><a class="link-default" href="tel:#">1-800-1234-567</a></li>
                    <li><a class="link-default" href="tel:#">1-800-8764-098</a></li>
                 </ul>
                </div>
                <div class="col-sm-4 col-lg-12">
                 <h4>E-mails</h4>
                 <ul class="list-0 offset-top-1">
                    <li><a class="link-default" href="mailto:#">info@demolink.org</a></li>
                    <li><a class="link-default" href="mailto:#">mail@demolink.org</a></li>
                 </ul>
                </div>
             </div>
            </div>
            <div class="col-lg-8">
             <h2>Get in Touch</h2>
             <!-- RD Mailform-->
             <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                <div class="row row-30">
                 <div class="col-md-6">
                    <div class="form-wrap">
                     <input class="form-input" id="contact-first-name" type="text" name="first-name" data-constraints="@Required">
                     <label class="form-label" for="contact-first-name">First Name</label>
                    </div>
                 </div>
                 <div class="col-md-6">
                    <div class="form-wrap">
                     <input class="form-input" id="contact-last-name" type="text" name="last-name" data-constraints="@Required">
                     <label class="form-label" for="contact-last-name">Last Name</label>
                    </div>
                 </div>
                 <div class="col-md-6">
                    <div class="form-wrap">
                     <label class="form-label" for="contact-email">E-mail</label>
                     <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Required @Email">
                    </div>
                 </div>
                 <div class="col-md-6">
                    <div class="form-wrap">
                     <label class="form-label" for="contact-phone">Phone</label>
                     <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Required @PhoneNumber">
                    </div>
                 </div>
                 <div class="col-12">
                    <div class="form-wrap">
                     <label class="form-label" for="contact-message">Message</label>
                     <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                    </div>
                 </div>
                 <div class="col-12">
                    <button class="button button-lg button-primary button-raven" type="submit">Send</button>
                 </div>
                </div>
             </form>
            </div>
         </div>
        </div>
     </section>
     <!-- Google Map-->
     <section class="section">
        <div class="google-map-container" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-styles="[{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]">
         <div class="google-map"></div>
         <ul class="google-map-markers">
            <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png"></li>
         </ul>
        </div>
     </section>
     <!-- Page Footer--><a class="banner" href="https://www.templatemonster.com/website-templates/monstroid2.html" target="_blank"><img src="images/monstroid-big-2.jpg" alt="" height="0"></a>
     <?php include('footer.php') ?>