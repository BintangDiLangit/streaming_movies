// adsHandler.js

// Fungsi untuk menampilkan iklan popup dengan refresh page
function handleRefreshPageAds() {
  const adsData = window.adsSettings.refreshPageAds;

  if (adsData.status === 'on') {
      let clickCount = sessionStorage.getItem('refreshPageAdsClickCount') || 0;

      // Buat layer dan gambar iklan popup
      const overlay = document.createElement('div');
      overlay.style.position = 'fixed';
      overlay.style.top = 0;
      overlay.style.left = 0;
      overlay.style.width = '100%';
      overlay.style.height = '100%';
      overlay.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
      overlay.style.display = 'flex';
      overlay.style.justifyContent = 'center';
      overlay.style.alignItems = 'center';
      overlay.style.zIndex = 1000;

      const img = document.createElement('img');
      img.src = adsData.image_url;
      img.style.cursor = 'pointer';

      overlay.appendChild(img);
      document.body.appendChild(overlay);

      img.onclick = () => {
          window.open(adsData.redirect_url, '_blank');
          clickCount++;
          sessionStorage.setItem('refreshPageAdsClickCount', clickCount);

          if (clickCount >= 2) {
              overlay.remove();
              sessionStorage.removeItem('refreshPageAdsClickCount'); // Reset click count
          }
      };
  }
}

// Fungsi untuk menampilkan iklan setiap menit
function handleMinuteAds() {
  const adsData = window.adsSettings.minuteAds;

  if (adsData.status === 'on') {
      const lastShownTime = parseInt(sessionStorage.getItem('minuteAdsLastShownTime') || 0, 10);
      const currentTime = Date.now();

      if (currentTime - lastShownTime >= adsData.interval * 60000) { // Convert minutes to milliseconds
          const img = document.createElement('img');
          img.src = adsData.image_url;
          img.style.position = 'fixed';
          img.style.bottom = '20px';
          img.style.left = '50%';
          img.style.transform = 'translateX(-50%)';
          img.style.cursor = 'pointer';
          img.style.zIndex = 1000;

          document.body.appendChild(img);

          img.onclick = () => {
              window.open(adsData.redirect_url, '_blank');
              img.remove();
              sessionStorage.setItem('minuteAdsLastShownTime', Date.now());
          };
      }
  }
}

// Fungsi untuk menampilkan static ads di bawah layar
function handleStaticAds() {
  const adsData = window.adsSettings.staticAds;

  if (adsData.status === 'on') {
      const img = document.createElement('img');
      img.src = adsData.image_url;
      img.style.position = 'fixed';
      img.style.bottom = '0';
      img.style.left = '50%';
      img.style.transform = 'translateX(-50%)';
      img.style.cursor = 'pointer';
      img.style.zIndex = 1000;

      img.onclick = () => {
          window.open(adsData.redirect_url, '_blank');
      };

      document.body.appendChild(img);
  }
}

// Eksekusi setiap fungsi berdasarkan kondisi iklan
function initializeAds() {
  if (window.adsSettings) {
      handleRefreshPageAds();
      handleMinuteAds();
      handleStaticAds();
  }
}

// Panggil fungsi initializeAds ketika halaman sudah siap
document.addEventListener('DOMContentLoaded', initializeAds);
