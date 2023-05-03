<style>
    #back-to-top-btn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 99;
        font-size: 16px;
        border: none;
        outline: none;
        background-color: #555;
        color: white;
        cursor: pointer;
        padding: 15px;
        border-radius: 4px;
    }

    #back-to-top-btn:hover {
        background-color: #333;
    }
</style>


<button id="back-to-top-btn"><i class="bi bi-arrow-up"></i></button>


<script>
    window.onscroll = function() {
        scrollFunction();
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("back-to-top-btn").style.display = "block";
        } else {
            document.getElementById("back-to-top-btn").style.display = "none";
        }
    }

    function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

    document.getElementById("back-to-top-btn").addEventListener("click", backToTop);
</script>
