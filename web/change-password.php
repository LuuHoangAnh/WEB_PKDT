<!-- header -->
<?php  
    include_once('layouts/header.php');
    require_once('db/dbhelper.php');
    require_once('utils/utility.php');
    require_once('api/change-password-form.php');
    
    if (!empty($nameSearch)){
        echo "<script>
                var nameSearch = '".addslashes($nameSearch)."';
                window.location.href = 'home.php?search=' + encodeURIComponent(nameSearch);
              </script>";
    }
?>
<!-- body -->
<form method="POST">
    <div class="body">
        <div class="register-container" style="height: 605px;">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h1 class="text-center">Thay đổi mật khẩu</h1>
                </div>
                <div class="panel-body register-body">
                    <div class="form-group">
                      <label for="pwd">Mật khẩu cũ:</label>
                      <input required="true" type="password" class="form-control" id="pwd" name="old_password">
                    </div>
                    <div class="form-group">
                      <label for="pwd">Mật khẩu mới:</label>
                      <input required="true" type="password" class="form-control" id="pwd" name="new_password">
                    </div>
                    <div class="form-group">
                      <label for="confirmation_pwd">Nhập lại mật khẩu mới:</label>
                      <input required="true" type="password" class="form-control" id="confirmation_pwd" name="confirmation_pwd">
                    </div>
                    <button class="btn btn-success btn-register">Thay đổi</button>
                </div>
            </div>
        </div>
    </div>
</form>
<script src="./assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
<!-- footer -->
<?php  
    include_once('layouts/footer.php');
?>