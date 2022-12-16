            <div class="table">
                <div class="title">
                    <h1>List of Clients</h1>
                    <input type="text">
                </div>
                <a href="<?= OOP\App\Core\Router::url('admin/client/add') ?>"><button>add</button></a>
                
                <?php $no =1; foreach($data as $row){?>
                <div class="cards">
                    <div class="card" style="text-align: left;">
                       <h3><?= $no++?>. <?= $row->name?></h3>
                        <div class="card-info">
                            <p>phone : <?= $row->phone?></p>
                            <p> address : <?= $row->address?></p>
                        </div>
                        <a href="<?= OOP\App\Core\Router::url("admin/client/edit/$row->id") ?>"><button>edit</button></a>
                        <a href="<?= OOP\App\Core\Router::url("admin/client/delete/$row->id") ?>"><button class="danger">delete</button></a>
                    </div>
                </div>
                <?php } ?>
            </div>


        </section>
    </main>
    <div class="circle1"></div>
    <div class="circle2"></div>
