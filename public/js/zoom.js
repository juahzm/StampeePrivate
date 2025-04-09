const buttonzoom = document.querySelector("#imagetimbrezoomin");
const image = document.querySelector("#mainimagezoom");
const buttonzoomout = document.querySelector("#imagetimbrezoomout");

if (buttonzoom && image) {
  buttonzoom.addEventListener("click", handleZoom);
}

if (buttonzoomout && image) {
  buttonzoomout.addEventListener("click", handleZoomOut);
}

function handleZoom(event) {
  const zoomIn = image.classList.contains("zoom-in");

  if (!zoomIn) {
    image.classList.add("zoom-in");
  } else {
    image.classList.remove("zoom-in");
  }
}

function handleZoomOut(event) {
  const zoomIn = image.classList.contains("zoom-in");

  if (zoomIn) {
    image.classList.remove("zoom-in");
  }
}
