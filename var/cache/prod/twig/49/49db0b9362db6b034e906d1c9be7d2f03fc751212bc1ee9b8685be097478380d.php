<?php

/* form_div_layout.html.twig */
class __TwigTemplate_0edb549e455e61c3a676b38af092c4414d3a1421056483d97d6699ab3d864d15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'range_widget' => array($this, 'block_range_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_879888a65d887822432f515677e7b27a2c77d43708db7e80b0ace52dabd3d743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_879888a65d887822432f515677e7b27a2c77d43708db7e80b0ace52dabd3d743->enter($__internal_879888a65d887822432f515677e7b27a2c77d43708db7e80b0ace52dabd3d743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 87
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 91
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 108
        $this->displayBlock('date_widget', $context, $blocks);
        // line 122
        $this->displayBlock('time_widget', $context, $blocks);
        // line 133
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 151
        $this->displayBlock('number_widget', $context, $blocks);
        // line 157
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 162
        $this->displayBlock('money_widget', $context, $blocks);
        // line 166
        $this->displayBlock('url_widget', $context, $blocks);
        // line 171
        $this->displayBlock('search_widget', $context, $blocks);
        // line 176
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 181
        $this->displayBlock('password_widget', $context, $blocks);
        // line 186
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 191
        $this->displayBlock('email_widget', $context, $blocks);
        // line 196
        $this->displayBlock('range_widget', $context, $blocks);
        // line 201
        $this->displayBlock('button_widget', $context, $blocks);
        // line 215
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 220
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 227
        $this->displayBlock('form_label', $context, $blocks);
        // line 249
        $this->displayBlock('button_label', $context, $blocks);
        // line 253
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 261
        $this->displayBlock('form_row', $context, $blocks);
        // line 269
        $this->displayBlock('button_row', $context, $blocks);
        // line 275
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 281
        $this->displayBlock('form', $context, $blocks);
        // line 287
        $this->displayBlock('form_start', $context, $blocks);
        // line 300
        $this->displayBlock('form_end', $context, $blocks);
        // line 307
        $this->displayBlock('form_errors', $context, $blocks);
        // line 317
        $this->displayBlock('form_rest', $context, $blocks);
        // line 324
        echo "
";
        // line 327
        $this->displayBlock('form_rows', $context, $blocks);
        // line 333
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 349
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 363
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 377
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_879888a65d887822432f515677e7b27a2c77d43708db7e80b0ace52dabd3d743->leave($__internal_879888a65d887822432f515677e7b27a2c77d43708db7e80b0ace52dabd3d743_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_d02a7d33a2f073056ac1b0d121a3f2a58bf916f60a96a507b729ff3eaa2001ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d02a7d33a2f073056ac1b0d121a3f2a58bf916f60a96a507b729ff3eaa2001ff->enter($__internal_d02a7d33a2f073056ac1b0d121a3f2a58bf916f60a96a507b729ff3eaa2001ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_d02a7d33a2f073056ac1b0d121a3f2a58bf916f60a96a507b729ff3eaa2001ff->leave($__internal_d02a7d33a2f073056ac1b0d121a3f2a58bf916f60a96a507b729ff3eaa2001ff_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_c5cf772a16e7a4d695061ac6b96a6e2fe605f7dac7158635ec8630d08046ae45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5cf772a16e7a4d695061ac6b96a6e2fe605f7dac7158635ec8630d08046ae45->enter($__internal_c5cf772a16e7a4d695061ac6b96a6e2fe605f7dac7158635ec8630d08046ae45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_c5cf772a16e7a4d695061ac6b96a6e2fe605f7dac7158635ec8630d08046ae45->leave($__internal_c5cf772a16e7a4d695061ac6b96a6e2fe605f7dac7158635ec8630d08046ae45_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_939901b2a9dc7d93dc41579ab722872bdc90902204e4dc744b68e5abac90fe08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_939901b2a9dc7d93dc41579ab722872bdc90902204e4dc744b68e5abac90fe08->enter($__internal_939901b2a9dc7d93dc41579ab722872bdc90902204e4dc744b68e5abac90fe08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()))) {
            // line 19
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_939901b2a9dc7d93dc41579ab722872bdc90902204e4dc744b68e5abac90fe08->leave($__internal_939901b2a9dc7d93dc41579ab722872bdc90902204e4dc744b68e5abac90fe08_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_e9e4050fbebf3fc83e76587c02af379ca5ca0663d0627290b27c4a166b3562c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9e4050fbebf3fc83e76587c02af379ca5ca0663d0627290b27c4a166b3562c5->enter($__internal_e9e4050fbebf3fc83e76587c02af379ca5ca0663d0627290b27c4a166b3562c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_e9e4050fbebf3fc83e76587c02af379ca5ca0663d0627290b27c4a166b3562c5->leave($__internal_e9e4050fbebf3fc83e76587c02af379ca5ca0663d0627290b27c4a166b3562c5_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_52d3ce1cfe8242d3f918fa3d2ed82c88316a41f2ad85f5491f59434e41c3bc97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52d3ce1cfe8242d3f918fa3d2ed82c88316a41f2ad85f5491f59434e41c3bc97->enter($__internal_52d3ce1cfe8242d3f918fa3d2ed82c88316a41f2ad85f5491f59434e41c3bc97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_52d3ce1cfe8242d3f918fa3d2ed82c88316a41f2ad85f5491f59434e41c3bc97->leave($__internal_52d3ce1cfe8242d3f918fa3d2ed82c88316a41f2ad85f5491f59434e41c3bc97_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_bbe1b54bf7a8b259af2c6dafd6ba830aec6385faef5a832b18e1d05db8c81db8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbe1b54bf7a8b259af2c6dafd6ba830aec6385faef5a832b18e1d05db8c81db8->enter($__internal_bbe1b54bf7a8b259af2c6dafd6ba830aec6385faef5a832b18e1d05db8c81db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_bbe1b54bf7a8b259af2c6dafd6ba830aec6385faef5a832b18e1d05db8c81db8->leave($__internal_bbe1b54bf7a8b259af2c6dafd6ba830aec6385faef5a832b18e1d05db8c81db8_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_54d62d89abf3dd9131cd065168cd0f1cf329f0d4d68192e0496db8c0824c18e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d62d89abf3dd9131cd065168cd0f1cf329f0d4d68192e0496db8c0824c18e5->enter($__internal_54d62d89abf3dd9131cd065168cd0f1cf329f0d4d68192e0496db8c0824c18e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_54d62d89abf3dd9131cd065168cd0f1cf329f0d4d68192e0496db8c0824c18e5->leave($__internal_54d62d89abf3dd9131cd065168cd0f1cf329f0d4d68192e0496db8c0824c18e5_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_1272a6b8ddfb37b50994cd4f9127c08c8a3878b27be293a8e1de6c449ba2d818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1272a6b8ddfb37b50994cd4f9127c08c8a3878b27be293a8e1de6c449ba2d818->enter($__internal_1272a6b8ddfb37b50994cd4f9127c08c8a3878b27be293a8e1de6c449ba2d818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if ((((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) &&  !(isset($context["placeholder_in_choices"]) ? $context["placeholder_in_choices"] : $this->getContext($context, "placeholder_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) && ( !$this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "size", array(), "any", true, true) || ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")) != "")) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_1272a6b8ddfb37b50994cd4f9127c08c8a3878b27be293a8e1de6c449ba2d818->leave($__internal_1272a6b8ddfb37b50994cd4f9127c08c8a3878b27be293a8e1de6c449ba2d818_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_3b57385ef6183479507d95089a2547a80e36f91f8f357425cf28e21d4fe8548e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b57385ef6183479507d95089a2547a80e36f91f8f357425cf28e21d4fe8548e->enter($__internal_3b57385ef6183479507d95089a2547a80e36f91f8f357425cf28e21d4fe8548e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                echo "<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if ($this->getAttribute($context["choice"], "attr", array())) {
                    echo " ";
                    $context["attr"] = $this->getAttribute($context["choice"], "attr", array());
                    $this->displayBlock("attributes", $context, $blocks);
                }
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_3b57385ef6183479507d95089a2547a80e36f91f8f357425cf28e21d4fe8548e->leave($__internal_3b57385ef6183479507d95089a2547a80e36f91f8f357425cf28e21d4fe8548e_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_2e770a00efe6caad398e0675f78d90b56523adfac0c65c0aac6bbb4752407f61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e770a00efe6caad398e0675f78d90b56523adfac0c65c0aac6bbb4752407f61->enter($__internal_2e770a00efe6caad398e0675f78d90b56523adfac0c65c0aac6bbb4752407f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 88
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_2e770a00efe6caad398e0675f78d90b56523adfac0c65c0aac6bbb4752407f61->leave($__internal_2e770a00efe6caad398e0675f78d90b56523adfac0c65c0aac6bbb4752407f61_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_0afa2236aab541247a9c79e4c3edbe6a9e8ec4cca0e24bb3ba05d9aa8f238bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0afa2236aab541247a9c79e4c3edbe6a9e8ec4cca0e24bb3ba05d9aa8f238bce->enter($__internal_0afa2236aab541247a9c79e4c3edbe6a9e8ec4cca0e24bb3ba05d9aa8f238bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 92
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_0afa2236aab541247a9c79e4c3edbe6a9e8ec4cca0e24bb3ba05d9aa8f238bce->leave($__internal_0afa2236aab541247a9c79e4c3edbe6a9e8ec4cca0e24bb3ba05d9aa8f238bce_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_ccd4cbc643fa6c8ff8602eb47f814bde07faafaf8f84e80188bfb5d6220d41e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccd4cbc643fa6c8ff8602eb47f814bde07faafaf8f84e80188bfb5d6220d41e4->enter($__internal_ccd4cbc643fa6c8ff8602eb47f814bde07faafaf8f84e80188bfb5d6220d41e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 96
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 100
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 102
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
            // line 103
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget');
            // line 104
            echo "</div>";
        }
        
        $__internal_ccd4cbc643fa6c8ff8602eb47f814bde07faafaf8f84e80188bfb5d6220d41e4->leave($__internal_ccd4cbc643fa6c8ff8602eb47f814bde07faafaf8f84e80188bfb5d6220d41e4_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_56305919b41c21a3a7319d3b53b06add09d3417ba75213967bd452b525d974f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56305919b41c21a3a7319d3b53b06add09d3417ba75213967bd452b525d974f1->enter($__internal_56305919b41c21a3a7319d3b53b06add09d3417ba75213967bd452b525d974f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 109
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 113
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 114
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 115
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 116
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 118
            echo "</div>";
        }
        
        $__internal_56305919b41c21a3a7319d3b53b06add09d3417ba75213967bd452b525d974f1->leave($__internal_56305919b41c21a3a7319d3b53b06add09d3417ba75213967bd452b525d974f1_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_9cc1b73e5e5519031a7844eccdd9f8f1627df990bd4d0fdc2ed90217f7824539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cc1b73e5e5519031a7844eccdd9f8f1627df990bd4d0fdc2ed90217f7824539->enter($__internal_9cc1b73e5e5519031a7844eccdd9f8f1627df990bd4d0fdc2ed90217f7824539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 123
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 124
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 126
            $context["vars"] = ((((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 127
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 128
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            // line 129
            echo "        </div>";
        }
        
        $__internal_9cc1b73e5e5519031a7844eccdd9f8f1627df990bd4d0fdc2ed90217f7824539->leave($__internal_9cc1b73e5e5519031a7844eccdd9f8f1627df990bd4d0fdc2ed90217f7824539_prof);

    }

    // line 133
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_d7d45c59cbe8c3bba1b1644fbf3d1287185454000594e0b3ac2abbd6743fdf0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7d45c59cbe8c3bba1b1644fbf3d1287185454000594e0b3ac2abbd6743fdf0b->enter($__internal_d7d45c59cbe8c3bba1b1644fbf3d1287185454000594e0b3ac2abbd6743fdf0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 134
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 135
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 137
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 138
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 139
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'widget');
            }
            // line 140
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'widget');
            }
            // line 141
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'widget');
            }
            // line 142
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'widget');
            }
            // line 143
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'widget');
            }
            // line 144
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'widget');
            }
            // line 145
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'widget');
            }
            // line 146
            if ((isset($context["with_invert"]) ? $context["with_invert"] : $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 147
            echo "</div>";
        }
        
        $__internal_d7d45c59cbe8c3bba1b1644fbf3d1287185454000594e0b3ac2abbd6743fdf0b->leave($__internal_d7d45c59cbe8c3bba1b1644fbf3d1287185454000594e0b3ac2abbd6743fdf0b_prof);

    }

    // line 151
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_c4abd55ee84b1b8ed894a3ae591bf0da5b982b58c51c6ef23b75fdfb9288b926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4abd55ee84b1b8ed894a3ae591bf0da5b982b58c51c6ef23b75fdfb9288b926->enter($__internal_c4abd55ee84b1b8ed894a3ae591bf0da5b982b58c51c6ef23b75fdfb9288b926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 153
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 154
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_c4abd55ee84b1b8ed894a3ae591bf0da5b982b58c51c6ef23b75fdfb9288b926->leave($__internal_c4abd55ee84b1b8ed894a3ae591bf0da5b982b58c51c6ef23b75fdfb9288b926_prof);

    }

    // line 157
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_ba7406920a386d457182c460e8462b126a4a619a6a548cd4e46676982e389685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba7406920a386d457182c460e8462b126a4a619a6a548cd4e46676982e389685->enter($__internal_ba7406920a386d457182c460e8462b126a4a619a6a548cd4e46676982e389685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 158
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "number")) : ("number"));
        // line 159
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_ba7406920a386d457182c460e8462b126a4a619a6a548cd4e46676982e389685->leave($__internal_ba7406920a386d457182c460e8462b126a4a619a6a548cd4e46676982e389685_prof);

    }

    // line 162
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_851fdf5263334c3b75ee45a203014ac48e7ca68828552e1ed5232b04d1386ff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_851fdf5263334c3b75ee45a203014ac48e7ca68828552e1ed5232b04d1386ff4->enter($__internal_851fdf5263334c3b75ee45a203014ac48e7ca68828552e1ed5232b04d1386ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 163
        echo twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_851fdf5263334c3b75ee45a203014ac48e7ca68828552e1ed5232b04d1386ff4->leave($__internal_851fdf5263334c3b75ee45a203014ac48e7ca68828552e1ed5232b04d1386ff4_prof);

    }

    // line 166
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_a5ed3ab83a8c04fa8dd2898fa4962cef3ababb2291ae957d7329f40270f56bf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5ed3ab83a8c04fa8dd2898fa4962cef3ababb2291ae957d7329f40270f56bf8->enter($__internal_a5ed3ab83a8c04fa8dd2898fa4962cef3ababb2291ae957d7329f40270f56bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 167
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "url")) : ("url"));
        // line 168
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_a5ed3ab83a8c04fa8dd2898fa4962cef3ababb2291ae957d7329f40270f56bf8->leave($__internal_a5ed3ab83a8c04fa8dd2898fa4962cef3ababb2291ae957d7329f40270f56bf8_prof);

    }

    // line 171
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_086973f9d74b3e37e1e250991ac485184092c252ed712e483b26d236cb382b41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_086973f9d74b3e37e1e250991ac485184092c252ed712e483b26d236cb382b41->enter($__internal_086973f9d74b3e37e1e250991ac485184092c252ed712e483b26d236cb382b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 172
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "search")) : ("search"));
        // line 173
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_086973f9d74b3e37e1e250991ac485184092c252ed712e483b26d236cb382b41->leave($__internal_086973f9d74b3e37e1e250991ac485184092c252ed712e483b26d236cb382b41_prof);

    }

    // line 176
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_ef88d666dc94cde2d17fc05b005ed93ffef54a2da9e738e3bba851869e14804b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef88d666dc94cde2d17fc05b005ed93ffef54a2da9e738e3bba851869e14804b->enter($__internal_ef88d666dc94cde2d17fc05b005ed93ffef54a2da9e738e3bba851869e14804b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 177
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 178
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_ef88d666dc94cde2d17fc05b005ed93ffef54a2da9e738e3bba851869e14804b->leave($__internal_ef88d666dc94cde2d17fc05b005ed93ffef54a2da9e738e3bba851869e14804b_prof);

    }

    // line 181
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_0129ff36d6819322d04d9e3adc76f3b2e4724cfa4b83b7222ce4529fb365be2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0129ff36d6819322d04d9e3adc76f3b2e4724cfa4b83b7222ce4529fb365be2c->enter($__internal_0129ff36d6819322d04d9e3adc76f3b2e4724cfa4b83b7222ce4529fb365be2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 182
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "password")) : ("password"));
        // line 183
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_0129ff36d6819322d04d9e3adc76f3b2e4724cfa4b83b7222ce4529fb365be2c->leave($__internal_0129ff36d6819322d04d9e3adc76f3b2e4724cfa4b83b7222ce4529fb365be2c_prof);

    }

    // line 186
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_70fba42a7edf8c8dd1b5205b6b484443d5c07eb6eae55d1bbbc402a717e41ae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70fba42a7edf8c8dd1b5205b6b484443d5c07eb6eae55d1bbbc402a717e41ae2->enter($__internal_70fba42a7edf8c8dd1b5205b6b484443d5c07eb6eae55d1bbbc402a717e41ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 187
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 188
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_70fba42a7edf8c8dd1b5205b6b484443d5c07eb6eae55d1bbbc402a717e41ae2->leave($__internal_70fba42a7edf8c8dd1b5205b6b484443d5c07eb6eae55d1bbbc402a717e41ae2_prof);

    }

    // line 191
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_d6c2f374b298f15e43349d5c014978244f328f2df2bf0e2e465a90849b437d0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6c2f374b298f15e43349d5c014978244f328f2df2bf0e2e465a90849b437d0b->enter($__internal_d6c2f374b298f15e43349d5c014978244f328f2df2bf0e2e465a90849b437d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 192
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "email")) : ("email"));
        // line 193
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_d6c2f374b298f15e43349d5c014978244f328f2df2bf0e2e465a90849b437d0b->leave($__internal_d6c2f374b298f15e43349d5c014978244f328f2df2bf0e2e465a90849b437d0b_prof);

    }

    // line 196
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_591cb0997065bad050f5fe859f05872227a0f7a0a370d980eeb9473c1b074260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_591cb0997065bad050f5fe859f05872227a0f7a0a370d980eeb9473c1b074260->enter($__internal_591cb0997065bad050f5fe859f05872227a0f7a0a370d980eeb9473c1b074260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 197
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "range")) : ("range"));
        // line 198
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_591cb0997065bad050f5fe859f05872227a0f7a0a370d980eeb9473c1b074260->leave($__internal_591cb0997065bad050f5fe859f05872227a0f7a0a370d980eeb9473c1b074260_prof);

    }

    // line 201
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_ce1773b65d90232ac7d46eadab412dd6393682367df35e4205a00bc4e7bccb1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce1773b65d90232ac7d46eadab412dd6393682367df35e4205a00bc4e7bccb1d->enter($__internal_ce1773b65d90232ac7d46eadab412dd6393682367df35e4205a00bc4e7bccb1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 202
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 203
            if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                // line 204
                $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                 // line 205
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                 // line 206
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            } else {
                // line 209
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            }
        }
        // line 212
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "</button>";
        
        $__internal_ce1773b65d90232ac7d46eadab412dd6393682367df35e4205a00bc4e7bccb1d->leave($__internal_ce1773b65d90232ac7d46eadab412dd6393682367df35e4205a00bc4e7bccb1d_prof);

    }

    // line 215
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_237468bd497b1f92ae947f025da3c25170b643f04abf7d1d89c8cf5bb20bdf49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_237468bd497b1f92ae947f025da3c25170b643f04abf7d1d89c8cf5bb20bdf49->enter($__internal_237468bd497b1f92ae947f025da3c25170b643f04abf7d1d89c8cf5bb20bdf49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 216
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 217
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_237468bd497b1f92ae947f025da3c25170b643f04abf7d1d89c8cf5bb20bdf49->leave($__internal_237468bd497b1f92ae947f025da3c25170b643f04abf7d1d89c8cf5bb20bdf49_prof);

    }

    // line 220
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_0e37c3d950709babc79b6b98087b63e1f2d583bacda877897d66541391b8403b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e37c3d950709babc79b6b98087b63e1f2d583bacda877897d66541391b8403b->enter($__internal_0e37c3d950709babc79b6b98087b63e1f2d583bacda877897d66541391b8403b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 221
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 222
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_0e37c3d950709babc79b6b98087b63e1f2d583bacda877897d66541391b8403b->leave($__internal_0e37c3d950709babc79b6b98087b63e1f2d583bacda877897d66541391b8403b_prof);

    }

    // line 227
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_d90cdc14b6107bf1f1a123e2738b4a166a4e76ce1b4c1107320159157a00d5f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d90cdc14b6107bf1f1a123e2738b4a166a4e76ce1b4c1107320159157a00d5f5->enter($__internal_d90cdc14b6107bf1f1a123e2738b4a166a4e76ce1b4c1107320159157a00d5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 228
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 229
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 230
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            }
            // line 232
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 233
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 235
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 236
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 237
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 238
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 239
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 242
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 245
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</label>";
        }
        
        $__internal_d90cdc14b6107bf1f1a123e2738b4a166a4e76ce1b4c1107320159157a00d5f5->leave($__internal_d90cdc14b6107bf1f1a123e2738b4a166a4e76ce1b4c1107320159157a00d5f5_prof);

    }

    // line 249
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_ec3325198c3ea22a066cba1f5d9dd412986792000d66baada616f8978bc36d06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec3325198c3ea22a066cba1f5d9dd412986792000d66baada616f8978bc36d06->enter($__internal_ec3325198c3ea22a066cba1f5d9dd412986792000d66baada616f8978bc36d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_ec3325198c3ea22a066cba1f5d9dd412986792000d66baada616f8978bc36d06->leave($__internal_ec3325198c3ea22a066cba1f5d9dd412986792000d66baada616f8978bc36d06_prof);

    }

    // line 253
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_d030af61081ab312792685a032f41141af56c6ea76e29ec0ceaeda1c2f3c363b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d030af61081ab312792685a032f41141af56c6ea76e29ec0ceaeda1c2f3c363b->enter($__internal_d030af61081ab312792685a032f41141af56c6ea76e29ec0ceaeda1c2f3c363b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 258
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_d030af61081ab312792685a032f41141af56c6ea76e29ec0ceaeda1c2f3c363b->leave($__internal_d030af61081ab312792685a032f41141af56c6ea76e29ec0ceaeda1c2f3c363b_prof);

    }

    // line 261
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_389c87938dc0bc0325cc8c39210136cc5ca85a271f8d1c59eace6d6701492016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_389c87938dc0bc0325cc8c39210136cc5ca85a271f8d1c59eace6d6701492016->enter($__internal_389c87938dc0bc0325cc8c39210136cc5ca85a271f8d1c59eace6d6701492016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 262
        echo "<div>";
        // line 263
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 264
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 265
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 266
        echo "</div>";
        
        $__internal_389c87938dc0bc0325cc8c39210136cc5ca85a271f8d1c59eace6d6701492016->leave($__internal_389c87938dc0bc0325cc8c39210136cc5ca85a271f8d1c59eace6d6701492016_prof);

    }

    // line 269
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_414d154ae16db5933f739b8c9a303d842052efce2d90f75f55fb91fa107869af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_414d154ae16db5933f739b8c9a303d842052efce2d90f75f55fb91fa107869af->enter($__internal_414d154ae16db5933f739b8c9a303d842052efce2d90f75f55fb91fa107869af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 270
        echo "<div>";
        // line 271
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 272
        echo "</div>";
        
        $__internal_414d154ae16db5933f739b8c9a303d842052efce2d90f75f55fb91fa107869af->leave($__internal_414d154ae16db5933f739b8c9a303d842052efce2d90f75f55fb91fa107869af_prof);

    }

    // line 275
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_f1b926565dbe647152698c25a9eba70abfc1fe808652b53a98be31664a2bcb90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1b926565dbe647152698c25a9eba70abfc1fe808652b53a98be31664a2bcb90->enter($__internal_f1b926565dbe647152698c25a9eba70abfc1fe808652b53a98be31664a2bcb90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 276
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        
        $__internal_f1b926565dbe647152698c25a9eba70abfc1fe808652b53a98be31664a2bcb90->leave($__internal_f1b926565dbe647152698c25a9eba70abfc1fe808652b53a98be31664a2bcb90_prof);

    }

    // line 281
    public function block_form($context, array $blocks = array())
    {
        $__internal_e0efe75e74dfc4cbd1db63d5c4c1d89e859449094c87261376e5efafed87b78d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0efe75e74dfc4cbd1db63d5c4c1d89e859449094c87261376e5efafed87b78d->enter($__internal_e0efe75e74dfc4cbd1db63d5c4c1d89e859449094c87261376e5efafed87b78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 282
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        // line 283
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 284
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_e0efe75e74dfc4cbd1db63d5c4c1d89e859449094c87261376e5efafed87b78d->leave($__internal_e0efe75e74dfc4cbd1db63d5c4c1d89e859449094c87261376e5efafed87b78d_prof);

    }

    // line 287
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_17e17f3fd2fe45df28c3aeab811185ff395c81d1d8820c340fc71a9bb14e4ff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17e17f3fd2fe45df28c3aeab811185ff395c81d1d8820c340fc71a9bb14e4ff0->enter($__internal_17e17f3fd2fe45df28c3aeab811185ff395c81d1d8820c340fc71a9bb14e4ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 288
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")));
        // line 289
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 290
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method"));
        } else {
            // line 292
            $context["form_method"] = "POST";
        }
        // line 294
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method"))), "html", null, true);
        echo "\"";
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 295
        if (((isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method")) != (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) {
            // line 296
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "html", null, true);
            echo "\" />";
        }
        
        $__internal_17e17f3fd2fe45df28c3aeab811185ff395c81d1d8820c340fc71a9bb14e4ff0->leave($__internal_17e17f3fd2fe45df28c3aeab811185ff395c81d1d8820c340fc71a9bb14e4ff0_prof);

    }

    // line 300
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_956d1cc96ef0e85fc750305433e7d48ff7828c2910932e5c6828f1b34f694162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_956d1cc96ef0e85fc750305433e7d48ff7828c2910932e5c6828f1b34f694162->enter($__internal_956d1cc96ef0e85fc750305433e7d48ff7828c2910932e5c6828f1b34f694162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 301
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) ? $context["render_rest"] : $this->getContext($context, "render_rest")))) {
            // line 302
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        }
        // line 304
        echo "</form>";
        
        $__internal_956d1cc96ef0e85fc750305433e7d48ff7828c2910932e5c6828f1b34f694162->leave($__internal_956d1cc96ef0e85fc750305433e7d48ff7828c2910932e5c6828f1b34f694162_prof);

    }

    // line 307
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_fee4a803818a19a46ca1ec7dc43cecee6a251d93e7d2db946774f1e6b23065c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fee4a803818a19a46ca1ec7dc43cecee6a251d93e7d2db946774f1e6b23065c2->enter($__internal_fee4a803818a19a46ca1ec7dc43cecee6a251d93e7d2db946774f1e6b23065c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 308
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 309
            echo "<ul>";
            // line 310
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 311
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 313
            echo "</ul>";
        }
        
        $__internal_fee4a803818a19a46ca1ec7dc43cecee6a251d93e7d2db946774f1e6b23065c2->leave($__internal_fee4a803818a19a46ca1ec7dc43cecee6a251d93e7d2db946774f1e6b23065c2_prof);

    }

    // line 317
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_7c6320728b909e3746861b72753832db7182de57d754a622ee92c6bfe1762e57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c6320728b909e3746861b72753832db7182de57d754a622ee92c6bfe1762e57->enter($__internal_7c6320728b909e3746861b72753832db7182de57d754a622ee92c6bfe1762e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 318
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 319
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 320
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_7c6320728b909e3746861b72753832db7182de57d754a622ee92c6bfe1762e57->leave($__internal_7c6320728b909e3746861b72753832db7182de57d754a622ee92c6bfe1762e57_prof);

    }

    // line 327
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_9c959239aa8349b21f00481de971bdb7eaaf5beb5f1faf0f2e936a8b8e5dbc94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c959239aa8349b21f00481de971bdb7eaaf5beb5f1faf0f2e936a8b8e5dbc94->enter($__internal_9c959239aa8349b21f00481de971bdb7eaaf5beb5f1faf0f2e936a8b8e5dbc94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 328
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 329
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_9c959239aa8349b21f00481de971bdb7eaaf5beb5f1faf0f2e936a8b8e5dbc94->leave($__internal_9c959239aa8349b21f00481de971bdb7eaaf5beb5f1faf0f2e936a8b8e5dbc94_prof);

    }

    // line 333
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_b0f7e3b5bdf66fe4b4d9ffacbb51be487b65e4fc6d12cdc64b519c9880b4285a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0f7e3b5bdf66fe4b4d9ffacbb51be487b65e4fc6d12cdc64b519c9880b4285a->enter($__internal_b0f7e3b5bdf66fe4b4d9ffacbb51be487b65e4fc6d12cdc64b519c9880b4285a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 334
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        // line 335
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 336
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 337
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 338
            echo " ";
            // line 339
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 340
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 341
$context["attrvalue"] === true)) {
                // line 342
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 343
$context["attrvalue"] === false)) {
                // line 344
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b0f7e3b5bdf66fe4b4d9ffacbb51be487b65e4fc6d12cdc64b519c9880b4285a->leave($__internal_b0f7e3b5bdf66fe4b4d9ffacbb51be487b65e4fc6d12cdc64b519c9880b4285a_prof);

    }

    // line 349
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_eafdc486fc9e307b65b5b60b097fd826c3f73df562e9447651c29b49444272cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eafdc486fc9e307b65b5b60b097fd826c3f73df562e9447651c29b49444272cd->enter($__internal_eafdc486fc9e307b65b5b60b097fd826c3f73df562e9447651c29b49444272cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 350
        if ( !twig_test_empty((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 351
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 352
            echo " ";
            // line 353
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 354
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 355
$context["attrvalue"] === true)) {
                // line 356
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 357
$context["attrvalue"] === false)) {
                // line 358
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_eafdc486fc9e307b65b5b60b097fd826c3f73df562e9447651c29b49444272cd->leave($__internal_eafdc486fc9e307b65b5b60b097fd826c3f73df562e9447651c29b49444272cd_prof);

    }

    // line 363
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_1f5deb18175107b1f1d22db472234c96cdec8a48cee687d178e805ca72ad20ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f5deb18175107b1f1d22db472234c96cdec8a48cee687d178e805ca72ad20ad->enter($__internal_1f5deb18175107b1f1d22db472234c96cdec8a48cee687d178e805ca72ad20ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 364
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 365
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 366
            echo " ";
            // line 367
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 368
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 369
$context["attrvalue"] === true)) {
                // line 370
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 371
$context["attrvalue"] === false)) {
                // line 372
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_1f5deb18175107b1f1d22db472234c96cdec8a48cee687d178e805ca72ad20ad->leave($__internal_1f5deb18175107b1f1d22db472234c96cdec8a48cee687d178e805ca72ad20ad_prof);

    }

    // line 377
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_5346111f12974727dba1530c648c4ebfb73e6f9ca84cc856ddab4908b79d57d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5346111f12974727dba1530c648c4ebfb73e6f9ca84cc856ddab4908b79d57d8->enter($__internal_5346111f12974727dba1530c648c4ebfb73e6f9ca84cc856ddab4908b79d57d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 378
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 379
            echo " ";
            // line 380
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 381
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 382
$context["attrvalue"] === true)) {
                // line 383
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 384
$context["attrvalue"] === false)) {
                // line 385
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5346111f12974727dba1530c648c4ebfb73e6f9ca84cc856ddab4908b79d57d8->leave($__internal_5346111f12974727dba1530c648c4ebfb73e6f9ca84cc856ddab4908b79d57d8_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1328 => 385,  1326 => 384,  1321 => 383,  1319 => 382,  1314 => 381,  1312 => 380,  1310 => 379,  1306 => 378,  1300 => 377,  1285 => 372,  1283 => 371,  1278 => 370,  1276 => 369,  1271 => 368,  1269 => 367,  1267 => 366,  1263 => 365,  1254 => 364,  1248 => 363,  1233 => 358,  1231 => 357,  1226 => 356,  1224 => 355,  1219 => 354,  1217 => 353,  1215 => 352,  1211 => 351,  1205 => 350,  1199 => 349,  1184 => 344,  1182 => 343,  1177 => 342,  1175 => 341,  1170 => 340,  1168 => 339,  1166 => 338,  1162 => 337,  1158 => 336,  1154 => 335,  1148 => 334,  1142 => 333,  1131 => 329,  1127 => 328,  1121 => 327,  1109 => 320,  1107 => 319,  1103 => 318,  1097 => 317,  1089 => 313,  1081 => 311,  1077 => 310,  1075 => 309,  1073 => 308,  1067 => 307,  1060 => 304,  1057 => 302,  1055 => 301,  1049 => 300,  1039 => 296,  1037 => 295,  1010 => 294,  1007 => 292,  1004 => 290,  1002 => 289,  1000 => 288,  994 => 287,  987 => 284,  985 => 283,  983 => 282,  977 => 281,  970 => 276,  964 => 275,  957 => 272,  955 => 271,  953 => 270,  947 => 269,  940 => 266,  938 => 265,  936 => 264,  934 => 263,  932 => 262,  926 => 261,  919 => 258,  913 => 253,  902 => 249,  879 => 245,  875 => 242,  872 => 239,  871 => 238,  870 => 237,  868 => 236,  866 => 235,  863 => 233,  861 => 232,  858 => 230,  856 => 229,  854 => 228,  848 => 227,  841 => 222,  839 => 221,  833 => 220,  826 => 217,  824 => 216,  818 => 215,  805 => 212,  801 => 209,  798 => 206,  797 => 205,  796 => 204,  794 => 203,  792 => 202,  786 => 201,  779 => 198,  777 => 197,  771 => 196,  764 => 193,  762 => 192,  756 => 191,  749 => 188,  747 => 187,  741 => 186,  734 => 183,  732 => 182,  726 => 181,  718 => 178,  716 => 177,  710 => 176,  703 => 173,  701 => 172,  695 => 171,  688 => 168,  686 => 167,  680 => 166,  673 => 163,  667 => 162,  660 => 159,  658 => 158,  652 => 157,  645 => 154,  643 => 153,  637 => 151,  629 => 147,  625 => 146,  621 => 145,  617 => 144,  613 => 143,  609 => 142,  605 => 141,  601 => 140,  597 => 139,  595 => 138,  591 => 137,  588 => 135,  586 => 134,  580 => 133,  572 => 129,  562 => 128,  557 => 127,  555 => 126,  552 => 124,  550 => 123,  544 => 122,  536 => 118,  534 => 116,  533 => 115,  532 => 114,  531 => 113,  527 => 112,  524 => 110,  522 => 109,  516 => 108,  508 => 104,  506 => 103,  504 => 102,  502 => 101,  500 => 100,  496 => 99,  493 => 97,  491 => 96,  485 => 95,  468 => 92,  462 => 91,  445 => 88,  439 => 87,  406 => 82,  403 => 80,  401 => 79,  399 => 78,  394 => 77,  392 => 76,  375 => 75,  369 => 74,  362 => 71,  360 => 70,  358 => 69,  352 => 66,  350 => 65,  348 => 64,  346 => 63,  344 => 62,  335 => 60,  333 => 59,  326 => 58,  323 => 56,  321 => 55,  315 => 54,  308 => 51,  302 => 49,  300 => 48,  296 => 47,  292 => 46,  286 => 45,  278 => 41,  275 => 39,  273 => 38,  267 => 37,  256 => 34,  250 => 33,  243 => 30,  240 => 28,  238 => 27,  232 => 26,  225 => 23,  223 => 22,  221 => 21,  218 => 19,  216 => 18,  212 => 17,  206 => 16,  189 => 13,  187 => 12,  181 => 11,  173 => 7,  170 => 5,  168 => 4,  162 => 3,  155 => 377,  153 => 363,  151 => 349,  149 => 333,  147 => 327,  144 => 324,  142 => 317,  140 => 307,  138 => 300,  136 => 287,  134 => 281,  132 => 275,  130 => 269,  128 => 261,  126 => 253,  124 => 249,  122 => 227,  120 => 220,  118 => 215,  116 => 201,  114 => 196,  112 => 191,  110 => 186,  108 => 181,  106 => 176,  104 => 171,  102 => 166,  100 => 162,  98 => 157,  96 => 151,  94 => 133,  92 => 122,  90 => 108,  88 => 95,  86 => 91,  84 => 87,  82 => 74,  80 => 54,  78 => 45,  76 => 37,  74 => 33,  72 => 26,  70 => 16,  68 => 11,  66 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Widgets #}

{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
    <div {{ block('widget_container_attributes') }}>
        {%- if form.parent is empty -%}
            {{ form_errors(form) }}
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
    {% if prototype is defined %}
        {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
    {% endif %}
    {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
    {% if expanded %}
        {{- block('choice_widget_expanded') -}}
    {% else %}
        {{- block('choice_widget_collapsed') -}}
    {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
        {{- form_widget(child) -}}
        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice.attr %} {% set attr = choice.attr %}{{ block('attributes') }}{% endif %}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock radio_widget -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            {%- if with_years %}{{ form_widget(form.years) }}{% endif -%}
            {%- if with_months %}{{ form_widget(form.months) }}{% endif -%}
            {%- if with_weeks %}{{ form_widget(form.weeks) }}{% endif -%}
            {%- if with_days %}{{ form_widget(form.days) }}{% endif -%}
            {%- if with_hours %}{{ form_widget(form.hours) }}{% endif -%}
            {%- if with_minutes %}{{ form_widget(form.minutes) }}{% endif -%}
            {%- if with_seconds %}{{ form_widget(form.seconds) }}{% endif -%}
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{%- block number_widget -%}
    {# type=\"number\" doesn't work with floats #}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
    {%- set type = type|default('number') -%}
    {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
    {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
    {%- set type = type|default('url') -%}
    {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
    {%- set type = type|default('search') -%}
    {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
    {%- set type = type|default('password') -%}
    {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
    {%- set type = type|default('hidden') -%}
    {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
    {%- set type = type|default('email') -%}
    {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block range_widget -%}
    {% set type = type|default('range') %}
    {{- block('form_widget_simple') -}}
{%- endblock range_widget %}

{%- block button_widget -%}
    {%- if label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {{ block('button_widget') }}
{%- endblock reset_widget -%}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>
    {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
    {#
    No need to render the errors here, as all errors are mapped
    to the first child (see RepeatedTypeValidatorExtension).
    #}
    {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
    <div>
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock form_row -%}

{%- block button_row -%}
    <div>
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
    {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
    {{ form_start(form) }}
        {{- form_widget(form) -}}
    {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
    <form name=\"{{ name }}\" method=\"{{ form_method|lower }}\"{% if action != '' %} action=\"{{ action }}\"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
    {%- if not render_rest is defined or render_rest -%}
        {{ form_rest(form) }}
    {%- endif -%}
    </form>
{%- endblock form_end -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
    <ul>
        {%- for error in errors -%}
            <li>{{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
    {% for child in form -%}
        {% if not child.rendered %}
            {{- form_row(child) -}}
        {% endif %}
    {%- endfor %}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
    {% for child in form %}
        {{- form_row(child) -}}
    {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"
    {%- if disabled %} disabled=\"disabled\"{% endif -%}
    {%- if required %} required=\"required\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
    {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock button_attributes -%}

{% block attributes -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}
", "form_div_layout.html.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\form_div_layout.html.twig");
    }
}
