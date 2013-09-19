<?php

/**
* ZF-Disqus - Endpoint Threads_Restore
*
* restore a thread
*
* https://github.com/datenschleuder/zf-disqus
*
*
* @author Jürgen Meier <support@mypasswordsafe.net>
* @copyright Jürgen Meier 2013
* @version 1.0
* @see http://disqus.com/api/docs/threads/restore/
* @license BSD
*/
final class ZendX_Disqus_Endpoints_Threads_Restore implements 
        ZendX_Disqus_Interfaces_Endpoint
{

    private $_forum = NULL;

    private $_thread = NULL;

    /**
     * set forum short name
     *
     * @param string $forum            
     * @return ZendX_Disqus_Endpoints_Threads_Restore
     */
    public function setForum ($forum)
    {
        $this->_forum = (string) $forum;
        return $this;
    }

    /**
     * set thread id
     *
     * @param int $id            
     * @return ZendX_Disqus_Endpoints_Threads_Restore
     */
    public function setThreadId ($id)
    {
        $this->_thread = (int) $id;
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
                'forum' => $this->_forum
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
                'endpointurl' => 'https://disqus.com/api/3.0/threads/restore.json',
                'method' => 'post'
        );
    }
}