        <!-- Page Content -->
        <div id="page-wrapper">
        	<div class="container-fluid">
        		<div class="row">
        			<div class="col-lg-12">
        				<h1 class="page-header">Profile Karyawan</h1>
        			</div>
        			<!-- /.col-lg-12 -->
        		</div>
        		<!-- /.row -->

        		<div class="row">
        			<div class="col-lg-12">
        				<div class="panel panel-yellow">
        					<div class="panel-heading">
        						Form Profile
        					</div>
        					<div class="panel-body">
        						<form action="config/profile/proses_ubah.php?id=<?php echo $_SESSION['username'] ?>" method="post">
        							<?php include 'halaman/profile/form.php'; ?>
        							<input type="hidden" name="id" value="<?php echo $_SESSION['username'] ?>">
        							<div class="form-group">
        								<div class="col-lg-12">
        									<button type="submit" class="btn btn-md btn-success"><i class="fa fa-save"></i> Simpan</button>
        									<button type="reset" class="btn btn-md btn-warning"><i class="fa fa-undo"></i> Ulangi</button>
        								</div>
        							</div>

        						</form>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        	<!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->