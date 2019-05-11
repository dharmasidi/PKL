<!DOCTYPE html>
<html>
<?php $this->load->view('dashboard/layout/head')?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php $this->load->view('dashboard/layout/header')  ?>  
  <!-- Left side column. contains the logo and sidebar -->
<?php $this->load->view('dashboard/layout/sidebar')  ?>  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Selamat Datang di Sistem Penetapan Angka Kredit
      </h1>
      <small>Anda Berhasil Login</small>
    </section>
       
  </section>
        <!-- right col -->
  </div>
      <!-- /.row (main row) -->
  </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

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
