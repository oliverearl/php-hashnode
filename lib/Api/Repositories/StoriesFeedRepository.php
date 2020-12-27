<?php

namespace Hashnode\Api\Repositories;

use GraphQL\Query;

use Hashnode\Api\Enums\FeedType;

class StoriesFeedRepository extends Repository
{
    const FIELD_NAME = 'storiesFeed';

    public function getStoriesFeed(FeedType $type, int $page = 0): array
    {
        $graphql = (new Query(self::FIELD_NAME))
            ->setArguments(['type' => $type, 'page' => $page])
            ->setSelectionSet(
                [
                    '_id',
                    'followersCount',
                    //'author',
                    'cuid',
                    'slug',
                    'title',
                    'popularity',
                    //'reactionsByCurrentUser',
                    'totalReactions',
                    'bookmarkedIn',
                    'partOfPublication',
                    //'contributors',
                    'isActive',
                    'replyCount',
                    'responseCount',
                    'dateAdded',
                    //'tags',
                    'brief',
                    'coverImage',
                    'isAnonymous',
                    'dateUpdated',
                    'dateFeatured',
                    //'reactions',
                    //'poll',
                    'contentMarkdown',
                ],
            );
        $results = $this->client->getRawAccess()->runQuery($graphql, true)->getData()[self::FIELD_NAME];
        return $results;
    }
}
