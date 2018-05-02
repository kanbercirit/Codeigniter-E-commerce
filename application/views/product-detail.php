<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="<?=site_url('css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?=site_url('css/font-awesome.min.css')?>" rel="stylesheet">
    <link href="<?=site_url('css/prettyPhoto.css')?>" rel="stylesheet">
    <link href="<?=site_url('css/price-range.css')?>" rel="stylesheet">
    <link href="<?=site_url('css/animate.css')?>" rel="stylesheet">
	<link href="<?=site_url('css/main.css')?>" rel="stylesheet">
	<link href="<?=site_url('css/responsive.css')?>" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>  
	<?php $this->load->view('header')?> 
	
	
	<section>
		<div class="container">
			<div class="row">
				<?php $this->load->view('category')?>
                <div class="col-sm-9 padding-right">
                    <div class="product-details"><!--product-details-->
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="images/product-details/1.jpg" alt="" />
                                <h3>ZOOM</h3>
                            </div>
                            <div id="similar-product" class="carousel slide" data-ride="carousel">
                                
                                  <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                          <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
                                          <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
                                          <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
                                        </div>
                                        <div class="item">
                                          <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
                                          <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
                                          <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
                                        </div>
                                        <div class="item">
                                          <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
                                          <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
                                          <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
                                        </div>
                                        
                                    </div>

                                  <!-- Controls -->
                                  <a class="left item-control" href="#similar-product" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                  </a>
                                  <a class="right item-control" href="#similar-product" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                  </a>
                            </div>

                        </div>
                        <div class="col-sm-7">
                            <div class="product-information"><!--/product-information-->
                                <img src="images/product-details/new.jpg" class="newarrival" alt="" />
                                <h2><?=$product->name?></h2>
                                <p>Ürün id: 1089772</p>
                                <img src="images/product-details/rating.png" alt="" />
                                <span>
                                    <span>US $<?=$product->price?></span>
                                    <label>Quantity:</label>
                                    <input type="text" name="quantity" value="3" />
                                    <?php if($_SESSION['user'] != null) :?>
                                             <button type="button" class="btn btn-fefault cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        Sepete Ekle
                                    </button>
                                        <?php endif;?>
                                   
                                </span>
                                <p><b>Availability:</b> In Stock</p>
                                <p><b>Condition:</b> New</p>
                                <p><b>Brand:</b> E-SHOPPER</p>
                                <a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
                            </div><!--/product-information-->
                        </div>
                    </div><!--/product-details-->
                    
                    <div class="category-tab shop-details-tab"><!--category-tab-->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li><a href="#details" data-toggle="tab">Details</a></li> 
                                <li class="active"><a href="#reviews" data-toggle="tab">Yorumlar (<?=count($comments)?>)</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade" id="details" >
                                
                                <div class="col-sm-3">
                                     <?=$product->detail?>
                                </div>
                            </div>
                            
                           
                            
                       
                            
                            <div class="tab-pane fade active in" id="reviews" >
                                <div class="col-sm-12">
                                    <p><?=$comment->comment?></p>
                                    <p><b>Yorum yapın</b></p>
                                    
                                    <form action="<?=site_url('site/add_comment/'.$product->id)?>" method="post">
                                        <textarea name="comment" ></textarea>
                                        <button type="button" class="btn btn-default pull-right">
                                            Gönder
                                        </button>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </div><!--/category-tab-->
                    <?php if(FALSE): ?>
                    <div class="recommended_items"><!--recommended_items-->
                        <h2 class="title text-center">recommended items</h2>
                        
                        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">   
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="images/home/recommend1.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="images/home/recommend2.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="images/home/recommend3.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">  
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="images/home/recommend1.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="images/home/recommend2.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="images/home/recommend3.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                              </a>
                              <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                              </a>          
                        </div>
                    </div><!--/recommended_items-->
                    <?php endif;?>
                </div>
				
				
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