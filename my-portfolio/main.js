// Mobile Navigation
const burger = document.querySelector('.burger');
const navLinks = document.querySelector('.nav-links');

burger.addEventListener('click', () => {
  navLinks.classList.toggle('nav-active');
  
  // Burger Animation
  burger.classList.toggle('toggle');
});

// Smooth Scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
    e.preventDefault();
    
    document.querySelector(this.getAttribute('href')).scrollIntoView({
      behavior: 'smooth'
    });
  });
});
// Scroll Reveal Animation
const scrollElements = document.querySelectorAll('[data-scroll]');

const elementInView = (el, dividend = 1) => {
  const elementTop = el.getBoundingClientRect().top;
  return (
    elementTop <= (window.innerHeight || document.documentElement.clientHeight) / dividend
  );
};

const displayScrollElement = (element) => {
  element.classList.add('is-visible');
};

const hideScrollElement = (element) => {
  element.classList.remove('is-visible');
};

const handleScrollAnimation = () => {
  scrollElements.forEach((el) => {
    if (elementInView(el, 1.25)) {
      displayScrollElement(el);
    } else {
      hideScrollElement(el);
    }
  });
};

// Initialize
window.addEventListener('load', () => {
  handleScrollAnimation();
});

window.addEventListener('scroll', () => {
  handleScrollAnimation();
});

// เพิ่มลูกเล่นเมื่อเมาส์เคลื่อนที่
document.addEventListener('mousemove', (e) => {
  const hero = document.querySelector('.hero');
  if (hero) {
    const xAxis = (window.innerWidth / 2 - e.pageX) / 25;
    const yAxis = (window.innerHeight / 2 - e.pageY) / 25;
    hero.style.transform = `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`;
  }
});

// กำหนดให้ Hero Section กลับมาที่ตำแหน่งปกติเมื่อเมาส์ออก
const heroSection = document.querySelector('.hero');
if (heroSection) {
  heroSection.addEventListener('mouseleave', () => {
    heroSection.style.transform = 'rotateY(0deg) rotateX(0deg)';
    heroSection.style.transition = 'all 0.5s ease';
    setTimeout(() => {
      heroSection.style.transition = '';
    }, 500);
  });
}
