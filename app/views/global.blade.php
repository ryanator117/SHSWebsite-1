<!DOCTYPE html>
<html>
<head>
        <title></title>
        
        <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"> <!--Fix for IE bug (css display:table/table-cell)-->
        <meta name="author" content="Shyview Web Design Club">
        
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/scrollbar.css">
        
        <!--Adds section, article, aside, header, nav, and footer tags to old versions of IE-->
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <script src="js/jquery.js"></script>
        <script src="js/modernizr.js"></script>
        <script src="js/scrollbar.js"></script>
        <script src="js/main.js"></script>
        <script>
                $(document).ready(function () {
                        $('#announce ul li').each(function (index) {
                                $(this).hide();
                                $(this).delay(index * 40).fadeIn(400);
                        });
                });
        </script>
</head>
<body><div id="background" class="ignoreMe"><img src="images/bodyBG.jpg" width="100%" height="100%" class="ignoreMe"></div>
        <div id="container">
                <header>
                        <a href="index"><img src="images/headerBG.png" /></a>
                </header>
                <nav>
                        <ul>
                                <li><a href="index">Home</a></li>
                                <li><a href="students">Students</a></li>
                                <li><a href="parents">Parents</a></li>
                                <li><a href="faculty">Faculty</a></li>
                                <li><a href="clubs">Clubs</a></li>
                                <li><a href="sports">Sports</a></li>
                                <!--li><input type="text" id="search" /></li-->
                        </ul>
                </nav>
                @yield('content')
                <footer>
                        Website created by the Web Design Club.
                </footer>
        </div>
</body>
</html>