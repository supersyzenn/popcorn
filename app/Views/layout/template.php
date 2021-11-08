<!DOCTYPE html>
<html lang="en">

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="/assets/css/style.css">
<title>Movie App</title>
</head>

<body>
    <?= $this->include('layout/navbar'); ?>
    <?= $this->renderSection('content'); ?>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Separate Popper and Bootstrap JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
    <script src="/public/assets/js/bootstrap.bundle.js"></script>
    <script src="/public/assets/js/jquery.min.js"></script>
    <script src="/public/assets/js/popper.min.js"></script>

</body>

</html>