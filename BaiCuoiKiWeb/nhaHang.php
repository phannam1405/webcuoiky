<?php 
    include "top_menu.php";
?> 
<style>
<?php include 'nhaHang.css'; ?>
</style>
<script>(function(w, d) { w.CollectId = "66778e563e99425e992dbba5"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img
        class="d-block w-100"
        src="https://kansaipaint.com.vn/wp-content/uploads/2023/09/quan-an-nen-son-mau-gi-4.jpg"
        alt="Leopard"
      />
      <div class="carousel-caption d-none d-sm-block">
        <p id="welcome-text-1">XIN CHÀO QUÝ KHÁCH</p>
      </div>
    </div>
    <div class="carousel-item">
      <img
        class="d-block w-100"
        src="https://i.pinimg.com/originals/f8/da/c3/f8dac363e2c288026877d8c5a0c51d52.jpg"
        alt="Cat"
      />
      <div class="carousel-caption d-none d-sm-block">
        <p id="welcome-text-2">XIN CHÀO QUÝ KHÁCH</p>
      </div>
    </div>
    <div class="carousel-item">
      <img
        class="d-block w-100"
        src="https://i.pinimg.com/564x/33/d7/f5/33d7f59b02d941c91d695f398e198cc6.jpg"
        alt="Lion"
      />
      <div class="carousel-caption d-none d-sm-block">
        <p id="welcome-text-3">XIN CHÀO QUÝ KHÁCH</p>
      </div>
    </div>
  </div>
  
  <a
    class="carousel-control-prev"
    href="#myCarousel"
    role="button"
    data-bs-slide="prev"
  >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a
    class="carousel-control-next"
    href="#myCarousel"
    role="button"
    data-bs-slide="next"
  >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>

<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
  crossorigin="anonymous"
></script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    var a = 1;
    var p = document.getElementById("welcome-text-" + a);
    var originContent = p.innerHTML;
    var index = 0;
    var typingInterval = 200; // Thời gian giữa mỗi lần cập nhật ký tự (200ms)
    var pauseDuration = 500; // Thời gian dừng (2000ms = 2 giây)

    function type() {
      p.innerHTML = originContent.substring(0, index);
      index++;
      if (index <= originContent.length) {
        setTimeout(type, typingInterval);
      } else {
        index = 0;
        setTimeout(type, pauseDuration);
      }
    }
    type();
  });
</script>



      
    
      <script>
        document.addEventListener("DOMContentLoaded", function () {
          var a = 1;
          var p = document.getElementById("welcome-text-" + a);
          var originContent = p.innerHTML;
          var index = 0;
          var typingInterval = 200; // Thời gian giữa mỗi lần cập nhật ký tự (200ms)
          var pauseDuration = 500; // Thời gian dừng (2000ms = 2 giây)

          function type() {
            p.innerHTML = originContent.substring(0, index);
            index++;
            if (index <= originContent.length) {
              setTimeout(type, typingInterval);
            } else {
              index = 0;
              setTimeout(type, pauseDuration);
            }
          }
type();
        });
      </script>

