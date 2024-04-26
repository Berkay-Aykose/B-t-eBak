<?php require_once 'header.php' ?>

<body class="bg-light">
    
    <hr>

    <div class="container-fluid p-0" id="home">
        <div class="row">

            <div class="col-md-12 mt-5">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Gelir</h5>
                  <p class="card-text">Bir gelir türü seçiniz.</p>
                  <a href="income_add.php" class="btn btn-outline-success w-100 btn-lg">Gelir +</a>
                </div>
              </div>
            </div>

            <div class="col-md-12 mt-5">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Gider</h5>
                  <p class="card-text">Bir gider türü seçiniz.</p>
                  <a href="expense_add.php" class="btn btn-outline-danger w-100 btn-lg">Gider -</a>
                </div>
              </div>
          </div>

        </div>
    </div>
  
    <hr>
<?php require_once 'footer.php' ?>