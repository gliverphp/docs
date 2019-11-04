<!DOCTYPE html>
<html lang="en-US">
<head profile="http://www.w3.org/2005/10/profile">
<link rel="icon" type="image/ico" href="{{ Url::assets('img/logo.png') }}">

    <meta charset="UTF-8">
    <title>{{$title}}</title>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
     <!--    LOAD CUSTOM STYLES    -->
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="{{ Url::assets('css/style.css') }}">
    
</head>
<body>
<div class="gliverContainer clearfix">
    <header>
        <img src="{{ Url::assets('img/logo.png') }}" alt="gliver logo" class="gliverLogo">
        <div class="headerText">
            <h1>Welcome to Gliver<br><span class="subtext">MVC at it’s finest...</span> </h1>

            <p>Request Time = {{$request_time}} Gliver is a powerful open-source PHP framework with a very small footprint.
                Was made to be a simple and elegant toolkit, enabling rapid application development
                of both web sites and web applications.
            </p>
        </div>
    </header>
    <div class="content">
        <div class="left-col">
            <h2>Why you need Gliver MVC </h2>
            <ul class="arrow">
                <li>Package Management is a snap due to Composer</li>
                <li>Implements caching in Memcache or Redis, faster applications.</li>
                <li>Simple syntax, close to no learning curve.</li>
                <li>Light and best suited for extensibility</li>
            </ul>
        </div>

@include('subview')

            <ul class="circles">
                <li>
                    <div class="number">1</div>
                    <div class="wrapper">
                        <h4 class="gliver-text">To edit this page </h4>
                        <p><a href="{{ Url::link(array('home','index')) }}">application/views/index.php</a></p>
                    </div>
                </li>
                <li>
                    <div class="number">2</div>
                    <div class="wrapper">
                        <h4 class="gliver-text">Controller</h4>
                        <p><a href="{{ Url::link(array('home','index')) }}">application/controllers/HomeController</a></p>
                    </div>
                </li>
                <li class="bmarg">
                    <div class="number">3</div>
                    <div class="wrapper">
                        <h4 class="gliver-text">Read the users guider found here: </h4>
                        <p><a href="{{ Url::link(array('home','index')) }}">https://getgliver.com/documentation{{ '@{{' }}  {{ '@' }}for</a></p>
                    </div>
                </li>
            </ul>
        </div>

    </div>

</div><!--EO gliverContainer-->
</body>
</html>





<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>Document-Bootstrap</title>
    <!-- Mobile viewport optimized -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- Mobile Internet Explorer allows us to activate ClearType technology for smoothing fonts for easy reading -->
    <meta http-equiv="cleartype" content="on">

    <!-- Le styles -->
    <link href="css/bootswatch/Cosmo/bootstrap.min.css" rel="stylesheet">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/themes/black-tie/jquery-ui.css" rel="stylesheet">
    <link href="css/jquery.tocify.css" rel="stylesheet">
    <link href="css/prettify.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/rainbow/themes/tomorrow-night.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/rainbowlines/theme.css" media="screen" />
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link href="../assets/ico/favicon.ico" rel="shortcut icon">
    <link href="../assets/ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
    <link href="../assets/ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
    <link href="../assets/ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
    <link href="../assets/ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
  </head>

  <body>
    <a id="fork-me" href="#" target="_blank"><img style="border: 0px currentColor; border-image: none; top: 0px; right: 0px; position: fixed; z-index: 999999;" alt="Fork me on GitHub" src="https://s3.amazonaws.com/github/ribbons/forkme_right_white_ffffff.png"></a>
   <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom:120px;">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Enter Project Name here</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Link</a></li>
      <li><a href="#">Link</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
          <li class="divider"></li>
          <li><a href="#">One more separated link</a></li>
        </ul>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>
     

    <div class="container-fluid" style="margin-top:50px;">
      <div class="row">
        <div class="tocify col-sm-3 col-md-3">
          <div id="toc">
          </div><!--/.well -->
        </div><!--/span-->
        <div class="col-sm-9 col-md-9">
          <div class="jumbotron">
            <h1>Enter Project Name Here</h1>

            <br><br>

            <h2>Description</h2>
            <p>Enter Project Repo Description Here</p>
            <br>
            <p>The project is hosted on <a class="projectLinks" href="#" target="_blank">Github</a> and is available for use under the <a class="projectLinks" href="#" target="_blank">MIT software license</a>.  You can report bugs and discuss features on the <a href="#" target="_blank">GitHub issues page</a>, or send tweets to <a href="#" target="_blank">Enter Project Twitter Page Here</a>.
            </p>
            <p><a class="btn btn-primary btn-lg" href="#" target="_blank">Fork on Github »</a></p>
          </div>
          <h2>Requirements</h2>
          <br>
          <p class="well">
          Enter Project Requirements Here
          </p>
          <br>
          <h2>Optional Dependencies</h2>
          <br>
          <p class="well">
          Enter Project Optional Dependencies Here
          </p>
          <br>
          <h2>Notable Features</h2>
          <br>
          <p class="well">
          Enter Notable Features Here
          </p>
          <br>
          <h2>Browser Support</h2>
          <br>
          <p class="well">
          Enter Browser Support Here
          </p>
          <br>
          <h2>Getting Started</h2>
          <br>
          <p><h3><a href="customDownload.html">Custom Download</a></h3><p></p>
          <p class="well">
          <span class="note"><strong>Note: </strong> All of the plugin files are in the <code>src</code> directory (this includes both the JavaScript and CSS files). If you want to see an example page with all of the files included, look in the <code>demos</code> directory.
          </span>
          </p>
          <h3>C#</h3>
          <p></p>
          <p class="well note">
          C# Code
          </p>
          
          <pre>        
            <code data-language="csharp">
