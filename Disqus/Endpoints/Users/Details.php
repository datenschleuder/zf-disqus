<?php

/**
* ZF-Disqus - Endpoint User_Details
*
* return user details
* 
* CAUTION: 
* This method has BETA state and is currently under development
*
* https://github.com/datenschleuder/zf-disqus
*
*
* @author Jürgen Meier <support@mypasswordsafe.net>
* @copyright Jürgen Meier 2013
* @version 1.0
* @see http://disqus.com/api/docs/users/details/
* @license BSD
*/
final class ZendX_Disqus_Endpoints_Users_Details implements 
        ZendX_Disqus_Interfaces_Endpoint
{

    private $_userid = NULL;

    /**
     * set user id
     *
     * @param int $id            
     * @return ZendX_Disqus_Endpoints_Users_Details
     */
    public function setUserId ($id)
    {
        $this->_userid = (int) $id;
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
                'user' => $this->_userid
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
                'endpointurl' => 'https://disqus.com/api/3.0/users/details.json',
                'method' => 'get'
        );
    }
}