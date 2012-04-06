<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'dmc_question_default_index' => true,
       'question' => true,
       'question_show' => true,
       'question_new' => true,
       'question_create' => true,
       'question_edit' => true,
       'question_update' => true,
       'question_delete' => true,
       'reponse' => true,
       'reponse_show' => true,
       'reponse_new' => true,
       'reponse_create' => true,
       'reponse_edit' => true,
       'reponse_update' => true,
       'reponse_delete' => true,
       'profil' => true,
       'profil_show' => true,
       'profil_new' => true,
       'profil_create' => true,
       'profil_edit' => true,
       'profil_update' => true,
       'profil_delete' => true,
       'dmc_profil_default_index' => true,
       'dmc_user_default_index' => true,
       'homepage' => true,
       'backoffice' => true,
       'quisommesnous' => true,
       'contact' => true,
       'front_article' => true,
       'article' => true,
       'article_show' => true,
       'article_new' => true,
       'article_create' => true,
       'article_edit' => true,
       'article_update' => true,
       'article_delete' => true,
       'front_categorie' => true,
       'categorie' => true,
       'categorie_show' => true,
       'categorie_new' => true,
       'categorie_create' => true,
       'categorie_edit' => true,
       'categorie_update' => true,
       'categorie_delete' => true,
       'dmc_categorie_default_index' => true,
       'MainBundle_homepage' => true,
       'fos_user_security_login' => true,
       'fos_user_security_check' => true,
       'fos_user_security_logout' => true,
       'fos_user_profile_show' => true,
       'fos_user_profile_edit' => true,
       'fos_user_registration_register' => true,
       'fos_user_registration_check_email' => true,
       'fos_user_registration_confirm' => true,
       'fos_user_registration_confirmed' => true,
       'fos_user_resetting_request' => true,
       'fos_user_resetting_send_email' => true,
       'fos_user_resetting_check_email' => true,
       'fos_user_resetting_reset' => true,
       'fos_user_change_password' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getdmc_question_default_indexRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'DMC\\QuestionBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hello',  ),));
    }

    private function getquestionRouteInfo()
    {
        return array(array (), array (  '_controller' => 'DMC\\QuestionBundle\\Controller\\QuestionController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/backoffice/question/',  ),));
    }

    private function getquestion_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'DMC\\QuestionBundle\\Controller\\QuestionController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/backoffice/question',  ),));
    }

    private function getquestion_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'DMC\\QuestionBundle\\Controller\\QuestionController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/backoffice/question/new',  ),));
    }

    private function getquestion_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'DMC\\QuestionBundle\\Controller\\QuestionController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/backoffice/question/create',  ),));
    }

    private function getquestion_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'DMC\\QuestionBundle\\Controller\\QuestionController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/backoffice/question',  ),));
    }

    private function getquestion_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'DMC\\QuestionBundle\\Controller\\QuestionController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/backoffice/question',  ),));
    }

    private function getquestion_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'DMC\\QuestionBundle\\Controller\\QuestionController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/backoffice/question',  ),));
    }

    private function getreponseRouteInfo()
    {
        return array(array (), array (  '_controller' => 'DMC\\QuestionBundle\\Controller\\ReponseController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/backoffice/reponse/',  ),));
    }

    private function getreponse_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'DMC\\QuestionBundle\\Controller\\ReponseController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/backoffice/reponse',  ),));
    }

    private function getreponse_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'DMC\\QuestionBundle\\Controller\\ReponseController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/backoffice/reponse/new',  ),));
    }

    private function getreponse_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'DMC\\QuestionBundle\\Controller\\ReponseController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/backoffice/reponse/create',  ),));
    }

    private function getreponse_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'DMC\\QuestionBundle\\Controller\\ReponseController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/backoffice/reponse',  ),));
    }

    private function getreponse_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'DMC\\QuestionBundle\\Controller\\ReponseController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/backoffice/reponse',  ),));
    }

    private function getreponse_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'DMC\\QuestionBundle\\Controller\\ReponseController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/backoffice/reponse',  ),));
    }

    private function getprofilRouteInfo()
    {
        return array(array (), array (  '_controller' => 'DMC\\ProfilBundle\\Controller\\ProfilController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/backoffice/profil/',  ),));
    }

    private function getprofil_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'DMC\\ProfilBundle\\Controller\\ProfilController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/backoffice/profil',  ),));
    }

    private function getprofil_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'DMC\\ProfilBundle\\Controller\\ProfilController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/backoffice/profil/new',  ),));
    }

    private function getprofil_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'DMC\\ProfilBundle\\Controller\\ProfilController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/backoffice/profil/create',  ),));
    }

    private function getprofil_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'DMC\\ProfilBundle\\Controller\\ProfilController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/backoffice/profil',  ),));
    }

    private function getprofil_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'DMC\\ProfilBundle\\Controller\\ProfilController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/backoffice/profil',  ),));
    }

    private function getprofil_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'DMC\\ProfilBundle\\Controller\\ProfilController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/backoffice/profil',  ),));
    }

    private function getdmc_profil_default_indexRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'DMC\\ProfilBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hello',  ),));
    }

    private function getdmc_user_default_indexRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'DMC\\UserBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hello',  ),));
    }

    private function gethomepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'DMC\\DMCMainBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function getbackofficeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'DMC\\DMCMainBundle\\Controller\\DefaultController::backOfficeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/backoffice',  ),));
    }

    private function getquisommesnousRouteInfo()
    {
        return array(array (), array (  '_controller' => 'DMC\\DMCMainBundle\\Controller\\DefaultController::quiSommesNousAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/quisommesnous',  ),));
    }

    private function getcontactRouteInfo()
    {
        return array(array (), array (  '_controller' => 'DMC\\DMCMainBundle\\Controller\\DefaultController::contactAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/contact',  ),));
    }

    private function getfront_articleRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'DMC\\CategorieBundle\\Controller\\ArticleController::frontAffichageAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/article',  ),));
    }

    private function getarticleRouteInfo()
    {
        return array(array (), array (  '_controller' => 'DMC\\CategorieBundle\\Controller\\ArticleController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/backoffice/article/',  ),));
    }

    private function getarticle_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'DMC\\CategorieBundle\\Controller\\ArticleController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/backoffice/article',  ),));
    }

    private function getarticle_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'DMC\\CategorieBundle\\Controller\\ArticleController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/backoffice/article/new',  ),));
    }

    private function getarticle_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'DMC\\CategorieBundle\\Controller\\ArticleController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/backoffice/article/create',  ),));
    }

    private function getarticle_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'DMC\\CategorieBundle\\Controller\\ArticleController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/backoffice/article',  ),));
    }

    private function getarticle_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'DMC\\CategorieBundle\\Controller\\ArticleController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/backoffice/article',  ),));
    }

    private function getarticle_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'DMC\\CategorieBundle\\Controller\\ArticleController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/backoffice/article',  ),));
    }

    private function getfront_categorieRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'DMC\\CategorieBundle\\Controller\\CategorieController::frontAffichageAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/categorie',  ),));
    }

    private function getcategorieRouteInfo()
    {
        return array(array (), array (  '_controller' => 'DMC\\CategorieBundle\\Controller\\CategorieController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '//backoffice/categorie',  ),));
    }

    private function getcategorie_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'DMC\\CategorieBundle\\Controller\\CategorieController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '//backoffice/categorie',  ),));
    }

    private function getcategorie_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'DMC\\CategorieBundle\\Controller\\CategorieController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/backoffice/categorie/new',  ),));
    }

    private function getcategorie_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'DMC\\CategorieBundle\\Controller\\CategorieController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/backoffice/categorie/create',  ),));
    }

    private function getcategorie_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'DMC\\CategorieBundle\\Controller\\CategorieController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/backoffice/categorie',  ),));
    }

    private function getcategorie_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'DMC\\CategorieBundle\\Controller\\CategorieController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/backoffice/categorie',  ),));
    }

    private function getcategorie_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'DMC\\CategorieBundle\\Controller\\CategorieController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/backoffice/categorie',  ),));
    }

    private function getdmc_categorie_default_indexRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'DMC\\CategorieBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hello',  ),));
    }

    private function getMainBundle_homepageRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'DMC\\DMCBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hello',  ),));
    }

    private function getfos_user_security_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login',  ),));
    }

    private function getfos_user_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login_check',  ),));
    }

    private function getfos_user_security_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/logout',  ),));
    }

    private function getfos_user_profile_showRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/profile/',  ),));
    }

    private function getfos_user_profile_editRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/profile/edit',  ),));
    }

    private function getfos_user_registration_registerRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/register/',  ),));
    }

    private function getfos_user_registration_check_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/register/check-email',  ),));
    }

    private function getfos_user_registration_confirmRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/register/confirm',  ),));
    }

    private function getfos_user_registration_confirmedRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/register/confirmed',  ),));
    }

    private function getfos_user_resetting_requestRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/request',  ),));
    }

    private function getfos_user_resetting_send_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/send-email',  ),));
    }

    private function getfos_user_resetting_check_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/check-email',  ),));
    }

    private function getfos_user_resetting_resetRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/resetting/reset',  ),));
    }

    private function getfos_user_change_passwordRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'text',    1 => '/profile/change-password',  ),));
    }
}
