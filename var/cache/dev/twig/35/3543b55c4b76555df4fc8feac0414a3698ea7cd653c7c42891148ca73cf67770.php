<?php

/* UtilisateursBundle:Default:collaborateur.html.twig */
class __TwigTemplate_eb3b90ba72a5276effb380fca3ed716ab7d0ec63e444e230f66550143200f849 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::accueil.html.twig", "UtilisateursBundle:Default:collaborateur.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9e75fe7a34832243151c057c6b3f9bee78b10e2ce8fd562943133f63b13deec = $this->env->getExtension("native_profiler");
        $__internal_d9e75fe7a34832243151c057c6b3f9bee78b10e2ce8fd562943133f63b13deec->enter($__internal_d9e75fe7a34832243151c057c6b3f9bee78b10e2ce8fd562943133f63b13deec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:collaborateur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9e75fe7a34832243151c057c6b3f9bee78b10e2ce8fd562943133f63b13deec->leave($__internal_d9e75fe7a34832243151c057c6b3f9bee78b10e2ce8fd562943133f63b13deec_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae81aed2eabc13b58267b99b40af004dd46838dee64b036c86576086abb9d894 = $this->env->getExtension("native_profiler");
        $__internal_ae81aed2eabc13b58267b99b40af004dd46838dee64b036c86576086abb9d894->enter($__internal_ae81aed2eabc13b58267b99b40af004dd46838dee64b036c86576086abb9d894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
      <!-- Menu -->
         ";
        // line 6
        echo twig_include($this->env, $context, "UtilisateursBundle:Default:menuCollaborateur.html.twig");
        echo "
     
    <!--   Corps  -->

  <div class=\"row corps\">
        <div class=\"col-sm-10 col-sm-offset-1\" >
            <h4 class=\"titre\" style=\"text-align: right\">My Profile </h4> <div class=\"ligne\"> </div>
        </div>
      
       <div class=\"col-sm-7 col-sm-offset-1\">
           
         <!-- My Profile -->
          <div id=\"divProfile\" class=\"col-sm-12\">
             My Profile
          </div>
            <div id=\"popup\" class=\"col-sm-12\">
              <div class=\"row\">
                <div class=\"col-sm-1 col-sm-offset-11\"> 
                    <button class=\"fermer\" title=\"Fermer\"> <i class=\"fa fa-close\" aria-hidden=\"true\"></i></button> 
                </div>
              </div>

               <div id=\"ressource\">

               </div>
           </div>
           
      <!-- My Document -->
          <div id=\"divMyDocument\" class=\"col-sm-12\">
             My Document
          </div>
      
      <!-- My Fees -->
          <div id=\"divFees\" class=\"col-sm-12\">
             My Fees
          </div>
      
       <!-- My Comments -->
          <div id=\"divMyComments\" class=\"col-sm-12\">
             My Comments
          </div>
      
       </div>
        
      <div class=\"col-sm-3\">
            <div class=\"panel panel-default\">
               <div class=\"panel-body\"> Atos Images</div>
               
            </div>
            <div class=\"panel panel-default\">
               <div class=\"panel-body\"> Atos </div>
               
             </div>
      </div>

     
   </div>
      
";
        
        $__internal_ae81aed2eabc13b58267b99b40af004dd46838dee64b036c86576086abb9d894->leave($__internal_ae81aed2eabc13b58267b99b40af004dd46838dee64b036c86576086abb9d894_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_23bf9adc62acf99ffa427a1626052adb4caf8d9828e61a8b42061d2402fd375f = $this->env->getExtension("native_profiler");
        $__internal_23bf9adc62acf99ffa427a1626052adb4caf8d9828e61a8b42061d2402fd375f->enter($__internal_23bf9adc62acf99ffa427a1626052adb4caf8d9828e61a8b42061d2402fd375f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
     <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/collaborateur.js"), "html", null, true);
        echo "\"></script>
      <script >
        \$(function(){
           
            collaborateur();
            \$( \".fermer\" ).click(function() {
                \$('#popup').css({'display':'none'});
            });          
       
        
      //************** My Document *************
        
             \$( \"#myDocument\" ).click(function(e) {
                    // e.preventDefault();
                    \$('.recharge').css({'display':'block'});
                     \$.ajax({
                        type: \"GET\",
                        url: \"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("gm_projet_suivi_mydocument");
        echo "\",
                        cache: \"false\",
                        dataType: \"html\",
                        success: function(result){
                        \$('.recharge').css({'display':'none'});
                        \$(\"#divMyDocument\").html(result); 
                         modification();
                         saveMyDocument();
                    }
                 }); 
                 
                });
                
                   function modification()
                    {
                       \$(\".modif\").click(function (e) {
                        //e.preventDefault();
                        \$('.champ').removeAttr('disabled');
                        \$('.ville').focus();
                               
                       });  
                    }
               
                     function saveMyDocument()
                    {
                       \$(\".myDoc\").submit(function (e) {
                            e.preventDefault();
                            \$('.recharge').css({'display':'block'});\$(\".results\").text('');
                            var values = {};
                                \$(this).serializeArray().forEach(function (field) {
                                    values[field.name] = field.value;
                                });
                                
                                 \$.ajax({
                                    url: \"";
        // line 119
        echo $this->env->getExtension('routing')->getPath("gm_projet_suivi_savemydocument");
        echo "\",
                                    data: values,
                                    type: 'post'
                                }).done(function (data) {
                                   \$('.recharge').css({'display':'none'});
                                   \$(\".results\").text(data);
                                   \$('.champ').attr('disabled','disabled');
                                 
                                }).fail(function (data) {
                                   // erreur
                                });
                               
                        });  
                    }
                
 

//************** My Fees *************
        
             \$( \"#myFees\" ).click(function(e) {
                    // e.preventDefault();
                    \$('.recharge').css({'display':'block'});
                     \$.ajax({
                        type: \"GET\",
                        url: \"";
        // line 143
        echo $this->env->getExtension('routing')->getPath("gm_projet_liste");
        echo "\",
                        cache: \"false\",
                        dataType: \"html\",
                        success: function(result){
                        \$('.recharge').css({'display':'none'});
                        \$(\"#divFees\").html(result); 
                        formFee();
                        piece();
                        formModifFee();
                    }
                 }); 
                 
                });    
               
             function formFee()
              {
                       \$(\".addFee\").click(function (e) {
                            e.preventDefault();
                            
                             \$('.recharge').css({'display':'block'});
                                 \$.ajax({
                                    url: \"";
        // line 164
        echo $this->env->getExtension('routing')->getPath("gm_projet_ajout");
        echo "\",
                                    type: 'get'
                                }).done(function (data) {
                                   \$('.recharge').css({'display':'none'});
                                   \$('.formFee').css({'display':'block'});
                                   \$(\".formFee\").html(data); 
                                    addFee();
                                  
                                }).fail(function (data) {
                                   // erreur
                                });
                               
                        });  
               }
                 
                 function addFee()
                    {
                       \$(\".formFee .addFee\").submit(function (e) {
                            e.preventDefault();var \$form = \$(this);
                            var \$form = \$(this);
                            var formdata = (window.FormData) ? new FormData(\$form[0]) : null;
                            var data = (formdata !== null) ? formdata : \$form.serialize();
                             \$('.recharge').css({'display':'block'});
          
                               \$.ajax({
                                    url: \"";
        // line 189
        echo $this->env->getExtension('routing')->getPath("gm_projet_ajout");
        echo "\",
                                    data: data,
                                    type: 'post',
                                    processData: false,
                                    contentType: false
                                }).done(function (data) {
                                   \$('.recharge').css({'display':'none'});
                                   \$(\".results\").text(data); 
                                   \$(\".btn-success\").attr('disabled','disabled');
                                    //addFee();
                                  
                                }).fail(function (data) {
                                   // erreur
                                });  
                        });  
                        
                                \$( \".fermer\" ).click(function() {
                                    \$('.formFee').css({'display':'none'});
                                });
                    }
                    
                  function piece ()
                  {
                    
                     \$(\".formPiece\").click(function (e) {
                        e.preventDefault();
                        var val=\$(this).find('[type=\"hidden\"]').val();
                        var param='uploads/brochures/'+val;  
                        \$('#popup').css({'display':'block'});
                        \$(\"#ressource\").html('<img src=\"'+param+'\" class=\"piece\">');
                      
                    });
                 }
                 
                 function formModifFee()
              {
                       \$(\".formModifFee\").click(function (e) {
                            e.preventDefault();
                            var data=\$(this).serialize();
                             \$('.recharge').css({'display':'block'});
                                 \$.ajax({
                                    url: \"";
        // line 230
        echo $this->env->getExtension('routing')->getPath("gm_projet_modification");
        echo "\",
                                    type: 'post',
                                    data: data
                                }).done(function (data) {
                                   \$('.recharge').css({'display':'none'});
                                   \$('.formFee').css({'display':'block'});
                                   \$(\".formFee\").html(data); 
                                   modifFee();
                                  
                                }).fail(function (data) {
                                   // erreur
                                });
                               
                        });  
               }
                    
              function modifFee()
                    {
                       \$(\".formFee .modifFee\").submit(function (e) {
                            e.preventDefault();var \$form = \$(this);
                            var \$form = \$(this);
                            var formdata = (window.FormData) ? new FormData(\$form[0]) : null;
                            var data = (formdata !== null) ? formdata : \$form.serialize();
                             \$('.recharge').css({'display':'block'});
          
                               \$.ajax({
                                    url: \"";
        // line 256
        echo $this->env->getExtension('routing')->getPath("gm_projet_modification");
        echo "\",
                                    data: data,
                                    type: 'post',
                                    processData: false,
                                    contentType: false
                                }).done(function (data) {
                                   \$('.recharge').css({'display':'none'});
                                   \$(\".results\").text(data); 
                                   \$(\".btn-success\").attr('disabled','disabled');
                                    //addFee();
                                  
                                }).fail(function (data) {
                                   // erreur
                                });
                               
                        });  
                            \$( \".fermer\" ).click(function() {
                                \$('.formFee').css({'display':'none'});
                            });          
                    }     
        
    });
      </script>
";
        
        $__internal_23bf9adc62acf99ffa427a1626052adb4caf8d9828e61a8b42061d2402fd375f->leave($__internal_23bf9adc62acf99ffa427a1626052adb4caf8d9828e61a8b42061d2402fd375f_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:collaborateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 256,  304 => 230,  260 => 189,  232 => 164,  208 => 143,  181 => 119,  144 => 85,  124 => 68,  119 => 67,  113 => 66,  47 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::accueil.html.twig" %}*/
/* */
/* {% block   body %}*/
/*     {{ parent() }}*/
/*       <!-- Menu -->*/
/*          {{ include("UtilisateursBundle:Default:menuCollaborateur.html.twig") }}*/
/*      */
/*     <!--   Corps  -->*/
/* */
/*   <div class="row corps">*/
/*         <div class="col-sm-10 col-sm-offset-1" >*/
/*             <h4 class="titre" style="text-align: right">My Profile </h4> <div class="ligne"> </div>*/
/*         </div>*/
/*       */
/*        <div class="col-sm-7 col-sm-offset-1">*/
/*            */
/*          <!-- My Profile -->*/
/*           <div id="divProfile" class="col-sm-12">*/
/*              My Profile*/
/*           </div>*/
/*             <div id="popup" class="col-sm-12">*/
/*               <div class="row">*/
/*                 <div class="col-sm-1 col-sm-offset-11"> */
/*                     <button class="fermer" title="Fermer"> <i class="fa fa-close" aria-hidden="true"></i></button> */
/*                 </div>*/
/*               </div>*/
/* */
/*                <div id="ressource">*/
/* */
/*                </div>*/
/*            </div>*/
/*            */
/*       <!-- My Document -->*/
/*           <div id="divMyDocument" class="col-sm-12">*/
/*              My Document*/
/*           </div>*/
/*       */
/*       <!-- My Fees -->*/
/*           <div id="divFees" class="col-sm-12">*/
/*              My Fees*/
/*           </div>*/
/*       */
/*        <!-- My Comments -->*/
/*           <div id="divMyComments" class="col-sm-12">*/
/*              My Comments*/
/*           </div>*/
/*       */
/*        </div>*/
/*         */
/*       <div class="col-sm-3">*/
/*             <div class="panel panel-default">*/
/*                <div class="panel-body"> Atos Images</div>*/
/*                */
/*             </div>*/
/*             <div class="panel panel-default">*/
/*                <div class="panel-body"> Atos </div>*/
/*                */
/*              </div>*/
/*       </div>*/
/* */
/*      */
/*    </div>*/
/*       */
/* {% endblock  body %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*      <script src="{{ asset('js/collaborateur.js') }}"></script>*/
/*       <script >*/
/*         $(function(){*/
/*            */
/*             collaborateur();*/
/*             $( ".fermer" ).click(function() {*/
/*                 $('#popup').css({'display':'none'});*/
/*             });          */
/*        */
/*         */
/*       //************** My Document **************/
/*         */
/*              $( "#myDocument" ).click(function(e) {*/
/*                     // e.preventDefault();*/
/*                     $('.recharge').css({'display':'block'});*/
/*                      $.ajax({*/
/*                         type: "GET",*/
/*                         url: "{{ path('gm_projet_suivi_mydocument') }}",*/
/*                         cache: "false",*/
/*                         dataType: "html",*/
/*                         success: function(result){*/
/*                         $('.recharge').css({'display':'none'});*/
/*                         $("#divMyDocument").html(result); */
/*                          modification();*/
/*                          saveMyDocument();*/
/*                     }*/
/*                  }); */
/*                  */
/*                 });*/
/*                 */
/*                    function modification()*/
/*                     {*/
/*                        $(".modif").click(function (e) {*/
/*                         //e.preventDefault();*/
/*                         $('.champ').removeAttr('disabled');*/
/*                         $('.ville').focus();*/
/*                                */
/*                        });  */
/*                     }*/
/*                */
/*                      function saveMyDocument()*/
/*                     {*/
/*                        $(".myDoc").submit(function (e) {*/
/*                             e.preventDefault();*/
/*                             $('.recharge').css({'display':'block'});$(".results").text('');*/
/*                             var values = {};*/
/*                                 $(this).serializeArray().forEach(function (field) {*/
/*                                     values[field.name] = field.value;*/
/*                                 });*/
/*                                 */
/*                                  $.ajax({*/
/*                                     url: "{{ path('gm_projet_suivi_savemydocument') }}",*/
/*                                     data: values,*/
/*                                     type: 'post'*/
/*                                 }).done(function (data) {*/
/*                                    $('.recharge').css({'display':'none'});*/
/*                                    $(".results").text(data);*/
/*                                    $('.champ').attr('disabled','disabled');*/
/*                                  */
/*                                 }).fail(function (data) {*/
/*                                    // erreur*/
/*                                 });*/
/*                                */
/*                         });  */
/*                     }*/
/*                 */
/*  */
/* */
/* //************** My Fees **************/
/*         */
/*              $( "#myFees" ).click(function(e) {*/
/*                     // e.preventDefault();*/
/*                     $('.recharge').css({'display':'block'});*/
/*                      $.ajax({*/
/*                         type: "GET",*/
/*                         url: "{{ path('gm_projet_liste') }}",*/
/*                         cache: "false",*/
/*                         dataType: "html",*/
/*                         success: function(result){*/
/*                         $('.recharge').css({'display':'none'});*/
/*                         $("#divFees").html(result); */
/*                         formFee();*/
/*                         piece();*/
/*                         formModifFee();*/
/*                     }*/
/*                  }); */
/*                  */
/*                 });    */
/*                */
/*              function formFee()*/
/*               {*/
/*                        $(".addFee").click(function (e) {*/
/*                             e.preventDefault();*/
/*                             */
/*                              $('.recharge').css({'display':'block'});*/
/*                                  $.ajax({*/
/*                                     url: "{{ path('gm_projet_ajout') }}",*/
/*                                     type: 'get'*/
/*                                 }).done(function (data) {*/
/*                                    $('.recharge').css({'display':'none'});*/
/*                                    $('.formFee').css({'display':'block'});*/
/*                                    $(".formFee").html(data); */
/*                                     addFee();*/
/*                                   */
/*                                 }).fail(function (data) {*/
/*                                    // erreur*/
/*                                 });*/
/*                                */
/*                         });  */
/*                }*/
/*                  */
/*                  function addFee()*/
/*                     {*/
/*                        $(".formFee .addFee").submit(function (e) {*/
/*                             e.preventDefault();var $form = $(this);*/
/*                             var $form = $(this);*/
/*                             var formdata = (window.FormData) ? new FormData($form[0]) : null;*/
/*                             var data = (formdata !== null) ? formdata : $form.serialize();*/
/*                              $('.recharge').css({'display':'block'});*/
/*           */
/*                                $.ajax({*/
/*                                     url: "{{ path('gm_projet_ajout') }}",*/
/*                                     data: data,*/
/*                                     type: 'post',*/
/*                                     processData: false,*/
/*                                     contentType: false*/
/*                                 }).done(function (data) {*/
/*                                    $('.recharge').css({'display':'none'});*/
/*                                    $(".results").text(data); */
/*                                    $(".btn-success").attr('disabled','disabled');*/
/*                                     //addFee();*/
/*                                   */
/*                                 }).fail(function (data) {*/
/*                                    // erreur*/
/*                                 });  */
/*                         });  */
/*                         */
/*                                 $( ".fermer" ).click(function() {*/
/*                                     $('.formFee').css({'display':'none'});*/
/*                                 });*/
/*                     }*/
/*                     */
/*                   function piece ()*/
/*                   {*/
/*                     */
/*                      $(".formPiece").click(function (e) {*/
/*                         e.preventDefault();*/
/*                         var val=$(this).find('[type="hidden"]').val();*/
/*                         var param='uploads/brochures/'+val;  */
/*                         $('#popup').css({'display':'block'});*/
/*                         $("#ressource").html('<img src="'+param+'" class="piece">');*/
/*                       */
/*                     });*/
/*                  }*/
/*                  */
/*                  function formModifFee()*/
/*               {*/
/*                        $(".formModifFee").click(function (e) {*/
/*                             e.preventDefault();*/
/*                             var data=$(this).serialize();*/
/*                              $('.recharge').css({'display':'block'});*/
/*                                  $.ajax({*/
/*                                     url: "{{ path('gm_projet_modification') }}",*/
/*                                     type: 'post',*/
/*                                     data: data*/
/*                                 }).done(function (data) {*/
/*                                    $('.recharge').css({'display':'none'});*/
/*                                    $('.formFee').css({'display':'block'});*/
/*                                    $(".formFee").html(data); */
/*                                    modifFee();*/
/*                                   */
/*                                 }).fail(function (data) {*/
/*                                    // erreur*/
/*                                 });*/
/*                                */
/*                         });  */
/*                }*/
/*                     */
/*               function modifFee()*/
/*                     {*/
/*                        $(".formFee .modifFee").submit(function (e) {*/
/*                             e.preventDefault();var $form = $(this);*/
/*                             var $form = $(this);*/
/*                             var formdata = (window.FormData) ? new FormData($form[0]) : null;*/
/*                             var data = (formdata !== null) ? formdata : $form.serialize();*/
/*                              $('.recharge').css({'display':'block'});*/
/*           */
/*                                $.ajax({*/
/*                                     url: "{{ path('gm_projet_modification') }}",*/
/*                                     data: data,*/
/*                                     type: 'post',*/
/*                                     processData: false,*/
/*                                     contentType: false*/
/*                                 }).done(function (data) {*/
/*                                    $('.recharge').css({'display':'none'});*/
/*                                    $(".results").text(data); */
/*                                    $(".btn-success").attr('disabled','disabled');*/
/*                                     //addFee();*/
/*                                   */
/*                                 }).fail(function (data) {*/
/*                                    // erreur*/
/*                                 });*/
/*                                */
/*                         });  */
/*                             $( ".fermer" ).click(function() {*/
/*                                 $('.formFee').css({'display':'none'});*/
/*                             });          */
/*                     }     */
/*         */
/*     });*/
/*       </script>*/
/* {% endblock %}*/
/* */
