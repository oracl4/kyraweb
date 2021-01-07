  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Parking
        <small>Records</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Parking Records</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12 col-xs-12">

          <?php if($this->session->flashdata('success')): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <?php echo $this->session->flashdata('success'); ?>
            </div>
          <?php elseif($this->session->flashdata('error')): ?>
            <div class="alert alert-error alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <?php echo $this->session->flashdata('error'); ?>
            </div>
          <?php endif; ?>
          
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="datatables" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Name</th>
                  <th>License Plate</th>
                  <th>Gate</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($record_data as $k => $v) {
                    ?>
                    <tr>
                      <td><?php echo $v['records']['id']; ?></td>
                      <td><?php
                        $date = $v['records']['timestamp'];
                        $date = date( "d/m/Y", strtotime($date));
                        echo $date;
                      ?>
                      <td><?php
                        $time = $v['records']['timestamp'];
                        $time = date( "H:i:s", strtotime($time));
                        echo $time;
                      ?>
                      </td>
                      <td><?php echo $v['records']['name']; ?></td>
                      <td><?php echo $v['records']['license_plate']; ?></td>
                      <td><?php echo $v['records']['gate']; ?></td>
                    </tr>
                    <?php
                  } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- col-md-12 -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<script type="text/javascript">

$(document).ready(function() {
  $('#datatables').DataTable({
    'order': []
  });

  $("#parkingSideTree").addClass('active');
  $("#manageParkingSideTree").addClass('active');

});
</script>