<?php

namespace Marchex;

/**
 * Class Call
 *
 * @package Call
 **/
class Call
{
    /**
     * List of valid search parameters
     * @var array
     **/
     const VALID_SEARCH_PARAMS = [
        'start', 'end', 'assto', 'call_boundary',
        'callerid', 'cmpid', 'dispo', 'dna_class',
        'exact_times', 'grpid', 'include_dna',
        'include_spotted_keywords', 'keyword',
        'min_duration_secs', 'status', 'spotted_keywords',
        'subacct',
     ];

     public function find($call_id)
     {
        $request = new Request();
        $request->send('call.get', [ $call_id ]);
        return $request->getOutput();
     }

     /**
      *
      * Gets a Base64-encoded string that contains the audio data of the specified call, in the specified format.
      *
      * @param  string $call_id
      * @param  string $format default = 'mp3'
      * @return base64 string Audio Data.
      */
     public function audio($call_id, $format = 'mp3')
     {
        $request = new Request();
        $request->send('call.audio', [ $call_id, $format ]);
        return $request->getOutput();
     }

     /**
      *
      * Gets whether call recording is enabled for the specified ad campaign.
      *
      *@param string $campaign_id
      *@return boolean 
      *
      */

     public function enabledRecording($campaign_id)
     {
     	$request = new Request();
        $request->send('ad.recordcall.get', [ $campaign_id ]);
        return $request->getOutput();
     }
     

    /**
     * Searches the call log of the specified account.
     *
     * @param string $account_id
     * @param array $params
     * @return array A list of calls matching the requested criteria.
     **/
    public static function search($account_id, $opts = [])
    {
        $request = new Request();
        $request->send('call.search', [ $account_id, $opts ]);
        return $request->getOutput();
    }
}
