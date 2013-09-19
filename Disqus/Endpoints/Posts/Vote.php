<?php

/**
* ZF-Disqus - Endpoint Posts_Vote
*
* vote for a post
*
* https://github.com/datenschleuder/zf-disqus
*
*
* @author Jürgen Meier <support@mypasswordsafe.net>
* @copyright Jürgen Meier 2013
* @version 1.0
* @see http://disqus.com/api/docs/posts/vote/
* @license BSD
*/
final class ZendX_Disqus_Endpoints_Posts_Vote implements 
        ZendX_Disqus_Interfaces_Endpoint
{

    private $_post = NULL;

    private $_vote = 0;

    /**
     * set post id
     *
     * @param int $id            
     * @return ZendX_Disqus_Endpoints_Posts_Vote
     */
    public function setPostId ($id)
    {
        $this->_post = (int) $id;
        return $this;
    }

    /**
     * set vote, valid values are
     * -1, 0, 1
     *
     * @param int $vote            
     * @return ZendX_Disqus_Endpoints_Posts_Vote
     */
    public function setVote ($vote)
    {
        $this->_vote = (string) $vote;
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
                'post' => $this->_post,
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
                'endpointurl' => 'https://disqus.com/api/3.0/posts/vote.json',
                'method' => 'post'
        );
    }
}