<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_912e323921546d3bee3e9a5231bf57fcb5a3bda1e98ec120529b7956e11a46fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_8e89b79df85e000c0c0ee7456788ce2e7682264ea653b81714d56bb704d3747b = $this->env->getExtension("native_profiler");
        $__internal_8e89b79df85e000c0c0ee7456788ce2e7682264ea653b81714d56bb704d3747b->enter($__internal_8e89b79df85e000c0c0ee7456788ce2e7682264ea653b81714d56bb704d3747b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e89b79df85e000c0c0ee7456788ce2e7682264ea653b81714d56bb704d3747b->leave($__internal_8e89b79df85e000c0c0ee7456788ce2e7682264ea653b81714d56bb704d3747b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fa999f42aad35e56343ba5cf06d4dc274e80e943cebf107ad4e88e1f8e6841ad = $this->env->getExtension("native_profiler");
        $__internal_fa999f42aad35e56343ba5cf06d4dc274e80e943cebf107ad4e88e1f8e6841ad->enter($__internal_fa999f42aad35e56343ba5cf06d4dc274e80e943cebf107ad4e88e1f8e6841ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_fa999f42aad35e56343ba5cf06d4dc274e80e943cebf107ad4e88e1f8e6841ad->leave($__internal_fa999f42aad35e56343ba5cf06d4dc274e80e943cebf107ad4e88e1f8e6841ad_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
