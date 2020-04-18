var SlideBg = document.querySelector(".bg");
var earth = document.querySelector(".earth");
var icon = document.querySelector(".bg i");
icon.style = "opacity:0;pointer-events:none;";
function openSlide() {
  SlideBg.style =
    "transition:1s;width:100vw;height:100vh; background-color: black;clip-path: polygon(41% 0, 0 0, 0 26%, 0 61%, 0 100%, 29% 100%, 70% 100%, 100% 100%, 100% 81%, 100% 46%, 100% 0, 73% 0);";
  setTimeout(() => {
    earth.style =
      " transition: 1s ;width: calc(100vw*30/100);height:calc(100vw*30/100); ";
    icon.style = "transition: 0.5s ;opacity:1;pointer-events:all;  ";
  }, 500);
}

function closeSlide() {
  icon.style = "opacity:0;pointer-events:none; transition: 1s ;";
  earth.style = " transition: 1s ; width: 100px;height: 100px; ";
  setTimeout(() => {
    SlideBg.style =
      " width: 300px;height: 300px;background-color: transparent;transition:1s ease ; ";
  }, 500);
}
