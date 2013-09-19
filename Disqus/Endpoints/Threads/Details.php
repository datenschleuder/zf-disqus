<?php

/**
* ZF-Disqus - Endpoint Threads_Details
*
* return thread details
*
* https://github.com/datenschleuder/zf-disqus
*
*
* @author Jürgen Meier <support@mypasswordsafe.net>
* @copyright Jürgen Meier 2013
* @version 1.0
* @see http://disqus.com/api/docs/threads/details/
* @license BSD
*/
final class ZendX_Disqus_Endpoints_Threads_Details implements 
        ZendX_Disqus_Interfaces_Endpoint
{

    private $_thread = NULL;

    private $_forum = NULL;

    private $_related = NULL;

    /**
     * set relation, valid values are
     * forum, author, category
     *
     * @param string $related            
     * @return ZendX_Disqus_Endpoints_Threads_Details
     */
    public function setRelated ($related)
    {
        $this->_related = (string) $related;
        return $this;
    }

    /**
     * set thread id
     *
     * @param string $id            
     * @return ZendX_Disqus_Endpoints_Threads_Details
     */
    public function setThreadId ($id)
    {
        $this->_thread = (int) $id;
        return $this;
    }

    /**
     * set forum short name
     *
     * @param string $forum            
     * @return ZendX_Disqus_Endpoints_Threads_Details
     */
    public function setForum ($forum)
    {
        $this->_forum = (string) $forum;
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
                'thread' => $this->_thread,
                'forum' => $this->_forum,
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
                'endpointurl' => 'https://disqus.com/api/3.0/threads/details.json',
                'method' => 'get'
        );
    }
}