<script>
      // Khi người dùng cuộn xuống 20px từ đầu trang, nút sẽ xuất hiện
      window.onscroll = function () {
        scrollFunction();
      };

      function scrollFunction() {
        var scrollToTopBtn = document.getElementById("scrollToTopBtn");
        if (
          document.body.scrollTop > 100 ||
          document.documentElement.scrollTop > 100
        ) {
          scrollToTopBtn.style.display = "block";
        } else {
          scrollToTopBtn.style.display = "none";
        }
      }

      // Khi người dùng nhấn vào nút, trang sẽ cuộn lên đầu
      function topFunction() {
        document.body.scrollTop = 0; // Cho Safari
        document.documentElement.scrollTop = 0; // Cho Chrome, Firefox, IE và Opera
      }
    </script>

    <!-- Button và Icon -->
    <button
      onclick="topFunction()"
      id="scrollToTopBtn"
      title="Go to top"
      style="display: none"
    >
      <img
        src="https://icons.iconarchive.com/icons/github/octicons/128/move-to-top-16-icon.png"
        alt="Go to top"
        style="width: 30px; height: 30px"
      />
    </button>

      <!-- code about us -->
      <div class="container-fluid container3 text-dark text-center">
    <h1 id="about" class="mt-5">CHÀO MỪNG ĐẾN VỚI NHÀ HÀNG CỦA CHÚNG TÔI</h1>
    <div1 class="row">
        <div class="col-md-6">
            <div class="container mt-5">
                <section class="mt-5">
                    <h2>Câu Chuyện Của Chúng Tôi</h2>
                    <p style="text-align: justify">

                    Nhà hàng chúng tôi tự hào mang đến cho quý khách những trải nghiệm ẩm thực tuyệt vời với không gian sang trọng và thoải mái. Mỗi món ăn đều được chế biến từ nguyên liệu tươi ngon, đảm bảo chất lượng cao và hương vị độc đáo. Đội ngũ đầu bếp tài năng và nhân viên phục vụ tận tâm của chúng tôi luôn sẵn sàng đáp ứng mọi nhu cầu của quý khách. Với menu đa dạng, từ các món ăn truyền thống đến hiện đại, nhà hàng của chúng tôi chắc chắn sẽ làm hài lòng cả những thực khách khó tính nhất. Đến với chúng tôi, quý khách không chỉ được thưởng thức những bữa ăn ngon mà còn được tận hưởng một không gian ấm cúng và dịch vụ hoàn hảo. Hãy để chúng tôi mang đến cho bạn một hành trình ẩm thực đầy màu sắc và đáng nhớ. Chúng tôi luôn chào đón bạn và gia đình đến khám phá và thưởng thức tại nhà hàng của chúng tôi.

Chúng tôi cam kết mang đến cho quý khách những món ăn được chuẩn bị kỹ lưỡng với sự sáng tạo và tâm huyết. Không gian của nhà hàng được thiết kế tinh tế, tạo cảm giác thoải mái và thân thiện. Ngoài ra, chúng tôi còn có các chương trình khuyến mãi đặc biệt và sự kiện thú vị diễn ra thường xuyên để mang lại sự mới mẻ cho quý khách mỗi lần ghé thăm.            </div>
        </div>
<div  class="col-md-6 col-sm-12">
            <img src="https://img.pikbest.com/origin/09/22/10/18JpIkbEsTuYw.jpg!w700wp" alt="" class="img-fluid mt-5">
             
              <!-- <img src="https://icons.iconarchive.com/icons/github/octicons/128/move-to-top-16-icon.png" width="128" height="128"> -->

        </div>
        <br />
        <!-- video -->
        <div id="video" style="text-align: center">
          <iframe
            width="80%"
            height="500px"
            src="https://www.youtube.com/embed/_dui6BUmMBg?si=7kR-c9SaHNGEjeGN"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin"
            allowfullscreen
          ></iframe>
        </div>
      </div>

      <!-- code menu nhà hàng -->
      <div class="container-fluid content-container">
        <h1
          style="color: aliceblue; margin-top: 10px"
          class="text-center text-dark"
        >
          <u id="thucdon">THỰC ĐƠN MÓN ĂN</u>
        </h1>
        <h2
          style="margin-bottom: 30px; color: aliceblue"
          class="text-center text-dark"
        >
          Most Popular Items
        </h2>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
          <!-- Brand -->

          <!-- Toggler/collapsibe Button -->
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#collapsibleNavbarr"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Navbar links -->
          <div
            class="collapse navbar-collapse justify-content-center"
            id="collapsibleNavbarr"
          >
            <ul class="navbar-nav">
              <li class="nav-item hover-underline">
                <a class="nav-link" href="#" onclick="showFoodMenu(event)"
                  ><strong>MÓN ĂN</strong></a
                >
              </li>
              <li class="nav-item hover-underline">
                <a class="nav-link" href="#" onclick="showDrinkMenu(event)"
                  ><strong>ĐỒ UỐNG</strong></a
                >
              </li>
          </div>
        </nav>

        
        <!-- Món ăn -->
        <div id="foodMenu">
          <p style="margin-top: 10px"></p>
          <div class="row">
            <div class="col-md-3">
              <div class="card">
                <img
                  class="card-img-top"
                  src="https://cachlamhaisan.com/wp-content/uploads/2016/10/muc-nuong-sa-te.jpg"
                  alt="Card image"
                  style="width: 100%"
                />
                <div class="card-body">
                  <h4 class="card-title text-center"><b>GIÁ: 200.000VND</b></h4>
                  <p class="card-subtitle text-center">
                    <b>MỰC QUAY CHẢO</b>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
