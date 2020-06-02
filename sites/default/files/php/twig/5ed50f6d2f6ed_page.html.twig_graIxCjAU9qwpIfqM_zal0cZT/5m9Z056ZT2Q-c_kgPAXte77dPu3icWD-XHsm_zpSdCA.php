<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/medicare_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_1207593323d10da1160841c60a4cd4c948a6dbe742c7d65c44aedcb4892d05e5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 69, "for" => 159];
        $filters = ["escape" => 70, "raw" => 160, "date" => 568];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'date'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 60
        echo "
<!-- Start: Top Bar -->

<div class=\"top-nav\">
  <div class=\"container\">
    <div class=\"row\">

      <div class=\"col-md-6\">

        ";
        // line 69
        if ($this->getAttribute(($context["page"] ?? null), "message", [])) {
            // line 70
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "message", [])), "html", null, true);
            echo "
        ";
        }
        // line 72
        echo "
        ";
        // line 73
        if ($this->getAttribute(($context["page"] ?? null), "call", [])) {
            // line 74
            echo "          <i class=\"fa fa-phone\"></i>
          ";
            // line 75
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "call", [])), "html", null, true);
            echo "
        ";
        }
        // line 77
        echo "
      </div>
      
      ";
        // line 80
        if (($context["show_social_icon"] ?? null)) {
            // line 81
            echo "        <div class=\"col-md-6\">
          <p class=\"social-media\">
            Follow us 
            ";
            // line 84
            if (($context["facebook_url"] ?? null)) {
                // line 85
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
                echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
            ";
            }
            // line 87
            echo "            ";
            if (($context["google_plus_url"] ?? null)) {
                // line 88
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null)), "html", null, true);
                echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fab fa-google-plus-g\"></i></a>
            ";
            }
            // line 90
            echo "            ";
            if (($context["twitter_url"] ?? null)) {
                // line 91
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
                echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
            ";
            }
            // line 93
            echo "            ";
            if (($context["linkedin_url"] ?? null)) {
                // line 94
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null)), "html", null, true);
                echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
            ";
            }
            // line 96
            echo "            ";
            if (($context["pinterest_url"] ?? null)) {
                // line 97
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null)), "html", null, true);
                echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fab fa-pinterest-p\"></i></a>
            ";
            }
            // line 99
            echo "            ";
            if (($context["rss_url"] ?? null)) {
                // line 100
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null)), "html", null, true);
                echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
            ";
            }
            // line 102
            echo "          </p>
        </div>
      ";
        }
        // line 105
        echo "     
    </div>
  </div>
</div>

<!-- End: Top Bar -->


<!-- Start: Header -->

<div class=\"header\">
  <div class=\"container\">
    <div class=\"row\">

      <div class=\"navbar-header col-md-3\">
        
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <i class=\"fas fa-bars\"></i>
        </button>

        ";
        // line 125
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 126
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
        ";
        }
        // line 128
        echo "
      </div>

      ";
        // line 131
        if (($this->getAttribute(($context["page"] ?? null), "primary_menu", []) || $this->getAttribute(($context["page"] ?? null), "search", []))) {
            // line 132
            echo "        <div class=\"col-md-9\">

          ";
            // line 134
            if ($this->getAttribute(($context["page"] ?? null), "search", [])) {
                // line 135
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search", [])), "html", null, true);
                echo "
          ";
            }
            // line 137
            echo "
          ";
            // line 138
            if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
                // line 139
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
                echo "
          ";
            }
            // line 141
            echo "          
        </div>
      ";
        }
        // line 144
        echo "
    </div>
  </div>
</div>

<!-- End: Header -->


<!-- Start: Slides -->

";
        // line 154
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 155
            echo "  
  <div class=\"container-\">
    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 159
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 160
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"]));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            echo "      </ul>
    </div>
  </div>

";
        }
        // line 167
        echo "
<!-- End: Slides -->


<!-- Start: Clients -->

";
        // line 173
        if ($this->getAttribute(($context["page"] ?? null), "clients", [])) {
            echo " 

  <div class=\"clients\" id=\"clients\">

    ";
            // line 177
            if ($this->getAttribute(($context["page"] ?? null), "clients_title", [])) {
                // line 178
                echo "      <h2 class=\"custom-block-title\" >
        ";
                // line 179
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "clients_title", [])), "html", null, true);
                echo "
      </h2>
    ";
            }
            // line 182
            echo "
    <div class=\"container\">
      ";
            // line 184
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "clients", [])), "html", null, true);
            echo "
    </div>

  </div>

";
        }
        // line 190
        echo "
<!--End: Clients -->


