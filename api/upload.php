<div class="titulo">Upload</div>

<?php
print_r($_FILES);
if($_FILES && $_FILES["arquivo"])
{
    $pastaUpload = "./arquivos/";
    $nomeArquivo = $_FILES["arquivo"]["name"];
    $arquivo = $pastaUpload . $nomeArquivo;
    $tmp = $_FILES["arquivo"]["tmp_name"];

    if(move_uploaded_file($tmp, $arquivo))
    {
        echo "<br>Arquio valido e enviado com sucesso";
    } else {
        echo "<br>Erro ao enviar arquivo";
    }
}

?>

<form action="#" method="post" enctype="multipart/form-data">
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>

<style>
    input, button {
        font-size: 1.2rem;
    }
</style>