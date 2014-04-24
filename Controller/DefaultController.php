<?php

/*
 * This file is part of the YepsuaSmarTwigBundle.
 *
 * (c) Omar Yepez <omar.yepez@yepsua.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Yepsua\ThemeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/theme/layout")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
    
    /**
     * @Route("/theme/auth")
     * @Template()
     */
    public function authAction()
    {
        return array();
    }
    
    
    /**
     * @Route("/theme/auth/forgot-password")
     * @Template()
     */
    public function forgotPasswordAction()
    {
        return array();
    }
    
    /**
     * @Route("/theme/register")
     * @Template()
     */
    public function registerAction()
    {
        return array();
    }
    
    /**
     * @Route("/theme/auth/error")
     * @Template()
     */
    public function authErrorAction()
    {
        return array();
    }
    
}
