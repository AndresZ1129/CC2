<html>
    <head>
        <title>Restaurant</title>
        <link rel="stylesheet" href="restaurant.css">
    </head>

    <body>
        
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
        function sortByPrice(a,b){
            return a-b;
        }
        function sortByName(a,b)
            return strcasecmp (a-b);
        }

        // display form data
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                $formData = $_GET;
            
                // Check if the form fields are not empty
                if (!empty($formData['name']) && !empty($formData['email'])) {
                    echo "<h2>Form Data:</h2>";
                    echo "<ul>";
                    
                    foreach ($formData as $key => $value) {
                        echo "<li><strong>{$key}:</strong> {$value}</li>";
                    }
            
                    echo "</ul>";
                } 
                else {
                    echo "Please fill out all fields in the form.";
                }
            
        ?>
    </body>
</html>
