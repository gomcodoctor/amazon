<?php
/**
 * User: GomcoDoctor
 * Date: 09-Feb-18
 * Time: 6:20 PM
 */

class MarketplaceWebServiceProducts_MultiClient extends \MarketplaceWebServiceProducts_Client
{
    private  $_applicationName = "GomcoDoctor";
    private  $_applicationVersion = "1.01";
    

    /**
     * Get Competitive Pricing For ASIN
     * Gets competitive pricing and related information for a product identified by
     * the MarketplaceId and ASIN.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASIN request or MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASIN object itself
     * @see MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINRequest
     * @return MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getCompetitivePricingForASIN($request, $processResponse = false)
    {
        if($request){
            if (!($request instanceof MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINRequest)) {
                //require_once (dirname(__FILE__) . '/Model/GetCompetitivePricingForASINRequest.php');
                $request = new MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINRequest($request);
            }
            $parameters = $request->toQueryParameterArray();
            $parameters['Action'] = 'GetCompetitivePricingForASIN';
            $httpResponse = $this->_invoke($parameters);
            return $httpResponse;
        }
        else if ($processResponse){
            //require_once (dirname(__FILE__) . '/Model/GetCompetitivePricingForASINResponse.php');
            $response = MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINResponse::fromXML($processResponse['ResponseBody']);
            $response->setResponseHeaderMetadata($processResponse['ResponseHeaderMetadata']);
            return $response;
        }

    }




    /**
     * Get Competitive Pricing For SKU
     * Gets competitive pricing and related information for a product identified by
     * the SellerId and SKU.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKU request or MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKU object itself
     * @see MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKURequest
     * @return MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKUResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getCompetitivePricingForSKU($request, $processResponse = false)
    {
        if($request){
            if (!($request instanceof MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKURequest)) {
                //require_once (dirname(__FILE__) . '/Model/GetCompetitivePricingForSKURequest.php');
                $request = new MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKURequest($request);
            }
            $parameters = $request->toQueryParameterArray();
            $parameters['Action'] = 'GetCompetitivePricingForSKU';
            $httpResponse = $this->_invoke($parameters);
            return $httpResponse;
        }
        if($processResponse){
            //require_once (dirname(__FILE__) . '/Model/GetCompetitivePricingForSKUResponse.php');
            $response = MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKUResponse::fromXML($processResponse['ResponseBody']);
            $response->setResponseHeaderMetadata($processResponse['ResponseHeaderMetadata']);
            return $response;
        }

    }




    /**
     * Get Lowest Offer Listings For ASIN
     * Gets some of the lowest prices based on the product identified by the given
     * MarketplaceId and ASIN.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASIN request or MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASIN object itself
     * @see MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINRequest
     * @return MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getLowestOfferListingsForASIN($request, $processResponse = false)
    {
        if($request){
            if (!($request instanceof MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINRequest)) {
                //require_once (dirname(__FILE__) . '/Model/GetLowestOfferListingsForASINRequest.php');
                $request = new MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINRequest($request);
            }
            $parameters = $request->toQueryParameterArray();
            $parameters['Action'] = 'GetLowestOfferListingsForASIN';
            $httpResponse = $this->_invoke($parameters);
            return $httpResponse;
        }

        if($processResponse){
            //require_once (dirname(__FILE__) . '/Model/GetLowestOfferListingsForASINResponse.php');
            $response = MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINResponse::fromXML($processResponse['ResponseBody']);
            $response->setResponseHeaderMetadata($processResponse['ResponseHeaderMetadata']);
            return $response;
        }

    }




    /**
     * Get Lowest Offer Listings For SKU
     * Gets some of the lowest prices based on the product identified by the given
     * SellerId and SKU.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKU request or MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKU object itself
     * @see MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKURequest
     * @return MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKUResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getLowestOfferListingsForSKU($request, $processResponse = false)
    {
        if($request){
            if (!($request instanceof MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKURequest)) {
                //require_once (dirname(__FILE__) . '/Model/GetLowestOfferListingsForSKURequest.php');
                $request = new MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKURequest($request);
            }
            $parameters = $request->toQueryParameterArray();
            $parameters['Action'] = 'GetLowestOfferListingsForSKU';
            $httpResponse = $this->_invoke($parameters);
            return $httpResponse;
        }
        if($processResponse){
            //require_once (dirname(__FILE__) . '/Model/GetLowestOfferListingsForSKUResponse.php');
            $response = MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKUResponse::fromXML($processResponse['ResponseBody']);
            $response->setResponseHeaderMetadata($processResponse['ResponseHeaderMetadata']);
            return $response;
        }

    }



    /**
     * Get Matching Product
     * GetMatchingProduct will return the details (attributes) for the
     * given ASIN.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetMatchingProduct request or MarketplaceWebServiceProducts_Model_GetMatchingProduct object itself
     * @see MarketplaceWebServiceProducts_Model_GetMatchingProductRequest
     * @return MarketplaceWebServiceProducts_Model_GetMatchingProductResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getMatchingProduct($request, $processResponse = false)
    {
        if($request){
            if (!($request instanceof MarketplaceWebServiceProducts_Model_GetMatchingProductRequest)) {
                //require_once (dirname(__FILE__) . '/Model/GetMatchingProductRequest.php');
                $request = new MarketplaceWebServiceProducts_Model_GetMatchingProductRequest($request);
            }
            $parameters = $request->toQueryParameterArray();
            $parameters['Action'] = 'GetMatchingProduct';
            $httpResponse = $this->_invoke($parameters);
            return $httpResponse;
        }
        else if($processResponse){
            //require_once (dirname(__FILE__) . '/Model/GetMatchingProductResponse.php');
            $response = MarketplaceWebServiceProducts_Model_GetMatchingProductResponse::fromXML($processResponse['ResponseBody']);
            $response->setResponseHeaderMetadata($processResponse['ResponseHeaderMetadata']);
            return $response;
        }

    }



    /**
     * Get Matching Product For Id
     * GetMatchingProduct will return the details (attributes) for the
     * given Identifier list. Identifer type can be one of [SKU|ASIN|UPC|EAN|ISBN|GTIN|JAN]
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetMatchingProductForId request or MarketplaceWebServiceProducts_Model_GetMatchingProductForId object itself
     * @see MarketplaceWebServiceProducts_Model_GetMatchingProductForIdRequest
     * @return MarketplaceWebServiceProducts_Model_GetMatchingProductForIdResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getMatchingProductForId($request, $processResponse = false)
    {
        if($request){
            if (!($request instanceof MarketplaceWebServiceProducts_Model_GetMatchingProductForIdRequest)) {
                //require_once (dirname(__FILE__) . '/Model/GetMatchingProductForIdRequest.php');
                $request = new MarketplaceWebServiceProducts_Model_GetMatchingProductForIdRequest($request);
            }
            $parameters = $request->toQueryParameterArray();
            $parameters['Action'] = 'GetMatchingProductForId';
            $httpResponse = $this->_invoke($parameters);
            return $httpResponse;
        }
        else if($processResponse){
            //require_once (dirname(__FILE__) . '/Model/GetMatchingProductForIdResponse.php');
            $response = MarketplaceWebServiceProducts_Model_GetMatchingProductForIdResponse::fromXML($processResponse['ResponseBody']);
            $response->setResponseHeaderMetadata($processResponse['ResponseHeaderMetadata']);
            return $response;
        }


    }


    /**
     * Get My Price For ASIN
     * <!-- Wrong doc in current code -->
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetMyPriceForASIN request or MarketplaceWebServiceProducts_Model_GetMyPriceForASIN object itself
     * @see MarketplaceWebServiceProducts_Model_GetMyPriceForASINRequest
     * @return MarketplaceWebServiceProducts_Model_GetMyPriceForASINResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getMyPriceForASIN($request, $processResponse = false)
    {
        if($request){
            if (!($request instanceof MarketplaceWebServiceProducts_Model_GetMyPriceForASINRequest)) {
                //require_once (dirname(__FILE__) . '/Model/GetMyPriceForASINRequest.php');
                $request = new MarketplaceWebServiceProducts_Model_GetMyPriceForASINRequest($request);
            }
            $parameters = $request->toQueryParameterArray();
            $parameters['Action'] = 'GetMyPriceForASIN';
            $httpResponse = $this->_invoke($parameters);
            return $httpResponse;
        }
        if($processResponse){
            //require_once (dirname(__FILE__) . '/Model/GetMyPriceForASINResponse.php');
            $response = MarketplaceWebServiceProducts_Model_GetMyPriceForASINResponse::fromXML($processResponse['ResponseBody']);
            $response->setResponseHeaderMetadata($processResponse['ResponseHeaderMetadata']);
            return $response;
        }

    }



    /**
     * Get My Price For SKU
     * <!-- Wrong doc in current code -->
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetMyPriceForSKU request or MarketplaceWebServiceProducts_Model_GetMyPriceForSKU object itself
     * @see MarketplaceWebServiceProducts_Model_GetMyPriceForSKURequest
     * @return MarketplaceWebServiceProducts_Model_GetMyPriceForSKUResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getMyPriceForSKU($request, $processResponse = false)
    {
        if($request){
            if (!($request instanceof MarketplaceWebServiceProducts_Model_GetMyPriceForSKURequest)) {
                //require_once (dirname(__FILE__) . '/Model/GetMyPriceForSKURequest.php');
                $request = new MarketplaceWebServiceProducts_Model_GetMyPriceForSKURequest($request);
            }
            $parameters = $request->toQueryParameterArray();
            $parameters['Action'] = 'GetMyPriceForSKU';
            $httpResponse = $this->_invoke($parameters);
            return $httpResponse;
        }
        else if($processResponse){
            //require_once (dirname(__FILE__) . '/Model/GetMyPriceForSKUResponse.php');
            $response = MarketplaceWebServiceProducts_Model_GetMyPriceForSKUResponse::fromXML($processResponse['ResponseBody']);
            $response->setResponseHeaderMetadata($processResponse['ResponseHeaderMetadata']);
            return $response;
        }

    }





    /**
     * Get Product Categories For ASIN
     * Gets categories information for a product identified by
     * the MarketplaceId and ASIN.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetProductCategoriesForASIN request or MarketplaceWebServiceProducts_Model_GetProductCategoriesForASIN object itself
     * @see MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINRequest
     * @return MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getProductCategoriesForASIN($request, $processResponse = false)
    {
        if($request){
            if (!($request instanceof MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINRequest)) {
                //require_once (dirname(__FILE__) . '/Model/GetProductCategoriesForASINRequest.php');
                $request = new MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINRequest($request);
            }
            $parameters = $request->toQueryParameterArray();
            $parameters['Action'] = 'GetProductCategoriesForASIN';
            $httpResponse = $this->_invoke($parameters);
            return $httpResponse;
        }
        else if($processResponse){
            //require_once (dirname(__FILE__) . '/Model/GetProductCategoriesForASINResponse.php');
            $response = MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINResponse::fromXML($processResponse['ResponseBody']);
            $response->setResponseHeaderMetadata($processResponse['ResponseHeaderMetadata']);
            return $response;
        }

    }



    /**
     * Get Product Categories For SKU
     * Gets categories information for a product identified by
     * the SellerId and SKU.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKU request or MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKU object itself
     * @see MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKURequest
     * @return MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKUResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getProductCategoriesForSKU($request, $processResponse = false)
    {
        if($request){
            if (!($request instanceof MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKURequest)) {
                //require_once (dirname(__FILE__) . '/Model/GetProductCategoriesForSKURequest.php');
                $request = new MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKURequest($request);
            }
            $parameters = $request->toQueryParameterArray();
            $parameters['Action'] = 'GetProductCategoriesForSKU';
            $httpResponse = $this->_invoke($parameters);
            return $httpResponse;
        }
        else if ($processResponse){
            //require_once (dirname(__FILE__) . '/Model/GetProductCategoriesForSKUResponse.php');
            $response = MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKUResponse::fromXML($processResponse['ResponseBody']);
            $response->setResponseHeaderMetadata($processResponse['ResponseHeaderMetadata']);
            return $response;
        }

    }




    /**
     * Get Service Status
     * Returns the service status of a particular MWS API section. The operation
     * takes no input.
     * All API sections within the API are required to implement this operation.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetServiceStatus request or MarketplaceWebServiceProducts_Model_GetServiceStatus object itself
     * @see MarketplaceWebServiceProducts_Model_GetServiceStatusRequest
     * @return MarketplaceWebServiceProducts_Model_GetServiceStatusResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getServiceStatus($request, $processResponse = false)
    {
        if($request){
            if (!($request instanceof MarketplaceWebServiceProducts_Model_GetServiceStatusRequest)) {
                //require_once (dirname(__FILE__) . '/Model/GetServiceStatusRequest.php');
                $request = new MarketplaceWebServiceProducts_Model_GetServiceStatusRequest($request);
            }
            $parameters = $request->toQueryParameterArray();
            $parameters['Action'] = 'GetServiceStatus';
            $httpResponse = $this->_invoke($parameters);
            return $httpResponse;
        }
        else if($processResponse){
            //require_once (dirname(__FILE__) . '/Model/GetServiceStatusResponse.php');
            $response = MarketplaceWebServiceProducts_Model_GetServiceStatusResponse::fromXML($processResponse['ResponseBody']);
            $response->setResponseHeaderMetadata($processResponse['ResponseHeaderMetadata']);
            return $response;
        }

    }


    /**
     * List Matching Products
     * ListMatchingProducts can be used to
     * find products that match the given criteria.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_ListMatchingProducts request or MarketplaceWebServiceProducts_Model_ListMatchingProducts object itself
     * @see MarketplaceWebServiceProducts_Model_ListMatchingProductsRequest
     * @return MarketplaceWebServiceProducts_Model_ListMatchingProductsResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function listMatchingProducts($request, $processResponse = false)
    {
        if($request){
            if (!($request instanceof MarketplaceWebServiceProducts_Model_ListMatchingProductsRequest)) {
                //require_once (dirname(__FILE__) . '/Model/ListMatchingProductsRequest.php');
                $request = new MarketplaceWebServiceProducts_Model_ListMatchingProductsRequest($request);
            }
            $parameters = $request->toQueryParameterArray();
            $parameters['Action'] = 'ListMatchingProducts';
            $httpResponse = $this->_invoke($parameters);
        }
        if($processResponse){
            //require_once (dirname(__FILE__) . '/Model/ListMatchingProductsResponse.php');
            $response = MarketplaceWebServiceProducts_Model_ListMatchingProductsResponse::fromXML($processResponse['ResponseBody']);
            $response->setResponseHeaderMetadata($processResponse['ResponseHeaderMetadata']);
            return $response;
        }

    }

    /**
     * Construct new Client
     *
     * @param string $awsAccessKeyId AWS Access Key ID
     * @param string $awsSecretAccessKey AWS Secret Access Key
     * @param array $config configuration options.
     * Valid configuration options are:
     * <ul>
     * <li>ServiceURL</li>
     * <li>UserAgent</li>
     * <li>SignatureVersion</li>
     * <li>TimesRetryOnError</li>
     * <li>ProxyHost</li>
     * <li>ProxyPort</li>
     * <li>ProxyUsername<li>
     * <li>ProxyPassword<li>
     * <li>MaxErrorRetry</li>
     * </ul>
     */
    public function __construct($awsAccessKeyId = null, $awsSecretAccessKey = null, $applicationName = null, $applicationVersion = null, $config = null)
    {
        parent::__construct($awsAccessKeyId, $awsSecretAccessKey, $applicationName, $applicationVersion, $config);

        if(is_null($applicationName)) $applicationName = $this->_applicationName;
        if(is_null($applicationVersion)) $applicationVersion = $this->_applicationVersion;
        $this->setUserAgentHeader($applicationName, $applicationVersion);
    }

