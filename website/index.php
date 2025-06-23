<?php
session_start();
if (empty($_SESSION)) {
    $_SESSION["hintCounter"] = 0;
    $_SESSION["foundNotes"] = array();
} else {
    if (!empty($_POST["hintPls"])) {
        $_SESSION["hintCounter"] += 1;
        unset($_POST["hintPls"]);
    }
}
//$_SESSION["notes"]["sound.rar"]="answer";
function sendMsg($string)
{
    echo "<div class='self'>";
    receiveMsg($string);
    echo "</div>";
}
function receiveMsg($string)
{
    echo "<div class='msg'>
        $string
        </div>";
}
$hints = array();
$hintsResponse = array();
$hints[] = "Die Experten meinen man muss zuerst die Datei entpacken.";
$hintsResponse[] = "Wird gemacht, Boss!";
$hints[] = "Es ist zwar eine Sounddatei, aber man kann absolut nichts raushören... Passen Sie auf, die Datei ist laut.";
$hintsResponse[] = "Vielen Dank für die Warnung, ich hätte bestimmt jetzt einen Tinitus, wenn ich mir die Datei normal angehört hätte.";
$hints[] = "Könnten wir die Datei vielleicht als Text wahrnehmen anstelle von Geräuschen? Vielleich finden wir in Textform etwas.";
$hintsResponse[] = "Ich mach mich sofort an die Arbeit.";
$hints[] = "Einige von unseren Leuten haben bereits Muster in der Textform gefunden, die meisten sagen in ASCII sind die Muster besonders leicht erkennbar.";
$hintsResponse[] = "Ich schau mal was ich da finde.";
$hints[] = "Die ersten Zeilen in Textform sind wohl für das .wav Format, aber die wichtigen Informationen stehen wahrscheinlich in den Data-Chunks.";
$hintsResponse[] = "Gut, dann muss ich auch nur die Data-Chunks. Das erspart mir Arbeit";
$hints[] = "Mehr konnte wir bisher nicht rausfinden... Vielleicht schickst du uns mal Informationen und wir schauen ob jemand anderes was du finden kann.";
$hintsResponse[] = "Alles klar, dann versuche ich mein Glück alleine weiter";


// von hier
$notes["Komprimierte Datei"] = "Das muss entpackt werden";
$noteKeys["Komprimierte Datei"] = array(".tar.gz", "rar");
//bis hier
//Sounddatei
$notes["Sound Datei"] = "Diese Datei gibt offensichtlich zwei unterscheidliche Töne wieder";
$noteKeys["Sound Datei"] = array("sound", ".wav");
//Hexdump
$notes["Hexdump"] = "Mit diesem Befehl kann man sich den ASCII Code einer Datei angucken ";
$noteKeys["Hexdump"] = array("hexdump", "-c");
//Channel Info
$notes["Channel Info"] = "Es scheint so als würde dies ein link zu einem Account auf irgendeiner Website sein...";
$noteKeys["Channel Info"] = array("channel/UCQdVTXX||zAvTY4UkmbxjQaDg", "channel/UCQdVTXXzAvTY4UkmbxjQaDg", "63 68 61 6e 6e 65 6c 2f  55 43 51 64 56 54 58 58", "7a 41 76 54 59 34 55 6b  6d 62 78 6a 51 61 44 67");
//Youtube Info
$notes["Youtube Info"] = "Ein Youtube Link und die erste Information";
$noteKeys["Youtube Info"] = array("https://www.yout||ube.com/watch?v=||dQw4w9WgXcQ", "https://www.youtube.com/watch?v=dQw4w9WgXcQ", "68 74 74 70 73 3a 2f 2f  77 77 77 2e 79 6f 75 74", "75 62 65 2e 63 6f 6d 2f  77 61 74 63 68 3f 76 3d", "64 51 77 34 77 39 57 67  58 63 51 00 00 00 00 00");
//Zeilen zählen
$notes["Zeilen zählen"] = "Mit wc -l können die Zeilen der Datei zählen um so zu sehen wie viele Informationen die Datei insgesamt erhält";
$noteKeys["Zeilen zählen"] = array("wc", "-l");
//Zeilenanzahl
$notes["Zeilenanzahl"] = "Das ist eine sehr große Zahl, eventuell kann man diese Sinvoll zerlegen um zwei Informationswerte zu bekommen";
$noteKeys["Zeilenanzahl"] = array("160513");
//Primzahl
$notes["Primzahl"] = "Primfaktorzerlegung scheint ein sehr wichtiger Teil in diesem Prozess zu sein";
$noteKeys["Primzahl"] = array("Primzahl", "Primfaktorzerlegung");
//Dimension
$notes["Dimension"] = "Dieser Wert könnte für eine zweidimensionale Abbildung sein";
$noteKeys["Dimension"] = array("151", "1063");
//#Der Dritte Existiert Nicht
$notes["Geheimnis"] = "Das scheint das Geheimnis des Hackertrios zu sein";
$noteKeys["Geheimnis"] = array("Der Dritte Existiert Nicht");

