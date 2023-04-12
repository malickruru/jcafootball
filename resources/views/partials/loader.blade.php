<style>
    /* Définition de la règle CSS pour l'image */
    .page_loader {
        /* display: table; */
        width: 100%;
        height: 100%;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1000;
        background-color: #fff;
    }

    #inner {
        display: table-cell;
        width: 100%;
        height: 100%;
        height: 100vh;
        vertical-align: middle;
        position: relative;
    }

    .image {
        width: 200px;
        /* Largeur de l'image */
        height: 200px;
        /* Hauteur de l'image */
        animation: breathing 3s ease-in-out infinite;
        /* Utilisation de l'animation "breathing" */
    }

    /* Définition de l'animation "breathing" */
    @keyframes breathing {
        0% {
            transform: scale(1);
        }

        /* Taille de l'image à l'état initial */
        50% {
            transform: scale(1.2);
        }

        /* Taille maximale de l'image */
        100% {
            transform: scale(1);
        }

        /* Retour à la taille de l'image à l'état initial */
    }

    #loading-bar {
        /* position: fixed;
  bottom:  0;
  left: 0; */
        width: 100%;
        height: 3px;
        background-color: #d4d2d2;
        z-index: 9999;
    }

    #progress {
        width: 0%;
        height: 100%;
        background-color: #b71c1c;
        transition: width 0.3s ease;
    }
</style>

<div class="page_loader flexCenter">
    <div id="inner  ">
        <img class="image" src="image/logo.png" alt="loader" width="400px" />
        <div id="loading-bar" class="mt-5">
            <div id="progress"></div>
        </div>
    </div>
</div>

<script type="text/javascript">
    // Mettre à jour la barre de progression lorsque la page est chargée
    $(window).on("load", function() {
        var progressBar = document.getElementById("progress");
        var loadingBar = document.getElementById("loading-bar");
        var width = 0;
        var interval = setInterval(frame, 7);

        function frame() {
            if (width >= 100) {
                clearInterval(interval);
                $(".page_loader").fadeOut("slow")
            } else {
                width++;
                progressBar.style.width = width + "%";
            }
        }
        // $(".page_loader").fadeOut("slow")
    });
</script>
