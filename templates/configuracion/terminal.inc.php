
				<div class="row">
					<div class="col-sm-12">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
											<i class="glyphicon-display"></i></li>
									Detalles de Terminal 01
								</h3>
							</div>
							<div class="box-content nopadding">
								<ul class="tabs tabs-inline tabs-top">
									<li class='active'>
										<a href="#profile" data-toggle='tab'>
											<i class="glyphicon-display"></i> Terminal</a>
									</li>
									<li>
										<a href="#notifications" data-toggle='tab'>
											<i class="fa fa-bullhorn"></i>Notifications</a>
									</li>
									<li>
										<a href="#security" data-toggle='tab'>
											<i class="fa fa-lock"></i>Security</a>
									</li>
								</ul>
								<div class="tab-content padding tab-content-inline tab-content-bottom">
									<div class="tab-pane active" id="profile">
										<form action="#" class="form-horizontal">
											<div class="row">
												<div class="col-sm-2">
													<div class="fileinput fileinput-new" data-provides="fileinput">
														<div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 84px; height: 84px;">
															<img src="assets/images/terminal.ico" alt="">
														</div>
														<!-- <div>
															<span class="btn btn-default btn-file">
														<span class="fileinput-new">Select image</span>
															<span class="fileinput-exists">Change</span>
															<input type="file" name="...">
															</span>
															<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
														</div> -->
													</div>
												</div>
												<div class="col-sm-10">
													<div class="form-group">
														<label for="name" class="control-label col-sm-2 right">Terminal No:</label>
														<div class="col-sm-10">
															<input type="text" name="name" class='form-control' value="01">
														</div>
													</div>
													<div class="form-group">
														<label for="sucursal" class="control-label col-sm-2 right">Sucursal:</label>
														<div class="col-sm-10">
															<select name="s2" class='select2-me' style="width:250px;">
																<option value="AF">00001</option>
																<option value="AL">00002</option>
																
															</select>
														</div>
													</div>
													<div class="form-group">
														<label for="country" class="control-label col-sm-2 right">Role:</label>
														<div class="col-sm-10">
															<select name="s2" class='select2-me' style="width:250px;">
																<option value="AF">Caja</option>
																<option value="AL">Oficina</option>
																<option value="DZ">Soporte</option>
																<option value="AS">Almacen</option>
																<option value="AD">Ventas</option>
																
															</select>
														</div>
													</div>
													<!-- <div class="form-group">
														<label for="name" class="control-label col-sm-2 right">Alias:</label>
														<div class="col-sm-10">
															<input type="text" name="textfield" id="textfield" class="tagsinput" value="C.">
														</div>
													</div> -->
													<div class="form-group">
														<label for="email" class="control-label col-sm-2 right">Activada:</label>
														<div class="col-sm-10">
															<input type="text" name="email" class='form-control' value="Si">
															
														</div>
													</div>
													<div class="form-group">
														<label for="email" class="control-label col-sm-2 right">IP Address:</label>
														<div class="col-sm-10">
															<input type="text" name="email" class='form-control' disabled value="<?php echo $_SERVER['REMOTE_ADDR'] ?> ">
															
														</div>
													</div>

													<div class="form-group">
														<label for="email" class="control-label col-sm-2 right">Dominio:</label>
														<div class="col-sm-10">
															<input type="text" name="email" class='form-control' disabled value="<?php echo $_SERVER['HTTP_HOST'] ?> ">
															
														</div>
													</div>
													<!-- <div class="form-group">
														<label for="pw" class="control-label col-sm-2 right">Password:</label>
														<div class="col-sm-10">
															<input type="password" name="pw" class='form-control' value="********">
															<div class="form-button">
																<a href="#" class="btn btn-grey-4 change-input">Change</a>
															</div>
														</div>
													</div> -->
													<div class="form-actions">
														<input type="submit" class='btn btn-primary' value="Save">
														<input type="reset" class='btn' value="Discard changes">
													</div>
												</div>
											</div>
										</form>
									</div>
									<div class="tab-pane" id="notifications">
										<form action="#" class="form-horizontal">
											<div class="form-group">
												<label for="asdf" class="control-label col-sm-2">Email notifications</label>
												<div class="col-sm-10">
													<label class="checkbox">
														<input type="checkbox" name="asdf">Send me security emails</label>
													<label class="checkbox">
														<input type="checkbox" name="asdf">Send system emails</label>
													<label class="checkbox">
														<input type="checkbox" name="asdf">Lorem ipsum dolor</label>
													<label class="checkbox">
														<input type="checkbox" name="asdf">Minim veli</label>
												</div>
											</div>
											<div class="form-group">
												<label for="asdf" class="control-label col-sm-2">Email for notifications</label>
												<div class="col-sm-10">
													<select name="email" id="email">
														<option value="1">asdf@blasdas.com</option>
														<option value="2">johnDoe@asdasf.de</option>
														<option value="3">janeDoe@janejanejane.net</option>
													</select>
												</div>
											</div>
											<div class="form-actions">
												<input type="submit" class='btn btn-primary' value="Save">
												<input type="reset" class='btn' value="Discard changes">
											</div>
										</form>
									</div>
									<div class="tab-pane" id="security">
										<form action="#" class="form-horizontal">
											<div class="form-group">
												<label for="asdf" class="control-label col-sm-2">Disable account for</label>
												<div class="col-sm-10">
													<select name="email" id="email">
														<option value="1">1 week</option>
														<option value="2">2 weeks</option>
														<option value="3">3 weeks</option>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label for="asdf" class="control-label col-sm-2">Lock account?</label>
												<div class="col-sm-10">
													<a href="more-locked.html" class="btn btn-danger">Lock account now</a>
												</div>
											</div>
											<div class="form-actions">
												<input type="submit" class='btn btn-primary' value="Save">
												<input type="reset" class='btn' value="Discard changes">
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>



