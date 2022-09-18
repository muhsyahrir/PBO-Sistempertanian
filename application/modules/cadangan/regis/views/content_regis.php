<!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          
          <p>Create an Account</p>
        </div>

        <div class="row">

          

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

            <form action="regis" method="post"  class="php-email-form">
              <div class="row">
			  <h2 style="font-size:20px">Name :</h2>
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" value="<?= set_value('name'); ?>" />
                </div>
                
              </div>
			  <div class="row">
			  <h2 style="font-size:20px">Email :</h2>
              <div class="col-md-6 form-group mt-3 mt-md-0 wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                  <input type="text" class="form-control" name="email" id="email" placeholder="Your Email" value="<?= set_value('email'); ?>" />
                </div>
			  </div>
              <div class="row">
			  <h2 style="font-size:20px">Password:</h2>
                <div class="col-md-6 form-group wrap-input100 validate-input" data-validate="Password is required">
                  <input type="password" name="password1" class="form-control" id="password1" placeholder="Password" />
				  <?= form_error('password1', '<small class="text-danger pl-3">','</small>'); ?>
                </div>
              </div>
			  
			  <div class="row">
			  <h2 style="font-size:20px">Confirm Password:</h2>
                <div class="col-md-6 form-group wrap-input100 validate-input" data-validate="Confirm Password is required">
                  <input type="password" name="password2" class="form-control" id="password2" placeholder="Confirm Password" />
                </div>
                
              </div>
			  <a href="login"> Log In --></a>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Create</button></div>
            </form>

          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->