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
             <form action="<?php echo base_url()?>contactus" id="connectus" method="post">
                <div class="row row-30">
                 <div class="col-md-6">
                    <div class="form-wrap">
                     <input class="form-input" id="contact-first-name" type="text" name="first_name" data-constraints="@Required" Required>
                     <label class="form-label" for="contact-first-name">First Name</label>
                    </div>
                 </div>
                 <div class="col-md-6">
                    <div class="form-wrap">
                     <input class="form-input" id="contact-last-name" type="text" name="last_name" data-constraints="@Required" Required>
                     <label class="form-label" for="contact-last-name">Last Name</label>
                    </div>
                 </div>
                 <div class="col-md-6">
                    <div class="form-wrap">
                     <label class="form-label" for="contact-email">E-mail</label>
                     <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Required @Email" Required>
                    </div>
                 </div>
                 <div class="col-md-6">
                    <div class="form-wrap">
                     <label class="form-label" for="contact-phone">Phone</label>
                     <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Required @PhoneNumber" Required>
                    </div>
                 </div>
                 <div class="col-12">
                    <div class="form-wrap">
                     <label class="form-label" for="contact-message">Message</label>
                     <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required" Required></textarea>
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
    <div class="google-map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d100893.38204848353!2d-122.39173700000002!3d37.791957!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085806511f79049%3A0xc9880f5d2f325396!2s58%20Howard%20St%20%232%2C%20San%20Francisco%2C%20CA%2094105!5e0!3m2!1sen!2sus!4v1692034029890!5m2!1sen!2sus"
           width="100%" height="450" frameborder="0" style="border:0;margin-top:40px" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</section>


     <!-- Page Footer--><a class="banner" href="https://www.templatemonster.com/website-templates/monstroid2.html" target="_blank"><img src="images/monstroid-big-2.jpg" alt="" height="0"></a>
     <?php include('footer.php') ?>
