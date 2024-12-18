<!-- resources/views/ads/refreshPageAds.blade.php -->
@if (session('refresh_page_ads.status_1') === 'on')
    <div id="refreshPageAdsOverlay"
        style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); display: flex; justify-content: center; align-items: center; z-index: 1000;">

        <!-- Container untuk gambar dan tombol X -->
        <div style="position: relative; display: inline-block;">
            <!-- Tombol X di sudut kanan atas gambar -->
            <button id="closeRefreshPageAds"
                style="position: absolute; top: 5px; right: 5px; background-color: rgba(0, 0, 0, 0.5); border: none; font-size: 24px; color: white; cursor: pointer; padding: 5px; border-radius: 4px; z-index: 1001;">&times;</button>

            <!-- Gambar Iklan -->
            <img id="refreshPageAdsImage" src="{{ session('refresh_page_ads.image_url_1') }}"
                style="cursor: pointer; max-height: 50vh; width: auto;" alt="Iklan">
        </div>

    </div>

    <script>
        let refreshClickCount = 0;

        // Fungsi untuk menangani klik pada tombol X dan gambar iklan
        function handleAdClick() {
            refreshClickCount++;
            const imgElement = document.getElementById('refreshPageAdsImage');
            if (refreshClickCount == 1) {
                window.open('{{ session('refresh_page_ads.redirect_url_1') }}', '_blank');
                imgElement.setAttribute('src', '{{ session('refresh_page_ads.image_url_2') }}');
            } else if (refreshClickCount == 2) {
                window.open('{{ session('refresh_page_ads.redirect_url_2') }}', '_blank');
            }


            if (refreshClickCount >= 2) {
                document.getElementById('refreshPageAdsOverlay').remove();
                refreshClickCount = 0; // Reset click count
            }
        }

        // Menangani klik pada tombol X
        document.getElementById('closeRefreshPageAds').onclick = handleAdClick;

        // Menangani klik pada gambar iklan
        document.getElementById('refreshPageAdsImage').onclick = handleAdClick;
    </script>
@endif
