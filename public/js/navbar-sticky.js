$(function () {
  window.onscroll = function () {
    window.pageYOffset >= s
      ? n.classList.add("single-nav-sticky")
      : n.classList.remove("single-nav-sticky");
  };
  var n = document.getElementById("single-content-navbar"),
    s = n.offsetTop;
});
