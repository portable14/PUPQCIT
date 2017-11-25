
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>DMS | Admin</title> 
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link href="<?php echo base_url(); ?>application_resources/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>application_resources/vendors/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>application_resources/css/styles/black.css" rel="stylesheet" type="text/css" id="colorscheme" />
    <link href="<?php echo base_url(); ?>application_resources/css/panel.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>application_resources/css/metisMenu.css" rel="stylesheet" type="text/css"/>
    <!-- font Awesome -->
    <link href="<?php echo base_url(); ?>application_resources/vendors/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>application_resources/css/styles/black.css" rel="stylesheet" type="text/css" id="colorscheme" />
    <link href="<?php echo base_url(); ?>application_resources/css/panel.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>application_resources/css/metisMenu.css" rel="stylesheet" type="text/css"/>
    <!-- end of global css -->
    <!--page level css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application_resources/vendors/datatables/css/dataTables.bootstrap.css" />
    <link href="<?php echo base_url(); ?>application_resources/css/pages/tables.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>application_resources/vendors/wizard/jquery-steps/css/wizard.css" rel="stylesheet" >
    <link href="<?php echo base_url(); ?>application_resources/vendors/wizard/jquery-steps/css/jquery.steps.css" rel="stylesheet" >
    <link href="<?php echo base_url(); ?>application_resources/vendors/jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet" />
    <!-- end of page level css -->
</head>


