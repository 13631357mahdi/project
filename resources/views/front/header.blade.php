<nav class="navbar navbar-dark bg-inverse bg-inverse-custom navbar-fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <span class="icon-logo"></span>
                <span class="sr-only">Land.io</span>
            </a>
            <a class="navbar-toggler hidden-md-up pull-xs-right" data-toggle="collapse" href="#collapsingNavbar"
               aria-expanded="false" aria-controls="collapsingNavbar">
                &#9776;
            </a>
            <a class="navbar-toggler navbar-toggler-custom hidden-md-up pull-xs-right" data-toggle="collapse"
               href="#collapsingMobileUser" aria-expanded="false" aria-controls="collapsingMobileUser">
                <span class="icon-user"></span>
            </a>
            <div id="collapsingNavbar" class="collapse navbar-toggleable-custom" role="tabpanel"
                 aria-labelledby="collapsingNavbar">
                <ul class="nav navbar-nav pull-xs-left">
                    <li class="nav-item dropdown hidden-sm-down textselect-off">
                        <a class="nav-link dropdown-toggle nav-dropdown-user" id="dropdownMenu2" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <img src="front/pics/face5.jpg" height="40" width="40" alt="Avatar" class="img-circle"> <span class="icon-caret-down"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-user dropdown-menu-animated" aria-labelledby="dropdownMenu2">
                            <div class="media">
                                <div class="media-right">
                                    <img src="front/pics/face5.jpg" height="60" width="60" alt="Avatar" class="img-circle">
                                </div>
                                <div class="media-body media-middle">
                                    <h5 class="media-heading">نام</h5>
                                    <h6>info@webrubik.com</h6>
                                </div>
                            </div>
                            <a href="#" class="dropdown-item text-uppercase">نمایش پست ها</a>
                            <a href="#" class="dropdown-item text-uppercase">مدیریت محصولات</a>
                            <a href="#" class="dropdown-item text-uppercase text-muted">خروج</a>
                            <a href="#" class="btn-circle has-gradient pull-xs-left">
                                <span class="sr-only">ویرایش</span>
                                <span class="icon-edit"></span>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item nav-item-toggable">
                        <a class="nav-link" href="#">صفحه نخست<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item nav-item-toggable">
                        <a class="nav-link" href="#">درباره ما</a>
                    </li>
                    <li class="nav-item nav-item-toggable">
                        <a class="nav-link" href="#">تماس با ما</a>
                    </li>
                    <li class="nav-item nav-item-toggable">
                        <a class="nav-link" href="{{route('admin')}}">پنل مدیریت</a>
                    </li>
                    <li class="nav-item nav-item-toggable">
                        <a class="nav-link" href="{{route('front.index.article')}}">مطالب</a>
                    </li>
                    <li class="nav-item nav-item-toggable">
                        <a class="nav-link" href="{{route('frontview')}}">خانه</a>
                    </li>
                </ul>
            </div>
            <div id="collapsingMobileUser" class="collapse navbar-toggleable-custom dropdown-menu-custom p-x-1 hidden-md-up" role="tabpanel" aria-labelledby="collapsingMobileUser">
                <div class="media m-t-1">
                    <div class="media-right">
                        <img src="front/pics/face5.jpg" height="60" width="60" alt="Avatar" class="img-circle">
                    </div>
                    <div class="media-body media-middle">
                        <h5 class="media-heading">نام</h5>
                        <h6>info@webrubik.com</h6>
                    </div>
                </div>
                <a href="#" class="dropdown-item text-uppercase">نمایش پست ها</a>
                <a href="#" class="dropdown-item text-uppercase">مدیریت محصولات</a>
                <a href="#" class="dropdown-item text-uppercase text-muted">خروج</a>
                <a href="#" class="btn-circle has-gradient pull-xs-left">
                    <span class="sr-only">ویرایش</span>
                    <span class="icon-edit"></span>
                </a>
            </div>
        </div>
    </nav>