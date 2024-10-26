<!-- resources/views/ads/everyMinuteAds.blade.php -->
@if (session('minute_ads.status') === 'on')
    <script>
        // Menghitung waktu interval iklan dari session
        const minuteInterval = {{ session('minute_ads.interval') }} * 60000; // Konversi menit ke milidetik
        const storedLastShownTime = sessionStorage.getItem('minuteAdsLastShownTime');
        let lastShownTime = storedLastShownTime ? parseInt(storedLastShownTime, 10) : {{ session('minute_ads.last_shown') * 1000 }};
        const redirectUrl = '{{ session('minute_ads.redirect_url') }}';
        let alreadyRedirected = false; // Flag untuk memastikan hanya redirect sekali per interval

        // Fungsi untuk mengecek apakah interval menit sudah terpenuhi
        function checkAndRedirect() {
            const currentTime = Date.now();

            // Jika waktu interval sudah terpenuhi dan belum ada redirect
            if (currentTime - lastShownTime >= minuteInterval && !alreadyRedirected) {
                window.open(redirectUrl, '_blank');
                sessionStorage.setItem('minuteAdsLastShownTime', currentTime); // Reset timer ke waktu sekarang
                lastShownTime = currentTime; // Reset lastShownTime untuk interval berikutnya
                alreadyRedirected = true; // Set flag sudah redirect
            }
        }

        // Menangani klik global pada halaman
        document.addEventListener('click', function() {
            checkAndRedirect();
        });

        // Reset flag sudah redirect setelah interval berikutnya
        setInterval(function() {
            const currentTime = Date.now();

            // Reset flag ketika interval berikutnya terpenuhi
            if (currentTime - lastShownTime >= minuteInterval) {
                alreadyRedirected = false;
            }
        }, 1000); // Cek setiap detik untuk reset flag
    </script>
@endif
