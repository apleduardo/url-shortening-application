<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @OverblogGraphiQL/GraphiQL/index.html.twig */
class __TwigTemplate_9578c151b00b66f66eb2d11ba72e855323e48a96cd6fbe2907dde21f1e332267 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'style' => [$this, 'block_style'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'body_loading' => [$this, 'block_body_loading'],
            'body_script' => [$this, 'block_body_script'],
            'fetcher_function_body' => [$this, 'block_fetcher_function_body'],
            'graphql_fetcher_headers' => [$this, 'block_graphql_fetcher_headers'],
            'post_fetch' => [$this, 'block_post_fetch'],
            'graphiql_params' => [$this, 'block_graphiql_params'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OverblogGraphiQL/GraphiQL/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 31
        echo "</head>
<body>
";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 79
        echo "</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "  ";
        $this->displayBlock('style', $context, $blocks);
        // line 16
        echo "    ";
        if (preg_match("/^[~^]?2/", twig_get_attribute($this->env, $this->source, (isset($context["versions"]) || array_key_exists("versions", $context) ? $context["versions"] : (function () { throw new RuntimeError('Variable "versions" does not exist.', 16, $this->source); })()), "fetch", [], "any", false, false, false, 16))) {
            // line 17
            echo "      <script src=\"https://unpkg.com/whatwg-fetch@";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["versions"]) || array_key_exists("versions", $context) ? $context["versions"] : (function () { throw new RuntimeError('Variable "versions" does not exist.', 17, $this->source); })()), "fetch", [], "any", false, false, false, 17), "html", null, true);
            echo "/fetch.js\"></script>
    ";
        } else {
            // line 19
            echo "      <script src=\"https://unpkg.com/whatwg-fetch@";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["versions"]) || array_key_exists("versions", $context) ? $context["versions"] : (function () { throw new RuntimeError('Variable "versions" does not exist.', 19, $this->source); })()), "fetch", [], "any", false, false, false, 19), "html", null, true);
            echo "/dist/fetch.umd.js\"></script>
    ";
        }
        // line 21
        echo "    ";
        if (preg_match("/^[~^]?15/", twig_get_attribute($this->env, $this->source, (isset($context["versions"]) || array_key_exists("versions", $context) ? $context["versions"] : (function () { throw new RuntimeError('Variable "versions" does not exist.', 21, $this->source); })()), "react", [], "any", false, false, false, 21))) {
            // line 22
            echo "      <script src=\"https://unpkg.com/react@";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["versions"]) || array_key_exists("versions", $context) ? $context["versions"] : (function () { throw new RuntimeError('Variable "versions" does not exist.', 22, $this->source); })()), "react", [], "any", false, false, false, 22), "html", null, true);
            echo "/dist/react.min.js\"></script>
      <script src=\"https://unpkg.com/react-dom@";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["versions"]) || array_key_exists("versions", $context) ? $context["versions"] : (function () { throw new RuntimeError('Variable "versions" does not exist.', 23, $this->source); })()), "react", [], "any", false, false, false, 23), "html", null, true);
            echo "/dist/react-dom.min.js\"></script>
    ";
        } else {
            // line 25
            echo "      <script src=\"https://unpkg.com/react@";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["versions"]) || array_key_exists("versions", $context) ? $context["versions"] : (function () { throw new RuntimeError('Variable "versions" does not exist.', 25, $this->source); })()), "react", [], "any", false, false, false, 25), "html", null, true);
            echo "/umd/react.production.min.js\"></script>
      <script src=\"https://unpkg.com/react-dom@";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["versions"]) || array_key_exists("versions", $context) ? $context["versions"] : (function () { throw new RuntimeError('Variable "versions" does not exist.', 26, $this->source); })()), "react", [], "any", false, false, false, 26), "html", null, true);
            echo "/umd/react-dom.production.min.js\"></script>
    ";
        }
        // line 28
        echo "    <script src=\"https://unpkg.com/graphiql@";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["versions"]) || array_key_exists("versions", $context) ? $context["versions"] : (function () { throw new RuntimeError('Variable "versions" does not exist.', 28, $this->source); })()), "graphiql", [], "any", false, false, false, 28), "html", null, true);
        echo "/graphiql.min.js\"></script>
    <title>";
        // line 29
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 6
        echo "    <style>
      html, body {
        width: 100%;
        height: 100%;
        margin: 0;
        overflow: hidden;
      }
    </style>
  <link href=\"https://unpkg.com/graphiql@";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["versions"]) || array_key_exists("versions", $context) ? $context["versions"] : (function () { throw new RuntimeError('Variable "versions" does not exist.', 14, $this->source); })()), "graphiql", [], "any", false, false, false, 14), "html", null, true);
        echo "/graphiql.css\" rel=\"stylesheet\">
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 29
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "GraphiQL";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 33
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 34
        echo "  ";
        $this->displayBlock('body_loading', $context, $blocks);
        // line 35
        echo "  ";
        $this->displayBlock('body_script', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 34
    public function block_body_loading($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_loading"));

        echo "Loading...";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 35
    public function block_body_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_script"));

        // line 36
        echo "    <script>
      var endpoint = ";
        // line 37
        echo json_encode((isset($context["endpoint"]) || array_key_exists("endpoint", $context) ? $context["endpoint"] : (function () { throw new RuntimeError('Variable "endpoint" does not exist.', 37, $this->source); })()));
        echo "

        function graphQLFetcher(params) {
          ";
        // line 40
        $this->displayBlock('fetcher_function_body', $context, $blocks);
        // line 66
        echo "        }

      ReactDOM.render(
        React.createElement(GraphiQL, {
          ";
        // line 70
        $this->displayBlock('graphiql_params', $context, $blocks);
        // line 73
        echo "        }),
        document.body
      )
    </script>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 40
    public function block_fetcher_function_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fetcher_function_body"));

        // line 41
        echo "          var headers

          ";
        // line 43
        $this->displayBlock('graphql_fetcher_headers', $context, $blocks);
        // line 49
        echo "
          return fetch(endpoint, {
              method: \"post\",
              headers: headers,
              body: JSON.stringify(params),
              credentials: 'include',
            }).then((res) => {
              ";
        // line 56
        $this->displayBlock('post_fetch', $context, $blocks);
        // line 57
        echo "              return res.text()
            }).then((body) => {
            try {
              return JSON.parse(body)
            } catch (err) {
              return body
            }
          })
          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 43
    public function block_graphql_fetcher_headers($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "graphql_fetcher_headers"));

        // line 44
        echo "          headers = {
            \"Accept\": \"application/json\",
            \"Content-Type\": \"application/json\",
          }
          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 56
    public function block_post_fetch($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "post_fetch"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 70
    public function block_graphiql_params($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "graphiql_params"));

        // line 71
        echo "          fetcher: graphQLFetcher
          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@OverblogGraphiQL/GraphiQL/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  317 => 71,  310 => 70,  298 => 56,  287 => 44,  280 => 43,  265 => 57,  263 => 56,  254 => 49,  252 => 43,  248 => 41,  241 => 40,  230 => 73,  228 => 70,  222 => 66,  220 => 40,  214 => 37,  211 => 36,  204 => 35,  191 => 34,  183 => 35,  180 => 34,  173 => 33,  160 => 29,  151 => 14,  141 => 6,  134 => 5,  125 => 29,  120 => 28,  115 => 26,  110 => 25,  105 => 23,  100 => 22,  97 => 21,  91 => 19,  85 => 17,  82 => 16,  79 => 5,  72 => 4,  63 => 79,  61 => 33,  57 => 31,  55 => 4,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
  {% block head %}
  {% block style %}
    <style>
      html, body {
        width: 100%;
        height: 100%;
        margin: 0;
        overflow: hidden;
      }
    </style>
  <link href=\"https://unpkg.com/graphiql@{{ versions.graphiql }}/graphiql.css\" rel=\"stylesheet\">
  {% endblock style %}
    {% if versions.fetch matches '/^[~^]?2/' %}
      <script src=\"https://unpkg.com/whatwg-fetch@{{ versions.fetch }}/fetch.js\"></script>
    {% else %}
      <script src=\"https://unpkg.com/whatwg-fetch@{{ versions.fetch }}/dist/fetch.umd.js\"></script>
    {% endif %}
    {% if versions.react matches '/^[~^]?15/' %}
      <script src=\"https://unpkg.com/react@{{ versions.react }}/dist/react.min.js\"></script>
      <script src=\"https://unpkg.com/react-dom@{{ versions.react }}/dist/react-dom.min.js\"></script>
    {% else %}
      <script src=\"https://unpkg.com/react@{{ versions.react }}/umd/react.production.min.js\"></script>
      <script src=\"https://unpkg.com/react-dom@{{ versions.react }}/umd/react-dom.production.min.js\"></script>
    {% endif %}
    <script src=\"https://unpkg.com/graphiql@{{ versions.graphiql }}/graphiql.min.js\"></script>
    <title>{% block title %}GraphiQL{% endblock title %}</title>
  {% endblock head %}
</head>
<body>
{% block body %}
  {% block body_loading %}Loading...{% endblock body_loading %}
  {% block body_script %}
    <script>
      var endpoint = {{ endpoint | json_encode | raw }}

        function graphQLFetcher(params) {
          {% block fetcher_function_body %}
          var headers

          {% block graphql_fetcher_headers %}
          headers = {
            \"Accept\": \"application/json\",
            \"Content-Type\": \"application/json\",
          }
          {% endblock graphql_fetcher_headers %}

          return fetch(endpoint, {
              method: \"post\",
              headers: headers,
              body: JSON.stringify(params),
              credentials: 'include',
            }).then((res) => {
              {% block post_fetch %}{% endblock post_fetch %}
              return res.text()
            }).then((body) => {
            try {
              return JSON.parse(body)
            } catch (err) {
              return body
            }
          })
          {% endblock fetcher_function_body %}
        }

      ReactDOM.render(
        React.createElement(GraphiQL, {
          {% block graphiql_params %}
          fetcher: graphQLFetcher
          {% endblock graphiql_params %}
        }),
        document.body
      )
    </script>
  {% endblock body_script %}
{% endblock body %}
</body>
</html>
", "@OverblogGraphiQL/GraphiQL/index.html.twig", "/var/www/vendor/overblog/graphiql-bundle/Resources/views/GraphiQL/index.html.twig");
    }
}