<div class="card">
                <img
                  class="card-img-top"
                  src="https://cdn.alongwalk.info/vn/wp-content/uploads/2022/03/14014904/image-how-to-make-delicious-beefsteak-at-home-with-the-right-restaurant-taste-164717214489144.jpg"
                  alt="Card image"
                  style="width: 100%"
                />
                <div class="card-body">
                  <h4 class="card-title text-center"><b>GIÁ: 300.000VND</b></h4>
                  <p class="card-text text-center"><b>BÒ BÍT TẾT</b></p>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card">
                <img
                  class="card-img-top"
                  src="https://file1.dangcongsan.vn/data/0/images/2022/08/25/havtcd/1pho.jpg"
                  alt="Card image"
                  style="width: 100%"
                />
                <div class="card-body text-center">
                  <h4 class="card-title"><b>GIÁ: 150.000VND</b></h4>
                  <p class="card-text">
                    <b> PHỞ BÒ </b>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img
                  class="card-img-top"
                  src="https://daynauan.info.vn/wp-content/uploads/2016/10/sashimi-ca-hoi.jpg"
                  alt="Card image"
                  style="width: 100%"
                />
                <div class="card-body text-center">
                  <h4 class="card-title"><b>GIÁ: 250.000VND</b></h4>
                  <p class="card-text">
                    <b>SASHIMI CÁ HỒI</b>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-3 mt-5">
              <div class="card">
                <img
                  class="card-img-top"
                  src="https://nauankhongkho.com/wp-content/uploads/2016/03/1459304208_948_C%C3%A1ch-l%C3%A0m-heo-quay-b%C3%AC-gi%C3%B2n-b%E1%BA%B1ng-ch%E1%BA%A3o-si%C3%AAu-ngon.jpg"
                  alt="Card image"
                  style="width: 100%"
                />
                <div class="card-body text-center">
                  <h4 class="card-title"><b>GIÁ: 150.000VND</b></h4>
                  <p class="card-text">
                    <b>HEO QUAY</b>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-3 mt-5">
              <div class="card">
                <img
                  class="card-img-top"
                  src="https://assets.unileversolutions.com/recipes-v2/237152.jpg"
                  alt="Card image"
                  style="width: 100%"
                />
                <div class="card-body text-center">
                  <h4 class="card-title"><b>GIÁ: 300.000VND</b></h4>
                  <p class="card-text">
