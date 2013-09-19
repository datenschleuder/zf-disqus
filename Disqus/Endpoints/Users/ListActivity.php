<?php

/**
* ZF-Disqus - Endpoint User_ListActivity
*
* Returns a list of various activity types made by the user
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
* @see http://disqus.com/api/docs/users/listActivity/
* @license BSD
*/
final class ZendX_Disqus_Endpoints_Users_ListActivity implements 
        ZendX_Disqus_Interfaces_Endpoint
{

    private $_user = NULL;

    private $_since = NULL;

    private $_cursor = NULL;

    private $_limit = 25;

    private $_anonuser = NULL;

    private $_query = NULL;

    private $_include = NULL;

    private $_related = NULL;

    /**
     * set user id
     *
     * @param int $id            
     * @return ZendX_Disqus_Endpoints_Users_ListActivity
     */
    public function setUserId ($id)
    {
        $this->_userid = (int) $id;
        return $this;
    }

    /**
     * set timestamp
     *
     * @param string $timestamp            
     * @return ZendX_Disqus_Endpoints_Users_ListActivity
     */
    public function setSince ($timestamp)
    {
        $this->_sinceid = (string) $timestamp;
        return $this;
    }

    /**
     * set cursor
     *
     * @param string $cursor            
     * @return ZendX_Disqus_Endpoints_Users_ListActivity
     */
    public function setCursor ($cursor)
    {
        $this->_cursor = (string) $cursor;
        return $this;
    }

    /**
     * set result limit
     *
     * @param int $limit            
     * @return ZendX_Disqus_Endpoints_Users_ListActivity
     */
    public function setLimit ($limit)
    {
        $this->_limit = (int) $limit;
        return $this;
    }

    /**
     * set anon user
     *
     * @param string $hash            
     * @return ZendX_Disqus_Endpoints_Users_ListActivity
     */
    public function setAnonUser ($hash)
    {
        $this->_anonuser = (string) $hash;
        return $this;
    }

    /**
     * set query
     *
     * @param string $query            
     * @return ZendX_Disqus_Endpoints_Users_ListActivity
     */
    public function setQuery ($query)
    {
        $this->_query = (string) $query;
        return $this;
    }

    /**
     * set include valid values are
     * user, replies, following
     *
     * @param string $include            
     * @return ZendX_Disqus_Endpoints_Users_ListActivity
     */
    public function setInclude ($include)
    {
        $this->_include = (string) $include;
        return $this;
    }

    /**
     * set related valid values are forum, thread
     *
     * @param string $related            
     * @return ZendX_Disqus_Endpoints_Users_ListActivity
     */
    public function setRelated ($related)
    {
        $this->_related = (string) $related;
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
                'since' => $this->_since,
                'cursor' => $this->_cursor,
                'limit' => $this->_limit,
                'anon_user' => $this->_anonuser,
                'include' => $this->_include,
                'query' => $this->_query,
                'related' => $this->_related
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
                'endpointurl' => 'https://disqus.com/api/3.0/users/listActivity.json',
                'method' => 'get'
        );
    }
}