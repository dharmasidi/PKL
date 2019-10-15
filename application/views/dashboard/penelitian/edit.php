<!DOCTYPE html>
<html>
<?php $this->load->View('dashboard/layout/head') ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php $this->load->view('dashboard/layout/header');  ?>
  <!-- Left side column. contains the logo and sidebar -->
   <?php $this->load->view('dashboard/layout/sidebar');  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Penelitian
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Pilih Bidang</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Bidang Pengabdian" disabled>
                </div>
                <div class="form-group">
                  <label>Uraian Kegiatan</label>
                  <select class="form-control">
                    <option>PELAKSANAAN PENGABDIAN KEPADA MASYARAKAT</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Sub Kegiatan</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Sub Kegiatan">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Kegiatan</label>
                  <input type="date" class="form-control" id="exampleInputPassword1" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Satuan Hasil</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Satuan Hasil">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Volume Kegiatan</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Volume Kegiatan">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Angka Kredit</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Angka Kredit">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Bukti Fisik</label>
                  <input type="file" id="exampleInputFile">
                </div>
              
                <div class="form-group">
                  <label for="exampleInputPassword1">Deskripsi</label>
                  <textarea type="textarea" class="form-control" id="exampleInputPassword1" placeholder="Keterangan / deskripsi"></textarea>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view('dashboard/layout/footer'); ?>
    <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<?php $this->load->view('dashboard/layout/script');  ?>
</body>
</html>
