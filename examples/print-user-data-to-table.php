<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Hashnode\Arguments\RootUserArgument;
use Hashnode\Hashnode;
use Hashnode\Queries\RootQuery;

$apiKey = null;
$endpoint = 'https://api.hashnode.com';
$username = 'oliverearl';

$client = new Hashnode($endpoint, ['Authorization' => $apiKey]);
$query = (new RootQuery())->selectUser((new RootUserArgument())->setUsername($username))
    ->selectUsername()
    ->selectName()
    ->selectBlogHandle()
    ->selectNumFollowers()
    ->selectNumFollowing()
    ->selectDateJoined();
$query
    ->selectSocialMedia((new \Hashnode\Arguments\User\SocialMediaArgument()))
    ->selectTwitter()
    ->selectLinkedin()
    ->selectGithub()
    ->selectWebsite();
$data = $client->runQuery($query->getQuery(), true)->getData();
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Print User Data to Table</title>
    <meta charset="utf-8">
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th, td {
            padding: 5px;
            text-align: left;
        }
    </style>
</head>
<body>
<table>
    <?php foreach ($data['user'] as $key => $value): ?>
        <tr>
            <th><?= $key ?></th>
            <td>
                <?php
                if ($key === 'dateJoined'):
                    echo date('Y-m-d', strtotime($value));
                elseif (is_array($value)):
                    foreach ($value as $entry):
                        if ($entry):
                            echo "${entry}<br>";
                        endif;
                    endforeach;
                else:
                    echo $value;
                endif;
                ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>

