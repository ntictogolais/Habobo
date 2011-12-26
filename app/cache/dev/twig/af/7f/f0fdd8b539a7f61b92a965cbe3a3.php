<?php

/* HaboboBaseBundle:Default:index.html.twig */
class __TwigTemplate_af7ff0fdd8b539a7f61b92a965cbe3a3 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html  xmlns:fb=\"http://www.facebook.com/2008/fbml\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />       
\t\t<link rel=\"stylesheet\" href=\"http://twitter.github.com/bootstrap/1.4.0/bootstrap.min.css\">         
    </head>
    <body>
\t\t";
        // line 8
        echo $this->env->getExtension('facebook')->renderInitialize(array("xfbml" => true, "fbAsyncInit" => "onFbInit();"));
        echo " 
\t\t<script>
\t\t\tfunction onFbInit() {
\t\t\t\talert(\"here we go init\");
\t\t\t\tif (typeof(FB) != 'undefined' && FB != null ) {
\t\t\t\t\tFB.Event.subscribe('auth.login', function(response) {
\t\t\t\t\t\talert(\"here we go in\");
\t\t\t\t\t}
\t\t\t\t\tFB.Event.subscribe('auth.logout', function(response) {
\t\t\t\t\t\twindow.location = \"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_security_logout"), "html", null, true);
        echo "\";
\t\t\t\t\t\talert(\"here we go out\");
\t\t\t\t\t});
\t\t\t\t }
\t\t\t }
\t\t</script>   
\t\t<p>Bienvenu(e) sur ";
        // line 23
        echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
        echo " </p>
\t</body>
</html>\t
";
    }

    public function getTemplateName()
    {
        return "HaboboBaseBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
