
<?php include("layouts/header.php") ?>

	<!-- start appointment -->
	<section>

	<div class="form-holder">
		<div class="form-appointment w-70">

			<form>
				<div class="group row">

				<div id="two" class="col-md-12 col-sm-12">

						<div class="row">
							
							<div class="col-md-6 m-b-20">
								<h4 class="form-title">What is the best way to reach you?</h4>
								<p>
										<span class="wpcf7-form-control-wrap radio-98">
												<span class="wpcf7-form-control wpcf7-radio">
														<span class="wpcf7-list-item">
																<label>
																		<input type="radio" name="radio-98" value="Phone">&nbsp;<span class="wpcf7-list-item-label">Phone</span>
																</label>
														</span>
														<span class="wpcf7-list-item">
																<label>
																		<input type="radio" name="radio-98" value="Email">&nbsp;<span class="wpcf7-list-item-label">Email</span>
																</label>
														</span>
												</span>
										</span>
								</p>
							</div>

							<div class="col-md-6 m-b-20">
								<h4 class="form-title">Best time of day for your appointment:</h4>
								<p>
										<span class="wpcf7-form-control-wrap checkbox-246">
												<span class="wpcf7-form-control wpcf7-checkbox">
														<span class="wpcf7-list-item">
																<label><input type="checkbox" name="checkbox-246[]" value="Morning">&nbsp;<span class="wpcf7-list-item-label">Morning</span>
																</label>
														</span>
														<span class="wpcf7-list-item">
																<label><input type="checkbox" name="checkbox-246[]" value="Afternoon">&nbsp;<span class="wpcf7-list-item-label">Afternoon</span>
																</label>
														</span>
												</span>
										</span>
								</p>
							</div>

							
							<div class="col-md-12 m-b-20">
								<h4 class="form-title">Days of the week you are available for appointment:</h4>
								<p>
										<span class="wpcf7-form-control-wrap checkbox-465">
												<span class="wpcf7-form-control wpcf7-checkbox">
														<span class="wpcf7-list-item">
																<label>
																		<input type="checkbox" name="checkbox-465[]" value="Saturday">&nbsp;<span class="wpcf7-list-item-label">Saturday</span>
																</label>
														</span>
														<span class="wpcf7-list-item">
																<label>
																		<input type="checkbox" name="checkbox-465[]" value="Sunday">&nbsp;<span class="wpcf7-list-item-label">Sunday</span>
																</label>
														</span>
														<span class="wpcf7-list-item">
																<label>
																		<input type="checkbox" name="checkbox-465[]" value="Monday">&nbsp;<span class="wpcf7-list-item-label">Monday</span>
																</label>
														</span>
														<span class="wpcf7-list-item">
																<label>
																		<input type="checkbox" name="checkbox-465[]" value="Tuesday">&nbsp;<span class="wpcf7-list-item-label">Tuesday</span>
																</label>
														</span>
														<span class="wpcf7-list-item">
																<label>
																		<input type="checkbox" name="checkbox-465[]" value="Wensday">&nbsp;<span class="wpcf7-list-item-label">Wensday</span>
																</label>
														</span>
														<span class="wpcf7-list-item">
																<label>
																		<input type="checkbox" name="checkbox-465[]" value="Thursday">&nbsp;<span class="wpcf7-list-item-label">Thursday</span>
																</label>
														</span>
												</span>
										</span>
								</p>
							</div>

						</div>

				</div>
						
				<div id="one" class="col-md-12 col-sm-12">

						<span>
							<input  type="text" name="name" aria-required="true" placeholder="Name" value="">
						</span>
						<br>

						<span>
							<input id="email2" type="email" name="email" value=""  aria-required="true" placeholder="Email">
						</span>

						<br>

						<span>
							<input id="phone"type="tel" name="phone" value="" aria-required="true" placeholder="Phone">
						</span>

						<br>

						<span>
							<textarea id="textarea" name="textarea" cols="40" rows="10" placeholder="Special notes, concerns, or requirements"></textarea>
						</span>
				</div>


						

				</div>

				<div id="send">
					<input type="submit" value="Request My Appointment" class="wpcf7-form-control wpcf7-submit">
					<img class="ajax-loader" src="http://www.professionalaudiologicalservices.com/wp-content/plugins/contact-form-7/images/ajax-loader.gif" alt="Sending ..." style="visibility: hidden;">
				</div>

				<div class="wpcf7-response-output wpcf7-display-none"></div>

			</form>

		</div>
	</div>


	</section>
	<!-- end appointment -->

<?php include("layouts/footer.php") ?>
