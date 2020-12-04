<?php

namespace php74;

class PhpAnnotations {
    /**
     * @Route("/api/posts/{id}", methods={"GET"})
     */
    public function home() {}
}

$class = new ReflectionClass(Home::class);

$docComment = $class->getMethod('home')->getDocComment();

echo '<pre>';

$annotations = [];

preg_match_all('#@(?<annotation>.*?)\n#s', $docComment, $annotations);
var_dump($annotations['annotation']);

echo '</pre>';
