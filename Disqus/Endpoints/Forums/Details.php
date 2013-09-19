<?php

/**
* ZF-Disqus - Endpoint Forums_Details
*
* return forum details
*
* https://github.com/datenschleuder/zf-disqus
*
*
* @author Jürgen Meier <support@mypasswordsafe.net>
* @copyright Jürgen Meier 2013
* @version 1.0
* @see http://disqus.com/api/docs/forums/details/
* @license BSD
*/
final class ZendX_Disqus_Endpoints_Forums_Details implements 
        ZendX_Disqus_Interfaces_Endpoint
{

    private $_forum = NULL;

    private $_related = NULL;

    /**
     * set forum short name
     *
     * @param string $shortname            
     * @return ZendX_Disqus_Endpoints_Forums_Details
     *
     */
    public function setRelated ($related)
    {
        $this->_related = (string) $related;
        return $this;
    }

    /**
     * set forum short name
     *
     * @param string $name            
     * @return ZendX_Disqus_Endpoints_Forums_Details
     */
    public function setForum ($name)
    {
        $this->_forum = (string) $name;
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
                'endpointurl' => 'https://disqus.com/api/3.0/forums/details.json',
                'method' => 'get'
        );
    }
}