public class BadgeGenerator : IBadgeGenerator
{
    private IBadgeStorageService badgeStoreageService;

    public BadgeGenerator(IBadgeStorageService service)
    {
        if (service == null)
        {
            throw new ArgumentNullException("storage service cannot be null", "service");
        }
       
        this.badgeStoreageService = service;
    }
}
            </code>
          </pre>
         
          <h3>CSS</h3>
          <p></p>
          <p class="well note">
          Enter CSS Instructions Here
          </p>
          <pre>
          <code data-language="css">    
 * Author: @gregfranko
 */

/* The Table of Contents container element */
#toc {
    width: 20%;
    max-height: 90%;
    overflow: auto;
    position: fixed;
    border: 0px solid #ccc;
    webkit-border-radius: 6px;
    moz-border-radius: 6px;
    border-radius: 6px;
}

/* The Table of Contents is composed of multiple nested unordered lists.  These styles remove the default styling of an unordered list because it is ugly. */
#toc ul, #toc li {
    list-style: none;
    margin: 0;
    padding: 0;
    border: none;
    line-height: 30px;
}

          </code>
          </pre>
          <p>
          <h3>JavaScript</h3>
          <p></p>
          <p class="well note">
              Enter JavaScript Instructions Here
          </p>
          <pre>          
          <code data-language="javascript">