<body class="skin-josh">
    <header class="header">
        <a href="<?php echo base_url('c_superadmin/Dashboard'); ?>" class="logo">
            <img src="<?php echo base_url(); ?>application_resources/img/ibcp_dms.png" alt="Logo">
        </a>        
   
    <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <div>
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <div class="responsive_nav"></div>
                </a>
            </div>
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    
                    
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img data-src="holder.js/35x35/#fff:#000" width="35" class="img-circle img-responsive pull-left" height="35" alt="riot">
                            <div class="riot">
                                <div>
                                    Jeff
                                    <span>
                                        <i class="caret"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header bg-light-blue">
                                <img data-src="holder.js/90x90/#fff:#000" class="img-responsive img-circle" alt="User Image">
                                <p class="topprofiletext">Riot Zeast</p>
                            </li>
                            <!-- Menu Body -->
                            <li>
                                <a href="#">
                                    <i class="livicon" data-name="user" data-s="18"></i>
                                    My Profile
                                </a>
                            </li>
                            <li role="presentation"></li>
                            <li>
                                <a href="#">
                                    <i class="livicon" data-name="gears" data-s="18"></i>
                                    Account Settings
                                </a>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="lockscreen.html">
                                        <i class="livicon" data-name="lock" data-s="18"></i>
                                        Lock
                                    </a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo base_url('c_superadmin/index')?>">
                                        <i class="livicon" data-name="sign-out" data-s="18"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
  
  </header>
  <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->

        <aside class="left-side sidebar-offcanvas">
            <section class="sidebar ">
                <div class="page-sidebar  sidebar-nav">
                    
                    <div class="clearfix"></div>
                    <!-- BEGIN SIDEBAR MENU -->
                    <ul id="menu" class="page-sidebar-menu">
                    <br>
                        <li >
                            <a href="<?php echo base_url('c_superadmin/Dashboard')?>">
                                <i class="livicon" data-name="user-flag" data-size="18" data-c="#ffffff" data-hc="#ffffff" data-loop="true"></i>
                                <span class="title">My Profile</span>
                            </a>
                        </li>
                        <br>
                        <li class="active">
                            <a href="#">
                                <i class="livicon" data-name="users" data-size="18" data-c="#ffffff" data-hc="#ffffff" data-loop="true"></i>
                                <span class="title">User Management</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="active">
                                    <a href="<?php echo base_url('c_superadmin/Admin')?>">
                                        <i class="fa fa-user"></i>
                                        Administrator
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('c_superadmin/Guest')?>">
                                        <i class="fa fa-users"></i>
                                        Employees
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <br>
                        <li>
                            <a href="<?php echo base_url('c_superadmin/Document')?>">
                                <i class="livicon" data-name="briefcase" data-size="18" data-c="#ffffff" data-hc="#ffffff" data-loop="true"></i>
                                <span class="title">Documents</span>
                            </a>
                        </li>
                        <br>
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="briefcase" data-size="18" data-c="#ffffff" data-hc="#ffffff" data-loop="true"></i>
                                <span class="title">Applicant Forms</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="<?php echo base_url('c_superadmin/Applicants_Form'); ?>">
                                        <i class="fa fa-angle-double-right"></i>
                                       Applicant's Form
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <br>
                        <li>    
                            <a href="#">
                                <i class="livicon" data-name="briefcase" data-size="18" data-c="#ffffff" data-hc="#ffffff" data-loop="true"></i>
                                <span class="title">Member Forms</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                     <a href="<?php echo base_url('c_superadmin/Member_File_Form'); ?>">
                                        <i class="fa fa-angle-double-right"></i>
                                        Member's Forms
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('c_superadmin/Disciplinary_Records_Form'); ?>">
                                        <i class="fa fa-angle-double-right"></i>
                                        Disciplinary Records
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('c_superadmin/Benefit_Form'); ?>">
                                        <i class="fa fa-angle-double-right"></i>
                                        Benefits Forms
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('c_superadmin/Invoices_DMS'); ?>">
                                        <i class="fa fa-angle-double-right"></i>
                                        Finance Invoice
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('c_superadmin/Loans'); ?>">
                                        <i class="fa fa-angle-double-right"></i>
                                        Loans
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('c_superadmin/Request'); ?>">
                                        <i class="fa fa-angle-double-right"></i>
                                        Request for Payments
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('c_superadmin/Quit'); ?>">
                                        <i class="fa fa-angle-double-right"></i>
                                        Quit Claim Form
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <br>
                        <li>     
                            <a href="#">
                                <i class="livicon" data-name="briefcase" data-size="18" data-c="#ffffff" data-hc="#ffffff" data-loop="true"></i>
                                <span class="title">Employee's Forms</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="<?php echo base_url('c_superadmin/DTR_Finance'); ?>">
                                        <i class="fa fa-angle-double-right"></i>
                                        DTR
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('c_superadmin/Clearance'); ?>">
                                        <i class="fa fa-angle-double-right"></i>
                                        Clearance/Waiver Form
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('c_superadmin/liquidations'); ?>">
                                        <i class="fa fa-angle-double-right"></i>
                                        liquidations
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('c_superadmin/Annual'); ?>">
                                        <i class="fa fa-angle-double-right"></i>
                                        Annual PE
                                    </a>
                                </li>
                            </ul>
                        </li>        
                            </ul>

                        <br>
                        <li>
                             <a href="<?php echo base_url('c_superadmin/Queries'); ?>">
                                <i class="livicon" data-name="table" data-size="18" data-c="#ffffff" data-hc="#ffffff" data-loop="true"></i>
                                <span class="title">Queries/Report</span>
                            </a>
                        </li>
                    <!-- END SIDEBAR MENU -->
                </div>
            </section>
            <!-- /.sidebar -->
        </aside>
  <aside class="right-side">
            <!-- Main content -->
            <section class="content-header">
                <h1>Admin</h1>                 
            </section>
		<!-- Main content -->
           <section class="content paddingleft_right15">
                <div class="row">
                    <div class="panel panel-primary ">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <i class="livicon" data-name="myspace" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                Administrator's List
                            </h4>
							<span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                            </span>
                        </div>
                        <br />
                        <div class="panel-body">
                            <table class="table table-bordered " id="table">
                                <thead>
                                    <tr class="filters">
                                        <th>First Name</th>
                                        <th>Middle Name</th>
										<th>Last Name</th>
                                        <th>
                                            User E-mail
                                        </th>
                                        <th>Status</th>
                                        <th>Created At</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
								<tbody>
                                    <tr>
                                        <td>Marck Gil</td>
										<td>Cayetano</td>
                                        <td>Sena</td>
                                        <td>
                                           wikitiw2214@gmail.com
                                        </td>
                                        <td>Activated</td>
                                        <td>
                                            1 month ago
                                        </td>
                                        <td>
                                            <a href="#" data-toggle="modal" data-target="#edit_confirm">
                                                <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view admin"></i>
                                            </a>
                                            
                                        </td>
                                    </tr>
									</tbody>
                            </table>
							<!-- Modal for showing delete confirmation -->
							
							<!-- Modal for showing edit confirmation -->
							<div class="modal fade" id="edit_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
                                <div class="modal-dialog" style="overflow-y: scroll; max-height:85%;">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="user_delete_confirm_title">
                                                View Admin
                                            </h4>
                                        </div>
                                        <div class="modal-body">
											<div class="panel-heading">
                                                <h3 class="panel-title">
                                                   
                                                    Admin's Profile
                                                </h3>

                                            </div>
                                            <div class="row">
												<div class="col-lg-12">																										
													<div class="panel-body">
														<div class="form-group">
															<div class="fileinput fileinput-new" data-provides="fileinput">
																<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
																	<img data-src="<?php echo base_url(); ?>application_resources/holder.js/100%x100%" alt="..."></div>
																<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>														
															</div>
														</div>
														<div class="table-responsive">
															<table class="table table-bordered table-striped" id="users">
																<tr>
																	<td>Status</td>
																	<td>
																	<a href="#" id="status" data-type="select" data-pk="1" data-value="1" data-title="Status">Single</a>
																	</td>
																</tr>
																<tr>
																	<td>Created At</td>
																	<td>1 month ago</td>
																</tr>																
															</table>
														</div>
													</div>													
												</div>
											</div>
											<div class="panel-heading">
                                                <h3 class="panel-title">
                                                   
                                                    Admin's Access Rights
                                                </h3>
                                            </div>
											<div class="row">
												<div class="col-lg-12">																										
													<div class="panel-body">
														<div class="form-group">                                        
															<label class="checkbox-inline">
																<input type="checkbox" value="Print/Export">Print/Export</label>
															<label class="checkbox-inline">
																<input type="checkbox" value="Scan/Import">Scan/Import</label>
															<label class="checkbox-inline">
																<input type="checkbox" value="Delete">delete</label>
														</div>
														<div class="form-group">                                        
															<label class="checkbox-inline">
																<input type="checkbox">Add User</label>
															<label class="checkbox-inline">
																<input type="checkbox" value="Update User">Update User</label>
															
														</div>
													</div>
												</div>
											</div>
                                            <div class="form-group">
                                                        <div class="col-md-offset-9 col-md-20">
                                                            <input type="submit" class="btn btn-primary" value="Save">
                                                            </div>
                                            </div>
										</div>
									</div>
								</div>
							</div>
						</div>						
					</div>                
				</div>
				<section class="content">
                <!--main content-->
                <div class="row">                    
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="user-add" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Add Admin
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <!--main content-->
                                <div class="row">

                                    <div class="col-md-12">
                                        <h3></h3>

                                        <!-- BEGIN FORM WIZARD WITH VALIDATION -->
                                        <form class="form-wizard" id="addAdmin" method="POST">
                                            <h1 class="hidden-xs">Admin's Profile</h1>
											<section>
                                                <h2 class="hidden">&nbsp;</h2>
												<div class="form-group">
													<div class="col-lg-3">
														<div class="fileinput fileinput-new" data-provides="fileinput">
															<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
																<img data-src="<?php echo base_url(); ?>application_resources/holder.js/100%x100%" alt="..."></div>
															<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
															<div>
																<span class="btn btn-default btn-file">
																	<span class="fileinput-new">Select image</span>
																	<span class="fileinput-exists">Change</span>
																	<input type="file" name="imgAdmin" id="imgAdmin" class="form-control required"></span>
																<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
                                                    <label for="name">First name *</label>
                                                    <input id="firstName" name="firstName" placeholder="Enter your First name"type="text" class="form-control required">
													</div>
													<div class="col-lg-3">
                                                    <label for="email">Gender</label>
                                                    <select id="gender" name="gender" type="text" class="form-control required" >
                                                        <option value="Male">MALE</option>
                                                        <option value="Female">FEMALE</option>
                                                    </select>
													</div>
													<div class="col-lg-6">
													<label for="middleName">Middle name *</label>
                                                    <input id="middleName" name="middleName" type="text" placeholder=" Enter your Middle name" class="form-control">
													</div>
													<div class="col-lg-6">
													<label for="surname">Last name *</label>
                                                    <input id="surName" name="surName" type="text" placeholder=" Enter your Last name" class="form-control required">
													</div>
													<div class="col-lg-3">
                                                    <label>Contact No.</label>
                                                    <input id="contactNumber" name="contactNumber" type="text" placeholder=" Enter your Contact Number" class="form-control required">
													</div>													
												</div>
												<div class="col-lg-12">
													<div class="col-lg-6">
                                                    <label for="email">Email *</label>
                                                    <input id="email" name="email" placeholder="Enter your Email" type="text" class="form-control required email">
													</div>													
													<div class="col-lg-6">																									
														<label for="address">Address *</label>
														<input id="address" name="address" placeholder="Enter your Address" type="text" class="form-control required">																							
													</div>
												</div>
												<div class="form-group">
												<div class="col-lg-12">
													<label>Terms & Condition</label>
													<div class="panel panel-white">														
														<div class="panel-body">
															<p>(*) Mandatory</p>
															<div class="col-lg-12">
															
															<input id="acceptTerms" name="acceptTerms" type="checkbox" class="required">
															<label for="acceptTerms">I have read terms and conditions</label>
															<h2 class="hidden">&nbsp;</h2> 
														</div>
														</div>														
													</div>
												</div>
												</div>
                                            </section>
                                          
                                            <h1 class="hidden-xs">Admin's Profile Details</h1>
											<section>
												
                                                <h2 class="hidden">&nbsp;</h2>
												
                                                <div class="form-group">
                                                    <label for="userName">User name *</label>
                                                    <input id="userName" name="userName" type="text" placeholder="Enter your name" class="form-control required"></div>
                                                <div class="form-group">
                                                    <label for="password">Password *</label>
                                                    <input id="password" name="password" type="password" placeholder="Enter your password" class="form-control required"></div>
                                                <div class="form-group">
                                                    <label for="confirm">Confirm Password *</label>
                                                    <input id="confirm" name="confirm" type="password" placeholder="Confirm your password " class="form-control required"></div>
                                                
                                                
                                            </section>
                                            
                                            <h1>Access Rights</h1>

                                            <section>												
                                                <div class="row">
												<div class="col-lg-12">																										
													<div class="panel-body">
														<div class="form-group">                                        
															<label class="checkbox-inline">
																<input id="checkbox1" name="checkbox1" type="checkbox" value="Print/Export">Print/Export</label>
															<label class="checkbox-inline">
																<input id="checkbox1" name="checkbox1" type="checkbox" value="Scan/Import">Scan/Import</label>
															<label class="checkbox-inline">
																<input id="checkbox1" name="checkbox1" type="checkbox" value="Delete">Delete</label>
														</div>
														<div class="form-group">                                        
															<label class="checkbox-inline">
																<input id="checkbox1" name="checkbox1" type="checkbox" value="Add User">Add User</label>
															<label class="checkbox-inline">
																<input id="checkbox1" name="checkbox1" type="checkbox" value="Delete User">Delete User</label>
															
														</div>
													</div>
												</div>
											</div>                                                         
                                            </section>
                                        </form>
                                        <!-- END FORM WIZARD WITH VALIDATION --> </div>
                                </div>
                                <!--main content end--> </div>
                        </div>                   
                </div>
                <!--row end-->
                <!--main content ends--> </section>
			</section>
			</aside>


                                <!--main content end-->
                            </div>
                        </div>                   
                <!--row end-->
   

   <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>

    <script src="<?php echo base_url(); ?>application_resources/js/jquery-2.2.4.min.js"></script>
    <script src="<?php echo base_url()?>application_resources/js/index.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>application_resources/js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function()
        {
            $('#addAdmin').submit(function(e)
            {
                var form_data = new FormData($('#addAdmin')[0]);
                e.preventDefault();
                $.ajax
                ({
                    url: "<?php echo base_url('admin/add_admin');?>",
                    type:"POST",
                    data: form_data,
                    async: false,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(data)
                    {
                        alert('Successfully Added!!!');
                    },
                });
            });
        });
    </script>

    <!-- global js -->
    <script src="<?php echo base_url(); ?>application_resources/js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>application_resources/js/bootstrap.min.js" type="text/javascript"></script>
    <!--livicons-->
    <script src="<?php echo base_url(); ?>application_resources/vendors/livicons/minified/raphael-min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>application_resources/vendors/livicons/minified/livicons-1.4.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>application_resources/js/josh.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>application_resources/js/metisMenu.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>application_resources/vendors/holder-master/holder.js" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js -->
    <script type="text/javascript" src="<?php echo base_url(); ?>application_resources/vendors/datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>application_resources/vendors/datatables/dataTables.bootstrap.js"></script>
    <script>
    $(document).ready(function() {
        $('#table').dataTable();
    });
    </script>
    <script type="text/javascript" src="<?php echo base_url(); ?>application_resources/vendors/wizard/jquery-steps/js/jquery.validate.min.js"></script>
    <script  src="<?php echo base_url(); ?>application_resources/vendors/wizard/jquery-steps/js/additional-methods.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>application_resources/vendors/wizard/jquery-steps/js/wizard.js"></script>
    <script src="<?php echo base_url(); ?>application_resources/vendors/wizard/jquery-steps/js/jquery.steps.js"></script>
    <script src="<?php echo base_url(); ?>application_resources/vendors/wizard/jquery-steps/js/form_wizard.js"></script>
    <script src="<?php echo base_url(); ?>application_resources/js/pages/formwizard.js"></script>
    <script src="<?php echo base_url(); ?>application_resources/vendors/jasny-bootstrap/js/jasny-bootstrap.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script  src="<?php echo base_url(); ?>application_resources/vendors/jasny-bootstrap/js/jasny-bootstrap.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>application_resources/vendors/x-editable/jquery.mockjax.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>application_resources/vendors/x-editable/bootstrap-editable.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>application_resources/js/pages/user_profile.js" type="text/javascript"></script>
    <!-- end of page level js -->>
  
  
</body>
</html>