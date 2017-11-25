<!DOCTYPE html>
<html>

<head>
     <meta charset="UTF-8">
    <title>DMS | Request for Payments Form</title> 
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link href="<?php echo base_url(); ?>application_resources/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="<?php echo base_url(); ?>application_resources/vendors/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>application_resources/css/styles/black.css" rel="stylesheet" type="text/css" id="colorscheme" />
    <link href="<?php echo base_url(); ?>application_resources/css/panel.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>application_resources/css/metisMenu.css" rel="stylesheet" type="text/css"/>
    <!-- end of global css -->
    <!--page level css -->
    <!-- daterange picker -->
    <link href="<?php echo base_url(); ?>application_resources/vendors/daterangepicker/css/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!--select css-->
    <link href="<?php echo base_url(); ?>application_resources/vendors/select2/select2.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>application_resources/vendors/select2/select2-bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>application_resources/css/uploadimage.css" />
    <!--clock face css-->
    <link href="<?php echo base_url(); ?>application_resources/vendors/iCheck/skins/all.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>application_resources/css/pages/formelements.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>application_resources/css/styles/black.css" rel="stylesheet" type="text/css" id="colorscheme" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application_resources/vendors/datatables/css/dataTables.bootstrap.css" />
    <link href="<?php echo base_url(); ?>application_resources/css/pages/tables.css" rel="stylesheet" type="text/css" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->      
    <!-- end of global css -->    
    <!--page level css -->
    <link href="<?php echo base_url(); ?>application_resources/vendors/dropzone-master/downloads/css/dropzone.css" rel="stylesheet" />
    <!--end of page level css-->
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
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="users" data-size="18" data-c="#ffffff" data-hc="#ffffff" data-loop="true"></i>
                                <span class="title">User Management</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
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
                        <li class="active">    
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
                                <li class="active">
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
                <h1>Request for Payments</h1>                 
            </section>
        <!-- Main content -->
           <section class="content paddingleft_right15">
                <div class="row">
                    <div class="panel panel-primary ">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <i class="livicon" data-name="settings" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                Request for Payments List
                            </h4>
                            <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                            </span>
                        </div>
                        <br />
                        <div class="panel-body">
                            <table class="table table-bordered " id="table">
                                <thead>
                                        <tr>
                                        <th>Supplier/Client</th>
                                        <th>Reference Number</th>
                                        <th>Voucher Number</th>
                                        <th>
                                            Image Name
                                        </th>
                                        <th>
                                            Uploaded By
                                        </th>
                                        
                                        <th>Date Upload</th>
                                        <th>Actions</th>
                                        </tr>
                                    </thead>
                                <tbody>
                                    <?php if(count($request)):?>
                                        <?php foreach($request as $request): ?>
                                    <tr>
                                        <td><?php echo $request->req_client_supplier; ?></td>
                                        <td><?php echo $request->req_reference_number; ?></td>
                                        <td><?php echo $request->req_check_voucher_number; ?></td>
                                        
                                        <td>
                                           <?php echo $request->req_uploaded_img; ?>
                                        </td>

                                        <td>
                                           Jeff
                                        </td>
                                        
                                        <td>
                                           <?php echo $request->req_date_created; ?>
                                        </td>
                                        <td>
                                            <?php echo anchor('Crud' , 'Print' , ['class' => 'btn btn-primary']);?>
                                            <?php echo anchor('Crud' , 'Update' , ['class' => 'btn btn-primary']);?>
                                            <?php echo anchor('Crud' , 'Delete' , ['class' => 'btn btn-primary']);?>
                                        </td>
                                    </tr>
                                    <?php endforeach;?> 
                                    <?php else: ?>
                                        <tr>
                                            <td> No Records Found! </td>
                                        </tr>
                                    <?php endif; ?>                            
                                    </tbody>
                            </table>
            </section>
            </aside>
  <aside class="right-side">
            <!-- Main content -->
            <!-- Main content -->
            <form role="form" id="requestform" method="POST" class="form-horizontal">           
			<div class="row">
			<div class="col-lg-5">
                <div class="container">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Upload Image</label>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        Browse<input accept="image/*" enctype="multipart/form-data" type="file" id="imgInp" name="imgInp"> 
                                    </span>
                                </span>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <img id='img-upload' name="img-upload"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                        <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i>
                        Request for Payments
                        </h3>
                        <span class="pull-right">
                        <i class="fa fa-fw fa-chevron-up clickable"></i>
                        </span>                        
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="clientsupplier">Client/Supplier:</label>
                                        <div class="col-md-9">
                                        <input type="text" class="form-control" id="clientsupplier" name="clientsupplier" placeholder="Client/Supplier Name" required></div>
                                    </div>
									<div class="form-group">
										<label class="control-label col-md-3" for="daterequested">
											Date Requested:
										</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-calendar"></i>
											</div>
												<input type="text" id="daterequested" name="daterequested" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required/>
										</div>
									</div>
                                    <div class="form-group">
										<label class="control-label col-md-3" for="referencenumber">Reference Number:</label>
										<div class="col-md-9">
											<input type="text" class="form-control" id="referenceNumber" name="referencenumber" placeholder="Reference Number" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3" for="checkvouchernumber">Check Voucher Number:</label>
										<div class="col-md-9">
											<input type="text" class="form-control" id="checkvouchernumber" name="checkvouchernumber" placeholder="Check Voucher Number" required>
										</div>
									</div>
									<div class="form-group">
                                        <label class="control-label col-md-3" for="dateissued">
                                            Date Issued:
                                        </label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                                <input type="text" id="dateissued" name="dateissued" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required/>
                                        </div>
                                    </div>
									<div class="form-group">
										<label class="control-label col-md-3" for="preparedby">Prepared By:</label>
										<div class="col-md-9">
											<input type="text" class="form-control" id="preparedby" name="preparedby" placeholder="Prepared By" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3" for="requestedamount">Requested Amount:</label>
										<div class="col-md-9">
											<input type="text" class="form-control" id="requestedamount" name="requestedamount" placeholder="Requeted Amount" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3" for="satelliteoffice">Satellite Office:</label>
										<div class="col-md-9">
											<input type="text" class="form-control" id="satelliteoffice" name="satelliteoffice" placeholder="Satellite Office" required>
										</div>
									</div>
									<div class="form-group">
                                        <label class="control-label col-md-3">Types of Loan:</label>
                                        <div class="col-md-9">
                                            <select class="form-control" id="typesofloan" name="typesofloan">
                                                <option value="Expense">Expense</option>
												<option value="CA">CA</option>
                                            </select>
                                        </div>
                                    </div>
							</div>
                            <div class="form-group">
                                <div class="col-md-offset-10 col-md-20">
                                    <button type="submit" class="btn btn-primary">Submit</button>                                                   
                                </div>
                            </div>
                            </div>
                    </div>
                </div>
            </div>
                                        <!-- END FORM WIZARD WITH VALIDATION --> </div>
                                </div>
                                </form>
								</aside>
                                <!--main content end--> </div>
                        </div>                   
                </div>
                <!--row end-->
                <!--main content ends--> </section>
			</section>

		</div>
        <!-- right-side -->

     <script src="<?php echo base_url(); ?>application_resources/js/jquery-2.2.4.min.js"></script>
    <script src="<?php echo base_url()?>application_resources/js/index.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>application_resources/js/bootstrap.min.js" type="text/javascript"></script>
    <script>
    $(document).ready(function()
    {
        $('#requestform').submit(function(e)
        {

            var form_data = 
            {
                imgInp      : $('#imgInp').val(),
                clientsupplier   : $('#clientsupplier').val(),
                daterequested  : $('#daterequested').val(),
                referencenumber    : $('#referencenumber').val(),
                checkvouchernumber         : $('#checkvouchernumber').val(),
                dateissued      : $('#dateissued').val(),
                preparedby   : $('#preparedby').val(),
                requestedamount    : $('#requestedamount').val(),
                satelliteoffice    : $('#satelliteoffice').val(),
                typesofloan    : $('#typesofloan').val(),
            }

            var   imgInp      = $('#imgInp').val();
            var clientsupplier   = $('#clientsupplier').val();
            var    daterequested  = $('#daterequested').val();
            var    referencenumber    = $('#referencenumber').val();
            var    checkvouchernumber         = $('#checkvouchernumber').val();
            var    dateissued      = $('#dateissued').val();
            var   preparedby   = $('#preparedby').val();
            var    requestedamount    = $('#requestedamount').val();
            var    satelliteoffice    = $('#satelliteoffice').val();
            var    typesofloan    = $('#typesofloan').val();
            var formData    = new FormData($('#requestform')[0]);

            e.preventDefault();
            $.ajax
            ({
                url : "<?php echo base_url('addDMS/addRequest');?>",
                type : 'POST',
                data : formData,
                async : false,
                cache : false,
                contentType : false,
                processData : false,
                success: function(data)
                {
                    alert('Successfully Added!!!');
                    window.location.reload();
                    
                }
            });
        });
    });
</script>
    
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>
    <!-- global js -->
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
    <!-- InputMask -->
    <script src="<?php echo base_url(); ?>application_resources/vendors/input-mask/jquery.inputmask.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>application_resources/vendors/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>application_resources/vendors/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
    <!-- date-range-picker -->
    <script src="<?php echo base_url(); ?>application_resources/vendors/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>application_resources/vendors/select2/select2.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>application_resources/vendors/iCheck/icheck.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>application_resources/vendors/iCheck/demo/js/custom.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>application_resources/vendors/autogrow/js/jQuery-autogrow.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>application_resources/vendors/maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>application_resources/vendors/card/jquery.card.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>application_resources/js/pages/formelements.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>application_resources/js/uploadimage.js" type="text/javascript"></script>   
    <!-- end of global js -->
    <!-- begining of page level js -->  
</body>
</html>
