<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulando strings em php</title>
</head>

<body>

    <div>
        <?php
        # strtolower e strtoupper.
        $nome = "Thiago";
        echo "seu nome é $nome " . strtolower($nome);
        print "<br>";
        echo "Seu nome é $nome " . strtoupper($nome);

        # ucfirst
        $name = "thiago roberto";
        print "<br><br>";
        echo "Seu nome é $name " . ucfirst(strtolower($name));

        print "<br><br>";
        #ucwords
        $n = "Thiago roberto araujo santos";
        echo "Seu nome é " . ucwords($n);

        print "<br><br>";
        # strrev
        $n = "Thiago roberto araujo santos";
        echo "Seu nome é " . strrev($n);

        print "<br><br>";
        #strpos
        $frase = "Estou aprendendo PHP";
        $pos = stripos($frase, "php"); #stripos e strpos
        echo "$frase <br>";
        echo "A string foi encontrada na posição $pos";

        print "<br><br>";
        #substr_count
        $frase = "Estou aprendendo PHP no curso em video de PHP, este é o melhor curso de PHP";
        $cont = substr_count($frase, "PHP");
        echo "PHP encontrado $cont vezes";

        print "<br><br>";
        #substr
        $site = "Curso em Video";
        $sub = substr($site, 5);
        echo "$sub ";

        print "<br><br>";
        #str_pad
        $nomee = "Thiago";
        $novo = str_pad($nomee, 30, " ", STR_PAD_LEFT);
        print("meu professor $novo é lindo");

        print "<br><br>";
        #str_repeat
        $txt = str_repeat("PHP", 5);
        echo "O texto gerado foi $txt <br>";
        print(str_repeat("-", 100));

        print "<br><br>";
        #str_replace
        $frase = "Gosto de estudar, estudar é muito legal";
        $nfrase = str_replace("estudar", "PHP", $frase);
        print($nfrase)
        ?>
    </div>
</body>

</html>