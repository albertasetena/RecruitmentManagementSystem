<style>
	.logo {
    padding: 5px;
}
.logo-img
{
  width: 200px !important;
  max-width: 250px !important;
  height: 60px !important;
}

.topnav{
  padding:0;
}
</style>
<nav class="navbar navbar-light fixed-top bg-dark col-sm-12 topnav mb-0" >
  <div class="container-fluid mb-0">
    <div class="row col-12">
        <div class="col-sm-3">
            <div class="col-12 ">
              <a class="navbar-brand js-scroll-trigger" href="./">
                <div class="logo">
                  <img src="../img/dave's 2.png" class="logo-img" alt="Logo">
                </div>
              </a>
            </div>
        </div>
        <div class="col-sm-9">
          <div class="col-sm-12 text-white float-right mt-3">
            <a href="ajax.php?action=logout" class="text-white float-right"><?php echo $_SESSION['login_name'] ?> <i class="fa fa-power-off"></i></a>
          </div>
        </div>
    </div>
  </div>
</nav>