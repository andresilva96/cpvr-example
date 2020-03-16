<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload" method="post" enctype="multipart/form-data">
        Select any file to upload:
        <input type="file" name="arquivo" id="arquivo">
        <br>
        <button type="submit">Submit</button>
    </form>

    <form action="generate" method="post" enctype="multipart/form-data">
        Select image jpg to upload:
        <input type="file" name="foto" id="foto">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
