<?php
$page = 'Security'; 
include ('./components/header.php');
include ('./config/auth_controller.php');
?>
    <!-- pageheader section -->
    <div class="bg-shape bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <div class="pt-lg-9 pb-lg-15 pt-6 pb-10 mb-4 ">
                        <h1 class="h2 text-white"><?php echo $page ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include ('./components/navbar.php'); ?>

					<!-- dashboard -->
					<div class="col-lg-9 col-md-8 col-12">
						<div class="card rounded-lg mb-4 ">
							<!-- card header -->
							<div
								class="card-header bg-white p-4 d-flex justify-content-between align-items-center"
							>
								<h3 class="mb-0 h4">Password</h3>
								<a href="#!" class="text-inherit font-14"
									>Forgot your password?</a
								>
							</div>
							<!-- card body -->
							<div class="card-body p-4">
								<!-- form -->
								<form class="row">
									<div class="form-group col-12 col-md-8">
										<label class="font-14 text-dark" for="currentPassword"
											>Current Password</label
										>
										<input
											type="password"
											id="currentPassword"
											class="form-control"
											placeholder="************"
											required
										/>
									</div>
									<div class="col-12 col-md-4"></div>
									<div class="form-group col-12 col-md-8">
										<label class="font-14 text-dark" for="newPassword"
											>New Password</label
										>
										<input
											type="password"
											id="newPassword"
											class="form-control"
											placeholder="************"
											required
										/>
									</div>
									<div class="col-12 col-md-4"></div>
									<div class="form-group col-12 col-md-8">
										<label class="font-14 text-dark" for="confirmPassword"
											>Confirm Password</label
										>
										<input
											type="password"
											id="confirmPassword"
											class="form-control"
											placeholder="************"
											required
										/>
									</div>
									<div class="col-12 col-md-4"></div>
									<div class="col-12">
										<button class="btn btn-primary" type="submit">
											Update Password
										</button>
									</div>
								</form>
							</div>
						</div>
						<!-- card -->

                        
						<!-- card -->
						<div class="card rounded-lg mb-4 ">
							<!-- card header -->
							<div class="card-header bg-white p-4">
								<h3 class="mb-0 h4">Sessions</h3>
							</div>
							<!-- card body -->
							<div class="card-body p-4">
								<p class="mb-0 font-14">
									This is a lst of devices that have logged into your account.
									Revoke any sessions that you do not recognize.
								</p>
								<!-- collapse one -->
								<ul class="list-group list-group-flush" id="accordionLocation">
									<li class="list-group-item px-0 py-3 mt-3 ">
										<div class="d-flex">
											<div class="mr-2 mt-2">
												<div class="status bg-success"></div>
											</div>
											<div class="d-md-flex  justify-content-between w-100">
												<div class="d-flex">
													<i class="fe fe-airplay font-32"></i>
													<div class="ml-3">
														<h5 class="mb-0">Ahmedabad 102.250.233.120</h5>
														<small> Your current session</small>
														<p class="mb-0 font-14">Seen in IN</p>
													</div>
												</div>
												<div class="">
													<a
														href="#!"
														data-toggle="collapse"
														data-target="#locationOne"
														aria-expanded="true"
														aria-controls="locationOne"
														class="mt-3 mt-md-0 btn btn-light btn-sm"
														>See More</a
													>
												</div>
											</div>
										</div>

										<div
											id="locationOne"
											class="collapse show"
											data-parent="#accordionLocation"
										>
											<div class="card-body">
												<div class="mb-3">
													<h5 class="mb-0">Device:</h5>
													<span class="font-14">Chrome on macOS</span>
												</div>
												<div class="mb-3">
													<h5 class="mb-0">Last Location:</h5>
													<span class="font-14">Ahmedabad, Gujarat, India</span>
												</div>
												<div>
													<h5 class="mb-1">Signed in:</h5>
													<p class="font-14 mb-0">July 20,2020</p>
													<span class="font-14">Ahmedabad, Gujarat, India</span>
												</div>
											</div>
										</div>
									</li>
									<!-- collapse two -->
									<li class="list-group-item px-0 py-3 ">
										<div class="d-flex">
											<div class="mr-2 mt-2">
												<div class="status bg-success"></div>
											</div>
											<div class="d-md-flex  justify-content-between w-100">
												<div class="d-flex">
													<i class="fe fe-smartphone font-32"></i>
													<div class="ml-3">
														<h5 class="mb-0">Surat 102.250.233.120</h5>
														<small> Your current session</small>
														<p class="mb-0 font-14">Seen in IN</p>
													</div>
												</div>
												<div class="">
													<a
														href="#!"
														data-toggle="collapse"
														data-target="#locationTwo"
														aria-expanded="true"
														aria-controls="locationTwo"
														class="mt-3 mt-md-0 btn btn-light btn-sm"
														>See More</a
													>
												</div>
											</div>
										</div>

										<div
											id="locationTwo"
											class="collapse"
											data-parent="#accordionLocation"
										>
											<div class="card-body">
												<div class="mb-3">
													<h5 class="mb-0">Device:</h5>
													<span class="font-14">Chrome on macOS</span>
												</div>
												<div class="mb-3">
													<h5 class="mb-0">Last Location:</h5>
													<span class="font-14">Surat, Gujarat, India</span>
												</div>
												<div>
													<h5 class="mb-1">Signed in:</h5>
													<p class="font-14 mb-0">July 20,2020</p>
													<span class="font-14">Surat, Gujarat, India</span>
												</div>
											</div>
										</div>
									</li>
									<!-- collapse three -->
									<li class="list-group-item px-0 pt-3 pb-0 ">
										<div class="d-flex">
											<div class="mr-2 mt-2">
												<div class="status bg-success"></div>
											</div>
											<div class="d-md-flex  justify-content-between w-100">
												<div class="d-flex">
													<i class="fe fe-tablet font-32"></i>
													<div class="ml-3">
														<h5 class="mb-0">Vadodara 102.250.233.120</h5>
														<small> Your current session</small>
														<p class="mb-0 font-14">Seen in IN</p>
													</div>
												</div>
												<div class="">
													<a
														href="#!"
														data-toggle="collapse"
														data-target="#locationThree"
														aria-expanded="true"
														aria-controls="locationThree"
														class="mt-3 mt-md-0 btn btn-light btn-sm"
														>See More</a
													>
												</div>
											</div>
										</div>

										<div
											id="locationThree"
											class="collapse"
											data-parent="#accordionLocation"
										>
											<div class="card-body">
												<div class="mb-3">
													<h5 class="mb-0">Device:</h5>
													<span class="font-14">Chrome on macOS</span>
												</div>
												<div class="mb-3">
													<h5 class="mb-0">Last Location:</h5>
													<span class="font-14">Vadodara, Gujarat, India</span>
												</div>
												<div>
													<h5 class="mb-1">Signed in:</h5>
													<p class="font-14 mb-0">July 20,2020</p>
													<span class="font-14">Vadodara, Gujarat, India</span>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php
include ('./components/footer.php'); 
?>