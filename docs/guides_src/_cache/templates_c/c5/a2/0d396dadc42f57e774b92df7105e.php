<?php

/* default.html */
class __TwigTemplate_c5a20d396dadc42f57e774b92df7105e extends Twig_Template
{
    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!doctype html>
<!--[if lt IE 7]> <html class=\"no-js ie6 oldie\" lang=\"en\"> <![endif]-->
<!--[if IE 7]>    <html class=\"no-js ie7 oldie\" lang=\"en\"> <![endif]-->
<!--[if IE 8]>    <html class=\"no-js ie8 oldie\" lang=\"en\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"en\"> <!--<![endif]-->
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
\t
\t<title>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['site']) ? $context['site'] : null), "title", array(), "any", false, 10), "html");
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['page']) ? $context['page'] : null), "title", array(), "any", false, 10), "html");
        echo "</title>
\t<meta name=\"description\" content=\"\">
\t<meta name=\"author\" content=\"Lonnie Ezell and the Bonfire Team\">
\t
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t
\t<link rel=\"stylesheet\" href=\"assets/css/screen.css\">
\t
\t<meta http-equiv=\"x-dns-prefetch-control\" content=\"off\" />
</head>
<body>
\t";
        // line 21
        $this->env->loadTemplate("toc.html")->display($context);
        // line 22
        echo "
\t<div class=\"inner\" style=\"height: 0; padding: 0;\">
\t\t<a id=\"toc-handle\" href=\"#\">Table of Contents</a>
\t</div>

\t<nav id=\"nav-top\">
\t\tMore at <a href=\"http://cibonfire.com\" style=\"color: #fff\"><b>cibonfire.com:</b></a>
\t\t<a href=\"http://cibonfire.com/about\">About</a> | 
\t\t<a href=\"https://github.com/ci-bonfire/Bonfire\">Download</a> |
\t\t<a href=\"http://forums.cibonfire.com\">Discuss</a> | 
\t\t<a href=\"http://cibonfire.com/learn\">Learn</a>
\t</nav>
\t
\t<div id=\"header\">
\t\t<div class=\"inner\">
\t\t\t<a href=\"index.html\"><h1>Bonfire Guides</h1></a>
\t\t
\t\t\t<div id =\"subnav\">
\t\t\t\t<a href=\"index.html\">Home</a>
\t\t\t\t<a href=\"contributing_to_bonfire.html\">Contribute</a>
\t\t\t</div>
\t\t</div>
\t</div>\t<!-- /header -->
\t
\t<div id=\"intro\">
\t\t<div class=\"inner\">
\t\t\t";
        // line 48
        echo (isset($context['introtext']) ? $context['introtext'] : null);
        echo "
\t\t\t
\t\t\t<div id=\"sidebar\">
\t\t\t\t";
        // line 51
        echo (isset($context['sidebar']) ? $context['sidebar'] : null);
        echo "
\t\t\t</div>
\t\t</div>
\t</div><!-- /intro -->
\t
\t<div id=\"container\">
\t\t<div class=\"inner\">
\t\t\t<div id=\"main\">
\t\t\t\t";
        // line 59
        echo (isset($context['content']) ? $context['content'] : null);
        echo "
\t\t\t\t
\t\t\t\t<h2>Feedback</h2>
\t\t\t\t
\t\t\t\t<p>You're encouraged to help improve the quality of this guide.</p>

\t\t\t\t<p>If you see any typos or factual errors you are confident to patch, please clone <a href=\"https://github.com/ci-bonfire/bonfire-docs\">bonfire-docs</a> and push the change yourself. That branch of Bonfire has public write access. Commits are still reviewed, but that happens after you've submitted your contribution. bf-docs is cross-merged with master periodically.</p>

\t\t\t\t<p>You may also find incomplete content, or stuff that is not up to date. Please do add any missing documentation for master. Check the <a href=\"guides_guidelines.html\">Bonfire Guides Guidelines</a> for style and conventions.</p>

\t\t\t\t<p>If for whatever reason you spot something to fix but cannot patch it yourself, please <a href=\"https://github.com/ci-bonfire/Bonfire/issues\">open an issue</a>.</p>
\t\t\t</div>\t<!-- /main -->
\t\t\t
\t\t</div>\t<!-- /inner -->
\t</div><!-- /container -->
\t
\t<div id=\"footer\">
\t\t<div class=\"inner\">
\t\t\t<a rel=\"license\" href=\"http://creativecommons.org/licenses/by-sa/3.0/\"><img alt=\"Creative Commons License\" style=\"border-width:0\" src=\"http://i.creativecommons.org/l/by-sa/3.0/88x31.png\" /></a><br /><span xmlns:dct=\"http://purl.org/dc/terms/\" href=\"http://purl.org/dc/dcmitype/Text\" property=\"dct:title\" rel=\"dct:type\">Bonfire</span> by <a xmlns:cc=\"http://creativecommons.org/ns#\" href=\"http://cibonfire.com\" property=\"cc:attributionName\" rel=\"cc:attributionURL\">Lonnie Ezell and the Bonfire Team</a> is licensed under a <a rel=\"license\" href=\"http://creativecommons.org/licenses/by-sa/3.0/\">Creative Commons Attribution-ShareAlike 3.0 Unported License</a>.
\t\t\t<p>";
        // line 78
        echo $this->getAttribute((isset($context['piecrust']) ? $context['piecrust'] : null), "branding", array(), "any", false, 78);
        echo "</p>
\t\t</div>
\t</div>
\t
\t<script type=\"text/javascript\" src=\"assets/jquery-1.6.4.min.js\"></script>
\t<script type=\"text/javascript\">
\t\t\$(document).ready(function(){
\t\t\t\$('#toc-handle').click(function(){
\t\t\t\t\$('#toc-main').slideToggle();
\t\t\t});
\t\t});
\t</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "default.html";
    }
}
