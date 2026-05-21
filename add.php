<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Page</title>
	<link rel="stylesheet" href="css/admin.css" />
</head>
<body>

    <header>
        <h1>Add New Page</h1>
        <nav>
          <a href="index.php">View Site</a>
          <a href="/phpmyadmin/index.php?route=/sql&db=fit1050&table=pages&pos=0">List Pages</a>
          <a href="add.php">Add New Page</a>
        </nav>
    </header>

    <main>
       
	    <!-- form to create new page -->
        <form method="post" action="save.php">

            <p>
                <label>
                    Title
                    <input name="title" size="50" required />
                </label>
            </p>

            <p>
                <label>
                    Path
                    <input name="path" required pattern="[a-z0-9\-]+" />
                </label>
            </p>

            <p>
                <label>
                    Content
                    <textarea name="content" cols="50" rows="10" required></textarea>
                </label>
            </p>

            <p>
                <button>Save</button>
            </p>

        </form>
	   
    </main>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</body>
</html>