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
	  // support
	  const callBtn = document.getElementById('callBtn');
	  const chatCards = document.getElementById('chatCards');
	  callBtn.addEventListener('click', (event) => {
		  event.stopPropagation();
		  chatCards.classList.toggle('active');
	  });
	  document.addEventListener('click', (event) => {
		  if (!chatCards.contains(event.target) && !callBtn.contains(event.target)) {
			  chatCards.classList.remove('active');
		  }
	  });
	  // hero tab
	  if (document.querySelector(".tab-btn")){
		  const tabButtons = document.querySelectorAll(".tab-btn");
		  const tabContents = document.querySelectorAll(".tab-content");

		  tabButtons.forEach((btn) => {
			  btn.addEventListener("click", () => {
				  const target = btn.getAttribute("data-tab");

				  // حذف اکتیو از همه
				  tabButtons.forEach((b) => b.classList.remove("active"));
				  tabContents.forEach((content) => {
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
