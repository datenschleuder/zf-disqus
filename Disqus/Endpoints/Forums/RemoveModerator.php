<?php

/**
* ZF-Disqus - Endpoint Forums_RemoveModerator
*
* remove moderator from forum
*
* https://github.com/datenschleuder/zf-disqus
*
*
* @author Jürgen Meier <support@mypasswordsafe.net>
* @copyright Jürgen Meier 2013
* @version 1.0
* @see http://disqus.com/api/docs/forums/removeModerator/
* @license BSD
*/
final class ZendX_Disqus_Endpoints_Forums_RemoveModerator implements 
        ZendX_Disqus_Interfaces_Endpoint
{

    private $_moderator = NULL;

    /**
     * set moderator id
     *
     * @param string $moderator            
     * @return ZendX_Disqus_Endpoints_Forums_RemoveModerator
     *
     */
    public function setModerator ($moderator)
    {
        $this->_moderator = (string) $moderator;
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
                'moderator' => $this->_moderator
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
                'endpointurl' => 'https://disqus.com/api/3.0/forums/removeModerator.json',
                'method' => 'post'
        );
    }
}