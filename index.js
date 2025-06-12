const textArray = ["Cleaner", "Electrician", "Plumber", "Carpainter", "Cabs and Packagers", "Painter", ];
let textIndex = 0;
let charIndex = 0;
let isDeleting = false;
let typingSpeed = 50;

function type() {
  const currentText = textArray[textIndex];
  if (!isDeleting) {
    document.getElementById("typing-text").textContent = currentText.substring(0, charIndex + 1);
    charIndex++;
  } else {
    document.getElementById("typing-text").textContent = currentText.substring(0, charIndex - 1);
    charIndex--;
  }

  if (isDeleting && charIndex === 0) {
    isDeleting = false;
    textIndex = (textIndex + 1) % textArray.length;
    typingSpeed = 120;
  } else if (!isDeleting && charIndex === currentText.length) {
    isDeleting = true;
    typingSpeed = 120;
  }

  setTimeout(type, typingSpeed);
}

document.addEventListener("DOMContentLoaded", function () {
  setTimeout(type, typingSpeed);
});

