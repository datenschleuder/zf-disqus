<?php

/**
* ZF-Disqus - Endpoint Posts_Remove
*
* remove a post
*
* https://github.com/datenschleuder/zf-disqus
*
*
* @author Jürgen Meier <support@mypasswordsafe.net>
* @copyright Jürgen Meier 2013
* @version 1.0
* @see http://disqus.com/api/docs/posts/remove/
* @license BSD
*/
final class ZendX_Disqus_Endpoints_Posts_Remove implements 
        ZendX_Disqus_Interfaces_Endpoint
{

    private $_post = NULL;

    /**
     * set post id
     *
     * @param int $id            
     * @return ZendX_Disqus_Endpoints_Posts_Remove
     */
    public function setPostId ($id)
    {
        $this->_post = (int) $id;
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
                'post' => $this->_post
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
                'endpointurl' => 'https://disqus.com/api/3.0/posts/remove.json',
                'method' => 'post'
        );
    }
}