<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/navbar_style.css" />
</head>
<body>
    <!-- Top bar header -->
    <header>
        <div class="logo">
            <a class="no-underline" href="home.php">
                Pyrogram
            </a>
        </div>
        <a class="messages-icon no-underline" href="messages.php">
            <img class="navbar-icon" src="../img/messages.png" alt="Messages">
        </a>
    </header>

    <!-- Content to be added with PHP later -->
    <main>
    <?php
    if (isset($templateParams["name"])) {
        require("templates/".$templateParams["name"]);
    } else {
        //TODO: fix this shit
        //require("templates/index.php");
    }
    ?>
        <!-- scroll down test--->
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <!-- scroll down test--->
    </main>

    <!-- Navigation bar -->
    <nav>
            <a class="home-icon no-underline" href="home.php">
                <img class="navbar-icon" src="../img/home.png" alt="Home"/>
            </a>
            <a class="search-icon no-underline" href="search.php">
                <img class="navbar-icon" src="../img/search.png" alt="Search"/>
            </a>
            <a class="create-icon no-underline" href="create.php">
                <img class="navbar-icon" src="../img/create.png" alt="Create"/>
            </a>
            <a class="notifications-icon no-underline" href="notifications.php">
                <img class="navbar-icon" src="../img/notifications.png" alt="Notifications"/>
            </a>
            <a class="profile-icon no-underline" href="profile.php">
                <img class="navbar-icon" src="../img/profile.png" alt="Profile"/>
            </a>
    </nav>
</body>
</html>
