<?php

/**
* ZF-Disqus - Endpoint Posts_GetContext
*
* return the hierarchal tree of a post
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
* @see http://disqus.com/api/docs/posts/getContext/
* @license BSD
*/
final class ZendX_Disqus_Endpoints_Posts_GetContext implements 
        ZendX_Disqus_Interfaces_Endpoint
{

    private $_post = NULL;

    private $_related = NULL;

    private $_depth = 10;

    /**
     * set post id
     *
     * @param int $id            
     * @return ZendX_Disqus_Endpoints_Posts_GetContext
     */
    public function setPostId ($id)
    {
        $this->_post = (int) $id;
        return $this;
    }

    /**
     * set related , valid values are
     * forum, thread
     *
     * @param string $related            
     * @return @return ZendX_Disqus_Endpoints_Posts_GetContext
     */
    public function setRelated ($related)
    {
        $this->_related = (string) $related;
        return $this;
    }

    /**
     * set depth
     *
     * @param int $depth            
     * @return ZendX_Disqus_Endpoints_Posts_GetContext
     */
    public function setDepth ($depth)
    {
        $this->_depth = (int) $depth;
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
                'related' => $this->_related,
                'depth' => $this->_depth
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
                'endpointurl' => 'https://disqus.com/api/3.0/posts/getContext.json',
                'method' => 'get'
        );
    }
}