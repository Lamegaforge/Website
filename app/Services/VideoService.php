<?php

namespace App\Services;

use DateTime;
use DateInterval;
use Illuminate\Http\Request;
use App\Exceptions\InvalidApiResponseException;

class VideoService
{
    public function findWithApi($youtubeId)
    {
        $apiResponse = app('Api\Youtube')->getVideoInfo($youtubeId);

        if (! $apiResponse) {
            return null;
        }

        $formatedResponse = $this->formatGetVideoInfoResponse($apiResponse);

        return new Entities\Video($formatedResponse);
    }

    public function getLastByChannelWithApi($youtubeChannelId, $limit = 50)
    {
        $apiResponseList = app('Api\Youtube')->listChannelVideos($youtubeChannelId, $limit, 'date');

        if (! $apiResponseList) {
            return null;
        }

        return array_map(function($apiResponse){

            $formatedResponse = $this->formatListChannelVideoResponse($apiResponse);

            return new Entities\Video($formatedResponse);

        }, $apiResponseList);
    }

    protected function formatGetVideoInfoResponse($response)
    {
        $duration = new DateInterval($response->contentDetails->duration);

        return [
            'hash' => $response->id,
            'view_count' => $response->statistics->viewCount,
            'like_count' => $response->statistics->likeCount,
            'dislike_count' => $response->statistics->dislikeCount,  
            'duration' => $duration->format('%i:%S'),       
        ] + $this->formatBaseResponseApi($response);
    }

    protected function formatListChannelVideoResponse($response)
    {
        return [
            'hash' => $response->id->videoId
        ] + $this->formatBaseResponseApi($response);
    }

    protected function formatBaseResponseApi($response)
    {
        $publishedAt = new DateTime($response->snippet->publishedAt);

        return [
            'title' => $response->snippet->title,
            'published_at' => $publishedAt->format('Y-m-d'),
            'description' => $this->formatDescription($response->snippet->description),
        ];
    }

    protected function formatDescription($description)
    {
        preg_match('^(.+?)-{5,}^s', $description, $matches);

        if (! isset($matches[1])) {
            return $description;
        }

        return $matches[1];
    }
}
