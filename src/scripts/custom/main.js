/* eslint-env browser */
(function() {
  'use strict';
  document.addEventListener('DOMContentLoaded', function() {
    // Your custom JavaScript goes here
	  if (document.querySelector(".faq-item")) {
		  const faqs = document.querySelectorAll(".faq-item");
		  faqs.forEach(faq => {
			  faq.querySelector(".faq-question").addEventListener("click", () => {
				  faqs.forEach(item => {
					  if (item !== faq) item.classList.remove("active");
				  });
				  faq.classList.toggle("active");
			  });
		  });
	  }
	  window.addEventListener("scroll", function () {
		  const header = document.querySelector("#masthead");
		  const scrollPosition = window.scrollY;

		  if (scrollPosition > 48) {
			  header.classList.add("fixed-header");
		  } else {
			  header.classList.remove("fixed-header");
		  }
	  });
  });
})();
