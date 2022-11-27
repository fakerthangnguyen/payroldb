
<!DOCTYPE HTML

<html lang="en">
    <head>
@include('admin.shares.css')


    </head>
    <body>
        <div class="navbar navbar-fixed-top">
           @include('admin.shares.header')
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        @include('admin.shares.nav')
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">

                      @yield('content')
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            @include('admin.shares.footer')
            <!--footer -->
        </div>
       @include('admin.shares.js')
       <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" ></script>
    @yield('js')
    </body>
</html>
