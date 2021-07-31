# Sobre
Gerador de registros para auxiliar na hora de realizar inserts em tabelas de exercícios. Feito em PHP, HTML, CSS e Bootstrap.

# Principais variáveis
* Data de Nascimento limite:
  * [dataRand.php](dataRand.php) ```$ano = random_int(1960,2000);``` 1960 - Inicial / 2000 - Limite. 
   
* Quantidade de registros:
  * [index.php](index.php) ``` <?php for ($i=0; $i < 10; $i++) { ?> ``` e ```for ($s=0; $s < 11; $s++) { ?>```, você pode escolher a quantidade na tabela e no formato texto a partir da condição estipulada. __Atenção! Os registros do formato texto não são iguais aos da tabela.__
