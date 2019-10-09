<!DOCTYPE html>
<html lang="en">
    @include('layouts.head_publik')

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    {{--
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div> --}}
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topheader" id="top">
            <div class="fix-width">
                <nav class="navbar top-navbar navbar-expand-md navbar-light">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                    <!-- Logo will be here -->
                    <a class="navbar-brand" href=""><img src="{{ asset('assets/images/logo-bapem.png')}}" alt="logo-sibapem" /></a>
                
                    <!-- This is the navigation menu -->
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ml-auto stylish-nav">
                            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"><i class="ti-link"></i> Link/Tautan Media Sosial</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="http://p4tktkplb.kemdikbud.go.id/" target="_blank"><i class="ti-joomla"></i> Laman Resmi PPPPTK TK dan PLB</a>
                                    <a class="dropdown-item" href="https://www.facebook.com/p4tktkplb" target="_blank"><i class="ti-facebook"></i>  Facebook Fan Fage</a>
                                    <a class="dropdown-item" href="https://twitter.com/p4tk_tkplb" target="_blank"><i class="ti-twitter"></i>  Twitter</a>
                                    <a class="dropdown-item" href="https://www.youtube.com/channel/UCnYxBXLAxncqZ7f4t9mmNCA" target="_blank"><i class="ti-youtube"></i>  Youtube Chanel</a>
                                    <a class="dropdown-item" href="https://www.instagram.com/p4tktkplb/" target="_blank"><i class="ti-instagram"></i> Instagram</a>
                                    <a class="dropdown-item" href=" https://wa.me/628112403999" target="_blank"><i class="ti-themify-favicon-alt"></i>  WhatsApp</a>
                                </div>
                            </li>
                            {{--
                            <li class="nav-item"> <a class="nav-link" href="../Documentation/document.html" target="_blank">Documentation</a> </li>
                            --}}
                            <li class="nav-item"> <a class="m-t-5 btn btn-info font-13" href="https://wa.me/6282185016933" style="width:120px;">Kontak Admin</a> </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">

                @yield('content')

            </div>
        </div>
        <!-- footer -->
        <!-- ============================================================== -->
        <a class="bt-top btn btn-circle btn-lg btn-warning" href="#top"><i class="ti-arrow-up"></i></a>
        <footer class="footer row p-l-20 p-r-20">

            <div class="col-md-12 sub-footer">
                <span>Copyright 2019. All Rights Reserved by <a class="text-white " href="http://p4tktkplb.kemdikbud.go.id" target="_blank">PPPPTK TK dan PLB</a></span>
                <span class="pull-right">Design & Developed by <a class="text-white" href="mailto:aam.sudrajat@kemdikbud.go.id" target="_blank">Sudrajat</a></span>
            </div>
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->

    <script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('assets/js/waves.js')}}"></script>
    <!--stickey kit -->
    <script src="{{ asset('assets/js/sticky-kit.min.js')}}"></script>
    <!-- jQuery for carousel -->
    {{--
    <script src="{{ asset('assets/plugins/owl.carousel/owl.carousel.min.js')}}"></script> --}}
    <!--Custom JavaScript -->
    <script src="{{ asset('assets/js/custom_fe.js')}}"></script>
    @yield('scripts')
</body>

</html>
