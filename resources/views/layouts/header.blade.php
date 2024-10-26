<div id="header" class="header-home">
    <div class="container">
        <div id="mobile_menu"><i class="fa fa-bars"></i></div>
        <a href="/" id="logo">
            <img src="https://hianime.io/images/logo.png" alt="AniWatch">
            <div class="clearfix"></div>
        </a>
        <div id="search">
            <div class="search-content">
                <form action="{{ route('dashboard') }}" id="submitform" autocomplete="off">
                    <input type="text" class="form-control" id="myText" name="search"
                        placeholder="Search film..." required="">
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
                <a data-toggle="modal" data-target="#modallogin"
                    class="btn-user btn btn-sm btn-primary btn-login">Login</a>
            </div>
        </div>
        <div id="mobile_search"><i class="fa fa-search"></i></div>
        <div class="clearfix"></div>
    </div>
</div>
