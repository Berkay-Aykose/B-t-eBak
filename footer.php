    <!--footer-->
    <footer>
      <section>
        <nav class="navbar fixed-bottom navbar-light bg-light p-0 m-0 col-md-12 border">
          <div class="container p-0">
            <div class="btn-group col-md-12 nested">
              <a class="btn btn-outline-secondary btn-lg" href="index.php"><i class="fa-solid fa-house-chimney"></i></a> <!-- Home -->
              <a class="btn btn-outline-secondary btn-lg" href="income-expense.php"><i class="fa-solid fa-money-bill-transfer"></i></a> <!-- Transefer -->
              <a class="btn btn-outline-secondary btn-lg" href="income_report.php"><i class="fa-solid fa-money-bill"></i></a> <!-- portföy  -->
              <a class="btn btn-outline-secondary btn-lg" href="auther.php"><i class="fa-solid fa-user"></i></a> <!-- user  -->
            </div>
          </div>
        </nav>
      </section>
    </footer>

    <!---Bootstrap-->
    <script type="text/javascript">
            $(function() {
             $('#datepicker').datepicker({
              format: 'dd/mm/yyyy'

            });
           });
         </script>


         <script type="text/javascript">
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
      'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
  .forEach(function (form) {
    form.addEventListener('submit', function (event) {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>