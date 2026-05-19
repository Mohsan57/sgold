// Fetches gallery manifest, shuffles items, renders images/videos, and provides a lightbox
const MANIFEST_PATH = 'assets/gallery/gallery.json';
let galleryFiles = [];
let currentIndex = -1;

function shuffle(arr){
  for(let i=arr.length-1;i>0;i--){
    const j = Math.floor(Math.random()*(i+1));
    [arr[i],arr[j]] = [arr[j],arr[i]];
  }
}

function renderItem(file, index){
  const ext = (file.split('.').pop()||'').toLowerCase();
  const container = document.createElement('div');
  container.className = 'gallery-item';
  container.dataset.index = index;
  // randomly make some items larger for variety
  if(Math.random() > 0.8) container.classList.add('large');

  if(['mp4','webm','ogg'].includes(ext)){
    const v = document.createElement('video');
    v.src = file;
    v.controls = false;
    v.preload = 'metadata';
    v.muted = true;
    v.loop = true;
    v.autoplay = true;
    container.appendChild(v);
  } else {
    const img = document.createElement('img');
    img.src = file;
    img.alt = '';
    img.loading = 'lazy';
    container.appendChild(img);
  }

  // open lightbox on click
  container.addEventListener('click', ()=>{
    openLightbox(index);
  });

  return container;
}

function openLightbox(index){
  currentIndex = index;
  const lb = document.getElementById('lightbox');
  const stage = document.getElementById('lbStage');
  lb.setAttribute('aria-hidden','false');
  lb.style.display = 'flex';
  stage.innerHTML = '';
  const file = galleryFiles[index];
  const ext = (file.split('.').pop()||'').toLowerCase();
  if(['mp4','webm','ogg'].includes(ext)){
    const v = document.createElement('video');
    v.src = file;
    v.controls = true;
    v.autoplay = true;
    v.style.maxHeight = '85vh';
    stage.appendChild(v);
  } else {
    const img = document.createElement('img');
    img.src = file;
    img.alt = '';
    stage.appendChild(img);
  }
}

function closeLightbox(){
  const lb = document.getElementById('lightbox');
  lb.setAttribute('aria-hidden','true');
  lb.style.display = 'none';
  const stage = document.getElementById('lbStage');
  stage.innerHTML = '';
}

function showPrev(){
  if(galleryFiles.length===0) return;
  currentIndex = (currentIndex - 1 + galleryFiles.length) % galleryFiles.length;
  openLightbox(currentIndex);
}

function showNext(){
  if(galleryFiles.length===0) return;
  currentIndex = (currentIndex + 1) % galleryFiles.length;
  openLightbox(currentIndex);
}

async function loadGallery(){
  const grid = document.getElementById('galleryGrid');
  const loading = document.getElementById('loading');
  loading.style.display = 'block';
  try{
    const res = await fetch(MANIFEST_PATH, {cache: 'no-store'});
    if(!res.ok) throw new Error('Manifest not found');
    const files = await res.json();
    if(!Array.isArray(files) || files.length===0){
      loading.textContent = 'No items found in gallery.';
      return;
    }
    galleryFiles = files.slice();
    shuffle(galleryFiles);
    grid.innerHTML = '';
    galleryFiles.forEach((f, i)=>{
      const item = renderItem(f, i);
      grid.appendChild(item);
    });
  }catch(err){
    loading.textContent = 'Could not load gallery. Run the manifest generator script.';
    console.error(err);
  }finally{
    // hide loading after a short delay so user sees message
    setTimeout(()=> loading.style.display = 'none', 600);
  }
}

document.addEventListener('DOMContentLoaded', ()=>{
  const shuffleBtn = document.getElementById('shuffleBtn');
  shuffleBtn.addEventListener('click', loadGallery);

  // lightbox controls
  document.getElementById('lbClose').addEventListener('click', closeLightbox);
  document.getElementById('lbPrev').addEventListener('click', showPrev);
  document.getElementById('lbNext').addEventListener('click', showNext);

  document.addEventListener('keydown', (e)=>{
    if(document.getElementById('lightbox').getAttribute('aria-hidden')==='false'){
      if(e.key === 'Escape') closeLightbox();
      if(e.key === 'ArrowLeft') showPrev();
      if(e.key === 'ArrowRight') showNext();
    }
  });

  loadGallery();
});
