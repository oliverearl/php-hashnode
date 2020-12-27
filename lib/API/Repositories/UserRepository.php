<?php

namespace Hashnode\Api\Repositories;

use GraphQL\InlineFragment;
use GraphQL\Query;
use Hashnode\Api\User;

class UserRepository extends Repository
{
    public function getUser(string $username): User
    {
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
    }

    public function getUsers(): array
    {

    }
}
