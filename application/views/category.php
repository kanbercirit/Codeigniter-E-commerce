<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>KATEGORİLER</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<?php foreach ($categories as $category) :?>
								<?php if($category->total_brand > 1) :?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											<?=$category->category_name?>
										</a>
									</h4>
								</div>
								<?php foreach ($category_brands as $brand) :?>
								<?php if($category->category_name == $brand->category_name) :?>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="<?=site_url('site/filter/brands/'.$brand->brand_name)?>"><?=$brand->brand_name?> </a></li> 
										</ul>
									</div>
								</div>
							<?php endif;?>
							<?php endforeach;?>
							</div>
						<?php else : ?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?=site_url('site/filter/categories/'.$category->category_name)?>"><?=$category->category_name?></a></h4>
								</div>
							</div>
						<?php endif;?>
							<?php endforeach;?>
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<?php foreach ($brand_items as $brand) :?>
									<li><a href="<?=site_url('site/filter/brands/'.$brand->name)?>"> <span class="pull-right">(<?=$brand->total?>)</span><?=$brand->name?></a></li> 
								<?php endforeach;?>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="<?=site_url('images/home/shipping.jpg')?>" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>