

            <div class="table">
                <div class="title">
                    <h1>Overview</h1>
                    <input type="text">
                </div>
                <div class="cards">
                    <div class="card">
                       <h1><?= array_values($data)[0]?></h1>
                        <div class="card-info">
                            <h2>Clients</h2>
                        </div>
                        <a href="<?= OOP\App\Core\Router::url('admin/client') ?>"><button>See more</button></a>
                    </div>
                </div>
                <div class="cards">
                    <div class="card">
                       <h1><?=array_values($data)[2];?></h1>
                        <div class="card-info">
                            <h2>Collaboration</h2>
                        </div>
                        <a href="<?= OOP\App\Core\Router::url('admin/collaboration') ?>"><button>See more</button></a>
                    </div>
                </div>
                <div class="cards">
                    <div class="card">
                       <h1><?=array_values($data)[3];?></h1>
                        <div class="card-info">
                            <h2>Programs</h2>
                        </div>
                        <a href="<?= OOP\App\Core\Router::url('admin/program') ?>"><button>See more</button></a>
                    </div>
                </div>
            </div>


        </section>
    </main>
    <div class="circle1"></div>
    <div class="circle2"></div>