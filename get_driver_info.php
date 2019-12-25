<?php
/**
 * Created by PhpStorm.
 * User: Daniel Ng`andu ( danielngandu.com | 0975517084 )
 * Date: 16/04/2019
 * Time: 15:06
 */
//echo "Created by Daniel Ng`andu";
?>
<!doctype html>
<html lang="en">
<head>
    <title>RTSA | ONLINE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
    <link rel="manifest" href="images/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-bootstrap-wizard.css" rel="stylesheet" />
</head>
<body>
	<div  style="background-color:white">

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="red" id="wizard">
		                    <form action="" method="">
		                <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
                                        <a href="index.php"><img src="images/logo/logo.jpg" height="50" width="50"></a>
                                        <hr><br>
		                        		Pay Motor Vehicle Road Tax
		                        	</h3>
									<h5>This information will be submitted for processing of your road tax certificate.</h5>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
                                        <li><a href="#personal_details" data-toggle="tab">Personal Details</a></li>
                                        <li><a href="#vehicle_details" data-toggle="tab">Vehicle Details</a></li>
                                        <li><a href="#vehicle_tax_details" data-toggle="tab">Vehicle Tax Details</a></li>
			                        </ul>
								</div>

		                        <div class="tab-content">
		                            <div class="tab-pane" id="personal_details">
		                            	<div class="row">
			                            	<div class="col-sm-12">
			                                	<h4 class="info-text"> Let's start with the basic details.</h4>
			                            	</div>

                                            <div class="col-sm-6">
                                                <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">face</i>
													</span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">First Name <small>(required)</small></label>
                                                        <input name="firstname" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">

                                            <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">record_voice_over</i>
													</span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Last Name <small>(required)</small></label>
                                                        <input name="lastname" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
		                                	<div class="col-sm-6">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">email</i>
													</span>
													<div class="form-group label-floating">
			                                          	<label class="control-label">Email <small>(required)</small></label>
			                                          	<input name="name" type="text" class="form-control" required="required">
			                                        </div>
												</div>

		                                	</div>
                                            <div class="col-sm-6 ">
                                                <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">location_on</i>
													</span>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Street Name <small>(required)</small></label>
                                                    <input type="text" class="form-control" required="required">
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">location_on</i>
													</span>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Street Number <small>(required)</small></label>
                                                    <input type="text" class="form-control" required="required">
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">location_on</i>
													</span>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">City <small>(required)</small></label>
                                                    <select name="city" class="form-control" required="required">
                                                        <option disabled="" selected=""></option>
                                                        <option value="Afghanistan"> Lusaka </option>
                                                        <option value="...">...</option>
                                                    </select>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">location_on</i>
													</span>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Country <small>(required)</small></label>
                                                    <select name="country" class="form-control" required="required">
                                                        <option disabled="" selected=""></option>
                                                        <option value="Afghanistan"> Zambia </option>
                                                        <option value="...">...</option>
                                                    </select>
                                                </div>
                                                </div>
                                            </div>
		                            	</div>
		                            </div>

                                    <div class="tab-pane" id="vehicle_details">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="info-text"> 2. Fill in vehicle details.</h4>
                                            </div>
                                            <div class="col-sm-4 col-sm-offset-1">
                                                <div class="picture-container">
                                                    <div class="picture">
                                                        <img src="assets/img/file_upload.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                                        <input type="file" id="wizard-picture">
                                                    </div>
                                                    <h6>Upload Documents</h6>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">filter_1</i>
													</span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Registration Number <small>(required)</small></label>
                                                        <input name="firstname" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">filter_2</i>
													</span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Make <small>(required)</small></label>
                                                        <input name="lastname" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="col-sm-6">
                                                <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">filter_3</i>
													</span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Make <small>(required)</small></label>
                                                        <input name="lastname" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">filter_4</i>
													</span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Model <small>(required)</small></label>
                                                        <input name="lastname" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">filter_5</i>
													</span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Tax Class <small>(required)</small></label>
                                                        <input name="lastname" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">filter_6</i>
													</span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Engine Size(cc) <small>(required)</small></label>
                                                        <input name="lastname" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">filter_7</i>
													</span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Seats <small>(required)</small></label>
                                                        <input name="lastname" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="vehicle_tax_details">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="info-text"> 3. Vehicle Tax details.</h4>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">done</i>
													</span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Period of Tax <small>(required)</small></label>
                                                        <input name="firstname" type="number" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">

                                                <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">event_available</i>
													</span>
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Date <small>(required)</small></label>
                                                        <input name="lastname" type="date" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="col-sm-6">

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 ">

                                            </div>
                                            <div class="col-sm-6">

                                            </div>
                                            <div class="col-sm-6">

                                            </div>

                                        </div>

                                    </div>

                                </div>
	                        	<div class="wizard-footer">
	                            	<div class="pull-right">
	                                    <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Next' />
	                                    <input type='button' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish' value='Finish' />
	                                </div>
	                                <div class="pull-left">
	                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />

										<div class="footer-checkbox">
											<div class="col-sm-12">
											  <div class="checkbox">
												  <label>
													  <input type="checkbox" name="optionsCheckboxes">
												  </label>
												  Subscribe to our newsletter
											  </div>
										  </div>
										</div>
	                                </div>
	                                <div class="clearfix"></div>
	                        	</div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div> <!-- row -->
		</div> <!--  big container -->
<br>
        <hr>
	    <div class="footer">
	        <div class="container text-center">
	             Powered with <i class="fa fa-heart heart"></i> by <a href="http://www.dczambia.com">DotCom Zambia</a>
	        </div>
	    </div>
	</div>

</body>
	<!--   Core JS Files   -->
	<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/js/material-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="assets/js/jquery.validate.min.js"></script>
</html>
