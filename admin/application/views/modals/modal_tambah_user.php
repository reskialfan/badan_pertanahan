<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Tambah Data User</h3>

  <form id="form-tambah-user" method="POST" enctype="multipart/form-data">
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
      <input type="text" class="form-control" placeholder="Username" name="username" aria-describedby="sizing-addon2">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
      <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" aria-describedby="sizing-addon2">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-lock"></i>
      </span>
      <input type="password" class="form-control" placeholder="Password" name="password" aria-describedby="sizing-addon2">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-upload"></i>
      </span>
      <input type="file" class="form-control" placeholder="upload foto anda" name="f" aria-describedby="sizing-addon2">
    </div>
    
    <div class="form-group">
      <div class="col-md-12">
          <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Tambah Data</button>
      </div>
    </div>
  </form>
</div>
