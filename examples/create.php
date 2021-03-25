<?php
include 'vendor/autoload.php';
use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Yaml\Exception\ParseException;

try {

    $settings = Yaml::parseFile('yaml/settings.yaml');

} catch (ParseException $exception) {

    printf('Unable to parse the YAML string: %s', $exception->getMessage());
}

$loader = new \Twig\Loader\FilesystemLoader( dirname(__FILE__) );

$twig = new \Twig\Environment($loader);

$html = $twig->render('templates/template.twig.php',$settings);

$index = fopen('index.html', 'w');
fwrite($index, $html);
fclose($index);

?>