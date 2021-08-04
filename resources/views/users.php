<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuarios - FaGuRu.net</title>
</head>
<body>
    <h1><?= e($title) ?></h1>
    <!-- utilizamos el helper "e" para convertir todo los input en htlm y así evitar que alguin ingrese codigo JS -->
    <ul>
        <?php foreach ($users as $user): ?>
            <li><?= e($user) ?></li>
        <?php endforeach; ?>
    </ul>

</body>
</html>