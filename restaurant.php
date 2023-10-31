<html>
    <head>
        <title>Restaurant Ranking</title>
        <link rel="stylesheet" href="restaurant.css">
    </head>

    <body>
        <h1> Restaurant Ranking</h1>
        
        <!-- dropdown menu -->
    <form method="GET">
        <label for="sort">Sort by:</label>
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
        function sortByPrice($a,$b){
            return $a-$b;
        }
        function sortByName($a,$b)
            return strcasecmp ($a-$b);
        }
        if (isset($_GET['sort'])) {
    $sortType = $_GET['sort'];
    if ($sortType == 'price') {
        uasort($restaurants, 'sortByPrice');
    } elseif ($sortType == 'name') {
        uksort($restaurants, 'sortByName');
    }
}


        // displaying form data
            if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                $formFields = $_GET;
            
                // Check if the form fields are not empty
                if (!empty($formFields['name']) && !empty($formFields['price'])) {
                    echo "<h2>Form Data:</h2>";
                    echo "<ul>";
                    
                    foreach ($formFields as $name => $price) {
                        echo "<li><strong>{$name}:</strong> {$price}</li>";
                    }
            
                    echo "</ul>";
                } 
                else {
                    echo "Please fill out all fields in the form.";
                }
            
        ?>
    </body>
</html>
