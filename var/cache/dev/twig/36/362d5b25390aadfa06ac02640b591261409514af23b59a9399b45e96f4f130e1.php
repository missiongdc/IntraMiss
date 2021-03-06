<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_34d96b1df1c21dc378fd90f7d4b6377b11389c36846eb230e7ef76e27d8dcb28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_45322f918aa1b3b2c17a4b33787e92858508dd75d20c2b229fba1f459b2573e9 = $this->env->getExtension("native_profiler");
        $__internal_45322f918aa1b3b2c17a4b33787e92858508dd75d20c2b229fba1f459b2573e9->enter($__internal_45322f918aa1b3b2c17a4b33787e92858508dd75d20c2b229fba1f459b2573e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45322f918aa1b3b2c17a4b33787e92858508dd75d20c2b229fba1f459b2573e9->leave($__internal_45322f918aa1b3b2c17a4b33787e92858508dd75d20c2b229fba1f459b2573e9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_49cbeb50b56ebcd95b2a0a3a16c89f34d94eb0df7c5db5f825b009c35682e81a = $this->env->getExtension("native_profiler");
        $__internal_49cbeb50b56ebcd95b2a0a3a16c89f34d94eb0df7c5db5f825b009c35682e81a->enter($__internal_49cbeb50b56ebcd95b2a0a3a16c89f34d94eb0df7c5db5f825b009c35682e81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <div class=\"container\">
      <section class=\"row\">
          <div class=\"col-sm-4 col-sm-offset-4 connexion\" >
           <section class=\"row\">
                <div class=\"logoAtos col-sm-12\">
                    <section class=\"row\">
                        <div class=\"col-sm-4\" style=\"height: 60px\"> <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\"> </div>
                        <div class=\"col-sm-8\" style=\"height: 60px;\"> <h4>Landeds <br/>Ressources </h4> </div>
                    </section>
                </div>
                

                <div class=\"forms col-sm-12\">
                    <h4> Log in to your account</h4>
                    ";
        // line 20
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 21
            echo "                       <div class=\"erreurs col-sm-12\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 23
        echo "                    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                        
                        <div class=\"form-group\">
                           <div class=\"input-group\">
                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"DAS-ID or e-mail\" class=\"form-control\"/> 
                             <span class=\"input-group-addon\" ><i  class=\"fa fa-user\" aria-hidden=\"true\"></i> </span>
                           </div>
                         </div>
                       <!-- <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Forgot Password</a>-->
                        <div class=\"form-group\">
                            <div class=\"input-group\">                          
                            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"Password\" class=\"form-control\"/>
                            <span class=\"input-group-addon\" ><i  class=\"fa fa-lock\" aria-hidden=\"true\"></i> </span>
                            </div>
                        </div>
                        
                        <div class=\"form-group\">
                         <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"form-control btn btn-primary\"/>
                         </div>
                    </form>

                 </div>
            </section>
          </div>
      </section>
    </div>    
";
        
        $__internal_49cbeb50b56ebcd95b2a0a3a16c89f34d94eb0df7c5db5f825b009c35682e81a->leave($__internal_49cbeb50b56ebcd95b2a0a3a16c89f34d94eb0df7c5db5f825b009c35682e81a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 41,  86 => 32,  79 => 28,  72 => 24,  67 => 23,  61 => 21,  59 => 20,  48 => 12,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/*  {% block fos_user_content %}*/
/*     <div class="container">*/
/*       <section class="row">*/
/*           <div class="col-sm-4 col-sm-offset-4 connexion" >*/
/*            <section class="row">*/
/*                 <div class="logoAtos col-sm-12">*/
/*                     <section class="row">*/
/*                         <div class="col-sm-4" style="height: 60px"> <img src="{{ asset('images/logo.png') }}"> </div>*/
/*                         <div class="col-sm-8" style="height: 60px;"> <h4>Landeds <br/>Ressources </h4> </div>*/
/*                     </section>*/
/*                 </div>*/
/*                 */
/* */
/*                 <div class="forms col-sm-12">*/
/*                     <h4> Log in to your account</h4>*/
/*                     {% if error %}*/
/*                        <div class="erreurs col-sm-12">{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*                     {% endif %}*/
/*                     <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*                         <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*                         */
/*                         <div class="form-group">*/
/*                            <div class="input-group">*/
/*                             <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" placeholder="DAS-ID or e-mail" class="form-control"/> */
/*                              <span class="input-group-addon" ><i  class="fa fa-user" aria-hidden="true"></i> </span>*/
/*                            </div>*/
/*                          </div>*/
/*                        <!-- <a href="{{path('fos_user_resetting_request')}}">Forgot Password</a>-->*/
/*                         <div class="form-group">*/
/*                             <div class="input-group">                          */
/*                             <input type="password" id="password" name="_password" required="required" placeholder="Password" class="form-control"/>*/
/*                             <span class="input-group-addon" ><i  class="fa fa-lock" aria-hidden="true"></i> </span>*/
/*                             </div>*/
/*                         </div>*/
/*                         */
/*                         <div class="form-group">*/
/*                          <input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" class="form-control btn btn-primary"/>*/
/*                          </div>*/
/*                     </form>*/
/* */
/*                  </div>*/
/*             </section>*/
/*           </div>*/
/*       </section>*/
/*     </div>    */
/* {% endblock fos_user_content %}*/
