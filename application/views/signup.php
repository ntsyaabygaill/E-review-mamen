<section id="intro">
  </section>
  <section id="maincontent">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="tagline centered">
            <div class="row">
              <div class="span12">
                <div class="tagline_text">
                  <h2>Sign-up Form</h2>
                  <p>
                    Fill in your account details! Field with <span style="color:red">*</span> is required
                  </p>

                  <!-- Alert Form Validation -->
                  <?php if (strlen($error) > 0) { ?>
                    <div class="alert alert-danger" role="alert">
                      <?= $error; ?>
                    </div>
                  <?php } ?>

                  <div align="center">
                    <?= form_open_multipart(base_url('AccountCtl/signingUp')); ?>
                    <table>
                      <tr>
                        <td>*Nama: </td>
						<td><input type="text" id="nama" placeholder = "Name" name="nama" width="100" 
						onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" required
									class="single-input">
					  </td>
                      </tr>
                      <tr>
                        <td>*Username: </td>
						<td><input type="text" id="username" placeholder = "Username" name="username" width="100" 
						onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" required
									class="single-input">
					</td>
                      </tr>
                      <tr>
                        <td>*Password: </td>
						<td><input type="password" id="sandi"placeholder = "Password" name="sandi" width="100"
						onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required
									class="single-input">
					  </td>
                      </tr>
                      <tr>
                        <td>*Email: </td>
						<td><input type="text" id="email"placeholder = "E-mail" name="email" width="100" 
						onfocus="this.placeholder = ''" onblur="this.placeholder = 'E-mail'" required
									class="single-input">
					  </td>
                      </tr>
                      <tr>
                        <td>*Roles: </td>
                        <td>
                          <input type="radio" name="roles[]" value="1" width="100" checked id="primary-radio"/>Editor
                          <br>
                          <input type="radio" name="roles[]" value="2" width="100" id="primary-radio" />Reviewer
                        </td>
                      </tr>
                      <tr>
                        <td>*Account Number: </td>
						<td><input type="text" id="no_rek" placeholder = "No Rekening" name="no_rek" width="100" 
						onfocus="this.placeholder = ''" onblur="this.placeholder = 'No Rekening'" required
									class="single-input">
					</td>
                      </tr>
                      <tr>
                        <td>Photo: </td>
                        <td><input type="file" id="photo" name="photo" width="100" /></td>
                      </tr>
                    </table><br>

                    <input type="submit" class="genric-btn info circle arrow" value="Sign-up">
					<?= form_close(); ?>
					<br>
                   <!-- <p><a href="<?php echo base_url() . "AccountCtl/login" ?>">Login</a> to eReview</p> -->
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