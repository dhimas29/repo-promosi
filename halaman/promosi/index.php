        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Pegawai</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading" style="padding-bottom: 20px">
                            <div>
                                Info Promosi
                                <?php if ($_SESSION['level'] == 'superadmin') : ?>
                                    <a href="index.php?url=data_calon_tambah" class="btn btn-sm btn-success" style="float: right;"><i class="fa fa-plus"></i> Tambah</a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">NIP</th>
                                            <th rowspan="2">Nama</th>
                                            <th rowspan="2">Alamat</th>
                                            <th rowspan="2">No Telp</th>
                                            <th rowspan="2">Email</th>
                                            <th rowspan="2">Divisi</th>
                                            <th rowspan="1" colspan="2" style="text-align: center;">Status Promosi</th>
                                        </tr>
                                        <tr>
                                            <th rowspan="1" colspan="1">Status</th>
                                            <th rowspan="1" colspan="1">Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $x = 1; ?>
                                        <?php if (isset($datas)) : ?>
                                            <?php foreach ($datas as $data) : ?>
                                                <tr>
                                                    <td align="center"><?php echo $x++; ?></td>
                                                    <td><?php echo $data['nip']; ?></td>
                                                    <td><?php echo $data['nama']; ?></td>
                                                    <td><?php echo $data['alamat']; ?></td>
                                                    <td><?php echo $data['no_telp']; ?></td>
                                                    <td><?php echo $data['email']; ?></td>
                                                    <td><?php echo $data['divisi']; ?></td>
                                                    <td><?php echo $data['status']; ?></td>
                                                    <td><?php echo $data['persetujuan']; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

        </div>
        <!-- /#page-wrapper -->