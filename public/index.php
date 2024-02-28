<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/style.css">
    <title>Random Number Generator</title>
</head>
<body>
<div class="container">
    <button onclick="generateRandom()">Change the number</button>
    <h1 id="randomNumber"><?php include 'generate_random_number.php'; ?></h1>
</div>
    
<script>
    function generateRandom() {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                document.getElementById("randomNumber").innerHTML = xhr.responseText;
            }
        };
        xhr.open("GET", "generate_random_number.php", true);
        xhr.send();
    }

</script>
</body>
</html>