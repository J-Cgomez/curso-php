<?php 
$name = "Cesar";
$isDev = true;
$age = 28;

$isOld = $age > 30;

if ($isOld) {
    echo "<h2> ERES VIEJO, LO SIENTO </h2>";
}elseif ($isDev) {
    echo "<h2> NO ERES VIEJO, PERO ERES DEV, ESTAS JODIDO! </h2>";
}else {
    echo "<h2> ERES JOVEN , FELICIDADES! </h2>";
}

define('LOGO_URL', 'https://e7.pngegg.com/pngimages/6/754/png-clipart-university-of-la-frontera-speech-language-pathology-phone-este-lustre-logo-head.png');

$output = "Hola \"$name\" , con edad de $age . 😉";

$outPutAge = match(true){
$age < 2    => "Eres un bebé, $name 👶",
$age < 10   => "Eres un niño, $name 🧒",
$age < 18   => "Eres un Adoslescente, $name 👦",
$age == 18  => "Eres mayor de edad, $name 🍻",
$age < 40   => "Eres un adulto joven, $name 👨‍🦰",
$age < 60   => "Eres un adulto viejo, $name 👨‍🦳",
default     => "Hueles mas a madera que a fruta, $name 🧓"
};

$BestLenguages = ["PHP", "JAVASCRIPT", "PYTHON"];
$BestLenguages[] = "C++";
$BestLenguages[] = "JAVA";

const NOMBRE = 'Juan Jose';

?>

<ul>
    <?php foreach ($BestLenguages as $key => $Lenguage) : ?> 
            <li> <?= $key ." " . $Lenguage?> </li>    

    <?php endforeach ?>
        
    

</ul>

<h2><?= $outPutAge ?></h2>

<?php 

if ($isOld) {
    echo "<h2> ERES VIEJO, LO SIENTO </h2>";
}elseif ($isDev) {
    echo "<h2> NO ERES VIEJO, PERO ERES DEV, ESTAS JODIDO! </h2>";
}else {
    echo "<h2> ERES JOVEN , FELICIDADES! </h2>";
}
?>

























<img src="<?= LOGO_URL ?>" alt="PHP Logo" width="300">
<h1>
<?= NOMBRE ?>
</h1>
<style>
    :root{
        color-scheme: ligth dark;
    }

    body{
        display: grid;
        place-content: center;
    }
</style>