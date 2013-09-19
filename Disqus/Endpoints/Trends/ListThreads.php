<?php

/**
* ZF-Disqus - Endpoint Trends_ListThreads
*
* return a list of trending threads
*
* https://github.com/datenschleuder/zf-disqus
*
*
* @author Jürgen Meier <support@mypasswordsafe.net>
* @copyright Jürgen Meier 2013
* @version 1.0
* @see http://disqus.com/api/docs/trends/listThreads/
* @license BSD
*/
final class ZendX_Disqus_Endpoints_Trends_ListThreads implements 
        ZendX_Disqus_Interfaces_Endpoint
{

    private $_forum = NULL;

    private $_limit = 10;

    private $_related = NULL;

    /**
     * set forum short name
     *
     * @param string $name            
     * @return ZendX_Disqus_Endpoints_Trends_ListThreads
     */
    public function setForum ($name)
    {
        $this->_forum = (string) $name;
        return $this;
    }

    /**
     * set cursor
     *
     * @param string $related            
     * @return ZendX_Disqus_Endpoints_Trends_ListThreads
     */
    public function setRelated ($related)
    {
        $this->_related = (string) $related;
        return $this;
    }

    /**
     * set limit
     *
     * @param int $limit            
     * @return ZendX_Disqus_Endpoints_Trends_ListThreads
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
                'forum' => $this->_forum,
                'related' => $this->_related,
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
                'endpointurl' => 'https://disqus.com/api/3.0/trends/listThreads.json',
                'method' => 'get'
        );
    }
}