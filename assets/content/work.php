<?php

print <<<PRINT
<h2>projects</h2>
<p>Listed below is a curated list of projects that I've made or made signficant contributions to. A full list of
    my projects can be viewed on my <a target='_blank' href='https://github.com/MasterOdin'>Github</a> page.</p>
<div id="workProjects">
PRINT;

$projects = json_decode(file_get_contents(__DIR__."/../data/projects.json"), true);

foreach ($projects as $project) {
    $links = array();
    if (isset($project['github'])) {
        $links[] = "<a href='{$project['github']}'>View on Github</a>";
    }
    if (isset($project['chrome'])) {
        $links[] = "<a href='{$project['chrome']}'>View on Chrome Web Store</a>";
    }
    if (isset($project['demo'])) {
        $links[] = "<a href='{$project['demo']}'>View Demo</a>";
    }
    $links = implode(" | ", $links);
    print <<<HTML
    <div class='project'>
        <div class='thumb'>
            <img src="https://mpeveler.com/assets/images/thumbnails/{$project['thumbnail']}">
        </div>
        <div class="desc">
            <h3>{$project['name']}</h3>
            {$project['description']}<br /><br />
            {$links}
        </div>
    </div>
HTML;
}

print <<<HTML
</div>
HTML;

