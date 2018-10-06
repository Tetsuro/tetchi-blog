class SiteThemeSetter {
  constructor() {
    this.darkThemeButton = document.querySelector('[data-button-dark]');
    this.lightThemeButton = document.querySelector('[data-button-light]');

    this.darkThemeButton.addEventListener('click', this.switchToDarkTheme.bind(this));
    this.lightThemeButton.addEventListener('click', this.switchToLightTheme.bind(this));
  }

  switchToDarkTheme() {
    console.log("go to dark mode");
    document.cookie = "siteTheme=dark";
  }

  switchToLightTheme() {
    console.log("go to light mode");
    document.cookie = "siteTheme=light";
  }
}

document.addEventListener('DOMContentLoaded', () => {
  const siteThemeSetter = new SiteThemeSetter();
});