<!--==============================
pop up Area  
==============================-->

<div id="myModal" class="modal">
    <div class="modal-content">
    <span class="close" id="closeModalButton">&times;</span>
      <div class="title-area mb-5">
       
        <h2 class="sec-title fw-medium text-white">Empower Your Business with SchoolMatrix</h2>
      </div>
      <p class=" text-light d-sm-block d-md-block d-none">Transform the way you manage relationships, streamline processes, and drive growth with School Matrix.</p>
      <form method="POST" class="course-form mb-2" action="https://script.google.com/macros/s/AKfycbwRqeigL7_n2sZ1L_QC74fSpdcBaOSSYPkbyB262eJGkEOl75FHYNXpQ2xwpKKQz6Qq/exec">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" name="name" placeholder="Name*">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" name="email" placeholder="Email Address*">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
            <input type="tel"  name="number" id="number" placeholder="Phone Number*">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <input type="text" name="message" id="message" placeholder=" Message*">
            </div>
          </div>
          <div class="form-btn col-12 mt-10">
                        
                        <input class="th-btn" type="submit" value="Make an Appointment" id="submit">
                     </div>
        </div>
      
      </form>
      
    </div>
  </div>
  <script>
   if (isSubmissionSuccessful) {
  // Display the success message in an alert box
  alert('Thank you for contacting us. We will get back to you shortly.');
}
</script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var form = document.querySelector('.course-form');
    
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

<script>
  var isSubmissionSuccessful = true;
  form.addEventListener('submit', function(event) {
   event.preventDefault();

  

   if (isSubmissionSuccessful) {
   
      alert('Thank you for contacting us. We will get back to you shortly.');
   }
});

</script>




  