<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Hashnode\Client;
use Hashnode\Api\Repositories\UserRepository;

$apiKey = null;
$endpoint = 'https://api.hashnode.com';

$client = Client::getInstance(
    $apiKey,
    $endpoint
);

$user = (new UserRepository())->getUser('oliverearl');
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
    <?php foreach ($user->toArray() as $key => $value): ?>
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

