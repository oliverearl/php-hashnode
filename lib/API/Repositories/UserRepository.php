<?php

namespace Hashnode\Api\Repositories;

use GraphQL\InlineFragment;
use GraphQL\Query;
use Hashnode\Api\User;
use Hashnode\Exceptions\QueryException;

class UserRepository extends Repository
{
    public function getUser(string $username): ?User
    {
        try {
            $graphql = (new Query('user'))
                ->setArguments(['username' => $username])
                ->setSelectionSet(
                    [
                        '_id',
                        'name',
                        'username',
                        'tagline',
                        'isEvangelist',
                        'dateJoined',
                        (new Query('socialMedia'))->setSelectionSet(
                            [
                                'twitter',
                                'github',
                                'stackoverflow',
                                'linkedin',
                                'google',
                                'website',
                                'facebook'
                            ],
                        ),
                        'numFollowing',
                        'numFollowers',
                        'isDeactivated',
                        'location',
                        'photo',
                        'coverImage',
                        'numPosts',
                        'numReactions',
                        //'publication',
                        'blogHandle',
                        'publicationDomain',
                        //'followers',
                    ]
                );
            $results = $this->client->getRawAccess()->runQuery($graphql, true)->getData();
            return new User($results);
        } catch (QueryException $exception) {
            echo "Exception: {$exception->getMessage()}";
            $exception->dump();
            exit();
        }
    }

    public function getUsers(): array
    {

    }
}
