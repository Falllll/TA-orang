<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | @yield('title')</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <!-- Tailwind -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        .font-family-karla { font-family: karla; }
        .bg-sidebar { background: #30b39f; }
        .cta-btn { color: #138a78; }
        .upgrade-btn { background: #033830; }
        .upgrade-btn:hover { background: #044a40; }
        .active-nav-link { background: #033830; }
        .nav-item:hover { background: #044a40; }
        .nav-item2:hover { background: #32fab1; }
        .account-link:hover { background: #138a78; }

        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        .font-family-karla { font-family: karla; }
        /* .bg-sidebar { background: #3d68ff; }
        .cta-btn { color: #3d68ff; }
        .active-nav-link { background: #1947ee; }
        .nav-item:hover { background: #1947ee; }
        .account-link:hover { background: #3d68ff; } */
        .dropdown:hover .dropdown-menu {
            display: block;
        }
        .tab {
            overflow: hidden;
            }
            .tab-content {
            max-height: 0;
            transition: all 0.5s;
            }
            input:checked + .tab-label .test {
                background-color: #000;
            }
            input:checked + .tab-label .test svg {
                transform: rotate(180deg);
                stroke: #fff;
            }
            input:checked + .tab-label::after {
            transform: rotate(90deg);
            }
            input:checked ~ .tab-content {
            max-height: 100vh;
            }
    </style>
</head>