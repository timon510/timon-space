<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!doctype html>
<html>
<head>
<title>Student  Management System || Home Page</title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--bootstrap-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!--coustom css-->
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<!--script-->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- js -->
<script src="js/bootstrap.js"></script>
<!-- /js -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--/fonts-->
<!--hover-girds-->
<link rel="stylesheet" type="text/css" href="css/default.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<script src="js/modernizr.custom.js"></script>
<!--/hover-grids-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!--/script-->
</head>
	<body>
<?php include_once('includes/h2.php');?>
<div class="banner">
  <div class="container">
  <script src="js/responsiveslides.min.js"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
        auto: true,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
             
          

 
       




<!--testmonials-->
<div class="testimonials">
	<div class="container">
			<div class="testimonial-nfo">
        <h3>Public Notices</h3>
         <marquee  style="height:350px;" direction ="up" onmouseover="this.stop();" onmouseout="this.start();">
				<?php
$sql="SELECT * from tblpublicnotice";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>

 
		<a href="view-public-notice.php?viewid=<?php echo htmlentities ($row->ID);?>" target="_blank" style="color:#fff;">
          <?php  echo htmlentities($row->NoticeTitle);?>(<?php  echo htmlentities($row->CreationDate);?>)</a>
          <hr /><br />
				    
			<?php $cnt=$cnt+1;}} ?>
	</marquee></div>
	</div>
</div>
<!--\testmonials-->
<!--specfication-->

<!--/specfication-->
<?php include_once('includes/footer.php');?>
<!--/copy-rights-->
	</body>
</html>
