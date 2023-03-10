
var COLOR_SCHEMES = ["light", "dark", "gradient"];

function onDarkMode() {
    setColorScheme("dark");
}

function onLightMode() {
    setColorScheme("light");
}

function onGradientMode() {
    setColorScheme("gradient");
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
        case 'gradient': 
            onGradientMode(); break;
        default:
            onDarkMode();
    }
}

onLoad();
