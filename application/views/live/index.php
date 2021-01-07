<div class="content-wrapper">
	<section class="content-header">
	<h1>
		Dashboard
		<small>Live Camera Feed</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Live Feed</li>
	</ol>
	</section>
		
	<section class="content">
		<div>
			<div>
				<h3 class="object-inline">Kyra CAM1 | Face Detection</h3>
				<h3 class="object-inline">Kyra CAM2 | License Plate Recognition</h3>
				<br>
				<img src='http://localhost:5000/feed_cam1' class='object-inline'/>
				<img src='http://localhost:5000/feed_cam2' class='object-inline'/>
			</div>
		</div>
	</section>
</div>

<style>
.object-inline {
  position: relative;
  width: 300px;
  display: inline-block;
  padding: 10px;
  width: 49%;
}
</style>