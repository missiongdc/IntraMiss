<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_a36bbfca1892c5de99d8791c0fa7fd7c37cddfdd7ab7f47e17eda7b8469c7f1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54e3d72054c807dd0594ce5d1a75bae0de74bc4b4d4229c4837bd8af78947296 = $this->env->getExtension("native_profiler");
        $__internal_54e3d72054c807dd0594ce5d1a75bae0de74bc4b4d4229c4837bd8af78947296->enter($__internal_54e3d72054c807dd0594ce5d1a75bae0de74bc4b4d4229c4837bd8af78947296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54e3d72054c807dd0594ce5d1a75bae0de74bc4b4d4229c4837bd8af78947296->leave($__internal_54e3d72054c807dd0594ce5d1a75bae0de74bc4b4d4229c4837bd8af78947296_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ca70e264e0321a84a64f4e0873c118f958732dbd09e0e60023f24350fbae2b22 = $this->env->getExtension("native_profiler");
        $__internal_ca70e264e0321a84a64f4e0873c118f958732dbd09e0e60023f24350fbae2b22->enter($__internal_ca70e264e0321a84a64f4e0873c118f958732dbd09e0e60023f24350fbae2b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_ca70e264e0321a84a64f4e0873c118f958732dbd09e0e60023f24350fbae2b22->leave($__internal_ca70e264e0321a84a64f4e0873c118f958732dbd09e0e60023f24350fbae2b22_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
