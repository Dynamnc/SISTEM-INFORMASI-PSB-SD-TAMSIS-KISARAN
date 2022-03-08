<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">

    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="?page=utama">SD SWASTA TAMSIS KISARAN
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="index_admin.php">Home</a></li>

                <?php if(isset($_SESSION['level']) && $_SESSION['level']==0) { ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Master Data <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=pendaftar&actions=tampil">Data Pendaftar</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Laporan<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=pendaftar&actions=report">Laporan Pendaftar</a></li>
                    </ul>
                </li>

                <?php } ?>

                    <?php if (isset($_SESSION['username'])) { ?>
                    <li><a href="logout.php">Logout</a></li>
                <?php } ?>

            </ul>
        </div>
    </div>
</nav>
