<?php $this->load->view('panel/header')?>


 <link href="<?=site_url('vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?=site_url('vendor/metisMenu/metisMenu.min.css')?>" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?=site_url('vendor/datatables-plugins/dataTables.bootstrap.css')?>" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?=site_url('vendor/datatables-responsive/dataTables.responsive.css')?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=site_url('dist/css/sb-admin-2.css')?>" rel="stylesheet">

    <!-- Custom Fonts -->
  <link href="<?=site_url('vendor/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">

    
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Ürünler</h1>
                    </div>
                </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ürün Tablosu
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Ürün Adı</th>
                                        <th>Fiyatı</th>
                                        <th>Türü</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="gradeX">
                                        <td>Galaxy Note 8</td>
                                        <td>3999</td>
                                        <td>Cep Telefonu</td>
                                    </tr>
                                    <tr class="gradeX">
                                        <td>Iphone 7</td>
                                        <td>3300</td>
                                        <td>Cep Telefonu</td>
                                    </tr>
                                    <tr class="gradeX">
                                        <td>Msi PE60 6QE</td>
                                        <td>Dizüstü Bilgisayar</td>
                                        <td>3250</td>
                                    </tr>
                                    <tr class="gradeX">
                                        <td>Canon Pixma E414</td>
                                        <td>Yazıcı</td>
                                        <td>70</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
           </div>



     <script src="<?=site_url('vendor/jquery/jquery.min.js')?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=site_url('vendor/bootstrap/js/bootstrap.min.js')?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?=site_url('vendor/metisMenu/metisMenu.min.js')?>"></script>

     <script src="<?=site_url('vendor/datatables/js/jquery.dataTables.min.js')?>"></script>

    <script src="<?=site_url('vendor/datatables-plugins/dataTables.bootstrap.min.js')?>"></script>

    <script src="<?=site_url('vendor/datatables-responsive/dataTables.responsive.js')?>"></script>

    <script src="<?=site_url('vendor/raphael/raphael.min.js')?>"></script>

     <script src="<?=site_url('vendor/morrisjs/morris.min.js')?>"></script>

     <script src="<?=site_url('data/morris-data.js')?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?=site_url('dist/js/sb-admin-2.js')?>"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

    </body>

</html>