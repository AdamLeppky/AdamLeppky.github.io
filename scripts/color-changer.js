
var COLOR_SCHEMES = ["light", "dark"];

function onDarkMode() {
    setColorScheme("dark");

    var navbar = document.getElementById("navbar-id");
    navbar.classList.remove("navbar-light");
    navbar.classList.add("navbar-dark");
}

function onLightMode() {
    setColorScheme("light");

    var navbar = document.getElementById("navbar-id");
    navbar.classList.remove("navbar-dark");
    navbar.classList.add("navbar-light");
}

function clearColorSchemes() {
    for (const color in COLOR_SCHEMES)
        document.documentElement.classList.remove(color);
}

function setColorScheme(scheme) {
    console.log("Setting Scheme: " + scheme);
    for (const color in COLOR_SCHEMES)
        document.documentElement.classList.remove(COLOR_SCHEMES[color]);

    document.documentElement.classList.add(scheme);
    window.localStorage.setItem('mode', scheme);
}

function onLoad() {
    const mode = window.localStorage.getItem('mode');
    console.log("Loaded Scheme: " + mode);

    switch (mode) {
        case 'dark': 
            onDarkMode(); break;
        case 'light': 
            onLightMode(); break;
        default:
            onDarkMode();
    }
}

function callWhenLoaded(func) {
    if (window.addEventListener) {
      window.addEventListener("load", func, false);
    } else if (window.attachEvent) {
      window.attachEvent("onload", func);
    }
  }

callWhenLoaded(function() { onLoad(); });
