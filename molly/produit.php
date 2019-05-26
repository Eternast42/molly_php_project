<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style_detail.css">
  <link rel="stylesheet" href="reset.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
  <title>Document</title>
</head>

<body>
  <section class="molly">
    <header class="navBar">
      <a href="index.php"><img src="./images/logo_molly" alt="logo" id="logo"></a>
      <h2>HOMMES</h2>
      <h2>FEMMES</h2>
      <h2>ENFANTS</h2>
      <h2>MARQUES</h2>
    </header>
    <section class="detail_produit">
      <nav class="left_slide">
        <img  id="left_img01" src="./images/secondimg.png">
        <img  id="left_img02" src="./images/thirdimg.png">
        <img  id="left_img03" src="./images/lastimg.png">
      </nav>
      <section class="slide">
        <img class="slider_img" id="infoimg01" src="./images/firstimg.png">
        <img class="slider_img" id="infoimg02" src="./images/secondimg.png">
        <img class="slider_img" id="infoimg03" src="./images/thirdimg.png">
        <img class="slider_img" id="infoimg04" src="./images/lastimg.png">
        <div class="prevnext">
          <button id="prev"></button>
          <button id="next"></button>
        </div>
      </section>
      <section class="detail">
        <h3></h3>
        <h4></h4>
        <div class="coloris">
          <img src="" alt="bleu">
          <img src="" alt="rouge">
          <img src="" alt="blanc">
          <img src="" alt="marron">
        </div>
        <p>Taille :</p>
          <div class="dropdown">
          <button class="dropbtn">Dropdown</button>
          <div class="dropdown-content">
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
  </div>
  <p>Quantité :</p>
  <textarea>1</textarea>
  <div class="updown">
          <button id="up"></button>
          <button id="down"></button>
        </div>
 </div>
 <div>
   <h4>Conditions de retour</h4>
   <p>Livraison et retour gratuit<br><br>Livraison standard 3 à 5 jours ouvré</p>
 </div>
      </section>
    </section>
    <section class="descriptif">
     <div>
       <h2></h2>
       <p></p>
       <p></p>
       <p></p>
       <p></p>
       <p></p>
     </div>
     <div>
      <h2></h2>
      <p></p>
      <h2></h2>
      <p></p>
    </div>
     <div>
       <h2></h2>
       <p></p>
       <p></p>
     </div>
    </section>
    <footer class="molly_footer">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </footer>
    <script type="text/javascript">
      let sliderNext = document.getElementById("next");
      let sliderPrev = document.getElementById("prev");

      let sliderPicture1 = document.getElementById("infoimg01");
      let sliderPicture2 = document.getElementById("infoimg02");
      let sliderPicture3 = document.getElementById("infoimg03");
      let sliderPicture4 = document.getElementById("infoimg04");

      let leftsliderPicture1 = document.getElementById("left_img01");
      let leftsliderPicture2 = document.getElementById("left_img02");
      let leftsliderPicture3 = document.getElementById("left_img03");

      leftsliderPicture1.onclick = function () {
        sliderPicture1.classList.add('hidden');
        sliderPicture2.classList.remove('hidden');
        sliderPicture3.classList.add('hidden');
        sliderPicture4.classList.add('hidden');
      }

      leftsliderPicture2.onclick = function () {
        sliderPicture1.classList.add('hidden');
        sliderPicture2.classList.add('hidden');
        sliderPicture3.classList.remove('hidden');
        sliderPicture4.classList.add('hidden');
      }

      leftsliderPicture3.onclick = function () {
        sliderPicture1.classList.add('hidden');
        sliderPicture2.classList.add('hidden');
        sliderPicture3.classList.add('hidden');
        sliderPicture4.classList.remove('hidden');
      }



      let sliderImgClass = document.getElementsByClassName("slider_img");

      let a = 0;
      sliderPicture2.classList.add('hidden');
      sliderPicture3.classList.add('hidden');
      sliderPicture4.classList.add('hidden');

      sliderNext.onclick = function () {
        a = (a == 3) ? 0 : a + 1;
        for (let i = 0; i < 4; i++) {
          if (i === a) {
            sliderImgClass[a].classList.remove('hidden');
          } else {
            sliderImgClass[i].classList.add('hidden');
          }
        }
      }

      sliderPrev.onclick = function () {
        a = (a == 0) ? 3 : a - 1;
        for (let i = 0; i < 4; i++) {
          if (i === a) {
            sliderImgClass[a].classList.remove('hidden');
          } else {
            sliderImgClass[i].classList.add('hidden');
          }
        }
      }
    </script>
</body>

</html>