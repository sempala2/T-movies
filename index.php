<?php require_once 'init-movies.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Movie center</title>
    <style>
        
        .banner-img{
            position: absolute;
            z-index: 1;
            width: 98%;
            height: 100%;
            overflow: hidden;
        }
        .banner-img img{
            width: 100%;
            z-index: 1;
            padding: 5px;
            height: 100%;
        }
    </style>
</head>
<body onscroll="myFunction()">
    <div class="root" >
        <div class="top-header" id="sticky">
            <div class="logo">
                <img src="img/movi.svg" alt="" height="25px" width="25px">
                T-Movie
            </div>
            <nav>
                <ul>
                    <a href="" class="active "><li>Home</li></a>
                    <div class="dropdown">
                        <a href="" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"><li>Movies</li></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">All</a></li>
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Adventure</a></li>
                        <li><a class="dropdown-item" href="#">Horror</a></li>
                        <li><a class="dropdown-item" href="#">Comedy</a></li>
                      </ul>
                    </div>
                    <div class="dropdown">
                        <a href="" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"><li>TV shows</li></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                    </div>
                    <div class="dropdown">
                        <a href="" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"><li>WEB Series</li></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                    </div>
                </ul>
            </nav>
            <div class="search">  
                <label class="label" for="search"><img src="img/search.svg" alt="" width="25px" height="25px"></label>
                <input type="search" class="input-search" name="search" placeholder="Search Movie here">
                <img class="menu" src="img/menu.svg" alt="" width="25px" height="25px">
              </div>
        </div>
        <div class="conainer-fluid main">
        <div class="row">
        <div class="banner col-md-8 col-sm-12">
            <div class="banner-img">
                <img src="<?php echo $movie_img ?>" alt="">
            </div>
                <div class="b-txt">
                    <h2 class="banner-title"><?php echo $users->original_title ?></h2>
                    <div class="banner-trailer"> <img src="img/youtube.svg" alt="" width="25px">Watch trailer</div>
                </div>

        </div>
        <div class="side col-md-4 col-sm-12">
            <div class="pics">
                <img src="<?php echo $img_arr[0] ?>" alt="">
                <img src="<?php echo $img_arr[2] ?>" alt="">
                <img src="<?php echo $img_arr[3] ?>" alt="">
                <img src="<?php echo $img_arr[4] ?>" alt="">
                <img src="<?php echo $img_arr[5] ?>" alt="">
                <img src="<?php echo $img_arr[6] ?>" alt="">
            </div>
        </div>
        </div>
        <section class="m-section row">
            <h2 style="margin-left:10%; font-size: 1.3rem;">New Releases <a href="" class="link"> Explore All</a></h2>
            <div class="m-list col-md-10 col-sm-12">
                <div class="m-item">
                    <div class="img">
                        <img src="<?php echo $p_img[0] ?>" alt="">
                    </div>               
                    <p><?php echo ''.$p_title[0].' Rating'.$p_rate[0].'' ?></p>
                </div>
                <div class="m-item">
                    <div class="img">
                    <img src="<?php echo $p_img[1] ?>" alt="">
                    </div>               
                    <p><?php echo $p_title[1] ?></p>
                </div>
                <div class="m-item">
                    <div class="img">
                    <img src="<?php echo $p_img[2] ?>" alt="">
                    </div>               
                    <p><?php echo $p_title[2] ?></p>
                </div>
                <div class="m-item">
                    <div class="img">
                    <img src="<?php echo $p_img[3] ?>" alt="">
                    </div>               
                    <p><?php echo $p_title[3] ?></p>
                </div>
                <div class="m-item">
                    <div class="img">
                    <img src="<?php echo $p_img[4] ?>" alt="">
                    </div>               
                    <p><?php echo $p_title[4] ?></p>
                </div>
                <div class="m-item">
                    <div class="img">
                    <img src="<?php echo $p_img[5] ?>" alt="">
                    </div>               
                    <p><?php echo $p_title[5] ?></p>
                </div>
                <div class="m-item">
                    <div class="img">
                    <img src="<?php echo $p_img[6] ?>" alt="">
                    </div>               
                    <p><?php echo $p_title[6] ?></p>
                </div>
                <div class="m-item">
                    <div class="img">
                    <img src="<?php echo $p_img[7] ?>" alt="">
                    </div>               
                    <p><?php echo $p_title[7] ?></p>
                </div>
            </div>
        </section>
        <section class="m-section row">
            <h2 style="margin-left:10%; font-size: 1.3rem;">Trending Movies <a href="" class="link"> Explore All</a></h2>
            
                <div class="m-list col-md-10 col-sm-12">
                    <div class="m-item">
                        <div class="img">
                            <img src="img/uncharted.jpg" alt="">
                        </div>               
                        <p>Uncharted</p>
                    </div>
                    <div class="m-item">
                        <div class="img">
                            <img src="/img/uncharted.jpg" alt="">
                        </div>               
                        <p>Uncharted</p>
                    </div>
                    <div class="m-item">
                        <div class="img">
                            <img src="/img/uncharted.jpg" alt="">
                        </div>               
                        <p>Uncharted</p>
                    </div>
                    <div class="m-item">
                        <div class="img">
                            <img src="/img/uncharted.jpg" alt="">
                        </div>               
                        <p>Uncharted</p>
                    </div>
                    <div class="m-item">
                        <div class="img">
                            <img src="/img/uncharted.jpg" alt="">
                        </div>               
                        <p>Uncharted</p>
                    </div>
                    <div class="m-item">
                        <div class="img">
                            <img src="/img/uncharted.jpg" alt="">
                        </div>               
                        <p>Uncharted</p>
                    </div>
                    <div class="m-item">
                        <div class="img">
                            <img src="/img/uncharted.jpg" alt="">
                        </div>               
                        <p>Uncharted</p>
                    </div>
                    <div class="m-item">
                        <div class="img">
                            <img src="/img/uncharted.jpg" alt="">
                        </div>               
                        <p>Uncharted</p>
                    </div>
                </div>
            
        </section>
        <section class="m-section row">
            <h2 style="margin-left:10%; font-size: 1.3rem;">Trending Series <a href="" class="link"> Explore All</a></h2>
            <div class="m-list col-md-10 col-sm-12">
                <div class="m-item">
                    <div class="img">
                        <img src="/img/uncharted.jpg" alt="">
                    </div>               
                    <p>Uncharted</p>
                </div>
                <div class="m-item">
                    <div class="img">
                        <img src="/img/uncharted.jpg" alt="">
                    </div>               
                    <p>Uncharted</p>
                </div>
                <div class="m-item">
                    <div class="img">
                        <img src="/img/uncharted.jpg" alt="">
                    </div>               
                    <p>Uncharted</p>
                </div>
                <div class="m-item">
                    <div class="img">
                        <img src="/img/uncharted.jpg" alt="">
                    </div>               
                    <p>Uncharted</p>
                </div>
                <div class="m-item">
                    <div class="img">
                        <img src="/img/uncharted.jpg" alt="">
                    </div>               
                    <p>Uncharted</p>
                </div>
                <div class="m-item">
                    <div class="img">
                        <img src="/img/uncharted.jpg" alt="">
                    </div>               
                    <p>Uncharted</p>
                </div>
                <div class="m-item">
                    <div class="img">
                        <img src="/img/uncharted.jpg" alt="">
                    </div>               
                    <p>Uncharted</p>
                </div>
                <div class="m-item">
                    <div class="img">
                        <img src="/img/uncharted.jpg" alt="">
                    </div>               
                    <p>Uncharted</p>
                </div>
            </div>
        </section>
    </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        var bar = document.getElementById("sticky")
        window.onscroll = function() {

        // pageYOffset or scrollY
        if (window.pageYOffset > 0) {
            bar.classList.add('dark')
        } else {
            bar.classList.remove('dark')
        }
        }
        $('#s-icon').click(function() {
           $('#s-input').toggleClass()
        })
    </script>
</body>
</html>