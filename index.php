<!DOCTYPE html>
<html>
<head>
    <title>Tableau de Cases</title>
</head>
<body>
    <label for="colorPicker">Sélectionnez une couleur :</label>
    <input type="color" id="colorPicker">
    
    <canvas id="myCanvas" width="1000" height="700"></canvas>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "pixelwar";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $coordonneX = $_POST['coordonneX'];
                $coordonneY = $_POST['coordonneY'];
                $color = $_POST['color'];

                $stmt = $conn->prepare("UPDATE cases SET color = :color WHERE coordonneX = :coordonneX AND coordonneY = :coordonneY");
                $stmt->bindParam(':color', $color, PDO::PARAM_STR);
                $stmt->bindParam(':coordonneX', $coordonneX, PDO::PARAM_INT);
                $stmt->bindParam(':coordonneY', $coordonneY, PDO::PARAM_INT);
                $stmt->execute();
            }
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }

        $conn = null;
    ?>
    <script src="websocket.js"></script>
</body>
</html>
