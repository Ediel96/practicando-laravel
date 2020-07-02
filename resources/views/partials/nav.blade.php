<nav>
    <!--
        path() => mustra solo el nombre de la ruta
        url() => muestar la url
        routeIs() => muestra con un booleano si la ruta es verdadera


        setActive : /app/helpers.php / se crea un archivo nuevo en composer y luego se activila el composer.json :composer dumpautoload
    -->
    <ul>
        <li class="{{setActive('home')}}" ><a href="/">Home</a></li>
        <li class="{{setActive('about')}}" ><a href="/about">About</a></li>
        <li class="{{setActive('portfolio')}}" ><a href="/portfolio">Portfolio</a></li>
        <li class="{{setActive('contact')}}" ><a href="/contact">Contact</a></li>
    </ul>
</nav>
