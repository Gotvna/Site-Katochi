<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Association Katochi</title>
</head>

<body>
    <?php
        require  'requires/navbar.php';
    ?>



    <ul class="sidenav black" id="mobile-demo">
        <li><a class="yellow-text" href="#event">Event</a></li>
        <li><a class="yellow-text" href="#twitch">Chaîne Twitch</a></li>
        <li><a class="yellow-text" href="#articles">Articles</a></li>
    </ul>


    <div class="header">
        <div class="logo center">
            <div class="parallax-container">
                <div class="parallax">
                    <img src="img/backHeader.jpg">
                </div>
                <img src="img/LOGO.png">
                <div class="description">
                    <div class="title center">
                        <h1>Katochi</h1>
                    </div>
                    <div class="row content center">

                        <div class="col offset-l3 offset-m1 l6 m10 s12  ">
                            <p class="text-header"> Lorem ipsum dolor sit amet ita quis Expedita, vitae. Nihil culpa quasi, quia hic sint autem, numquam maxime reprehenderit totam quos aliquam exercitationem vero provident nostrum placeat expedita odit, assumenda alias beatae quod in dignissimos. Maiores fugiat recusandae, earum consectetur autem placeat eos sint quibusdam alias et optio vitae ipsa reprehenderit minima ex ullam non cupiditate consequuntur ad eveniet quas. Aut placeat architecto natus, voluptatum temporibus exercitationem, magnam explicabo eveniet quaerat ratione quas unde repudiandae perferendis quos facilis omnis possimus dolorum ullam in sunt molestias voluptatibus odio dicta debitis! Quos iure pariatur excepturi libero labore alias quasi, totam ipsa, mollitia praesentium assumenda perspiciatis, atque dolorum temporibus facere natus consectetur delectus autem quisquam quod!</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="event" class="event carousel carousel-slider center">
        <div class="carousel-fixed-item ">
            <h2>Evenements</h2>
        </div>
        <div class="carousel-item red white-text" href="#one!">
        </div>
        <div class="carousel-item amber white-text" href="#two!">
        </div>
        <div class="carousel-item green white-text" href="#three!">
        </div>
        <div class="carousel-item blue white-text" href="#four!">
        </div>
    </div>

    <div id="twitch" class="twitch">
        <div class="title center">
            <h2>Notre émission twitch hebdomadaire</h2>
        </div>
        <div class="row">
            <div class="col l6 m6 s12">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt a esse nemo labore qui voluptates. Dolor accusantium perspiciatis soluta distinctio explicabo ipsa adipisci voluptatibus deleniti doloremque minima, atque, natus minus placeat dolores, rem quia reiciendis sequi et. Modi nisi, placeat voluptate aliquid, ipsa magnam quidem cum distinctio consequatur vero fuga?</p>
            </div>
            <div class="col l6 m6 s12 carousel carousel-slider">
                <a class="carousel-item red" href="#one!"></a>
                <a class="carousel-item blue" href="#two!"></a>
                <a class="carousel-item green" href="#three!"></a>
                <a class="carousel-item yellow" href="#four!"></a>
            </div>
        </div>
        <div class="logo_twitch center">
            <img src="https://img.icons8.com/bubbles/200/000000/twitch-wordmark.png" href="#" />
        </div>    
    </div>

<!-- --------------------------------    ARTICLE PART    -------------------------------- -->
    <div id="articles" class="row">
        <div class="col l3 m6 s6">
            <div class="card">
                <div class="card-image">
                    <img src="img/backHeader.jpg">
                    <span class="card-title">Card Title</span>
                </div>
                <div class="card-content">
                    <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                    <a href="#" class="yellow-text">En savoir plus à propos de l'article</a>
                </div>
            </div>
        </div>

        <div class="col l3 m6 s6">
            <div class="card">
                <div class="card-image">
                    <img src="img/backHeader.jpg">
                    <span class="card-title">Card Title</span>
                </div>
                <div class="card-content">
                    <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                    <a href="#" class="yellow-text">En savoir plus à propos de l'article</a>
                </div>
            </div>
        </div>

        <div class="col l3 m6 s6">
            <div class="card">
                <div class="card-image">
                    <img src="img/backHeader.jpg">
                    <span class="card-title">Card Title</span>
                </div>
                <div class="card-content">
                    <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                    <a href="#" class="yellow-text">En savoir plus à propos de l'article</a>
                </div>
            </div>
        </div>

        <div class="col l3 m6 s6">
            <div class="card">
                <div class="card-image">
                    <img src="img/backHeader.jpg">
                    <span class="card-title">Card Title</span>
                </div>
                <div class="card-content">
                    <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                    <a href="#" class="yellow-text">En savoir plus à propos de l'article</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col offset-l5 l4 offset-m4 offset-s2">
            <a class="waves-effect waves-light btn-large yellow-text black"><i class="material-icons right">arrow_downward</i>Afficher plus d'articles</a>
        </div>
    </div>

    <?php
    require 'requires/footer.php'
    ?>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>