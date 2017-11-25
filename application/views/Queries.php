<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>DMS | Queries</title>
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
	<link rel="<?php echo base_url(); ?>application_resources/stylesheet" href="css/pages/tab.css" />
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
                        <li class="active">
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

            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h1>Queries</h1>
            </section>
            <!--section ends-->
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            
                            <div class="panel-body">
                                <div class="bs-example">
                                    <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                                        <li class="active">
                                            <a href="#applicant" data-toggle="tab">Applicant's Form</a>
                                        </li>
                                        <li>
                                            <a href="#member" data-toggle="tab">Member's Form</a>
                                        </li>
                                        <li>
                                            <a href="#disciplinary" data-toggle="tab">Disciplinary Records</a>
                                        </li>
										<li>
                                            <a href="#benefit" data-toggle="tab">Benefits Form</a>
                                        </li>
										<li>
                                            <a href="#finance" data-toggle="tab">Finance Invoice</a>
                                        </li>
										<li>
                                            <a href="#dtr" data-toggle="tab">DTR</a>
                                        </li>
										<li>
                                            <a href="#loan" data-toggle="tab">Loans</a>
                                        </li>
										<li>
                                            <a href="#req" data-toggle="tab">Request for Payments</a>
                                        </li>
										<li>
                                            <a href="#clearance" data-toggle="tab">Clearance/Waiver Form</a>
                                        </li>
										<li>
                                            <a href="#quit" data-toggle="tab">Quit Claim Form</a>
                                        </li>
										<li>
                                            <a href="#liquid" data-toggle="tab">Liquidations</a>
                                        </li>
										<li>
                                            <a href="#annual" data-toggle="tab">Annual PE</a>
                                        </li>
                                    </ul>
									<div class="panel panel-primary filterable">
									<div class="panel-heading clearfix  ">
                                <div class="panel-title pull-left">
                                       <div class="caption">
                                    <i class="livicon" data-name="camera-alt" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Queries
                                </div>
                                    
                                </div>
                                <div class="tools pull-right"></div>

                            </div>
                                    <div id="myTabContent" class="tab-content">
                                        <div class="panel-body">
                                <div class="bs-example">
                             
                                    <div id="myTabContent" class="tab-content">

                                        <div class="tab-pane fade active in" id="applicant"> 
                                        <p> 
                                        <?php echo anchor('c_superadmin/Applicants_Form' , 'Add Applicant' , ['class' => 'btn btn-primary']);?>
                                        </p>  

									<table class="table table-striped table-bordered" id="table2">
                                    <thead>
                                        <tr>
                                        <th>Firstname</th>
                                        <th>Middlename</th>
                                        <th>Lastname</th>
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
                                    <?php if(count($posts)):?>
                                        <?php foreach($posts as $post): ?>
									<tr>
                                        <td><?php echo $post->app_first_name; ?></td>
                                        <td><?php echo $post->app_middle_name; ?></td>
                                        <td><?php echo $post->app_last_name; ?></td>
                                        
                                        <td>
                                           <?php echo $post->app_uploaded_img; ?>
                                        </td>

                                        <td>
                                           Jeff
                                        </td>
                                        
                                        <td>
                                           <?php echo $post->app_date_created; ?>
                                        </td>
                                        <td>
                                            <?php echo anchor('Crud' , 'Print' , ['class' => 'btn btn-primary']);?>
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
									
                                        </div>
                                        <div class="tab-pane" id="member"> 
                                        <p> 
                                        <?php echo anchor('c_superadmin/Member_File_Form' , 'Add member' , ['class' => 'btn btn-primary']);?>
                                        </p>  

                                    <table class="table table-striped table-bordered" id="table2">
                                    <thead>
                                        <tr>
                                        <th>Firstname</th>
                                        <th>Middlename</th>
                                        <th>Lastname</th>
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
                                    <?php if(count($member)):?>
                                        <?php foreach($member as $member): ?>
                                    <tr>
                                        <td><?php echo $member->mem_first_name; ?></td>
                                        <td><?php echo $member->mem_middle_name; ?></td>
                                        <td><?php echo $member->mem_last_name; ?></td>
                                        
                                        <td>
                                           <?php echo $member->mem_uploaded_img; ?>
                                        </td>

                                        <td>
                                           Jeff
                                        </td>
                                        
                                        <td>
                                           <?php echo $member->mem_date_created; ?>
                                        </td>
                                        <td>
                                            <?php echo anchor('Crud' , 'Print' , ['class' => 'btn btn-primary']);?>
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
                                    
                                        </div>
                                        <div class="tab-pane" id="disciplinary"> 
                                        <p> 
                                        <?php echo anchor('c_superadmin/Disciplinary_Records_Form' , 'Add disciplinary' , ['class' => 'btn btn-primary']);?>
                                        </p>  

                                    <table class="table table-striped table-bordered" id="table2">
                                    <thead>
                                        <tr>
                                        <th>Firstname</th>
                                        <th>Middlename</th>
                                        <th>Lastname</th>
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
                                    <?php if(count($disciplinary)):?>
                                        <?php foreach($disciplinary as $disciplinary): ?>
                                    <tr>
                                        <td><?php echo $disciplinary->dis_first_name; ?></td>
                                        <td><?php echo $disciplinary->dis_middle_name; ?></td>
                                        <td><?php echo $disciplinary->dis_last_name; ?></td>
                                        
                                        <td>
                                           <?php echo $disciplinary->dis_uploaded_img; ?>
                                        </td>

                                        <td>
                                           Jeff
                                        </td>
                                        
                                        <td>
                                           <?php echo $disciplinary->dis_date_created; ?>
                                        </td>
                                        <td>
                                            <?php echo anchor('Crud' , 'Print' , ['class' => 'btn btn-primary']);?>
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
                                    
                                        </div>
                                        <div class="tab-pane" id="benefit"> 
                                        <p> 
                                        <?php echo anchor('c_superadmin/Benefit_Form' , 'Add benefit' , ['class' => 'btn btn-primary']);?>
                                        </p>  

                                    <table class="table table-striped table-bordered" id="table2">
                                    <thead>
                                        <tr>
                                        <th>Firstname</th>
                                        <th>Middlename</th>
                                        <th>Lastname</th>
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
                                    <?php if(count($benefit)):?>
                                        <?php foreach($benefit as $benefit): ?>
                                    <tr>
                                        <td><?php echo $benefit->ben_first_name; ?></td>
                                        <td><?php echo $benefit->ben_middle_name; ?></td>
                                        <td><?php echo $benefit->ben_last_name; ?></td>
                                        
                                        <td>
                                           <?php echo $benefit->ben_uploaded_img; ?>
                                        </td>

                                        <td>
                                           Jeff
                                        </td>
                                        
                                        <td>
                                           <?php echo $benefit->ben_date_created; ?>
                                        </td>
                                        <td>
                                            <?php echo anchor('Crud' , 'Print' , ['class' => 'btn btn-primary']);?>
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
                                    
                                        </div>
										<div class="tab-pane" id="finance"> 
                                        <p> 
                                        <?php echo anchor('c_superadmin/Invoices_DMS' , 'Add invoice' , ['class' => 'btn btn-primary']);?>
                                        </p>  

                                    <table class="table table-striped table-bordered" id="table2">
                                    <thead>
                                        <tr>
                                        <th>Invoice number</th>
                                        <th>SOA number</th>
                                        <th>Client</th>
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
                                    <?php if(count($invoice)):?>
                                        <?php foreach($invoice as $invoice): ?>
                                    <tr>
                                        <td><?php echo $invoice->inv_invoice_number; ?></td>
                                        <td><?php echo $invoice->inv_soa_number; ?></td>
                                        <td><?php echo $invoice->inv_client; ?></td>
                                        
                                        <td>
                                           <?php echo $invoice->inv_uploaded_img; ?>
                                        </td>

                                        <td>
                                           Jeff
                                        </td>
                                        
                                        <td>
                                           <?php echo $invoice->inv_date_created; ?>
                                        </td>
                                        <td>
                                            <?php echo anchor('Crud' , 'Print' , ['class' => 'btn btn-primary']);?>
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
                                    
                                        </div>
										<div class="tab-pane" id="loan"> 
                                        <p> 
                                        <?php echo anchor('c_superadmin/Loans' , 'Add Loans' , ['class' => 'btn btn-primary']);?>
                                        </p>  

                                    <table class="table table-striped table-bordered" id="table2">
                                    <thead>
                                        <tr>
                                        <th>Firstname</th>
                                        <th>Middlename</th>
                                        <th>Lastname</th>
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
                                    <?php if(count($loan)):?>
                                        <?php foreach($loan as $loan): ?>
                                    <tr>
                                        <td><?php echo $loan->loan_first_name; ?></td>
                                        <td><?php echo $loan->loan_middle_name; ?></td>
                                        <td><?php echo $loan->loan_last_name; ?></td>
                                        
                                        <td>
                                           <?php echo $loan->loan_uploaded_img; ?>
                                        </td>

                                        <td>
                                           Jeff
                                        </td>
                                        
                                        <td>
                                           <?php echo $loan->loan_date_created; ?>
                                        </td>
                                        <td>
                                            <?php echo anchor('Crud' , 'Print' , ['class' => 'btn btn-primary']);?>
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
                                    
                                        </div>
										<div class="tab-pane" id="dtr"> 
                                        <p> 
                                        <?php echo anchor('c_superadmin/DTR_Finance' , 'Add DTR' , ['class' => 'btn btn-primary']);?>
                                        </p>  

                                    <table class="table table-striped table-bordered" id="table2">
                                    <thead>
                                        <tr>
                                        <th>Firstname</th>
                                        <th>Middlename</th>
                                        <th>Lastname</th>
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
                                    <?php if(count($dtr)):?>
                                        <?php foreach($dtr as $dtr): ?>
                                    <tr>
                                        <td><?php echo $dtr->dtr_first_name; ?></td>
                                        <td><?php echo $dtr->dtr_middle_name; ?></td>
                                        <td><?php echo $dtr->dtr_last_name; ?></td>
                                        
                                        <td>
                                           <?php echo $dtr->dtr_uploaded_img; ?>
                                        </td>

                                        <td>
                                           Jeff
                                        </td>
                                        
                                        <td>
                                           <?php echo $dtr->dtr_date_created; ?>
                                        </td>
                                        <td>
                                            <?php echo anchor('Crud' , 'Print' , ['class' => 'btn btn-primary']);?>
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
                                    
                                        </div>
										<div class="tab-pane" id="req"> 
                                        <p> 
                                        <?php echo anchor('c_superadmin/Request' , 'Add Request' , ['class' => 'btn btn-primary']);?>
                                        </p>  

                                    <table class="table table-striped table-bordered" id="table2">
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
                                    
                                        </div>
										<div class="tab-pane" id="clearance"> 
                                        <p> 
                                        <?php echo anchor('c_superadmin/Clearance' , 'Add Clearance' , ['class' => 'btn btn-primary']);?>
                                        </p>  

                                    <table class="table table-striped table-bordered" id="table2">
                                    <thead>
                                        <tr>
                                        <th>Firstname</th>
                                        <th>Middlename</th>
                                        <th>Lastname</th>
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
                                    <?php if(count($clearance)):?>
                                        <?php foreach($clearance as $clearance): ?>
                                    <tr>
                                        <td><?php echo $clearance->cle_first_name; ?></td>
                                        <td><?php echo $clearance->cle_middle_name; ?></td>
                                        <td><?php echo $clearance->cle_last_name; ?></td>
                                        
                                        <td>
                                           <?php echo $clearance->cle_uploaded_img; ?>
                                        </td>

                                        <td>
                                           Jeff
                                        </td>
                                        
                                        <td>
                                           <?php echo $clearance->cle_date_created; ?>
                                        </td>
                                        <td>
                                            <?php echo anchor('Crud' , 'Print' , ['class' => 'btn btn-primary']);?>
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
                                    
                                        </div>
										<div class="tab-pane" id="quit"> 
                                        <p> 
                                        <?php echo anchor('c_superadmin/Quit' , 'Add Quit' , ['class' => 'btn btn-primary']);?>
                                        </p>  

                                    <table class="table table-striped table-bordered" id="table2">
                                    <thead>
                                        <tr>
                                        <th>Firstname</th>
                                        <th>Middlename</th>
                                        <th>Lastname</th>
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
                                    <?php if(count($quit)):?>
                                        <?php foreach($quit as $quit): ?>
                                    <tr>
                                        <td><?php echo $quit->qui_first_name; ?></td>
                                        <td><?php echo $quit->qui_middle_name; ?></td>
                                        <td><?php echo $quit->qui_last_name; ?></td>
                                        
                                        <td>
                                           <?php echo $quit->qui_uploaded_img; ?>
                                        </td>

                                        <td>
                                           Jeff
                                        </td>
                                        
                                        <td>
                                           <?php echo $quit->qui_date_created; ?>
                                        </td>
                                        <td>
                                            <?php echo anchor('Crud' , 'Print' , ['class' => 'btn btn-primary']);?>
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
                                    
                                        </div>
										<div class="tab-pane" id="liquid"> 
                                        <p> 
                                        <?php echo anchor('c_superadmin/Liquidations' , 'Add Liquidations' , ['class' => 'btn btn-primary']);?>
                                        </p>  

                                    <table class="table table-striped table-bordered" id="table2">
                                    <thead>
                                        <tr>
                                        <th>Firstname</th>
                                        <th>Middlename</th>
                                        <th>Lastname</th>
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
                                    <?php if(count($liquidation)):?>
                                        <?php foreach($liquidation as $liquidation): ?>
                                    <tr>
                                        <td><?php echo $liquidation->liq_first_name; ?></td>
                                        <td><?php echo $liquidation->liq_middle_name; ?></td>
                                        <td><?php echo $liquidation->liq_last_name; ?></td>
                                        
                                        <td>
                                           <?php echo $liquidation->liq_uploaded_img; ?>
                                        </td>

                                        <td>
                                           Jeff
                                        </td>
                                        
                                        <td>
                                           <?php echo $liquidation->liq_date_created; ?>
                                        </td>
                                        <td>
                                            <?php echo anchor('Crud' , 'Print' , ['class' => 'btn btn-primary']);?>
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
                                    
                                        </div>
										<div class="tab-pane" id="annual"> 
                                        <p> 
                                        <?php echo anchor('c_superadmin/Annual' , 'Add Annual PE' , ['class' => 'btn btn-primary']);?>
                                        </p>  

                                    <table class="table table-striped table-bordered" id="table2">
                                    <thead>
                                        <tr>
                                        <th>Firstname</th>
                                        <th>Middlename</th>
                                        <th>Lastname</th>
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
                                    <?php if(count($annual)):?>
                                        <?php foreach($annual as $annual): ?>
                                    <tr>
                                        <td><?php echo $annual->ape_first_name; ?></td>
                                        <td><?php echo $annual->ape_middle_name; ?></td>
                                        <td><?php echo $annual->ape_last_name; ?></td>
                                        
                                        <td>
                                           <?php echo $annual->ape_uploaded_img; ?>
                                        </td>

                                        <td>
                                           Jeff
                                        </td>
                                        
                                        <td>
                                           <?php echo $annual->ape_date_created; ?>
                                        </td>
                                        <td>
                                            <?php echo anchor('Crud' , 'Print' , ['class' => 'btn btn-primary']);?>
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
				
				
                <!--main content ends-->
            </section>
            <!-- content -->
        </aside>
        <!-- right-side -->
    </div>
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>

    <script src="<?php echo base_url(); ?>application_resources/js/jquery-2.2.4.min.js"></script>
    <script src="<?php echo base_url()?>application_resources/js/index.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>application_resources/js/bootstrap.min.js" type="text/javascript"></script>
    

    
    <!-- global js -->
    <script src="<?php echo base_url(); ?>application_resources/js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>application_resources/js/bootstrap.min.js" type="text/javascript"></script>
    <!--livicons-->
    <script src="<?php echo base_url(); ?>application_resources/vendors/livicons/minified/raphael-min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>application_resources/vendors/livicons/minified/livicons-1.4.min.js" type="text/javascript"></script>
   <script src="<?php echo base_url(); ?>application_resources/js/josh.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>application_resources/js/metisMenu.js" type="text/javascript"> </script>
    <script src="<?php echo base_url(); ?>application_resources/vendors/holder-master/holder.js" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js -->
    <script type="text/javascript">
    $(function() {
        $("[data-toggle='popover']").popover();
    });
    </script>
    <script type="text/javascript">
    $(document).ready(function() {

        $('.po-markup > .po-link').popover({
            trigger: 'hover',
            html: true, // must have if HTML is contained in popover

            // get the title and conent
            title: function() {
                return $(this).parent().find('.po-title').html();
            },
            content: function() {
                return $(this).parent().find('.po-body').html();
            },

            container: 'body',
            placement: 'right'

        });

    });
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        $(".tooltip-examples a").tooltip({
            placement: 'top'
        });
    });
    </script>
    <script type="text/javascript">
    $('#myTabContent').slimscroll({
        height: '430px',
        size: '3px',
        color: '#D84A38',
        opacity: 1

    });
    $('#slim2').slimscroll({
        height: '120px',
        size: '3px',
        color: '#35AA47',
        opacity: 1
    });
    $('#slim3').slimscroll({
        height: '100px',
        size: '3px',
        color: '#FE6A0A',
        opacity: 1
    });
    </script>
    <!-- end of page level js -->
</body>
</html>
