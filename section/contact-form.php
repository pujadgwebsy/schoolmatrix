   <!--==============================
Contact Area  
==============================-->
<div class="col-xl-6">
            <div class="contact-form-wrap" data-bg-src="assets/img/bg/contact_bg_1.png">
               <span class="sub-title">Contact With Us!</span>
               <h2 class="border-title">Get in Touch</h2>
               <p class="mt-n1 mb-30 sec-text">We're here to help and answer any questions you may have. Please don't hesitate to reach out to us using any of the following methods:</p>
               <form action="https://script.google.com/macros/s/AKfycbwRqeigL7_n2sZ1L_QC74fSpdcBaOSSYPkbyB262eJGkEOl75FHYNXpQ2xwpKKQz6Qq/exec" method="POST" class="contact-form ajax-contact">
                  <div class="row">
                     <div class="col-12">
                        <div class="form-group">
                           <input type="text" class="form-control style-white" name="name" id="name" placeholder="Your Name*">
                           <i class="fal fa-user"></i>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <input type="email" class="form-control style-white" name="email" id="email" placeholder="Email Address*">
                           <i class="fal fa-envelope"></i>
                        </div>
                     </div>
                   
                     <div class="col-md-6">
                        <div class="form-group">
                           <input type="tel" class="form-control style-white" name="number" id="number" placeholder="Phone Number*">
                           <i class="fal fa-phone"></i>
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="form-group ">
                           <textarea name="message" id="message" cols="30" rows="3" class="form-control style-white" placeholder="Write Your Message*"></textarea>
                           <i class="fal fa-pen"></i>
                        </div>
                     </div>
                     <div class="form-btn col-12 mt-10">
                        <!-- <button class="th-btn">Send Message<i class="fas fa-long-arrow-right ms-2"></i></button> -->
                        <input class="th-btn" type="submit" value="submit" id="submit">
                     </div>
                  </div>
                 
               </form>
            </div>
         </div>
        
 <!-- <script>
  document.addEventListener('DOMContentLoaded', function() {
    var form = document.querySelector('.ajax-contact');
    var successMessage = document.querySelector('.form-messages.success');

    if (form && successMessage) {
      form.addEventListener('submit', function(event) {
        event.preventDefault(); 

       
        var isSubmissionSuccessful = true;

        if (isSubmissionSuccessful) {
          // Display the success message
          successMessage.textContent = 'Thank you for contacting us. We will get back to you shortly.';
          successMessage.style.display = 'block';

          // Set a timeout to hide the success message after 4000 milliseconds (4 seconds)
          setTimeout(function() {
            successMessage.style.display = 'none';
          }, 4000);
        }
      });
    }
  });
</script> -->
<script>
   if (isSubmissionSuccessful) {
  // Display the success message in an alert box
  alert('Thank you for contacting us. We will get back to you shortly.');
}
</script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var form = document.querySelector('.ajax-contact');
    
    if (form) {
      form.addEventListener('submit', function(event) {
        event.preventDefault(); 

        var isSubmissionSuccessful = true;

        if (isSubmissionSuccessful) {
          // Display the success message in an alert box
          alert('Thank you for contacting us. We will get back to you shortly.');
        }
      });
    }
  });
</script>








 

































