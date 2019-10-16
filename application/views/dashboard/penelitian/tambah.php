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
        Data Penelitian
      </h1>
    </section>
    <?php if (validation_errors()) {?>
    <div class="container">
      <?php echo validation_errors();?>
    </div> 
    <?php } ?>     

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
<<<<<<< HEAD
            <form role="form"enctype="multipart/form-data" action="<?php echo base_url('dashboard/Penelitian/add')?>" method="post">
=======
            <form role="form" enctype="multipart/form-data" action="<?php echo base_url('dashboard/Penelitian/add')?>" method="post">
>>>>>>> adacea657d096885c729942f7c8af799ad51d357
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Bidang</label>
                  <input type="text" class="form-control" id="#" name="bidang" placeholder="Bidang Penelitian" disabled>
                </div>
                <div class="form-group">
                  <label>Uraian Kegiatan</label>
                  <select class="form-control" name="uraianKegiatan">
<<<<<<< HEAD
                   <?php foreach ($uraian_kegiatan as $data) {
    ?>
                    <option value="<?=$data->id_uraian; ?>"><?=$data->nama_uraian; ?></option>
                    <?php
} ?>
                  </select>
                </div>

               <div class="form-group">
=======
                   <?php foreach ($uraian_kegiatan as $data){  ?>
                    <option value="<?=$data->id_uraian;?>"><?=$data->nama_uraian;?></option>
                    <?php }; ?>
                  </select>
                </div>

                <div class="form-group">
>>>>>>> adacea657d096885c729942f7c8af799ad51d357
                  <label for="exampleInputPassword1" name="subKegiatan" >Sub Kegiatan</label>
                  <input type="text" name="subKegiatan" class="form-control" id="" placeholder="Sub Kegiatan">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" name="tanggalKegiatan" >Tanggal Kegiatan</label>
                  <input type="date" class="form-control" name="tanggalKegiatan" id="" >
                </div>  
                <div class="form-group">
                  <label for="exampleInputPassword1">Satuan Hasil</label>
                  <input type="text" class="form-control" name="satuanHasil" id="" value="<?php echo set_value('satuanHasil');?>" placeholder="Satuan Hasil">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Volume Kegiatan</label>
                  <input type="text" class="form-control" name="volumeKegiatan" id="" placeholder="Volume Kegiatan">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Angka Kredit</label>
                  <input type="text" class="form-control" name="angkaKredit" id="" placeholder="Angka Kredit">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Bukti Fisik</label>
                  <input type="file" name="buktiFisik" id="">
                </div>
              
                <div class="form-group">
                  <label for="exampleInputPassword1">Deskripsi</label>
                  <textarea type="textarea" class="form-control" name="deskripsi" id="" placeholder="Keterangan / deskripsi"></textarea>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
<<<<<<< HEAD
                <button type="submit"name="simpan" class="btn btn-primary">Submit</button>
=======
                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
>>>>>>> adacea657d096885c729942f7c8af799ad51d357
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
