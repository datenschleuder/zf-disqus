<?php

/**
* ZF-Disqus - Endpoint Forums_AddModerator
*
* adding moderator to a forum
*
* https://github.com/datenschleuder/zf-disqus
*
*
* @author Jürgen Meier <support@mypasswordsafe.net>
* @copyright Jürgen Meier 2013
* @version 1.0
* @see http://disqus.com/api/docs/forums/addModerator/
* @license BSD
*/
final class ZendX_Disqus_Endpoints_Forums_AddModerator implements 
        ZendX_Disqus_Interfaces_Endpoint
{

    private $_forum = NULL;

    private $_user = NULL;

    /**
     * set forum short name
     *
     * @param string $forum            
     * @return ZendX_Disqus_Endpoints_Forums_AddModerator
     *
     */
    public function setForum ($forum)
    {
        $this->_forum = (string) $forum;
        return $this;
    }

    /**
     * set export format
     *
     * @param string $format            
     * @return ZendX_Disqus_Endpoints_Forums_AddModerator
     */
    public function setUser ($user)
    {
        $this->_user = (string) $user;
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
                'user' => $this->_user
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
                'endpointurl' => 'https://disqus.com/api/3.0/forums/addModerator.json',
                'method' => 'post'
        );
    }
}