<?php

namespace App\Services;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;

class SEOFrontRenderService
{
    public static function generalRender()
    {
        // SEOMeta::setTitle('Home');
        SEOMeta::setDescription(settings('meta_description'));
        SEOMeta::setCanonical(settings('canonical'));
        
        OpenGraph::setType(settings('og_type'));
        OpenGraph::setTitle(settings('og_title'));
        OpenGraph::setUrl(settings('og_url'));
        OpenGraph::addImage(public_path(settings('og_image')));
        OpenGraph::setDescription(settings('og_description'));

        TwitterCard::addValue('card', settings('twitter_card'));
        TwitterCard::setTitle(settings('twitter_title'));
        TwitterCard::setSite(settings('twitter_site'));
        TwitterCard::setDescription(settings('twitter_description'));
        // TwitterCard::addImage(asset($model->seotool->twitter_image));
        TwitterCard::addValue('image', public_storage(settings('twitter_image')));
        TwitterCard::addValue('image:alt', settings('twitter_alt'));
    }
}
