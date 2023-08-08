@include('layouts.admin-partials._header')
    
    <div id="app">

        <div id="wrapper">
            
                @include('layouts.admin-partials._sidebar')
        
                    <!-- Content Wrapper -->
                    <div id="content-wrapper" class="d-flex flex-column">

                        <!-- Main Content -->
                        <div id="content">

                            @include('layouts.admin-partials._topbar')

                            <!-- Begin Page Content -->
                            
                            <div class="container-fluid pb-2 mb-2">
                                
                                <main>

                                @yield('content')

                                </main>
                            </div>
                            <!-- /.container-fluid -->

                        </div>
                        <!-- End of Main Content -->

                        @include('layouts.admin-partials._footer_block')

                    </div>
                    <!-- End of Content Wrapper -->
        </div>
    </div>

    @include('layouts.admin-partials._scroll-to-top')

    @include('layouts.admin-partials._logout-modal')

    @include('layouts.admin-partials._footer')