@extends('layouts.index')

@section('main-content')
    <div class="login-box">
        <div class="login-box-header">
            <span>登录</span>
            <h4 class="login-box-line"></h4>
        </div>
        <form action="{{ url('account/login') }}" class="form-box">
            <div class="form-item">
                <input type="text" id="username" name="username" placeholder="请输入用户名/邮箱/昵称"
                       class="form-input username-input" autocomplete="off">
                <div class="line"></div>
            </div>
            <div class="form-item">
                <input type="text" id="password" name="password" placeholder="请输入密码" class="form-input password-input"
                       autocomplete="off">
                <div class="line"></div>
            </div>
            <div class="form-item">
                <div class="operator">
                    <div class="operator-left">
                        <div class="checkbox-container">
                            <input type="checkbox" id="web-developer">
                            <label for="web-developer">
                        <span class="checkbox">
                            <span class="check"></span>
                        </span>
                                记住我
                            </label>
                        </div>
                    </div>
                    <div class="operator-right">
                        <span>忘记密码?<a href="#">立即找回</a></span>
                    </div>
                </div>
            </div>
            <div class="form-item">
                <div class="protocol">
                    <span>登录即代表同意网站
                        <a href="#" target="_blank">隐私政策</a>
                        、<a href="#" target="_blank">用户协议</a>
                    </span>
                </div>
            </div>
            <div class="form-item">
                <button class="form-button">
                    <i class='bx bx-log-in'></i>
                    <span>登录</span>
                </button>
            </div>
            <div class="form-item">
                <div class="social-box">
                    <div class="social-line">
                        <span>社交登录</span>
                    </div>
                </div>
            </div>
            <div class="form-item">
                <div class="social-login-box">
                    @if($qq)
                        <a class="qq-login">
                            <i class="iconfont icon-qq"></i>
                        </a>
                    @endif
                    @if($baidu)
                        <a class="baidu-login">
                            <i class="iconfont icon-baidu-fill"></i>
                        </a>
                    @endif
                    @if($github)
                        <a class="github-login">
                            <i class="iconfont icon-github"></i>
                        </a>
                    @endif
                    @if($gitee)
                        <a class="gitee-login">
                            <i class="iconfont icon-gitee-fill-round"></i>
                        </a>
                    @endif
                </div>
            </div>
        </form>
    </div>
@endsection
