class SiteThemeSetter {
  constructor() {
    this.body = document.querySelector('body');
    this.darkThemeButton = document.querySelector('[data-button-dark]');
    this.lightThemeButton = document.querySelector('[data-button-light]');
    this.image = document.querySelector('[data-header-img]');
    this.imageSrc = `${this.image.dataset.headerImgSrc}/img`;
    this.darkThemeButton.addEventListener('click', this.switchToDarkTheme.bind(this));
    this.lightThemeButton.addEventListener('click', this.switchToLightTheme.bind(this));

    this.expiryDate = new Date();
    this.expiryDate.setDate(this.expiryDate.getDate() + 720);
  }

  switchToDarkTheme() {
    document.cookie = `siteTheme=dark;path=/;expires=${this.expiryDate.toUTCString()}`;
    this.body.classList.add('darkMode');
    this.image.setAttribute('src', `${this.imageSrc}/tetchi-dark.gif`);
  }

  switchToLightTheme() {
    document.cookie = `siteTheme=light;path=/;expires=${this.expiryDate.toUTCString()}`;
    this.body.classList.remove('darkMode');
    this.image.setAttribute('src', `${this.imageSrc}/tetchi.gif`);
  }
}

document.addEventListener('DOMContentLoaded', () => {
  const siteThemeSetter = new SiteThemeSetter();

  const observer = lozad('.lazy-load', {
    rootMargin: '300px 0px',
    threshold: 0.1,
    load: function(el) {
      el.src = el.getAttribute('data-src');
      el.onload = function () {
        el.classList.add('is-loaded');

        while (el.parentNode) {
          el = el.parentNode;
          if (el.tagName === "FIGURE") {
            el.classList.add('figure-is-loaded');
            return;
          }
        }
      };
    },
  });
  observer.observe();
});
