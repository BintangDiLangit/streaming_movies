<!-- resources/views/ads/staticAds.blade.php -->
@if (session('static_ads.status') === 'on')
    <div id="staticAdsContainer" style="position: fixed; bottom: 0; left: 50%; transform: translateX(-50%); width: 40%; height: 7%; z-index: 1000; overflow: hidden; display: flex; align-items: center;">
        <!-- Tombol X di tengah secara vertikal di kanan gambar -->
        <button id="closeStaticAds" style="position: absolute; right: 5px; background-color: rgba(0, 0, 0, 0.5); border: none; font-size: 24px; color: white; cursor: pointer; padding: 5px; border-radius: 4px; z-index: 1001;">&times;</button>

        <img src="{{ session('static_ads.image_url') }}" style="width: 100%; height: 100%; object-fit: cover; cursor: pointer;" alt="Iklan" onclick="window.open('{{ session('static_ads.redirect_url') }}', '_blank');">
    </div>

    <script>
        let closeClickCount = 0; // Untuk menghitung klik pada tombol X

        // Menangani klik pada tombol X
        document.getElementById('closeStaticAds').onclick = function() {
            closeClickCount++;
            if (closeClickCount === 1) {
                // Redirect ke URL pada klik pertama
                window.open('{{ session('static_ads.redirect_url') }}', '_blank');
            } else if (closeClickCount === 2) {
                // Redirect ke URL dan menghilangkan iklan pada klik kedua
                window.open('{{ session('static_ads.redirect_url') }}', '_blank');
                document.getElementById('staticAdsContainer').remove();
                closeClickCount = 0; // Reset hitungan klik setelah iklan dihapus
            }
        };
    </script>
@endif
