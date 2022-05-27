@extends('layouts.index')

@section('main-content')
    <div class="container">
        <div class="container-left">
            <div class="plate-list">
                @for($g = 0; $g < sizeof($partitions);$g++)
                    <div class="plate-list-item">
                        <div class="plate-header">
                            <span>{{ $partitions[$g]['partition_title'] }}</span>
                            <i class='bx bx-chevron-up icon'></i>
                        </div>
                        <div class="plate-body">
                            <div class="theme-list">
                                @for($p = 0; $p < sizeof($plates);$p++)
                                    @if($partitions[$g]['partition_gid'] == $plates[$p]['plate_gid'])
                                        <div class="theme-list-item">
                                            <div class="theme-box-left">
                                                <i class='bx bx-chat'></i>
                                                <a href="">
                                            <span>
                                                {{ $plates[$p]['plate_title'] }}
                                            </span>
                                                </a>
                                            </div>
                                            <div class="theme-box-right">
                                                <div class="theme-count">
                                                    <i class='bx bx-message-dots'></i>
                                                    <span>0</span>
                                                </div>
                                                <div class="theme-box-vertical-line"></div>
                                                <div class="comment-count">
                                                    <i class='bx bx-comment-dots'></i>
                                                    <span>0</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endfor
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="container-right">
            <div class="card">
                <div class="card-header">
                    <i class='bx bx-message-dots icon'></i>
                    <span>{{ __('messages.random-word') }}</span>
                </div>
                <div class="card-body">
                    <span>{{ $yiyan }}</span>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <i class='bx bx-group icon'></i>
                    <span>{{ __('messages.online-administrator') }}</span>
                </div>
                <div class="card-body">
                    <span>
                        {!! $online_administrator_group_user !!}
                    </span>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <i class='bx bxs-group icon'></i>
                    <span>{{ __('messages.member-Statistics.online-member') }}</span>
                </div>
                <div class="card-body">
                    <span>
                        {!! $online_user !!}
                    </span>
                </div>
                <div class="card-line"></div>
                <div class="card-footer">
                    <div>
                        {{ __('messages.member-Statistics.currently-online') }}： <span class="online-user-count">{{ $online_user_count }}</span> ({{ __('messages.member-Statistics.member') }}：<span class="member-count">{{ $online_default_user_count }}</span>,{{ __('messages.member-Statistics.tourist') }}：<span
                            class="tourist-count">0</span>)
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <i class='bx bx-line-chart-down icon'></i>
                    <span>{{ __('messages.forum-Statistics.title') }}</span>
                </div>
                <div class="card-body">
                    <div class="statistics">
                        <ul>
                            <li>{{ __('messages.forum-Statistics.Post') }}：</li>
                            <li>0</li>
                        </ul>
                        <ul>
                            <li>{{ __('messages.forum-Statistics.Comment') }}：</li>
                            <li>0</li>
                        </ul>
                        <ul>
                            <li>{{ __('messages.forum-Statistics.Member') }}：</li>
                            <li>{{ $user_count }}</li>
                        </ul>
                        <ul>
                            <li>{{ __('messages.forum-Statistics.Super-member') }}：</li>
                            <li>{{ $online_super_user_count }}</li>
                        </ul>
                        <ul>
                            <li>{{ __('messages.forum-Statistics.Latest-member') }}：</li>
                            <li>
                                <span>
                                    @if(sizeof($new_user) === 1)
                                        @foreach($new_user as $k => $v)
                                            <a href="{{ url("account/".$v['user_username']) }}">
                                                {{ $v['user_nickname'] }}
                                            </a>
                                        @endforeach
                                    @endif
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $('.plate-header').on('click', function () {
            $(this).parent('.plate-list-item').find('.plate-body').toggleClass('close');
        });
    </script>
@endsection
