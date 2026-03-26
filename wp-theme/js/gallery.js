const photos = [
  {src:'foto1.jpg',caption:'Mama',dl:'klaudia-foto1.jpg'},
  {src:'foto2.jpg',caption:'Deti',dl:'klaudia-foto2.jpg'},
  {src:'foto3.jpg',caption:'Jar',dl:'klaudia-foto3.jpg'},
  {src:'foto4.jpg',caption:'Domov',dl:'klaudia-foto4.jpg'},
  {src:'foto5.jpg',caption:'Radosť',dl:'klaudia-foto5.jpg'},
  {src:'foto6.jpg',caption:'Nový deň',dl:'klaudia-foto6.jpg'},
  {src:'foto7.jpg',caption:'Oslavy',dl:'klaudia-foto7.jpg'},
  {src:'foto8.jpg',caption:'Sila',dl:'klaudia-foto8.jpg'},
];
let current = 0;
const baseUrl = document.querySelector('script[src*="gallery.js"]')
  ?.src.replace('/js/gallery.js','') + '/photos/';

function openLightbox(idx) {
  current = idx; updateLightbox();
  document.getElementById('lightbox').classList.add('open');
  document.body.style.overflow = 'hidden';
}
function closeLightbox() {
  document.getElementById('lightbox').classList.remove('open');
  document.body.style.overflow = '';
}
function navigate(dir) {
  current = (current + dir + photos.length) % photos.length;
  updateLightbox();
}
function updateLightbox() {
  const p = photos[current];
  const url = baseUrl + p.src;
  document.getElementById('lb-img').src = url;
  document.getElementById('lb-img').alt = p.caption;
  document.getElementById('lb-caption').textContent = p.caption;
  const dl = document.getElementById('lb-dl');
  dl.href = url; dl.download = p.dl;
}
document.addEventListener('keydown', e => {
  const lb = document.getElementById('lightbox');
  if (!lb.classList.contains('open')) return;
  if (e.key === 'Escape') closeLightbox();
  if (e.key === 'ArrowLeft') navigate(-1);
  if (e.key === 'ArrowRight') navigate(1);
});
