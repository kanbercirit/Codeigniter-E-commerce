<section id="cart_items">
		<div class="container">
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Ürün</td>
							<td class="description"></td>
							<td class="price">Fiyat</td>
							<td class="quantity">Adet</td>
							<td class="total">Toplam</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($baskets as $basket) :?> 
						<tr>
							<td class="cart_product">
								<a href=""><img src="<?=site_url('images/'.$basket->image)?>" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?=$basket->product_name?></a></h4>
								<p>Ürün: 1089772</p>
							</td>
							<td class="cart_price">
								<p>$<?=$basket->price?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						 <?php endif;?>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->