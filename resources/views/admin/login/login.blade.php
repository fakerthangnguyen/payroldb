
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>login</title>
        <link type="text/css" href="/admin/resources/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="/admin/resources/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="/admin/resources/css/theme.css" rel="stylesheet">
        <link type="text/css" href="/admin/resources/images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    </head>
    <body>

        <div class="navbar navbar-fixed-top" >
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i>
                    </a>

                    <a class="brand" href="index.html">
                        Admin
                    </a>

                    <div class="nav-collapse collapse navbar-inverse-collapse">

                        <ul class="nav pull-right">

                            <li><a href="#">
                                    Sign Up
                                </a></li>



                            <li><a href="#">
                                    Forgot your password?
                                </a></li>
                        </ul>
                    </div><!-- /.nav-collapse -->
                </div>
            </div><!-- /navbar-inner -->
        </div><!-- /navbar -->

        <div class="wrapper" id="app">
            <div class="container">
                <div class="row">
                    <div class="module module-login span4 offset4">
                        <form class="form-vertical">
                            <div class="module-head">
                                <h3>Sign In</h3>
                            </div>
                            <div class="module-body">
                                <div class="control-group">
                                    <div class="controls row-fluid">
                                       Đăng nhập
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls row-fluid">
                                     <input v-model="login.Email" type="email" maxlength="400" placeholder="Username"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls row-fluid">
                                        <input v-model="login.Password" type="password" placeholder="Password"/>
                                    </div>
                                </div>
                            </div>
                            <div class="module-foot">
                                <div class="control-group">
                                    <div class="controls clearfix">
                                        <button v-on:click="clickLogin()" type="button" class="btn btn-primary pull-right">Login</button>
                                        <label class="checkbox">
                                            <input type="checkbox"> Remember me
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!--/.wrapper-->

        <!--/.wrapper-->

        <div class="footer">
            <tiles:insertAttribute name="loginfooter" />
        </div>
        <script src="/admin/resources/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="/admin/resources/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="/admin/resources/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"></script>
    </body>
    <script>
        new Vue({
            el      :   '#app',
            data    :   {
                login   :   {},
            },
            methods :   {
                clickLogin() {
                    axios
                        .post('/login', this.login)
                        .then((res) => {
                            if(res.data.status) {
                                toastr.success(res.data.mess);
                                // window.location.href = '/admin-lte/tai-khoan/index';
                            } else if(res.data.status == 0) {
                                toastr.error(res.data.mess);
                            } else if(res.data.status == 2) {
                                toastr.warning(res.data.mess);
                            }
                        })
                        .catch((res) => {
                            var listE = res.response.data.errors;
                            $.each(listE, function(k, v) {
                                toastr.error(v[0]);
                            });
                        });
                }
            },
        });
    </script>
