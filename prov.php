<!DOCTYPE html>

<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet"><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
<link href='https://fonts.googleapis.com/css?family=Megrim' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500&display=swap" rel="stylesheet">

  <script defer src="prov.js"></script>
</head>
<body>
  <link rel="stylesheet" href="prov.css">
<div class="header fk">
  <div class="bllokuloginit"><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><span class="material-symbols-outlined">
person</button></span>

<div id="id01" class="modal">
  <form class="modal-content animate" action="includes/formhandler.inc.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="https://www.pngkit.com/png/full/349-3495495_diamond-kys-white-diamond-icon-png.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="emri" ><b>Emri i perdoruesit</b></label>
      <input type="text" placeholder="Vendos emrin" id="emriphp" name="emri" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Vendos Paskodin" name="psw" required>
        
      <button type="submit">Rregjistrohu</button>
      <label>
        <input type="checkbox" checked="checked" name="kujto" required> Me kujto
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Rikujto <a href="#">paskodin?</a></span>
    </div>
  </form>
</div>
</button></div></button>

 <?php
 if(isset($_POST["submit"])){ 
$servername = "Iocalhost"; 
$username = "roof; 
$password = ""; 
$dbname = "test"; 

// Krijojme lidhjen 
$conn = new mysqli($servername, $username, $password, $dbname); 

//Marim to dhenat e plotesuara 
$sql = "INSERT INTO tetea (emri,psw) VALUES ("'.$_POST["emri"]."','".$_POST["psw"]."')";

 //kontrollojme 
 if ($conn->query($sql) === TRUE) {echo "Te dhenat u ruajten me sukses";}else {echo ("Te dhenat nuk u ruajten".$conn->error); }

//mbyllim lidhjen $conn->close(); // }
?>


  <div class="headeri">
<div class="sticky">
  <a href="file:///C:/Users/USER/OneDrive/Desktop/test.html" class="titulli" ></a>
<div class="search">
            <form action="#">
                <input type="text"
                       placeholder="  Zbulo me shume"
                       name="search">   <button on click="window.location.href='https://w3docs.com';"><span class="material-symbols-outlined">
search
</span>
                    <i class="material-symbols-outlined"
                       style="font-size: 25px;">
                    </i>

                </button>
            </form></div>

  <div class="header-right">

    <a class="faqjakr" href="prov.html">Faqja Kryesore</a>
    <a href="Varese.html" >Produktet</a>
    <a href="kontakt.html" >Kontakt</a>
    <a href="Minigame.html">Minigame</a>

  </div></div></div>

<hr color="white">
<hr color="#c4c4c4">
<hr color="white">

<section class="kuti">

<div class="rreth"></div><div class="kut"></div>

  <div class="imazhi">
           <!-- Swiper -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <a href="Vathe.html"><img src="https://purepng.com/public/uploads/large/purepng.com-diamond-earringjewelryjewellerydiamondcinnaearring-1701528883635onhds.png" /></a>
        </div>
        <div class="swiper-slide">
          <a href="Varese.html"><img src="https://purepng.com/public/uploads/large/purepng.com-diamond-pendantjewelryjewellerydiamondpendant-17015288829893htv1.png"  /></a>
        </div>
        <div class="swiper-slide">
          <a href="Bestseller.html"><img src="https://amz.luxewatches.co.uk/app/uploads/2022/08/18101416/Rolex-Oyster-Perpetual-Cosmograph-Daytona-LW9599-F-5-1-600x600.png " /></a>
        </div>
        <div class="swiper-slide">
          <a href="Varese.html"><img src="https://pngimg.com/d/necklace_PNG61.png" />
        </a></div>
        <div class="swiper-slide">
          <a href="Unaza.html"><img src="https://www.picng.com/upload/jewelry/png_jewelry_82782.png"/>
        </a></div>
        </div>
      </div>


