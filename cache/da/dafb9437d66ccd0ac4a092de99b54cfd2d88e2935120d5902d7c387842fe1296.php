<?php

/* index.html */
class __TwigTemplate_1e50178ede16315bdf96bc6ae13ca1e970e9094aeea3785636eaee1661b66639 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\">
    \t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    \t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t";
        // line 9
        $this->displayBlock('header', $context, $blocks);
        // line 22
        echo "\t</head>

<body>
";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "   <nav class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\">ProjecSSt name</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
          <form class=\"navbar-form navbar-right\">
            <div class=\"form-group\">
              <input type=\"text\" placeholder=\"Email\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
              <input type=\"password\" placeholder=\"Password\" class=\"form-control\">
            </div>
            <button type=\"submit\" class=\"btn btn-success\">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class=\"jumbotron\">
      <div class=\"container\">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Learn more &raquo;</a></p>
      </div>
    </div>

    <div class=\"container\">
      <!-- Example row of columns -->
      <div class=\"row\">
        <div class=\"col-md-4\">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
        </div>
        <div class=\"col-md-4\">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
       </div>
        <div class=\"col-md-4\">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; 2015 Company, Inc.</p>
      </footer>
    </div> <!-- /container -->





</body>

</html>";
    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        // line 10
        echo "\t\t\t<link rel=\"stylesheet\" href=\"vendor/bootstrap/style.css\" />
\t\t\t<!-- Latest compiled and minified CSS -->
\t\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">

\t\t\t<!-- Optional theme -->
\t\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\" integrity=\"sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r\" crossorigin=\"anonymous\">

\t\t\t<!-- Latest compiled and minified JavaScript -->
\t\t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>

\t\t\t<title>";
        // line 20
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t";
    }

    public function block_title($context, array $blocks = array())
    {
        echo " geCim ";
    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        // line 26
        echo "
";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["the"]) ? $context["the"] : null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  144 => 27,  141 => 26,  138 => 25,  127 => 20,  115 => 10,  112 => 9,  41 => 29,  39 => 25,  34 => 22,  32 => 9,  22 => 1,);
    }
}
/* */
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/* 	<head>*/
/* 		<meta charset="utf-8">*/
/*     	<meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     	<meta name="viewport" content="width=device-width, initial-scale=1">*/
/* 		{% block header %}*/
/* 			<link rel="stylesheet" href="vendor/bootstrap/style.css" />*/
/* 			<!-- Latest compiled and minified CSS -->*/
/* 			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/* */
/* 			<!-- Optional theme -->*/
/* 			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">*/
/* */
/* 			<!-- Latest compiled and minified JavaScript -->*/
/* 			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/* */
/* 			<title>{% block title %} geCim {% endblock %}</title>*/
/* 		{% endblock %}*/
/* 	</head>*/
/* */
/* <body>*/
/* {% block body %}*/
/* */
/* {{the}}*/
/* {% endblock %}*/
/*    <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*       <div class="container">*/
/*         <div class="navbar-header">*/
/*           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*             <span class="sr-only">Toggle navigation</span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*           </button>*/
/*           <a class="navbar-brand" href="#">ProjecSSt name</a>*/
/*         </div>*/
/*         <div id="navbar" class="navbar-collapse collapse">*/
/*           <form class="navbar-form navbar-right">*/
/*             <div class="form-group">*/
/*               <input type="text" placeholder="Email" class="form-control">*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <input type="password" placeholder="Password" class="form-control">*/
/*             </div>*/
/*             <button type="submit" class="btn btn-success">Sign in</button>*/
/*           </form>*/
/*         </div><!--/.navbar-collapse -->*/
/*       </div>*/
/*     </nav>*/
/* */
/*     <!-- Main jumbotron for a primary marketing message or call to action -->*/
/*     <div class="jumbotron">*/
/*       <div class="container">*/
/*         <h1>Hello, world!</h1>*/
/*         <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>*/
/*         <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="container">*/
/*       <!-- Example row of columns -->*/
/*       <div class="row">*/
/*         <div class="col-md-4">*/
/*           <h2>Heading</h2>*/
/*           <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>*/
/*           <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>*/
/*         </div>*/
/*         <div class="col-md-4">*/
/*           <h2>Heading</h2>*/
/*           <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>*/
/*           <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>*/
/*        </div>*/
/*         <div class="col-md-4">*/
/*           <h2>Heading</h2>*/
/*           <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>*/
/*           <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <hr>*/
/* */
/*       <footer>*/
/*         <p>&copy; 2015 Company, Inc.</p>*/
/*       </footer>*/
/*     </div> <!-- /container -->*/
/* */
/* */
/* */
/* */
/* */
/* </body>*/
/* */
/* </html>*/