//Hackcodex
$notes["Hackcodex"] = "Das scheint der Hackercodex vom Hackertrio zu sein";
$noteKeys["Hackcodex"] = array("Hackcodex");
//Erledigt
$notes["Erledigt"] = "Das scheint die Liste der Erledigten Taten des Hackertrios zu sein";
$noteKeys["Erledigt"] = array("JfnAdufn");
//Hacker1Notiz
$notes["Hacker1Notiz"] = "Das scheinen wichtige Information von Tim Fischmann zu sein ";
$noteKeys["Hacker1Notiz"] = array("jFdtScenD");
//Hacker2Notiz
$notes["Hacker2Notiz"] = "Das scheinen wichtige Information von Jo El Human zu sein";
$noteKeys["Hacker2Notiz"] = array("Goddard");
//Hacker3Notiz
$notes["Hacker3Notiz"] = "Es scheint so als hat der dritte Hacker im Team keine wichtigen Information notiert, das ist merkwürdig";
$noteKeys["Hacker3Notiz"] = array("Hacker3Notiz");
//To-Do
$notes["To-Do"] = "Das ist die To-Do Liste des Hackertrios";
$noteKeys["To-Do"] = array("BcQfZaFM");

$notes["Passwort"] = "Das passwort um auf die richtige Homepage des Hackertrios zu kommen.";
$noteKeys["Passwort"] = array("J4aBfd87ksnH4sDa");




if (!empty($_GET["noteRequest"])) {
    foreach ($noteKeys as $key => $strings) {
        foreach ($strings as $string) {
            if (strpos($_GET["noteRequest"], $string) !== false) {
                $_SESSION["foundNotes"][$key] = $notes[$key];
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Das Hackertrio</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
    <div class="chatbox">

        <div class="chat">
            <div class="msg">
                Hallo, es ist dringend! Wir haben ein Problem mit dem berühmten Hackertrio. Sie haben kritische
                Informationen gegen uns in der Hand.
                Wir haben den Aufenthaltsort von 2 Mitgliedern ermittelt und können die beiden auch jederzeit in
                Gewahrsahm nehmen, doch das dritte Mitglied
                könnte die Informationen noch preisgeben und dann ist die ganze Operation umsonst gewesen. Kannst du uns
                helfen den Aufenthaltsort zu finden? Sie haben zwar eine öffentliche Website, aber wir kommen nicht an
                die verschlüsselten Daten ran. Da kommst du ins Spiel.
                </br>
                <a href="/login.php">Hier ist die Website.</a>
            </div>

            <div class="self">
                <div class="msg">
                    Ich helfe gerne
                </div>
                </br></br>
            </div>
            <?php
            foreach ($hints as $key => $hint) {
                if ($key < $_SESSION["hintCounter"]) {
                    receiveMsg($hint);
                    sendMsg($hintsResponse[$key]);
                }
            }
            if (!empty($_SESSION["noteRequest"]["Passwort"])) {
                echo "</br></br></br>";
                sendMsg("Ich hab die Entschlüsselung automatisiert! Das Passwort lautet J4aBfd87ksnH4sDa");
                receiveMsg("Das sind gute Nachrichten! Teilen Sie uns mit, falls Sie weitere nützliche Informationen finden.</br> Diese Nachricht wird sich selbst zerstören.");
            }
            if (!empty($_SESSION["foundNotes"]["Geheimnis"])) {
                echo "</br></br></br>";
                sendMsg("Es scheint als würde der Dritte in Wahrheit garnicht existieren, seine Existenz war wohl bloß eine Abschreckungstechnik.");
                receiveMsg("Sie haben ihrem Land große Dienste erwiesen! Unsere Spezialeinheiten können die beiden Hacker endlich gefahrlos festnehmen! </br>Diese Nachricht wird sich selbst zerstören.");
            }
            ?>
        </div>

        <div class="sendbox">
            <form>
                <label for="msg">Nachricht schicken:</label><br>
                <input class="input" type="text" id="msg" name="noteRequest">
                <input type="submit" value="Senden">
            </form>
            <form method="post">
                <input name="hintPls" type="submit" value="Hinweis">
            </form>
        </div>
    </div>
    <div class="notes">
        <h1>Notizen</h1>

        <?php $foundNotesRev = array_reverse($_SESSION["foundNotes"], true);
        foreach ($foundNotesRev as $key => $response) {
            echo "<div class='hint'>
                <div class='key'>$key</div>
                <div class='response'> $response</div>
            </div>";
        }
        ?>
        <div class="hint">
            <div class="key">Notizen</div>
            <div class="response"> Ich kann Schlüsselwörter etc. an den Boss schicken um mehr Notizen zu bekommen</div>
        </div>
    </div>

</body>

</html>