<b>GÀ NƯỚNG XẢ ỚT</b>
                  </p>
                </div>
              </div>
            </div>

            <div class="col-md-3 mt-5">
              <div class="card">
                <img
                  class="card-img-top"
                  src="https://hieuhaisan.com/contents_hieuhaisan/uploads/images/tom-hum-canada-08.jpg"
                  alt="Card image"
                  style="width: 100%"
                />
                <div class="card-body text-center">
                  <h4 class="card-title"><b>GIÁ: 250.000VND</b></h4>
                  <p class="card-text">
                    <b>TÔM HÙM ALASKA</b>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-3 mt-5">
              <div class="card">
                <img
                  class="card-img-top"
                  src="https://giadinh.mediacdn.vn/2017/ca-kho-ngon-1484535542452.jpg"
                  alt="Card image"
                  style="width: 100%"
                />
                <div class="card-body text-center">
                  <h4 class="card-title"><b>GIÁ: 200.000VND</b></h4>
                  <p class="card-text"><b>CÁ KHO</b></p>
                </div>
              </div>
            </div>
            <div class="col-md-4"></div>
          <div class="col-md-4">
            <button id="myButton" style="width: 100%" class="btn btn-light mt-5">
              <a
                style="
                  text-decoration: none;
                  display: block;
                  width: 100%;
                  height: 100%;
                "
                href="doAn.html"
              >
                <strong>XEM THÊM</strong>
                <div class="overlay"></div>
              </a>
            </button>
          </div>
          <div class="col-md-4"></div>
          </div>
        </div>

        <div id="drinkMenu" style="display: none">
          <p style="margin-top: 10px"></p>
          <div class="row">
            <div class="col-md-3">
              <div class="card">
                <img
                  class="card-img-top"
                  src="https://dayphache.edu.vn/wp-content/uploads/2015/12/ruou-bourbon.jpg"
                  alt="Card image"
                  style="width: 100%"
                />
                <div class="card-body text-center">
                  <h4 class="card-title"><b>GIÁ: 1000.000VND</b></h4>
                  <p class="card-text">
                    <b>RƯỢU WHISKY</b>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img
                  class="card-img-top"
                  src="https://media-cdn-v2.laodong.vn/Storage/NewsPortal/2022/5/26/1049322/Strawberryjuice.jpg"
                  alt="Card image"
                  style="width: 100%"
                />
                  <div class="card-body text-center">
                  <h4 class="card-title"><b>GIÁ: 100.000VND</b></h4>
                  <p class="card-text"><b>DÂU TÂY</b></p>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <img
                  class="card-img-top"
                  src="https://cdn.nhathuoclongchau.com.vn/unsafe/https://cms-prod.s3-sgn09.fptcloud.com/nuoc_ep_dua_hau_co_tac_dung_gi_1_a452bc1181.jpg"
                  alt="Card image"
                  style="width: 100%"
                />
                <div class="card-body text-center">
                  <h4 class="card-title"><b>GIÁ: 80.000VND</b></h4>
                  <p class="card-text">
                    <b> NƯỚC DƯA HẤU</b>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img
                  class="card-img-top"
                  src="https://noithatcaphe.vn/images/2022/07/16/nuoc-ep-cam-1.jpg"
                  alt="Card image"
                  style="width: 100%"
                />
                <div class="card-body text-center">
                  <h4 class="card-title"><b>GIÁ: 50.000VND</b></h4>
                  <p class="card-text">
                    <b> NƯỚC CAM</b>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-3 mt-5">
              <div class="card">
                <img
                  class="card-img-top"
                  src="https://png.pngtree.com/png-clipart/20210704/original/pngtree-lemonade-glass-drink-fresh-png-image_6489598.jpg"
                  alt="Card image"
                  style="width: 100%"
                />
                <div class="card-body text-center">
                  <h4 class="card-title">GIÁ: 50.000VND</h4>
                  <p class="card-text">
                      <strong>TRÀ CHANH</strong>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-3 mt-5">
              <div class="card">
                <img
                  class="card-img-top"
                  src="https://png.pngtree.com/thumb_back/fw800/background/20240222/pngtree-splash-of-cola-in-glass-coca-cola-image_15628939.jpg"
                  alt="Card image"
                  style="width: 100%"
                />
                <div class="card-body text-center">
                  <h4 class="card-title">GIÁ: 30.000VND</h4>
                  <p class="card-text">
                    <strong>COCACOLA</strong>
                  </p>
                </div>
              </div>
            </div>

            <div class="col-md-3 mt-5">
              <div class="card">
                <img
                  class="card-img-top"
