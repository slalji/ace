<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'none';
?>
<!DOCTYPE html>
<html lang="en">
	<?php include_once('layout/header.html'); ?>
	<?php include_once('layout/sidenav.html'); ?>
			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">Tables</a>
							</li>
							<li class="active">Simple &amp; Dynamic</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<!--<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>-->
						</div><!-- /.nav-search -->
					</div>


						<div class="page-header">
							<div style="display: none" id="section"><?php echo $page; ?></div>
							<h1 >

								<?php
									if ($page == 'transactions')
										echo 'Transactions';
									else if ($page == 'accountstatement')
										echo 'Account Statement';
								?>

							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

									<?php


										include "app/".$page.'.php';

									?>


								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<?php include "layout/footer.html"; ?>
			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
	<!--</div> /.main-container -->

		<!-- inline scripts related to this page -->
	<script type="text/javascript">
		$(function() {

			var start = moment().subtract(29, 'days');
			var end = moment();

			function cb(start, end) {
				$('#reportrange span').html(start.format('MMM D, YYYY') + ' - ' + end.format('MMM D, YYYY'));
			}

			$('#reportrange').daterangepicker({
				startDate: start,
				endDate: end,
				ranges: {
					'Today': [moment(), moment()],
					'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
					'Last 7 Days': [moment().subtract(6, 'days'), moment()],
					'Last 30 Days': [moment().subtract(29, 'days'), moment()],
					'This Month': [moment().startOf('month'), moment().endOf('month')],
					'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
				}
			}, cb);

			cb(start, end);
console.log($('#reportrange span').html());
		});
	</script>
		<script>
			<?php include "app/js/".$page.".js"; ?>
		</script>
	</body>
</html>
