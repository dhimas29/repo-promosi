        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Laporan Data Promosi</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading" style="padding-bottom: 20px">
                            <div>
                                Laporan Data Promosi
                                <?php if ($_SESSION['level'] == 'superadmin') : ?>
                                    <!-- <a href="index.php?url=data_calon_tambah" class="btn btn-sm btn-success" style="float: right;"><i class="fa fa-plus"></i> Tambah</a> -->
                                <?php endif; ?>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th width="50">No</th>
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>No Telp</th>
                                            <th>Email</th>
                                            <th>Divisi</th>
                                            <th>Status</th>
                                            <?php if ($_SESSION['level'] == 'pimpinan') : ?>
                                                <th>Aksi</th>
                                            <?php endif; ?>
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
                                                    <td><?php echo $data['persetujuan']; ?></td>
                                                    <?php if ($_SESSION['level'] == 'pimpinan') : ?>
                                                        <td align="center">
                                                            <?php if ($data['persetujuan'] == 'Menunggu Persetujuan') : ?>
                                                                <a href="config/laporan/proses_ubah.php?id=<?php echo $data['id'] ?>&status=Disetujui" class="btn btn-xs btn-success" title="Lihat">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                                <a href="config/laporan/proses_ubah.php?id=<?php echo $data['id'] ?>&status=Tidak Disetujui" class="btn btn-xs btn-danger" title="Ubah">
                                                                    <i class="fa fa-remove"></i>
                                                                </a>
                                                            <?php endif; ?>
                                                            <?php if ($data['persetujuan'] != 'Menunggu Persetujuan') : ?>
                                                                <a href="#" disabled class="btn btn-xs btn-info" title="Ubah">
                                                                    <i class="fa fa-minus"></i>
                                                                </a>
                                                            <?php endif; ?>
                                                        </td>
                                                    <?php endif; ?>
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