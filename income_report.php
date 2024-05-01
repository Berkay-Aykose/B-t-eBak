<?php require_once 'header.php' ?>

<body class="bg-light">

  <div class="container-fluid p-0 " id="home">

    <div class="row p-3">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">

            <div class="col-md-12 mb-3 d-flex justify-content-center">
              <div class="d-flex justify-content-center">
                <h2>Portföy</h2>
              </div>
            </div>

            <?php
            $sql = $db->prepare("SELECT income_category, COUNT(*), SUM(income_money) FROM income GROUP BY income_category;");
            $sql->execute();

            while ($sqlCek = $sql->fetch(PDO::FETCH_ASSOC)) {
                  $income_category_array[$sqlCek['income_category']] = $sqlCek['SUM(income_money)'];
            }
            /*
            echo "<pre>";
            print_r($income_category_array);
            echo "</pre>";
            */
            ?>


            <div class="col-md-12 mb-3 d-flex justify-content-center">
              <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link " aria-current="page" href="#">Gelir</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active " aria-current="page" href="expense_report.php">Gider</a>
                </li>
              </ul>
            </div>

            <canvas id="myChart" width="auto" height="100"></canvas>

          </div>
        </div>
      </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
    </script>
    <script>
      const ctx = document.getElementById('myChart');
      const myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
          // key=kategoriler value=değerleri
          labels: [<?php foreach ($income_category_array as $key => $value) {
            echo "'".$key."',";
          }?>],
          datasets: [{
            label: '# of Votes',
            data: [<?php foreach ($income_category_array as $key => $value) {
              echo "'".$value."',";
            } ?>],
            backgroundColor: [
              '#FFCCCC',
              '#CCCCFF',
              '#CCFFCC',
              '#FFFFCC',
              '#FFDAB9',
              '#E6E6FA',
              '#FFB6C1',
              '#AFEEEE',
              '#D3D3D3',
            ],

            borderWidth: 1
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
    </script>

<?php require_once 'footer.php' ?>