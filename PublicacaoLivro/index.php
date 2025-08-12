<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria</title>
</head>
<body>
   
    <?php
        require_once 'Pessoa.php';
        require_once 'Livro.php';

        $p[0] = new Pessoa("Pedro", 22, "M");
        $p[1] = new Pessoa("Maria", 31, "F");

        $l[0] = new Livro("Dom Quixote", "Miguel de Cervantes", 863, $p[0]);
        $l[1] = new Livro("1984", "George Orwell", 328, $p[1]);
        $l[2] = new Livro("PHP Avançado", "Ana Paula", 800, $p[1]);
        
        $l[2]->folhear(81);
        $l[1]->avancarPag(7);

        $l[2]->detalhes();
        $l[1]->detalhes();
        
       

    ?>

</body>
</html>
