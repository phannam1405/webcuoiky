<?php 
  include "top_menu.php";
?>
    <div id="myCarousel" class="carousel slide border" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            class="d-block w-100"
            src="https://kansaipaint.com.vn/wp-content/uploads/2023/09/quan-an-nen-son-mau-gi-4.jpg"
            alt="Leopard"
          />
          <div class="carousel-caption d-none d-sm-block">
            <marquee
              style="direction: center; behavior: Slide; scroll-behavior: 1s"
            >
              <h1  class="text-light title">CHÀO MỪNG BẠN</h1>
              <h2 class="mb-5 text-light title">
                CHÀO MỪNG BẠN ĐẾN VỚI NHÀ HÀNG CHÚNG TÔI
              </h2>
            </marquee>
          </div>
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-100"
            src="https://acihome.vn/uploads/15/mau-thiet-ke-nha-hang-an-sang-trong-tai-khach-san-4-5-sao-1.JPG"
            alt="Cat"
          />
          <div class="carousel-caption d-none d-sm-block">
            <h5>Black Cat</h5>
            <p>
              A black cat is a domestic cat with black fur that may be a mixed
              or specific breed.
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-100"
            src="https://kansaipaint.com.vn/wp-content/uploads/2023/09/quan-an-nen-son-mau-gi-9.jpg"
            alt="Lion"
          />
          <div class="carousel-caption d-none d-sm-block">
            <h5>Lion</h5>
            <p>
              The lion (Panthera leo) is a species in the cat family (Felidae).
              A muscular, deep-chested cat, it has a short, rounded head, a
              reduced neck and round ears.
            </p>
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

    <!-- code about us -->
    <div class="container-fluid container3 text-dark text-center">
      <h1 id="about" class="mt-5">CHÀO MỪNG ĐẾN VỚI NHÀ HÀNG CỦA CHÚNG TÔI</h1>
      <div class="row">
        <div class="col-md-6">
          <div class="container mt-5">
            <section class="mt-5">
              <h2>Câu Chuyện Của Chúng Tôi</h2>
              <p style="text-align: justify">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Expedita, culpa. Quisquam necessitatibus aliquid natus
                asperiores illo dolores tempora iusto in consequatur id rem
                maiores incidunt, temporibus accusantium omnis atque ab! Minima
                fugiat aut veniam, cumque vel nesciunt corporis cupiditate
                dolorum mollitia iure alias tempore commodi, natus id quis
                excepturi, voluptas ipsam quidem! In nobis nulla fugiat,
                voluptas officia ad rem. Quisquam, consectetur, facilis ut eum
                debitis, cupiditate provident ratione quam sit consequatur minus
                reprehenderit suscipit. Labore, officiis accusamus!
                Reprehenderit magnam omnis autem consequuntur quam. Esse
                deserunt aspernatur voluptas praesentium veniam. Possimus
                consequatur pariatur odit atque, aliquid libero labore dicta
                tempora nesciunt? Incidunt iste ducimus optio ipsum commodi
                harum delectus quibusdam dolorum similique illum provident,
                reprehenderit cum? Eos natus tempora neque. Minima dignissimos
                autem, voluptate accusantium, at expedita quia eius deleniti
                exercitationem, alias error! Facilis reprehenderit voluptates
                fuga, explicabo, pariatur a, delectus eveniet quisquam odit
                voluptate earum natus rem. Iure, dolore.
              </p>
            </section>
          </div>
        </div>
        <div class="col-md-6">
          <img
            src="https://img.pikbest.com/origin/09/22/10/18JpIkbEsTuYw.jpg!w700wp"
            alt=""
          />
        </div>
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
        <u>THỰC ĐƠN MÓN ĂN</u>
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
          data-target="#collapsibleNavbar"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div
          class="collapse navbar-collapse justify-content-center"
          id="collapsibleNavbar"
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
                <h4 class="card-title text-center"><b>GIÁ: 8$</b></h4>
                <p class="card-subtitle text-center">
                  <b>MỰC QUAY CHẢO</b>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <img
                class="card-img-top"
                src="https://cdn.alongwalk.info/vn/wp-content/uploads/2022/03/14014904/image-how-to-make-delicious-beefsteak-at-home-with-the-right-restaurant-taste-164717214489144.jpg"
                alt="Card image"
                style="width: 100%"
              />
              <div class="card-body">
                <h4 class="card-title text-center"><b>GIÁ: 10$</b></h4>
                <p class="card-text text-center"><b>BEEF STEAL</b></p>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card">
              <img
                class="card-img-top"
                src="https://file1.dangcongsan.vn/data/0/images/2022/08/25/havtcd/1pho.jpg"
                alt="Card image"
                style="width: 100%"
              />
              <div class="card-body text-center">
                <h4 class="card-title"><b>GIÁ: 3$</b></h4>
                <p class="card-text">
                  <b> PHỞ BÒ </b>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <img
                class="card-img-top"
                src="https://daynauan.info.vn/wp-content/uploads/2016/10/sashimi-ca-hoi.jpg"
                alt="Card image"
                style="width: 100%"
              />
              <div class="card-body text-center">
                <h4 class="card-title"><b>GIÁ: 4$</b></h4>
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
                <h4 class="card-title"><b>GIÁ: 150.000vnđ</b></h4>
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
              <div class="card-body">
                <h4 class="card-title"><b>GIÁ: 100.000VND</b></h4>
                <p class="card-text">DÂU TÂY</p>
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
              <div class="card-body">
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
              <div class="card-body">
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
              <div class="card-body">
                <h4 class="card-title">John Doe</h4>
                <p class="card-text">
                  Some example text some example text. John Doe is an architect
                  and engineer
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
              <div class="card-body">
                <h4 class="card-title">John Doe</h4>
                <p class="card-text">
                  Some example text some example text. John Doe is an architect
                  and engineer
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
              <div class="card-body">
                <h4 class="card-title">John Doe</h4>
                <p class="card-text">
                  Some example text some example text. John Doe is an architect
                  and engineer
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
              <div class="card-body">
                <h4 class="card-title">John Doe</h4>
                <p class="card-text">
                  Some example text some example text. John Doe is an architect
                  and engineer
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <button id="myButton" style="width: 100%" class="btn btn-light">
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

    <div class="container-fluid container4">
      <div class="row">
        <div class="col-md-4 text-center mt-5">
          <p>
            <a class="mau" style="text-decoration: none" href=""><b>HOME</b></a>
          </p>
          <p>
            <a class="mau" style="text-decoration: none" href=""
              ><b>ABOUT US</b></a
            >
          </p>
          <p>
            <a class="mau" style="text-decoration: none" href=""
              ><b>OUR CHEFFS</b></a
            >
          </p>
          <p>
            <a class="mau" style="text-decoration: none" href=""
              ><b>CONTACT</b></a
            >
          </p>
          <p>
            <a class="mau" style="text-decoration: none" href=""
              ><b>TABLE</b></a
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
              href="map.html"
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
