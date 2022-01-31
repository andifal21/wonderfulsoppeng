<!--Slider Start-->
         <section id="home-slider" class="owl-carousel owl-theme wf100">
            <?php foreach($slider as $slider) { ?>
            <div class="item">
               <div class="slider-caption h3slider">
                  <div class="container">
                     <?php if($slider->status_text=="Ya") { ?>
                     <strong>{{ strip_tags($slider->isi) }}</strong>
                     <h1>{{ $slider->judul_galeri }}</h1>
                     <a href="{{ $slider->website }}">Baca detail</a>
                     <?php } ?>
                  </div>
               </div>
               <img src="{{ asset('assets/upload/image/'.$slider->gambar) }}" alt=""> 
            </div>
            <?php } ?>
         </section>
         <!--Slider End--> 

<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
          <h1>Objek Wisata Kabupaten Soppeng</h1>
          <h2>Pariwisata</h2>
        </div>
      </div>

      <div class="row icon-boxes justify-content-center">

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon">
               <i class="">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="50" height="50" text-anchor="middle"><path fill="none" d="M0 0h24v24H0z"/><path d="M21 2v20h-2v-8h-3V7a5 5 0 0 1 5-5zM9 13.9V22H7v-8.1A5.002 5.002 0 0 1 3 9V3h2v7h2V3h2v7h2V3h2v6a5.002 5.002 0 0 1-4 4.9z"/></svg>
               </i></div>
            <h4 class="title text-center"><a href="{{ asset('berita/kategori/wisata-kuliner') }}">Wisata Kuliner</a></h4>
            <p class="description text-center">Jajanan Kuliner yang berada di Kota Soppeng</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
          <div class="icon-box align-items-center">
            <div class="icon">       
               <i class="">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="50" height="50"><path fill="none" d="M0 0H24V24H0z"/><path d="M21 3v2c0 9.627-5.373 14-12 14H5.243C5.08 19.912 5 20.907 5 22H3c0-1.363.116-2.6.346-3.732C3.116 16.974 3 15.218 3 13 3 7.477 7.477 3 13 3c2 0 4 1 8 0zm-8 2c-4.418 0-8 3.582-8 8 0 .362.003.711.01 1.046 1.254-1.978 3.091-3.541 5.494-4.914l.992 1.736C8.641 12.5 6.747 14.354 5.776 17H9c6.015 0 9.871-3.973 9.997-11.612-1.372.133-2.647.048-4.22-.188C13.627 5.027 13.401 5 13 5z"/></svg>
               </i></div>
            <h4 class="title text-center"><a href="{{ asset('berita/kategori/wisata-alam') }}">Wisata Alam</a></h4>
            <p class="description text-center">Tempat wisata alam yang terjangkau dan bisa diakses oleh kendaraan</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
          <div class="icon-box">
            <div class="icon">
               <i class="">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="50" height="50"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 11a5 5 0 0 1 5 5v6h-2v-6a3 3 0 0 0-2.824-2.995L12 13a3 3 0 0 0-2.995 2.824L9 16v6H7v-6a5 5 0 0 1 5-5zm-6.5 3c.279 0 .55.033.81.094a5.947 5.947 0 0 0-.301 1.575L6 16v.086a1.492 1.492 0 0 0-.356-.08L5.5 16a1.5 1.5 0 0 0-1.493 1.356L4 17.5V22H2v-4.5A3.5 3.5 0 0 1 5.5 14zm13 0a3.5 3.5 0 0 1 3.5 3.5V22h-2v-4.5a1.5 1.5 0 0 0-1.356-1.493L18.5 16c-.175 0-.343.03-.5.085V16c0-.666-.108-1.306-.309-1.904.259-.063.53-.096.809-.096zm-13-6a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5zm13 0a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5zm-13 2a.5.5 0 1 0 0 1 .5.5 0 0 0 0-1zm13 0a.5.5 0 1 0 0 1 .5.5 0 0 0 0-1zM12 2a4 4 0 1 1 0 8 4 4 0 0 1 0-8zm0 2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/></svg>
               </i></div>
            <h4 class="title text-center"><a href="{{ asset('berita/kategori/rekreasi') }}">Rekreasi</a></h4>
            <p class="description text-center">Tempat rekreasi untuk refreshing di Soppeng</p>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- End Hero -->
  
  <!-- Section -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
          <h1>Tentang Soppeng</h1><br>
          <h2>{{ $site_config->nama_singkat }}</h2><br>
          <h2 class="text-justify"><?php echo $site_config->tentang ?></h2>
        </div>
      </div>
   </div>
</section>
<!-- End Section -->



