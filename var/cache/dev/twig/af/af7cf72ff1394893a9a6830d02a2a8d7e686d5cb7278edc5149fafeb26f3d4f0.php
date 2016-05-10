<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_4e37fdf81635cad2423a16dce7b3125588e0d21db6d05657936ef27a311adadd extends Twig_Template
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
        $__internal_bbc6d106362ebc6095b9abd6dfed7a9c3de8155f5aa890fea3fb74d6607c3eb4 = $this->env->getExtension("native_profiler");
        $__internal_bbc6d106362ebc6095b9abd6dfed7a9c3de8155f5aa890fea3fb74d6607c3eb4->enter($__internal_bbc6d106362ebc6095b9abd6dfed7a9c3de8155f5aa890fea3fb74d6607c3eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_bbc6d106362ebc6095b9abd6dfed7a9c3de8155f5aa890fea3fb74d6607c3eb4->leave($__internal_bbc6d106362ebc6095b9abd6dfed7a9c3de8155f5aa890fea3fb74d6607c3eb4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
