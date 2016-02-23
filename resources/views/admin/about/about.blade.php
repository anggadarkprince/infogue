@extends('private')

@section('title', '- About')

@section('content')

    <div id="content-wrapper">
        <header>
            <a href="#menu-toggle" class="toggle-nav"><i class="fa fa-bars"></i></a>
            <div class="title">
                <h1>About</h1>
            </div>
            <div class="control hidden-xs">
                <div class="account clearfix">
                    <div class="avatar-wrapper">
                        <img src="/images/contributors/cici.png" class="img-circle img-rounded">
                        <div class="notify"></div>
                    </div>
                    <p class="avatar-greeting pull-left hidden-sm">Hi, <strong>Imelda Agustine</strong></p>
                </div>
                <a href="admin_login.html" class="sign-out"><i class="fa fa-sign-out"></i> SIGN OUT</a>
            </div>
        </header>
        <div class="breadcrumb-wrapper">
            <ol class="breadcrumb mtn">
                <li><a href="index.html">INFOGUE.ID</a></li>
                <li class="hidden-sm hidden-xs"><a href="admin_dashboard.html">Dashboard</a></li>
                <li class="active">About</li>
            </ol>
        </div>
        <div class="content">
            <div class="title-section">
                <h1 class="title">Credits</h1>
                <p class="subtitle">Thanks for using our services</p>
            </div>
            <div class="content-section">
                <article>
                    <p>InfoGue.id was originally developed by <a href="mailto:anggadarkprince@gmail.com"
                                                                 target="_blank">Angga Ari Wijaya</a> (Starter of Sketch
                        Project Studio). The web was written for performance in the real world, with many of the
                        features borrowed from the code-base of Laravel PHP Framework.</p>

                    <p>It was, for months, developed and maintained by developer, the ExpressionEngine Development Team
                        and a group of community members called the
                        <a href="mailto:sketchprojectstudio@gmail.com" target="_blank">Sketch Project Studio</a>.</p>

                    <p>In 2016, we release the very first version 1.0 and ready to launch. A hat tip goes to us for
                        inspiring us to create a better solution at similar website, and for bringing the world into the
                        general consciousness of the web community.</p>

                    <img src="/images/misc/logo-color.png" class="img-responsive mtl mbs"/>
                    <p>&copy; Copyright 2016 All Rights Reserved.</p>

                    <p>Developer Contact (+62) 8565547868<br>Gresik, Jatim - Indonesia</p>
                </article>
            </div>
        </div>
    </div>

@endsection