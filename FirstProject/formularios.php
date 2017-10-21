<!doctype html>

<html>
<head>
    <title> Formularios </title>
    <meta charset="utf-8" />
</head>

<body>

    <h1>Formulários</h1>
    <form>
        Login:<br>
        <input type="text" name="login"/><br>
        Senha:<br>
        <input type="password" name="senha"/><br>
        <input type="submit" value="Login"/>
    </form>

    <h1>Cadastre-Se</h1>
    <form>
        Login:<br>
        <input type="text"/><br>

        Senha:<br>
        <input type="radio" name="sexo"/>Masculino<br>
        <input type="radio" name="sexo"/>Masculino<br>

        Interesses:<br>
        <input type="checkbox"> Futebol<br>
        <input type="checkbox"> Cursos<br>
        <input type="checkbox"> Eletrônicos<br>

        Estado:<br>
        <select>
            <option>SP</option>
            <option>MG</option>
            <option>RJ</option>
            <option>RS</option>
        </select>
        <br>

        Observações:<br>
        <textarea></textarea>

        <input type="submit" value="Cadastrar"/>
    </form>

</body>
</html>
