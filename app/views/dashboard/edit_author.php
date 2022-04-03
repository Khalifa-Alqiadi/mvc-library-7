<?php 
//  echo dirname(__DIR__.'../../public/assets/');
    include("include/head.php");
?>

  <!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar  ">
  <div class="layout-container">

  
  
      <!-- Menu -->

      <?php 
      include("include/aside.php");
      
      ?>
      <!-- / Menu -->


    <!-- Layout container -->
    <div class="layout-page">
      
      <?php  include("include/nav.php"); ?>



<!-- Navbar -->


      

      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Vertical Layouts</h4>




<!-- Multi Column with Form Separator -->
<div class="card mb-4">
  <h5 class="card-header">انشاء كاتب جديد</h5>
  <form class="card-body" action="/update_author" method="POST">
    <input type="hidden" name="authorid" value="<?= $params['id'] ?>">
    <div class="row g-3">
      <div class="col-md-6">
        <label class="form-label" for="multicol-username">اسم الكاتب</label>
        <input name="author_name" type="text" value="<?= $params['name'] ?>" id="multicol-username" class="form-control" placeholder="john.doe" />
      </div>
      <div class="col-md-6">
        <label class="form-label" for="multicol-email">رقم الهاتف</label>
        <div class="input-group input-group-merge">
          <input  name="phone" type="text" value="<?= $params['phone'] ?>"  class="form-control"  aria-describedby="multicol-email2" />
          
        </div>
      </div>
      <div class="col-md-6">
        <label class="form-label" for="multicol-email">البريد الاكتروني</label>
        <div class="input-group input-group-merge">
          <input  name="email" type="email" value="<?= $params['email'] ?>"  class="form-control"  aria-describedby="multicol-email2" />
          
        </div>
      </div>
      <div class="col-md-6">
        <label class="form-label" for="multicol-email">السيرة الذاتية</label>
        <div class="input-group input-group-merge">
          <input  name="bio" type="text" value="<?= $params['bio'] ?>"  class="form-control"  aria-describedby="multicol-email2" />
          
        </div>
      </div>
    </div>
    
    
    <div class="pt-4">
      <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
      <button type="reset" class="btn btn-label-secondary">Cancel</button>
    </div>
  </form>
</div>





            
          </div>
          <!-- / Content -->

          
          

<?php include "include/footer.php" ?>