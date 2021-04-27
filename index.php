<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulář</title>
</head>
<body>
<h1>Formulář</h1>
    <form action="submit.php" method="post">
    <label for="name"> Jméno </label>
    <input type="name" name="name" id="name">
    <br>
    <label for="lastname"> Příjmení </label>
    <input type="lastname" name="lastname" id="lastname">
    <br>
    <br>
    <label for="gender"> Pohlaví </label>
    <br>
    <input type="radio" name="gender" id="male" value="male">
    <label for="male"> Muž </label>
    <input type="radio" name="gender" id="female" value="female">
    <label for="female"> Žena </label>
    <input type="radio" name="gender" id="note" value="none">
    <label for="none">Nechci uvádět</label>
    <br>
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="email">
    <br>
    <br>
    <select name="otazka" id="otazka">
    <option value="bydliste">Kde bydlíte?</option>
    <option value="roknarození">V kterém roce jste se narodil?</option>
    <option value="hracka">Jaká je vaše oblíbená hračka z dětství?</option>
    </select>  
    <br> 
    <input for="odpoved" name="odpoved" id="odpoved" placeholder="odpověď">
    <br>
    <br>
    <input type="submit" value="Odeslat">
    </form>
</body>
</html> 
