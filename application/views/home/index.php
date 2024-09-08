<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Map Centering</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
	body{
		background-color:antiquewhite;
	}
  .maps {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 60vh; /* Mengatur tinggi kontainer agar tidak memenuhi seluruh tinggi layar */
  margin-top: 20px; /* Menambahkan jarak antara gambar lainnya dan peta */
}

.maps iframe {
  width: 90%; /* Mengatur lebar peta agar hampir memenuhi lebar layar */
  height: 450px;
  border: 10px solid black; /* Memberikan border berwarna hitam dengan ketebalan 5px */
}

.judul_peta{
	text-align: center;
	font:bold;
}

.biografi {
    text-align: center;
    font-weight: bold;
}

.video-frame {
    padding: 10px;
    max-width: 80%; /* Adjusts the frame to a maximum width */
    justify-content: center;
    align-items: center;
		margin-left:180px ;
}

.deskripsi {
    text-align: justify;
    padding-left: 1%; /* Adjust the value as needed */
    padding-right: 1%; /* Adjust the value as needed */
    margin: 0 auto; /* Center the element horizontally */
    max-width: 80%; /* Adjust the value as needed */
}


  hr {
    border: none; /* Menghapus border default */
    height: 2px; /* Mengatur ketebalan garis */
    background-color: black; /* Mengatur warna garis */
  }


</style>
</head>
<body>
<nav class="navbar navbar-transparent navbar-top" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar bar1"></span>
        <span class="icon-bar bar2"></span>
        <span class="icon-bar bar3"></span>
      </button>
      <a href="#home"></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="example">
      <!-- Navbar Kanan -->
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="#home" class="page-scroll">
            <i class="fa fa-home"></i>
            Home
          </a>
        </li>
        <li>
          <a class="page-scroll" href="#about">
            <i class="fa fa-info-circle"></i>
            About Us
          </a>
        </li>
        <li>
          <a href="<?= base_url('auth'); ?>">
            <i class="fa fa-sign-in"></i>
            Login
          </a>
        </li>
      </ul>
      <!-- End of Navbar Kanan -->
    </div>
    <!-- /.navbar-collapse -->
  </div>
</nav>
<div class="wrapper">
  <div class="parallax filter-gradient blue" data-color="blue">
    <div class="container">
      <div class="row">
        <div class="col-md-7 hidden-xs">
          <div class="parallax-image">
            <img src="<?= base_url('assets2'); ?>/img/showcases/showcase-2/desa_sungai_besar.jpg" />
          </div>
        </div>
        <div class="col-md-5">
          <div class="description text-center">
            <h2>Sistem Pendeteksi Skala Kerusakan Hutan (SISPAK-LDPH)</h2>
            <br>
            <h5>Aplikasi untuk mendeteksi kerusakan didalam kawasan hutan yang dapat mengancam ekosistem yang ada didalam hutan.</h5>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section section-no-padding page-scroll" id="about">
    <div class="parallax filter-gradient blue" data-color="blue">
      <div class="parallax-background">
        <img class="parallax-background-image flipped" src="<?= base_url('assets2'); ?>/img/showcases/showcase-2/perubahan iklim.jpg">
      </div>
      <div class="info">
        <h1>About Us</h1>
        <p>Sistem Pakar ini dibangun untuk membantu para lembaga dan instansi terkait mengenai pengelolaan hutan yang terjadi di kawasan hutan. Sistem ini memiliki 5 indikator kerusakan, berdasarkan 17 gejala yang sering ditemukan didalam kawasan hutan.
        </p>
      </div>
    </div>
  </section>
  <hr style="height: 3px; background-color: black; border: none;">

  <div class="judul_peta">
	<h2>PETA HUTAN DESA</h2>
	<h3>Desa Sungai Besar, Kecamatan Matan Hilir Selatan, Kabupaten Ketapang, Kalimantan Barat.</h3>
  </div>

  <hr style="height: 3px; background-color: black; border: none;">

  <section class="section section-no-padding page-scroll" id="map">
    <div class="maps">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115475.33222845168!2d110.14863253570965!3d-1.8945390140131775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e050f2dc776c591%3A0xc66c72d306683f2b!2sSungai%20Besar%2C%20Kec.%20Matan%20Hilir%20Sel.%2C%20Kabupaten%20Ketapang%2C%20Kalimantan%20Barat!5e1!3m2!1sid!2sid!4v1722769694742!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </section>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<hr style="height: 3px; background-color: black; border: none;">

<div class="biografi">
<h2>Biografi Desa Sungai Besar</h2>
<p>Desa sungai besar, Kecamatan Matan Hilir Selatan, Kabupaten Ketapang, telah di kategorikan sebagai hutan penelitian. Karena setiap tahun, banyak mahasiswa melakukan penelitian yang berhubungan dengan hutan. Oleh karena itu, hal ini di prioritaskan untuk menjaga stabilitas ekosistem kehutanan agar tetap terjaga serta dilakukan pemulihan agar dipantau secara terus menerus.</p>
<hr>
</div>
<div class="video-frame">
        <iframe width="1300" height="480" src="https://www.youtube.com/embed/w7SAnw0n6AM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
		
		<div class="deskripsi">
		<p>Desa Sungai Besar adalah sebuah desa yang terletak di kecamatan Matan Hilir Selatan, Kabupaten Ketapang, Kalimantan Barat, Indonesia. Desa ini berada di pinggiran Selat Karimata, memberikan pemandangan indah dan akses langsung ke perairan. Hutan Sungai Besar merupakan bagian penting dari wilayah Matan Hilir Selatan, menawarkan keunikan budaya dan keindahan alam yang khas dari Kalimantan Barat. Selain itu juga, upaya dalam lembagai desa dalam menjaga kawasan huntan desa sungai besar sangat diperhatilam seperti apa ekosistem nya.hutan di desa Sungai Besar, Kabupaten Ketapang memiliki dampak kerusakan  hutan di wilayah tersebut yakni, tahun 2021 hutan di kawasan ini memiliki nilai potensi 85% tutupan hutan menandakan ekosistem terjaga, namun tahun 2022 terjadi pengurangan 50% pada hutan tersebut sehingga mengalami degadrasi tetapi upaya reboisasi masih memungkinkan. Pada tahun 2023 hampir 75% hutan mengalami deforestasi menandakan penurunan hutan. Sumber tutupan lahan diperoleh dari Data Balai Konservasi Sumber Daya Alam Kabupaten Ketapang </p>

		</div>
	</body>
</html>
