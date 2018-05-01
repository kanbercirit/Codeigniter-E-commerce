<?php $this->load->view('panel/header')?>

       
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Müşteri Ekle</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

        <form>    
            <div class="panel-body">
                <div class="form-group">
					<label>Adı</label>
					<input class="form-control" placeholder="Adınızı Giriniz">
                </div>
                <div class="form-group">
					<label>Soyadı</label>
					<input class="form-control" placeholder="Soyadınızı Giriniz">
                </div>
                <div class="form-group">
					<label>Şifre</label>
					<input class="form-control" placeholder="Şifre Giriniz">
                </div>
                <div class="form-group">
				    <p class="form-control-static">email@example.com</p>
                    </div>
                <div class="form-group">
					<label>E-mail</label>
					<input class="form-control" placeholder="E-mail Adresini Giriniz">
                </div>
                <div class="form-group">
					<label>Kullanıcı Adı</label>
					<input class="form-control" placeholder="Kullanıcı Adını Giriniz"><br>
					<button type="button" class="btn btn-primary">Kaydet</button>
                </div>
            </div>
          			
        </form> 



<?php $this->load->view('panel/footer')?>
