<!-- Header-->
<header id="header">
    <div class="header-top-login">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-md-offset-2 col-lg-4  col-lg-offset-2 ">
                    <div class="block-form">
                        <h3>Account login</h3>
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Username">
                                </div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Password">
                                </div>
                                <div class="col-md-12">
                                    <input type="submit"  value="Login"  class="btn-default-1">
                                </div>
                            </div>                                    
                        </form>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="block-form">
                        <h3>Create new account</h3>
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class="col-md-12">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="col-md-12">
                                    <input type="submit"  value="Continue"  class="btn-default-1">
                                </div>
                            </div>                                    
                        </form>
                    </div>
                </div>
                <div class="col-sm-12 col-md-2 col-lg-2 text-center">

                </div>
            </div>
        </div>
        <a href="#" id="header-login-close"><i class="icon-remove"></i> </a>
    </div>

    @include('queen.sections.header_top_row')

    <div class="header-bg">
        <div class="header-main" id="header-main-fixed">
            <div class="container">
                <div id="container-fixed">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="index.html" class="header-logo pull-left"></a>        
                        </div>
                        <div class="col-md-6">

                            @include('queen.partials.header_mini_cart')

                            <div class="top-search-form  pull-right">
                                <form action="#" method="post">
                                    <input type="text" placeholder="Search ...">
                                    <button type="submit"><i class="icon-search"></i></button>
                                </form>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('queen.partials.navbar')

        </div>
    </div>
    <!-- /header-main-menu -->
</header>
<!-- End header -->