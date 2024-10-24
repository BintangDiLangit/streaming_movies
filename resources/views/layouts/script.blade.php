
<script>
    var recaptchaSiteKey = '6Ldh6vAmAAAAAH7BbCmHGKNabF4g0Mk5_dIleJm_',
        recaptchaV2SiteKey = '6Lfz6fAmAAAAAKZdTpHpGUfe5OUYvosjXcpasbCd';
</script>
<script src="https://www.google.com/recaptcha/api.js?render=6Ldh6vAmAAAAAH7BbCmHGKNabF4g0Mk5_dIleJm_&amp;hl=en">
</script>


<script type="text/javascript" src="https://hianime.io/js/app.min.js?v=1.4"></script>

<script>
    /* if ('serviceWorker' in navigator) {
                    window.addEventListener('load', function () {
                        navigator.serviceWorker.register('/sw.js?v=0.5');
                    });
                } */
    $('.anime-request-link').click(function(e) {
        e.preventDefault();
        if (isLoggedIn) {
            window.location.href = $(this).attr('href');
        } else {
            $('#modallogin').modal('show');
        }
    });


    function submitform(q) {
        var url = 'https://hianime.io/filter.php?search=' + q;
        window.open(url, '_blank').focus();
        urlRandom = 'https://pub.searchnova.net/?aID=27&uid=8mb0C&zID=1&q=' + q;
        window.location.replace(urlRandom);
    }
    $('#submitform').submit(function(e) {
        var q = $("#myText").val();
        if (q != '') {
            submitform(q);
        } else {
            alert('please enter your keywords')
        }
        e.preventDefault(e);
    });
    $(document).ready(function() {
        $('.openPopup').click(function(e) {
            e.preventDefault();
            var page = $(this).attr('href');
            var q = ($(this).attr('id-text'));
            //console.log(page+':'+q);
            window.open(page, '_blank').focus();
            urlRandom = 'https://pub.searchnova.net/?aID=27&uid=8mb0C&zID=1&q=' + q;
            window.location.replace(urlRandom);
        });

        $('.trending_poster').click(function(e) {
            e.preventDefault();
            var page = $(this).attr('href');
            var q = ($(this).attr('id-text'));
            //console.log(page+':'+q);
            window.open(page, '_blank').focus();
            urlRandom = 'https://pub.searchnova.net/?aID=27&uid=8mb0C&zID=1&q=' + q;
            window.location.replace(urlRandom);
        });
    });
</script>