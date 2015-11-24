<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'general_widget_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'GeneralWidgetBundle:Default:index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'general_widget_profil_edit' => array (  0 =>   array (    0 => 'home_url',  ),  1 =>   array (    '_controller' => 'General\\WidgetBundle\\Controller\\WidgetController::login_editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'home_url',    ),    1 =>     array (      0 => 'text',      1 => '/Profil_edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dbormoldcsi_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'DBORM\\OLDCSIBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dbormcsi_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'DBORM\\CSIBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rmcargo_dashboard_rh_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'RMCARGO\\DashboardRHBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/home',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rmcargo_dashboard_chief_sector_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'RMCARGO\\DashboardChiefSectorBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'general_login_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'General\\LoginBundle\\Controller\\LoginController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'general_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'General\\LoginBundle\\Controller\\LoginController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rmcargo_dashboard_admin_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'RMCARGO\\DashboardAdminBundle\\Controller\\AdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Admin_Dashboard',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rmcargo_dashboard_db_purge_stat' => array (  0 =>   array (    0 => 'status',  ),  1 =>   array (    '_controller' => 'RMCARGO\\DashboardAdminBundle\\Controller\\AdminController::purge_statusAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'status',    ),    1 =>     array (      0 => 'text',      1 => '/requested_purge_b152ddb696c856ae242230edc26e8b4a3359eb246c_stat',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rmcargo_dashboard_admin_data_details' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'RMCARGO\\DashboardAdminBundle\\Controller\\AdminController::data_detailsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin_data_details',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rmcargo_dashboard_admin_purge_monitoring' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'RMCARGO\\DashboardAdminBundle\\Controller\\AdminController::clean_monitoringAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/purge_monitoring',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rmcargo_dashboard_admin_robot_pc_monitoring' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'RMCARGO\\DashboardAdminBundle\\Controller\\AdminController::robot_pc_monitoringAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/robot_pc_monitoring',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rmcargo_dashboard_admin_robot_pc_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'RMCARGO\\DashboardAdminBundle\\Controller\\AdminController::delete_pcAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/robot_pc_monitoring_delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rmcargo_dashboard_admin_users_monitoring' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'RMCARGO\\DashboardAdminBundle\\Controller\\AdminController::users_monitoringAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user_monitoring',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rmcargo_dashboard_admin_user_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'RMCARGO\\DashboardAdminBundle\\Controller\\AdminController::delete_userAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/user_delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rmcargo_dashboard_admin_user_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'RMCARGO\\DashboardAdminBundle\\Controller\\AdminController::user_editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/user_edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rmcargo_dashboard_admin_users_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'RMCARGO\\DashboardAdminBundle\\Controller\\AdminController::users_searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/users_search/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rmcargo_dashboard_admin_group_monitoring' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'RMCARGO\\DashboardAdminBundle\\Controller\\AdminController::group_monitoringAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/group_monitoring/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rmcargo_dashboard_admin_group_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'RMCARGO\\DashboardAdminBundle\\Controller\\AdminController::delete_groupAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/group_delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rmcargo_dashboard_admin_prio_monitoring' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'RMCARGO\\DashboardAdminBundle\\Controller\\AdminController::prio_monitoringAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/prio_monitoring',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rmcargo_dashboard_fa_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'RMCARGO\\DashboardFABundle\\Controller\\HomeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/FA_Dashboard',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hello_the_world' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'RMCARGO\\DashboardFABundle\\Controller\\BacklogController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/backlog',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
