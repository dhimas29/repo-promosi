        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Detail Data</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                Calon Promosi
                            </div>
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <td>NIP</td>
                                        <td>:</td>
                                        <td><?php echo $data_calon['nip']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Nama</td>
                                        <td>:</td>
                                        <td><?php echo $data_calon['nama']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td>:</td>
                                        <td><?php echo $data_calon['jenis_kelamin']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>:</td>
                                        <td><?php echo $data_calon['alamat']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>No Telp</td>
                                        <td>:</td>
                                        <td><?php echo $data_calon['no_telp']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>:</td>
                                        <td><?php echo $data_calon['email']; ?></td>
                                    </tr>
                                    <?php foreach ($data_calon['kriteria'] as $key => $value) : ?>
                                        <tr>
                                            <td><?php echo $key; ?></td>
                                            <td>:</td>
                                            <td><?php echo $value['value'] ?></td>
                                        </tr>
                                    <?php endforeach ?>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->