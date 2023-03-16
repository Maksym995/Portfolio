<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Tutoriels</title>
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>

<?php 
    include_once "inc/menuView.php" 
?>

<div class="tutodiv">
    <h2>JavaScript : les variables, les types, les opérateurs</h2>
    <div>
        <p>En JavaScript, pour les variables, on utilise let suivi du nom que l’on veut lui donner.<br><br>
        let lieuFormation = « CF2M » ;<br>
                        let anneeFormation = 2023 ;<br><br><br>
        Pour plus de précision et de lisibilité on peut assembler plusieurs mots pour le nom de la <br>
        la variable. <br><br>
        Il est plus confortable pour la lecture d’utiliser le dit « Camel case » qui est une manière <br>
        d’écrire le nom de sa variable en commençant pas une lettre minuscule (premier mot) ;<br>
        les suivant commenceront par une majuscule.<br><br>
        La variable lieuFormation contient CF2M entre crochets car il contient du texte et <br>
        éventuellement des chiffres, c’est ce qui est appelé une variable de type : string. <br> <br>
        Les variables de type let peuvent êtres redéfinis par la suite. <br><br>
        Il existe aussi des variables qui ne peuvent êtres redéfinis, ce sont des constantes. <br><br>
        	const vie = « On ne vit qu’une fois » ;<br>
        const pi = « 3.14159265 » ;
        </p>
    </div>

    <div>
        
       <h4> Il existe 8 types de données que l’on peut rencontrer dans JavaScript.</h4>
        <p>
        1.	String <br><br> let nom = « Banque Centrale Européenne » ;<br>
                    let monnaieDigitale = « CBDC » ;<br><br><br>
        2.	Number <br><br> let longueur = 100 ; <br>
                    let largeur = 50 ; <br><br>
        Un number est un nombre entier, en anglais : integer (int) <br><br><br>
        3.	Booleans <br><br>let vrai = true ;<br>
                    let faux = false ;<br><br>
        Un Boolean renvoie la valeur true ou false pour signalé une égalité ou son contraire. <br><br><br>

        4.	Objets <br><br>
        const language = {nom : « Javascript », anneeCreation : 1995, auteur : « Brendan Eich »} ;<br><br>
        Un Objet est en quelque sorte une variable mais contient plusieurs informations à <br>propos d’un même sujet. <br><br><br>
        5.	Bigint  <br><br>	const plusGrandEntier = 7534159775860258n ;<br><br>
            Il existe d’autres exemples de Bigint, ils peuvent être convertis en number(int)<br> mais la précision risque d’être perdue.<br><br> <br>
        6.	Et   7.  Undefined et Null <br><br>
        Une variable pour laquelle aucune valeur n’a été définie sera undefined. <br>
        Un résultat pour lequel il n’y a aucune valeur donnera en retour null. <br>
        Nous devons comprendre que undefined est peut-être l’équivalent de null mais <br> que ce n’est pas toujours le cas. <br><br><br>

        8.	Symboles <br>
        Une valeur symbole est une valeur qui est conçue pour être unique. Elles <br> permettent d’ajouter des clés de propriétés uniques à un objet afin que celles-ci <br> n’entrent jamais en conflit avec d’autres clés ajoutées par un autre code. <br>
        Lorsque l’on appellera Symbol.for(« info ») c’est toujours la même <br> information(info) qui ressortira.
        </p>
    </div>
    <div>
        <p>
        Les opérateur, il en existe de deux sorte les premiers sont ceux qui sont ceux que <br> nombreux ont déjà utiliser.</p>
       <h4> Les opérateurs arithmétiques</h4>
        </p>

            <li> ‘+’ pour l’addition</li>
            <li>‘-‘ pour la soustraction</li>
            <li>‘/’ pour la division</li>
            <li>‘*’ pour la multiplication</li>
            <li>‘**’ pour l’exposant </li>
            <li>‘%’ modulo, pour le reste d’une division</li>
        <h4>
        Et pour la programmation, nous utiliserons aussi : <br>
        Les opérateurs de comparaison 
        </h4>
        <br>
            <li>‘==’ égal</li>
            <li>‘===’strictement égal (valeur et type)</li>
            <li>‘ !=’ non égal </li>
            <li>‘ !==’ non égal (valeur et type)</li>
            <li>‘<’ inférieur</li>
            <li>‘>’supérieur</li>
            <li>‘<=’ inférieur ou égal </li>
            <li>‘>=’ supérieur ou égal</li>
    </div>
</div>

<div class="graphikart">
    <div class="youtube">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/EvHAiskwHvE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
        <div class="graphikarttext">
            <h2>Apprendre le JavaScript : Les fonctions <br>
            Par Graphikart.fr
            </h2>
            <p>J'apprécie tout particulièrement les tutos de Graphikart, ils sont toujours clairs et assez concis que pour ne pas devenir lourd sur la longueur. Les explications sur la synthaxe, la portée des fonctions, le this et les fonctions flechées tout ces sujets vulgarisés. bien-sûr il est possible de pousser plus loin leur compréhension mais l'essentiel pour débuter y est.</p>
        </div>
</div>

<div class="tutofooter">
<?php 
    include_once "inc/footerView.php" 
?>
</div>
</body>
</html>