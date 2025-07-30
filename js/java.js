  // function setLanguage(lang) {
  //       const elements = document.querySelectorAll(".translatable");
  //       elements.forEach((el) => {
  //         el.textContent = el.getAttribute("data-" + lang);
  //       });
  //     }
  function setLanguage(lang) {
  const elements = document.querySelectorAll(".translatable");
  elements.forEach((el) => {
    el.innerHTML = el.getAttribute("data-" + lang);
  });
}