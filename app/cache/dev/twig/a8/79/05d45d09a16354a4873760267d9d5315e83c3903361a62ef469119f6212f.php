<?php

/* UserBundle:Default:index.html.twig */
class __TwigTemplate_a87905d45d09a16354a4873760267d9d5315e83c3903361a62ef469119f6212f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<h1>Home</h1>

";
        // line 5
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 6
            echo "    Welcome ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "
    <a href=\"";
            // line 7
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Logout</a>
";
        } else {
            // line 9
            echo "    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Login</a>
";
        }
    }

    public function getTemplateName()
    {
        return "UserBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  40 => 7,  35 => 6,  33 => 5,  29 => 3,  23 => 2,  20 => 1,);
    }
}
