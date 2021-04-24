<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="This is the processing page for the Survey Form PHP exercise.">
        <title>HTML Table</title>
        <link rel="stylesheet" type="text/css" href="survey-form-style.css">
    </head>
    <body>
        <div>
            <h4>Submitted Information</h4>
            <ul class="processingPage">
                <li>Name: <span><?= $_POST["name"]; ?></span></li>
                <li>Dojo Location: <span><?= $_POST["dojo_location"]; ?></span></li>
                <li>Favorite Language: <span><?= $_POST["favorite_language"]; ?></span></li>
                <li>Comment: <span><?= $_POST["comment"]; ?></span></li>
            </ul>
            <button type="reset"><a href="survey-form.html">Go Back</a></button>
        </div>
    </body>
</html>