<!-- ================= end tes ============ -->

         <!--<section class="home2-about wf100 p100 gallery" style="background: url({{ asset('assets/aws/images/news-artilcesbg.jpg') }}) no-repeat; background-size: cover;">
            <div class="container">
               <div class="row">
                  <div class="col-md-5">
                        <div class="video-img"> <a href="https://youtu.be/{{ $video->video }}" data-rel="prettyPhoto" title="{{ $video->judul }}"><i class="fas fa-play"></i></a> <img src="{{ asset('assets/upload/image/'.$video->gambar) }}" alt=""> </div>
                  </div>
                  <div class="col-md-7">
                     <div class="h2-about-txt">
                        <h3>Webinar</h3>
                        <h2>{{ $video->judul }}</h2>
                        <p><?php echo strip_tags($video->keterangan) ?></p>
                        <a class="aboutus" href="#">Lihat Detail</a> 
                     </div>
                  </div>
               </div>
            </div>
            
         </section>-->
         <!--About Section End--> 

         <!--Service Area Start-->
         <section class="donation-join wf100" id="hero">
            <div class="container text-center">
               <div class="row justify-content-center">
                  <div class="col-xl-7 col-lg-9 text-center">
                     <h1>Layanan</h1>
                     <h2>Pariwisata</h2>
                  </div>
               </div>
               <div class="row">
                  
                  <?php foreach($layanan as $layanan) { ?>
                     <div class="col-md-4 col-sm-12">
                        <br>
                        <img src="{{ asset('assets/upload/image/thumbs/'.$layanan->gambar) }}" alt="{{ $layanan->judul_berita }}" class="img img-thumbnail img-fluid">
                        <div class="volbox">
                           <h6>{{ $layanan->judul_berita }}</h6>
                           <p>{{ $layanan->keywords }}</p>
                           <a href="{{ asset('berita/layanan/'.$layanan->slug_berita) }}">Lihat detail</a> 
                        </div>
                     </div>
                     <!--box  end--> 
                  <?php } ?>
                  
               </div>
            </div>
         </section>
         <!--Service Area End--> 
         
         <!--Blog Start-->
<section class="h2-news wf100 p80 blog">
   <div class="blog-grid">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <div class="section-title-2">
                  <h5>Baca update kami</h5>
                  <h2>Berita & Updates</h2>
               </div>
            </div>
            <div class="col-md-6"> <a href="{{ asset('berita') }}" class="view-more">Lihat berita lainnya</a> </div>
            <div class="col-md-12">
               <hr>
            </div>
         </div>
         <div class="row" style="background-color: white; padding-top: 20px; padding-bottom: 20px; border-radius: 5px;">
            <?php foreach($berita as $berita) { ?>
            <!--Blog Small Post Start-->
            <div class="col-md-4 col-sm-6" >
               <div class="blog-post">
                  <div class="blog-thumb"> <a href="{{ asset('berita/read/'.$berita->slug_berita) }}"><i class="fas fa-link"></i></a> <img src="{{ asset('assets/upload/image/thumbs/'.$berita->gambar) }}" alt="><?php  echo $berita->judul_berita ?>"> </div>
                  <div class="post-txt">
                     <h5><a href="{{ asset('berita/read/'.$berita->slug_berita) }}"><?php  echo $berita->judul_berita ?></a></h5>
                     <ul class="post-meta">
                        <li> <a href="{{ asset('berita/read/'.$berita->slug_berita) }}"><i class="fas fa-calendar-alt"></i> {{ tanggal('tanggal_id',$berita->tanggal_post)}}</a> </li>
                        <li> <a href="{{ asset('berita/kategori/'.$berita->slug_berita) }}"><i class="fas fa-sitemap"></i> {{ $berita->nama_kategori }}</a> </li>
                     </ul>
                     <p><?php echo \Illuminate\Support\Str::limit(strip_tags($berita->isi), 100, $end='...') ?></p>
                     <a href="{{ asset('berita/read/'.$berita->slug_berita) }}" class="read-post">Baca detail</a>
                  </div>
               </div>
            </div>
            <!--Blog Small Post End--> 
            <?php } ?>
         </div>
         
      </div>
   </div>
</section>
<!--Blog End--> 

<!--Testimonials Start-->
<!--<section class="testimonials-section bg-white wf100 p80">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="section-title-2 text-center">
               <h2>Download</h2>
            </div>
            <div id="testimonials" class="owl-carousel owl-theme">
               <?php 
               $kategori_download = DB::table('kategori_download')
                    ->orderBy('kategori_download.urutan','ASC')
                    ->get();
               foreach($kategori_download as $kategori_download) {
               ?>-->
               <!--testimonials box start-->
               <!--<div class="item">
                  <h4><?php echo $kategori_download->nama_kategori_download ?></h4>
                  <hr>
                  <?php echo \Illuminate\Support\Str::limit(strip_tags($kategori_download->keterangan), 100, $end='...') ?>
                  <div class="tuser">
                     <a href="{{ asset('download/kategori/'.$kategori_download->slug_kategori_download) }}" class="btn btn-success"><i class="fa fa-laptop"></i> Lihat Detail</a>
                  </div>
               </div>-->
               <!--testimonials box End--> 
               <!--<?php } ?>
            </div>
         </div>
      </div>
   </div>
</section>-->
<!--Testimonials End--> 
