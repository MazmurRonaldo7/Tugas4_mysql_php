 <!-- Blog Area Start -->
 <section class="roberto-blog-area section-padding-100-0">
     <div class="container">
         <div class="row">
             <!-- Section Heading -->
             <div class="col-12">
                 <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                     <h2>Fasilitas</h2>
                 </div>
             </div>
         </div>

         <div class="row">
             <!-- Data Gedung -->
             <?php
             //ciptakan object dari class Gedung
             $obj = new Fasilitas();
             //panggil fungsi menampilkan data Gedung
             $rs = $obj->getAll();
             //looping data gedung
             foreach($rs as $g){
             ?>
             <div class="col-12 col-md-6 col-lg-4">
                 <div class="single-post-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                 <img src="img/bg-img/fasilitas<?= $g['id'] ?>.jpg" alt="">
                     <!-- Post Meta -->
                     <div class="post-meta">
                       
                    </div>
                     <!-- Post Title -->
                     <a href="#" class="post-title"><?= $g['nama'] ?></a>
                     <p><?= $g['keterangan'] ?></p>
                     <a href="index.php?hal=fasilitas_form_edit&id=<?= $g['id'] ?>" class="btn continue-btn"><i
                             class="fa fa-edit" aria-hidden="true"></i></a>
                 </div>
             </div>
             <?php } ?>
            <div class="col-6 text-right wow fadeInUp" data-wow-delay="100ms">
                <a href="index.php?hal=fasilitas_form" class="btn roberto-btn">Tambah</a>
            </div>
            <div class="col-6 text-left wow fadeInUp" data-wow-delay="100ms">
                <a href="index.php?hal=fasilitas_detail" class="btn roberto-btn"> View Detail</a>
            </div>
         </div>
     </div>
 </section>
 <!-- Blog Area End -->