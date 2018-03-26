<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Repositories\Criterias;
use App\Repositories\VideoRepository;
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

    public function getLastByChannelWithApi($youtubeChannelId, $limit = 5)
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
        return [
            'hash' => $response->id,
            'view_count' => $response->statistics->viewCount,
            'like_count' => $response->statistics->likeCount,
            'dislike_count' => $response->statistics->dislikeCount,            
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
        return [
            'title' => $response->snippet->title,
            'published_at' => $response->snippet->publishedAt,
            'description' => $response->snippet->description,
        ];
    }

    public function getOnlineById($id)
    {
        $videoRepository = app(VideoRepository::class);

        $videoRepository->pushCriteria(new Criterias\Online());    

        return $videoRepository->find($id);
    }

    public function getOnlineByCriterias(Request $request)
    {
        $videoRepository = app(VideoRepository::class);

        if ($sort = $request->get('sort')) {
            $videoRepository = $this->addSortCriterias($sort, $videoRepository);
        }

        if ($search = $request->get('search')) {
            $videoRepository = $this->addSearchCriterias($search, $videoRepository);
        }    

        $videoRepository->pushCriteria(new Criterias\Online());    

        return $videoRepository->paginate();
    }

    protected function addSortCriterias($sort, VideoRepository $videoRepository)
    {
        switch ($sort) {
            case 'rate':
                $ordering = 'like_count';
            break;
            case 'view':
                $ordering = 'view_count';
            break;
            default:
                $ordering = 'published_at';
            break;
        }

        $videoRepository->pushCriteria(new Criterias\OrderBy($ordering));

        return $videoRepository;
    }

    protected function addSearchCriterias($search, VideoRepository $videoRepository)
    {
        $columns = ['title', 'description'];

        $videoRepository->pushCriteria(new Criterias\Search($columns, $search));

        return $videoRepository;
    }
}
