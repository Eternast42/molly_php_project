let sliderNext = document.getElementById("next");
let sliderPrev = document.getElementById("prev");

let sliderPicture1 = document.getElementById("img01");
let sliderPicture2 = document.getElementById("img02");
let sliderPicture3 = document.getElementById("img03");

let sliderImgClass = document.getElementsByClassName("slider_img");

let a = 0;
sliderPicture2.classList.add('hidden');
sliderPicture3.classList.add('hidden');

sliderNext.onclick = function () {
  a = (a == 2) ? 0 : a + 1;
  for (let i = 0; i < 3; i++) {
    if (i === a) {
      sliderImgClass[a].classList.remove('hidden');
    } else {
      sliderImgClass[i].classList.add('hidden');
    }
  }
}

sliderPrev.onclick = function () {
  a = (a == 0) ? 2 : a - 1;
  for (let i = 0; i < 3; i++) {
    if (i === a) {
      sliderImgClass[a].classList.remove('hidden');
    } else {
      sliderImgClass[i].classList.add('hidden');
    }
  }
}