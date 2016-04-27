	<div class="row">
					<div class="col-sm-12">
						<div class="box">
							<!-- <div class="box-title">
								<h3>
									<i class="fa fa-edit"></i>Roles</h3>
							</div> -->
							<div class="form-group">
										<label for="select" class="control-label col-sm-2">Rol</label>
										<div class="col-sm-10">
											<select name="select" id="select" class='form-control'>
												<?php

												$query = "SELECT role_id,role from role WHERE role_id>1 ORDER BY role_id";
												$results = $database->get_results($query);
												foreach ($results as $result) {
    												echo "<option value=\"".$result['role_id']."\">".$result['role']."</option>";
    											}
												?>
											
												
											</select>
										</div>
							</div>
									<br><br>
							<div class="box-content">
								<form action="#" method="POST" class='form-vertical'>
									 
									
									
											
											<?php $menu->showSecurityListCategory(0,0,NULL,NULL,1);?>
											
									
									<div class="form-actions">
										<button type="submit" class="btn btn-primary">Save changes</button>
										<button type="button" class="btn">Cancel</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>