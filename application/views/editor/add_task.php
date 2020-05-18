<section id="subintro">
    <div class="jumbotron subhead" id="overview">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="centered">
                        <h3>Add New Task</h3>
                        <p>
                            Please fill in data about the article that you would like to be reviewed.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="maincontent">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="tagline centered">
                    <div class="row">
                        <div class="span12">
                            <div class="tagline_text">
                                <?php if (strlen($error) > 0) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= $error; ?>
                                    </div>
                                <?php endif ?>
                                <div align="center">
                                    <form action="<?php echo base_url() . "EditorCtl/AddingTask" ?>" method="post" enctype="multipart/form-data">
                                        <table>
                                            <tr>
                                                <td>*Title </td> 
                                                <td>:</td>               
						                        <td><input type="text" id="judul" placeholder = "Judul" name="judul" width="100" 
						                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Judul'" required
									            class="single-input"> </td>
                                            </tr>
                                            <tr>
                                                <td>*Keywords</td>
                                                <td>:</td>
                                                <td><input type="text" id="katakunci" name="katakunci" width="100" 
                                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Judul'" required
									            class="single-input"> </td>
                                            </tr>
                                            <tr>
                                                <td>*Authors</td>
                                                <td>:</td>
                                                <td><input type="text" id="authors" name="authors" width="100" 
                                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Judul'" required
									            class="single-input"> </td>
                                            </tr>
                                            <tr>
                                                <td>*Page(s) Count</td>
                                                <td>:</td>
                                                <td><input type="number" id="halaman" name="halaman" width="100" 
                                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Judul'" required
									            class="single-input"> </td>
                                            </tr>
                                            <tr>
                                                <td>*Article</td>
                                                <td>:</td>
                                                <td><input type="file" id="userfile" name="userfile" width="20"
                                              ></td>
                                            </tr>
                                        </table>
                                        <br>
                                        <input type="submit" class="genric-btn info circle arrow" value="Submit">
                                    </form>
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