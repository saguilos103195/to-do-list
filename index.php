<!DOCTYPE html>
<html>
<head>
    <title>to-do</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="full">
        <div class="clearfix wrapper">
            <form class="form" action="post.php" method="POST">
                <ul class="remove-bullet">
                    <li><input class="title" type="text" name="title" placeholder="Enter Title"></li>
                    <li><input class="date" type="date" name="date" placeholder="Enter Date"></li>
                    <li><input class="message" type="area" name="message" placeholder="Enter Message"></li>
                    <li><input class="post" type="submit" name="post" value="Post"></li>
                </ul>
            </form>
        </div>

    </div>
</body>
</html>
