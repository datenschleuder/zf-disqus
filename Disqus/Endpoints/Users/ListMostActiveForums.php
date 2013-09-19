<?php

/**
* ZF-Disqus - Endpoint User_ListForums
*
* return a list of forums a user has been active on recenty
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
* @see http://disqus.com/api/docs/users/listMostActiveForums/
* @license BSD
*/
final class ZendX_Disqus_Endpoints_Users_ListMostActiveForums implements 
        ZendX_Disqus_Interfaces_Endpoint
{

    private $_user = NULL;

    private $_limit = 25;

    /**
     * set user id
     *
     * @param int $id            
     * @return ZendX_Disqus_Endpoints_Users_ListMostActiveForums
     */
    public function setUserId ($id)
    {
        $this->_userid = (int) $id;
        return $this;
    }

    /**
     * set result limit
     *
     * @param int $limit            
     * @return ZendX_Disqus_Endpoints_Users_ListMostActiveForums
     */
    public function setLimit ($limit)
    {
        $this->_limit = (int) $limit;
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
                'user' => $this->_user,
                'limit' => $this->_limit
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
                'endpointurl' => 'https://disqus.com/api/3.0/users/listMostActiveForums.json',
                'method' => 'get'
        );
    }
}