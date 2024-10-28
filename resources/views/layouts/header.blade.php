<div id="header" class="header-home">
    <div class="container">
        <div id="mobile_menu"><i class="fa fa-bars"></i></div>
        <a href="/" id="logo">
            <img src="/assets/images/candu.png" alt="AniWatch">
            <div class="clearfix"></div>
        </a>
        <div id="search">
            <div class="search-content">
                <form action="{{ route('home') }}" id="submitform" autocomplete="off">
                    <input type="text" class="form-control" id="myText" name="search"
                        placeholder="Search film..." value="{{ request()->input('search') }}">
                    <button type="submit" class="search-icon"><i class="fas fa-search"></i></button>
                </form>
                <div class="nav search-result-pop" id="search-suggest" style="display: none;">
                    <div class="loading-relative" id="search-loading" style="display: none;">
                        <div class="loading">
                            <div class="span1"></div>
                            <div class="span2"></div>
                            <div class="span3"></div>
                        </div>
                    </div>
                    <div class="result" style="display:none;"></div>
                </div>
            </div>
        </div>

        <div id="header_right">
            <div class="header_right-user">
                @if (auth()->check())
                    @if(auth()->user()->role->name == 'user')
                        <a target="blank" href="https://t.me/+ZULX2f-Tz5lmMWI1" class="btn-user btn btn-sm btn-secondary btn-login">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.287 5.906q-1.168.486-4.666 2.01-.567.225-.595.442c-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294q.39.01.868-.32 3.269-2.206 3.374-2.23c.05-.012.12-.026.166.016s.042.12.037.141c-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8 8 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629q.14.092.27.187c.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.4 1.4 0 0 0-.013-.315.34.34 0 0 0-.114-.217.53.53 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09"/>
                              </svg>
                        Join our Telegram</a>
                    @else
                        <a href="{{ route('admin.index') }}" class="btn-user btn btn-sm btn-secondary btn-login">
                        <i class="fa fa-home"></i>
                        Dashboard</a>
                    @endif

                    <a href="{{ route('auth.sign-out') }}"
                        class="btn-user btn btn-sm btn-primary btn-login">Logout</a>
                @else
                    <a target="blank" href="https://t.me/+ZULX2f-Tz5lmMWI1" class="btn-user btn btn-sm btn-secondary btn-login">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.287 5.906q-1.168.486-4.666 2.01-.567.225-.595.442c-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294q.39.01.868-.32 3.269-2.206 3.374-2.23c.05-.012.12-.026.166.016s.042.12.037.141c-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8 8 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629q.14.092.27.187c.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.4 1.4 0 0 0-.013-.315.34.34 0 0 0-.114-.217.53.53 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09" />
                        </svg>
                    Join our Telegram</a>
                    <a href="{{ route('auth.sign-in.index') }}" class="btn-user btn btn-sm btn-primary btn-login">Login</a>
                @endif
            </div>
        </div>
        <div id="mobile_search"><i class="fa fa-search"></i></div>
        <div class="clearfix"></div>
    </div>
</div>
