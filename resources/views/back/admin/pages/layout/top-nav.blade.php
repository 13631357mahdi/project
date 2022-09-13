<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>نوار بالای صفحه | کنترل پنل مدیریت</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../dist/css/bootstrap-theme.css">
  <!-- Bootstrap rtl -->
  <link rel="stylesheet" href="../../dist/css/rtl.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="../../index2.html" class="navbar-brand"><b>کنترل پنل مدیریت</b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-right" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">لینک ۱ <span class="sr-only">(current)</span></a></li>
            <li><a href="#">لینک ۲</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">منوی آبشاری <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">سطح ۱</a></li>
                <li><a href="#">سطح ۱</a></li>
                <li><a href="#">سطح ۱</a></li>
                <li class="divider"></li>
                <li><a href="#">بخش ۲</a></li>
                <li class="divider"></li>
                <li><a href="#">بخش ۳</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" id="navbar-search-input" placeholder="جستجو">
            </div>
          </form>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-envelope-o"></i>
                <span class="label label-success">4</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">۴ پیام خوانده نشده</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li><!-- start message -->
                      <a href="#">
                        <div class="pull-right">
                          <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                          علیرضا
                          <small><i class="fa fa-clock-o"></i> ۵ دقیقه پیش</small>
                        </h4>
                        <p>متن پیام</p>
                      </a>
                    </li>
                    <!-- end message -->
                    <li>
                      <a href="#">
                        <div class="pull-right">
                          <img src="../../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                          نگین
                          <small><i class="fa fa-clock-o"></i> ۲ ساعت پیش</small>
                        </h4>
                        <p>متن پیام</p>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="pull-right">
                          <img src="../../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                          نسترن
                          <small><i class="fa fa-clock-o"></i> امروز</small>
                        </h4>
                        <p>متن پیام</p>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="pull-right">
                          <img src="../../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                          نگین
                          <small><i class="fa fa-clock-o"></i> دیروز</small>
                        </h4>
                        <p>متن پیام</p>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="pull-right">
                          <img src="../../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                          نسترن
                          <small><i class="fa fa-clock-o"></i> ۲ روز پیش</small>
                        </h4>
                        <p>متن پیام</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="footer"><a href="#">نمایش تمام پیام ها</a></li>
              </ul>
            </li>
            <!-- /.messages-menu -->
            <!-- Notifications: style can be found in dropdown.less -->
            <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning">۱۰</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">۱۰ اعلان جدید</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i> ۵ کاربر جدید ثبت نام کردند
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-warning text-yellow"></i> اخطار دقت کنید
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-red"></i> ۴ کاربر جدید ثبت نام کردند
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-shopping-cart text-green"></i> ۲۵ سفارش جدید
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-user text-red"></i> نام کاربریتان را تغییر دادید
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="footer"><a href="#">نمایش همه</a></li>
              </ul>
            </li>
            <!-- Tasks: style can be found in dropdown.less -->
            <li class="dropdown tasks-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-flag-o"></i>
                <span class="label label-danger">۹</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">۹ کار برای انجام دارید</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li><!-- Task item -->
                      <a href="#">
                        <h3>
                          ساخت دکمه
                          <small class="pull-left">20%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">20% تکمیل شده</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                    <li><!-- Task item -->
                      <a href="#">
                        <h3>
                          ساخت قالب جدید
                          <small class="pull-left">40%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">40% تکمیل شده</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                    <li><!-- Task item -->
                      <a href="#">
                        <h3>
                          تبلیغات
                          <small class="pull-left">60%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">60% تکمیل شده</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                    <li><!-- Task item -->
                      <a href="#">
                        <h3>
                          ساخت صفحه فرود
                          <small class="pull-left">80%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                               aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">80% تکمیل شده</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                  </ul>
                </li>
                <li class="footer">
                  <a href="#">نمایش همه</a>
                </li>
              </ul>
            </li>
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs">نت کپی
</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                  <p>
                    نت کپی

                    <small>مدیریت کل سایت</small>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="row">
                    <div class="col-xs-4 text-center">
                      <a href="#">صفحه من</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">فروش</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">دوستان</a>
                    </div>
                  </div>
                  <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">پروفایل</a>
                  </div>
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">خروج</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          منوی بالای سایت
          <small>مثال ۲</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> خانه</a></li>
          <li><a href="#">لایه ها</a></li>
          <li class="active">نوار بالا</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="callout callout-info">
          <h4>توجه</h4>

          <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
        </div>
        <div class="callout callout-danger">
          <h4>اخطار</h4>

          <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
        </div>
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">باکس</h3>
          </div>
          <div class="box-body">
            متن قرار دهید
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer text-left">
    <strong>Copyleft &copy; 2014-2017 <a href="https://adminlte.io">Almsaeed Studio</a> & <a href="https://netcopy.ir">netcopy</a></strong>
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
