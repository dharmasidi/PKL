<!DOCTYPE html>
<html>
<?php $this->load->view('dashboard/layout/head')?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php $this->load->view('dashboard/layout/header')  ?>  
  <!-- Left side column. contains the logo and sidebar -->
<?php $this->load->view('dashboard/layout/sidebar')  ?>  

  <!-- Content Wrapper. Contains page content -->
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
                  <h3 class="box-title">Data Penelitian</h3>
                </div>
                <div class="col-sm-2">
                  <a href="<?php echo base_url('penelitian/tambah') ?>"><button type="button" class="btn btn-success" ><i class="fa fa-plus"></i> Tambah Data</button></a>
                </div>
              </div>
              
             <!--  <div class="header-button-set"> -->
                
              <!-- </div> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
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
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>test</td>
                  <td>test</td>
                  <td> 11 Mei 2019</td>
                  <td>Tiap Semester</td>
                  <td>1</td>
                  <td>5.5</td>
                  <td>test</td>
                  <td>test</td>
                  <td>
                    <a href="#" class="btn btn-danger btn-xs" alt="" style="margin-bottom: 10px;" onclick="return confirm('Yakin ingin Hapus?')"><i class="fa fa-trash"></i> Hapus</a>
                    <a href="<?php echo base_url('penelitian/edit') ?>"  class="btn btn-warning btn-xs editbuku" alt=""><i class="fa fa-pencil"> Edit</i></a>     
                  </td>

                </tr>
                
                </tbody>
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
 <?php $this->load->view('dashboard/layout/footer');  ?>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<?php $this->load->view('dashboard/layout/script');  ?>
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
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

<?php $this->load->view('dashboard/layout/footer') ?>

  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<?php $this->load->view('dashboard/layout/script')  ?>


</body>
</html>
