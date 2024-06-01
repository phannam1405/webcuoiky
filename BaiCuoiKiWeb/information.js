function send() {
    var arr = document.getElementsByTagName("input");
    console.log(arr);
    var name = arr[0].value;
    var sdt = arr[1].value;
    var email = arr[2].value;
    var date = arr[3].value;
  
    var currentDate = new Date();
    currentDate.setHours(0, 0, 0, 0);
  
    var inputDate = new Date(date);
  
    if (name == "" || sdt == "" || email == "" || date == "") {
      alert("Quý khách vui lòng điền đầy đủ thông tin");
    } else if (!email.includes("@")) {
      alert("Gmail thiếu @");
    } else if (!/^\d{10}$/.test(sdt)) {
      alert("Số điện thoại phải gồm 10 số");
    } else if (inputDate < currentDate) {
      alert("Ngày đặt bàn không được là ngày quá khứ");
    } else {
      alert("ĐẶT BÀN THÀNH CÔNG");
    }
  }
  