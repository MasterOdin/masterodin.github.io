<?php
$publications = json_decode(file_get_contents(__DIR__."/../data/publications.json"), true);
print <<<HTML
<h2>publications</h2>
HTML;
foreach ($publications as $pub) {
    print <<<HTML
{$pub['authors']} {$pub['year']}, {$pub['title']}. {$pub['at']}<br />
HTML;
}