    // Private API ------------------------------------------------------------//

    /**
     * Invoke request and return response
     */
    protected function _invoke(array $parameters)
    {
        try {
            if (empty($this->_config['ServiceURL'])) {
                //require_once (dirname(__FILE__) . '/Exception.php');
                throw new MarketplaceWebServiceProducts_Exception(
                    array ('ErrorCode' => 'InvalidServiceURL',
                        'Message' => "Missing serviceUrl configuration value. You may obtain a list of valid MWS URLs by consulting the MWS Developer's Guide, or reviewing the sample code published along side this library."));
            }
            $parameters = $this->_addRequiredParameters($parameters);
            //return $parameters;
            $retries = 0;
            for (;;) {
                $response = $this->_httpPost($parameters);
                return $response;
            }
        } catch (MarketplaceWebServiceProducts_Exception $se) {
            throw $se;
        } catch (Exception $t) {
            //require_once (dirname(__FILE__) . '/Exception.php');
            throw new MarketplaceWebServiceProducts_Exception(array('Exception' => $t, 'Message' => $t->getMessage()));
        }
    }


    /**
     * Perform HTTP post with exponential retries on error 500 and 503
     *
     */
    public function _httpPost(array $parameters)
    {
        $config = $this->_config;
        $query = $this->_getParametersAsString($parameters);
        $url = parse_url ($config['ServiceURL']);
        $uri = array_key_exists('path', $url) ? $url['path'] : null;
        if (!isset ($uri)) {
            $uri = "/";
        }

        switch ($url['scheme']) {
            case 'https':
                $scheme = 'https://';
                $port = isset($url['port']) ? $url['port'] : 443;
                break;
            default:
                $scheme = 'http://';
                $port = isset($url['port']) ? $url['port'] : 80;
        }

        $allHeaders = $config['Headers'];
        $allHeaders['Content-Type'] = "application/x-www-form-urlencoded; charset=utf-8"; // We need to make sure to set utf-8 encoding here
        $allHeaders['Expect'] = null; // Don't expect 100 Continue
        $allHeadersStr = array();
        foreach($allHeaders as $name => $val) {
            $str = $name . ": ";
            if(isset($val)) {
                $str = $str . $val;
            }
            $allHeadersStr[] = $str;
        }


        $finalRequest["std_options"] = array(CURLOPT_PORT => $port,
            CURLOPT_POSTFIELDS => $query,
            CURLOPT_HTTPHEADER => $allHeadersStr,
            //CURLOPT_HTTPPROXYTUNNEL => false,
            //CURLOPT_PROXY => $proxy
        );
        $finalRequest["url"] = $scheme . $url['host'] . $uri;
        return $finalRequest;
    }