<!--Start: Top message -->

";
        // line 196
        if ($this->getAttribute(($context["page"] ?? null), "topmessage", [])) {
            // line 197
            echo "
  <div class=\"top-message\">
    <div class=\"container\">
      ";
            // line 200
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topmessage", [])), "html", null, true);
            echo "
    </div>
  </div>

";
        }
        // line 205
        echo "
<!--End: Top message -->


<!-- Start: Top widget -->

";
        // line 211
        if ((($this->getAttribute(($context["page"] ?? null), "topwidget_first", []) || $this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) || $this->getAttribute(($context["page"] ?? null), "topwidget_third", []))) {
            // line 212
            echo "  
  <div class=\"topwidget\" id=\"topwidget\">
    <div class=\"container\">

      ";
            // line 216
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_title", [])) {
                // line 217
                echo "        <div class=\"custom-block-title\">
          ";
                // line 218
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_title", [])), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 221
            echo "
      <div class=\"row topwidget-list clearfix\">
      
        ";
            // line 224
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_first", [])) {
                // line 225
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_first", [])), "html", null, true);
                echo "</div>
        ";
            }
            // line 227
            echo "       
        ";
            // line 228
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) {
                // line 229
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_second", [])), "html", null, true);
                echo "</div>
        ";
            }
            // line 231
            echo "               
        ";
            // line 232
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_third", [])) {
                // line 233
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_third", [])), "html", null, true);
                echo "</div>
        ";
            }
            // line 235
            echo "
      </div>

    </div>
  </div>

";
        }
        // line 242
        echo "
<!--End: Top widget -->

    
<!--Start: Highlighted -->

";
        // line 248
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 249
            echo "
  <div class=\"highlighted\">
    <div class=\"container\">
      ";
            // line 252
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
    </div>
  </div>

";
        }
        // line 257
        echo "
<!--End: Highlighted -->


<!--Start: Title -->

";
        // line 263
        if (($this->getAttribute(($context["page"] ?? null), "page_title", []) &&  !($context["is_front"] ?? null))) {
            // line 264
            echo "
  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        ";
            // line 268
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
            echo "
      </div>
    </div>
  </div>

";
        }
        // line 274
        echo "
<!--End: Title -->


<div class=\"main-content\">
  <div class=\"container\">
    <div class=\"\">

      <!--Start: Breadcrumb -->

      ";
        // line 284
        if ( !($context["is_front"] ?? null)) {
            // line 285
            echo "        <div class=\"row\">
          <div class=\"col-md-12\">";
            // line 286
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
            echo "</div>
        </div>
      ";
        }
        // line 289
        echo "
      <!--End: Breadcrumb -->

      <div class=\"row layout\">

        <!--- Start: Left sidebar -->
        ";
        // line 295
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 296
            echo "          <div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null)), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 298
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 302
        echo "        <!-- End Left sidebar -->

        <!--- Start Content -->
        ";
        // line 305
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 306
            echo "          <div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null)), "html", null, true);
            echo ">
            <div class=\"content_layout\">
              ";
            // line 308
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
            </div>              
          </div>
        ";
        }
        // line 312
        echo "        <!-- End: Content -->

        <!-- Start: Right sidebar -->
        ";
        // line 315
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 316
            echo "          <div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 318
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 322
        echo "        <!-- End: Right sidebar -->
        
      </div>
    
    </div>
  </div>
</div>

<!-- End: Main content -->


<!-- Start: Features -->

