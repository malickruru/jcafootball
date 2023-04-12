<style>
    header {
        top: 0;
        left: 0;
        right: 0;
        /* background-color: #fff; */
        background-color: rgba(0, 0, 0, 0.8);
        padding: 0;
        z-index: 999;
    }

    .logo {
        border-width: 1px 1px 0px 1px;

    }

    .logo .h3 {
        width: 0px;
        overflow: hidden;
        padding: 0;
        margin: 0;
        transition: all 0.5s ease;

    }

    .logo .h3 h3 {
        white-space: nowrap;

    }

    .logo:hover .h3 {
        width: 400px;
    }

    .logo {
        position: relative;
    }

    .logo:after {
        width: 0;
        height: 0;
        content: '';
        border-bottom: 108px solid #b71c1c;
        border-right: 40px solid transparent;
        /* border-left   : 20px solid transparent; */
        position: absolute;
        top: 0px;
        right: -40px;
        bottom: 0;
        transform: rotateX(180deg)
    }

    .link {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        padding-right: 65px;
    }

    .link a {
        padding: 40px;
        text-decoration: none;
        /* color: #fff */

        background-image: linear-gradient(to right,
                #b71c1c,
                #b71c1c 50%,
                #fff 50%);
        font-weight: 700;
        background-size: 200% 100%;
        background-position: -100%;
        /* display: inline-block; */
        /* padding: 5px 0; */
        position: relative;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        transition: all 0.3s ease-in-out;
    }

    .link a:before {
        content: '';
        background: #b71c1c;
        display: block;
        position: absolute;
        bottom: -3px;
        left: 0;
        width: 0;
        height: 3px;
        transition: all 0.3s ease-in-out;
    }

    .link a:hover {
        background-position: 0;
    }

    .link a:hover::before {
        width: 100%;
    }

    .sidebar {
        background-color: #f2f2f2;
        width: 100vw;
        height: 100vh !important;
        padding: 100px 20px 20px 20px;
        display: none;
        /* display: flex; */
        flex-direction: column;
        z-index: 998;
        float:left;
        overflow: hidden;
        position: fixed;
        top: 0;
    }

    .sidebar ul li {
        list-style: none;
        white-space: nowrap;
        padding: 20px;
        
        /* border-bottom: 0.5px solid gray  */

    }

    .sidebar ul li a{
        color: #b71c1c;
        text-decoration: none;
        font-size: 2em;
    }
</style>
<header class="d-flex  pl-0 position-fixed ">
    <div class="logo p-3 flexSpaceBetween bg-primary text-white" onclick="window.location.href= '/'">

        <x-logo :width=75 :color=1></x-logo>
        <div class="h3">
            <h3 class="px-2">Jeunesse Club D'Abidjan</h3>
        </div>
    </div>
    <div class="link flexRight ">
        <a href="/actu" class="desktop-only">Actualité</a>
        <a href="/about" class="desktop-only">A Propos</a>
        <a href="/team" class="desktop-only">Equipe</a>
        <a href="/contact" class="desktop-only">Contact</a>
        <a href="/member" class="desktop-only">Devenir membre</a>
        <a class="toggle-sidebar mobile-only" style="font-size : 2em">
            <i class='menuIcon bx bx-menu'></i>
            <i class='menuIcon bx bx-x' style="display: none"></i>
        </a>
    </div>
</header>

<div class="sidebar">
    <ul class="pt-4">
        <li><a href="/actu">Actualité</a></li>
        <li><a href="/about">A Propos</a></li>
        <li><a href="/team">Equipe</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/member">Devenir membre</a></li>
    </ul>
</div>

<script>
    $(document).ready(function() {
        $(".toggle-sidebar").on("click", function() {
            // $('.sidebar').toggle();
            $(".sidebar").animate({
                width: "toggle"
            });

            $('.menuIcon').toggle()
        })
    });
</script>
