<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines an object that contains the identifier of the keyword and the suggested bid value for the keyword and match type.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/keywordidestimatedbid?view=bingads-11 KeywordIdEstimatedBid Data Object
     * 
     * @uses KeywordEstimatedBid
     * @used-by GetEstimatedBidByKeywordIdsResponse
     */
    final class KeywordIdEstimatedBid
    {
        /**
         * The identifier of the keyword to which the suggested bid applies.
         * @var integer
         */
        public $KeywordId;

        /**
         * An object that contains the keyword string and the suggested bid value for each match type.
         * @var KeywordEstimatedBid
         */
        public $KeywordEstimatedBid;
    }

}
