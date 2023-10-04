<div id="sucesso" style="min-height: 100vh;">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<span id="check" class="material-symbols-outlined">
done
</span>
<?php 

$name = $_REQUEST['nome'];
$email= $_REQUEST['email'];
$assunto = $_REQUEST['assunto'];
$mensagem = $_REQUEST['mensagem'];

echo"<h2> $name, mensagem enviada com sucesso!!</h2>";

?>
  <p class="p1">Obrigado por entrar em contato conosco. Sua mensagem foi recebida com sucesso.</p>
  <p class="p1">Aqui estão os detalhes da sua mensagem:</p>
  <ul>
    <li><strong>Nome:</strong> <?php echo $name; ?></li>
    <li><strong>Email:</strong> <?php echo $email; ?></li>
    <li><strong>Assunto:</strong> <?php echo $assunto; ?></li>
    <li><strong>Mensagem:</strong> <?php echo $mensagem; ?></li>
  </ul>
  <p class="p1">Voltar para <a href="?pg=conteudo">BLOG</a>.</p>
</div>