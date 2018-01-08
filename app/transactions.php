<div class="page-content">
    <div class="ace-settings-container" id="ace-settings-container">
        <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
            <i class="ace-icon fa fa-search bigger-130"></i>
        </div>

        <div class="ace-settings-box clearfix" id="ace-settings-box">
            <div class="pull-left width-50">
                <div class="ace-settings-item">
                    <div class="pull-left">

                        <div>
                            <form id="theform" action="">
                                <table>
                                    <tr>

                                        <td >
                                            <div class="calicon">
                                                <div class="btn btn-success">
                                                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
                                                    <span><label>Date Range</label> <input type="checkbox" name="calshow" id="calshow" value=false></span>
                                                </div>

                                            </div>

                                            <div id="reportrange" class="pull-left" style="border-radus:5px ;background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                                                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
                                                <span></span> <b class="caret"></b>
                                            </div>

                                        </td>
                                    </tr>
                                    <tr><td><input type="text" class="form-control" id="phone" placeholder="phone#"></td></tr>
                                    <tr><td><input type="text" class="form-control" id="ref" placeholder="reference#"></td></tr>
                                    <tr><td><select class="form-control" id="groupname">

                                                <option value=-"">All Groups</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <td><button class="btn btn-primary" id="start">Submit</button> </td>
                                    </tr>
                                </table>


                            </form>
                        </div>
                        <!--<select id="skin-colorpicker" class="hide">
                            <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                            <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                            <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                            <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                        </select>-->
                    </div>
                    <!-- <span>&nbsp; Choose Skin</span>-->
                </div><!--

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>-->
            </div><!-- /.pull-left -->

            <div class="pull-left width-50"><!--
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>-->
            </div><!-- /.pull-left -->
        </div><!-- /.ace-settings-box -->
    </div><!-- /.ace-settings-container -->

    <div class="page-header">
        <h1>
            Transactions
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>

            </small>
        </h1>
    </div><!-- /.page-header -->

    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="row">
                <div class="col-xs-12">
                    <table id="simple-table" class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr>
                            <!--ID	Date	Phone#	Account	Service	References	Amount	Status	Language	Group Id
                            <th class="center">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </th>-->
                            <th class="detail-col hidden">ID</th>
                            <th>Date</th>
                            <th>Phone#</th>
                            <th xclass="hidden-480">Account</th>

                            <th>
                                Service
                            </th>
                            <th class="hidden-480">References</th>

                            <th>Amount</th>
                            <th>Status</th>
                            <th>Language</th>
                            <th>Group</th>
                        </tr>
                        </thead>

                        <tbody id="transaction_table">
                        <tr><td> Replace this</td></tr>
                        </tbody>
                    </table>
                </div><!-- /.span -->
            </div><!-- /.row -->

            <div class="hr hr-18 dotted hr-double"></div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
