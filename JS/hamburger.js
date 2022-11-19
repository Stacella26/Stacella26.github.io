const vertical = document.getElementById("vertical");
const glyph = document.getElementById("glyph");
let hidden = true;

function doHamburgerMagic() {
  hidden = !hidden;
  if (hidden) {
    vertical.style.display = "none";
    glyph.classList.remove("orange");
  } else {
    vertical.style.display = "block";
    glyph.classList.add("purple");
  }
}

/* NOTE: another way to do this is to add or remove a "hidden" class using element.classList.add() */
