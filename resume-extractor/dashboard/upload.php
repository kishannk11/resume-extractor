<?php
require('navbar.php')
?>

        <div class="page-wrapper">
            <!-- Page Content-->
            <div class="page-content">

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-right">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Resume Extractor</a></li>
                                        <li class="breadcrumb-item active">Resume Uploads</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Resume Uploads</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-xl-11">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Upload your Resume</h4>
                                    <p class="text-muted mb-3">Upload your Resume here</p>
                                    <input type="file" id="input-file-now" class="dropify" />
                                    <button type="button" class="btn btn-gradient-primary">Submit</button>                                                

                                </div><!--end card-body-->
                                
                            </div><!--end card-->
                            
                        </div><!--end col-->
                        
                    </div><!--end row-->
                </div><!-- container -->

                <footer class="footer text-center text-sm-left">
                    &copy; 2020 Resume Extractor <span class="text-muted d-none d-sm-inline-block float-right">Crafted by <i class="mdi mdi-heart text-danger"></i> by Kishan Nayak</span>
                </footer><!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        


        <!-- jQuery  -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/jquery-ui.min.js"></script>
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/js/metismenu.min.js"></script>
        <script src="../assets/js/waves.js"></script>
        <script src="../assets/js/feather.min.js"></script>
        <script src="../assets/js/jquery.slimscroll.min.js"></script>  
        
        <script src="../../plugins/dropify/js/dropify.min.js"></script>
        <script src="../assets/pages/jquery.form-upload.init.js"></script>

        <!-- App js -->
        <script src="../assets/js/app.js"></script>
        
    </body>

</html>