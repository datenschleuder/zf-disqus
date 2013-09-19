<?php

/**
* ZF-Disqus - Endpoint Threads_Vote
*
* vote for a thread
*
* https://github.com/datenschleuder/zf-disqus
*
*
* @author Jürgen Meier <support@mypasswordsafe.net>
* @copyright Jürgen Meier 2013
* @version 1.0
* @see http://disqus.com/api/docs/threads/vote/
* @license BSD
*/
final class ZendX_Disqus_Endpoints_Threads_Vote implements 
        ZendX_Disqus_Interfaces_Endpoint
{

    private $_forum = NULL;

    private $_thread = NULL;

    private $_vote = 0;

    /**
     * set forum short name
     *
     * @param string $forum            
     * @return ZendX_Disqus_Endpoints_Threads_Vote
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
     * @return ZendX_Disqus_Endpoints_Threads_Vote
     */
    public function setThreadId ($id)
    {
        $this->_thread = (int) $id;
        return $this;
    }

    /**
     * set vote, valid values are
     * -1, 0, 1
     *
     * @param int $vote            
     * @return ZendX_Disqus_Endpoints_Threads_Vote
     */
    public function setVote ($vote)
    {
        $this->_vote = (int) $vote;
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
                'vote' => $this->_vote
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
                'endpointurl' => 'https://disqus.com/api/3.0/threads/vote.json',
                'method' => 'post'
        );
    }
}