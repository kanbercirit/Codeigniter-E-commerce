<?php $this->load->view('panel/header')?>

       
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Ürün Ekle</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

        <form method="post" action="<?=site_url('adminpanel/update_product/'.$data->id)?>">    
            <div class="panel-body">
                <div class="form-group">
					<label>Ürün Adı</label>
					<input class="form-control" value="<?=$data->name?>" name="name" placeholder="Ürün Adı Giriniz">
                </div>
                <div class="form-group">
					<label>Ücreti</label>
					<input class="form-control" value="<?=$data->price?>" name="price" placeholder="Ürün Ücreti Giriniz">
                </div>
                <div class="form-group">
                                            <label>Ürün Türü Seçiniz</label>
                                            <select value="<?=$data->type?>" name="type" class="form-control">
                                                <option>Cep Telefonu</option>
                                                <option>Bilgisayar</option>
                                                <option>Yazıcı</option>
                                            </select>
                                            <br>
					<button type="submit" class="btn btn-primary">Ekle</button>
                </div>
            </div>
          			
        </form> 



<?php $this->load->view('panel/footer')?>