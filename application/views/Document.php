
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>DMS | Document</title> 
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
    <link rel="stylesheet" href="<?php echo base_url(); ?>application_resources/css/uploadimage.css" />
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
                        <li class="active">
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
                <h1>Documents</h1>                 
            </section>
		<!-- Main content -->
           <section class="content paddingleft_right15">
                <div class="row">
                    <div class="panel panel-primary ">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <i class="livicon" data-name="settings" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                Document's List
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
                                        <th>Document</th>
                                        <th>Document Title</th>
										<th>Types of Document</th>
                                        <th>
                                            Owner
                                        </th>
                                        <th>Uploaded By</th>
                                        <th>Date Uploaded</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
								<tbody>
                                <?php if(count($document)):?>
                                        <?php foreach($document as $document): ?>
                                    <tr>
                                        <td><?php echo $document->document; ?></td>
                                        <td><?php echo $document->document_title; ?></td>
                                        <td><?php echo $document->types_of_document; ?></td>
                                        <td><?php echo $document->owner; ?></td>
                                        <td>Jeff</td>
                                        <td>
                                           <?php echo $document->doc_date_uploaded; ?>
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
            <form role="form" id="documentform" method="POST" class="form-horizontal">            
            <div class="row">
            <div class="col-lg-5">
                <div class="container">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Upload Document</label>
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
                        Metadata
                        </h3>
                        <span class="pull-right">
                        <i class="fa fa-fw fa-chevron-up clickable"></i>
                        </span>                        
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">                                   
                                        <div class="form-group">
                                            <label class="control-label col-md-3" for="documenttitle">Document Title:</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="documenttitle" name="documenttitle" placeholder="Title" required>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                                <label class="control-label col-md-3" for="description">Document Description:</label>
                                                                <div class="col-md-9">
                                                                    <textarea rows="3" class="form-control" id="description" name="description" placeholder="Description" required></textarea>
                                                                </div>
                                        </div>
                                        <div class="form-group">
                                                                <label class="control-label col-md-3">Types of Document:</label>
                                                                <div class="col-md-9">
                                                                    <select class="form-control" id="typesofdocument" name="typesofdocument" required>
                                                                        <option value="Applicant's Form">Applicant's Form</option>
                                                                        <option value="Member Forms">Member Forms</option>
                                                                        <option value="Employee's Form">Employee's Form</option>
                                                                    </select>
                                                                </div>
                                                            </div>                                  
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="owner">Owner:</label>
                                        <div class="col-md-9">
                                        <input type="text" class="form-control" id="owner" name="owner" placeholder="Name" required></div>
                                    </div>
                                    <div class="box-body">
                                    <!-- Date dd/mm/yyyy -->        
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


                                <!--main content end-->                
                <!--row end-->
   
    <script src="<?php echo base_url(); ?>application_resources/js/jquery-2.2.4.min.js"></script>
    <script src="<?php echo base_url()?>application_resources/js/index.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>application_resources/js/bootstrap.min.js" type="text/javascript"></script>
    <script>
    $(document).ready(function()
    {
        $('#documentform').submit(function(e)
        {

            var form_data = 
            {
                imgInp      : $('#imgInp').val(),
                documenttitle   : $('#documenttitle').val(),
                description  : $('#description').val(),
                typesofdocument    : $('#typesofdocument').val(),
                owner         : $('#owner').val(),
            }

             var   imgInp      = $('#imgInp').val();
             var documenttitle   = $('#documenttitle').val();
             var   description  = $('#description').val();
             var   typesofdocument    = $('#typesofdocument').val();
             var   owner         = $('#owner').val();
            var formData    = new FormData($('#documentform')[0]);

            e.preventDefault();
            $.ajax
            ({
                url : "<?php echo base_url('addDMS/addDocument');?>",
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
    <script src="<?php echo base_url(); ?>application_resources/js/uploadimage.js" type="text/javascript"></script>
    <!-- end of page level js -->>
  
  
</body>
</html>