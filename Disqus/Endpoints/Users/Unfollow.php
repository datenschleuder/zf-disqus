<?php

/**
* ZF-Disqus - Endpoint User_Unfollow
*
* unfollow a user
*
* https://github.com/datenschleuder/zf-disqus
*
*
* @author Jürgen Meier <support@mypasswordsafe.net>
* @copyright Jürgen Meier 2013
* @version 1.0
* @see http://disqus.com/api/docs/users/unfollow/
* @license BSD
*/
final class ZendX_Disqus_Endpoints_Users_Unfollow implements 
        ZendX_Disqus_Interfaces_Endpoint
{

    private $_target = NULL;

    /**
     * set target
     * looks up a user by ID
     *
     * @param int $id            
     * @return ZendX_Disqus_Endpoints_Users_Unfollow
     */
    public function setTarget ($id)
    {
        $this->_target = (int) $id;
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
                'target' => $this->_target
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
                'endpointurl' => 'https://disqus.com/api/3.0/users/unfollow.json',
                'method' => 'post'
        );
    }
}