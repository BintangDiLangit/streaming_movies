<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body>
    @include('layouts.sidebar')
    <div id="wrapper">
        @include('layouts.header')
        <div class="clearfix"></div>
        <!--Begin: Slider-->
        @include('components.home.slider')
        <!--/End: Slider-->
        @include('components.home.intro')
        <!--Begin: trending-->
        @include('components.home.trending')
        <!--/End: trending-->
        <!--Begin: Events-->

        <!--/End: Events-->
        @include('components.home.discussion')
        <!-- Begin: featured -->
        @include('components.home.featured')
        <div id="main-wrapper">
            <div class="container">
                @include('components.home.main')
            </div>
        </div>
        @include('layouts.footer')

    </div>
    @include('layouts.pre-modal')
    @include('layouts.script')
</body>

</html>
