
<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>Tools Online</title>
        <meta name="description" content="Tools Online">
        <meta name="viewport" content="width=device-width,initial-scale=1">

        <link rel="stylesheet" href="https://getcomposer.org//css/style.css?v=10">
        <link rel="stylesheet" href="https://getcomposer.org//css/libs/prism.css?v=6">

        <script src="https://getcomposer.org//js/libs/modernizr-2.0.6.min.js"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/docsearch.js/2/docsearch.min.css">
    </head>

    <body>
        <div id="container">
            <header>
                            </header>
            <div id="main" role="main">
                    <div class="logo">
        <img style="width:240px" src="https://unixtitan.net/images/miku-drawing-professional-5.png">
        <h1 class="slogan">
            Tools Online
        </h1>
        <p class="latest">Latest: v0.0.1</p>
    </div>

    <p class="buttons">
        <a href="#">CSRF Online</a>
        <a href="#">Admin Finder</a>
    </p>
    <p class="buttons">
        <a href="#">Coming Soon</a>
        <a href="#">Coming Soon</a>
    </p>
    <p class="buttons">
        <a href="#">Coming Soon</a>
        <a href="#">Coming Soon</a>
    </p>
            </div>
            <footer>
                    <p>Authors: <a href="http://www.facebook.com/hyperiongans">Muhamad Bagus Maulana</a>
<p>
        <a href="https://github.com/mhmdbgs1337/"><img style="width:25px" src="https://github.com/fluidicon.png"></a>
        <a href="https://www.facebook.com/hyperiongans"><img style="width:25px" src="http://www.roodebloemstudios.co.za/blog/wp-content/uploads/2016/06/Facebook.png"></a>
  	<a href="https://www.instagram.com/mhmdbgs1337"><img style="width:23px" src="https://img1.pngdownload.id/20180410/yrw/kisspng-the-factory-kitchen-social-media-facebook-instagram-logo-5acd6f954feac5.6242633315234128853274.jpg"></a>
    </p>
            </footer>
        </div>

        <script src="/js/libs/prism.js?v=6"></script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('set', 'anonymizeIp', true);
            ga('create', 'UA-26723099-2', 'auto');
            ga('send', 'pageview');
        </script>
        <script src="https://cdn.jsdelivr.net/docsearch.js/2/docsearch.min.js"></script>
        <script>
          if (document.getElementById('docsearch')) {
            docsearch({
              apiKey: '8f77725b2f2db4166675acc6e8ea3526',
              indexName: 'getcomposer',
              inputSelector: '#docsearch',
              queryHook: function (query) {
                var parts = query.split(' ');

                parts = parts.map(function (part, index) {
                  var word = part.trim();

                  // quote --foo args so they are not parsed as negations but rather return actual results
                  if (word.length >= 2 && word[0] === '-' && word[1] === '-') {
                    word = '"' + word + (index === parts.length-1 ? '' : '"');
                  }
                  // quote -x args
                  if (word.length == 2 && word[0] === '-') {
                    word = '"' + word + (index === parts.length-1 ? '' : '"');
                  }

                  return word;
                });

                return parts.join(' ');
              },
              debug: false
            });
          }
        </script>
    </body>
</html>
