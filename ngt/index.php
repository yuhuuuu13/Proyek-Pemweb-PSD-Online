<html>
<head>
<meta charset="utf-8">
<title>halaman</title>
<style>
body {
  max-width: 1280px;
  margin: 0 auto;
  font-size: 1.25em;
  line-height: 1.75em;
  color:  	 	#c19763;
  background:  	 	#c19763;
  font-family: 'Lato', 'Helvetica Neue', Helvetica, Arial;
  font-weight: 400;
}

img { width: 100%; }

.container {
  margin: 0 auto;
  width: 95%;
  margin: 0 5% 0 0;
  position: relative;
  overflow: hidden;
}

a {
  text-decoration: none;
  font-weight: bold;
}

header {
  width: 5%;
  height: 100%;
  position: fixed;
  overflow: hidden;
  transition: .32s ease-out;
  z-index: 2;
  background:  	 	#c19763;
}

header a,
.navBtn { color: #fff; }

.toggle { width: 312px; }

.reveal {
  opacity: 1;
  left: 0;
}

nav {
  padding-left: 360px;
  overflow: hidden;
  position: absolute;
  transition: .3s ease-out;
  top: 80px;
  left: 0;
  width: 100%;
  opacity: 0;
  height: 100%;
}

nav a {
  float: left;
  padding: 8px 0;
  opacity: .5;
  width: 100%;
  transition: .3s ease;
  font-size: 1em;
  text-transform: uppercase;
  font-weight: bold;
  line-height: 1.85em;
}

nav a:hover,
.current,
.toggle .navBtn { opacity: 1; }

.toggle nav {
  padding-left: 60px;
  opacity: 1;
}

.navBtn {
  font-size: 2em;
  font-weight: 700;
  margin: 30px 0 0;
  width: 100%;
  text-align: center;
  line-height: 1em;
  -webkit-transform: rotate(0deg);
  transition: .3s ease-out;
  display: block;
  cursor: pointer;
  position: absolute;
  z-index: 1000001;
  opacity: .5;
  left: 0;
}

.toggle .navBtn {
  -webkit-transform: rotate(224deg);
  color: #fff;
  left: -100px;
}

.navBtn:hover { opacity: 1; }

.main {
  background: #f6f6f6;
  float: right;
  width: 95%;
  margin: 0 0 0 5%;
  padding: 0;
  transition: .6s ease-in;
  overflow: hidden;
  z-index: 2;
}

h3 {
  font-size: 3em;
  color: #EAC734;
  font-weight: 300;
  transition: .6s ease-in;
  line-height: 1em;
}

article { padding: 40px 10%; }

.push {
  margin-left: 240px;
  margin-right: -240px;
  transition: .3s ease-in;
}

.overlay {
  width: 100%;
  background: #384047;
  opacity: .85;
  z-index: 1;
  height: 100%;
  position: fixed;
  display: none;
}

.block { display: block; }

/* 1024 */
@media only screen and (max-width: 1024px) {

.container {
  width: 100%;
  margin: 0;
}

header { width: 8%; }

.main { width: 92%; }
}

/* 768 */
@media only screen and (max-width: 768px) {

header { width: 10%; }

.main { width: 90%; }
}

/* 480 */
@media only screen and (max-width: 480px) {

header { width: 10%; }

.main { width: 90%; }

h3 { font-size: 2em; }

/* 320 */
@media only screen and (max-width: 320px) {
 header {
 width: 15%;
}
 .main {
 width: 85%;
}
}
</style>
</head>

<body>
<div class="container">
  <div class="overlay"></div>
  <header>
    <div class="navBtn">+</div>
    <nav> <li><a href="#0"><span>Profil</span></a></li> 
          <li><a href="login-admin.php"><span>Login</span></a></li>
		      <li><a href="table.html"><span>Pengumuman</span></a></li>
		      <li><a href="logout.php"><span>Log out</span></a></li>
  </header>
  <div class="main"> <img id="hero" src="lingkungansekolah.jpg" alt="" />
    <article>
      <h3>Profil Sekolah</h3>
      <div class="jquery-script-ads"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 300;
google_ad_height = 10;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
<p> SMK Negeri 1 Kampung Baru bermula dari Sekolah Menengah Ekonomi Pertama (SMEP) yang berdomisili di Jalan Veteran 11 Pasuruan, Telp. 0343-421380, dibangun diatas tanah seluas 8950 meter persegi berdasarkan sertifikat No. 886/ 1985.
 Pada tahun 1977 dengan SK No 0278/U/1976 dari SMEP diintegrasikan menjadi SMP yang disempurnakan.
 Pada Tahun pelajaran baru 1978 ditingkatkan menjadi SLTA Kejuruan (SMEA Negeri) Kampung Baru dengan lampiran Keputusan Menteri Pendidikan dan Kebudayaan tanggal 30 Juli 1980 No. 0209/0/1980.
 Pada Tahun 2000 SMEA Negeri Kampung Baru diubah nama menjadi SMK Negeri 1 Kampung Baru Kelompok Bisnis dan Manajemen dan Kelompok Teknologi.
</p>


    </article>
  </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script>
$(document).ready(function () {	

  var toggleMenu = function() {
	  $('header').toggleClass('toggle');
	  $('.main').toggleClass('push');
	  $('.overlay').toggleClass('block');
	  $('#social, .logo').toggleClass('reveal');
  };

	//Nav
	$('.navBtn').click(function() {
    toggleMenu();
	});

  Mousetrap.bind('esc', function() {
    toggleMenu();
  });

});
</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
