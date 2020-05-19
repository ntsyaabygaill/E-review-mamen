  <section id="intro">
  </section>
  <section id="maincontent">
    <div class="container" style="padding-bottom: 110px">
      <div class="row">
        <div class="span12">
          <div class="tagline centered">
            <div class="row">
              <div class="span12">
                <div class="tagline_text">
                  <h2>Please Login</h2>
                  <p>
                    You should login to the system before you can acsess our fitur.
                  </p>
                  <!-- Alert Form Validation -->
                  <?php if ($msg != '') : ?>
                    <div class="alert alert-danger" role="alert">
                      <?php echo $msg; ?>
                    </div>
                  <?php endif; ?>


                  <!-- Sucess Register -->
                  <?php if ($this->session->flashdata('msgSuccess') != '') : ?>
                    <div class="alert alert-info" role="alert">
                      <?php echo $this->session->flashdata('msgSuccess'); ?>
                    </div>
                  <?php endif; ?>

                  <div>
                    <form action="<?php echo base_url() . "AccountCtl/checkingLogin"?>" method="post">
                      <table>
                        <tr>
                          <td>Username:</td>
						  <td>
						  <input type="text" name="username" placeholder="username" id="username"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'username'" required
									class="single-input">
						 </td>
                        </tr>
                        <tr>
                          <td>Password:</td>
						  <td>
						  <input type="password" name="sandi" placeholder="sandi" id="sandi"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'password'" required
									class="single-input">
						  </td>
                        </tr>
                      </table><br>

                      <input type="submit"class="genric-btn primary-border circle" value="Login">
                    </form>
                   <!-- <p><a href="<?php echo base_url() . "AccountCtl/signUp" ?>">Sign-up</a> to eReview</p> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end tagline -->
        </div>
      </div>
    </div>
  </section>