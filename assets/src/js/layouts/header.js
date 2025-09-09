jQuery.noConflict();
(function ($) {
  // Теперь $ доступен
  $(function () {
    console.log('jQuery works!');
  });
})(jQuery);


/*
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
new HeaderScroll();*/