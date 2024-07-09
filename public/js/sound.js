// Mengecek apakah ada status musik yang tersimpan di localStorage
let isMusicPlaying = localStorage.getItem('isMusicPlaying');

// Memainkan musik jika tidak ada status yang tersimpan atau jika statusnya true
if (isMusicPlaying === null || isMusicPlaying === 'true') {
  const audio = new Audio('bgm_menu.mp3');
  audio.loop = true;
  audio.play();
}

// Mendeteksi perubahan di halaman dan mengatur status musik di localStorage
window.addEventListener('beforeunload', () => {
  const audio = document.querySelector('audio');
  if (audio) {
    localStorage.setItem('isMusicPlaying', audio.paused ? 'false' : 'true');
  }
});
