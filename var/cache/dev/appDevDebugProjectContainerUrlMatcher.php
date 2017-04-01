<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/js/ec9911f')) {
            // _assetic_ec9911f
            if ($pathinfo === '/js/ec9911f.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec9911f',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_ec9911f',);
            }

            if (0 === strpos($pathinfo, '/js/ec9911f_part_1_')) {
                if (0 === strpos($pathinfo, '/js/ec9911f_part_1_c')) {
                    // _assetic_ec9911f_0
                    if ($pathinfo === '/js/ec9911f_part_1_chosen.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec9911f',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_ec9911f_0',);
                    }

                    // _assetic_ec9911f_1
                    if ($pathinfo === '/js/ec9911f_part_1_custom_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec9911f',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_ec9911f_1',);
                    }

                }

                // _assetic_ec9911f_2
                if ($pathinfo === '/js/ec9911f_part_1_dropzone_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec9911f',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_ec9911f_2',);
                }

                // _assetic_ec9911f_3
                if ($pathinfo === '/js/ec9911f_part_1_infobox.min_4.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec9911f',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_ec9911f_3',);
                }

                if (0 === strpos($pathinfo, '/js/ec9911f_part_1_jquery')) {
                    // _assetic_ec9911f_4
                    if ($pathinfo === '/js/ec9911f_part_1_jquery-2.2.0.min_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec9911f',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_ec9911f_4',);
                    }

                    if (0 === strpos($pathinfo, '/js/ec9911f_part_1_jquery.')) {
                        // _assetic_ec9911f_5
                        if ($pathinfo === '/js/ec9911f_part_1_jquery.counterup.min_6.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec9911f',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_ec9911f_5',);
                        }

                        // _assetic_ec9911f_6
                        if ($pathinfo === '/js/ec9911f_part_1_jquery.jpanelmenu_7.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec9911f',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_ec9911f_6',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/js/ec9911f_part_1_ma')) {
                    // _assetic_ec9911f_7
                    if ($pathinfo === '/js/ec9911f_part_1_magnific-popup.min_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec9911f',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_ec9911f_7',);
                    }

                    // _assetic_ec9911f_8
                    if ($pathinfo === '/js/ec9911f_part_1_maps_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec9911f',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_ec9911f_8',);
                    }

                    // _assetic_ec9911f_9
                    if ($pathinfo === '/js/ec9911f_part_1_markerclusterer_10.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec9911f',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_ec9911f_9',);
                    }

                    // _assetic_ec9911f_10
                    if ($pathinfo === '/js/ec9911f_part_1_masonry.min_11.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec9911f',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_ec9911f_10',);
                    }

                }

                if (0 === strpos($pathinfo, '/js/ec9911f_part_1_o')) {
                    // _assetic_ec9911f_11
                    if ($pathinfo === '/js/ec9911f_part_1_offerride_12.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec9911f',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_ec9911f_11',);
                    }

                    // _assetic_ec9911f_12
                    if ($pathinfo === '/js/ec9911f_part_1_owl.carousel.min_13.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec9911f',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_ec9911f_12',);
                    }

                }

                // _assetic_ec9911f_13
                if ($pathinfo === '/js/ec9911f_part_1_rangeSlider_14.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec9911f',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_ec9911f_13',);
                }

                if (0 === strpos($pathinfo, '/js/ec9911f_part_1_s')) {
                    // _assetic_ec9911f_14
                    if ($pathinfo === '/js/ec9911f_part_1_slick.min_15.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec9911f',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_ec9911f_14',);
                    }

                    // _assetic_ec9911f_15
                    if ($pathinfo === '/js/ec9911f_part_1_sticky-kit.min_16.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec9911f',  'pos' => 15,  '_format' => 'js',  '_route' => '_assetic_ec9911f_15',);
                    }

                    // _assetic_ec9911f_16
                    if ($pathinfo === '/js/ec9911f_part_1_switcher_17.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec9911f',  'pos' => 16,  '_format' => 'js',  '_route' => '_assetic_ec9911f_16',);
                    }

                }

                // _assetic_ec9911f_17
                if ($pathinfo === '/js/ec9911f_part_1_tooltips.min_18.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ec9911f',  'pos' => 17,  '_format' => 'js',  '_route' => '_assetic_ec9911f_17',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/images/311886d')) {
            // _assetic_311886d
            if ($pathinfo === '/images/311886d.png') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '311886d',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_311886d',);
            }

            // _assetic_311886d_0
            if ($pathinfo === '/images/311886d_logo_1.png') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '311886d',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_311886d_0',);
            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/gestion')) {
            if (0 === strpos($pathinfo, '/gestion/home')) {
                // homeadmin
                if ($pathinfo === '/gestion/homeadmin') {
                    return array (  '_controller' => 'Pidev\\GestionTrajetsBundle\\Controller\\UserController::AdminAction',  '_route' => 'homeadmin',);
                }

                // homeuser
                if ($pathinfo === '/gestion/home') {
                    return array (  '_controller' => 'Pidev\\GestionTrajetsBundle\\Controller\\GestionTrajetController::indexAction',  '_route' => 'homeuser',);
                }

            }

            if (0 === strpos($pathinfo, '/gestion/trajets')) {
                // trajets
                if ($pathinfo === '/gestion/trajets') {
                    return array (  '_controller' => 'Pidev\\GestionTrajetsBundle\\Controller\\GestionTrajetController::ListTrajetsAction',  '_route' => 'trajets',);
                }

                // trajetsSearch
                if ($pathinfo === '/gestion/trajetsRecherche') {
                    return array (  '_controller' => 'Pidev\\GestionTrajetsBundle\\Controller\\GestionTrajetController::RechercheListTrajetsAction',  '_route' => 'trajetsSearch',);
                }

            }

            // rideoffer
            if ($pathinfo === '/gestion/offerride') {
                return array (  '_controller' => 'Pidev\\GestionTrajetsBundle\\Controller\\GestionTrajetController::ShareRideAction',  '_route' => 'rideoffer',);
            }

            // updateCities
            if ($pathinfo === '/gestion/update') {
                return array (  '_controller' => 'Pidev\\GestionTrajetsBundle\\Controller\\GestionTrajetController::updateCitiesAction',  '_route' => 'updateCities',);
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

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
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
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

                }

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
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

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

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
