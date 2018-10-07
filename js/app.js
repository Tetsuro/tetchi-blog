class SiteThemeSetter {
  constructor() {
    this.body = document.querySelector('body');
    this.darkThemeButton = document.querySelector('[data-button-dark]');
    this.lightThemeButton = document.querySelector('[data-button-light]');
    this.image = document.querySelector('[data-header-img]');
    this.imageSrc = `${this.image.dataset.headerImgSrc}/img`;
    this.darkThemeButton.addEventListener('click', this.switchToDarkTheme.bind(this));
    this.lightThemeButton.addEventListener('click', this.switchToLightTheme.bind(this));
  }

  switchToDarkTheme() {
    // if (document.cookie.split(';').filter((item) => item.includes('siteTheme=')).length) {
    //   console.log('The cookie "reader" exists');
    // }
    document.cookie = "siteTheme=dark";
    this.body.classList.add('darkMode');
    this.image.setAttribute('src', `${this.imageSrc}/tetchi-dark.gif`);
  }

  switchToLightTheme() {
    document.cookie = "siteTheme=light";
    this.body.classList.remove('darkMode');
    this.image.setAttribute('src', `${this.imageSrc}/tetchi.gif`);
  }
}

document.addEventListener('DOMContentLoaded', () => {
  const siteThemeSetter = new SiteThemeSetter();
});