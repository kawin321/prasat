const darkModeToggle = document.getElementById('darkModeToggle');
const body = document.body;

// ตรวจสอบการตั้งค่าของผู้ใช้
const prefersDarkScheme = window.matchMedia('(prefers-color-scheme: dark)');

// ตรวจสอบ Local Storage
const currentTheme = localStorage.getItem('theme');

if (currentTheme === 'dark' || (!currentTheme && prefersDarkScheme.matches)) {
  body.classList.add('dark-mode');
  darkModeToggle.innerHTML = '<i class="fas fa-sun"></i>';
}

// Toggle Dark Mode
darkModeToggle.addEventListener('click', () => {
  body.classList.toggle('dark-mode');
  
  const isDarkMode = body.classList.contains('dark-mode');
  darkModeToggle.innerHTML = isDarkMode 
    ? '<i class="fas fa-sun"></i>' 
    : '<i class="fas fa-moon"></i>';
  
  localStorage.setItem('theme', isDarkMode ? 'dark' : 'light');
});