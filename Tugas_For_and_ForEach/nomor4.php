<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <?php
    $array = [
        ['produkA', 'iniprodukA', 'Rp.1000', 'https://i.ibb.co.com/yYSDsfk/Screenshot-2024-10-25-131055.png'],
        ['produkB', 'iniprodukB', 'Rp.2000', 'https://i.ibb.co.com/yYSDsfk/Screenshot-2024-10-25-131055.png'],
        ['produkC', 'iniprodukC', 'Rp.3000', 'https://i.ibb.co.com/yYSDsfk/Screenshot-2024-10-25-131055.png'],
        ['produkD', 'iniprodukD', 'Rp.4000', 'https://i.ibb.co.com/yYSDsfk/Screenshot-2024-10-25-131055.png'],
        ['produkE', 'iniprodukE', 'Rp.5000', 'https://i.ibb.co.com/yYSDsfk/Screenshot-2024-10-25-131055.png'],
        ['produkF', 'iniprodukF', 'Rp.6000', 'https://i.ibb.co.com/yYSDsfk/Screenshot-2024-10-25-131055.png']
    ];

    // Access an element (e.g., 5)
    foreach ($array as $array) {
        echo '<div class="card" style="width: 18rem;">
        <img src="';
        echo $array[3];
        echo '" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">';
        echo $array[0];
        echo '</h5>
            <p class="card-text">';
        echo $array[1];
        echo '</p>
            <a href="#" class="btn btn-primary">';
        echo $array[2];
        echo '</a>
        </div>
        </div>';
        }
    
    ?>
</body>
</html>