<script>window.onload=function(){
  $('.slider').slick({
  autoplay:true,
  autoplaySpeed:1500,
  arrows:true,
  prevArrow:'<button type="button" class="slick-prev"></button>',
  nextArrow:'<button type="button" class="slick-next"></button>',
  centerMode:true,
  slidesToShow:3,
  slidesToScroll:1
  });
};
</script>
<style>
.frame {position:absolute;
  left:-340px;
  top:440px;
  width: 90%;
  margin: 40px auto;
  text-align: center;
}

.custom-btn {
  width: 150px;
  height: 50px;
  padding: 10px 25px;
  border: 2px solid white;
  font-family: 'Lato', sans-serif;
  font-weight: 500;
  background: transparent;
  cursor: pointer;
  transition: all 0.3s ease;
  position: relative;
  display: inline-block;
}

/* 5 */
.btn-5 {
  background: white;
  color: #B4B4B4;
  line-height: 42px;
  padding: 0;
  border: none;
}
.btn-5:hover {
  background: transparent;
  color: white;
   box-shadow:
   -7px -7px 20px 0px #fff9,
   -4px -4px 5px 0px #fff9,
   7px 7px 20px 0px #0002,
   4px 4px 5px 0px #0001;
}
.btn-5:before,
.btn-5:after{
  content:'';
  position:absolute;
  top:0;
  right:0;
  height:2px;
  width:0;
  background: white;
  transition:400ms ease all;
}
.btn-5:after{
  right:inherit;
  top:inherit;
  left:0;
  bottom:0;
}
.btn-5:hover:before,
.btn-5:hover:after{
  width:100%;
  transition:800ms ease all;
}
</style>

      <div class="section"><div class="titullih"><div class="slide-right"><h1>ALISA</h1><h1>JEWELS</h1></div></div><div class="kutiatekstit"><p class="titullipo">With us you shine a little brighter..</p></div></div></div></div>
<div class="frame">
  <a href="Bestseller.html"><button class="custom-btn btn-5"><span>SHIKO ME SHUME</span></button></a>
</div>
    </div></section></div></section></h2></div><div class="slideInUp"><img src="d.png" class="centeri"></div>

</section>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth:1000,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      loop:true,
    });

  </script>



<section class="kutia2">
  <div class="box1">
  
  <div class="gallery">
 <a href="Bestseller.html"> <img class="gallery-image" src="https://cms-live.pandora.net/resource/responsive-image/2831046/m65-category-module-landscape/lg/3/pngtrpnt-780088c01-rgb.png" alt="Copeza"></a>
  <a href="Byzylyke.html"><img class="gallery-image" src="https://cms-live.pandora.net/resource/responsive-image/2070908/m65-category-module-landscape/lg/3/pngtrpnt-592453c00-rgb.png" alt="Byzylke"></a>
 <a href="Unaza.html"> <img class="gallery-image" src="https://cms-live.pandora.net/resource/responsive-image/2194140/m65-category-module-landscape/lg/2/pngtrpnt-192611c01-rgb.png" alt="Unaza"></a>
  <a href="Varese.html"><img class="gallery-image" src="https://cms-live.pandora.net/resource/responsive-image/2687760/m65-category-module-landscape/lg/2/pngtrpnt-392387c02-rgb.png" alt="Varese"></a>
  <a href="Vathe.html "><img class="gallery-image" src="https://cms-live.pandora.net/resource/responsive-image/2216320/m65-category-module-landscape/lg/2/pngtrpnt-292633c01-rgb.png" alt="Vathe"></a>
</div></div>


<style>

}
.trupi{
  align-items: center;
  background: #e3e3e3;
  display: flex;
  height: 1300px;
  justify-content: center;
}
@-webkit-keyframes scroll {
  0% {
    -webkit-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    -webkit-transform: translateX(calc(-250px * 7));
    transform: translateX(calc(-250px * 7));
  }
}
@keyframes scroll {
  0% {
    -webkit-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    -webkit-transform: translateX(calc(-250px * 7));
    transform: translateX(calc(-250px * 7));
  }
}
.slider {
  background: none;
  box-shadow: 0 20px 30px lightgrey;
  height: 300px;
  margin: auto;
  overflow: hidden;
  width: 1520px;
  position:absolute;
    left:0px;
    top :825px
}

