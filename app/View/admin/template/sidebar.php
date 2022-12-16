<main>
        <section class="glass">
            <div class="dashboard">
                <div class="user">
                    <img src="../public/assets/images/avatar.svg" alt="" width="80" height="80">
                    <h3><?= $_SESSION['username']; ?></h3>
                </div>
                <div class="links">
                    <div class="link">
                        <img src="../public/assets/images/dashboard.svg" alt=""  width="30" height="30">
                        <a href="<?= OOP\App\Core\Router::url('admin') ?>"><h2>Overview</h2></a>
                        
                    </div>
                    <div class="link">
                        <img src="../public/assets/images/table.svg" alt=""  width="30" height="30">
                        <a href=""> <h2>Data Table</h2></a>
                        
                        
                    </div>
                    <div class="link">
                        <img src="../public/assets/images/transaction.svg" alt=""  width="30" height="30">
                        <a href=""> <h2>Transaction</h2></a>
                       
                    </div>
                    <div class="link">
                        <img src="../public/assets/images/web_settings.svg" alt=""  width="30" height="30">
                        <a href=""> <h2>Editable Data</h2></a>
                       
                    </div>
                </div>
                <div class="logout">
                    <img src="../public/assets/images/logout.svg" alt="" width="30" height="30">
                    <a href="<?= OOP\App\Core\Router::url('logout') ?>"><button>Log Out</button></a>
                </div>
            </div>