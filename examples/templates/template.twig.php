<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
{% for link in links %}
<link rel="stylesheet" href="{{ link }}">
{% endfor %}
<title>{{ title }}</title>
</head>
<body>
{% include 'templates/initialize.twig.php' %}
{% include 'templates/functions.twig.php' %}
{% include 'templates/example.twig.php' %}
{% include 'templates/results.twig.php' %}
{% include 'templates/contact.twig.php' %}
{% for script in scripts %}
<script type="text/javascript" src="{{ script }}" ></script>
{% endfor %}
</body>
</html>