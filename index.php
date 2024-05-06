<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>
<body>
    <form action="./server.php" method ="POST">
        <label for="word">Parola</label>
        <input type="text" name="word" id="word">
        <label for="text">TESTO</label>
        <textarea name="message" name="" id="text" cols="30" rows="10"></textarea>

        <button>INVIA</button>
    </form>
</body>
</html>