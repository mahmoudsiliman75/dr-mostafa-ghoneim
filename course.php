<?php include("layouts/header.php") ?>

	<!-- start course section -->
	<section class="course-det">
		<div class="container justify-content-center">
			<div class="card-container">

				<div class="card">
					<img src="Technomasr/img/dental-course.png" class="card-img-top" alt="...">
					<div class="card-body">

						<h3 class="card-title text-center p-b-25">Course Name</h3>
						<h5 class="card-subtitle"> <a href="#"> Instructor Name: <span style="color: #555"> Dr. Mostafa </span></a> </h5>

						<div class="card-text">
							<span>About Instructor: </span> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum ducimus quia minima Inventore quas. Aut facilis magnam molestiae aliquam ips. <br><br>
							<span>About course: </span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Id modi eaque quia, voluptate quam ullam asperiores error necessitatibus blanditiis nihil provident cumque dolor repellat harum Beatae provident veritatis ea fugit.
						</div>

						<button class="btn btn-primary" data-toggle="modal" data-target="#enroll-coures">Enroll Now !</button>

					</div>
				</div>

			</div>
		</div>
	</section>

	<section class="TakeCourse">
		<div class="container d-flex justify-content-center">
			
			<div id="enroll-coures" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered justify-content-center " role="document">
					<div class="modal-content border-0 mx-3">
						<div class="modal-body p-0">
							<div class="row justify-content-center">
								<div class="col">

									<div class="card border-0">

										<div class="card-header p-3">
											<div class="row align-items-center">
												<div class="col-auto">
													<h6 class="mb-0"><b>Enrolle Course</b></h6>
												</div>
												<div class="col text-right"><button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span class="cross" aria-hidden="true">&times;</span> </button></div>
											</div>
										</div>

										<div class="card-body">
											<h6 class="card-title text-center"><b>Please Enter Correct Information</b></h6>

											<div class="row my-3">
													<div class="col">
															<div class="form-group mt-1 mb-1"> <input type="text" id="email" class="form-control pl-3 " required> <label class="ml-3 form-control-placeholder" for="email">First Name</label> </div>
													</div>
											</div>

											<div class="row my-3">
													<div class="col">
															<div class="form-group mt-1 mb-1"> <input type="text" id="email" class="form-control pl-3 " required> <label class="ml-3 form-control-placeholder" for="email">Last Name</label> </div>
													</div>
											</div>
											
											<div class="row my-3">
													<div class="col">
															<div class="form-group mt-1 mb-1"> <input type="text" id="email" class="form-control pl-3 " required> <label class="ml-3 form-control-placeholder" for="email">Email</label> </div>
													</div>
											</div>

											<div class="row my-3">
													<div class="col">
															<div class="form-group mt-1 mb-1"> <input type="text" id="email" class="form-control pl-3 " required> <label class="ml-3 form-control-placeholder" for="email">Phone</label> </div>
													</div>
											</div>

											<div class="row mt-4 mb-3">
													<div class="col"><button type="button" id="Submit" class="btn btn-primary btn-block" data-dismiss="modal"><b>Submit</b></button></div>
											</div>

										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End course section --> 

	<!-- TODO: "Edit Colors before Footer " -->

<?php include("layouts/footer.php") ?>