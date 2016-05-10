<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_19c2d1b34b24cfb67d75e5ab0110e357934ba21af7979d05b463a0cea4d84daf extends Twig_Template
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
        $__internal_bb438b04e63fb031ec5786b63b64d156c59390395193119d604949b64fcb9ec0 = $this->env->getExtension("native_profiler");
        $__internal_bb438b04e63fb031ec5786b63b64d156c59390395193119d604949b64fcb9ec0->enter($__internal_bb438b04e63fb031ec5786b63b64d156c59390395193119d604949b64fcb9ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_bb438b04e63fb031ec5786b63b64d156c59390395193119d604949b64fcb9ec0->leave($__internal_bb438b04e63fb031ec5786b63b64d156c59390395193119d604949b64fcb9ec0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */
