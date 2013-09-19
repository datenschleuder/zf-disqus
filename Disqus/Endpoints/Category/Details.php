<?php

/**
* ZF-Disqus - Endpoint Category_Details
*
* return category details
*
* https://github.com/datenschleuder/zf-disqus
*
*
* @author Jürgen Meier <support@mypasswordsafe.net>
* @copyright Jürgen Meier 2013
* @version 1.0
* @see http://disqus.com/api/docs/category/details/
* @license BSD
*/
final class ZendX_Disqus_Endpoints_Category_Details implements 
        ZendX_Disqus_Interfaces_Endpoint
{

    private $_category = NULL;

    /**
     * set category id
     *
     * @param int $id            
     * @return ZendX_Disqus_Endpoints_Category_Details
     */
    public function setCategoryId ($id)
    {
        $this->_category = (int) $id;
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
                'category' => $this->_category
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
                'endpointurl' => 'https://disqus.com/api/3.0/categories/details.json',
                'method' => 'get'
        );
    }
}