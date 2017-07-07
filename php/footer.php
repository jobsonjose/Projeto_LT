<footer class="bg-faded py-5" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-3 text-center">
                <p>© Copyright 2017 ProjetoLT - All rights reserved. </p>
            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.min.js"></script>
<script src="https://pingendo.com/assets/scripts/smooth-scroll.js"></script>
</body>
</html>
<?php
    if(isset($_POST['sair'])){
        unset($_SESSION['user']);
        header('location: login.php');
    }
?>