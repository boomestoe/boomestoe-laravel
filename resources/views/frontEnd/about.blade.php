@extends('frontEnd.index')

@section('slider')
@endsection

@section('judul-berita','PROFIL BAPPEDA')
@section('sub-berita','Daftar Berita Utama')
<style>
	/* Style the buttons that are used to open and close the accordion panel */
	.accordion {
	  background-color:#f8f8f8;
	  color: #444;
	  cursor: pointer;
	  padding: 18px;
	  width: 100%;
	  border: none;
	  text-align: left;
	  outline: none;
	  font-family: "Raleway",sans-serif;
	  font-size: 15px;
	  transition: 0.4s;
	}

	/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
	.active, .accordion:hover {
	  background-color: #ccc;
	  color:  #0aaaa0;
	}

	.accordion:after {
	  content: '\002B'; /* Unicode character for "plus" sign (+) */
	  color: #777;
	  font-weight: bold;
	  float: right;
	  margin-left: 5px;
	}

	.active:after {
	  content: "\2212"; /* Unicode character for "minus" sign (-) */
	}

	/* Style the accordion panel. Note: hidden by default */
	.panel {
	  padding: 0 18px;
	  background-color: white;
	  max-height: 0;
	  overflow: hidden;
	  transition: max-height 0.2s ease-out;
	}
</style>
@section('main-content')

<!-- profil-Wrapper -->
<div class="about-page-wrapper">
	<div class="description container">
		<div class="row ">
			<div class="col-md-6 ">
				<div class="image-wrapper">
					<img class="img-responsive" src="{{ asset('storage/images/profil/about.jpg') }}" alt="">
				</div>
			</div>
			<div class="col-md-6 ">
				<div class="about-right-text">
					<div class="widget-title">
						<h4>WE ARE PLANNERS</h4>
					</div>
					<p class="first">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus sapiente deleniti commodi provident veniam vitae blanditiis rerum temporibus totam est, omnis sint excepturi maiores iure similique. Sequi magni.</p>
					<p class="second">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga voluptates dolor reprehenderit, deserunt, quibusdam repellat architecto blanditiis a.</p>
					<a href="#" class="btn btn-min btn-secondary"><span>Learn More</span></a>
				</div>
			</div>
		</div>
	</div>
	<!-- team -->
	<div class="team-wrapper">
		<div class="container">
			<div class="section-name one">
				<h3>BADAN PERENCANAAN PEMBANGUNAN DAN PENELITIAN PENGEMBANGAN DAERAH</h3>
				<div class="short-text">
					<h5>PROVINSI KEPULAUAN BANGKA BELITUNG</h5>
				</div>
			</div>
			<button class="accordion"><h4>SEJARAH</h4></button>
			<div class="panel">
				<br>
				<h4>Badan Perencanaan Pembangunan Daerah dan Statistik Provinsi Kepulauan Bangka Belitung dibentuk berdasarkan:</h4>
				<ol>
					<li>
					<p>Peraturan Daerah Provinsi Provinsi Kepulauan Bangka Belitung Nomor 7 Tahun 2008 tentang Organisasi dan Tata Kerja Inspektorat, Badan Perencanaan Pembangunan Daerah dan Statistik serta Lembaga Teknis Daerah Provinsi Kepulauan Bangka Belitung.</p>
					</li>
					<li>
					<p>Peraturan Daerah Provinsi Provinsi Kepulauan Bangka Belitung Nomor 1 Tahun 2013 Tentang Organisasi dan Tata Kerja Inspektorat, Badan Perencanaan Pembangunan Daerah dan Lembaga Teknis Daerah Provinsi Kepulauan Bangka Belitung.</p>
					</li>
				</ol>
				<br>
			</div>

			<button class="accordion"><h4>VISI & MISI</h4></button>
			<div class="panel">
				<br>
				<h4><strong>Visi Gubernur dan Wakil Gubernur Kepulauan Bangka Belitung 2017-2022:</strong></h4>
				<pre><small>&ldquo;Babel Sejahtera, Provinsi Maju yang Unggul di Bidang Inovasi Agropoltan dan Bahari dengan Tata Kelola Pemerintahan dan Pelayanan Publik yang Efisien dan Cepat Berbasis Teknologi&rdquo;</small></pre>
				<p>&nbsp;</p>
				<h4><strong>Misi Gubernur dan Wakil Gubernur Kepulauan Bangka Belitung 2017-2022:</strong>&nbsp;</h4>
				<pre>
				1. Meningkatkan pembangunaan ekonomi berbasis potensi daerah;
				2. Mewujudkan infrastruktur dan konektivitas daerah yang berkualitas;
				3. Meningkatkan sumber daya manusia unggul dan handal;
				4. Meningkatkan kesehatan masyarakat;
				5. Mewujudkan tata kelola pemerintahan yang baik dan pembangunan demokrasi.</pre>
				<p>Bappeda Provinsi Kepulauan Bangka Belitung berdasarkan tugas dan fungsinya diarahkan mendukung misi 5</p>
				<br>
			</div>

			<button class="accordion"><h4>TUGAS POKOK & FUNGSI</h4></button>
			<div class="panel">
				<br>
				<h4><strong>Tugas Pokok</strong></h4>
				<p>Badan Perencanaan Pembangunan Daerah mempunyai tugas melaksanakan penyusunan, pelaksanaan, monitoring dan evaluasi kebijakan daerah di bidang perencanaan pembangunan daerah.</p>
				<p>&nbsp;</p>
				<h4><strong>Fungsi</strong></h4>
				<p>Dalam menyelenggarakan tugas pokok sebagaimana dimaksud Pasal 8 Badan Perencanaan Pembangunan Daerah mempunyai fungsi :</p>
				<ol>
					<li>perumusan kebijakan teknis perencanaan pembangunan daerah;</li>
					<li>pengoordinasian penyusunan perencanaan pembangunan daerah;</li>
					<li>pembinaan dan pelaksanaan tugas dibidang perencanaan pembangunan daerah;</li>
					<li>pelaksanaan pengendalian dan evaluasi perencanaan pembangunan daerah; dan</li>
					<li>pelaksanaan tugas lain yang diberikan Gubernur sesuai dengan tugas dan fungsinya.</li>
				</ol>
				<br>
			</div>	
		</div>	
	</div>

</div>


<script>
	var acc = document.getElementsByClassName("accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
	  acc[i].addEventListener("click", function() {
	    /* Toggle between adding and removing the "active" class,
    	to highlight the button that controls the panel */
	    this.classList.toggle("active");
	    
	    /* Toggle between hiding and showing the active panel */
	    var panel = this.nextElementSibling;
	    if (panel.style.maxHeight){
	      panel.style.maxHeight = null;
	    } else {
	      panel.style.maxHeight = panel.scrollHeight + "px";
	    } 
	  });
	}
</script>

@endsection


