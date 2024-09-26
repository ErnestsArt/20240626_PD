<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Piesakies webināram!</h1>

    <div>
        <form action="" method="post"></form>
        <label for="lietotajvards">Vārds - </label>
        <input type="text" name="" id="">
        <br>
        <label for="E-Mail">E-Mails - </label>
        <input type="email" name="" id="">
        <br>
        <select name="izvēle" id="">
            <option value="beginner">Beginner</option>
            <option value="intermediate">Intermediate</option>
            <option value="advanced">Advanced</option>
        </select>
    </div>

    <?php
    $cilveki = array ("janis kocins", "janis@gmail.com", "Intermediate", "gunars jocins", "dzonijs@inbox.lv", "beginner");
    print($cilveki);
    ?>

    <div>
    <p>Vai vēlies saņemt info par citiem mūsu organizētajiem pasākumiem?</p>
    <input type="radio" name="yes" id="Yes">
            <label for="yes">Yes</label>

            <input type="radio" name="no" id="No">
            <label for="no">No</label>
    </div>

    <div>
        <button>Submit</button>
    </div>
    <div>
    <a href="web/blog.php">Next</a>
    </div>
<script src="/app.js">/app.js</script>
</body>
</html>
