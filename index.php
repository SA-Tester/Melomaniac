<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="icon" type="image/png" href="assets/logos/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5.0.2 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/audio-player.css">
</head>

<body>
    <!-- Topbar -->
    <div>
        <div class="topbar">
            <div class="modal-layer" id="layer" onclick="toogleSidebar()"></div>

            <nav class="navbar navbar-expand-lg nav-dashboard  shadow">
                <button onclick="myFunction()" class="navbar-toggler p-2 rounded w-auto" style="transform: rotate(180deg)">
                    <img src="./assets/slider-icon.svg" alt="menu" class="menu-icon">
                </button>

                <button class="navbar-toggler  p-2 rounded w-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul>
                        <li>
                            <a href="user-premium.html">Premium</a>
                        </li>
                        <li>
                            <a href="artist-main.html">For Artists</a>
                        </li>
                        <li class="divider">|</li>
                        <li>
                            <a href="user-signup.php" id="signup" style="display: block">Sign Up</a>
                        </li>
                        <li class="text-center">
                            <a href="./scripts/logout.php" id="logout" style="display: none;">Logout</a>
                        </li>
                        <li>
                            <a href="./user-login.php" id="login" style="display: block;">Login</a>
                        </li>

                        <?php
                        if (isset($_SESSION["listener_id"]) || isset($_SESSION["artist_id"])) {
                        ?>
                            <script>
                                document.getElementById("signup").style.display = "none";
                                document.getElementById("logout").style.display = "block";
                                document.getElementById("login").style.display = "none";
                            </script>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div class="main-container">
        <div class="melomaniac-playlists">
            <h2>Melomaniac Playlists</h2>

            <div class="list">
                <div class="item">
                    <img src="assets/album-art/Divide.png" />
                    <div class="play" onclick="playPauseTrack()">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>Old Memories</h4>
                    <p>Remembering the memories of a lifetime</p>
                </div>

                <div class="item">
                    <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>RapCaviar</h4>
                    <p>New Music from Lil Baby, Juice WRLD an...</p>
                </div>

                <div class="item">
                    <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>All out 2010s</h4>
                    <p>The biggest spmgs pf tje 2010s. Cover:...</p>
                </div>

                <div class="item">
                    <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>Rock Classics</h4>
                    <p>Rock Legends & epic songs that continue t...</p>
                </div>

                <div class="item">
                    <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>Chill Hits</h4>
                    <p>Kick back to the best new and recent chill...</p>
                </div>

                <div class="item">
                    <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>Viva Latino</h4>
                    <p>Today's top Latin hits elevando nuestra...</p>
                </div>

                <div class="item">
                    <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>Mega Hit Mix</h4>
                    <p>A mega mix of 75 favorites from the last...</p>
                </div>

                <div class="item">
                    <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>All out 80s</h4>
                    <p>The biggest songs of the 1090s.</p>
                </div>
            </div>
        </div>

        <div class="melomaniac-playlists">
            <h2>Focus</h2>
            <div class="list">
                <div class="item">
                    <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>Peaceful Piano</h4>
                    <p>Relax and indulge with beautiful piano pieces</p>
                </div>

                <div class="item">
                    <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>Deep Focus</h4>
                    <p>Keep calm and focus with ambient and pos...</p>
                </div>

                <div class="item">
                    <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>Instrumental Study</h4>
                    <p>Focus with soft study music in the...</p>
                </div>

                <div class="item">
                    <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>chill lofi study beats</h4>
                    <p>The perfect study beats, twenty four...</p>
                </div>

                <div class="item">
                    <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>Coding Mode</h4>
                    <p>Dedicated to all the programmers out there.</p>
                </div>

                <div class="item">
                    <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>Focus Flow</h4>
                    <p>Uptempo instrumental hip hop beats.</p>
                </div>

                <div class="item">
                    <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>Calm Before The Storm</h4>
                    <p>Calm before the storm music.</p>
                </div>

                <div class="item">
                    <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>Beats to think to</h4>
                    <p>Focus with deep techno and tech house.</p>
                </div>
            </div>
        </div>

        <div class="melomaniac-playlists">
            <h2>Mood</h2>
            <div class="list">
                <div class="item">
                    <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>Mood Booster</h4>
                    <p>Get happy with today's dose of feel-good...</p>
                </div>

                <div class="item">
                    <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>Feelin' Good</h4>
                    <p>Feel good with this positively timeless...</p>
                </div>

                <div class="item">
                    <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>Dark & Stormy</h4>
                    <p>Beautifully dark, dramatic tracks.</p>
                </div>

                <div class="item">
                    <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>Feel Good Piano</h4>
                    <p>Happy vibes for an upbeat morning.</p>
                </div>

                <div class="item">
                    <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>Feelin' Myself</h4>
                    <p>The hip-hop playlist that's a whole mood...</p>
                </div>

                <div class="item">
                    <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>Chill Tracks</h4>
                    <p>Softer kinda dance</p>
                </div>

                <div class="item">
                    <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>Feel-Good Indie Rock</h4>
                    <p>The best indie rock vibes - classic and...</p>
                </div>

                <div class="item">
                    <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>idk.</h4>
                    <p>idk.</p>
                </div>
            </div>
            <div style="margin-bottom: 180px;"></div>
            <hr>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/23cecef777.js" crossorigin="anonymous"></script>

    <!-- Audio Player Rendered as a Template-->
    <script src="js/render-player.js"></script>
    <script src="js/audio-player.js"></script>

    <script src="js/render-siderbar.js"></script>
    <script src="js/render-topbar.js"></script>
</body>

</html>