<?php

/**
* ZF-Disqus - Endpoint Threads_ListHot
*
* return a list of hottest threads
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
* @see http://disqus.com/api/docs/threads/listHot/
* @license BSD
*/
final class ZendX_Disqus_Endpoints_Threads_ListHot implements 
        ZendX_Disqus_Interfaces_Endpoint
{

    private $_category = NULL;

    private $_forum = NULL;

    private $_author = NULL;

    private $_related = NULL;

    private $_limit = 25;

    private $_include = NULL;

    /**
     * set category id
     *
     * @param string $id            
     * @return ZendX_Disqus_Endpoints_Threads_ListHot
     */
    public function setCategoryId ($id)
    {
        $this->_category = (int) $id;
        return $this;
    }

    /**
     * set forum short name
     *
     * @param string $forum            
     * @return ZendX_Disqus_Endpoints_Threads_ListHot
     */
    public function setForum ($forum)
    {
        $this->_forum = (string) $forum;
        return $this;
    }

    /**
     * set author
     *
     * @param string $url            
     * @return ZendX_Disqus_Endpoints_Threads_ListHot
     */
    public function setAuthor ($author)
    {
        $this->_author = (string) $author;
        return $this;
    }

    /**
     * set related, valid values are
     * forum, author, category
     *
     * @param string $related            
     * @return ZendX_Disqus_Endpoints_Threads_ListHot
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
     * @return ZendX_Disqus_Endpoints_Threads_ListHot
     */
    public function setLimit ($limit)
    {
        $this->_limit = (int) $limit;
        return $this;
    }

    /**
     * set include, valid values are
     * open, closed, killed
     *
     * @param string $include            
     * @return ZendX_Disqus_Endpoints_Threads_ListHot
     */
    public function setInclude ($include)
    {
        $this->_include = (string) $include;
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
                'category' => $this->_category,
                'author' => $this->_author,
                'related' => $this->_related,
                'limit' => $this->_limit,
                'include' => $this->_include
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
                'endpointurl' => 'https://disqus.com/api/3.0/threads/listHot.json',
                'method' => 'get'
        );
    }
}