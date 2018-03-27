<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Repositories\Criterias;
use App\Repositories\VideoRepository;
use App\Exceptions\InvalidApiResponseException;

class VideoService
{
    protected $videoRepository;

    public function __construct(VideoRepository $videoRepository)
    {
        $this->videoRepository = $videoRepository;
    }

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
        $this->videoRepository->pushCriteria(new Criterias\Online());    

        return $this->videoRepository->find($id);
    }

    public function getOnlineByCriterias(Request $request)
    {
        $this->videoRepository->pushCriteria(new Criterias\OrderBy($request->get('sort')));

        if ($search = $request->get('search')) {

            $columns = ['title', 'description'];

            $this->videoRepository->pushCriteria(new Criterias\Search($columns, $search));        
        }    

        $this->videoRepository->pushCriteria(new Criterias\Online());    

        return $this->videoRepository->paginate();
    }
}
