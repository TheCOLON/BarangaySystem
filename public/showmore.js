// // JavaScript code
// document.addEventListener("DOMContentLoaded", function() {
//   const prevButton = document.querySelector(".prev-button");
//   const nextButton = document.querySelector(".next-button");
//   const slideshowImages = document.querySelector(".slideshow-images");
//   const images = document.querySelectorAll(".slideshow-images img");

//   let currentImageIndex = 0;

//   function showImage(index) {
//     // Hide all images
//     for (let i = 0; i < images.length; i++) {
//       images[i].style.display = "none";
//     }

//     // Show the image at the given index
//     images[index].style.display = "block";
//     currentImageIndex = index;
//   }

//   function scrollLeft() {
//     currentImageIndex--;
//     if (currentImageIndex < 0) {
//       currentImageIndex = images.length - 1;
//     }
//     showImage(currentImageIndex);
//   }

//   function scrollRight() {
//     currentImageIndex++;
//     if (currentImageIndex >= images.length) {
//       currentImageIndex = 0;
//     }
//     showImage(currentImageIndex);
//   }

//   prevButton.addEventListener("click", scrollLeft);
//   nextButton.addEventListener("click", scrollRight);

//   // Show the first image initially
//   showImage(currentImageIndex);
// });

// JavaScript code
document.addEventListener("DOMContentLoaded", function() {
  const prevButton = document.querySelector(".prev-button");
  const nextButton = document.querySelector(".next-button");
  const slideshowImages = document.querySelector(".slideshow-images");
  const images = document.querySelectorAll(".slideshow-images img");
  
  let currentImageIndex = 0;
  let timer;

  function showImage(index) {
    // Hide all images
    for (let i = 0; i < images.length; i++) {
      images[i].style.display = "none";
    }

    // Show the image at the given index
    images[index].style.display = "block";
    currentImageIndex = index;
  }

  function scrollLeft() {
    clearInterval(timer);
    currentImageIndex--;
    if (currentImageIndex < 0) {
      currentImageIndex = images.length - 1;
    }
    showImage(currentImageIndex);
    startSlideshow();
  }

  function scrollRight() {
    clearInterval(timer);
    currentImageIndex++;
    if (currentImageIndex >= images.length) {
      currentImageIndex = 0;
    }
    showImage(currentImageIndex);
    startSlideshow();
  }

  function startSlideshow() {
    clearInterval(timer);
    timer = setInterval(() => {
      scrollRight();
    }, 3000); // Adjust the duration between slides as needed (in milliseconds)
  }

  prevButton.addEventListener("click", scrollLeft);
  nextButton.addEventListener("click", scrollRight);

  // Show the first image initially
  showImage(currentImageIndex);
  startSlideshow();
});
