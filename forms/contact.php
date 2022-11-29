<?php
//Variáveis

var_dump($_POST);


$nome = $_POST['name'];
$email = $_POST['email'];
$assunto = $_POST['subject'];
$mensagem = $_POST['message'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

$arquivo = "
<style type='text/css'>
body {
margin:0px;
font-family:Verdane;
font-size:12px;
color: #666666;
}
a{
color: #666666;
text-decoration: none;
}
a:hover {
color: #FF0000;
text-decoration: none;
}
</style>
  <html>
      <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
          <tr>
            <td>
<tr>
               <td width='500'>Assunto:$assunto</td>
              </tr>
              <tr>
                <td width='320'>Nome:<b>$nome</b></td>
   </tr>
    <tr>
                <td width='320'>E-mail:<b>$email</td>
              </tr>
   <tr>
                
              </tr>
              <tr>
                <td width='320'>Mensagem:$mensagem</td>
              </tr>
          </td>
        </tr>
        <tr>
          <td>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></td>
        </tr>
      </table>
  </html>
";

//enviar

  // emails para quem será enviado o formulário
  $emailenviar = "henrique_vilela_f@hotmail.com";
  $destino = $emailenviar;
  $assunto = "Contato pelo Site";

  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: $nome <$email>';
  //$headers .= "Bcc: $EmailPadrao\r\n";

  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  if($emailenviar){
    $sucesso = 
  }
?>


