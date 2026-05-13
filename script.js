// ======================================================
// LS ECOTYRES - SCRIPT
// ======================================================

// ================= MENU MOBILE =================
const hamburger = document.getElementById('hamburger');
const nav = document.getElementById('nav');

hamburger.addEventListener('click', () => {
  hamburger.classList.toggle('open');
  nav.classList.toggle('open');
});

// Fecha menu ao clicar no link
document.querySelectorAll('.nav__link').forEach(link => {
  link.addEventListener('click', () => {
    hamburger.classList.remove('open');
    nav.classList.remove('open');
  });
});

// ================= HEADER SCROLL =================
const header = document.getElementById('header');

window.addEventListener('scroll', () => {
  if (window.scrollY > 50) {
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
  }
});

// ================= REVEAL ANIMATION =================
const reveals = document.querySelectorAll('.reveal');

function revealElements() {
  const triggerBottom = window.innerHeight * 0.85;

  reveals.forEach(element => {
    const elementTop = element.getBoundingClientRect().top;

    if (elementTop < triggerBottom) {
      element.classList.add('visible');
    }
  });
}

window.addEventListener('scroll', revealElements);
window.addEventListener('load', revealElements);

// ================= BACK TO TOP =================
const backToTop = document.getElementById('backToTop');

window.addEventListener('scroll', () => {
  if (window.scrollY > 400) {
    backToTop.classList.add('show');
  } else {
    backToTop.classList.remove('show');
  }
});

backToTop.addEventListener('click', () => {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});

// ================= PARALLAX HERO =================
const heroBg = document.getElementById('heroBg');

window.addEventListener('scroll', () => {
  const scroll = window.scrollY;

  if (heroBg) {
    heroBg.style.transform = `translateY(${scroll * 0.3}px)`;
  }
});

// ================= MENU LINK ATIVO =================
const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('.nav__link');

function activeMenu() {
  const scrollY = window.pageYOffset;

  sections.forEach(section => {
    const sectionHeight = section.offsetHeight;
    const sectionTop = section.offsetTop - 120;
    const sectionId = section.getAttribute('id');

    if (
      scrollY >= sectionTop &&
      scrollY < sectionTop + sectionHeight
    ) {
      navLinks.forEach(link => {
        link.classList.remove('active');

        if (link.getAttribute('href') === `#${sectionId}`) {
          link.classList.add('active');
        }
      });
    }
  });
}

window.addEventListener('scroll', activeMenu);

// ================= FORMULÁRIO =================
const contactForm = document.getElementById('contactForm');

if (contactForm) {
  contactForm.addEventListener('submit', function (e) {
    e.preventDefault();

    const name = document.getElementById('name');
    const email = document.getElementById('email');
    const phone = document.getElementById('phone');
    const message = document.getElementById('message');

    const formSuccess = document.getElementById('formSuccess');

    let valid = true;

    // Limpa erros
    document.querySelectorAll('.form__error').forEach(error => {
      error.textContent = '';
    });

    document.querySelectorAll('input, textarea').forEach(field => {
      field.classList.remove('error');
    });

    // Nome
    if (name.value.trim().length < 3) {
      showError(name, 'Digite um nome válido.');
      valid = false;
    }

    // Email
    if (!validateEmail(email.value)) {
      showError(email, 'Digite um e-mail válido.');
      valid = false;
    }

    // Telefone
    if (phone.value.trim().length < 8) {
      showError(phone, 'Digite um telefone válido.');
      valid = false;
    }

    // Mensagem
    if (message.value.trim().length < 10) {
      showError(message, 'Mensagem muito curta.');
      valid = false;
    }

    // Sucesso
    if (valid) {
      formSuccess.classList.add('show');

      contactForm.reset();

      setTimeout(() => {
        formSuccess.classList.remove('show');
      }, 5000);
    }
  });
}

// ================= FUNÇÕES =================
function showError(input, message) {
  input.classList.add('error');

  const errorSpan = document.getElementById(input.id + 'Error');

  if (errorSpan) {
    errorSpan.textContent = message;
  }
}

function validateEmail(email) {
  return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}