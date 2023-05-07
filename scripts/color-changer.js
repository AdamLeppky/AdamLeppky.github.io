
var COLOR_SCHEMES = ["light", "dark"];

function onDarkMode() {
    setColorScheme("dark");
}

function onLightMode() {
    setColorScheme("light");
}

function clearColorSchemes() {
    for (const color in COLOR_SCHEMES)
        document.documentElement.classList.remove(color);
}

function setColorScheme(scheme) {
    // console.log("Setting Scheme: " + scheme);
    for (const color in COLOR_SCHEMES)
        document.documentElement.classList.remove(COLOR_SCHEMES[color]);

    document.documentElement.classList.add(scheme);
    window.localStorage.setItem('mode', scheme);
}

function onLoad() {
    onLightMode();

    // const mode = window.localStorage.getItem('mode');
    // console.log("Loaded Scheme: " + mode);

    // switch (mode) {
    //     case 'dark': 
    //         onDarkMode(); break;
    //     case 'light': 
    //         onLightMode(); break;
    //     default:
    //         onDarkMode();
    // }
}

function callWhenLoaded(func) {
    if (window.addEventListener) {
      window.addEventListener("load", func, false);
    } else if (window.attachEvent) {
      window.attachEvent("onload", func);
    }
  }

callWhenLoaded(function() { onLoad(); });
