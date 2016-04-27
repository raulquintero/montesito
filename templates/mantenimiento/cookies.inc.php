 
 <div class="container">
         

            <!-- left, vertical navbar & content -->
            <div class="row">



<div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li>
                            <a href="index.html"><i class="icon-chevron-right"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="calendar.html"><i class="icon-chevron-right"></i> Calendar</a>
                        </li>
                        <li>
                            <a href="stats.html"><i class="icon-chevron-right"></i> Statistics (Charts)</a>
                        </li>
                        <li>
                            <a href="form.html"><i class="icon-chevron-right"></i> Forms</a>
                        </li>
                        <li class="active">
                            <a href="tables.html"><i class="icon-chevron-right"></i> Tables</a>
                        </li>
                        <li>
                            <a href="buttons.html"><i class="icon-chevron-right"></i> Buttons & Icons</a>
                        </li>
                        <li>
                            <a href="interface.html"><i class="icon-chevron-right"></i> UI & Interface</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-success pull-right">731</span> Orders</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-success pull-right">812</span> Invoices</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-info pull-right">27</span> Clients</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-info pull-right">1,234</span> Users</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-info pull-right">2,221</span> Messages</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-info pull-right">11</span> Reports</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-important pull-right">83</span> Errors</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-warning pull-right">4,231</span> Logs</a>
                        </li>
                    </ul>
                </div>
                <!--/span-->           


                <div class="span9" id="content">


                    <div class="row-fluid">
                        
                        	<div class="navbar">
                            	<div class="navbar-inner">
	                                <ul class="breadcrumb">
	                                    <i class="icon-chevron-left hide-sidebar"><a href='#' title="Hide Sidebar" rel='tooltip'>&nbsp;</a></i>
	                                    <i class="icon-chevron-right show-sidebar" style="display:none;"><a href='#' title="Show Sidebar" rel='tooltip'>&nbsp;</a></i>
	                                    <li>
	                                        <a href="/">HOME</a> <!--span class="divider">/</span-->	
	                                    </li>
	                                    <li>
	                                        <a href="#"> <?php echo $breadcrumb ?> </a> 
	                                    </li>

	                                </ul>
                            	</div>
                        	</div>
                    	</div>


                    
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table class="table">
						              <thead>
						                <tr>
						                  <th>#</th>
						                  <th>Metodo</th>
						                  <th>Valor</th>
						                  <th>Username</th>
						                </tr>
						              </thead>
						              <tbody>
						                <tr>
						                  <td>1</td>
						                  <td>$login->getName()</td>
						                  <td><?php echo $login->getName(); ?></td>
						                  <td>@mdo</td>
						                </tr>
						                <tr>
						                  <td>1</td>
						                  <td>$login->getHomePage()</td>
						                  <td><?php echo $login->getHomePage(); ?></td>
						                  <td>@mdo</td>
						                </tr>
						                <tr>
						                  <td>1</td>
						                  <td>$login->getLoginSession()</td>
						                  <td><?php echo $login->getLoginSession(); ?></td>
						                  <td>@mdo</td>
						                </tr>
						                <tr>
						                  <td>2</td>
						                  <td>$login->getUserActive()</td>
						                  <td><?php echo $login->getUserActive(); ?></td>
						                  <td>@fat</td>
						                </tr>
						                <tr>
						                  <td>3</td>
						                  <td>$login->getRole()</td>
						                  <td><?php echo $login->getRole(); ?></td>
						                  <td>@twitter</td>
						                </tr>
						                <tr>
						                  <td>3</td>
						                  <td>$login->getPersonId()</td>
						                  <td><?php echo $login->getPersonId(); ?></td>
						                  <td>@twitter</td>
						                </tr>
						                <tr>
						                  <td>3</td>
						                  <td>$login->getUserName()</td>
						                  <td><?php echo $login->getUserName(); ?></td>
						                  <td>@twitter</td>
						                </tr>
						              </tbody>
						            </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
<?php 
 echo "<br><br>";          // ********DEBUG**********
 foreach ($_SESSION as $k => $v) { echo "<br>[$k] => $v \n";}


    
 ?>
                   
           

                  

                   

                    

                

                </div>
















            </div>
        </div>