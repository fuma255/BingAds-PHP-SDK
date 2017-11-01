<?php

namespace Microsoft\BingAds\V11\CustomerBilling;

{
    /**
     * Defines an error object that identifies the item within the batch of items in the request message that caused the operation to fail, and describes the reason for the failure.
     * @link https://docs.microsoft.com/en-us/bingads/customer-billing-service/batcherror?view=bingads-11 BatchError Data Object
     * 
     * @used-by ApiBatchFault
     */
    final class BatchError
    {
        /**
         * A numeric error code that identifies the error.
         * @var integer
         */
        public $Code;

        /**
         * A message that provides additional details about the batch error.
         * @var string
         */
        public $Details;

        /**
         * The zero-based index of the item in the batch of items in the request message that failed.
         * @var integer
         */
        public $Index;

        /**
         * A message that describes the error.
         * @var string
         */
        public $Message;
    }

}
