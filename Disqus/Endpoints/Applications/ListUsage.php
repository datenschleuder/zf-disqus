<?php

/**
* ZF-Disqus - Endpoint Application_ListUsage
*
* Returns API usage information
*
* https://github.com/datenschleuder/zf-disqus
*
*
* @author Jürgen Meier <support@mypasswordsafe.net>
* @copyright Jürgen Meier 2013
* @version 1.0
* @see http://disqus.com/api/docs/applications/listUsage/
* @license BSD
*/
final class ZendX_Disqus_Endpoints_Applications_ListUsage implements 
        ZendX_Disqus_Interfaces_Endpoint
{

    private $_application = NULL;

    private $_days = 30;

    /**
     * specify application
     *
     * @param string $application            
     * @return ZendX_Disqus_Endpoints_Applications_ListUsage
     *
     */
    public function setApplication ($application)
    {
        $this->_application = (string) $application;
        return $this;
    }

    /**
     * specify days
     *
     * @param string $days            
     * @return ZendX_Disqus_Endpoints_Applications_ListUsage
     */
    public function setDays ($days)
    {
        $this->_days = (int) $days;
        return $this;
    }

    /**
     * return GET-Parameter
     *
     * (non-PHPdoc)
     * 
     * @see ZendX_Disqus_Interfaces_Endpoint::getData()
     * @return array
     *
     */
    public function getData ()
    {
        return array(
                'application' => $this->_application,
                'days' => $this->_days
        );
    }

    /**
     * return url params
     *
     * (non-PHPdoc)
     * 
     * @see ZendX_Disqus_Interfaces_Endpoint::getUrl()
     * @return array
     *
     */
    public function getUrl ()
    {
        return array(
                'endpointurl' => 'https://disqus.com/api/3.0/applications/listUsage.json',
                'method' => 'get'
        );
    }
} 