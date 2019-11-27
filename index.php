<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anime-Chan</title>
    <link rel="stylesheet" href="build/landingpage.css">
</head>

<body>
    <nav class="navigation-bar" style="background-image: url('images/saoalization-banner.jpg');">
        <div class="navigation-overlay">
            <div class="seasons">
                <ul>
                    <li><a href="#">Winter 2020</a></li>
                    <li><a href="#">Spring 2020</a></li>
                    <li><a href="#">Summer 2019</a></li>
                    <li class="selected"><a href="#">Fall 2019</a></li>
                </ul>
            </div>
            <div class="sign-options">
                <ul>
                    <li><button type="button" id="signIn">Sign In</button></li>
                    <li><button type="button" id="signUp">Sign Up</button></li>
                </ul>
            </div>
            <div class="search-bar">
                <form action="index.php" method="get">
                    <input type="hidden" name="season" value="fall-2019">
                    <i class="fas fa-search "></i>
                    <input type="text" name="search" id="search" placeholder="Search anime...">
                </form>
            </div>
        </div>
    </nav>
    <div class="container" style="margin-top: -10rem;">
        <div class="columns is-desktop">
            <div class="column is-4"></div>
            <div class="column is-4">
                <div class="card shadow-4">
                    <img class="card-anime--image" src="images/saoalization.jpg" alt="Sao">
                    <div class="card-anime--title">
                        <p>Sword Art Online Alicization</p>
                    </div>
                    <div class="card-anime--content">
                        <a class="options" href="#"><i class="fas fa-ellipsis-v"></i></a>
                        <p class="episodes">Episode 7 of 25 Episodes airing in</p>
                        <p class="time-left">5 Days and 1 Hour</p>
                        <p class="score"><i class="fas fa-smile"><span>75% Score</span></i></p>
                        <p class="rating"><i class="fas fa-heart"><span>1 Rank</span></i></p>
                        <p class="description">Second part of Sword Art Online: Alicization.</p>
                        <ul class="genres">
                            <li>action</li>
                            <li>adventure</li>
                            <li>fantasy</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="column is-4"></div>
        </div>
        <div class="columns is-desktop">
            <div class="column is-4">
                <div class="card shadow-4">
                    <img class="card-anime--image" src="images/saoalization.jpg" alt="Sao">
                    <div class="card-anime--title">
                        <p>Sword Art Online Alicization</p>
                    </div>
                    <div class="card-anime--content">
                        <a class="options" href="#"><i class="fas fa-ellipsis-v"></i></a>
                        <p class="episodes">Episode 7 of 25 Episodes airing in</p>
                        <p class="time-left">5 Days and 1 Hour</p>
                        <p class="score"><i class="fas fa-smile"><span>75% Score</span></i></p>
                        <p class="rating"><i class="fas fa-heart"><span>2 Rank</span></i></p>
                        <p class="description">Second part of Sword Art Online: Alicization.</p>
                        <ul class="genres">
                            <li>action</li>
                            <li>adventure</li>
                            <li>fantasy</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="column is-4">
                <div class="card shadow-4">
                    <img class="card-anime--image" src="images/saoalization.jpg" alt="Sao">
                    <div class="card-anime--title">
                        <p>Sword Art Online Alicization</p>
                    </div>
                    <div class="card-anime--content">
                        <a class="options" href="#"><i class="fas fa-ellipsis-v"></i></a>
                        <p class="episodes">Episode 7 of 25 Episodes airing in</p>
                        <p class="time-left">5 Days and 1 Hour</p>
                        <p class="score"><i class="fas fa-smile"><span>75% Score</span></i></p>
                        <p class="rating"><i class="fas fa-heart"><span>2 Rank</span></i></p>
                        <p class="description">Second part of Sword Art Online: Alicization.</p>
                        <ul class="genres">
                            <li>action</li>
                            <li>adventure</li>
                            <li>fantasy</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="column is-4">
                <div class="card shadow-4">
                    <img class="card-anime--image" src="images/saoalization.jpg" alt="Sao">
                    <div class="card-anime--title">
                        <p>Sword Art Online Alicization</p>
                    </div>
                    <div class="card-anime--content">
                        <a class="options" href="#"><i class="fas fa-ellipsis-v"></i></a>
                        <p class="episodes">Episode 7 of 25 Episodes airing in</p>
                        <p class="time-left">5 Days and 1 Hour</p>
                        <p class="score"><i class="fas fa-smile"><span>75% Score</span></i></p>
                        <p class="rating"><i class="fas fa-heart"><span>2 Rank</span></i></p>
                        <p class="description">Second part of Sword Art Online: Alicization.</p>
                        <ul class="genres">
                            <li>action</li>
                            <li>adventure</li>
                            <li>fantasy</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-content--close">
                <button id="modal_close" type="button" class="btn-close">
                    <i class="fas fa-window-close"></i>
                </button>
            </div>
            <h1>Login</h1>
            <form action="" method="post">
                <div class="form-input">
                    <input type="text" class="form-control" placeholder="Username">
                </div>
                <div class="form-input">
                    <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="content-center">
                    <button type="submit" class="btn secondary" style="margin-top: 1.3rem;">Sign in</button>
                </div>
                <a href="" class="forgot-password">forgot password?</a>
                <p class="signup">
                    Don't have account? 
                    <a href="register.php">create account</a>
                </p>
            </form>
        </div>
    </div>
    <!-- <script src="build/js/landingpage.min.js"></script> -->
    <script type="module" src="build/js/landingpage/classes/modal.js"></script>
    <script type="module" src="build/js/landingpage/classes/SignInModal.js"></script>
    <script type="module" src="build/js/landingpage/landingpage.js"></script>
</body>

</html>