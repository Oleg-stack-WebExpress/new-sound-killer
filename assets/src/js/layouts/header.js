jQuery.noConflict();
(function ($) {
  // Теперь $ доступен
  $(function () {
    console.log('jQuery works!');
  });
})(jQuery);



class HeaderScroll {
  constructor() {
    this.header = document.querySelector('.header');
    this.scrollThreshold = 50;
    this.lastScrollY = window.scrollY;
    this.ticking = false;

    this.init();
  }

  handleScroll() {
    if (window.scrollY > this.scrollThreshold) {
      this.header.classList.add('scrolled');
    } else {
      this.header.classList.remove('scrolled');
    }
  }

  onScroll() {
    if (!this.ticking) {
      window.requestAnimationFrame(() => {
        this.handleScroll();
        this.ticking = false;
      });
      this.ticking = true;
    }
  }

  init() {
    window.addEventListener('scroll', this.onScroll.bind(this));
    window.addEventListener('load', this.handleScroll.bind(this));
  }
}

// Инициализация
new HeaderScroll();


function updateDropdownStyles() {
    const dropdownToggles = document.querySelectorAll('.dropdown-toggle');

    dropdownToggles.forEach(toggle => {
        const dropdownMenu = toggle.nextElementSibling;
        const headerActions = toggle.closest('.header__actions');

        // Проверяем, что элемент находится в нужном блоке
        if (!headerActions) return;

        if (toggle.getAttribute('aria-expanded') === 'true') {
            // Принудительно применяем стили
            Object.assign(dropdownMenu.style, {
                position: 'absolute',
                top: '100%',
                right: '-30px',
                left: 'auto',
                marginTop: '5px',
                transform: 'none',
                inset: 'unset'
            });
        } else {
            // Сбрасываем только если не в медиазапросе
            if (window.innerWidth > 993) {
                Object.assign(dropdownMenu.style, {
                    position: '',
                    top: '',
                    right: '',
                    left: '',
                    marginTop: '',
                    transform: '',
                    inset: ''
                });
            }
        }
    });
}

// Вызываем при изменении размера окна
window.addEventListener('resize', updateDropdownStyles);


// Скрываем стрелочки у всех dropdown
document.querySelectorAll('.dropdown-toggle::after').forEach(arrow => {
  arrow.style.display = 'none';
});

// Или удаляем псевдоэлемент через CSSStyleSheet
const style = document.createElement('style');
style.textContent = '.dropdown-toggle::after { display: none !important; }';
document.head.appendChild(style);