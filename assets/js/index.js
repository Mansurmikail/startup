document.addEventListener("DOMContentLoaded", () => {
  const container = document.querySelector(".container");

  // Start in login mode
  container.classList.add("sign-in");

  // Fix the toggle function
  window.toggle = function () {
    if (container.classList.contains("sign-in")) {
      container.classList.remove("sign-in");
      container.classList.add("sign-up");
    } else {
      container.classList.remove("sign-up");
      container.classList.add("sign-in");
    }
  };
});