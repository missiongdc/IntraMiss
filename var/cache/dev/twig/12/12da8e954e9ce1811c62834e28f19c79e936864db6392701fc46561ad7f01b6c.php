<?php

/* GMProjetBundle:Suivi:fraisColabs.html.twig */
class __TwigTemplate_89cfc5ba8682c00ec16bbc78d11920c6e41d94995874e309d5df84ce8b76f0ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_503adacf1a8293ab401ffa8fd1d3458cad67192b2518db5142b6afb197c82455 = $this->env->getExtension("native_profiler");
        $__internal_503adacf1a8293ab401ffa8fd1d3458cad67192b2518db5142b6afb197c82455->enter($__internal_503adacf1a8293ab401ffa8fd1d3458cad67192b2518db5142b6afb197c82455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GMProjetBundle:Suivi:fraisColabs.html.twig"));

        // line 1
        echo "  <section>
       
         <table  class=\"table table-striped table-hover table-condensed\">
              <tr> <th>DAS ID</th> <th>Nom</th>  <th>Prénom</th>  <th>Ref. Projet</th> <th>Date Depart</th> <th>Ville</th> <th></th></tr>
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dossierMissions"]) ? $context["dossierMissions"] : $this->getContext($context, "dossierMissions")));
        foreach ($context['_seq'] as $context["_key"] => $context["dossier"]) {
            // line 6
            echo "                <tr>
                    <td> ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dossier"], "collaborateur", array()), "user", array()), "html", null, true);
            echo " </td>
                    <td> ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dossier"], "collaborateur", array()), "nom", array()), "html", null, true);
            echo " </td>
                    <td> ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dossier"], "collaborateur", array()), "prenom", array()), "html", null, true);
            echo " </td>
                    <td> ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dossier"], "projet", array()), "reference", array()), "html", null, true);
            echo " </td>
                    <td> ";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["dossier"], "dateDepart", array()), "d-m-y"), "html", null, true);
            echo "</td>
                    <td> ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["dossier"], "ville", array()), "html", null, true);
            echo "</td>
                    <td align=\"center\"> 
                     <form class=\"formFrais\" method=\"post\"  action =\"";
            // line 14
            echo $this->env->getExtension('routing')->getPath("gm_projet_suivi_frais_colab");
            echo "\">
                            <input type=\"hidden\" name=\"idProjet\" value=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dossier"], "projet", array()), "id", array()), "html", null, true);
            echo "\">
                            <input type=\"hidden\" name=\"idCollab\" value=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dossier"], "collaborateur", array()), "id", array()), "html", null, true);
            echo "\">
                            <button class=\"btn\" type=\"submit\" style=\"background-color: inherit\" title=\"Frais Collaborateur\"> 
                                <i class=\"fa fa-cart-plus\" aria-hidden=\"true\"></i>
                            </button>
                      </form>
                    </td>
                   
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dossier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "          </table> 
        
     
    </section> 


       ";
        
        $__internal_503adacf1a8293ab401ffa8fd1d3458cad67192b2518db5142b6afb197c82455->leave($__internal_503adacf1a8293ab401ffa8fd1d3458cad67192b2518db5142b6afb197c82455_prof);

    }

    public function getTemplateName()
    {
        return "GMProjetBundle:Suivi:fraisColabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 25,  68 => 16,  64 => 15,  60 => 14,  55 => 12,  51 => 11,  47 => 10,  43 => 9,  39 => 8,  35 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
/*   <section>*/
/*        */
/*          <table  class="table table-striped table-hover table-condensed">*/
/*               <tr> <th>DAS ID</th> <th>Nom</th>  <th>Prénom</th>  <th>Ref. Projet</th> <th>Date Depart</th> <th>Ville</th> <th></th></tr>*/
/*             {% for dossier in dossierMissions%}*/
/*                 <tr>*/
/*                     <td> {{dossier.collaborateur.user}} </td>*/
/*                     <td> {{dossier.collaborateur.nom}} </td>*/
/*                     <td> {{dossier.collaborateur.prenom}} </td>*/
/*                     <td> {{dossier.projet.reference}} </td>*/
/*                     <td> {{dossier.dateDepart | date('d-m-y')}}</td>*/
/*                     <td> {{dossier.ville}}</td>*/
/*                     <td align="center"> */
/*                      <form class="formFrais" method="post"  action ="{{ path('gm_projet_suivi_frais_colab') }}">*/
/*                             <input type="hidden" name="idProjet" value="{{dossier.projet.id}}">*/
/*                             <input type="hidden" name="idCollab" value="{{dossier.collaborateur.id}}">*/
/*                             <button class="btn" type="submit" style="background-color: inherit" title="Frais Collaborateur"> */
/*                                 <i class="fa fa-cart-plus" aria-hidden="true"></i>*/
/*                             </button>*/
/*                       </form>*/
/*                     </td>*/
/*                    */
/*                 </tr>*/
/*             {% endfor %}*/
/*           </table> */
/*         */
/*      */
/*     </section> */
/* */
/* */
/*        */
