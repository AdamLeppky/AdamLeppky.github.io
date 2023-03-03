
class ClassScheme {
    constructor(className, colorSchemes) {
        this.className = className;
        this.colorSchemes = colorSchemes;
    }
}

class ColorScheme {
    constructor(backgroundColor, foregroundColor) {
        this.backgroundColor = backgroundColor;
        this.foregroundColor = foregroundColor;
    }
}

const aboutClass = new ClassScheme('about-container', [
    new ColorScheme('#3893c4', '#fff'),
    new ColorScheme('white', 'black'),
    new ColorScheme('black', 'white'),
])


function onColorSchemeDefault() {
    changeClassColors(aboutClass, 0);
}


function onColorSchemeOne() {
    changeClassColors(aboutClass, 1);
}


function onColorSchemeTwo() {
    changeClassColors(aboutClass, 2);
}


function changeClassColors(classScheme, colorSchemeIndex) {
    var colorScheme = classScheme.colorSchemes[colorSchemeIndex];
    var container = document.getElementsByClassName(classScheme.className);
    for (i = 0; i < container.length; i++) {
        container[i].style.backgroundColor = colorScheme.backgroundColor;
        container[i].style.color = colorScheme.foregroundColor;
    }
}
