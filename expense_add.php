<?php require_once 'header.php' ?>
  <body class="bg-light">
    
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

                <div class="col-md-12 mb-3 d-flex justify-content-center">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="income_add.php">Gelir</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="expense_add.php" style="background-color: #DC3545;">Gider</a>
                        </li>
                    </ul>
                </div>

                <form action="" method="POST" class="needs-validation" novalidate>

                    <div class="input-group mb-3">
                        <span class="input-group-text">TL</span>
                        <input type="number" pattern="\d*" class="form-control" id="validationCustom05" name="income_price" required aria-label="Amount (to the nearest dollar)">
                        <span class="input-group-text">.00</span>
                    </div>
      
                    <div class="mb-3">
                        <select class="form-select" aria-label="Default select example" >
                            <option selected>Gelir kategorisi seçin</option>
                            <option value="1">Alışveriş</option>
                            <option value="2">Gıda</option>
                            <option value="4">Telefon</option>
                            <option value="5">Eğlence</option>
                            <option value="6">Eğitim</option>
                            <option value="7">Güzellik</option>
                            <option value="8">Spor</option>
                            <option value="9">Sosyal</option>
                            <option value="10">Giyim</option>
                            <option value="11">Araba</option>
                            <option value="12">Evcil Hayvan</option>
                        </select>
                    </div>

                    <div class="input-group date mt-3" id="datepicker">
                        <input type="date" class="form-control" required value="21-12-2021" name="income_date">
                        <span class="input-group-append">
                        </span>
                    </div>

                    <div class="mt-3">
                        <button type="submit" name="income_add" href="#" class="btn btn-outline-danger w-100 btn-lg"><i class="bi bi-plus"></i>Gider Ekle</button>
                    </div>
               </form>
            
            </div>
        </div>
    </div>

<?php require_once 'footer.php' ?>