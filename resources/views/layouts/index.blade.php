<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('public/img/Favicon.png') }}" type="image/x-icon">
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/header.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/animations.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/transformations.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/boxicons.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/cright.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/cleft.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/tooltip.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/form.css') }}">
    <link rel="import" href="{{ asset('public/js/components/checkbox.html') }}">
    <script src="{{ asset('public/js/jquery-3.6.0.min.js') }}" type="text/javascript"></script>
    <title>{{ $title }} - {{ $subtitle }}</title>
</head>
<body class="dark">
<nav class="sidebar close">
    <header>
        <div class="image-text">
        <span class="image">
            <img src="{{ asset('public/img/Favicon.png') }}" alt="{{ $title }}">
        </span>
            <div class="text header-text">
                <span class="name">{{ $title }}</span>
                <span class="profession">{{ $subtitle }}</span>
            </div>
        </div>
        <i class="bx bx-chevron-right toggle"></i>
    </header>
    <div class="menu-bar">
        <div class="menu">
            <ul>
                <li class="search-box">
                    <i class="bx bx-search icon"></i>
                    <label>
                        <input type="text" placeholder="{{ __('messages.nav.search-input-placeholder') }}">
                    </label>
                </li>
            </ul>
            <ul class="menu-links">
                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-home icon'></i>
                        <span class="text nav-text">{{ __('messages.nav.home') }}</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-message-square-dots icon'></i>
                        <span class="text nav-text">{{ __('messages.nav.forum') }}</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-cloud-download icon'></i>
                        <span class="text nav-text">{{ __('messages.nav.resources-center') }}</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-user icon'></i>
                        <span class="text nav-text">{{ __('messages.nav.member') }}</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-link icon'></i>
                        <span class="text nav-text">{{ __('messages.nav.links') }}</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-group icon'></i>
                        <span class="text nav-text">{{ __('messages.nav.about-us') }}</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="bottom-content">
            <ul>
                <li class="mode">
                    <div class="moon-sun">
                        <i class="bx bx-moon icon moon"></i>
                        <i class="bx bx-sun icon sun"></i>
                    </div>
                    <span class="mode-text text light-mode" style="">{{ __('messages.nav.Dark-mode') }}</span>
                    <span class="mode-text text dark-mode hidden-mode-btn" style="margin-left: -64px;">{{ __('messages.nav.Light-mode') }}</span>
                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header class="header">
    <div class="info-links">
        <div class="info-link">
            <a href="#">
                {{--            <img src="" alt="">--}}
                <div class="user-avatar">B</div>
            </a>
        </div>
        <div class="info-link">
            <a href="#">
                <i class='bx bx-envelope icon'></i>
            </a>
        </div>
        <div class="info-link">
            <a href="#">
                <i class='bx bx-bell icon'></i>
            </a>
        </div>
        <div class="info-link">
            <a href="#">
                <i class='bx bx-dots-vertical-rounded icon'></i>
            </a>
        </div>
    </div>
</header>

<main class="main">
    @yield('main-content')
</main>

<footer class="footer">
    <div class="footer-box">
        <div class="rows">
            <div class="footer-col">
                <div class="footer-logo">
                    <img src="{{ asset('public/img/ForumLogo-remove.png') }}" alt="{{ $title }}">
                </div>
                <p class="footer-description">{{ $description }}</p>
                <p class="footer-copyright">Copyright &nbsp; 2021-{{ date('Y') }} <a href="http://www.beimiou.cn/" data-title="{{ __('messages.footer.studio-tips') }}" target="_blank">Bemiou Studio</a>
                    All rights reserved</p>
            </div>
            <div class="footer-col">
                <h4 class="footer-group-title">{{ __('messages.footer.more-features.title') }}</h4>
                <div class="footer-col-line"></div>
                <ul>
                    <li><a href="{{ url('apply/management-group') }}">{{ __('messages.footer.more-features.join-management-group') }}</a></li>
                    <li><a href="{{ url('apply/join-the-studio') }}">{{ __('messages.footer.more-features.join-the-studio') }}</a></li>
                    <li><a href="{{ url('apply/cancel-account') }}">{{ __('messages.footer.more-features.account-cancellation')
 }}</a></li>
                    <li><a href="{{ url('apply/join-the-lifetime-super-member') }}">{{ __('messages.footer.more-features.join-lifelong-super-member') }}</a></li>
                    <li><a href="{{ url('submits/opinion-immediate-send') }}">{{ __('messages.footer.more-features.submission-of-comments') }}</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4 class="footer-group-title">{{ __('messages.footer.about-website.title') }}</h4>
                <div class="footer-col-line"></div>
                <ul>
                    <li><a href="{{ url('send/feedback') }}">{{ __('messages.footer.about-website.suggestions-and-feedback') }}</a></li>
                    <li><a href="{{ url('send/policy') }}">{{ __('messages.footer.about-website.privacy-policy') }}</a></li>
                    <li><a href="{{ url('send/clause') }}">{{ __('messages.footer.about-website.rule-clause') }}</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4 class="footer-group-title">{{ __('messages.footer.contact-us.title') }}</h4>
                <div class="footer-col-line"></div>
                <div class="social-links">
                    <a href="{{ url('goto-discord') }}" data-title="{{ __('messages.footer.contact-us.discord-tips') }}"><i class="bx bxl-discord"></i></a>
                    <a href="{{ url('account-group') }}" data-title="{{ __('messages.footer.contact-us.join-group-tips') }}"><i class="bx bxs-group"></i></a>
                    <a href="{{ url('account') }}" data-title="{{ __('messages.footer.contact-us.contact-the-webmaster-tips') }}"><i class="bx bx-user"></i></a>
                    <a href="mailto:{{ $mail_address }}" data-title="{{ __('messages.footer.contact-us.send-mail-tips') }}"><i class="bx bx-envelope"></i></a>
                </div>
                <div class="contact">
                    <div class="img">
                        <img src="{{ asset('public/img/Qq.png') }}" data-title="{{ __('messages.footer.qq-communication-group.tips') }}" alt="QQ Group">
                        <span class="img-text">{{ __('messages.footer.qq-communication-group.title') }}</span>
                    </div>
                    <div class="img">
                        <img src="{{ asset('public/img/Wx.png') }}" data-title="{{ __('messages.footer.wechat-official-account.tips') }}" alt="Weixin">
                        <span class="img-text">{{ __('messages.footer.wechat-official-account.title') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="{{ asset('public/js/tooltip.js') }}"></script>
<script src="{{ asset('public/js/app.js') }}"></script>
<script src="{{ asset("public/js/sidebar.js") }}" type="text/javascript"></script>
{{--<script src="{{ asset('public/js/form.js') }}"></script>--}}
</body>
</html>
