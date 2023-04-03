<style>
    header{
        top: 0;
        left: 0;
        right: 0;
        /* background-color: #fff; */
        background-color: #00000093;
        padding: 0;
    }
    .logo{
        border-width: 1px 1px 0px 1px;
    }

    .logo .h3{
        width: 0px;
        overflow: hidden;
        padding: 0;
        margin: 0;
        transition: all 0.5s ease;
        
    }
    .logo .h3 h3{
        white-space: nowrap;
        
    }

    .logo:hover .h3{
        width: 400px;
    }
    .logo{
        position: relative;
    }

.logo:after {
  width  : 0;
  height : 0;
  content: '';
  border-bottom : 108px solid #b71c1c;
  border-right  : 40px solid transparent;
  /* border-left   : 20px solid transparent; */
  position : absolute;
  top  : 0px;
  right: -40px;
  bottom: 0;
  transform: rotateX(180deg)
}

.link{
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
    padding-right: 65px ;
}
.link a{
    padding: 40px;
    text-decoration: none;
    /* color: #fff */

    background-image: linear-gradient(
    to right,
    #b71c1c,
    #b71c1c 50%,
    #fff 50%
  );
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
  width:100%;
}
</style>
<header class="d-flex  pl-0 position-fixed ">
    <div class="logo p-3 flexSpaceBetween bg-primary text-white">
        <x-logo :width=75 :color=1></x-logo>
        <div class="h3">
            <h3 class="px-2">Jeunesse Club D'Abidjan</h3>
        </div>
    </div>
    <div class="link flexRight ">
        <a href="#">Actualité</a>
        <a href="#">A Propos</a>
        <a href="#">Equipe</a>
        <a href="#">Contact</a>
        <a href="#">Devenir membre</a>
    </div>
</header>
