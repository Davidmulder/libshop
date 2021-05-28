<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="add.php">


<p>&nbsp;</p>
<p>
  <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome" />
  </p>
  <p>
    <label for="cpf">CPF</label>
    <input type="text" name="cpf" id="cpf" />
  </p>
  <p>
    <label for="cel">Celular</label>
    <input type="text" name="cel" id="cel" />
  </p>
  <p>
    <label for="email">E-mail</label>
    <input type="text" name="email" id="email" />
  </p>
  <p>
    <label for="tipo">Tipo de Veiculo</label>
    <select name="tipo" id="tipo">
    <option selected="selected"></option>
    <option value="1">Motocicleta</option>
        <option value="2">Automovel</option>
    <option value="3">Pick-up</option>
    <option value="4">Caminhão 3/4</option>
        <option value="5">Caminhão</option>

    </select>
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Submit" />
    <input name="cod" type="hidden" id="cod" value="2" />
  </p>
</form>
</body>
</html>