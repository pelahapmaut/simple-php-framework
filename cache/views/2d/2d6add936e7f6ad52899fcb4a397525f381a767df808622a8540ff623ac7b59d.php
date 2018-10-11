<?php

/* welcome.php */
class __TwigTemplate_c79369b9d5e8d98682c42bfe7abd2e1efdd86a9fbc987156f6a573a6904dfff6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>Welcome</title>
</head>
<body>
\t<h1><?= \$title ?></h1>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "welcome.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "welcome.php", "/srv/http/simpleFramework/app/views/welcome.php");
    }
}
