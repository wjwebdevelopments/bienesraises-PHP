document.addEventListener('DOMContentLoaded', function() {
    eventsListeners();
    onDarkMode();
});

function onDarkMode() {
    const prefiereDarkTheme = window.matchMedia('(prefers-color-scheme): dark');
    const botonDarkMode = document.querySelector('#dark-mode-boton');

    botonDarkMode.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');
    });

    if ( prefiereDarkTheme.matches ) {
        document.body.classList.add('dark-mode');
    } else {
        document.body.classList.remove('dark-mode');
    }

    prefiereDarkTheme.addEventListener('change', () => {
        if ( prefiereDarkTheme.matches ) {
            document.body.classList.add('dark-mode');
        } else {
            document.body.classList.remove('dark-mode');
        }
    });
}

function eventsListeners() {
    const mobileMenu = document.querySelector('.mobile-menu');
    mobileMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion');
    if ( navegacion.classList.contains('mostrar') ) {
        navegacion.classList.remove('mostrar');
    } else {
        navegacion.classList.add('mostrar');
    }
}



