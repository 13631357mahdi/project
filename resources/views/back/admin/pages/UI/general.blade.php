<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>عمومی | کنترل پنل</title>
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
  <style>
    .color-palette {
      height: 35px;
      line-height: 35px;
      text-align: center;
    }

    .color-palette-set {
      margin-bottom: 15px;
    }

    .color-palette span {
      display: none;
      font-size: 12px;
    }

    .color-palette:hover span {
      display: block;
    }

    .color-palette-box h4 {
      position: absolute;
      top: 100%;
      left: 25px;
      margin-top: -40px;
      color: rgba(255, 255, 255, 0.8);
      font-size: 12px;
      display: block;
      z-index: 7;
    }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">پنل</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>کنترل پنل مدیریت</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>


      <!-- Delete This after download -->
             <!-- End Delete-->



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
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- right side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-right image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-right info">
          <p>نت کپی
</p>
          <a href="#"><i class="fa fa-circle text-success"></i> آنلاین</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="جستجو">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">منو</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>داشبرد</span>
            <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="../../index.html"><i class="fa fa-circle-o"></i> داشبرد اول</a></li>
            <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> داشبرد دوم</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>لایه های صفحه</span>
            <span class="pull-left-container">
              <span class="label label-primary pull-left">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../../pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> نوار بالا</a></li>
            <li><a href="../../pages/layout/boxed.html"><i class="fa fa-circle-o"></i> باکس ها</a></li>
            <li><a href="../../pages/layout/fixed.html"><i class="fa fa-circle-o"></i> فیکس شده</a></li>
            <li><a href="../../pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> سایدبار</a></li>
          </ul>
        </li>
        <li>
          <a href="../../pages/widgets.html">
            <i class="fa fa-th"></i> <span>ویجت ها</span>
            <span class="pull-left-container">
              <small class="label pull-left bg-green">جدید</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>نمودارها</span>
            <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../../pages/charts/chartjs.html"><i class="fa fa-circle-o"></i>نمودار ChartJS</a></li>
            <li><a href="../../pages/charts/morris.html"><i class="fa fa-circle-o"></i>نمودار Morris</a></li>
            <li><a href="../../pages/charts/flot.html"><i class="fa fa-circle-o"></i>نمودار Flot</a></li>
            <li><a href="../../pages/charts/inline.html"><i class="fa fa-circle-o"></i>نمودار Inline charts</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>اشیای گرافیکی</span>
            <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../../pages/UI/general.html"><i class="fa fa-circle-o"></i> عمومی</a></li>
            <li><a href="../../pages/UI/icons.html"><i class="fa fa-circle-o"></i> آیکون</a></li>
            <li><a href="../../pages/UI/buttons.html"><i class="fa fa-circle-o"></i> دکمه</a></li>
            <li><a href="../../pages/UI/sliders.html"><i class="fa fa-circle-o"></i> اسلایدر</a></li>
            <li><a href="../../pages/UI/timeline.html"><i class="fa fa-circle-o"></i> تایم لاین</a></li>
            <li><a href="../../pages/UI/modals.html"><i class="fa fa-circle-o"></i> مدال</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>فرم ها</span>
            <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../../pages/forms/general.html"><i class="fa fa-circle-o"></i> اجزای عمومی</a></li>
            <li><a href="../../pages/forms/advanced.html"><i class="fa fa-circle-o"></i> پیشرفته</a></li>
            <li><a href="../../pages/forms/editors.html"><i class="fa fa-circle-o"></i> ویرایشگر</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>جداول</span>
            <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../../pages/tables/simple.html"><i class="fa fa-circle-o"></i> جدول ساده</a></li>
            <li><a href="../../pages/tables/data.html"><i class="fa fa-circle-o"></i> جدول داده</a></li>
          </ul>
        </li>
        <li>
          <a href="../../pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>تقویم</span>
            <span class="pull-left-container">
              <small class="label pull-left bg-red">۳</small>
              <small class="label pull-left bg-blue">۱۷</small>
            </span>
          </a>
        </li>
        <li>
          <a href="../../pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>ایمیل ها</span>
            <span class="pull-left-container">
              <small class="label pull-left bg-yellow">۱۲</small>
              <small class="label pull-left bg-green">۱۶</small>
              <small class="label pull-left bg-red">۵</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>مثال ها</span>
            <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../../pages/examples/invoice.html"><i class="fa fa-circle-o"></i> سفارش</a></li>
            <li><a href="../../pages/examples/profile.html"><i class="fa fa-circle-o"></i> پروفایل</a></li>
            <li><a href="../../pages/examples/login.html"><i class="fa fa-circle-o"></i> صفحه ورود</a></li>
            <li><a href="../../pages/examples/register.html"><i class="fa fa-circle-o"></i> ثبت نام</a></li>
            <li><a href="../../pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> قفل صفحه</a></li>
            <li><a href="../../pages/examples/404.html"><i class="fa fa-circle-o"></i> ارور ۴۰۴</a></li>
            <li><a href="../../pages/examples/500.html"><i class="fa fa-circle-o"></i> ارور ۵۰۰</a></li>
            <li><a href="../../pages/examples/blank.html"><i class="fa fa-circle-o"></i> صفحه خالی</a></li>
            <li><a href="../../pages/examples/pace.html"><i class="fa fa-circle-o"></i> صفحه سریع</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>چندسطحی</span>
            <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> سطح اول</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> سطح اول
                <span class="pull-left-container">
                  <i class="fa fa-angle-right pull-left"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> سطح دوم</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> سطح دوم
                    <span class="pull-left-container">
                      <i class="fa fa-angle-right pull-left"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> سطح سوم</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> سطح سوم</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> سطح اول</a></li>
          </ul>
        </li>
        <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>مستندات</span></a></li>
        <li class="header">برچسب ها</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>مهم</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>هشدار</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>اطلاعات</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        گرافیک عمومی
        <small>مثال ها</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> خانه</a></li>
        <li><a href="#">گرافیک</a></li>
        <li class="active">عمومی</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- COLOR PALETTE -->
      <div class="box box-default color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-tag"></i> رنگ های آماده</h3>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-sm-4 col-md-2">
              <h4 class="text-center">Primary</h4>

              <div class="color-palette-set">
                <div class="bg-light-blue disabled color-palette"><span>Disabled</span></div>
                <div class="bg-light-blue color-palette"><span>#3c8dbc</span></div>
                <div class="bg-light-blue-active color-palette"><span>Active</span></div>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 col-md-2">
              <h4 class="text-center">Info</h4>

              <div class="color-palette-set">
                <div class="bg-aqua disabled color-palette"><span>Disabled</span></div>
                <div class="bg-aqua color-palette"><span>#00c0ef</span></div>
                <div class="bg-aqua-active color-palette"><span>Active</span></div>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 col-md-2">
              <h4 class="text-center">Success</h4>

              <div class="color-palette-set">
                <div class="bg-green disabled color-palette"><span>Disabled</span></div>
                <div class="bg-green color-palette"><span>#00a65a</span></div>
                <div class="bg-green-active color-palette"><span>Active</span></div>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 col-md-2">
              <h4 class="text-center">Warning</h4>

              <div class="color-palette-set">
                <div class="bg-yellow disabled color-palette"><span>Disabled</span></div>
                <div class="bg-yellow color-palette"><span>#f39c12</span></div>
                <div class="bg-yellow-active color-palette"><span>Active</span></div>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 col-md-2">
              <h4 class="text-center">Danger</h4>

              <div class="color-palette-set">
                <div class="bg-red disabled color-palette"><span>Disabled</span></div>
                <div class="bg-red color-palette"><span>#f56954</span></div>
                <div class="bg-red-active color-palette"><span>Active</span></div>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 col-md-2">
              <h4 class="text-center">Gray</h4>

              <div class="color-palette-set">
                <div class="bg-gray disabled color-palette"><span>Disabled</span></div>
                <div class="bg-gray color-palette"><span>#d2d6de</span></div>
                <div class="bg-gray-active color-palette"><span>Active</span></div>
              </div>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
          <div class="row">
            <div class="col-sm-4 col-md-2">
              <h4 class="text-center">Navy</h4>

              <div class="color-palette-set">
                <div class="bg-navy disabled color-palette"><span>Disabled</span></div>
                <div class="bg-navy color-palette"><span>#001F3F</span></div>
                <div class="bg-navy-active color-palette"><span>Active</span></div>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 col-md-2">
              <h4 class="text-center">Teal</h4>

              <div class="color-palette-set">
                <div class="bg-teal disabled color-palette"><span>Disabled</span></div>
                <div class="bg-teal color-palette"><span>#39CCCC</span></div>
                <div class="bg-teal-active color-palette"><span>Active</span></div>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 col-md-2">
              <h4 class="text-center">Purple</h4>

              <div class="color-palette-set">
                <div class="bg-purple disabled color-palette"><span>Disabled</span></div>
                <div class="bg-purple color-palette"><span>#605ca8</span></div>
                <div class="bg-purple-active color-palette"><span>Active</span></div>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 col-md-2">
              <h4 class="text-center">Orange</h4>

              <div class="color-palette-set">
                <div class="bg-orange disabled color-palette"><span>Disabled</span></div>
                <div class="bg-orange color-palette"><span>#ff851b</span></div>
                <div class="bg-orange-active color-palette"><span>Active</span></div>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 col-md-2">
              <h4 class="text-center">Maroon</h4>

              <div class="color-palette-set">
                <div class="bg-maroon disabled color-palette"><span>Disabled</span></div>
                <div class="bg-maroon color-palette"><span>#D81B60</span></div>
                <div class="bg-maroon-active color-palette"><span>Active</span></div>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 col-md-2">
              <h4 class="text-center">Black</h4>

              <div class="color-palette-set">
                <div class="bg-black disabled color-palette"><span>Disabled</span></div>
                <div class="bg-black color-palette"><span>#111111</span></div>
                <div class="bg-black-active color-palette"><span>Active</span></div>
              </div>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      <!-- START ALERTS AND CALLOUTS -->
      <h2 class="page-header">اخطار و اعلان</h2>

      <div class="row">
        <div class="col-md-6">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-warning"></i>

              <h3 class="box-title">اخطار</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close pull-left" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i>توجه</h4>
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
              </div>
              <div class="alert alert-info alert-dismissible">
                <button type="button" class="close pull-left" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> توجه</h4>
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
              </div>
              <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close pull-left" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> توجه</h4>
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
              </div>
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close pull-left" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> توجه</h4>
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-md-6">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-bullhorn"></i>

              <h3 class="box-title">اعلان</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="callout callout-danger">
                <h4>اعلان danger</h4>

                <p>   لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
              </div>
              <div class="callout callout-info">
                <h4>اعلان info </h4>

                <p>   لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
              </div>
              <div class="callout callout-warning">
                <h4>اعلان warning </h4>

                <p>   لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
              </div>
              <div class="callout callout-success">
                <h4>اعلان success </h4>

                <p>   لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- END ALERTS AND CALLOUTS -->
      <!-- START CUSTOM TABS -->
      <h2 class="page-header">تب بندی</h2>

      <div class="row">
        <div class="col-md-6">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">تب 1</a></li>
              <li><a href="#tab_2" data-toggle="tab">تب 2</a></li>
              <li><a href="#tab_3" data-toggle="tab">تب 3</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  آبشاری <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">منو ۱</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">منو ۲</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">منو ۳</a></li>
                  <li role="presentation" class="divider"></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">منو ۴</a></li>
                </ul>
              </li>
              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <b>تیتر</b>

                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->

        <div class="col-md-6">
          <!-- Custom Tabs (Pulled to the right) -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#tab_1-1" data-toggle="tab">تب 1</a></li>
              <li><a href="#tab_2-2" data-toggle="tab">تب 2</a></li>
              <li><a href="#tab_3-2" data-toggle="tab">تب 3</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  آبشاری <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">منو ۱</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">منو ۲</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">منو ۳</a></li>
                  <li role="presentation" class="divider"></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">منو ۴</a></li>
                </ul>
              </li>
              <li class="pull-left header"><i class="fa fa-th"></i> تب های بیشتر</li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1-1">
                <b>تیتر</b>

                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2-2">
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3-2">
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- END CUSTOM TABS -->
      <!-- START PROGRESS BARS -->
      <h2 class="page-header">نوار پیشرفت</h2>

      <div class="row">
        <div class="col-md-6">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">سایزهای مختلف</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <p><code>.progress</code></p>

              <div class="progress">
                <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                  <span class="sr-only">40% کامل شده (success)</span>
                </div>
              </div>
              <p>Class: <code>.sm</code></p>

              <div class="progress progress-sm active">
                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                  <span class="sr-only">20% کامل شده</span>
                </div>
              </div>
              <p>Class: <code>.xs</code></p>

              <div class="progress progress-xs">
                <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                  <span class="sr-only">60% کامل شده (warning)</span>
                </div>
              </div>
              <p>Class: <code>.xxs</code></p>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                  <span class="sr-only">60% کامل شده (warning)</span>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (left) -->
        <div class="col-md-6">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">نوار پیشرفت</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="progress">
                <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                  <span class="sr-only">40% کامل شده (success)</span>
                </div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-aqua" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                  <span class="sr-only">20% کامل شده</span>
                </div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-yellow" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                  <span class="sr-only">60% کامل شده (warning)</span>
                </div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                  <span class="sr-only">80% کامل شده</span>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-md-6">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">نوار پیشرفت با سایزهای مختلف</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body text-center">
              <p>By adding the class <code>.vertical</code> and <code>.progress-sm</code>, <code>.progress-xs</code> or
                <code>.progress-xxs</code> we achieve:</p>

              <div class="progress vertical active">
                <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="height: 40%">
                  <span class="sr-only">40%</span>
                </div>
              </div>
              <div class="progress vertical progress-sm">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="height: 100%">
                  <span class="sr-only">100%</span>
                </div>
              </div>
              <div class="progress vertical progress-xs">
                <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="height: 60%">
                  <span class="sr-only">60%</span>
                </div>
              </div>
              <div class="progress vertical progress-xxs">
                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="height: 60%">
                  <span class="sr-only">60%</span>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (left) -->
        <div class="col-md-6">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">نوار پیشرفت عمودی</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body text-center">
              <p>By adding the class <code>.vertical</code> we achieve:</p>

              <div class="progress vertical">
                <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="height: 40%">
                  <span class="sr-only">40%</span>
                </div>
              </div>
              <div class="progress vertical">
                <div class="progress-bar progress-bar-aqua" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="height: 20%">
                  <span class="sr-only">20%</span>
                </div>
              </div>
              <div class="progress vertical">
                <div class="progress-bar progress-bar-yellow" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="height: 60%">
                  <span class="sr-only">60%</span>
                </div>
              </div>
              <div class="progress vertical">
                <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="height: 80%">
                  <span class="sr-only">80%</span>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->
      <!-- END PROGRESS BARS -->

      <!-- START ACCORDION & CAROUSEL-->
      <h2 class="page-header">آکاردئون و اسلایدر</h2>

      <div class="row">
        <div class="col-md-6">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">آکاردئون</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                        گروه اول
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="box-body">
                      لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                    </div>
                  </div>
                </div>
                <div class="panel box box-danger">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                        گروه Danger
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="box-body">
                      لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                    </div>
                  </div>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                        گروه Success
                      </a>
                    </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse">
                    <div class="box-body">
                      لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">اسلایدر</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="http://placehold.it/900x500/39CCCC/ffffff&text=I+Love+Bootstrap" alt="First slide">

                    <div class="carousel-caption">
                      اسلاید اول
                    </div>
                  </div>
                  <div class="item">
                    <img src="http://placehold.it/900x500/3c8dbc/ffffff&text=I+Love+Bootstrap" alt="Second slide">

                    <div class="carousel-caption">
                      اسلاید دوم
                    </div>
                  </div>
                  <div class="item">
                    <img src="http://placehold.it/900x500/f39c12/ffffff&text=I+Love+Bootstrap" alt="Third slide">

                    <div class="carousel-caption">
                      اسلاید سوم
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="fa fa-angle-right"></span>
                </a>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- END ACCORDION & CAROUSEL-->

      <!-- START TYPOGRAPHY -->
      <h2 class="page-header">کلاس های متن</h2>

      <div class="row">
        <div class="col-md-6">
          <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-text-width"></i>

              <h3 class="box-title">عنوان</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <h1>h1. تگ عنوان</h1>

              <h2>h2. تگ عنوان</h2>

              <h3>h3. تگ عنوان</h3>
              <h4>h4. تگ عنوان</h4>
              <h5>h5. تگ عنوان</h5>
              <h6>h6. تگ عنوان</h6>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- ./col -->
        <div class="col-md-6">
          <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-text-width"></i>

              <h3 class="box-title">تاکید متن</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <p class="lead">متن های تاکید و مهم را رنگ کنید </p>

              <p class="text-green">متن سبز رنگ برای موفقیت </p>

              <p class="text-aqua">متن آبی آسمانی برای اطلاعات </p>

              <p class="text-light-blue">متن آبی روشن برای اطلاعات ۲</p>

              <p class="text-red">متن قرمز رنگ برای اخطار</p>

              <p class="text-yellow">متن زرد رنگ برای هشدار</p>

              <p class="text-muted">متن مات برای تاکید عمومی</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-6">
          <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-text-width"></i>

              <h3 class="box-title">نقل قول</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <blockquote>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                <small>در پاسخ به <cite title="Source Title">لورم چیه</cite></small>
              </blockquote>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- ./col -->
        <div class="col-md-6">
          <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-text-width"></i>

              <h3 class="box-title">نقل قول سمت راست</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body clearfix">
              <blockquote class="pull-right">
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                <small>در پاسخ به <cite title="Source Title">لورم چیه</cite></small>
              </blockquote>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-4">
          <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-text-width"></i>

              <h3 class="box-title">لیست ها</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul>
                <li>لورم ایپسوم متن ساختگی</li>
                <li>لورم ایپسوم متن ساختگی</li>
                <li>لورم ایپسوم متن ساختگی</li>
                <li>لورم ایپسوم متن ساختگی</li>
                <li>لورم ایپسوم متن ساختگی
                  <ul>
                    <li>لورم ایپسوم متن ساختگی</li>
                    <li>لورم ایپسوم متن ساختگی</li>
                    <li>لورم ایپسوم متن ساختگی</li>
                    <li>لورم ایپسوم متن ساختگی</li>
                  </ul>
                </li>
                <li>لورم ایپسوم متن ساختگی</li>
                <li>لورم ایپسوم متن ساختگی</li>
                <li>لورم ایپسوم متن ساختگی</li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- ./col -->
        <div class="col-md-4">
          <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-text-width"></i>

              <h3 class="box-title">لیست شماره دار</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ol>
                  <li>لورم ایپسوم متن ساختگی</li>
                  <li>لورم ایپسوم متن ساختگی</li>
                  <li>لورم ایپسوم متن ساختگی</li>
                  <li>لورم ایپسوم متن ساختگی</li>
                  <li>لورم ایپسوم متن ساختگی
                    <ul>
                      <li>لورم ایپسوم متن ساختگی</li>
                      <li>لورم ایپسوم متن ساختگی</li>
                      <li>لورم ایپسوم متن ساختگی</li>
                      <li>لورم ایپسوم متن ساختگی</li>
                    </ul>
                  </li>
                  <li>لورم ایپسوم متن ساختگی</li>
                  <li>لورم ایپسوم متن ساختگی</li>
                  <li>لورم ایپسوم متن ساختگی</li>
              </ol>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- ./col -->
        <div class="col-md-4">
          <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-text-width"></i>

              <h3 class="box-title">لیست بدون استایل</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="list-unstyled">
                <li>لورم ایپسوم متن ساختگی</li>
                <li>لورم ایپسوم متن ساختگی</li>
                <li>لورم ایپسوم متن ساختگی</li>
                <li>لورم ایپسوم متن ساختگی</li>
                <li>لورم ایپسوم متن ساختگی
                  <ul>
                    <li>لورم ایپسوم متن ساختگی</li>
                    <li>لورم ایپسوم متن ساختگی</li>
                    <li>لورم ایپسوم متن ساختگی</li>
                    <li>لورم ایپسوم متن ساختگی</li>
                  </ul>
                </li>
                <li>لورم ایپسوم متن ساختگی</li>
                <li>لورم ایپسوم متن ساختگی</li>
                <li>لورم ایپسوم متن ساختگی</li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-6">
          <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-text-width"></i>

              <h3 class="box-title">توضیحات</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <dl>
                <dt>تیتر</dt>
                <dd>لورم ایپسوم متن ساختگی</dd>
                <dt>تیتر</dt>
                <dd>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </dd>
                <dd>لورم ایپسوم متن ساختگی</dd>
                <dt>تیتر</dt>
                <dd>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </dd>
              </dl>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- ./col -->
        <div class="col-md-6">
          <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-text-width"></i>

              <h3 class="box-title">توضیحات افقی</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <dl class="dl-horizontal">
                <dt>تیتر</dt>
                <dd>لورم ایپسوم متن ساختگی</dd>
                <dt>تیتر</dt>
                <dd>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </dd>
                <dd>لورم ایپسوم متن ساختگی.</dd>
                <dt>تیتر</dt>
                <dd>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </dd>
                <dt>تیتر</dt>
                <dd>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                </dd>
              </dl>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- END TYPOGRAPHY -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer text-left">
    <strong>Copyleft &copy; 2014-2017 <a href="https://adminlte.io">Almsaeed Studio</a> & <a href="https://netcopy.ir">netcopy</a></strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">فعالیت ها</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">تولد غلوم</h4>

                <p>۲۴ مرداد</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">آپدیت پروفایل سجاد</h4>

                <p>تلفن جدید (800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">نورا به خبرنامه پیوست</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">کرون جابز اجرا شد</h4>

                <p>۵ ثانیه پیش</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">پیشرفت کارها</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                ساخت پوستر های تبلیغاتی
                <span class="label label-danger pull-left">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                آپدیت رزومه
                <span class="label label-success pull-left">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                آپدیت لاراول
                <span class="label label-warning pull-left">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                بخش پشتیبانی سایت
                <span class="label label-primary pull-left">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">وضعیت</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">تنظیمات عمومی</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              گزارش کنترلر پنل
              <input type="checkbox" class="pull-left" checked>
            </label>

            <p>
              ثبت تمامی فعالیت های مدیران
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              ایمیل مارکتینگ
              <input type="checkbox" class="pull-left" checked>
            </label>

            <p>
              اجازه به کاربران برای ارسال ایمیل
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              در دست تعمیرات
              <input type="checkbox" class="pull-left" checked>
            </label>

            <p>
              قرار دادن سایت در حالت در دست تعمیرات
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">تنظیمات گفتگوها</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              آنلاین بودن من را نشان نده
              <input type="checkbox" class="pull-left" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              اعلان ها
              <input type="checkbox" class="pull-left">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              حذف تاریخته گفتگوهای من
              <a href="javascript:void(0)" class="text-red pull-left"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
