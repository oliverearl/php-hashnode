<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Hashnode\Arguments\RootStoriesFeedArgument;
use Hashnode\Hashnode;
use Hashnode\Queries\RootQuery;

$client = new Hashnode();
$query = (new RootQuery())->selectStoriesFeed((new RootStoriesFeedArgument())->setType())
    ->selectCoverImage()
    ->selectTitle()
    ->selectBrief()
    ->selectDateAdded()
    ->getQuery();
$data = $client->runQuery($query, true)->getData();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stories to Bootstrap Album</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
          crossorigin="anonymous">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>
<body>
<main>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php foreach ($data['storiesFeed'] as $post): ?>
                    <div class="col">
                        <div class="card shadow-sm">
                            <?php if ($post['coverImage']): ?>
                                <img alt="<?= $post['title']; ?>"
                                     src="<?= $post['coverImage']; ?>"
                                     class="card-img-top"
                                     width="100%"
                                     height="225">
                            <?php else: ?>
                                <svg class="bd-placeholder-img card-img-top" width="100%"
                                     height="225" xmlns="http://www.w3.org/2000/svg"
                                     preserveAspectRatio="xMidYMid slice"
                                     focusable="false">
                                    <title><?= $post['title'] ?>></title>
                                    <rect width="100%" height="100%" fill="#55595c"></rect>
                                    <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                                </svg>
                            <?php endif; ?>
                            <div class="card-body">
                                <p class="card-text">
                                    <?= $post['brief'] ?>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="" class="btn btn-sm btn-outline-secondary">View</a>
                                    </div>
                                    <small class="text-muted">
                                        <?= date('F j Y, g:i a', strtotime($post['dateAdded'])); ?>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

</main>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"
        defer
></script>

</body>
</html>
