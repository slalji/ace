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
									<small>Welcome,</small>
                                    <?php
                                    isset($_SESSION['fullname']) ? ucfirst($_SESSION['fullname']) : 'Please Login';
                                  ?>

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

            <li class="open" >
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
                    <li  class="" name="logs">
                        <a href="<?php echo $_SERVER['PHP_SELF']?>?page=logs" >
                            <i class="menu-icon fa fa-caret-right"></i>
                            Log (Transactions)
                        </a>

                        <b class="arrow"></b>
                    </li>

                </ul>
            </li>

            <li class="open">
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
                                <a href="<?php echo $_SERVER['PHP_SELF']?>?page=servicedesc">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Service Description
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="">
                                <a href="<?php echo $_SERVER['PHP_SELF']?>?page=settings">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Settings
                                </a>

                                <b class="arrow"></b>
                            </li>


                        </ul>
                    </li>


                </ul>
            </li>





        </ul><!-- /.nav-list -->

        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
            <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>
    </div>
