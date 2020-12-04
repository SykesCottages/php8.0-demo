<?php

class PhpAnnotations {
    #[Route("/", methods: ["GET"])]
    public function home() {}
}

$class = new ReflectionClass(PhpAnnotations::class);

$attributes = $class->getMethod('home')->getAttributes();

echo '<pre>';

foreach($attributes as $attribute) {
    var_dump(
        $attribute->getName(),
        $attribute->getArguments()
    );
}

echo '</pre>';
