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
								<form action="#" method="POST" class='form-vertical'>
							<div class="box-content">
									
									
									
											
											<?php 
											$query = "SELECT menu,menu_id,privilegio_id,path_option FROM menu WHERE parent_id=0 ORDER BY position";
											$results=$database->get_results($query);
											foreach ($results as $row) {
                							$menu_name="<span class='label label-default'>".strtoupper($row['menu'])."</span>";
                echo "<div class=\"form-group\" >
                    <label class=\"control-label col-sm-4\" style='border-top:1px solid #cccccc'> ".$menu_name."
                    ".$row['privilegio_id']." ".$row['menu_id']."</label>
                    <div class=\"col-sm-8\" style='border-top:1px solid #cccccc'>
                        <div class=\"".$row['menu_id']."\">
                            <label>    
                                <input type=\"checkbox\" checked name=\"".$row['menu_id']."\">Mostrar
                            </label>
                            <label>
                            &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;".$row['path_option']."
                            </label>
                        </div>
                    </div>
                </div>  ";
											$menu->showSecurityListCategory($row['menu_id'],0,NULL,NULL,1);
											}
											?>
											
									
									<div class="form-actions">
										<button type="submit" class="btn btn-primary">Save changes</button>
										<button type="button" class="btn">Cancel</button>
									</div>
							</div>
								</form>
						</div>
					</div>
				</div>