<?php
class layouts{
    public function heading($conf){
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print $conf['site_initials']; ?></title>

    <link rel="stylesheet" href="css/style.css">
  
</head>
<body>
        <?php
    }
    public function footer($conf){
        ?>
 
<footer class="pt-3 mt-4 text-body-secondary border-top">
Copyright &copy; <?php print $conf['site_initials'] . ' ' . date("Y"); ?>
      </footer>
    </div>
  </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
  <script src="js/userData.js"></script>

</body>
</html>
        <?php
    }
}