;(function () {

  var
    object = typeof window != 'undefined' ? window : exports,
    chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=',
    INVALID_CHARACTER_ERR = (function () {
      // fabricate a suitable error object
      try { document.createElement('$'); }
      catch (error) { return error; }}());

  // encoder
  // [https://gist.github.com/999166] by [https://github.com/nignag]
  object.btoa || (
  object.btoa = function (input) {
    for (
      // initialize result and counter
      var block, charCode, idx = 0, map = chars, output = '';
      // if the next input index does not exist:
      //   change the mapping table to "="
      //   check if d has no fractional digits
      input.charAt(idx | 0) || (map = '=', idx % 1);
      // "8 - idx % 1 * 8" generates the sequence 2, 4, 6, 8
      output += map.charAt(63 & block >> 8 - idx % 1 * 8)
    ) {
      charCode = input.charCodeAt(idx += 3/4);
      if (charCode > 0xFF) throw INVALID_CHARACTER_ERR;
      block = block << 8 | charCode;
    }
    return output;
  });

  // decoder
  // [https://gist.github.com/1020396] by [https://github.com/atk]
  object.atob || (
  object.atob = function (input) {
    input = input.replace(/=+$/, '')
    if (input.length % 4 == 1) throw INVALID_CHARACTER_ERR;
    for (
      // initialize result and counters
      var bc = 0, bs, buffer, idx = 0, output = '';
      // get next character
      buffer = input.charAt(idx++);
      // character found in table? initialize bit storage and add its ascii value;
      ~buffer && (bs = bc % 4 ? bs * 64 + buffer : buffer,
        // and if not first of each 4 characters,
        // convert the first 8 bits to one ascii character
        bc++ % 4) ? output += String.fromCharCode(255 & bs >> (-2 * bc & 6)) : 0
    ) {
      // try to find character in table (0-63, not found => -1)
      buffer = chars.indexOf(buffer);
    }
    return output;
  });

}());

          </code>
          </pre>
          <h2>Options</h2>
          <p class="well note">
              Enter Options Instructions Here
          </p>
    
          <h3>Options</h3>
          <table class="table table-striped table-bordered table-condensed">
              <tbody><tr>
                  <th>Name</th>
                  <th>Type</th>
                  <th>Default</th>
                  <th>Parameters</th>
              </tr>
              <tr>
                  <td title="Option Name" class="optionName" data-content="Enter Option Description Here">
                      <a href="#">Option Name</a>
                  </td>
                  <td>Enter Option Type Here</td>
                  <td>Enter Option Default Here</td>
                  <td>Enter Option Parameters Here</td>
              </tr>
              <tr>
                  <td title="Option Name" class="optionName" data-content="Enter Option Description Here">
                      <a href="#">Option Name</a>
                  </td>
                  <td>Enter Option Type Here</td>
                  <td>Enter Option Default Here</td>
                  <td>Enter Option Parameters Here</td>
              </tr>
              <tr>
                  <td title="Option Name" class="optionName" data-content="Enter Option Description Here">
                      <a href="#">Option Name</a>
                  </td>
                  <td>Enter Option Type Here</td>
                  <td>Enter Option Default Here</td>
                  <td>Enter Option Parameters Here</td>
              </tr>
              <tr>
                  <td title="Option Name" class="optionName" data-content="Enter Option Description Here">
                      <a href="#">Option Name</a>
                  </td>
                  <td>Enter Option Type Here</td>
                  <td>Enter Option Default Here</td>
                  <td>Enter Option Parameters Here</td>
              </tr>
              <tr>
                  <td title="Option Name" class="optionName" data-content="Enter Option Description Here">
                      <a href="#">Option Name</a>
                  </td>
                  <td>Enter Option Type Here</td>
                  <td>Enter Option Default Here</td>
                  <td>Enter Option Parameters Here</td>
              </tr>
              <tr>
                  <td title="Option Name" class="optionName" data-content="Enter Option Description Here">
                      <a href="#">Option Name</a>
                  </td>
                  <td>Enter Option Type Here</td>
                  <td>Enter Option Default Here</td>
                  <td>Enter Option Parameters Here</td>
              </tr>
              <tr>
                  <td title="Option Name" class="optionName" data-content="Enter Option Description Here">
                      <a href="#">Option Name</a>
                  </td>
                  <td>Enter Option Type Here</td>
                  <td>Enter Option Default Here</td>
                  <td>Enter Option Parameters Here</td>
              </tr>
              <tr>
                  <td title="Option Name" class="optionName" data-content="Enter Option Description Here">
                      <a href="#">Option Name</a>
                  </td>
                  <td>Enter Option Type Here</td>
                  <td>Enter Option Default Here</td>
                  <td>Enter Option Parameters Here</td>
              </tr>
          </tbody></table>
          <br>
          <h2>Contributing</h2>
          <p class="well">
              Take care to maintain the existing coding style. Add <strong>Enter Unit Testing Framework</strong> unit tests for any new or changed functionality. Lint and test your code using <strong>Enter Build Tool Here</strong>.
          </p>
          <p class="well">
              <span class="note">
                  After you have verified your code, send a pull request to the <em>Enter Project Name Here</em> develop branch.  After you send a pull request, you will hear back from me shortly after I review your code.  You’ll find source code in the <code>src</code> subdirectory!
              </span>
          </p>
          <br>
          <h2>Extending</h2>
          <p class="well">
              If you find that you need a feature that <em>Enter Project Name Here</em> does not currently support, either let me know via the <a href="#" target="_blank">Github issue tracker</a>, or <a href="#" target="_blank">fork the project</a> and and easily extend <em>Enter Project Name Here</em>!
          </p>
          <br>
        <h2>Copyright</h2>
        <p class="well">
            Copyright © 2013 Enter Author Name Here
        </p>
      </div>
      </div><!--/row-->
          
    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/rainbow/rainbow.min.js"></script>
    <script src="js/rainbow/language/generic.js"></script>
    <script src="js/rainbow/language/html.js"></script>
    <script src="js/rainbow/language/css.js"></script>
    <script src="js/rainbow/language/javascript.js"></script>
    <script src="js/rainbowlines/rainbow.linenumbers.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.tocify.min.js"></script>
    <script src="js/prettify.js"></script>

    <script>
        $(function() {

          $("#toc").tocify({ selectors: "h2, h3, h4", scrollTo: 60, highlightOffset: 60, extendPage: true });

          prettyPrint();

          $(".optionName").popover({ trigger: "hover", container: "body" });

          $("a[href='#']").click(function(event) {

              event.preventDefault();

          });

          Rainbow.color();
        });
    </script>
  
</div></body></html>

