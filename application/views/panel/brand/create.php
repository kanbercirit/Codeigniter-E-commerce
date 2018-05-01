<?php $this->load->view('panel/header')?>

       
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Marka Ekle</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

        <form>    
            <div class="panel-body">
                <div class="form-group">
					<label>Marka Adı</label>
					<input class="form-control" placeholder="Marka Adınızı Giriniz">
                </div>
                <div class="form-group">
					<label>Menşei</label>
					<input class="form-control" placeholder="Menşei Giriniz">
                </div>
                <div class="form-group">
					<label>Marka Türü</label>
					<input class="form-control" placeholder="Türünü Giriniz">
                </div>
                <br>
					<button type="button" class="btn btn-primary">Kaydet</button>
                </div>
            </div>
          			
        </form> 



<?php $this->load->view('panel/footer')?>