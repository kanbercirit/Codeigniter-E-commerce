<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Anasayfa | E-Ticaret</title>
    <link href="<?=site_url('css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?=site_url('css/font-awesome.min.css')?>" rel="stylesheet">
    <link href="<?=site_url('css/prettyPhoto.css')?>" rel="stylesheet">
    <link href="<?=site_url('css/price-range.css')?>" rel="stylesheet">
    <link href="<?=site_url('css/animate.css')?>" rel="stylesheet">
	<link href="<?=site_url('css/main.css')?>" rel="stylesheet">
	<link href="<?=site_url('css/responsive.css')?>" rel="stylesheet">
     <script src="<?=site_url('dist/sweetalert-dev.js')?>"></script>
    <link rel="stylesheet" href="<?=site_url('dist/sweetalert.css')?>">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    
      <!-- This is what you need -->
    <script src="<?=site_url('dist/sweetalert-dev.js')?>"></script>
    <link rel="stylesheet" href="<?=site_url('dist/sweetalert.css')?>">
   
</head><!--/head-->

<body> 
	<?php $this->load->view('header')?> 
	
	
	<section>
		<div class="container">
			<div class="row">  
				<?php $this->load->view('review')?>
                <script type="text/javascript">
                    function pay(order_id){
                        url = "<?=site_url('site/pay/')?>" + order_id;
                        $.ajax({
                          url: url,
                          context: document.body
                        }).done(function() {
                          swal({title:"Ödeme yapıldı!",type:'success'},function(onConfirm){
                            if(onConfirm){
                                window.location.href="<?=site_url()?>";
                            }
                        });
                        });
                        }
                </script>
				<div style="float:right;margin-bottom: 10px"><a class="btn btn-primary" onClick="pay(<?=$_SESSION['order']?>)">Alışverişi tamamla</a></div>
			</div>
		</div>
	</section>
	
	<?php $this->load->view('footer')?>
  
    <script src="<?=site_url('js/jquery.js')?>"></script>
	<script src="<?=site_url('js/bootstrap.min.js')?>"></script>
	<script src="<?=site_url('js/jquery.scrollUp.min.js')?>"></script>
	<script src="<?=site_url('js/price-range.js')?>"></script>
    <script src="<?=site_url('js/jquery.prettyPhoto.js')?>"></script>
    <script src="<?=site_url('js/main.js')?>"></script>
</body>
</html>