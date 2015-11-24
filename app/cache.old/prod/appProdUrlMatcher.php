<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // general_widget_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'general_widget_homepage')), array (  '_controller' => 'GeneralWidgetBundle:Default:index',));
        }

        // general_widget_profil_edit
        if (0 === strpos($pathinfo, '/Profil_edit') && preg_match('#^/Profil_edit/(?P<home_url>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'general_widget_profil_edit')), array (  '_controller' => 'General\\WidgetBundle\\Controller\\WidgetController::login_editAction',));
        }

        if (0 === strpos($pathinfo, '/h')) {
            if (0 === strpos($pathinfo, '/hello')) {
                // dbormoldcsi_homepage
                if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dbormoldcsi_homepage')), array (  '_controller' => 'DBORM\\OLDCSIBundle\\Controller\\DefaultController::indexAction',));
                }

                // dbormcsi_homepage
                if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dbormcsi_homepage')), array (  '_controller' => 'DBORM\\CSIBundle\\Controller\\DefaultController::indexAction',));
                }

            }

            // rmcargo_dashboard_rh_homepage
            if ($pathinfo === '/home') {
                return array (  '_controller' => 'RMCARGO\\DashboardRHBundle\\Controller\\DefaultController::indexAction',  '_route' => 'rmcargo_dashboard_rh_homepage',);
            }

            // rmcargo_dashboard_chief_sector_homepage
            if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rmcargo_dashboard_chief_sector_homepage')), array (  '_controller' => 'RMCARGO\\DashboardChiefSectorBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        // general_login_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'general_login_homepage');
            }

            return array (  '_controller' => 'General\\LoginBundle\\Controller\\LoginController::indexAction',  '_route' => 'general_login_homepage',);
        }

        // general_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'General\\LoginBundle\\Controller\\LoginController::logoutAction',  '_route' => 'general_logout',);
        }

        // rmcargo_dashboard_admin_homepage
        if ($pathinfo === '/Admin_Dashboard') {
            return array (  '_controller' => 'RMCARGO\\DashboardAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'rmcargo_dashboard_admin_homepage',);
        }

        // rmcargo_dashboard_db_purge_stat
        if (0 === strpos($pathinfo, '/requested_purge_b152ddb696c856ae242230edc26e8b4a3359eb246c_stat') && preg_match('#^/requested_purge_b152ddb696c856ae242230edc26e8b4a3359eb246c_stat/(?P<status>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'rmcargo_dashboard_db_purge_stat')), array (  '_controller' => 'RMCARGO\\DashboardAdminBundle\\Controller\\AdminController::purge_statusAction',));
        }

        // rmcargo_dashboard_admin_data_details
        if ($pathinfo === '/admin_data_details') {
            return array (  '_controller' => 'RMCARGO\\DashboardAdminBundle\\Controller\\AdminController::data_detailsAction',  '_route' => 'rmcargo_dashboard_admin_data_details',);
        }

        // rmcargo_dashboard_admin_purge_monitoring
        if ($pathinfo === '/purge_monitoring') {
            return array (  '_controller' => 'RMCARGO\\DashboardAdminBundle\\Controller\\AdminController::clean_monitoringAction',  '_route' => 'rmcargo_dashboard_admin_purge_monitoring',);
        }

        if (0 === strpos($pathinfo, '/robot_pc_monitoring')) {
            // rmcargo_dashboard_admin_robot_pc_monitoring
            if ($pathinfo === '/robot_pc_monitoring') {
                return array (  '_controller' => 'RMCARGO\\DashboardAdminBundle\\Controller\\AdminController::robot_pc_monitoringAction',  '_route' => 'rmcargo_dashboard_admin_robot_pc_monitoring',);
            }

            // rmcargo_dashboard_admin_robot_pc_delete
            if (0 === strpos($pathinfo, '/robot_pc_monitoring_delete') && preg_match('#^/robot_pc_monitoring_delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rmcargo_dashboard_admin_robot_pc_delete')), array (  '_controller' => 'RMCARGO\\DashboardAdminBundle\\Controller\\AdminController::delete_pcAction',));
            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            if (0 === strpos($pathinfo, '/user_')) {
                // rmcargo_dashboard_admin_users_monitoring
                if ($pathinfo === '/user_monitoring') {
                    return array (  '_controller' => 'RMCARGO\\DashboardAdminBundle\\Controller\\AdminController::users_monitoringAction',  '_route' => 'rmcargo_dashboard_admin_users_monitoring',);
                }

                // rmcargo_dashboard_admin_user_delete
                if (0 === strpos($pathinfo, '/user_delete') && preg_match('#^/user_delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rmcargo_dashboard_admin_user_delete')), array (  '_controller' => 'RMCARGO\\DashboardAdminBundle\\Controller\\AdminController::delete_userAction',));
                }

                // rmcargo_dashboard_admin_user_edit
                if (0 === strpos($pathinfo, '/user_edit') && preg_match('#^/user_edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rmcargo_dashboard_admin_user_edit')), array (  '_controller' => 'RMCARGO\\DashboardAdminBundle\\Controller\\AdminController::user_editAction',));
                }

            }

            // rmcargo_dashboard_admin_users_search
            if (rtrim($pathinfo, '/') === '/users_search') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'rmcargo_dashboard_admin_users_search');
                }

                return array (  '_controller' => 'RMCARGO\\DashboardAdminBundle\\Controller\\AdminController::users_searchAction',  '_route' => 'rmcargo_dashboard_admin_users_search',);
            }

        }

        if (0 === strpos($pathinfo, '/group_')) {
            // rmcargo_dashboard_admin_group_monitoring
            if (rtrim($pathinfo, '/') === '/group_monitoring') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'rmcargo_dashboard_admin_group_monitoring');
                }

                return array (  '_controller' => 'RMCARGO\\DashboardAdminBundle\\Controller\\AdminController::group_monitoringAction',  '_route' => 'rmcargo_dashboard_admin_group_monitoring',);
            }

            // rmcargo_dashboard_admin_group_delete
            if (0 === strpos($pathinfo, '/group_delete') && preg_match('#^/group_delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rmcargo_dashboard_admin_group_delete')), array (  '_controller' => 'RMCARGO\\DashboardAdminBundle\\Controller\\AdminController::delete_groupAction',));
            }

        }

        // rmcargo_dashboard_admin_prio_monitoring
        if ($pathinfo === '/prio_monitoring') {
            return array (  '_controller' => 'RMCARGO\\DashboardAdminBundle\\Controller\\AdminController::prio_monitoringAction',  '_route' => 'rmcargo_dashboard_admin_prio_monitoring',);
        }

        // rmcargo_dashboard_fa_homepage
        if ($pathinfo === '/FA_Dashboard') {
            return array (  '_controller' => 'RMCARGO\\DashboardFABundle\\Controller\\HomeController::indexAction',  '_route' => 'rmcargo_dashboard_fa_homepage',);
        }

        // hello_the_world
        if ($pathinfo === '/backlog') {
            return array (  '_controller' => 'RMCARGO\\DashboardFABundle\\Controller\\BacklogController::indexAction',  '_route' => 'hello_the_world',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
