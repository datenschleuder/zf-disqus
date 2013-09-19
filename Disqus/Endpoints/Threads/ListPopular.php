<?php

/**
* ZF-Disqus - Endpoint Threads_ListHot
*
* return a list of threads sortet by number of posts
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
* @see http://disqus.com/api/docs/threads/listPopular/
* @license BSD
*/
final class ZendX_Disqus_Endpoints_Threads_ListPopular implements 
        ZendX_Disqus_Interfaces_Endpoint
{

    private $_category = NULL;

    private $_forum = NULL;

    private $_interval = '7d';

    private $_related = NULL;

    private $_limit = 25;

    private $_withtoppost = 'false';

    /**
     * set category id
     *
     * @param string $id            
     * @return ZendX_Disqus_Endpoints_Threads_ListPopular
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
     * @return ZendX_Disqus_Endpoints_Threads_ListPopular
     */
    public function setForum ($forum)
    {
        $this->_forum = (string) $forum;
        return $this;
    }

    /**
     * set interval, valid values are
     * 1h, 6h, 12h, 1d, 3d, 7d, 30d, 90d
     *
     * @param string $interval            
     * @return ZendX_Disqus_Endpoints_Threads_ListPopular
     */
    public function setInterval ($interval)
    {
        $this->_interval = (string) $interval;
        return $this;
    }

    /**
     * set related, valid values are
     * forum, author, category
     *
     * @param string $related            
     * @return ZendX_Disqus_Endpoints_Threads_ListPopular
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
     * @return ZendX_Disqus_Endpoints_Threads_ListPopular
     */
    public function setLimit ($limit)
    {
        $this->_limit = (int) $limit;
        return $this;
    }

    /**
     * set with top post
     *
     * @param string $value            
     * @return ZendX_Disqus_Endpoints_Threads_ListPopular
     */
    public function setWithTopPost ($value)
    {
        $this->_withtoppost = (string) $value;
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
                'interval' => $this->_interval,
                'related' => $this->_related,
                'limit' => $this->_limit,
                'with_top_post' => $this->_withtoppost
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
                'endpointurl' => 'https://disqus.com/api/3.0/threads/listPopular.json',
                'method' => 'get'
        );
    }
}
