<form action="https://script.google.com/macros/s/AKfycbwRqeigL7_n2sZ1L_QC74fSpdcBaOSSYPkbyB262eJGkEOl75FHYNXpQ2xwpKKQz6Qq/exec" method="POST" class="th-team-form bg-smoke ajax-contact mt-50 mt-lg-0">
                            <div class="form-title mb-30 text-center">
                                <h3 class="fw-semibold mt-n1">Quick Contact</h3>
                                <p>Feel free to contact us .</p>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Your Name" class="form-control style-white">
                                        <i class="fal fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="mail" name="email" placeholder="Your Email" class="form-control style-white">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                </div>
                              
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="number" name="number" placeholder="Phone Number" class="form-control style-white">
                                        <i class="fal fa-phone-flip"></i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Write Message..." class="form-control style-white"></textarea>
                                        <i class="fal fa-pencil"></i>
                                    </div>
                                </div>
                                <div class="col-12">
                                <input class="th-btn" type="submit" value="Make an Appointment" id="submit">
                                </div>
                            </div>
                          
                        </form>
                       
                       
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