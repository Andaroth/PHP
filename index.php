<?php 

if (isset($_POST["child"]) && isset($_POST["instit"]) && isset($_POST["reason"])) {
    $child = $_POST["child"];
    $instit = $_POST["instit"];
    $motif = $_POST["reason"];
} else {
    $child = "";
    $instit = "";
    $motif = "";
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Du PHP</title>
    </head>
    <body>
        <h1>Générateur de sorrynotsorry</h1>
        <form action="index.php" method="post">
            <label for="child">Le nom de votre enfant : </label>
            <input id="child" name="child" type="text" />
            <br/>
            <label for="instit">Le nom de l'instituteur/trice : </label>
            <input id="instit" name="instit" type="text" />
            <br/>
            <div>
                <p>Le motif de votre absence :</p>
                <input name="reason" type="radio" value="sick" id="sick" checked/>
                <label for="sick">Maladie</label><br/>
                <input name="reason" type="radio" value="deadcat" id="deadcat" />
                <label for="deadcat">Décès du petit chat</label><br/>
                <input name="reason" type="radio" value="extra" id="extra" />
                <label for="extra">Activité extra-scolaire</label><br/>
                <input name="reason" type="radio" value="poney" id="poney" />
                <label for="poney">J'ai aquaponey</label>
            </div>
            <br/><input type="submit" />
        </form>
        <div id="output">
            
            <?php 
            
                if ($child != "" && $instit != "" && $motif != "") {
                    switch($motif) {
                        case "sick":
                            $motif = "Il/Elle avait le nez qui coule sévère et son cerveau qui sort par les oreilles.";
                            break;
                        case "deadcat":
                            $motif = "Petit bébé chat nous a quitté, offrez-nous du Nutella.";
                            break;
                        case "extra":
                            $motif = "Il/Elle devait photographier des avions pour prouver l'existence des chemtrails.";
                            break;
                        case "poney":
                            $motif = "Il/Elle devait chevaucher son destrier naval pour mettre la baballe dans le filet.";
                            break;
                        
                    }
                    echo "<h2>Votre motif d'excuse est le suivant</h2>";
                    echo "Votre sale gamin de m*rde nommé <strong>".$child."</strong> est absent de la classe de <strong>".$instit."</strong> ! <br/>";
                    echo "Le motif est très simple : <strong>".$motif."</strong>";
                }
            
            ?>
            
        </div>
    </body>
</html>