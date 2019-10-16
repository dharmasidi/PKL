
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
   
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <div class="row">
                <div class="col-sm-10">
                  <h3 class="box-title">Data Pendidikan</h3>
                </div>
                <div class="col-sm-2">
                  <a href="<?php echo base_url('/dashboard/pendidikan/tambah'); ?>"><button type="button" class="btn btn-success" ><i class="fa fa-plus"></i> Tambah Data</button></a>
                </div>
              </div>
              
             <!--  <div class="header-button-set"> -->
                
              <!-- </div> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
              <thead>
                <tr style="width: 100% !important;">
                  <th>Tanggal Kegiatan</th>
                  <th style="width: 20% !important;">Uraian Kegiatan</th>
                  <th style="width: 20% !important;">Sub Kegiatan</th>
                  <th>Satuan Hasil</th>
                  <th>Volume Kegiatan</th>
                  <th>Angka Kredit</th>
                  <th style="width: 10% !important;">Bukti Fisik</th>
                  <th style="width: 20% !important;">Keterangan</th>
                  <th style="width: 5% !important;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    foreach ($all as $item) {
                        ?>
                <tr>
                  <td class="text-padding"><?=$item->tanggal; ?></td>
                  <td class="text-padding"><?=$item->uraian; ?></td>
                  <td class="text-padding"><?=$item->sub_kegiatan; ?></td>
                  <td class="text-center text-padding"><?=$item->satuan_hasil; ?></td>
                  <td class="text-center text-padding"><?=$item->jumlah_volume; ?></td>
                  <td class="text-center text-padding"><?=$item->angka_kredit; ?></td>
                  <td class="text-padding text-padding"> <a href="<?php echo base_url('/dashboard/Pendidikan/file/'.$item->berkas); ?>"><?=$item->berkas; ?></a></td>
                  <td class="text-padding"><?=$item->deskripsi; ?></td>
                  <td class="text-padding" style="">
                    <a href="<?php echo base_url('/dashboard/Pendidikan/hapus/'.$item->id_kegiatan); ?>" class="btn btn-danger btn-xs" alt="" style="margin-bottom: 10px;" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fa fa-trash"></i> Hapus</a>
                    <a href="<?php echo base_url('dashboard/Pendidikan/edit/'.$item->id_kegiatan); ?>"  class="btn btn-warning btn-xs editbuku" alt=""><i class=" ace-icon fa fa-pencil bigger-130"> Edit</i></a>     
                  </td>

                </tr>
                <?php
                    }; ?>
                </tbody>
                <!--<tfoot>
                <tr>
                  <th>No</th>
                  <th>Uraian Kegiatan</th>
                  <th>Sub Kegiatan</th>
                  <th>Tanggal</th>
                  <th>Satuan Hasil</th>
                  <th>Volume Kegiatan</th>
                  <th>Angka Kredit</th>
                  <th>Bukti Fisik</th>
                  <th>Keterangan</th>
                  <th>Aksi</th>
                </tr>
                </tfoot>-->
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php $this->load->view('dashboard/layout/footer'); ?>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<?php $this->load->view('dashboard/layout/script'); ?>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