.fonti1{
  font-size: 45px;
  background: -webkit-linear-gradient(184deg, rgba(0,0,0,1) 3%, rgba(140,140,140,1) 35%, rgba(149,151,152,1) 44%, rgba(184,184,185,1) 50%, rgba(156,159,159,1) 57%, rgba(130,130,130,1) 72%, rgba(111,111,111,1) 79%, rgba(0,0,0,1) 94%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
font-family: 'Dancing Script', cursive;
  position:relative;
   text-align:left;
  top: 330px;
  right:-20%;
  padding:65px;
    display: inline-block;
    overflow: hidden;
    white-space: nowrap;  
    text-shadow: 1px 1px 9px white;
    animation: fade-in linear forwards;
      animation-timeline: view();
      animation-range: 1px 300px;        
} 

.slider::before,
.slider::after {
  content: "";
  height:300px;
  position: absolute;
  width: 1000px;
  z-index: 2;
}
.slider::after {
  right: 0;
  top: 0;
  -webkit-transform: rotateZ(180deg);
  transform: rotateZ(180deg);
}
.slider::before {
  left: 0;
  top: 0;
}
.slider .slide-track {
  -webkit-animation: scroll 30s linear infinite;
  animation: scroll 30s linear infinite;
  display: flex;
  width: calc(1350px * 14);
}
.slider .slide {
  height: 400px;
  width: 1350px;
}

</style>
      <div class="slider" class="trupi" class="boksi">
  <div class="slide-track">
    <div class="slide">
      <img src="AJB.png" height="300" width="1400" alt="" />
    </div>
    <div class="slide">
      <img src="slogan.png" height="300" width="1400" alt="" />
    </div>
    <div class="slide">
      <img src="ulje.png" height="300" width="1400" alt="" />
    </div>
    <div class="slide">
      <img src="ulje.png" height="300" width="1400" alt="" />
    </div>
    <div class="slide">
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="300" width="250" alt="" />
    </div></div>
    </div>
  </div>
</div></div>

<p class="fonti1">❥ Diamonds are a girl’s best friend ✧˖°</p></section>

<style>ul {
  list-style: none;
}

li {
  display: inline-block;
  margin-right:-15px; 
}
.fonti2{
  font-size: 20px;
  background: -webkit-linear-gradient(184deg, rgba(0,0,0,1) 3%, rgba(140,140,140,1) 35%, rgba(149,151,152,1) 44%, rgba(184,184,185,1) 50%, rgba(156,159,159,1) 57%, rgba(130,130,130,1) 72%, rgba(111,111,111,1) 79%, rgba(0,0,0,1) 94%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
font-family: 'Dancing Script', cursive;
  position:relative;
   text-align:left;
  top: -90px;
  right:-12.5%;
  padding:65px;
    display: inline-block;
    overflow: hidden;
    white-space: nowrap;  
    text-shadow: 1px 1px 9px white;
    animation: fade-in linear forwards;
      animation-timeline: view();
      animation-range: 1px 300px;        
} 

</style>
<ul>
  <li class="fonti2"><a href="Bestseller.html">❥ Aksesore</a></li>
  <li class="fonti2"><a href="Byzylyke.html">❥ Byzylyke</a></li>
  <li class="fonti2"><a href="Unaza.html">❥ Unaza</a></li>
  <li class="fonti2"><a href="Varese.html">❥ Varese</a></li>
  <li class="fonti2"><a href="Vathe.html">❥ Vathe</a></li>
</ul>


<style>
    .gallery {
      position: absolute;
  display: flex;
  top:1390px;
  text-align: center;
  right:340px;
}

.box1{
  top: 50%;
 left: 50%;
}
.gallery-image {
  width: 200px;
  height: 200px;
  object-fit: cover;
  transition: transform 0.1s ease;
}

.gallery-image:hover {
  transform: scale(0.5);
  box-shadow: 0 1px 10px lightgrey;

}
</style>
<script>
    const galleryImages = document.querySelectorAll('.gallery-image');

galleryImages.forEach(image => {
  image.addEventListener('mouseover', () => {
    image.style.transition = 'transform 3s ease';
  });
});
</script>
</section>

<section class="kutia" class="hidden"><div class="fotojatranz"><div class="titullih1"><h1>BRANDET ME TE NJOHURA</h1></div><div class="kutiatekstit"><p class="titullip">Eksluzivisht vetem ne dyqanet tona do te gjeni produktet origjinale te markave me te njohura ne bote.Ne dyqanet tona do te gjeni cmimet me te arsyeshme ne treg ne raport me kualitetin dhe origjinalitetin duke ofruar ne shqiperi emrin e brandeve me te njohura te kozmetikes ne mbare boten,ekzluzivitet per tregetimin ne shqiperi qe i perket vetem ALISA COSMETICS.
Ju mirepresim ne dyqanet tona!</p></div></div></div><a href="Varese.html"><button class="button">Shiko me shume</button></a></div><img src="https://i0.wp.com/www.marieclaire.com.au/wp-content/uploads/sites/5/media/87023/1619047896630_tiffany-and-co-rose-1.jpg?resize=819%2C1024&ssl=1" class="center"  ></div><div class="overlay"></div>
    </section>
 


<section class="kutia2"><div class="c">
  <div class="overlay">
    <div class = "items"></div>
    <div class = "items head">
      <p>VARESE SET ARGJEND</p>
      <hr>
    </div>
    <div class = "items price">
      <p class="old">99'000L</p>
      <p class="new">55'000L</p>
    </div>
    <div class="items cart">
      <i class="fa fa-shopping-cart"></i>
      <span><button class="buttonbest">SHTO NE SHPORTE</button></span>
  </div>
</div>

<div class="c2">
  <div class="overlay2">
    <div class = "items2"></div>
    <div class = "items2 head2">
      <p> BESTSELLER  - PANDORA</p>
      <hr>
    </div>
    <div class = "items2 price2">
      <p class="old2">15'000L</p>
      <p class="new2">10'000L</p>
    </div>
    <div class="items2 cart2">
      <i class="fa fa-shopping-cart"></i>
      <span><button class="buttonbest2">SHTO NE SHPORTE</button></span>
  </div>
</div>

<div class="c3">
  <div class="overlay3">
    <div class = "items3"></div>
    <div class = "items3 head3">
      <p>ORE ROLEX ARI </p>
      <hr>
    </div>
    <div class = "items3 price3">
      <p class="old2">120'000L</p>
      <p class="new2">100'000L</p>
    </div>
    <div class="items3 cart3">
      <i class="fa fa-shopping-cart"></i>
      <span><button class="buttonbest3">SHTO NE SHPORTE</button></span>
  </div>
</div>

</div><div class="titullih12"><h1>BESTSELLERS</h1></div><p class="titullip2">Disa nga produktet me te shitura te faqes sone.</p></div></div><a href="Bestseller.html"><button class="button2">Shiko me shume</button></a></div></section></div></section></h2></div>
  </section>

<style> 

.kub{  width: 100%;
height:850px;
background-color: #CDD3D4;
}


.titul{
  font-size: 190%;
  background : #E3CAA0 ;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  position:relative;
  text-align:center;
  top:230px;
  right:-20%;
  padding:65px;
  display: inline-block;
    overflow: hidden;
    white-space: nowrap;  
    text-shadow: 1px 1px 9px white;
font-family: 'Dancing Script', cursive;
    animation: fade-in linear forwards;
      animation-timeline: view();
      animation-range: 1px 300px;       
} 

@keyframes fade-in {
 from  { 
 scale:1.5; opacity : 0;     
 }
 to { 
  scale:1; opacity : 1; 
 }
}



.titu{
  font-size: 57px;
  color:#E3CAA0;
  position:relative;
   text-align:left;
  top: 965px;
  right: -30%;
  padding:65px;
    display: inline-block;
    overflow: hidden;
    white-space: nowrap;  
   text-shadow: 1px 1px 9px white;
font-family: 'Dancing Script', cursive;
    animation: fade-in linear forwards;
      animation-timeline: view();
      animation-range: 1px 300px;        
} 

@keyframes fade-in {
 from  { 
 scale:1.5; opacity : 0;     
 }
 to { 
  scale:1; opacity : 1; 
 }
}


.tit{
  font-size: 35px;
  color:#E3CAA0;
 font-family: 'Dancing Script', cursive;
  position:relative;
   text-align:left;
  top: 128px;
  right:-10%;
  padding:65px;
    display: inline-block;
    overflow: hidden;
    white-space: nowrap;  
    text-shadow: 1px 1px 9px white;
    animation: fade-in linear forwards;
      animation-timeline: view();
      animation-range: 1px 300px;        
} 

@keyframes fade-in {
 from  { 
 scale:1.5; opacity : 0;     
 }
 to { 
  scale:1; opacity : 1; 
 }
}
</style>


<style> /*STYLE PER BUTONIN ME NGJYRE */
  
.type--A{
  --line_color : #C1AA85 ;
  --back_color : #E3CAA0  ;
}

.butt{
    position : relative ;
    z-index : 0 ;
    right:-15px;
    top:10px;
    width : 240px ;
    height : 56px ;
    text-decoration : none ;
    font-size : 14px ; 
    font-weight : bold ;
    color : var(--line_color) ;
    letter-spacing : 2px ;
    transition : all .3s ease ;
}
.butt__text{
    display : flex ;
    justify-content : center ;
    align-items : center ;
    width : 100% ;
    height : 100% ;
}
.butt::before,
.butt::after,
.butt__text::before,
.butt__text::after{
    content : '' ;
    position : absolute ;
    height : 3px ;
    border-radius : 2px ;
    background : var(--line_color) ;
    transition : all .5s ease ;
}
.butt::before{
    top : 0 ;
    left : 54px ;
    width : calc( 100% - 56px * 2 - 16px ) ;
}
.butt::after{
    top : 0 ;
    right : 54px ;
    width : 8px ;
}
.butt__text::before{
    bottom : 0 ;
    right : 54px ;
    width : calc( 100% - 56px * 2 - 16px ) ;
}
.butt__text::after{
    bottom : 0 ;
    left : 54px ;
    width : 8px ;
}
.butt__line{
    position : absolute ;
    top : 0 ;
    width : 56px ;
    height : 100% ;
    overflow : hidden ;
}
.butt__line::before{
    content : '' ;
    position : absolute ;
    top : 0 ;
    width : 150% ;
    height : 100% ;
    box-sizing : border-box ;
    border-radius : 300px ;
    border : solid 3px var(--line_color) ;
}
.butt__line:nth-child(1),
.butt__line:nth-child(1)::before{
    left : 0 ;
}
.butt__line:nth-child(2),
.butt__line:nth-child(2)::before{
    right : 0 ;
}
.butt:hover{
    letter-spacing : 6px ;
}
.butt:hover::before,
.butt:hover .button__text::before{
    width : 8px ;
}
.butt:hover::after,
.butt:hover .button__text::after{
    width : calc( 100% - 56px * 2 - 16px ) ;
}
.butt__drow1,
.butt__drow2{
    position : absolute ;
    z-index : -1 ;
    border-radius : 16px ;
    transform-origin : 16px 16px ;
}
.butt__drow1{
    top : -16px ;
    left : 40px ;
    width : 32px ;
    height : 0;
    transform : rotate( 30deg ) ;
}
.butt__drow2{
    top : 44px ;
    left : 77px ;
    width : 32px ;
    height : 0 ;
    transform : rotate(-127deg ) ;
}
.butt__drow1::before,
.butt__drow1::after,
.butt__drow2::before,
.butt__drow2::after{
    content : '' ;
    position : absolute ;
}
.butt__drow1::before{
    bottom : 0 ;
    left : 0 ;
    width : 0 ;
    height : 32px ;
    border-radius : 16px ;
    transform-origin : 16px 16px ;
    transform : rotate( -60deg ) ;
}
.butt__drow1::after{
    top : -10px ;
    left : 45px ;
    width : 0 ;
    height : 32px ;
    border-radius : 16px ;
    transform-origin : 16px 16px ;
    transform : rotate( 69deg ) ;
}
.butt__drow2::before{
    bottom : 0 ;
    left : 0 ;
    width : 0 ;
    height : 32px ;
    border-radius : 16px ;
    transform-origin : 16px 16px ;
    transform : rotate( -146deg ) ;
}
.butt__drow2::after{
    bottom : 26px ;
    left : -40px ;
    width : 0 ;
    height : 32px ;
    border-radius : 16px ;
    transform-origin : 16px 16px ;
    transform : rotate( -262deg ) ;
}
.butt__drow1,
.butt__drow1::before,
.butt__drow1::after,
.butt__drow2,
.butt__drow2::before,
.butt__drow2::after{
    background : var( --back_color ) ;
}
.butt:hover .butt__drow1{
    animation : drow1 ease-in .06s ;
    animation-fill-mode : forwards ;
}
.butt:hover .butt__drow1::before{
    animation : drow2 linear .08s .06s ;
    animation-fill-mode : forwards ;
}
.butt:hover .butt__drow1::after{
    animation : drow3 linear .03s .14s ;
    animation-fill-mode : forwards ;
}
.butt:hover .butt__drow2{
    animation : drow4 linear .06s .2s ;
    animation-fill-mode : forwards ;
}
.butt:hover .butt__drow2::before{
    animation : drow3 linear .03s .26s ;
    animation-fill-mode : forwards ;
}
.butt:hover .butt__drow2::after{
    animation : drow5 linear .06s .32s ;
    animation-fill-mode : forwards ;
}
@keyframes drow1{
    0%   { height : 0 ; }
    100% { height : 100px ; }
}
@keyframes drow2{
    0%   { width : 0 ; opacity : 0 ;}
    10%  { opacity : 0 ;}
    11%  { opacity : 1 ;}
    100% { width : 120px ; }
}
@keyframes drow3{
    0%   { width : 0 ; }
    100% { width : 80px ; }
}
@keyframes drow4{
    0%   { height : 0 ; }
    100% { height : 120px ; }
}
@keyframes drow5{
    0%   { width : 0 ; }
    100% { width : 124px ; }
}


.vendibutonit{
    width : 100% ;
    height : 300px ;
    display : flex ;
    flex-direction : column ;
    justify-content : center ;
    align-items : center ;
}
.butt:not(:last-child){
  margin-bottom : 64px ;
}

</style>


<style>
  .vidjo{
    width:100%;
height:120%;
position:absolute;
top:3485px;
right: 0px;
  }

.fotovid{
    position:absolute;
    width:100px;
    height:400px;
    right:1287px;
    top:3755px;
  }
</style>
<section>
  <video class="vidjo" loop="true" autoplay="autoplay" controls muted >
  <source src="sana.mp4" type="video/mp4">
</video>
<div class="fotovid"><img src="ggg.png"></div>
</section>



<section>
 </div> <div class="kub"><p class="titu">Akoma nuk jeni nje anetar?</p></div>
            <h1 class="titul">Oferta eksluzive dhe dhurta pafund per cdo anetar te paketes sone VIP.</h1></div> <p class="tit">Rregjistrohuni menjehere ne paketen vip per te perfituar nga ofertat dhe modelet me te fundit !</p></div><a href="https://take.quiz-maker.com/QBGHW6IXB"></a><div class="vendibutonit">
<a href="file:///C:/Users/USER/OneDrive/Desktop/kontakt.html" class="butt type--A">
    <div class="butt__line"></div>
    <div class="butt__line"></div>
    <span class="butt__text">REGJISTROHUNI</span>
    <div class="butt__drow1"></div>
    <div class="butt__drow2"></div>
  </a></div></div></section>



<!------BESTSELLER------>

<style>
.parallax {
  /* The image used */
  background-image: url("https://www.lux-review.com/wp-content/uploads/2022/01/Necklace.jpg");

  /* Set a specific height */
  min-height: 500px; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>


<style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.contenier {
    width: 1000px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}
.contenier .btn {
    position: relative;
    top:280px;
    left: 260px;
    width: 250px;
    height: 50px;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
}
.contenier .btn a {
    position: absolute;
    top:0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background: rgba(255, 255, 255, 0.05);
    box-shadow: 0 15px 15px rgba(0, 0, 0, 0.3);
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 30px;
    padding: 10px;
    letter-spacing: 1px;
    text-decoration: none;
    overflow: hidden;
   color: #CAB89A;
    font-weight: 400px;
    z-index: 1;
    transition: 0.5s;
    backdrop-filter: blur(15px);
}
.contenier .btn:hover a {
    letter-spacing: 3px;
    color: white;
}
.contenier .btn a::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 50%;
    height: 100%;
    background: linear-gradient(to left, rgba(255, 255, 255, 0.15), transparent);
    transform: skewX(45deg) translate(0);
    transition: 0.5s;
    filter: blur(0px);
}
.contenier .btn:hover a::before {
    transform: skewX(45deg) translate(200px);
}
.contenier .btn::before {
    content: "";
    position: absolute;
    left: 50%;
    transform: translatex(-50%);
    bottom: -5px;
    width: 30px;
    height: 10px;
    background: #f00;
    border-radius: 10px;
    transition: 0.5s;
    transition-delay: 0.5;
}
.contenier .btn:hover::before /*lightup button*/ {
    bottom: 0;
    height: 50%;
    width: 80%;
    border-radius: 30px;
    color: lightgoldenrodyellow;
}

.contenier .btn::after {
    content: "";
    position: absolute;
    left: 50%;
    transform: translatex(-50%);
    top: -5px;
    width: 30px;
    height: 10px;
    background: #f00;
    border-radius: 10px;
    transition: 0.5s;
    transition-delay: 0.5;
}
.contenier .btn:hover::after /*lightup button*/ {
    top: 0;
    height: 50%;
    width: 80%;
    border-radius: 30px;
}
.contenier .btn:nth-child(1)::before, /*chnage 1*/
.contenier .btn:nth-child(1)::after {

    background: linear-gradient(90deg, rgba(182,150,48,1) 22%, rgba(228,204,113,1) 48%, rgba(182,150,48,1) 75%);
    box-shadow: 0 0 5px lightgoldenrodyellow, 0 0 15px lightgoldenrodyellow, 0 0 30px lightgoldenrodyellow,
        0 0 60px lightgoldenrodyellow;
}

</style>

<div class="parallax"></div>
     <section class="qkuti">
  
<div class="quizpic">
          <img src="https://i.etsystatic.com/isbl/7eb7d7/49789748/isbl_1680x420.49789748_wm072pc6.jpg?version=1" height="350px" width="1500%"/>
    
          
            <p class="titulli3">Diagnoze Online</p></div>
            <h1 class="titullih3">GJENI STILIN E BIZHUVE TUAJ</h1></div> <p class="titullp3">Kuici online i Alisa Jewels do t'ju çojë në rrugën e duhur për të gjetur stilin e përsosur te aksesoreve tuaj!</p></div>
              <div class="contenier">
        <div class="btn"><a href="https://take.quiz-maker.com/QBGHW6IXB">PROVO KUICIN</a></div>

    </div>      
</body>

          </section>
        </div>

</section>

<!------FUNDI------>

<section><footer>
  <div class="waves">
    <div class="wave" id="wave1"></div>
    <div class="wave" id="wave2"></div>
    <div class="wave" id="wave3"></div>
    <div class="wave" id="wave4"></div>
  </div>
  <ul class="social_icon">
    <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
    <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
    <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
    <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
  </ul>
  
  <ul class="menu">
      <li class="menu__item"><a class="menu__link" href="prov.html">Faqja Kryesore/</a></li>
      <li class="menu__item"><a class="menu__link" href="kontakt.html">Rreth nesh/</a></li>
      <li class="menu__item"><a class="menu__link" href="Varese.html">Produktet/</a></li>
      <li class="menu__item"><a class="menu__link" href="kontakt.html">Me shume/</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Minigame/</a></li>

    </ul>
    <p>&copy;2024 ALISA JEWELS | Te drejtat e rezervuara</p>
</footer>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script></section>

</body>