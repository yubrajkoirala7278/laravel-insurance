/**
 * Easy selector helper function
 */
const select = (el, all = false) => {
  el = el.trim();
  if (all) {
    return [...document.querySelectorAll(el)];
  } else {
    return document.querySelector(el);
  }
};

/**
 * Easy event listener function
 */
const on = (type, el, listener, all = false) => {
  if (all) {
    select(el, all).forEach((e) => e.addEventListener(type, listener));
  } else {
    select(el, all).addEventListener(type, listener);
  }
};

/**
 * Easy on scroll event listener
 */
const onscroll = (el, listener) => {
  el.addEventListener("scroll", listener);
};

/**
 * Sidebar toggle
 */
if (select(".toggle-sidebar-btn")) {
  on("click", ".toggle-sidebar-btn", function (e) {
    select("body").classList.toggle("toggle-sidebar");
  });
}

/**
 * Back to top button
 */
let backtotop = select(".back-to-top");
if (backtotop) {
  const toggleBacktotop = () => {
    if (window.scrollY > 100) {
      backtotop.classList.add("active");
    } else {
      backtotop.classList.remove("active");
    }
  };
  window.addEventListener("load", toggleBacktotop);
  onscroll(document, toggleBacktotop);
}


 // =========toggle password==============
 document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.password-field').forEach(function(field) {
      const passwordInput = field.querySelector('input[type="password"]');
      const toggleButton = field.querySelector('.toggle-password');

      toggleButton.addEventListener('click', function() {
          const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
          passwordInput.setAttribute('type', type);
          toggleButton.querySelector('i').classList.toggle('fa-eye');
          toggleButton.querySelector('i').classList.toggle('fa-eye-slash');
      });
  });
});
// ========================================