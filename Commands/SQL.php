<?php
    function connectDB()
    {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
                
        //On établit la connexion
        $conn = new PDO("mysql:host=$servername;dbname=bddtest", $username, $password);
    }

    function getAllbyAlcool($table, $alcool)
    {
        $sql = "SELECT * FROM ? WHERE alcool = ?";
        $stmt = $conn->prepare($sql);

        // Liez les paramètres à la requête
        $stmt->bind_param(1, $table);
        $stmt->bind_param(2, $alcool);

        // Exécutez la requête
        $stmt->execute();

        // Récupérez les résultats de la requête
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Fermez la requête et la connexion
        $stmt->close();
    }
    function getAllbylevel($table, $lvl)
    {
        $sql = "SELECT * FROM ? WHERE lvl = ?";
        $stmt = $conn->prepare($sql);

        // Liez les paramètres à la requête
        $stmt->bind_param(1, $table);
        $stmt->bind_param(2, $lvl);

        // Exécutez la requête
        $stmt->execute();

        // Récupérez les résultats de la requête
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Fermez la requête et la connexion
        $stmt->close();
    }
    function getAllbytype($table, $type)
    {
        $sql = "SELECT * FROM ? WHERE type = ?";
        $stmt = $conn->prepare($sql);

        // Liez les paramètres à la requête
        $stmt->bind_param(1, $table);
        $stmt->bind_param(2, $type);

        // Exécutez la requête
        $stmt->execute();

        // Récupérez les résultats de la requête
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Fermez la requête et la connexion
        $stmt->close();
    }
    function getCocktailbyId($id)
    {
        $sql = "SELECT * FROM Cocktail WHERE id = ?";
        $stmt = $conn->prepare($sql);

        // Liez les paramètres à la requête
        $stmt->bind_param(1, $id);

        // Exécutez la requête
        $stmt->execute();

        // Récupérez les résultats de la requête
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // Fermez la requête et la connexion
        $stmt->close();
    }
?>