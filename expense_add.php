<?php require_once 'header.php' ?>
  <body class="bg-light">
    
    <div class="col-md-12">
        
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

                <!--Alert mysql-->
                <div>
                <?php if (isset($_GET['durum']) && $_GET['durum'] == "yes") { ?>
                    <div class="alert alert-success">
                        Kayıt Başarılı
                    </div>
                <?php } else if (isset($_GET['durum']) && $_GET['durum'] == "no") { ?>
                    <div class="alert alert-danger">
                        Kayıt Başarısız
                    </div>
                <?php } ?>
                </div>

                <form action="netting/islem.php" method="POST" class="needs-validation" novalidate>

                    <div class="input-group mb-3">
                        <span class="input-group-text">TL</span>
                        <input type="number" pattern="\d*" class="form-control" id="validationCustom05" name="expense_money" required aria-label="Amount (to the nearest dollar)">
                        <span class="input-group-text">.00</span>
                    </div>
      
                    <div class="mb-3">
                        <select class="form-select" aria-label="Default select example" name="expense_category">
                            <option disabled selected>Gelir kategorisi seçin</option>
                            <option value="Alışveriş">Alışveriş</option>
                            <option value="Gıda">Gıda</option>
                            <option value="Telefon">Telefon</option>
                            <option value="Eğlence">Eğlence</option>
                            <option value="Eğitim">Eğitim</option>
                            <option value="Güzellik">Güzellik</option>
                            <option value="Spor">Spor</option>
                            <option value="Sosyal">Sosyal</option>
                            <option value="Giyim">Giyim</option>
                            <option value="Araba">Araba</option>
                            <option value="Evcil Hayvan">Evcil Hayvan</option>
                        </select>
                    </div>

                    <div class="input-group date mt-3" id="datepicker">
                        <input type="date" class="form-control" required value="21-12-2021" name="expense_date">
                        <span class="input-group-append">
                        </span>
                    </div>

                    <div class="mt-3">
                        <button type="submit" name="expense_add" href="#" class="btn btn-outline-danger w-100 btn-lg"><i class="bi bi-plus"></i>Gider Ekle</button>
                    </div>
               </form>
            
            </div>
        
    </div>

<?php require_once 'footer.php' ?>