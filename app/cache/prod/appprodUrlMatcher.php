<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = urldecode($pathinfo);

        // dmc_question_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'DMC\\QuestionBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'dmc_question_default_index'));
        }

        // question
        if (rtrim($pathinfo, '/') === '/backoffice/question') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'question');
            }
            return array (  '_controller' => 'DMC\\QuestionBundle\\Controller\\QuestionController::indexAction',  '_route' => 'question',);
        }

        // question_show
        if (0 === strpos($pathinfo, '/backoffice/question') && preg_match('#^/backoffice/question/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'DMC\\QuestionBundle\\Controller\\QuestionController::showAction',)), array('_route' => 'question_show'));
        }

        // question_new
        if ($pathinfo === '/backoffice/question/new') {
            return array (  '_controller' => 'DMC\\QuestionBundle\\Controller\\QuestionController::newAction',  '_route' => 'question_new',);
        }

        // question_create
        if ($pathinfo === '/backoffice/question/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_question_create;
            }
            return array (  '_controller' => 'DMC\\QuestionBundle\\Controller\\QuestionController::createAction',  '_route' => 'question_create',);
        }
        not_question_create:

        // question_edit
        if (0 === strpos($pathinfo, '/backoffice/question') && preg_match('#^/backoffice/question/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'DMC\\QuestionBundle\\Controller\\QuestionController::editAction',)), array('_route' => 'question_edit'));
        }

        // question_update
        if (0 === strpos($pathinfo, '/backoffice/question') && preg_match('#^/backoffice/question/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_question_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'DMC\\QuestionBundle\\Controller\\QuestionController::updateAction',)), array('_route' => 'question_update'));
        }
        not_question_update:

        // question_delete
        if (0 === strpos($pathinfo, '/backoffice/question') && preg_match('#^/backoffice/question/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_question_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'DMC\\QuestionBundle\\Controller\\QuestionController::deleteAction',)), array('_route' => 'question_delete'));
        }
        not_question_delete:

        // reponse
        if (rtrim($pathinfo, '/') === '/backoffice/reponse') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'reponse');
            }
            return array (  '_controller' => 'DMC\\QuestionBundle\\Controller\\ReponseController::indexAction',  '_route' => 'reponse',);
        }

        // reponse_show
        if (0 === strpos($pathinfo, '/backoffice/reponse') && preg_match('#^/backoffice/reponse/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'DMC\\QuestionBundle\\Controller\\ReponseController::showAction',)), array('_route' => 'reponse_show'));
        }

        // reponse_new
        if ($pathinfo === '/backoffice/reponse/new') {
            return array (  '_controller' => 'DMC\\QuestionBundle\\Controller\\ReponseController::newAction',  '_route' => 'reponse_new',);
        }

        // reponse_create
        if ($pathinfo === '/backoffice/reponse/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_reponse_create;
            }
            return array (  '_controller' => 'DMC\\QuestionBundle\\Controller\\ReponseController::createAction',  '_route' => 'reponse_create',);
        }
        not_reponse_create:

        // reponse_edit
        if (0 === strpos($pathinfo, '/backoffice/reponse') && preg_match('#^/backoffice/reponse/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'DMC\\QuestionBundle\\Controller\\ReponseController::editAction',)), array('_route' => 'reponse_edit'));
        }

        // reponse_update
        if (0 === strpos($pathinfo, '/backoffice/reponse') && preg_match('#^/backoffice/reponse/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_reponse_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'DMC\\QuestionBundle\\Controller\\ReponseController::updateAction',)), array('_route' => 'reponse_update'));
        }
        not_reponse_update:

        // reponse_delete
        if (0 === strpos($pathinfo, '/backoffice/reponse') && preg_match('#^/backoffice/reponse/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_reponse_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'DMC\\QuestionBundle\\Controller\\ReponseController::deleteAction',)), array('_route' => 'reponse_delete'));
        }
        not_reponse_delete:

        // profil
        if (rtrim($pathinfo, '/') === '/backoffice/profil') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'profil');
            }
            return array (  '_controller' => 'DMC\\ProfilBundle\\Controller\\ProfilController::indexAction',  '_route' => 'profil',);
        }

        // profil_show
        if (0 === strpos($pathinfo, '/backoffice/profil') && preg_match('#^/backoffice/profil/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'DMC\\ProfilBundle\\Controller\\ProfilController::showAction',)), array('_route' => 'profil_show'));
        }

        // profil_new
        if ($pathinfo === '/backoffice/profil/new') {
            return array (  '_controller' => 'DMC\\ProfilBundle\\Controller\\ProfilController::newAction',  '_route' => 'profil_new',);
        }

        // profil_create
        if ($pathinfo === '/backoffice/profil/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_profil_create;
            }
            return array (  '_controller' => 'DMC\\ProfilBundle\\Controller\\ProfilController::createAction',  '_route' => 'profil_create',);
        }
        not_profil_create:

        // profil_edit
        if (0 === strpos($pathinfo, '/backoffice/profil') && preg_match('#^/backoffice/profil/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'DMC\\ProfilBundle\\Controller\\ProfilController::editAction',)), array('_route' => 'profil_edit'));
        }

        // profil_update
        if (0 === strpos($pathinfo, '/backoffice/profil') && preg_match('#^/backoffice/profil/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_profil_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'DMC\\ProfilBundle\\Controller\\ProfilController::updateAction',)), array('_route' => 'profil_update'));
        }
        not_profil_update:

        // profil_delete
        if (0 === strpos($pathinfo, '/backoffice/profil') && preg_match('#^/backoffice/profil/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_profil_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'DMC\\ProfilBundle\\Controller\\ProfilController::deleteAction',)), array('_route' => 'profil_delete'));
        }
        not_profil_delete:

        // dmc_profil_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'DMC\\ProfilBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'dmc_profil_default_index'));
        }

        // dmc_user_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'DMC\\UserBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'dmc_user_default_index'));
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }
            return array (  '_controller' => 'DMC\\DMCMainBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // backoffice
        if ($pathinfo === '/backoffice') {
            return array (  '_controller' => 'DMC\\DMCMainBundle\\Controller\\DefaultController::backOfficeAction',  '_route' => 'backoffice',);
        }

        // quisommesnous
        if ($pathinfo === '/quisommesnous') {
            return array (  '_controller' => 'DMC\\DMCMainBundle\\Controller\\DefaultController::quiSommesNousAction',  '_route' => 'quisommesnous',);
        }

        // contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'DMC\\DMCMainBundle\\Controller\\DefaultController::contactAction',  '_route' => 'contact',);
        }

        // article
        if (rtrim($pathinfo, '/') === '/backoffice/article') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'article');
            }
            return array (  '_controller' => 'DMC\\CategorieBundle\\Controller\\ArticleController::indexAction',  '_route' => 'article',);
        }

        // article_show
        if (0 === strpos($pathinfo, '/backoffice/article') && preg_match('#^/backoffice/article/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'DMC\\CategorieBundle\\Controller\\ArticleController::showAction',)), array('_route' => 'article_show'));
        }

        // article_new
        if ($pathinfo === '/backoffice/article/new') {
            return array (  '_controller' => 'DMC\\CategorieBundle\\Controller\\ArticleController::newAction',  '_route' => 'article_new',);
        }

        // article_create
        if ($pathinfo === '/backoffice/article/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_article_create;
            }
            return array (  '_controller' => 'DMC\\CategorieBundle\\Controller\\ArticleController::createAction',  '_route' => 'article_create',);
        }
        not_article_create:

        // article_edit
        if (0 === strpos($pathinfo, '/backoffice/article') && preg_match('#^/backoffice/article/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'DMC\\CategorieBundle\\Controller\\ArticleController::editAction',)), array('_route' => 'article_edit'));
        }

        // article_update
        if (0 === strpos($pathinfo, '/backoffice/article') && preg_match('#^/backoffice/article/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_article_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'DMC\\CategorieBundle\\Controller\\ArticleController::updateAction',)), array('_route' => 'article_update'));
        }
        not_article_update:

        // article_delete
        if (0 === strpos($pathinfo, '/backoffice/article') && preg_match('#^/backoffice/article/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_article_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'DMC\\CategorieBundle\\Controller\\ArticleController::deleteAction',)), array('_route' => 'article_delete'));
        }
        not_article_delete:

        // front_categorie
        if (0 === strpos($pathinfo, '/categorie') && preg_match('#^/categorie/(?P<id>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'DMC\\CategorieBundle\\Controller\\CategorieController::frontAffichageAction',)), array('_route' => 'front_categorie'));
        }

        // categorie
        if ($pathinfo === '//backoffice/categorie') {
            return array (  '_controller' => 'DMC\\CategorieBundle\\Controller\\CategorieController::indexAction',  '_route' => 'categorie',);
        }

        // categorie_show
        if (0 === strpos($pathinfo, '//backoffice/categorie') && preg_match('#^//backoffice/categorie/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'DMC\\CategorieBundle\\Controller\\CategorieController::showAction',)), array('_route' => 'categorie_show'));
        }

        // categorie_new
        if ($pathinfo === '/backoffice/categorie/new') {
            return array (  '_controller' => 'DMC\\CategorieBundle\\Controller\\CategorieController::newAction',  '_route' => 'categorie_new',);
        }

        // categorie_create
        if ($pathinfo === '/backoffice/categorie/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_categorie_create;
            }
            return array (  '_controller' => 'DMC\\CategorieBundle\\Controller\\CategorieController::createAction',  '_route' => 'categorie_create',);
        }
        not_categorie_create:

        // categorie_edit
        if (0 === strpos($pathinfo, '/backoffice/categorie') && preg_match('#^/backoffice/categorie/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'DMC\\CategorieBundle\\Controller\\CategorieController::editAction',)), array('_route' => 'categorie_edit'));
        }

        // categorie_update
        if (0 === strpos($pathinfo, '/backoffice/categorie') && preg_match('#^/backoffice/categorie/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_categorie_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'DMC\\CategorieBundle\\Controller\\CategorieController::updateAction',)), array('_route' => 'categorie_update'));
        }
        not_categorie_update:

        // categorie_delete
        if (0 === strpos($pathinfo, '/backoffice/categorie') && preg_match('#^/backoffice/categorie/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_categorie_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'DMC\\CategorieBundle\\Controller\\CategorieController::deleteAction',)), array('_route' => 'categorie_delete'));
        }
        not_categorie_delete:

        // dmc_categorie_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'DMC\\CategorieBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'dmc_categorie_default_index'));
        }

        // MainBundle_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'DMC\\DMCBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'MainBundle_homepage'));
        }

        // fos_user_security_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
        }

        // fos_user_security_check
        if ($pathinfo === '/login_check') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
        }

        // fos_user_security_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

            // fos_user_change_password
            if ($pathinfo === '/profile/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_change_password;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }

            // fos_user_registration_check_email
            if ($pathinfo === '/register/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_check_email;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            // fos_user_registration_confirm
            if (0 === strpos($pathinfo, '/register/confirm') && preg_match('#^/register/confirm/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirm;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',)), array('_route' => 'fos_user_registration_confirm'));
            }
            not_fos_user_registration_confirm:

            // fos_user_registration_confirmed
            if ($pathinfo === '/register/confirmed') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirmed;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
            }
            not_fos_user_registration_confirmed:

        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',)), array('_route' => 'fos_user_resetting_reset'));
            }
            not_fos_user_resetting_reset:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
