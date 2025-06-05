
  <h2>Thay đổi mật khẩu</h2>
  <form class="container mt-3 mb-3" action="controllers.php?act=taikhoan_update" method="post" enctype="multipart/form-data">
    <div class="mb-3 mt-3">
      <label for="ten">Tên đăng nhập:</label>
      <input type="text" class="form-control" id="ten"  name="user">
    </div>
    <div class="mb-3">
      <label for="pwd">Mật khẩu cũ:</label>
      <input type="password" class="form-control" id="pwd"  name="">
    </div>
    <div class="mb-3">
      <label for="pwd">Mật khẩu mới:</label>
      <input type="password" class="form-control" id="pwd"  name="pass">
    </div>
    <div class="mb-3">
      <label for="pwd">Nhập lại mật khẩu mới:</label>
      <input type="password" class="form-control" id="pwd"  name="confirm">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Nhớ mật khẩu
      </label>
    </div>
    <button type="submit" name="capnhap" class="btn btn-primary">Đồng ý</button>
  </form>
  <!-- <form class="modal-content animate p-3" action="controllers.php?act=user_update" enctype="multipart/form-data" method="post">
          <div class="mb-3 mt-3 ">
            <label for="uname"><b>Tên đăng nhập:</b></label>
            <input type="text" name="user" value="<?= $ketqua[0]['user'] ?>" required>
            <label for="uname"><b>Mật khẩu mới:</b></label>
            <input type="password" name="pass" value="<?= $ketqua[0]['pass'] ?>" required>
            <input type=hidden name="id" value="<?= $ketqua[0]['id'] ?>">

            <input type="submit" name="capnhap" value="Cập nhập" class="form-control text-bg-danger" >
          </div>
</form> -->


  
