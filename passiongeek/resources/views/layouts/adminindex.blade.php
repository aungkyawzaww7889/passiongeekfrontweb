@include('layouts.adminheader')

<!-- start react or vuejs  -->
<div id="app">

    <!-- Page Wrapper  -->
    <section>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-9 pt-md-5 mt-md-3 ">

                     <!-- start inner content area  -->

                        <div class="row">
                            <!-- start breadcrumb  -->
                                {{-- <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="fas fa-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Previous</a></li>
                                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Current</a></li>
                                    </ol>
                                </nav> --}}
                            <!-- emd breadcrumb  -->

                            @yield('content')

                        </div>
                    <!-- emd inner content area  -->


                </div>
            </div>
        </div>

        

    </section>
    <!-- Page Wrapper  -->

</div>
<!-- end react or vuejs  -->

@include('layouts.adminfooter')


