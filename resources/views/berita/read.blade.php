<?php 
$bg   = DB::table('heading')->where('halaman','Berita')->orderBy('id_heading','DESC')->first();
 ?>

 <!-- gmaps -->
<script src="http://maps.googleapis.com/maps/api/js"></script>

    <script>
        // fungsi initialize untuk mempersiapkan peta
        function initialize() {
        var propertiPeta = {
            center:new google.maps.LatLng(-8.5830695,116.3202515),
            zoom:9,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        
        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
        }

        // event jendela di-load  
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

 
<!--Inner Header Start-->
<section class="wf100 p80 inner-header" style="background-image: url('{{ asset('assets/upload/image/'.$bg->gambar) }}'); background-position: bottom center;">
   <div class="container">
      <h1>{{ $title }}</h1>
   </div>
</section>
<!--Inner Header End--> 
<!--About Start-->
<section class="wf100 about">
<!--About Txt Video Start-->
<div class="about-video-section wf100">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <div class="about-text text-aws">
            <style type="text/css" media="screen">
                              .text-aws img {
                                 width: auto;
                                 max-width: 100%;
                                 height: auto;
                              }
                           </style>               
               <?php echo $read->isi ?>
            </div>
         </div>
         <div class="col-lg-6">
            <a href="#"><img src="{{ asset('assets/upload/image/'.$read->gambar) }}" alt="{{ $title }}" class="img img-fluid img-thumbnail"></a>
         </div>
         
         
      </div>
   </div>
</div>
</section>
<!--About Txt Video End--> 



