<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_22cd1bd43625f22a4d94fa75749c4f1dd0a0bc0f17c07e571da49c83481e0289 extends Twig_Template
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
        $__internal_8d7743b19920540a28905ed9aa53e972dcc15beecb8f7b2cd9e86316162ecc92 = $this->env->getExtension("native_profiler");
        $__internal_8d7743b19920540a28905ed9aa53e972dcc15beecb8f7b2cd9e86316162ecc92->enter($__internal_8d7743b19920540a28905ed9aa53e972dcc15beecb8f7b2cd9e86316162ecc92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_8d7743b19920540a28905ed9aa53e972dcc15beecb8f7b2cd9e86316162ecc92->leave($__internal_8d7743b19920540a28905ed9aa53e972dcc15beecb8f7b2cd9e86316162ecc92_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
