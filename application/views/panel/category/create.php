<?php $this->load->view('panel/header')?>

       
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Kategori Ekle</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

        <form>    
            <div class="panel-body">
                <div class="form-group">
					<label>Kategori Adı</label>
					<input class="form-control" placeholder="Kategori Adını Giriniz">
                </div>
                <div class="form-group">
                                            <label>Kategori Türü Seçiniz</label>
                                            <select class="form-control">
                                                <option>Elektronik Eşya</option>
                                                <option>Kıyafet</option>
                                                <option>Kişisel Ürün</option>
                                            </select>
                                            <br>
                    <button type="button" class="btn btn-primary">Ekle</button>
            </div>
          			
        </form> 



<?php $this->load->view('panel/footer')?>