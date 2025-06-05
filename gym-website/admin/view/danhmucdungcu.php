<div class="container mt-5">
        <div class="row">
          <div class="col-sm-3 border">
            <div class="container p-3 ">
              <form action="index.php?act=adddmdc" method="post" enctype="multipart/form-data">
                <div class="mb-3 mt-3 ">
                   <label class="container-fluid p-2 bg-info" for="search">Tìm kiếm</label>
                  
                   <div id="id01" class="modal">
  
  <form class="modal-content animate"   method="post" >
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="" alt="Avatar" style="width: 300px;" class="avatar">
    </div>

    <div class="container login__container">
      <label for="uname"><b>Tên danh mục dụng cụ</b ></label>
      <input type="text" placeholder="Enter Username" name="tendmdc" class="input-login-username" required>

      <?php
      if (isset($txt_erro) && ($txt_erro != "")) {
        echo "<font color='red>" . $txt_erro . "</font>";
      }
      ?>
    </div>
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>
                  
                </div>
              </form>
  
  
</div>
<div class="container d-flex justify-content-between">
              <div class="text-success" style="font-weight:bold;font-size:20px">
                Danh sách danh mục dụng cụ
              </div>
              <div class="d-flex flex-row">
                <div>
                
                <button onclick="document.getElementById('id01').style.display='block'" class="form-control ms-2 text-bg-success">Thêm danh mục</button>
                </div>
                <div>
                  <button class="form-control ms-2 text-bg-success" >Xuất file</button>
                </div>
                
              </div>
            
            </div>
            
          </div>
           <div class="col-sm-9 ">
           <div class="container mt-3">
              <table class="table table-bordered table-sm">
                <thead>
                <tr>
        <th>ID</th>
        <th>Tên danh mục dụng cụ</th>
      </tr>
                </thead>
          
                <tbody>
        
        <?php
        if (isset($ketqua) && (count($ketqua) > 0)) {
          $i = 1;
          foreach ($ketqua as $dmdc) {
            echo '
            <tr>
            <tr>
            <td>' . $i . '</td>
            <td>' . $dmdc['tendmdc'] . '</td>
      
            </tr>';
            $i++;
          }
        }
        ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="../../js/scripts.js"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>