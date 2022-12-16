<div class="table">
                <div class="title">
                    <h1>List of Collaboration</h1>
                    <input type="text">
                </div>
                <a href="<?= OOP\App\Core\Router::url('admin/collaboration/add') ?>"><button>add</button></a>
                <?php $no =1; foreach($data as $row){?>
                <div class="cards" >
                    <div class="card">
                       <h3><?= $no++?>. <?= $row->name?></h3>
                        <div class="card-info" style="text-align: left;">
                            <p> address : <?= $row->address?></p>
                            <p> email : <?= $row->email?></p>
                            <p> phone : <?= $row->phone?></p>
                            <p> created at : <?= $row->created_at?></p>
                            <p>updated at : <?= $row->updated_at?></p>
                        </div>
                        <a href="<?= OOP\App\Core\Router::url("admin/collaboration/edit/$row->id") ?>"><button>edit</button></a>
                        <a href="<?= OOP\App\Core\Router::url("admin/collaboration/delete/$row->id") ?>"><button class="danger">delete</button></a>
                    </div>
                </div>
                <?php } ?>
            </div>


        </section>
    </main>
    <div class="circle1"></div>
    <div class="circle2"></div>
