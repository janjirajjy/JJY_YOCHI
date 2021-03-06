<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>สมัครสมาชิก</title>
    <meta name="description" content="Elmer is a Dashboard & Admin Site Responsive Template by hencework." />
    <meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Elmer Admin, Elmeradmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
    <meta name="author" content="hencework" />
    <meta name="google-signin-client_id" content="425773223679-0afdbvv2qkr2afnb9momibek48c26im7.apps.googleusercontent.com">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Morris Charts CSS -->
    <link href="vendors/bower_components/morris.js/morris.css" rel="stylesheet" type="text/css" />

    <!-- vector map CSS -->
    <link href="vendors/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" type="text/css" />

    <!-- Calendar CSS -->
    <link href="vendors/bower_components/fullcalendar/dist/fullcalendar.css" rel="stylesheet" type="text/css" />

    <!-- Data table CSS -->
    <link href="vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">

</head>

<body>
    <!--Preloader-->
    <div class="preloader-it">
        <div class="la-anim-1"></div>
    </div>
    <!--/Preloader-->
    <div class="wrapper  theme-1-active pimary-color-blue">
        <!-- Top Menu Items -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="grad1">
            <div class="mobile-only-brand pull-left">
                <div class="nav-header pull-left">
                    <div class="logo-wrap">
                        <a href="index1.php">

                            <span class="brand-text">E-AUCTION</span>
                        </a>
                    </div>
                </div>
                <a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i
                        class="zmdi zmdi-menu"></i></a>
                <a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view"
                    href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
                <a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
                <form id="search_form" role="search" class="top-nav-search collapse pull-left">

                </form>

            </div>
            <div class="mobile-only-nav pull-right">

            </div>

            <div id="mobile_only_nav" class="mobile-only-nav pull-right">
                <ul class="nav navbar-right top-nav pull-right">
                    <li>
                       
                    </li>
                    <li class="dropdown auth-drp">
                        <!-- <a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="dist/img/user1.png"
                                alt="user_auth" class="user-auth-img img-circle" /><span class="user-online-status"></span></a>
                        <span class="user-online-status"></span>
                        </a> -->
                        <!-- <ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX"> -->
                            <!-- <li>
                                <a href="profile.html"><i class="zmdi zmdi-account"></i><span>ข้อมูลส่วนตัว</span></a>
                            </li> -->

                            <li class="divider"></li>
                            <li>
                                <a href="login.php"><i class="zmdi zmdi-power"></i><span>เข้าสู่ระบบ</span></a>
                            </li>
                        </ul>

                    </li>
                </ul>
            </div>
        </nav>
        <!-- /Top Menu Items -->

        <!-- Left Sidebar Menu -->
        <div class="fixed-sidebar-left">
            <ul class="nav navbar-nav side-nav nicescroll-bar" id="grad1">
                <li class="navigation-header">
                    <span>Main</span>
                    <i class="zmdi zmdi-more"></i>
                </li>
                <li>
                    <a href="index1.html" data-toggle="collapse" data-target="#app_dr">
                        <div class="pull-left "><img src="./dist/img/icons8-home-50.png" width="20" class="mr-20">
                            <span class="right-nav-text " style="font-size:18px"> หน้าแรก</span></div>
                        <div class="clearfix"></div>
                    </a>
                    <ul id="app_dr" class="collapse collapse-level-1">
                    </ul>
                </li>
                <li>
                    <a href="profile.html" data-toggle="collapse" data-target="#app_dr">
                        <div class="pull-left "><img src="./dist/img/iconsuser.png" width="20" class="mr-20">
                            <span class="right-nav-text " style="font-size:18px"> ผู้ใช้งาน</span></div>
                        <div class="clearfix"></div>
                    </a>
                    <ul id="app_dr" class="collapse collapse-level-1">
                    </ul>
                </li>
                <li>
                    <a href="add-Products.html" data-toggle="collapse" data-target="#app_dr">
                        <div class="pull-left "><img src="./dist/img/iconmaket.png" width="20" class="mr-20">
                            <span class="right-nav-text " style="font-size:18px"> ลงขาย</span></div>
                        <div class="clearfix"></div>
                    </a>
                    <ul id="app_dr" class="collapse collapse-level-1">
                    </ul>
                </li>
                <li>
                    <a href="basket.html" data-toggle="collapse" data-target="#app_dr">
                        <div class="pull-left "><img src="./dist/img/iconssell.png" width="20" class="mr-20">
                            <span class="right-nav-text " style="font-size:18px"> ตะกร้า</span></div>
                        <div class="clearfix"></div>
                    </a>
                    <ul id="app_dr" class="collapse collapse-level-1">
                    </ul>
                </li>
                <li>
                    <a href="Paymenthistory.html" data-toggle="collapse" data-target="#app_dr">
                        <div class="pull-left "><img src="./dist/img/iconsประวัติ-50.png" width="20" class="mr-20">
                            <span class="right-nav-text " style="font-size:18px"> ประวัติการชำระเงิน</span></div>
                        <div class="clearfix"></div>
                    </a>
                    <ul id="app_dr" class="collapse collapse-level-1">
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#manu">
                        <div class="pull-left "><img src="./dist/img/iconslist.png" width="20" class="mr-20">
                            <span class="right-nav-text " style="font-size:18px"> หมวดหมู่</span></div>
                        <div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div>
                        <div class="clearfix"></div>
                    </a>

                    <ul id="manu" class="collapse collapse-level-1">
                        <li>
                            <a href="electronic.html">อุปกรณ์ อิเล็กทรอนิก</a>
                        </li>
                        <li>
                            <a href="cloth.html">เสื้อผ้า</a>
                        </li>
                        <li>
                            <a href="sport.html">กีฬา</a>
                        </li>
                        <li>
                            <a href="craftsmantool.html">เครื่องมือช่าง</a>
                        </li>
                        <li>
                            <a href="cosmetics.html">เครื่องสำอาง</a>
                        </li>
                    </ul>



                </li>

            </ul>
        </div>

        <!-- /Left Sidebar Menu -->

        <!-- Right Sidebar Menu -->

        <!-- /Right Sidebar Menu -->



        <!-- Main Content -->
        <div class="page-wrapper">
            <div class="container-fluid pt-25">



                <!-- Row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default card-view">
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                    <h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-info-outline mr-10"></i>สมัครสมาชิก</h6>
                                    <hr class="light-grey-hr" />
                                    <div class="form-wrap">
                                        <form action="#">

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10" for="exampleInputName_1">ชื่อผู้ใช้</label>
                                                        <input type="" class="form-control" required="" id="exampleInputName_1"
                                                            placeholder="ชื่อผู้ใช้">
                                                    </div>
                                                </div>


                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10" for="exampleInputName_1">รหัสผ่าน</label>
                                                        <input type="" class="form-control" required="" id="exampleInputName_1"
                                                            placeholder="รหัสผ่าน">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10" for="exampleInputName_1">ชื่อ</label>
                                                        <input type="" class="form-control" required="" id="exampleInputName_1"
                                                            placeholder="ชื่อ">
                                                    </div>
                                                </div>

                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10" for="exampleInputName_1">นามสกุล</label>
                                                        <input type="" class="form-control" required="" id="exampleInputName_1"
                                                            placeholder="นามสกุล">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10" for="exampleInputName_1">เพศ</label>
                                                        <div class="radio-list">
                                                            <div class="radio-inline pl-0">
                                                                <div class="radio radio-info">
                                                                    <input type="radio" name="radio" id="radio1" value="option1">
                                                                    <label for="radio1">ชาย</label>
                                                                </div>
                                                            </div>
                                                            <div class="radio-inline">
                                                                <div class="radio radio-info">
                                                                    <input type="radio" name="radio" id="radio2" value="option2">
                                                                    <label for="radio2">หญิง</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10" for="exampleInputName_1">วันเกิด</label>
                                                        <input type="date" class="form-control" required="" id="exampleInputName_1"
                                                            placeholder="วันเกิด">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10" for="exampleInputName_1">เบอร์โทรศัพท์</label>
                                                        <input type="" class="form-control" required="" id="exampleInputName_1"
                                                            placeholder="เบอร์โทรศัพท์">
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10" for="exampleInputName_1">อีเมล</label>
                                                        <input type="email" class="form-control" required="" id=""
                                                            placeholder="อีเมล">                                                            
                                                    </div>                                                    
                                                </div>

                                              
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10" for="exampleInputName_1">รายละเอียดที่อยู่</label>
                                                        <input type="" class="form-control" required="" id="exampleInputName_1"
                                                            placeholder="ห้องเลขที่,บ้านเลขที่,ตึก,ชื่อถนน">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10" for="exampleInputName_1">อำเภอ</label>
                                                        <input type="" class="form-control" required="" id="exampleInputName_1"
                                                            placeholder="อำเภอ">
                                                    </div>
                                                </div>

                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10" for="exampleInputName_1">จังหวัด</label>
                                                        <input type="" class="form-control" required="" id="exampleInputName_1"
                                                            placeholder="จังหวัด">
                                                    </div>
                                                </div>

                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10" for="exampleInputName_1">รหัสไปรษณี</label>
                                                        <input type="" class="form-control" required="" id="exampleInputName_1"
                                                            placeholder="รหัสไปรษณี">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="control-label mb-10" for="exampleInputName_1">อื่นๆ</label>
                                                        <input type="" class="form-control " required="" id="exampleInputName_1"
                                                            placeholder="อื่นๆ">
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="form-group">
                                                <div class="checkbox checkbox-primary pr-10 pull-left">
                                                    <input id="checkbox_2" required="" type="checkbox">
                                                    <label for="checkbox_2"> ฉันยอมรับเงื่อนไขทั้งหมด </label>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>

                                            <div class="form-group text-center">
                                                <button type="submit" class="btn btn-primary btn-rounded">sign Up</button>
                                            </div>

                                        </form>
                                        
                                        <div class="button-list mt-25">
                                                                                      
                                            <div class="g-signin2" data-onsuccess="onSignIn"></div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Row -->




            </div>
            <!-- Footer -->
            <footer class="footer container-fluid pl-30 pr-30">
                <div class="row">
                    <div class="col-sm-12">
                        <p>2019 &copy;JJY </p>
                    </div>
                </div>
            </footer>
            <!-- /Footer -->

        </div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->

    <!-- JavaScript -->

    <!-- jQuery -->
    <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Vector Maps JavaScript -->
    <script src="vendors/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="vendors/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="dist/js/vectormap-data.js"></script>

    <!-- Calender JavaScripts -->
    <script src="vendors/bower_components/moment/min/moment.min.js"></script>
    <script src="vendors/jquery-ui.min.js"></script>
    <script src="vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="dist/js/fullcalendar-data.js"></script>

    <!-- Counter Animation JavaScript -->
    <script src="vendors/bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="vendors/bower_components/jquery.counterup/jquery.counterup.min.js"></script>

    <!-- Data table JavaScript -->
    <script src="vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>

    <!-- Slimscroll JavaScript -->
    <script src="dist/js/jquery.slimscroll.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="dist/js/dropdown-bootstrap-extended.js"></script>

    <!-- Sparkline JavaScript -->
    <script src="vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>

    <script src="vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
    <script src="dist/js/skills-counter-data.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="vendors/bower_components/raphael/raphael.min.js"></script>
    <script src="vendors/bower_components/morris.js/morris.min.js"></script>
    <script src="dist/js/morris-data.js"></script>

    <!-- Owl JavaScript -->
    <script src="vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>

    <!-- Switchery JavaScript -->
    <script src="vendors/bower_components/switchery/dist/switchery.min.js"></script>

    <!-- Data table JavaScript -->
    <script src="vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>

    <!-- Gallery JavaScript -->
    <script src="dist/js/isotope.js"></script>
    <script src="dist/js/lightgallery-all.js"></script>
    <script src="dist/js/froogaloop2.min.js"></script>
    <script src="dist/js/gallery-data.js"></script>

    <!-- twitter JavaScript -->
    <script src="dist/js/twitterFetcher.js"></script>

    <!-- Spectragram JavaScript -->
    <script src="dist/js/spectragram.min.js"></script>

    <!-- Init JavaScript -->
    <script src="dist/js/init.js"></script>
    <script src="dist/js/widgets-data.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script>
        function onSignIn(googleUser) {
            var profile = googleUser.getBasicProfile();
            console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
            console.log('Name: ' + profile.getName());
            console.log('Image URL: ' + profile.getImageUrl());
            console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
        }
    </script>
</body>

</html>