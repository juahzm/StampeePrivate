window.addEventListener("DOMContentLoaded", () => {
  const mainImage = document.querySelector("#mainimagezoom");
  const secondaryImages = document.querySelectorAll(".secondary-image");

  secondaryImages.forEach((thumb) => {
    thumb.addEventListener("click", (event) => {
      event.preventDefault();
      const currentMainSrc = mainImage.getAttribute("src");
      const clickedThumbSrc = thumb.getAttribute("src");

      mainImage.setAttribute("src", clickedThumbSrc);
      thumb.setAttribute("src", currentMainSrc);
    });
  });
});
