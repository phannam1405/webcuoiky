let lastScrollTop = 0;
const navbar = document.getElementById("navbar");

window.addEventListener("scroll", function () {
  const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  if (scrollTop > lastScrollTop) {
    // Cuộn xuống
    navbar.style.top = "-80px"; // Điều chỉnh giá trị này theo chiều cao của navbar
  } else {
    // Cuộn lên
    navbar.style.top = "0";
  }
  lastScrollTop = scrollTop;
});
