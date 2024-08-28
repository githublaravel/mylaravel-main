
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <div class="container d-flex justify-content-between">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('logo/Logo.png') }}" alt="Logo" width="50" height="50"
                    style="border: 1px solid black;border-radius: 50%">
                <label class="switch">
                    <span class="sun"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <g fill="#ffd43b">
                                <circle r="5" cy="12" cx="12"></circle>
                                <path
                                    d="m21 13h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2zm-17 0h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2zm13.66-5.66a1 1 0 0 1 -.66-.29 1 1 0 0 1 0-1.41l.71-.71a1 1 0 1 1 1.41 1.41l-.71.71a1 1 0 0 1 -.75.29zm-12.02 12.02a1 1 0 0 1 -.71-.29 1 1 0 0 1 0-1.41l.71-.66a1 1 0 0 1 1.41 1.41l-.71.71a1 1 0 0 1 -.7.24zm6.36-14.36a1 1 0 0 1 -1-1v-1a1 1 0 0 1 2 0v1a1 1 0 0 1 -1 1zm0 17a1 1 0 0 1 -1-1v-1a1 1 0 0 1 2 0v1a1 1 0 0 1 -1 1zm-5.66-14.66a1 1 0 0 1 -.7-.29l-.71-.71a1 1 0 0 1 1.41-1.41l.71.71a1 1 0 0 1 0 1.41 1 1 0 0 1 -.71.29zm12.02 12.02a1 1 0 0 1 -.7-.29l-.66-.71a1 1 0 0 1 1.36-1.36l.71.71a1 1 0 0 1 0 1.41 1 1 0 0 1 -.71.24z">
                                </path>
                            </g>
                        </svg></span>
                    <span class="moon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <path
                                d="m223.5 32c-123.5 0-223.5 100.3-223.5 224s100 224 223.5 224c60.6 0 115.5-24.2 155.8-63.4 5-4.9 6.3-12.5 3.1-18.7s-10.1-9.7-17-8.5c-9.8 1.7-19.8 2.6-30.1 2.6-96.9 0-175.5-78.8-175.5-176 0-65.8 36-123.1 89.3-153.3 6.1-3.5 9.2-10.5 7.7-17.3s-7.3-11.9-14.3-12.5c-6.3-.5-12.6-.8-19-.8z">
                            </path>
                        </svg></span>
                    <input id="theme-toggle" type="checkbox" class="input">
                    <span class="slider"></span>
                </label>
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#">خانه</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                            aria-expanded="false">
                            دسته‌بندی‌ها
                        </a>
                        <ul class="dropdown-menu dropdown-menu-multi-column" aria-labelledby="navbarDropdown">
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">دسته‌بندی ۱</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">زیرمجموعه ۱-۱</a></li>
                                    <li><a class="dropdown-item" href="#">زیرمجموعه ۱-۲</a></li>
                                    <li><a class="dropdown-item" href="#">زیرمجموعه ۱-۳</a></li>
                                    <li><a class="dropdown-item" href="#">زیرمجموعه ۱-۴</a></li>
                                    <li><a class="dropdown-item" href="#">زیرمجموعه ۱-۵</a></li>
                                    <li><a class="dropdown-item" href="#">زیرمجموعه ۱-۶</a></li>
                                    <li><a class="dropdown-item" href="#">زیرمجموعه ۱-۷</a></li>
                                    <li><a class="dropdown-item" href="#">زیرمجموعه ۱-۸</a></li>
                                    <li><a class="dropdown-item" href="#">زیرمجموعه ۱-۹</a></li>
                                    <li><a class="dropdown-item" href="#">زیرمجموعه ۱-۱۰</a></li>
                                    <li><a class="dropdown-item" href="#">زیرمجموعه ۱-۱۱</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">دسته‌بندی ۲</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">زیرمجموعه ۲-۱</a></li>
                                    <li><a class="dropdown-item" href="#">زیرمجموعه 2-2</a></li>
                                </ul>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">دسته‌بندی ۳</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="dropdown">
                    <a href="#" class="nav-link dropdown-toggle">
                        <i class='far fa-user'></i>
                    </a>
                    <ul class="dropdown-menu user-dropdown" style="text-align: center"
                        aria-labelledby="dropdownMenuButton1">
                        <li>
                            <a class="dropdown-item" href="#">مشخصات کاربر
                                <i class="bi bi-person-fill icon-large"></i>
                            </a>
                        </li>
                        <hr>
                        <li><a class="dropdown-item" href="#">فعالیت ها
                                <i class="bi bi-calendar-check icon-black icon-large"></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>


{{-- Mobile Navbar --}}
<nav class="navbar fixed-bottom navbar-light bg-light d-md-none nav-mb">
    <div class="container-fluid">
        <div class="d-flex justify-content-around w-100">
            <a href="#" class="btn btn-light">
                <i class="bi bi-house-door"></i>
                <span>خانه</span>
            </a>
            <a href="#" class="btn btn-light">
                <i class="bi bi-list"></i>
                <span>دسته‌بندی‌ها</span>
            </a>
            <a href="#" class="btn btn-light">
                <i class="bi bi-person"></i>
                <span>کاربر</span>
            </a>
        </div>
    </div>
</nav>
