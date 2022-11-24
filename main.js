const openMenu = () => {
  const nav = document.getElementById('nav');
  const openButton = document.getElementById('open-button');
  const closeButton = document.getElementById('close-button');

  if (nav) {
    nav.classList.remove('visible');
    nav.classList.remove('hidden');
    nav.classList.add('visible');
  }

  if (closeButton) {
    closeButton.classList.remove('visible');
    closeButton.classList.remove('hidden');
    closeButton.classList.add('visible');
  }
}

const closeMenu = () => {
  const nav = document.getElementById('nav');
  const openButton = document.getElementById('open-button');
  const closeButton = document.getElementById('close-button');
  if (nav) {
    nav.classList.remove('visible');
    nav.classList.remove('hidden');
    nav.classList.add('hidden');
  }

  if (closeButton) {
    closeButton.classList.remove('visible');
    closeButton.classList.remove('hidden');
    closeButton.classList.add('hidden');
  }
}

const goToTop = () => {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

const scrollFunction = () => {
  const top = document.getElementById('top');
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    top.style.display = 'grid';
  } else {
    top.style.display = 'none';
  }
}

const form = document.getElementById('contact-form');
if (form) {
  form.addEventListener('submit', (e) => {
    e.preventDefault();
    
    const nom = document.getElementsByName('nom')[0];
    const prenom = document.getElementsByName('prenom')[0];
    const email = document.getElementsByName('email')[0];
    const phone = document.getElementsByName('phone')[0];
    const message = document.getElementsByName('message')[0];
    
    if (!nom.value) {
      nom.parentElement.classList.add('invalid');
      return;
    }
    nom.parentElement.classList.remove('invalid');

    if (!prenom.value) {
      prenom.parentElement.classList.add('invalid');
      return;
    }
    prenom.parentElement.classList.remove('invalid');

    if (!email.value) {
      email.parentElement.classList.add('invalid');
      return;
    }
    email.parentElement.classList.remove('invalid');

    const anchor = document.createElement('a');
    anchor.href = `mailto:info@ipfconsulting.ch?subject=Prise de contact via ipfconsulting.ch&body=${encodeURIComponent(message.value)}%0A%0AInformations de contact:%0ANom: ${encodeURIComponent(prenom.value)} ${encodeURIComponent(nom.value)}%0AEmail: ${encodeURIComponent(email.value)}%0ATéléphone: ${encodeURIComponent(phone.value)}`;
    anchor.target="_blank";
    anchor.click();
  });
}

window.onscroll = () => {
  scrollFunction();
};

if (document.getElementById('contact-map')) {
  mapboxgl.accessToken = '';
  const map = new mapboxgl.Map({
    container: 'contact-map',
    style: 'mapbox://styles/mapbox/outdoors-v11',
    center: [6.374857, 46.404928],
    zoom: 9,
    projection: 'globe'
  });
  map.on('style.load', () => {
    map.setFog({});
  });
  const marker = new mapboxgl.Marker({
    color: '#DC001C'
  }).setLngLat([6.6087252, 46.59848])
    .addTo(map);
  const markerCarouge = new mapboxgl.Marker({
    color: '#DC001C'
  }).setLngLat([6.1369664, 46.1860605]).addTo(map);
}