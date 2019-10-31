<?php

namespace Marchex;

/**
 * Class Call
 *
 * @package Call
 **/
class Ads
{
	/**
	*
	* Gets the call log entry for the specified call.
	*
	*@param string $account_id
	*@param array $params
	*@return string. The unique, system-generated campaign ID of the new or existing ad campaign. 
	*
	*/     
	public function find($account,$params)
	{
	  $request = new Request();
	  $request->send('ad.configure', [ $call_id ]);
	  return $request->getOutput();
	}
}