src="https://img.freepik.com/premium-photo/singapore-sling-cocktail-pink-background-tropical-party-coctail-bar-drink-abstract-generative-ai-illustration_162695-6103.jpg"
                  alt="Card image"
                  style="width: 100%"
                />
                <div class="card-body text-center">
                  <h4 class="card-title ">GIÁ: 50.000VND</h4>
                  <p class="card-text">
                    <strong>TRÀ TRÁI CÂY NHIỆT ĐỚI</strong>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-3 mt-5">
              <div class="card">
                <img
                  class="card-img-top"
                  src="https://png.pngtree.com/png-vector/20240309/ourlarge/pngtree-fresh-coconut-water-drink-png-image_11919891.png"
                  alt="Card image"
                  style="width: 100%"
                />
                <div class="card-body text-center">
                  <h4 class="card-title">GIÁ: 50.000VND</h4>
                  <p class="card-text">
                    <strong>NƯỚC DỪA</strong>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4"></div>
          <div class="col-md-4">
            <button id="myButton" style="width: 100%" class="btn btn-light mt-5" >
              <a
                style="
                  text-decoration: none;
                  display: block;
                  width: 100%;
                  height: 100%;
                "
                href="doUong.html"
              >
                <strong>XEM THÊM</strong>
                <div class="overlay"></div>
              </a>
            </button>
          </div>
          <div class="col-md-4"></div>
          </div>
        </div>
      </div>

      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"
      ></script>
      <script src="nhaHang.js"></script>
      <script>
        function showFoodMenu(event) {
          event.preventDefault();
          document.getElementById("foodMenu").style.display = "block";
          document.getElementById("drinkMenu").style.display = "none";
        }

        function showDrinkMenu(event) {
          event.preventDefault();
          document.getElementById("foodMenu").style.display = "none";
          document.getElementById("drinkMenu").style.display = "block";
        }
      </script>

      <!-- code OurCheff -->

      <div class="container-fluid container4" id="footer">
        <div class="row">
          <div class="col-md-4 text-center mt-5">
            <p>
              <a class="mau" style="text-decoration: none" href=""><b>TRANG CHỦ</b></a>
            </p>
<p>
              <a class="mau" style="text-decoration: none" href=""
                ><b>GIỚI THIỆU</b></a
              >
            </p>
            <p>
              <a class="mau" style="text-decoration: none" href=""
                ><b>ĐẦU BẾP</b></a
              >
            </p>
            <p>
              <a class="mau" style="text-decoration: none" href=""
                ><b>LIÊN HỆ</b></a
              >
            </p>
            <p>
              <a class="mau" style="text-decoration: none" href=""
                ><b>ĐẶT BÀN</b></a
              >
            </p>
          </div>
          <div class="col-md-4 text-center text-dark container5">
            <img
              class="khung"
              style="width: 20%"
              src="https://banoca.com/wp-content/uploads/2021/03/logo-nha-hang.jpg"
              alt=""
            />
            <p class="mt-3"><strong>Địa chỉ: 470 Trần Đại Nghĩa</strong></p>
            <p>
              <a class="mau" style="text-decoration: none" href="0935025211"
                ><strong>0935025211</strong></a
              >
            </p>
            <p>
              <a
                class="mau"
                style="text-decoration: none"
                href="mailto:hvsy24052005@gmail.com"
                ><strong>hvsy24052005@gmail.com</strong></a
              >
            </p>
            <p><strong>OPEN: 7:00 am to 9:00 pm</strong></p>
            <h3>CẢM ƠN QUÝ KHÁCH</h3>
          </div>
          <div class="col-md-4 text-center mt-5">
            <p>
              <a class="mau" style="text-decoration: none" href=""
                ><b>FACEBOOK</b></a
              >
            </p>
            <p>
              <a class="mau" style="text-decoration: none" href=""><b>ZALO</b></a>
            </p>
            <p>
              <a class="mau" style="text-decoration: none" href=""
                ><b>INSTAGRAM</b></a
              >
            </p>
            <p>
              <a class="mau" style="text-decoration: none" href=""
                ><b>YOUTUBE</b></a
              >
            </p>
            <p>
              <a
                class="mau"
                style="text-decoration: none"
                href="map.php"
                width="100%"
                height="100%"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                ><b>GOOGLE MAP</b></a
              >
            </p>
          </div>
        </div>
      </div>
    </body>
  </html>
