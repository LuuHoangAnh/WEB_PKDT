
    <!-- header -->
    <?php  
        include_once('layouts/header.php');
        require_once('db/dbhelper.php');
        require_once('utils/utility.php');
        require_once('api/help-center-form.php');

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
                        <h1 class="text-center">Gửi thông tin góp ý</h1>
                    </div>
                    <div class="panel-body register-body">
                        <div class="form-group">
                          <label for="title">Tiêu đề</label>
                          <input required="true" type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="form-group">
                          <label for="fullname">Họ tên:</label>
                          <input required="true" type="text" class="form-control" id="fullname" name="fullname">
                        </div>
                        <div class="form-group">
                          <label for="email">Email:</label>
                          <input required="true" type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                          <label for="content">Nội dung:</label>
                          <textarea class="form-control" id="address" name="content" rows="4"></textarea> 
                        </div>
                        <button class="btn btn-success btn-register" style="align-items: center; justify-content: center;">Gửi góp ý</button>
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