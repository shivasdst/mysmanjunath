<script src='https://www.google.com/recaptcha/api.js'></script>
<div class="container">
  <div class="row gap-above-large">
    <div class="col-md-12">
      <h1 class="display-5 text-center gap-below-extralarge">Contact</h1>        
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 text-center pr-5">
      <h4><i class="fa fa-1x fa-map-marker"></i> Address</h4>
      <p>632, Nadaloka,<br />4th Main, 10th Cross,<br />Ramakrishna Nagar, E & F Block,<br /> Mysore – 570022,<br /> Karnataka, India.</p>
      <h4>Email</h4> 
      <p>info@mysoremanjunath.com</p>
      <h4>Phone</h4> 
      <p><i class="fa fa-mobile"></i> +91 9611 840840 <i class="fa fa-1x fa-phone"></i> +91 821- 2560840</p>
      <p class="boldgrid-google-maps" style="width: 100%; height: 200px;">
<!--
		  <iframe style="width: 100%; height: 100%;" src="https://maps.google.com/maps?q=632%2C+Nadaloka%2C+4th+Main%2C+10th+Cross%2C+Ramakrishna+Nagar%2C+E+%26amp%3B+F+Block%2C+Mysore+-+570022%2C+India&amp;t=m&amp;z=16&amp;output=embed" frameborder="0"></iframe>
-->
		  <iframe style="width: 100%; height: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d490.71422088272493!2d76.62127602064562!3d12.281734176061116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x218633f8c0643d17!2sNadaloka+2!5e0!3m2!1sen!2sus!4v1560361314806!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</p>
    </div>  
    <div class="col-md-6 sm-above-large">
      <form method="post" action="<?=BASE_URL . 'mail/send'?>">
        <h4>Get In Touch</h4>
        <p>We are here to answer any questions you may have. Reach out to us and we’ll respond as soon as we can.</p>
        <div class="form-group">
          <label for="Name">Name<span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="Email">Email<span class="text-danger">*</span></label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="Email">Subject</label>
          <input type="text" class="form-control" id="subject" name="subject">
        </div>        
        <div class="form-group">
          <label for="Email">Message<span class="text-danger">*</span></label>
          <textarea class="form-control" id="message" name="message" rows="6" required></textarea>
        </div>
        <div class="form-group">
            <div>
                <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
        <button type="reset" class="btn btn-primary btn-lg ml-4">Clear</button>
      </form>
    </div>  
  </div>  
</div>
