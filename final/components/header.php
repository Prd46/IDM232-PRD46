<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $document_title?></title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/stylesheet.css">
</head>
<body>
    <header>
        <div class="container cont__head">
            <div class="header__mobile">
            <h1 class="header__title">Progrecipes</h1>
            <img class="header__menuButton" src="https://via.placeholder.com/50" />
        </div>
            <input type="search" class="header__search" placeholder="What are you hungry for?">
            <div class="header__recipes"><a href="index.php" class="header__button">Recipes</a></div>
            <div class="header__login"><p class="header__button">Login</p></div>
            <!--<div class="header__loginModal">
                <input type="email">
                <input type="password">
                <p>Don't have an account?</p>
                <p>Sign up</p>
            </div> -->
        </div>
        <div class="header__mobileModal">
            <div class="modal__button">Recipes</div>
            <div class="modal__button">Filters</div>
            <div class="modal__button">Login</div>
        </div>
    </header>