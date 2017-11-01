<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the specified campaigns within an account.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getcampaignsbyids?view=bingads-11 GetCampaignsByIds Response Object
     * 
     * @uses Campaign
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetCampaignsByIds
     */
    final class GetCampaignsByIdsResponse
    {
        /**
         * An array of Campaign objects that corresponds directly to the campaign identifiers that you specified in the request.
         * @var Campaign[]
         */
        public $Campaigns;

        /**
         * An array of BatchError objects that contain details for any campaigns that were not successfully retrieved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
