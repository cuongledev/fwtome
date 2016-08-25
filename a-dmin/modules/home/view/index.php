<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="dashboard-breadcrumb">
        <div class="pull-left">
            <ol class="breadcrumb">
						<li><a href=""><i class="fa fa-home" aria-hidden="true"></i> <?php echo lang('dashboard'); ?></a></li>
						<li class="active"><?php echo lang('dashboard'); ?></li>
			</ol>

        </div>
        <div class="pull-right">
            <a class="btn-main with-icon" data-toggle="modal" data-target="#widget_manager" href="#"></a>
        </div>
        <div class="clearfix"></div>
    </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Bounce Rate</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#revenue-chart" data-toggle="tab">Top Browsers</a></li>
              <li><a href="#sales-chart" data-toggle="tab">Top Most Visit Pages</a></li>
              <li class="pull-left header"><i class="fa fa-line-chart" aria-hidden="true"></i> Traffic Details</li>
            </ul>
            <div class="tab-content no-padding">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
              <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
            </div>
          </div>
          <!-- /.nav-tabs-custom -->

          

          

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">


          <!-- solid sales graph -->
          <div class="box box-solid bg-teal-gradient">
            <div class="box-header">
              <i class="fa fa-line-chart" aria-hidden="true"></i>

              <h3 class="box-title"> Traffic Dashboard</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
            </div>
             <!-- Custom tabs (Charts with tabs)-->
              <div class="nav-tabs-custom">
                <div class="tab-content no-padding">
                  <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
                </div>
              </div>
              <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.box -->

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
















  <?php 
require "db.class.php";
$database = new Db();
$my_ip = getHostByName(php_uname('n'));

$my_url = $_SERVER['PHP_SELF'];

$sql = "SELECT * FROM online WHERE ip = '".$my_ip."'";
$count = $database->count_query($sql);
$data = array(
  'ip'  => $my_ip,
  'url' => $my_url,
  'time'  => time()
);
if ($count>0) {
  $where = array(
    array('ip',$my_ip,'and'),
        array('url',$my_url)
  );
  $database->update('online',$data,$where);
}else{
  // nếu chưa có ip trong database thì thêm địa chỉ ip mới vào
  $database->insert('online',$data);

}
$time = time();
$database->delete_sql("DELETE FROM online WHERE `time` + 1 < $time");

// Select
$data_ip = $database->query("SELECT * FROM online");





 ?>
 <!DOCTYPE html>
 <html>
 <head>
  <title>online</title>
 </head>
 <body>
 <h1>User Online</h1>
 <?php 
if (isset($data_ip) && !empty($data_ip)) {
  echo "<pre>";
  print_r($data_ip);
  echo "</pre>";
}

  ?>
 </body>
 </html>