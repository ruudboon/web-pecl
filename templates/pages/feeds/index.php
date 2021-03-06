<?php $this->extend('layout.php', ['title' => 'Syndication feeds']) ?>

<?php $this->start('content') ?>

<h1>Syndication feeds</h1>

<h2>RSS</h2>

<p>We have a number of <a href="http://web.resource.org/rss/1.0/">RSS</a> feeds
available for your viewing pleasure:</p>

<ul>
    <li><a href="/feeds/latest.rss">/feeds/latest.rss</a>: The latest 10 releases</li>
    <li>Feeds per category:
        <ul>
            <li><a href="/feeds/cat_authentication.rss">/feeds/cat_authentication.rss</a>: Authentication</li>
            <li><a href="/feeds/cat_benchmarking.rss">/feeds/cat_benchmarking.rss</a>: Benchmarking</li>
            <li>For all other categories, the same scheme as shown above applies</li>
        </ul>
    </li>
    <li>Feeds per package:
        <ul>
            <li><a href="/feeds/pkg_apc.rss">/feeds/pkg_apc.rss</a>: APC</li>
            <li><a href="/feeds/pkg_apc.rss">/feeds/pkg_apc.rss</a>: APC</li>
            <li><a href="/feeds/pkg_phar.rss">/feeds/pkg_phar.rss</a>: phar</li>
            <li>For all other packages, the same scheme as shown above applies</li>
        </ul>
    </li>
</ul>

<p>If you have questions or suggestions about the RSS service, please contact
the <a href="mailto:php-webmaster@lists.php.net">webmasters</a>.</p>

<?php $this->end('content') ?>
