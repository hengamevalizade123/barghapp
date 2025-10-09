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
    // support
    var callBtn = document.getElementById('callBtn');
    var chatCards = document.getElementById('chatCards');
    callBtn.addEventListener('click', function (event) {
      event.stopPropagation();
      chatCards.classList.toggle('active');
    });
    document.addEventListener('click', function (event) {
      if (!chatCards.contains(event.target) && !callBtn.contains(event.target)) {
        chatCards.classList.remove('active');
      }
    });
    // hero tab
    if (document.querySelector(".tab-btn")) {
      var tabButtons = document.querySelectorAll(".tab-btn");
      var tabContents = document.querySelectorAll(".tab-content");
      tabButtons.forEach(function (btn) {
        btn.addEventListener("click", function () {
          var target = btn.getAttribute("data-tab");

          // حذف اکتیو از همه
          tabButtons.forEach(function (b) {
            return b.classList.remove("active");
          });
          tabContents.forEach(function (content) {
            content.classList.remove("active");
          });

          // فعال کردن تب انتخاب‌شده
          btn.classList.add("active");
          document.getElementById(target).classList.add("active");
        });
      });
    }
  });
})();