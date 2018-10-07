class SiteThemeSetter {
  constructor() {
    this.body = document.querySelector('body');
    this.darkThemeButton = document.querySelector('[data-button-dark]');
    this.lightThemeButton = document.querySelector('[data-button-light]');
    this.image = document.querySelector('[data-header-img]');
    this.imageSrc = `${this.image.dataset.headerImgSrc}/img`;
    this.darkThemeButton.addEventListener('click', this.switchToDarkTheme.bind(this));
    this.lightThemeButton.addEventListener('click', this.switchToLightTheme.bind(this));

    this.body.addEventListener('keyup', this.toggleModes.bind(this));
  }

  switchToDarkTheme() {
    document.cookie = "siteTheme=dark;path=/";
    this.body.classList.add('darkMode');
    this.image.setAttribute('src', `${this.imageSrc}/tetchi-dark.gif`);
  }

  switchToLightTheme() {
    document.cookie = "siteTheme=light;path=/";
    this.body.classList.remove('darkMode');
    this.image.setAttribute('src', `${this.imageSrc}/tetchi.gif`);
  }

  toggleModes(evt) {
    if (evt.key === "d") {
      this.switchToDarkTheme();
    } else if (evt.key === "l") {
      this.switchToLightTheme();
    }
  }
}

document.addEventListener('DOMContentLoaded', () => {
  const siteThemeSetter = new SiteThemeSetter();
});
