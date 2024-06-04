function send() {
  var arr = document.getElementsByTagName("input");
  var name = arr[0].value;
  var sdt = arr[1].value;
  var email = arr[2].value;
  var date = arr[3].value;
  var time = arr[4].value;

  var currentDate = new Date();
  currentDate.setSeconds(0, 0); // Reset seconds and milliseconds

  var inputDate = new Date(date + "T" + time);

  if (name == "" || sdt == "" || email == "" || date == "" || time == "") {
    alert("Quý khách vui lòng điền đầy đủ thông tin");
  } else if (!email.includes("@")) {
    alert("Gmail thiếu @");
  } else if (!/^\d{10}$/.test(sdt)) {
    alert("Số điện thoại phải gồm 10 số");
  } else if (inputDate < currentDate) {
    alert("Ngày và giờ đặt bàn không được là thời gian quá khứ");
  } else {
    var message =
      "Thông tin đặt bàn:\n\n" +
      "Họ và tên: " +
      name +
      "\n" +
      "Số điện thoại: " +
      sdt +
      "\n" +
      "Email: " +
      email +
      "\n" +
      "Ngày đặt bàn: " +
      date +
      "\n" +
      "Giờ đặt bàn: " +
      time;
    window.location.href =
      "mailto:hvsy24052005@gmail.com?subject=Đặt bàn thành công&body=" +
      encodeURIComponent(message);
    alert("ĐẶT BÀN THÀNH CÔNG, CHÚNG TÔI SẼ LIÊN HỆ VỚI THỜI GIAN SỚM NHẤT");
  }
}
