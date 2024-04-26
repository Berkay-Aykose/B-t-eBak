<?php require_once 'header.php' ?>

<body class="bg-light">

  <div class="container-fluid p-0 " id="home">

    <div class="row p-3">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">

            <div class="col-md-12 mb-3 d-flex justify-content-center">
              <div class="d-flex justify-content-center">
                <h2>Report</h2>
              </div>
            </div>

            <div class="col-md-12 mb-3 d-flex justify-content-center">
              <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link " aria-current="page" href="#">INCOME</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active " aria-current="page" href="expense_report.php">EXPENSES</a>
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
          labels: ['market', 'fatura', 'sağlık', 'eğitim', 'test'],
          datasets: [{
            label: '# of Votes',
            data: ['12', '19', '3', '5', '3'],
            backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 206, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)',
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