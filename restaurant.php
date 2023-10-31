<html>
    <head>
        <title>Restaurant</title>
        <link rel="stylesheet" href="restaurant.css">
    </head>

    <body>
        <!-- dropdown menu -->
    <form method="GET">
        <label for="sort">Sory by:</label>
        <select name="sort" id="sort">
            <option value="name">Name</option>
            <option value="price">Price</option>
        </select>
        <input typle="submit" value="Sort">
    </form>

        <?php

        // array of restaurants and their avg prices
           $formFields = array(
            'Fogo de Chão' => '40.50',
            'Aviva by Kameel' => '18.00',
            'Bones Restaurant' => '65.00',
            'Umi Sushi Buckhead' => '40.50',
            'Fandangles' => '30.00',
            'Capital Grille' => '60.50',
            'Canoe' => '35.50',
            'One Flew South' => '21.00',
            'Fox Bros. BBQ' => '15.05',
            'South City Kitchen Midtown' => '29.00',
            );

        ?>
    </body>
</html>
