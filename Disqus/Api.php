<?php

/**
 * ZF-Disqus - A simple Disqus Client for Zendframework
 *
 * https://github.com/datenschleuder/zf-disqus
 *
 *
 * @author Jürgen Meier <support@mypasswordsafe.net>
 * @copyright Jürgen Meier 2013
 * @version 1.0
 * @license BSD
 */
final class ZendX_Disqus_Api
{

    private $_httpclient = NULL;

    private $_endpoint = NULL;

    private $_accesstoken = NULL;

    private $_apisecret = NULL;

    /**
     * set http client
     *
     * @param Zend_Http_Client $client            
     * @return ZendX_Disqus_Api
     */
    public function setHttpClient (Zend_Http_Client $client)
    {
        $this->_httpclient = $client;
        return $this;
    }

    /**
     * set access token
     *
     * @param string $accesstoken            
     * @return ZendX_Disqus_Api
     */
    public function setAccessToken ($accesstoken)
    {
        $this->_accesstoken = (string) $accesstoken;
        return $this;
    }

    /**
     * set disqus endpoint
     *
     * @param object $endpoint            
     * @return ZendX_Disqus_Api
     */
    public function setEndpoint ($endpoint)
    {
        $this->_endpoint = (object) $endpoint;
        return $this;
    }

    /**
     * set secret key
     *
     * @param string $secret            
     * @return ZendX_Disqus_Api
     */
    public function setApiSecret ($secret)
    {
        $this->_apisecret = (string) $secret;
        return $this;
    }

    /**
     * connecting to disqus api
     *
     * @return mixed
     */
    public function connect ()
    {
        $endpointurl = $this->_endpoint->getUrl();
        
        $this->_httpclient->setUri($endpointurl['endpointurl']);
        $this->_setParams();
        return $this->_getResponse($endpointurl);
    }

    /**
     * return response from disqus api
     *
     * @param array $endpointurl            
     * @return mixed
     */
    private function _getResponse ($endpointurl)
    {
        $response = $this->_httpclient->request(
                '' . strtoupper($endpointurl['method']) . '')->getBody();
        
        if (json_decode($response) != NULL) {
            return Zend_Json::decode($response);
        }
        return $response;
    }

    /**
     * read and set params from disqus endpoint
     *
     * @return void
     */
    private function _setParams ()
    {
        $endpoint = $this->_endpoint->getData();
        if (count($endpoint) > 0) {
            
            $method = $this->_endpoint->getUrl();
            $methodname = 'setParameter' . ucfirst($method['method']);
            
            $this->_httpclient->{$methodname}('access_token', 
                    $this->_accesstoken);
            $this->_httpclient->{$methodname}('api_secret', $this->_apisecret);
            
            foreach ($endpoint as $param => $value) {
                $this->_httpclient->{$methodname}($param, $value);
            }
        }
    }
}