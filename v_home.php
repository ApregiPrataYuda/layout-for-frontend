<div class="courses  mt-5">
  <div class="container">
    <div class="row">
      <!-- Courses Main Content -->
      <div class="col-lg-8">
        <h3><span class="badge badge-primary"></span></h3>

        <div class="courses_search_container">
          <?php echo form_open('Home/Search_umum') ?>
          <div class="input-group mb-3 mt-3">
            <input type="text" class="form-control" name="keyword" placeholder="Searching <?= $title ?>">
            <div class="input-group-append">
              <button class="btn btn-outline-primary" type="submit"><i class="fa fa-search"></i></button>
            </div>
          </div>
          <?php echo form_close() ?>
        </div>

        <hr style="color: blue;">
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
          <strong> <?php
                    date_default_timezone_set("asia/jakarta");
                    $b = time();
                    $hour = date("G", $b);
                    if ($hour >= 0 && $hour <= 11) {
                      echo "Selamat pagi ";
                    } elseif ($hour >= 12 && $hour <= 14) {
                      echo "Selamat siang ";
                    } elseif ($hour >= 15 && $hour <= 17) {
                      echo "Selamat sore ";
                    } elseif ($hour >= 17 && $hour <= 18) {
                      echo "Selamat senja ";
                    } elseif ($hour >= 19 && $hour <= 23) {
                      echo "Selamat malam ";
                    }

                    ?></strong>, Bro / Sis Jangan mudah menyerah! Masa depan ada di tanganmu Teruslah mencari Pekerjaan.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <!-- Hot news slider berita-->
        <h3> <a href="<?= base_url('Home') ?>"><span class="badge badge-primary mb-1">#Home</span></a></h3>
        <h3> <a href="<?= base_url('Home/Swasta') ?>"><span class="badge badge-primary mb-1">#Top Loker</span></a></h3>
        <div class="alert alert-secondary" role="alert">
          <div class="card bg-dark text-white">
            <?php foreach ($Slider_berita as $key => $value) { ?>
              <img src="<?= site_url('/jengan/image/Swasta/' . $value->image) ?>">
              <div class="card-img-overlay">
                <h5 class="card-title"><a href="<?= base_url('Home/detail_loker_swasta/' . $value->slug_loker) ?>" style="color: black;"><?= substr(strip_tags($value->judul_loker), 0, 200) ?></a>...</h5>
                <p class="card-text" style="color: black;"><?= substr(strip_tags($value->content_loker), 0, 50) ?>...</p>
                <a href="<?= base_url('Home/detail_loker_swasta/' . $value->slug_loker) ?>" class="btn btn-primary btn-sm" role="button" aria-pressed="true" style="color: black;">Baca Selengkapnya</a>
              </div>
            <?php } ?>
          </div>
        </div>

        <hr style="color: blue;">
        <h3><a href="<?= base_url('Home') ?>"><span class="badge badge-primary mb-0">#<?= $title ?></span></a></h3>
        <div class="courses_container">
          <div class="row courses_row">
            <!-- Course -->
            <?php foreach ($Umum_home as $key => $value) { ?>
              <div class="col-lg-6 course_col">
                <div class="course">
                  <div class="alert alert-secondary" role="alert">
                    <div class="course_image"><a href="<?= base_url('Home/detail_loker_umum/' . $value->slug_loker) ?>"><img src="<?= site_url('jengan/image/Umum/' . $value->image) ?>" width="100%" height="180px" alt=""></a></div>
                  </div>
                  <div class="course_body">
                    <span class="badge badge-primary"> <i class="fa fa-briefcase"></i> <?= $value->name_jobs ?></span>
                    <h3 class="course_title"><a href="<?= base_url('Home/detail_loker_umum/' . $value->slug_loker) ?>"><?= substr(strip_tags($value->judul_loker), 0, 35) ?></a>...</h3>
                    <div class="course_teacher">
                      <span class="badge badge-primary"> <i class="fa fa-calendar-times-o" aria-hidden="true"></i> Dateline: <?= $value->dateline_loker ?></span>
                      | <span class="badge badge-primary"> <i class="fa fa-map-marker" aria-hidden="true"></i> Kota: <?= $value->name_city ?></span>
                      | <span class="badge badge-primary"> <i class="fa fa-map-marker" aria-hidden="true"></i> Exprience: <?= $value->exprience ?></span>
                      | <span class="badge badge-primary"> <i class="fa fa-money" aria-hidden="true"></i> Salary: <?= $value->salary ?></span>

                    </div>
                    <div class="course_text">
                      <a href="<?= base_url('Home/detail_loker_umum/' . $value->slug_loker) ?>">
                        <p><?= substr(strip_tags($value->content_loker), 0, 50) ?>...</p>
                      </a>
                    </div>
                  </div>
                  <div class="course_footer">
                    <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                      <div class="course_info">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span class="badge badge-primary">Post By: <?= $value->user_name ?></span>
                      </div>
                      <div class="course_info">
                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                        <span class="badge badge-primary">Di Post: <?= indo_date($value->tanggal_loker) ?></span>
                      </div>
                      <!-- <div class="course_price ml-auto">$130</div> -->
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
          <hr style="color: blue;">
          <div class="row pagination_row">
            <div class="col">
              <?php
              if (isset($pagination)) {
                echo $pagination;
              }
              ?>
            </div>
          </div>
        </div>
      </div>

      <!-- Courses Sidebar -->
      <div class="col-lg-4">
        <div class="sidebar">
          <div class="sidebar_section">
            <div class="alert alert-secondary" role="alert">
              <div class="sidebar_section_title text-center">Kategori lainya</div>
            </div>
            <div class="sidebar_categories">
              <ul>
                <li><a href="<?= base_url('Home/Diploma') ?>">Loker Diploma (III)</a></li>
                <li><a href="<?= base_url('Home/Nasional') ?>">Loker Nasional</a></li>
                <li><a href="<?= base_url('Home/Sarjana') ?>">Loker Sarjana</a></li>
                <li><a href="<?= base_url('Home/Sma') ?>">Loker SMA/K</a></li>
                <li><a href="<?= base_url('Home/Swasta') ?>">Loker Swasta</a></li>
                <li><a href="<?= base_url('Home/Bumn') ?>">Loker Bumn</a></li>
              </ul>
            </div>
          </div>

          <div class="sidebar_section">
            <div class="alert alert-secondary" role="alert">
              <div class="sidebar_section_title text-center"><u>Loker Terpupoler</u></div>
            </div>
            <div class="sidebar_latest">
              <!-- Latest Course -->
              <?php foreach ($populer_loker as $key => $value) { ?>
                <div class="latest d-flex flex-row align-items-start justify-content-start">
                  <div class="latest_image">
                    <div><img src="<?= site_url('jengan/image/Sma/' . $value->image) ?>" alt=""></div>
                  </div>
                  <div class="latest_content">
                    <div class="latest_title"><a href="<?= base_url('Home/detail_loker_sma/' . $value->slug_loker) ?>"><?= substr(strip_tags($value->judul_loker), 0, 100) ?>....</a></div>
                    <span class="badge badge-primary">
                      <div class="fa fa-calendar-check-o"> Post On: <?= $value->tanggal_loker ?></div>
                    </span>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>


          <!-- Latest Course -->
          <div class="sidebar_section">
            <div class="alert alert-secondary" role="alert">
              <div class="sidebar_section_title text-center"> <u> Lowongan lainya</u></div>
            </div>
            <div class="sidebar_latest">
              <!-- Latest Course -->
              <?php foreach ($latest_loker_for_umum as $key => $value) { ?>
                <div class="latest d-flex flex-row align-items-start justify-content-start">
                  <div class="latest_image">
                    <div><img src="<?= site_url('jengan/image/Swasta/' . $value->image) ?>" alt=""></div>
                  </div>
                  <div class="latest_content">
                    <div class="latest_title"><a href="<?= base_url('Home/detail_loker_swasta/' . $value->slug_loker) ?>"><?= substr(strip_tags($value->judul_loker), 0, 100) ?>....</a></div>
                    <span class="badge badge-primary">
                      <div class="fa fa fa-calendar-check-o"> Post On: <?= $value->tanggal_loker ?></div>
                    </span>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>


          <div class="sidebar_section">
            <div class="alert alert-secondary" role="alert">
              <div class="sidebar_section_title text-center"><u>Blog seputar Job</u></div>
            </div>
            <div class="sidebar_latest">
              <!-- Latest Course -->
              <?php foreach ($Bloggings as $key => $value) { ?>
                <div class="latest d-flex flex-row align-items-start justify-content-start">
                  <div class="latest_image">
                    <div><img src="<?= site_url('jengan/image/Blog/' . $value->image) ?>" alt="post blog"></div>
                  </div>
                  <div class="latest_content">
                    <div class="latest_title"><a href="<?= base_url('Home/detail_blog/' . $value->slug) ?>"><?= substr(strip_tags($value->title), 0, 100) ?>....</a></div>
                    <span class="badge badge-primary">
                      <div class="fa fa-calendar-check-o"> Post On: <?= indo_date($value->tanggal) ?></div>
                    </span>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>

          <div class="sidebar_section">
            <div class="sidebar_banner d-flex flex-column align-items-center justify-content-center text-center">
              <div class="sidebar_banner_background"></div>
              <div class="sidebar_banner_overlay"></div>
              <div class="sidebar_banner_content">
                <div class="banner_title">Pasang Iklan Anda</div>
                <div class="banner_button"><a href=""> <i class="fa fa-whatsapp"></i> 08987379423</a></div>
              </div>
            </div>
          </div>

          <!-- iklan fitur -->

          <?php foreach ($iklan_fitur as $key => $value) { ?>
            <div class="sidebar_section_title"> <u> Iklan!</u></div>
            <div class=" team_col">
              <div class="team_item">
                <div class="team_image"><img src="<?= site_url('jengan/image/Ads/' . $value->image) ?>" alt=""></div>
                <div class="team_body">
                  <div class="team_title"><a href=""><?= $value->name ?></a></div>
                  <div class="team_subtitle"><?= $value->desk ?></div>
                  <div class="team_subtitle"></div>
                  <div class="social_list">
                    <ul>
                      <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i> <?= $value->no_telp ?></a></li>
                      <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> <?= $value->email ?></a></li>
                      <li><a href="#"><i class="fa  fa-chrome" aria-hidden="true"></i> <?= $value->link ?></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


<!-- Events -->
<div class="events mt-0">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="section_title_container text-center">
          <div class="alert alert-secondary" role="alert">
            <h2 class="section_title">Blog Seputar Pekerjaan</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="row events_row">

      <!-- Event -->
      <?php foreach ($Blogging_for_umum as $key => $value) { ?>
        <div class="col-lg-4 event_col">
          <div class="event event_left">
            <div class="alert alert-secondary" role="alert">
              <div class="event_image"> <a href="<?= base_url('Home/detail_blog/' . $value->slug) ?>"><img src="<?= site_url('jengan/image/Blog/' . $value->image) ?>" alt="post blog"></a></div>
            </div>
            <div class="event_body d-flex flex-row align-items-start justify-content-start">
              <div class="event_date">
                <div class="d-flex flex-column align-items-center justify-content-center trans_200">
                  <a href="<?= base_url('Home/detail_blog/' . $value->slug) ?>">
                    <div class="event_day trans_200">Baca</div>
                    <!-- <div class="event_month trans_200">Blog</div> -->
                  </a>
                </div>
              </div>
              <div class="event_content">
                <div class="event_title"><a href="<?= base_url('Home/detail_blog/' . $value->slug) ?>"><?= substr(strip_tags($value->title), 0, 50) ?>.</a></div>
                <div class="event_info_container">
                  <div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span><?= indo_date($value->tanggal) ?></span></div>
                  <div class="event_info"><i class="fa fa-user" aria-hidden="true"></i><span><?= substr(strip_tags($value->name), 0, 50) ?></span></div>
                  <div class="event_text">
                    <p><?= substr(strip_tags($value->content), 0, 50) ?>...</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
      <div class="section_title_container text-center">
        <div class="section_subtitle">
          <p><a href="<?= base_url('Home/Blog') ?>" class="btn btn-primary">Ke Halaman Blog <i class="fa fa-share" aria-hidden="true"></i></a></p>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Features -->

<div class="features">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="section_title_container text-center">
          <div class="alert alert-secondary" role="alert">
            <h2 class="section_title">Cara Melamar Pekerjaan</h2>
          </div>
          <div class="section_subtitle">
            <p>lets apply</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row features_row">

      <!-- Features Item -->
      <div class="col-lg-3 feature_col">
        <div class="feature text-center trans_400">
          <div class="feature_icon"><img src="<?= base_url() ?>jengan/front-end/images/search.png" alt=""></div>
          <h3 class="feature_title">1.Cari Pekerjaan di Loker-Sumsel.com</h3>
          <div class="feature_text">
            <p>Cari pekerjaan di Loker-sumsel.com, pastikan baca dengan teliti seluruh kualifikasi yang di butuhkan sesuaikan latar pendidikan,pengalaman, dan skill yang anda miliki.
              ini memudahkan supaya berkas anda nantinya mudah di terima oleh perusahaan.</p>
          </div>
        </div>
      </div>

      <!-- Features Item -->
      <div class="col-lg-3 feature_col">
        <div class="feature text-center trans_400">
          <div class="feature_icon"><img src="<?= base_url() ?>jengan/front-end/images/icon_2.png" alt=""></div>
          <h3 class="feature_title">2. Lamar Pekerjaan</h3>
          <div class="feature_text">
            <p>Pastikan Semua berkas Melamar Pekerjaan sudah siap dan lengkap, jika masih kurang lengkap alangkah baiknya melengkapi seluruh berkas
              yang di butuhkan supaya berkas lamaran anda terlihat profesional. dan perhatikan lamaran akan dikirim via email atau di antar langsung ke alamat perusahaan.</p>
          </div>
        </div>
      </div>

      <!-- Features Item -->
      <div class="col-lg-3 feature_col">
        <div class="feature text-center trans_400">
          <div class="feature_icon"><img src="<?= base_url() ?>jengan/front-end/images/waiting.png" alt=""></div>
          <h3 class="feature_title">3.Menunggu Panggilan Interview</h3>
          <div class="feature_text">
            <p>Jika berkas lamaran sudah anda kirimkan ke perusahaan silakan anda menunggu untuk mendapatkan feedback dari perusahaan. biasanya jika berkas lamaran anda lolos anda akan menerima panggilan (via. email, whatsapp, telpon) untuk melakukan interview dengan hrd.
              biasanya proses menunggu panggilan interview paling lama 2 minggu dari berkas lamaran dikirimkan.</p>
          </div>
        </div>
      </div>


      <div class="col-lg-3 feature_col">
        <div class="feature text-center trans_400">
          <div class="feature_icon"><img src="<?= base_url() ?>jengan/front-end/images/Lamp.png" alt=""></div>
          <h3 class="feature_title">4.semoga Beruntung & Tetap Berdoa</h3>
          <div class="feature_text">
            <p>Tetap Berusaha Dan Berdoa Semoga apa yang di Impikan Cepat Tercapai.</p>
          </div>
        </div>
      </div>
    </div>
  </div>