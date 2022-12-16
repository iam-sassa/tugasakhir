<div class="table">
                <div class="title">
                    <h1>List of Branch</h1>
                    <input type="text">
                </div>
                <a href="<?= OOP\App\Core\Router::url('admin/branch/add') ?>"><button>add</button></a>
                <?php $no =1; foreach($data as $row){?>
                <div class="cards" >
                    <div class="card">
                       <h3><?= $no++?>. <?= $row->name?></h3>
                        <div class="card-info" style="text-align: left;">
                            <p>category : <?= $row->category?></p>
                            <p>founded year : <?= $row->founded_year?></p>
                            <p> address : <?= $row->address?></p>
                            <p>collab id : <?= $row->collab_id?></p>
                            <p>available seat : <?= $row->available_seats?></p>
                            <p> created at : <?= $row->created_at?></p>
                            <p>updated at : <?= $row->updated_at?></p>
                        </div>
                        <a href="<?= OOP\App\Core\Router::url("admin/branch/edit/$row->id") ?>"><button>edit</button></a>
                        <a href="<?= OOP\App\Core\Router::url("admin/branch/delete/$row->id") ?>"><button class="danger">delete</button></a>
                    </div>
                </div>
                <?php } ?>
            </div>


        </section>
    </main>
    <div class="circle1"></div>
    <div class="circle2"></div>
