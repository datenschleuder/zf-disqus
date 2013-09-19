<?php

/**
* ZF-Disqus - Endpoint Category_Create
*
* create a new category
*
* https://github.com/datenschleuder/zf-disqus
*
*
* @author Jürgen Meier <support@mypasswordsafe.net>
* @copyright Jürgen Meier 2013
* @version 1.0
* @see http://disqus.com/api/docs/category/create/
* @license BSD
*/
final class ZendX_Disqus_Endpoints_Category_Create implements 
        ZendX_Disqus_Interfaces_Endpoint
{

    private $_forum = NULL;

    private $_title = NULL;

    private $_default = 'false';

    /**
     * set forum short name
     *
     * @param string $forum            
     * @return ZendX_Disqus_Endpoints_Category_Create
     */
    public function setForum ($forum)
    {
        $this->_forum = (string) $forum;
        return $this;
    }

    /**
     * set title
     *
     * @param string $title            
     * @return ZendX_Disqus_Endpoints_Category_Create
     */
    public function setTitle ($title)
    {
        $this->_title = (string) $title;
        return $this;
    }

    /**
     * set default
     *
     * @param string $value            
     * @return ZendX_Disqus_Endpoints_Category_Create
     */
    public function setVote ($value)
    {
        $this->_default = (string) $value;
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
                'title' => $this->_title,
                'forum' => $this->_forum,
                'default' => $this->_default
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
                'endpointurl' => 'https://disqus.com/api/3.0/categories/create.json',
                'method' => 'post'
        );
    }
}