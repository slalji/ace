<body class="no-skin">
<div id="navbar" class="navbar navbar-default ace-save-state">
    <div class="navbar-container ace-save-state" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
            <span class="sr-only">Toggle sidebar</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>
        </button>

        <div class="navbar-header pull-left">
            <a href="index.html" class="navbar-brand">
                <small>
                    <i class="fa fa-leaf"></i>
                    Boresha Maisha Admin
                </small>
            </a>
        </div>

        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">

<!-- user info -->
                <li class="light-blue dropdown-modal">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <span><i class="fa fa-user-secret fa-5x"></i></span>
								<span class="user-info">
									<small>Welcome,</small><?php echo ucfirst($_SESSION['fullname']);?>

								</span>

                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div><!-- /.navbar-container -->
</div>

<div class="main-container ace-save-state" id="main-container">
    <script type="text/javascript">
        try{ace.settings.loadState('main-container')}catch(e){}
    </script>

    <div id="sidebar" class="sidebar responsive  ace-save-state">
        <script type="text/javascript">
            try{ace.settings.loadState('sidebar')}catch(e){}
        </script>

        <!-- <div class="sidebar-shortcuts" id="sidebar-shortcuts">
             <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                 <button class="btn btn-success">
                     <i class="ace-icon fa fa-signal"></i>
                 </button>

                 <button class="btn btn-info">
                     <i class="ace-icon fa fa-pencil"></i>
                 </button>

                 <button class="btn btn-warning">
                     <i class="ace-icon fa fa-users"></i>
                 </button>

                 <button class="btn btn-danger">
                     <i class="ace-icon fa fa-cogs"></i>
                 </button>
             </div>

             <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                 <span class="btn btn-success"></span>

                 <span class="btn btn-info"></span>

                 <span class="btn btn-warning"></span>

                 <span class="btn btn-danger"></span>
             </div>
         </div> /.sidebar-shortcuts -->

        <ul class="nav nav-list" style="margin-top:-20px">
            <li class="">
                <a href="<?php echo $_SERVER['PHP_SELF']?>?page=dashboard">
                    <i class="menu-icon fa fa-tachometer"></i>
                    <span class="menu-text"> Dashboard </span>
                </a>

                <b class="arrow"></b>
            </li>


            <li class="active open">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-file-excel-o"></i>
                    <span class="menu-text"> Statements </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="active" name="transactions">
                        <a href="<?php echo $_SERVER['PHP_SELF']?>?page=transactions" >
                            <i class="menu-icon fa fa-caret-right"></i>
                            Transactions
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="" name="accountstatement">
                        <a  href="<?php echo $_SERVER['PHP_SELF']?>?page=accountstatement" >
                            <i class="menu-icon fa fa-caret-right"></i>
                            Account Statement
                        </a>

                        <b class="arrow"></b>
                    </li>
                    <li class="" name="accountstatement">
                        <a  href="<?php echo $_SERVER['PHP_SELF']?>?page=loanstatement" >
                            <i class="menu-icon fa fa-caret-right"></i>
                            Loan Statement
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>

            <li class="" >
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-download"></i>
                    <span class="menu-text"> Reports </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="" name="cashout" id="menu-item">

                        <a href="<?php echo $_SERVER['PHP_SELF']?>?page=cashout">
                            <i class="menu-icon fa fa-list-alt"></i>
                            <span class="menu-text"> Cash Out </span>
                        </a>

                        <b class="arrow"></b>
                    </li>
                    <li  name="shareout">
                        <a href="<?php echo $_SERVER['PHP_SELF']?>?page=shareout" >
                            <i class="menu-icon fa fa-caret-right"></i>
                            Share Out
                        </a>

                        <b class="arrow"></b>
                    </li>
                    <li  class="" name="savingsgroup">
                        <a href="<?php echo $_SERVER['PHP_SELF']?>?page=savingsgroup" >
                            <i class="menu-icon fa fa-caret-right"></i>
                            Savings Group
                        </a>

                        <b class="arrow"></b>
                    </li>
                    <li class="">
                        <a href="form-elements.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Form Elements
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="form-elements-2.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Form Elements 2
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="form-wizard.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Wizard &amp; Validation
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="wysiwyg.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Wysiwyg &amp; Markdown
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="dropzone.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Dropzone File Upload
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>

            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text">
								Edit Records
							</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>



                        <ul class="submenu">
                            <li class="">
                                <a href="<?php echo $_SERVER['PHP_SELF']?>?page=servicemsg">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Service Messages
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="two-menu-1.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Two Menus 1
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="two-menu-2.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Two Menus 2
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="mobile-menu-1.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Default Mobile Menu
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="mobile-menu-2.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Mobile Menu 2
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="mobile-menu-3.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Mobile Menu 3
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>

                    <li class="">
                        <a href="typography.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Typography
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="elements.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Elements
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="buttons.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Buttons &amp; Icons
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="content-slider.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Content Sliders
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="treeview.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Treeview
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="jquery-ui.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            jQuery UI
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="nestable-list.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Nestable Lists
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>

                            Three Level Menu
                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="">
                                <a href="#">
                                    <i class="menu-icon fa fa-leaf green"></i>
                                    Item #1
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-pencil orange"></i>

                                    4th level
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>

                                <b class="arrow"></b>

                                <ul class="submenu">
                                    <li class="">
                                        <a href="#">
                                            <i class="menu-icon fa fa-plus purple"></i>
                                            Add Product
                                        </a>

                                        <b class="arrow"></b>
                                    </li>

                                    <li class="">
                                        <a href="#">
                                            <i class="menu-icon fa fa-eye pink"></i>
                                            View Products
                                        </a>

                                        <b class="arrow"></b>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="">
                <a  href="<?php echo $_SERVER['PHP_SELF']?>?page=logs" >
                    <i class="menu-icon fa fa-list-alt"></i>
                    <span class="menu-text"> Logs </span>
                </a>

                <b class="arrow"></b>
            </li>



        </ul><!-- /.nav-list -->

        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
            <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>
    </div>