";
        // line 335
        if ((($this->getAttribute(($context["page"] ?? null), "features_first", []) || $this->getAttribute(($context["page"] ?? null), "features_second", [])) || $this->getAttribute(($context["page"] ?? null), "features_third", []))) {
            // line 336
            echo "
  <div class=\"features\">
    <div class=\"container\">

      ";
            // line 340
            if ($this->getAttribute(($context["page"] ?? null), "features_title", [])) {
                // line 341
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 342
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_title", [])), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 345
            echo "
      <div class=\"row features-list\">

        ";
            // line 348
            if ($this->getAttribute(($context["page"] ?? null), "features_first", [])) {
                // line 349
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_first_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 350
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 353
            echo "
        ";
            // line 354
            if ($this->getAttribute(($context["page"] ?? null), "features_second", [])) {
                // line 355
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 356
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 359
            echo "
        ";
            // line 360
            if ($this->getAttribute(($context["page"] ?? null), "features_third", [])) {
                // line 361
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 362
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 365
            echo "
      </div>

    </div>
  </div>

";
        }
        // line 372
        echo "
<!--End: Features -->


<!-- Start: Updates widgets -->

";
        // line 378
        if ((($this->getAttribute(($context["page"] ?? null), "updates_first", []) || $this->getAttribute(($context["page"] ?? null), "updates_second", [])) || $this->getAttribute(($context["page"] ?? null), "updates_third", []))) {
            // line 379
            echo "
  <div class=\"updates\" id=\"updates\">    
    <div class=\"container\">

      ";
            // line 383
            if ($this->getAttribute(($context["page"] ?? null), "updates_title", [])) {
                // line 384
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 385
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "updates_title", [])), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 388
            echo "
      <div class=\"row updates-list\">
        
        ";
            // line 391
            if ($this->getAttribute(($context["page"] ?? null), "updates_first", [])) {
                // line 392
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 393
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "updates_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 396
            echo "
        ";
            // line 397
            if ($this->getAttribute(($context["page"] ?? null), "updates_second", [])) {
                // line 398
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 399
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "updates_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 402
            echo "        
        ";
            // line 403
            if ($this->getAttribute(($context["page"] ?? null), "updates_third", [])) {
                // line 404
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 405
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "updates_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 408
            echo "         
        ";
            // line 409
            if ($this->getAttribute(($context["page"] ?? null), "updates_forth", [])) {
                // line 410
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 411
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "updates_forth", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 414
            echo "
      </div>
    </div>
  </div>

";
        }
        // line 420
        echo "
<!--End: Updates widgets -->


<!-- Start: Middle widgets -->

";
        // line 426
        if (((($this->getAttribute(($context["page"] ?? null), "midwidget_first", []) || $this->getAttribute(($context["page"] ?? null), "midwidget_second", [])) || $this->getAttribute(($context["page"] ?? null), "midwidget_third", [])) || $this->getAttribute(($context["page"] ?? null), "midwidget_forth", []))) {
            // line 427
            echo "
  <div class=\"midwidget\" id=\"midwidget\">    
    <div class=\"container\">

      ";
            // line 431
            if ($this->getAttribute(($context["page"] ?? null), "midwidget_title", [])) {
                // line 432
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 433
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "midwidget_title", [])), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 436
            echo "
      <div class=\"row midwidget-list\">
         
        ";
            // line 439
            if ($this->getAttribute(($context["page"] ?? null), "midwidget_first", [])) {
                // line 440
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 441
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "midwidget_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 444
            echo "
        ";
            // line 445
            if ($this->getAttribute(($context["page"] ?? null), "midwidget_second", [])) {
                // line 446
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 447
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "midwidget_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 450
            echo "        
        ";
            // line 451
            if ($this->getAttribute(($context["page"] ?? null), "midwidget_third", [])) {
                // line 452
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 453
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "midwidget_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 456
            echo "
        ";
            // line 457
            if ($this->getAttribute(($context["page"] ?? null), "midwidget_forth", [])) {
                // line 458
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["midwidget_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 459
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "midwidget_forth", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 462
            echo "
      </div>

    </div>
  </div>

";
        }
        // line 469
        echo "
<!--End: Middle widgets -->


<!-- Start: Bottom widgets -->

";
        // line 475
        if (((($this->getAttribute(($context["page"] ?? null), "bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "bottom_second", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_third", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_forth", []))) {
            // line 476
            echo "
  <div class=\"btmwidget\" id=\"btmwidget\">    
    <div class=\"container\">

      ";
            // line 480
            if ($this->getAttribute(($context["page"] ?? null), "bottom_title", [])) {
                // line 481
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 482
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_title", [])), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 485
            echo "
      <div class=\"row btmwidget-list\">
        
        ";
            // line 488
            if ($this->getAttribute(($context["page"] ?? null), "bottom_first", [])) {
                // line 489
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 490
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 493
            echo "
        ";
            // line 494
            if ($this->getAttribute(($context["page"] ?? null), "bottom_second", [])) {
                // line 495
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 496
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 499
            echo "        
        ";
            // line 500
            if ($this->getAttribute(($context["page"] ?? null), "bottom_third", [])) {
                // line 501
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 502
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 505
            echo "
        ";
            // line 506
            if ($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])) {
                // line 507
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 508
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 511
            echo "
      </div>
    </div>
  </div>

";
        }
        // line 517
        echo "
<!--End: Bottom widgets -->


<!-- Start: Footer widgets -->

";
        // line 523
        if ((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", []))) {
            // line 524
            echo "
  <div class=\"footer\" id=\"footer\">
    <div class=\"container\">

      ";
            // line 528
            if ($this->getAttribute(($context["page"] ?? null), "footer_title", [])) {
                // line 529
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 530
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_title", [])), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 533
            echo "
      <div class=\"row footer-list\">

        ";
            // line 536
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 537
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 538
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 541
            echo "
        ";
            // line 542
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 543
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 544
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 547
            echo "
        ";
            // line 548
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 549
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 550
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 553
            echo "
      </div>
    </div>
  </div>

";
        }
        // line 559
        echo "
<!--End: Footer widgets -->


<!-- Start: Copyright -->

<div class=\"copyright\">
  <div class=\"container\">

    <span>Copyright © ";
        // line 568
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</span>
    ";
        // line 569
        if (($context["show_credit_link"] ?? null)) {
            // line 570
            echo "      <span class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></span>
    ";
        }
        // line 572
        echo "
  </div>
</div>

<!-- End: Copyright -->





";
    }

    public function getTemplateName()
    {
        return "themes/contrib/medicare_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1038 => 572,  1034 => 570,  1032 => 569,  1028 => 568,  1017 => 559,  1009 => 553,  1003 => 550,  998 => 549,  996 => 548,  993 => 547,  987 => 544,  982 => 543,  980 => 542,  977 => 541,  971 => 538,  966 => 537,  964 => 536,  959 => 533,  953 => 530,  950 => 529,  948 => 528,  942 => 524,  940 => 523,  932 => 517,  924 => 511,  918 => 508,  913 => 507,  911 => 506,  908 => 505,  902 => 502,  897 => 501,  895 => 500,  892 => 499,  886 => 496,  881 => 495,  879 => 494,  876 => 493,  870 => 490,  865 => 489,  863 => 488,  858 => 485,  852 => 482,  849 => 481,  847 => 480,  841 => 476,  839 => 475,  831 => 469,  822 => 462,  816 => 459,  811 => 458,  809 => 457,  806 => 456,  800 => 453,  795 => 452,  793 => 451,  790 => 450,  784 => 447,  779 => 446,  777 => 445,  774 => 444,  768 => 441,  763 => 440,  761 => 439,  756 => 436,  750 => 433,  747 => 432,  745 => 431,  739 => 427,  737 => 426,  729 => 420,  721 => 414,  715 => 411,  710 => 410,  708 => 409,  705 => 408,  699 => 405,  694 => 404,  692 => 403,  689 => 402,  683 => 399,  678 => 398,  676 => 397,  673 => 396,  667 => 393,  662 => 392,  660 => 391,  655 => 388,  649 => 385,  646 => 384,  644 => 383,  638 => 379,  636 => 378,  628 => 372,  619 => 365,  613 => 362,  608 => 361,  606 => 360,  603 => 359,  597 => 356,  592 => 355,  590 => 354,  587 => 353,  581 => 350,  576 => 349,  574 => 348,  569 => 345,  563 => 342,  560 => 341,  558 => 340,  552 => 336,  550 => 335,  535 => 322,  528 => 318,  522 => 316,  520 => 315,  515 => 312,  508 => 308,  502 => 306,  500 => 305,  495 => 302,  488 => 298,  482 => 296,  480 => 295,  472 => 289,  466 => 286,  463 => 285,  461 => 284,  449 => 274,  440 => 268,  434 => 264,  432 => 263,  424 => 257,  416 => 252,  411 => 249,  409 => 248,  401 => 242,  392 => 235,  384 => 233,  382 => 232,  379 => 231,  371 => 229,  369 => 228,  366 => 227,  358 => 225,  356 => 224,  351 => 221,  345 => 218,  342 => 217,  340 => 216,  334 => 212,  332 => 211,  324 => 205,  316 => 200,  311 => 197,  309 => 196,  301 => 190,  292 => 184,  288 => 182,  282 => 179,  279 => 178,  277 => 177,  270 => 173,  262 => 167,  255 => 162,  246 => 160,  242 => 159,  236 => 155,  234 => 154,  222 => 144,  217 => 141,  211 => 139,  209 => 138,  206 => 137,  200 => 135,  198 => 134,  194 => 132,  192 => 131,  187 => 128,  181 => 126,  179 => 125,  157 => 105,  152 => 102,  146 => 100,  143 => 99,  137 => 97,  134 => 96,  128 => 94,  125 => 93,  119 => 91,  116 => 90,  110 => 88,  107 => 87,  101 => 85,  99 => 84,  94 => 81,  92 => 80,  87 => 77,  82 => 75,  79 => 74,  77 => 73,  74 => 72,  68 => 70,  66 => 69,  55 => 60,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/medicare_zymphonies_theme/templates/layout/page.html.twig", "/var/www/html/drupal/themes/contrib/medicare_zymphonies_theme/templates/layout/page.html.twig");
    }
}
