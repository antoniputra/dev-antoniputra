<?php

use App\Models\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    $content = $faker->paragraphs(rand(10, 20));
    $middle = count($content) / 2;
    $tpl = '<div class="embed">
    <ivs-sense widget-id="f7ba215b-5828" api-key="9dc432b498f644a7a18fa8369043df16"></ivs-sense>
    <script type="text/javascript" src="'. env("v3_sp_tools") .'" async></script>
</div>';

    foreach ($content as $key => $value) {
        if ($key === $middle) {
            $content[$key] = $tpl;
        }
    }

    return [
        'title' => $faker->paragraph(1, true),
        'content' => "<p>" . implode('</p><p>', $content) . "</p>",
    ];
});
