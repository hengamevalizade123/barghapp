"use strict";

/* eslint-env browser */
(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', function () {
    // Your custom JavaScript goes here
    if (document.querySelector(".faq-item")) {
      var faqs = document.querySelectorAll(".faq-item");
      faqs.forEach(function (faq) {
        faq.querySelector(".faq-question").addEventListener("click", function () {
          faqs.forEach(function (item) {
            if (item !== faq) item.classList.remove("active");
          });
          faq.classList.toggle("active");
        });
      });
    }
    window.addEventListener("scroll", function () {
      var header = document.querySelector("#masthead");
      var scrollPosition = window.scrollY;
      if (scrollPosition > 48) {
        header.classList.add("fixed-header");
      } else {
        header.classList.remove("fixed-header");
      }
    });
  });
})();