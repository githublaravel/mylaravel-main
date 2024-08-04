<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>Hello, world!</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
    integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css"
    rel="stylesheet">

<link rel="stylesheet" href="{{ asset('/css/font.css') }}">
<style>
    @media only screen and (max-width: 768px) {

        .navbar-brand {
            margin: auto
        }

    }

    body {
        background-color: rgba(148, 139, 139, 0.652)
    }

    .navbar {
        backdrop-filter: blur(30px);
        box-shadow: 0px 0px 30px rgba(227, 228, 237, 0.37);
        border: 2px solid rgba(110, 45, 45, 0.18);
        z-index: 100
    }

    .dropdown-menu {
        display: none;
    }

    .nav-link {
        display: inline-block;
        color: black;
        text-decoration: none;
        border-bottom: 2px solid transparent;
        /* در حالت اولیه ناپیدا */
        transition: border-bottom-color 0.5s;
        /* انتقال رنگ border */
    }



    .nav-link:hover {
        border-bottom-color: black;
        border-bottom-width: 1px;
    }

    .dropdown:hover>.dropdown-menu,
    .dropdown-submenu:hover>.dropdown-menu {
        display: block;
    }

    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu>.dropdown-menu {
        top: 0;
        right: 100%;
        /* Align to right */
    }

    .user-dropdown>li>.dropdown-item {
        display: inline-block;
        position: relative;
        color: black;
        text-decoration: none;
    }

    .user-dropdown>li>.dropdown-item::after {
        content: '';
        position: absolute;
        left: 50%;
        bottom: -3px;
        width: 0;
        height: 2px;
        background-color: black;
        transition: width 0.5s, left 0.5s;
    }

    .user-dropdown>li>.dropdown-item:hover::after {
        width: 100%;
        left: 0;
    }

    .dropdown-submenu>a::after {
        display: inline-block;
        content: " ";
        border-left: 0.3em solid transparent;
        border-right: 0.3em solid transparent;
        border-top: 0.3em solid;
        /* Change to top for rtl */
        vertical-align: middle;
        margin-right: .5em;
    }

    .dropdown-submenu:hover>a::after {
        opacity: 0.0
    }

    .fa-user {
        font-size: 38px;
        color: black;
        border: 2px solid rgb(156, 118, 118);
        border-radius: 100%;
        overflow: hidden;


    }
</style>
