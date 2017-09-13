<?php

  $poin = 150;  
?>
<!-- BEGIN CONTENT -->
<div class="col-md-7 col-sm-7">
  <h1>Profile</h1>
  <div class="content-page">
    <h2>Poin : <?php echo $poin;?></h2>
    
    <!-- BEGIN FORM-->
    <form action="#" class="default-form" role="form">
      <div class="form-group">
        <label for="name">Nama Lengkap</label>
        <input type="text" class="form-control" id="name">
      </div>
      <div class="form-group">
        <label for="birthday">Tanggal Lahir <span class="require">*</span></label>
        <input type="date" class="form-control" id="email">
      </div>
      <div class="form-group">
        <label for="gender">Jenis Kelamin</label><br>
        <input type="radio" id="gender" checked="checked">Perempuan 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" id="gender">Laki-Laki
      </div>
      <div class="form-group">
        <label for="message">Alamat</label>
        <textarea class="form-control" rows="8" id="message"></textarea>
      </div>
      <div class="form-group">
        <label for="telepon">Nomor Telepon</label>
        <input type="text" class="form-control" id="telepon">
      </div>
      <div class="padding-top-20">                  
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
    <!-- END FORM-->          
  </div>
</div>
<!-- END CONTENT -->