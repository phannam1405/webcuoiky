document.addEventListener("mousemove", function (event) {
  const button = document.getElementById("resizeButton");
  const rect = button.getBoundingClientRect();
  const proximity = 50; // khoảng cách từ nút mà hiệu ứng sẽ xảy ra

  const mouseX = event.clientX;
  const mouseY = event.clientY;

  const buttonX = rect.left + rect.width / 2;
  const buttonY = rect.top + rect.height / 2;

  const distance = Math.sqrt((mouseX - buttonX) ** 2 + (mouseY - buttonY) ** 2);

  if (distance < proximity) {
    button.style.width = "200px";
  } else {
    button.style.width = "100px";
  }
});
