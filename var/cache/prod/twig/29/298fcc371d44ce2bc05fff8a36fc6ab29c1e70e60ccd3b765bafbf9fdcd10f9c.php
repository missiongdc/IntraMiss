<?php

/* @GMProjet/Depense/ajout.html.twig */
class __TwigTemplate_e51b43f69bc8687b1ffd073577db547737e120b9ce840295413a642e3acf3362 extends Twig_Template
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
        // line 1
        echo "<div class=\"panel-body\" > 
 ";
        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : null), 'form_start', array("method" => "post", "enctype" => "multipart/form-data", "action" => $this->env->getExtension('routing')->getPath("gm_projet_ajout"), "attr" => array("class" => "form-horizontal addFee")));
        echo "
    <table class=\"table table-condensed\" >
                  <tr>
                    <td> Designation</td>
                    <td> ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : null), "designation", array()), 'widget', array("attr" => array("class" => "form-control", "autofocus" => "autofocus")));
        echo " </td>
                    <td align=\"center\"> Montant</td>
                    <td> ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : null), "montant", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo " </td>
                  </tr>
                  <tr>
                    <td> Date</td>
                    <td> ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : null), "date", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo " </td>
                    <td align=\"center\"> Pièce</td>
                    <td> ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : null), "piece", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo " </td>
                  </tr>
                   <tr>
                    <td> Description</td>
                    <td> ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : null), "infoCom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo " </td>
                    <td> </td>
                    <td style=\"vertical-align: bottom\">
                        <input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-success\" />
                        <span class=\"results\"> </span>
                    </td>
                  </tr>
                   <tr>
                       <td>
                           <button class=\"fermer\" style=\"background-color: inherit\"> <i class=\"fa fa-close\" aria-hidden=\"true\"></i> </button> 
                       </td>
                   </tr>
    </table>
  ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : null), 'form_end');
        echo "
  
</div>";
    }

    public function getTemplateName()
    {
        return "@GMProjet/Depense/ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 31,  53 => 18,  46 => 14,  41 => 12,  34 => 8,  29 => 6,  22 => 2,  19 => 1,);
    }
}
/* <div class="panel-body" > */
/*  {{form_start(f, {'method': 'post', 'enctype': 'multipart/form-data', 'action': path('gm_projet_ajout'), 'attr': { 'class': 'form-horizontal addFee' } })}}*/
/*     <table class="table table-condensed" >*/
/*                   <tr>*/
/*                     <td> Designation</td>*/
/*                     <td> {{form_widget(f.designation, {'attr': {'class': 'form-control',  'autofocus':'autofocus'} })}} </td>*/
/*                     <td align="center"> Montant</td>*/
/*                     <td> {{form_widget(f.montant, {'attr': {'class': 'form-control'} })}} </td>*/
/*                   </tr>*/
/*                   <tr>*/
/*                     <td> Date</td>*/
/*                     <td> {{form_widget(f.date, {'attr': {'class': 'form-control'} })}} </td>*/
/*                     <td align="center"> Pièce</td>*/
/*                     <td> {{form_widget(f.piece, {'attr': {'class': 'form-control'} })}} </td>*/
/*                   </tr>*/
/*                    <tr>*/
/*                     <td> Description</td>*/
/*                     <td> {{form_widget(f.infoCom, {'attr': {'class': 'form-control'} })}} </td>*/
/*                     <td> </td>*/
/*                     <td style="vertical-align: bottom">*/
/*                         <input type="submit" value="Enregistrer" class="btn btn-success" />*/
/*                         <span class="results"> </span>*/
/*                     </td>*/
/*                   </tr>*/
/*                    <tr>*/
/*                        <td>*/
/*                            <button class="fermer" style="background-color: inherit"> <i class="fa fa-close" aria-hidden="true"></i> </button> */
/*                        </td>*/
/*                    </tr>*/
/*     </table>*/
/*   {{form_end(f)}}*/
/*   */
/* </div>*/
