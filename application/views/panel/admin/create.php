<?php $this->load->view('panel/header')?>

       
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Kullanıcı Ekle</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

        <form>    
            <div class="row">
                <div class="form-group">
                    <label>Kullanıcı Adı</label>
                    <input class="form-control" placeholder="Kullanıcı Adını Giriniz">
                </div>
                <div class="form-group">
                    <label>Şifre</label>
                    <input class="form-control" placeholder="Şifre Giriniz">
                </div>
            </div>
          <button type="submit" class="btn btn-default">Kaydet</button>
        </form> 



<?php $this->load->view('panel/footer')?>