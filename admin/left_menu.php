<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="index.html" class="app-brand-link">
      <span class="app-brand-logo demo"> <img src="https://www.demoyourprojects.com/hzparishad/assets/img/logo.png" alt="Girl in a jacket" style="max-width:15%">
      </span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item <?php if ($activePage == "tender" || $activePage == "addtender" || $activePage == "edittender") {
                            echo "active";
                          } else {
                            echo "noactive";
                          } ?>">
      <a href="tender.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Tender Management</div>
      </a>
    </li>
    <li class="menu-item <?php if ($activePage == "notice" || $activePage == "addnotice" || $activePage == "editnotice") {
                            echo "active";
                          } else {
                            echo "noactive";
                          } ?>"">
              <a href=" notice.php" class="menu-link">
      <i class="menu-icon tf-icons bx bx-home-circle"></i>
      <div data-i18n="Analytics">Notice Management</div>
      </a>
    </li>
    <li class="menu-item <?php if ($activePage == "banner" || $activePage == "addbanner" || $activePage == "editbanner") {
                            echo "active";
                          } else {
                            echo "noactive";
                          } ?>">
              <a href="banner.php" class="menu-link">
      <i class="menu-icon tf-icons bx bx-home-circle"></i>
      <div data-i18n="Analytics">Banner Management</div>
      </a>
    </li>
    <li class="menu-item <?php if ($activePage == "photogallery" || $activePage == "addphotogallery" || $activePage == "editphotogallery") {
                            echo "active";
                          } else {
                            echo "noactive";
                          } ?>">
              <a href="photogallery.php" class="menu-link">
      <i class="menu-icon tf-icons bx bx-home-circle"></i>
      <div data-i18n="Analytics">Photo Gallery Management</div>
      </a>
    </li>
    <li class="menu-item <?php if ($activePage == "videogallery" || $activePage == "addvideogallery" || $activePage == "editvideogallery") {
                            echo "active";
                          } else {
                            echo "noactive";
                          } ?>">
              <a href="videogallery.php" class="menu-link">
      <i class="menu-icon tf-icons bx bx-home-circle"></i>
      <div data-i18n="Analytics">Video Gallery Management</div>
      </a>
    </li>
    <!-- Layouts -->

    <!-- Components -->


    <!-- Extended components -->

    <!-- Tables -->

    <!-- Misc -->

  </ul>
</aside>