<?php

namespace Hashnode\Api\Repositories;

use GraphQL\Query;

use Hashnode\Api\Publication;
use Hashnode\Api\SocialMedia;
use Hashnode\Api\User;
use Hashnode\Exceptions\QueryException;

class UserRepository extends Repository
{
    const FIELD_NAME = 'user';

    public function getUser(string $username,
                            bool $socialMedia = false,
                            bool $publication = false,
                            bool $followers = false): User
    {
        try {
            $graphql = (new Query(self::FIELD_NAME))
                ->setArguments(['username' => $username])
                ->setSelectionSet(
                    [
                        '_id',
                        'name',
                        'username',
                        'tagline',
                        'isEvangelist',
                        'dateJoined',
                        // socialMedia
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
                        // followers
                    ],
                );
            $results = $this->client->getRawAccess()
                ->runQuery($graphql, true)
                ->getData()[self::FIELD_NAME];

            if ($socialMedia) $results = array_merge($results, $this->getSocialMedia($username));
            //if ($publication) $results[] = $this->getPublication($username);
            if ($followers)   $results = array_merge($results, $this->getFollowers($username));

            return new User($results);
        } catch (QueryException $exception) {
            echo "Exception: {$exception->getMessage()}";
            $exception->dump();
            exit();
        }
    }

    protected function getSocialMedia(string $username): array
    {
        $fieldName = 'socialMedia';
        $properties = (new SocialMedia())->getProperties();
        return $this->subquery($username, $fieldName, $properties);
    }

    protected function subquery(string $username, string $fieldName, array $properties): array
    {
        $graphql = (new Query(self::FIELD_NAME))
            ->setArguments(['username' => $username])
            ->setSelectionSet(
                [
                    (new Query($fieldName))
                        ->setSelectionSet(
                            $properties
                        ),
                ]
            );

        return $this->client->getRawAccess()->runQuery($graphql, true)->getData()[self::FIELD_NAME];
    }

    protected function getFollowers(string $username): array
    {
        $fieldName = 'followers';
        $properties = [
            '_id',
            'username'
        ];
        return $this->subquery($username, $fieldName, $properties);
    }

    protected function getPublication(string $username): array
    {
        $fieldName = 'publication';
        $properties = (new Publication())->getProperties();
        // TODO: Remove certain properties
        return $this->subquery($username, $fieldName, $properties);
    }
}
