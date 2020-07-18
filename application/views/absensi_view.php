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
                            <h4 class="m-t-0 header-title"><b>Daftar Karyawan</b></h4>
                            <div style="width: 100%; text-align: right; margin-bottom: 10px;">
                            </div>

                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Karyawan</th>
                                    <th>Jumlah Absen</th>
                                    <th>Absensi</th>
                                </tr>
                                </thead>
                                


                                <tbody>
                                <tr>
                                <td>001</td>
                                <td>Rezy Andrean R.</td>
                                <td>12</td>

                                <td><a href ="<?php echo base_url('karyawan'); ?>" class ='on-default edit-row btn btn-primary'><i class ='fa fa-pencil'></i></a>
                                    <a href ='#' class ='on-default remove-row btn btn-danger' data-toggle='modal' data-target='#delete-modal'><i class ='fa fa-trash'></i></a>
                                </td>
                            
                                
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end row -->

<script type="text/javascript">
    function SetInput(id, nama,){
        document.getElementById('id').value = id;
        document.getElementById('nama').value = nama;
    }
</script>

