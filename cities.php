<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>PHP gyakorlat</title>
</head>
<body>
    <h1>Irányítószám kereső</h1>
    <form>
        <label for="countryDropdown">Megye:</label>
        <select id="countryDropdown"
        name="countryDropdown">
            <option value="">Válassz megyét:</option>
            <?php
            require_once('ItemRepository.php');

            $itemRepository = new ItemRepository();
            $counties = $itemRepository->getAllCounties();

            foreach ($counties as $county){
                echo '<option value="' .$county['id']
                .'">'.$county['name']. '</option>';

            }
?>           
</select>
<br> 
</body>
</html>