<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Guest book</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <div id="page-wrapper">
        <section>
            <h1>Guest book</h1>
            <form method="post">
                <div class="form-group">
                    <label for="inputName">Your name:</label>
                    <input type="text" class="form-control" id="inputName">
                    <label for="inputTitle">Title:s</label>
                    <input type="text" class="form-control" id="inputTitle">

                    <label for="content">Leave a message:</label>
                    <textarea class="form-control" id="content" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">i maek post</button>
            </form>
        </section>
    </div>
</body>
</html>