    public function rolling_curl($urls, $custom_options = null) {
        $outputArray = array();

        $config = $this->_config;
        // make sure the rolling window isn't greater than the # of urls
        $rolling_window = 9;
        $rolling_window = (sizeof($urls) < $rolling_window) ? sizeof($urls) : $rolling_window;

        $master = curl_multi_init();
        $curl_arr = array();

        // add additional curl options here
        $std_options = array(	CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_CONNECTTIMEOUT => 10,
            CURLOPT_MAXREDIRS => 5,
            CURLOPT_POST => true,
            CURLOPT_HEADER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => 2,
            CURLOPT_USERAGENT => $config['UserAgent']);
        if ($config['ProxyHost'] != null && $config['ProxyPort'] != -1)
        {
            $std_options[CURLOPT_PROXY] = $config['ProxyHost'] . ':' . $config['ProxyPort'];
        }
        if ($config['ProxyUsername'] != null && $config['ProxyPassword'] != null)
        {
            $std_options[CURLOPT_PROXYUSERPWD] = $config['ProxyUsername'] . ':' . $config['ProxyPassword'];
        }

        // start the first batch of requests
        for ($i = 0; $i < $rolling_window; $i++) {
            $ch = curl_init();
            $options = ($custom_options[$i]) ? ($std_options + $custom_options[$i]) : $std_options;
            $options[CURLOPT_URL] = $urls[$i];
            curl_setopt_array($ch,$options);
            curl_multi_add_handle($master, $ch);
        }
        //echo time();
        do {
            while(($execrun = curl_multi_exec($master, $running)) == CURLM_CALL_MULTI_PERFORM);
            if($execrun != CURLM_OK)
                break;
            // a request was just completed -- find out which one
            while($done = curl_multi_info_read($master)) {
                $info = curl_getinfo($done['handle']);
                //echo curl_multi_getcontent($done['handle']);
                if ($info['http_code'] == 200)  {
                    $output = curl_multi_getcontent($done['handle']);
                    $outputArray []= $this->processCurlResponse($output);
                    //echo $output;
                    // request successful.  process output using the callback function.
                    //$this->$callback($output, $info);

                    // start a new request (it's important to do this before removing the old one)
                    $ch = curl_init();
                    $newoffset = $i++;
                    if(isset($urls[$newoffset]) && isset($custom_options[$newoffset])){
                        $newoptions = $std_options + $custom_options[$newoffset];
                        $newoptions[CURLOPT_URL] = $urls[$newoffset];  // increment i
                        curl_setopt_array($ch,$newoptions);
                        curl_multi_add_handle($master, $ch);
                        unset($newoptions);
                    }

                    // remove the curl handle that just completed
                    curl_multi_remove_handle($master, $done['handle']);
                    curl_close($done['handle']);
                } else {
                    print_r($info);
                    echo curl_multi_getcontent($done['handle']);
                    curl_multi_remove_handle($master, $done['handle']);
                    curl_close($done['handle']);
                    echo "request failed.  add error handling.";
                }
            }
        } while ($running);

        curl_multi_close($master);
        return $outputArray;
    }
}