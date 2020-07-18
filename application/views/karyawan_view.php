<!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <h2 class="m-t-0 header-title" style="text-align: center; margin-bottom: 20px;"><b><?php echo $this->session->userdata("karyawan"); ?></b></h2>
                            <div style="width: 100%; text-align: center; margin-bottom: 40px;">
                                <button type="button" class="btn btn-success btn-rounded waves-effect waves-light">Presensi Masuk</button> &nbsp;&nbsp;&nbsp;&nbsp; <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light">Presensi Keluar</button>
                            </div>

                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Absen Masuk</th>
                                    <th>Tanggal Absen Keluar</th>
                                </tr>
                                </thead>
                                


                                <tbody>
                                <?php
                                    $numb = 1;
                                    foreach($query as $u){
                                echo "<tr>
                                    <td>".$numb."</td>
                                    <td>".$u->tgl_absen_masuk."</td>
                                    <td>".$u->tgl_absen_keluar."</td>
                                </tr>";
                                $numb++;
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end row -->