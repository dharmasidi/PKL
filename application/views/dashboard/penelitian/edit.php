<!DOCTYPE html>
<html>
<?php $this->load->View('dashboard/layout/head'); ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php $this->load->view('dashboard/layout/header'); ?>
  <!-- Left side column. contains the logo and sidebar -->
   <?php $this->load->view('dashboard/layout/sidebar'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Pengabdian
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
            <form role="form" method="POST" enctype="multipart/form-data" action="<?php echo base_url('/dashboard/Penelitian/update'); ?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Pilih Bidang</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Bidang Pengabdian" disabled>
                </div>
                <div class="form-group">
                  <label>Uraian Kegiatan</label>
                  <select class="form-control" name="uraianKegiatan">
                    <option value="<?=$kegiatan->id_uraian; ?>"><?=$kegiatan->uraian; ?></option>
                    <?php foreach ($uraian_kegiatan as $data) {
    ?>
                    <option value="<?=$data->id_uraian; ?>"><?=$data->nama_uraian; ?></option>
                    <?php
} ?>
                  </select>
                </div>
                <div class="form-group">
                  <input type="hidden" class="form-control" name="idKegiatan" value="<?=$kegiatan->id_kegiatan?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Sub Kegiatan</label>
                  <input type="text" class="form-control" name="subKegiatan" value="<?=$kegiatan->sub_kegiatan?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Kegiatan</label>
                  <input type="date" class="form-control" name="tanggalKegiatan" id="#" value="<?=$kegiatan->tanggal?>" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Satuan Hasil</label>
                  <input type="text" class="form-control" name="satuanHasil" id="#" value="<?=$kegiatan->satuan_hasil?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Volume Kegiatan</label>
                  <input type="text" class="form-control" name="volumeKegiatan" id="#" value="<?=$kegiatan->jumlah_volume?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Angka Kredit</label>
                  <input type="text" class="form-control" name="angkaKredit" id="#" value="<?=$kegiatan->angka_kredit?>">
                </div>
                <input type="hidden" name="namaBerkas" value="<?=$kegiatan->berkas?>">
                <div class="form-group">
                  <label for="exampleInputFile">Bukti Fisik</label>
                  <input type="file" name="buktiFisik" id="">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Deskripsi</label>
                  <textarea type="textarea" class="form-control" name="deskripsi" id="#"><?=$kegiatan->deskripsi?></textarea>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                <a href="<?php echo base_url('/dashboard/Penelitian/tampil') ?>"><button type="submit" name="kembali" class="btn btn-danger" style="padding-left: 10px !important;">Kembali</button></a>
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
<?php $this->load->view('dashboard/layout/script'); ?>
</body>
</html>
