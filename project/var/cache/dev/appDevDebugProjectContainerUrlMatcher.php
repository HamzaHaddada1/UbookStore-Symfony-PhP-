<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/frmMobil')) {
            // forum_mobil_homepage
            if ('/frmMobil' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'ForumMobilBundle\\Controller\\DefaultController::indexAction',  '_route' => 'forum_mobil_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_forum_mobil_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'forum_mobil_homepage'));
                }

                return $ret;
            }
            not_forum_mobil_homepage:

            // create_topic
            if ('/frmMobil/newTopic' === $pathinfo) {
                return array (  '_controller' => 'ForumMobilBundle\\Controller\\TopicController::newTopicAction',  '_route' => 'create_topic',);
            }

            if (0 === strpos($pathinfo, '/frmMobil/s')) {
                // show_topic
                if ('/frmMobil/showTopic' === $pathinfo) {
                    return array (  '_controller' => 'ForumMobilBundle\\Controller\\TopicController::showTopicAction',  '_route' => 'show_topic',);
                }

                // show_cmmt_topic
                if (0 === strpos($pathinfo, '/frmMobil/showComments') && preg_match('#^/frmMobil/showComments/(?P<idtopic>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_cmmt_topic')), array (  '_controller' => 'ForumMobilBundle\\Controller\\TopicController::showTopicCmmtAction',));
                }

                // siganl_cmmt
                if ('/frmMobil/siganlcmmt' === $pathinfo) {
                    return array (  '_controller' => 'ForumMobilBundle\\Controller\\TopicController::siganlcmmtAction',  '_route' => 'siganl_cmmt',);
                }

            }

            // delete_topic
            if (0 === strpos($pathinfo, '/frmMobil/deleteTopic') && preg_match('#^/frmMobil/deleteTopic/(?P<idtopic>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_topic')), array (  '_controller' => 'ForumMobilBundle\\Controller\\TopicController::deleteTopicAction',));
            }

            // delete_cmmt
            if (0 === strpos($pathinfo, '/frmMobil/deletecmmt') && preg_match('#^/frmMobil/deletecmmt/(?P<idcmmt>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_cmmt')), array (  '_controller' => 'ForumMobilBundle\\Controller\\TopicController::deletecmmtAction',));
            }

            // update_topic
            if ('/frmMobil/UpdateTopic' === $pathinfo) {
                return array (  '_controller' => 'ForumMobilBundle\\Controller\\TopicController::UpdateTopicAction',  '_route' => 'update_topic',);
            }

            // like_cmmt
            if ('/frmMobil/likecmmt' === $pathinfo) {
                return array (  '_controller' => 'ForumMobilBundle\\Controller\\TopicController::likecmmtAction',  '_route' => 'like_cmmt',);
            }

            // update_cmmt
            if ('/frmMobil/updtcmmt' === $pathinfo) {
                return array (  '_controller' => 'ForumMobilBundle\\Controller\\TopicController::updatecmmtAction',  '_route' => 'update_cmmt',);
            }

            // add_cmmt
            if (preg_match('#^/frmMobil/(?P<idt>[^/]++)/addCmmt$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_cmmt')), array (  '_controller' => 'ForumMobilBundle\\Controller\\TopicController::addCmmtAction',));
            }

            // get_all_cmmts
            if ('/frmMobil/allCmmt' === $pathinfo) {
                return array (  '_controller' => 'ForumMobilBundle\\Controller\\TopicController::getAllCmmtAction',  '_route' => 'get_all_cmmts',);
            }

            // get_all_usrs
            if ('/frmMobil/allusr' === $pathinfo) {
                return array (  '_controller' => 'ForumMobilBundle\\Controller\\TopicController::getAllUsersAction',  '_route' => 'get_all_usrs',);
            }

        }

        // forum_homepage
        if ('/forum' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'ForumBundle\\Controller\\DefaultController::indexAction',  '_route' => 'forum_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_forum_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'forum_homepage'));
            }

            return $ret;
        }
        not_forum_homepage:

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/adminforum')) {
                // comments_index
                if ('/adminforum' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AdminForumBundle\\Controller\\CommentsController::indexAction',  '_route' => 'comments_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_comments_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'comments_index'));
                    }

                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_comments_index;
                    }

                    return $ret;
                }
                not_comments_index:

                // comments_show
                if (preg_match('#^/adminforum/(?P<idcmmt>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'comments_show')), array (  '_controller' => 'AdminForumBundle\\Controller\\CommentsController::showAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_comments_show;
                    }

                    return $ret;
                }
                not_comments_show:

                // comments_new
                if ('/adminforum/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'AdminForumBundle\\Controller\\CommentsController::newAction',  '_route' => 'comments_new',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_comments_new;
                    }

                    return $ret;
                }
                not_comments_new:

                // comments_edit
                if (preg_match('#^/adminforum/(?P<idcmmt>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'comments_edit')), array (  '_controller' => 'AdminForumBundle\\Controller\\CommentsController::editAction',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_comments_edit;
                    }

                    return $ret;
                }
                not_comments_edit:

                // comments_delete
                if (preg_match('#^/adminforum/(?P<idcmmt>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'comments_delete')), array (  '_controller' => 'AdminForumBundle\\Controller\\CommentsController::deleteAction',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_comments_delete;
                    }

                    return $ret;
                }
                not_comments_delete:

                // signal_delete_index
                if ('/adminforum/deleteFromIndex' === $pathinfo) {
                    return array (  '_controller' => 'AdminForumBundle\\Controller\\CommentsController::deleteSignalFromIndexAction',  '_route' => 'signal_delete_index',);
                }

            }

            elseif (0 === strpos($pathinfo, '/auteur')) {
                // auteur_index
                if ('/auteur' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AuteurBundle\\Controller\\AuteurController::indexAction',  '_route' => 'auteur_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_auteur_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'auteur_index'));
                    }

                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_auteur_index;
                    }

                    return $ret;
                }
                not_auteur_index:

                // auteur_show
                if (preg_match('#^/auteur/(?P<idautr>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'auteur_show')), array (  '_controller' => 'AuteurBundle\\Controller\\AuteurController::showAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_auteur_show;
                    }

                    return $ret;
                }
                not_auteur_show:

                // auteur_new
                if ('/auteur/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'AuteurBundle\\Controller\\AuteurController::newAction',  '_route' => 'auteur_new',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_auteur_new;
                    }

                    return $ret;
                }
                not_auteur_new:

                // auteur_edit
                if (preg_match('#^/auteur/(?P<idautr>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'auteur_edit')), array (  '_controller' => 'AuteurBundle\\Controller\\AuteurController::editAction',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_auteur_edit;
                    }

                    return $ret;
                }
                not_auteur_edit:

                // auteur_delete
                if (preg_match('#^/auteur/(?P<idautr>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'auteur_delete')), array (  '_controller' => 'AuteurBundle\\Controller\\AuteurController::deleteAction',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_auteur_delete;
                    }

                    return $ret;
                }
                not_auteur_delete:

                // auteur_delete_index
                if (preg_match('#^/auteur/(?P<idautr>[^/]++)/deleteFromIndex$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'auteur_delete_index')), array (  '_controller' => 'AuteurBundle\\Controller\\AuteurController::deleteFromIndexAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/ac')) {
                // achat_homepage
                if ('/achat' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AchatBundle\\Controller\\DefaultController::indexAction',  '_route' => 'achat_homepage',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_achat_homepage;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'achat_homepage'));
                    }

                    return $ret;
                }
                not_achat_homepage:

                if (0 === strpos($pathinfo, '/achat/afficher')) {
                    // afficher_pdf
                    if (0 === strpos($pathinfo, '/achat/afficherpdf') && preg_match('#^/achat/afficherpdf/(?P<slug>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'afficher_pdf')), array (  '_controller' => 'AchatBundle\\Controller\\DefaultController::afficherpdfAction',));
                    }

                    // afficher_achete
                    if ('/achat/afficher' === $pathinfo) {
                        return array (  '_controller' => 'AchatBundle\\Controller\\DefaultController::afficherAction',  '_route' => 'afficher_achete',);
                    }

                }

                // accueil_homepage
                if ('/accueil' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AccueilBundle\\Controller\\DefaultController::indexAction',  '_route' => 'accueil_homepage',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_accueil_homepage;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'accueil_homepage'));
                    }

                    return $ret;
                }
                not_accueil_homepage:

            }

        }

        elseif (0 === strpos($pathinfo, '/mlk')) {
            // comments1_index
            if ('/mlk' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'MlkStatBundle\\Controller\\CommentsController::indexAction',  '_route' => 'comments1_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_comments1_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'comments1_index'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_comments1_index;
                }

                return $ret;
            }
            not_comments1_index:

            // comments1_show
            if (preg_match('#^/mlk/(?P<idcmmt>[^/]++)/show$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'comments1_show')), array (  '_controller' => 'MlkStatBundle\\Controller\\CommentsController::showAction',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_comments1_show;
                }

                return $ret;
            }
            not_comments1_show:

            // comments1_new
            if ('/mlk/new' === $pathinfo) {
                $ret = array (  '_controller' => 'MlkStatBundle\\Controller\\CommentsController::newAction',  '_route' => 'comments1_new',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_comments1_new;
                }

                return $ret;
            }
            not_comments1_new:

            // comments1_edit
            if (preg_match('#^/mlk/(?P<idcmmt>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'comments1_edit')), array (  '_controller' => 'MlkStatBundle\\Controller\\CommentsController::editAction',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_comments1_edit;
                }

                return $ret;
            }
            not_comments1_edit:

            // comments1_delete
            if (preg_match('#^/mlk/(?P<idcmmt>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'comments1_delete')), array (  '_controller' => 'MlkStatBundle\\Controller\\CommentsController::deleteAction',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_comments1_delete;
                }

                return $ret;
            }
            not_comments1_delete:

        }

        elseif (0 === strpos($pathinfo, '/maisonedition')) {
            // maisonedition_index
            if ('/maisonedition' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'MaisonEditionBundle\\Controller\\MaisoneditionController::indexAction',  '_route' => 'maisonedition_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_maisonedition_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'maisonedition_index'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_maisonedition_index;
                }

                return $ret;
            }
            not_maisonedition_index:

            // maisonedition_show
            if (preg_match('#^/maisonedition/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'maisonedition_show')), array (  '_controller' => 'MaisonEditionBundle\\Controller\\MaisoneditionController::showAction',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_maisonedition_show;
                }

                return $ret;
            }
            not_maisonedition_show:

            // maisonedition_new
            if ('/maisonedition/new' === $pathinfo) {
                $ret = array (  '_controller' => 'MaisonEditionBundle\\Controller\\MaisoneditionController::newAction',  '_route' => 'maisonedition_new',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_maisonedition_new;
                }

                return $ret;
            }
            not_maisonedition_new:

            // maisonedition_edit
            if (preg_match('#^/maisonedition/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'maisonedition_edit')), array (  '_controller' => 'MaisonEditionBundle\\Controller\\MaisoneditionController::editAction',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_maisonedition_edit;
                }

                return $ret;
            }
            not_maisonedition_edit:

            // maisonedition_delete
            if (preg_match('#^/maisonedition/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'maisonedition_delete')), array (  '_controller' => 'MaisonEditionBundle\\Controller\\MaisoneditionController::deleteAction',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_maisonedition_delete;
                }

                return $ret;
            }
            not_maisonedition_delete:

            // maisonedition_supprimer
            if (0 === strpos($pathinfo, '/maisonedition/supprimer') && preg_match('#^/maisonedition/supprimer/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'maisonedition_supprimer')), array (  '_controller' => 'MaisonEditionBundle\\Controller\\MaisoneditionController::supprimerAction',));
            }

        }

        // admin_homepage
        if ('/home' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_admin_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_homepage'));
            }

            return $ret;
        }
        not_admin_homepage:

        if (0 === strpos($pathinfo, '/livre')) {
            // livres_index
            if ('/livre' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'LivreBundle\\Controller\\LivresController::indexAction',  '_route' => 'livres_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_livres_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'livres_index'));
                }

                if (!in_array($canonicalMethod, array('GET', 'POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'DELETE'));
                    goto not_livres_index;
                }

                return $ret;
            }
            not_livres_index:

            // livres_show
            if (preg_match('#^/livre/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'livres_show')), array (  '_controller' => 'LivreBundle\\Controller\\LivresController::showAction',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_livres_show;
                }

                return $ret;
            }
            not_livres_show:

            // livres_new
            if ('/livre/new' === $pathinfo) {
                $ret = array (  '_controller' => 'LivreBundle\\Controller\\LivresController::newAction',  '_route' => 'livres_new',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_livres_new;
                }

                return $ret;
            }
            not_livres_new:

            // livres_edit
            if (preg_match('#^/livre/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'livres_edit')), array (  '_controller' => 'LivreBundle\\Controller\\LivresController::editAction',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_livres_edit;
                }

                return $ret;
            }
            not_livres_edit:

            // livres_delete
            if (preg_match('#^/livre/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'livres_delete')), array (  '_controller' => 'LivreBundle\\Controller\\LivresController::deleteAction',));
                if (!in_array($canonicalMethod, array('GET', 'POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'DELETE'));
                    goto not_livres_delete;
                }

                return $ret;
            }
            not_livres_delete:

            // livres_shou
            if (preg_match('#^/livre/(?P<id>[^/]++)/shou$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'livres_shou')), array (  '_controller' => 'LivreBundle\\Controller\\LivresController::shouAction',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_livres_shou;
                }

                return $ret;
            }
            not_livres_shou:

            // all
            if ('/livre/all' === $pathinfo) {
                return array (  '_controller' => 'LivreBundle\\Controller\\LivresController::allAction',  '_route' => 'all',);
            }

            // neww
            if ('/livre/neww' === $pathinfo) {
                return array (  '_controller' => 'LivreBundle\\Controller\\LivresController::newwAction',  '_route' => 'neww',);
            }

            // find
            if (0 === strpos($pathinfo, '/livre/find') && preg_match('#^/livre/find/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'find')), array (  '_controller' => 'LivreBundle\\Controller\\LivresController::findAction',));
            }

            // supp
            if (0 === strpos($pathinfo, '/livre/supp') && preg_match('#^/livre/supp/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supp')), array (  '_controller' => 'LivreBundle\\Controller\\LivresController::suppAction',));
            }

            // update
            if ('/livre/update' === $pathinfo) {
                return array (  '_controller' => 'LivreBundle\\Controller\\LivresController::updateAction',  '_route' => 'update',);
            }

        }

        elseif (0 === strpos($pathinfo, '/lo')) {
            if (0 === strpos($pathinfo, '/locaux')) {
                // locaux_index
                if ('/locaux' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'LocauxBundle\\Controller\\LocauxController::indexAction',  '_route' => 'locaux_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_locaux_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'locaux_index'));
                    }

                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_locaux_index;
                    }

                    return $ret;
                }
                not_locaux_index:

                // locaux_show
                if (preg_match('#^/locaux/(?P<idloc>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'locaux_show')), array (  '_controller' => 'LocauxBundle\\Controller\\LocauxController::showAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_locaux_show;
                    }

                    return $ret;
                }
                not_locaux_show:

                // locaux_new
                if ('/locaux/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'LocauxBundle\\Controller\\LocauxController::newAction',  '_route' => 'locaux_new',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_locaux_new;
                    }

                    return $ret;
                }
                not_locaux_new:

                // locaux_edit
                if (preg_match('#^/locaux/(?P<idloc>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'locaux_edit')), array (  '_controller' => 'LocauxBundle\\Controller\\LocauxController::editAction',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_locaux_edit;
                    }

                    return $ret;
                }
                not_locaux_edit:

                // locaux_delete
                if (preg_match('#^/locaux/(?P<idloc>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'locaux_delete')), array (  '_controller' => 'LocauxBundle\\Controller\\LocauxController::deleteAction',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_locaux_delete;
                    }

                    return $ret;
                }
                not_locaux_delete:

                // Locaux_map
                if ('/locaux/map' === $pathinfo) {
                    return array (  '_controller' => 'LocauxBundle\\Controller\\LocauxController::GmapAction',  '_route' => 'Locaux_map',);
                }

            }

            elseif (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ('/login' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_security_login;
                    }

                    return $ret;
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ('/login_check' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_fos_user_security_check;
                    }

                    return $ret;
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ('/logout' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_logout;
                }

                return $ret;
            }
            not_fos_user_security_logout:

        }

        // user_homepage
        if ('/user' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'userBundle\\Controller\\DefaultController::indexAction',  '_route' => 'user_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_user_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'user_homepage'));
            }

            return $ret;
        }
        not_user_homepage:

        if (0 === strpos($pathinfo, '/p')) {
            // promotions_client_homepage
            if ('/promotions' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'PromotionsBundle\\Controller\\DefaultController::indexAction',  '_route' => 'promotions_client_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_promotions_client_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'promotions_client_homepage'));
                }

                return $ret;
            }
            not_promotions_client_homepage:

            if (0 === strpos($pathinfo, '/profile')) {
                // fos_user_profile_show
                if ('/profile' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_fos_user_profile_show;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                    }

                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_fos_user_profile_show;
                    }

                    return $ret;
                }
                not_fos_user_profile_show:

                // fos_user_profile_edit
                if ('/profile/edit' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_profile_edit;
                    }

                    return $ret;
                }
                not_fos_user_profile_edit:

                // fos_user_change_password
                if ('/profile/change-password' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_change_password;
                    }

                    return $ret;
                }
                not_fos_user_change_password:

            }

            elseif (0 === strpos($pathinfo, '/participant')) {
                if (0 === strpos($pathinfo, '/participant/participant')) {
                    // participant_index
                    if ('/participant/participant' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'ParticipantBundle:Participant:index',  '_route' => 'participant_index',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_participant_index;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'participant_index'));
                        }

                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_participant_index;
                        }

                        return $ret;
                    }
                    not_participant_index:

                    // participant_show
                    if (preg_match('#^/participant/participant/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'participant_show')), array (  '_controller' => 'ParticipantBundle:Participant:show',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_participant_show;
                        }

                        return $ret;
                    }
                    not_participant_show:

                }

                // participant_homepage
                if ('/participant' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'ParticipantBundle\\Controller\\EventController::affichageAction',  '_route' => 'participant_homepage',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_participant_homepage;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'participant_homepage'));
                    }

                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_participant_homepage;
                    }

                    return $ret;
                }
                not_participant_homepage:

                // evenement_show
                if (preg_match('#^/participant/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'evenement_show')), array (  '_controller' => 'ParticipantBundle\\Controller\\EventController::showAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_evenement_show;
                    }

                    return $ret;
                }
                not_evenement_show:

                if (0 === strpos($pathinfo, '/participant/participation')) {
                    // participant_participer
                    if ('/participant/participation' === $pathinfo) {
                        return array (  '_controller' => 'ParticipantBundle\\Controller\\EventController::participerAction',  '_route' => 'participant_participer',);
                    }

                    // participant_participermobile
                    if ('/participant/participationmobile' === $pathinfo) {
                        return array (  '_controller' => 'ParticipantBundle\\Controller\\EventController::participermobileAction',  '_route' => 'participant_participermobile',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/participant/annuler')) {
                    // participant_annuler
                    if (preg_match('#^/participant/annuler/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'participant_annuler')), array (  '_controller' => 'ParticipantBundle\\Controller\\EventController::supprimerAction',));
                    }

                    // participant_annulermobile
                    if (0 === strpos($pathinfo, '/participant/annulermobile') && preg_match('#^/participant/annulermobile/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'participant_annulermobile')), array (  '_controller' => 'ParticipantBundle\\Controller\\EventController::annulermobileAction',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/participant/search')) {
                    // search1
                    if ('/participant/search1' === $pathinfo) {
                        $ret = array (  '_controller' => 'ParticipantBundle\\Controller\\EventController::affAction',  '_route' => 'search1',);
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_search1;
                        }

                        return $ret;
                    }
                    not_search1:

                    // search
                    if ('/participant/search' === $pathinfo) {
                        return array (  '_controller' => 'ParticipantBundle\\Controller\\EventController::searchAction',  '_route' => 'search',);
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/panier')) {
                // panier_homepage
                if ('/panier' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'PanierBundle\\Controller\\DefaultController::indexAction',  '_route' => 'panier_homepage',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_panier_homepage;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'panier_homepage'));
                    }

                    return $ret;
                }
                not_panier_homepage:

                if (0 === strpos($pathinfo, '/panier/supprimer')) {
                    // panier_supprimer
                    if (preg_match('#^/panier/supprimer/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'panier_supprimer')), array (  '_controller' => 'PanierBundle\\Controller\\DefaultController::supprimerAction',));
                    }

                    // panier_supprimerLigneCommande
                    if (0 === strpos($pathinfo, '/panier/supprimerligne') && preg_match('#^/panier/supprimerligne/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'panier_supprimerLigneCommande')), array (  '_controller' => 'PanierBundle\\Controller\\DefaultController::deleteLigneCommandeAction',));
                    }

                    // panier_supprimerPlusDeux
                    if ('/panier/supprimerPlusQueDeuxJours' === $pathinfo) {
                        return array (  '_controller' => 'PanierBundle\\Controller\\DefaultController::supprimerLigneCommandePlusDeDeuxJoursAction',  '_route' => 'panier_supprimerPlusDeux',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/panier/a')) {
                    // panier_ajouter
                    if ('/panier/ajouter' === $pathinfo) {
                        return array (  '_controller' => 'PanierBundle\\Controller\\DefaultController::ajouterAction',  '_route' => 'panier_ajouter',);
                    }

                    // panier_achat
                    if ('/panier/achat' === $pathinfo) {
                        return array (  '_controller' => 'PanierBundle\\Controller\\DefaultController::achatAction',  '_route' => 'panier_achat',);
                    }

                    // panier_all
                    if ('/panier/all' === $pathinfo) {
                        return array (  '_controller' => 'PanierBundle\\Controller\\DefaultController::allAction',  '_route' => 'panier_all',);
                    }

                    if (0 === strpos($pathinfo, '/panier/allBooks')) {
                        // panier_allbooks
                        if ('/panier/allBooks' === $pathinfo) {
                            return array (  '_controller' => 'PanierBundle\\Controller\\DefaultController::allBooksAction',  '_route' => 'panier_allbooks',);
                        }

                        // panier_allbooksimages
                        if ('/panier/allBooksImages' === $pathinfo) {
                            return array (  '_controller' => 'PanierBundle\\Controller\\DefaultController::allBooksImagesAction',  '_route' => 'panier_allbooksimages',);
                        }

                    }

                }

                elseif (0 === strpos($pathinfo, '/panier/modifier')) {
                    // panier_modifier
                    if ('/panier/modifier' === $pathinfo) {
                        return array (  '_controller' => 'PanierBundle\\Controller\\DefaultController::modifierAction',  '_route' => 'panier_modifier',);
                    }

                    // panier_modifierLigneCommande
                    if ('/panier/modifierl' === $pathinfo) {
                        return array (  '_controller' => 'PanierBundle\\Controller\\DefaultController::modifierLigneCommandeAction',  '_route' => 'panier_modifierLigneCommande',);
                    }

                }

                // panier_getbooknames
                if ('/panier/getBookNames' === $pathinfo) {
                    return array (  '_controller' => 'PanierBundle\\Controller\\DefaultController::getBookNamesAction',  '_route' => 'panier_getbooknames',);
                }

                // panier_new
                if ('/panier/new' === $pathinfo) {
                    return array (  '_controller' => 'PanierBundle\\Controller\\DefaultController::addLigneCommandeAction',  '_route' => 'panier_new',);
                }

                // panier_findbook
                if (0 === strpos($pathinfo, '/panier/findbook') && preg_match('#^/panier/findbook/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'panier_findbook')), array (  '_controller' => 'PanierBundle\\Controller\\DefaultController::findBookAction',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/e')) {
            if (0 === strpos($pathinfo, '/emprunt')) {
                if (0 === strpos($pathinfo, '/emprunt/emprunt')) {
                    // emprunt_index
                    if ('/emprunt/emprunt' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'EmpruntBundle\\Controller\\EmpruntController::indexAction',  '_route' => 'emprunt_index',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_emprunt_index;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'emprunt_index'));
                        }

                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_emprunt_index;
                        }

                        return $ret;
                    }
                    not_emprunt_index:

                    // emprunt_show
                    if (preg_match('#^/emprunt/emprunt/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'emprunt_show')), array (  '_controller' => 'EmpruntBundle\\Controller\\EmpruntController::showAction',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_emprunt_show;
                        }

                        return $ret;
                    }
                    not_emprunt_show:

                    // emprunt_new
                    if ('/emprunt/emprunt/new' === $pathinfo) {
                        $ret = array (  '_controller' => 'EmpruntBundle\\Controller\\EmpruntController::newAction',  '_route' => 'emprunt_new',);
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_emprunt_new;
                        }

                        return $ret;
                    }
                    not_emprunt_new:

                    // emprunt_edit
                    if (preg_match('#^/emprunt/emprunt/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'emprunt_edit')), array (  '_controller' => 'EmpruntBundle\\Controller\\EmpruntController::editAction',));
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_emprunt_edit;
                        }

                        return $ret;
                    }
                    not_emprunt_edit:

                    // emprunt_delete
                    if (preg_match('#^/emprunt/emprunt/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'emprunt_delete')), array (  '_controller' => 'EmpruntBundle\\Controller\\EmpruntController::deleteAction',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_emprunt_delete;
                        }

                        return $ret;
                    }
                    not_emprunt_delete:

                    // emprunt_delete1
                    if (preg_match('#^/emprunt/emprunt/(?P<id>[^/]++)/delete1$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'emprunt_delete1')), array (  '_controller' => 'EmpruntBundle\\Controller\\EmpruntController::deleteFromIndexAction',));
                    }

                    // emprunt_rechercher
                    if ('/emprunt/emprunt/rechercher.php' === $pathinfo) {
                        $ret = array (  '_controller' => 'EmpruntBundle\\Controller\\EmpruntController::rechercherAction',  '_route' => 'emprunt_rechercher',);
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_emprunt_rechercher;
                        }

                        return $ret;
                    }
                    not_emprunt_rechercher:

                }

                // emprunt_client_homepage
                if ('/emprunt' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'EmpruntBundle\\Controller\\DefaultController::indexAction',  '_route' => 'emprunt_client_homepage',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_emprunt_client_homepage;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'emprunt_client_homepage'));
                    }

                    return $ret;
                }
                not_emprunt_client_homepage:

                if (0 === strpos($pathinfo, '/emprunt/reclamation')) {
                    // reclamation_index
                    if ('/emprunt/reclamation' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'EmpruntBundle\\Controller\\ReclamationController::indexAction',  '_route' => 'reclamation_index',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_reclamation_index;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'reclamation_index'));
                        }

                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_reclamation_index;
                        }

                        return $ret;
                    }
                    not_reclamation_index:

                    // reclamation_show
                    if (preg_match('#^/emprunt/reclamation/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'reclamation_show')), array (  '_controller' => 'EmpruntBundle\\Controller\\ReclamationController::showAction',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_reclamation_show;
                        }

                        return $ret;
                    }
                    not_reclamation_show:

                    // reclamation_new
                    if ('/emprunt/reclamation/new' === $pathinfo) {
                        $ret = array (  '_controller' => 'EmpruntBundle\\Controller\\ReclamationController::newAction',  '_route' => 'reclamation_new',);
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_reclamation_new;
                        }

                        return $ret;
                    }
                    not_reclamation_new:

                    // reclamation_edit
                    if (preg_match('#^/emprunt/reclamation/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'reclamation_edit')), array (  '_controller' => 'EmpruntBundle\\Controller\\ReclamationController::editAction',));
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_reclamation_edit;
                        }

                        return $ret;
                    }
                    not_reclamation_edit:

                    // reclamation_delete
                    if (preg_match('#^/emprunt/reclamation/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'reclamation_delete')), array (  '_controller' => 'EmpruntBundle\\Controller\\ReclamationController::deleteAction',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_reclamation_delete;
                        }

                        return $ret;
                    }
                    not_reclamation_delete:

                    // reclamation_delete1
                    if (preg_match('#^/emprunt/reclamation/(?P<id>[^/]++)/delete1$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'reclamation_delete1')), array (  '_controller' => 'EmpruntBundle\\Controller\\ReclamationController::deleteFromIndexAction',));
                    }

                    // reclamation_indexClient
                    if ('/emprunt/reclamation/Client' === $pathinfo) {
                        $ret = array (  '_controller' => 'EmpruntBundle\\Controller\\ReclamationController::indexClientAction',  '_route' => 'reclamation_indexClient',);
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_reclamation_indexClient;
                        }

                        return $ret;
                    }
                    not_reclamation_indexClient:

                    // reclamation_ajouter
                    if ('/emprunt/reclamation/ajouter.php' === $pathinfo) {
                        $ret = array (  '_controller' => 'EmpruntBundle\\Controller\\ReclamationController::ajouterAction',  '_route' => 'reclamation_ajouter',);
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_reclamation_ajouter;
                        }

                        return $ret;
                    }
                    not_reclamation_ajouter:

                }

                elseif (0 === strpos($pathinfo, '/emprunt/post')) {
                    // post_index
                    if ('/emprunt/post' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'EmpruntBundle\\Controller\\PostController::indexAction',  '_route' => 'post_index',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_post_index;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'post_index'));
                        }

                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_post_index;
                        }

                        return $ret;
                    }
                    not_post_index:

                    // post_show
                    if (preg_match('#^/emprunt/post/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'post_show')), array (  '_controller' => 'EmpruntBundle\\Controller\\PostController::showAction',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_post_show;
                        }

                        return $ret;
                    }
                    not_post_show:

                    // post_new
                    if ('/emprunt/post/new' === $pathinfo) {
                        $ret = array (  '_controller' => 'EmpruntBundle\\Controller\\PostController::newAction',  '_route' => 'post_new',);
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_post_new;
                        }

                        return $ret;
                    }
                    not_post_new:

                    // post_edit
                    if (preg_match('#^/emprunt/post/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'post_edit')), array (  '_controller' => 'EmpruntBundle\\Controller\\PostController::editAction',));
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_post_edit;
                        }

                        return $ret;
                    }
                    not_post_edit:

                    // post_delete
                    if (preg_match('#^/emprunt/post/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'post_delete')), array (  '_controller' => 'EmpruntBundle\\Controller\\PostController::deleteAction',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_post_delete;
                        }

                        return $ret;
                    }
                    not_post_delete:

                }

                elseif (0 === strpos($pathinfo, '/emprunt/client')) {
                    // emprunt_indexClient
                    if ('/emprunt/client' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'EmpruntBundle\\Controller\\EmpruntController::indexClientAction',  '_route' => 'emprunt_indexClient',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_emprunt_indexClient;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'emprunt_indexClient'));
                        }

                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_emprunt_indexClient;
                        }

                        return $ret;
                    }
                    not_emprunt_indexClient:

                    // emprunt_indexClient2
                    if ('/emprunt/client/Gerer' === $pathinfo) {
                        $ret = array (  '_controller' => 'EmpruntBundle\\Controller\\EmpruntController::indexClient2Action',  '_route' => 'emprunt_indexClient2',);
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_emprunt_indexClient2;
                        }

                        return $ret;
                    }
                    not_emprunt_indexClient2:

                    // emprunt_showClient
                    if (preg_match('#^/emprunt/client/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'emprunt_showClient')), array (  '_controller' => 'EmpruntBundle\\Controller\\EmpruntController::showClientAction',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_emprunt_showClient;
                        }

                        return $ret;
                    }
                    not_emprunt_showClient:

                    // emprunt_newClient
                    if ('/emprunt/client/new' === $pathinfo) {
                        $ret = array (  '_controller' => 'EmpruntBundle\\Controller\\EmpruntController::newClientAction',  '_route' => 'emprunt_newClient',);
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_emprunt_newClient;
                        }

                        return $ret;
                    }
                    not_emprunt_newClient:

                    // emprunt_editClient
                    if (preg_match('#^/emprunt/client/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'emprunt_editClient')), array (  '_controller' => 'EmpruntBundle\\Controller\\EmpruntController::editClientAction',));
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_emprunt_editClient;
                        }

                        return $ret;
                    }
                    not_emprunt_editClient:

                    // emprunt_deleteClient
                    if (preg_match('#^/emprunt/client/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'emprunt_deleteClient')), array (  '_controller' => 'EmpruntBundle\\Controller\\EmpruntController::deleteClientAction',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_emprunt_deleteClient;
                        }

                        return $ret;
                    }
                    not_emprunt_deleteClient:

                    // emprunt_delete1Client
                    if (preg_match('#^/emprunt/client/(?P<id>[^/]++)/delete1$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'emprunt_delete1Client')), array (  '_controller' => 'EmpruntBundle\\Controller\\EmpruntController::deleteFromIndexClientAction',));
                    }

                    // emprunt_rechercherClient
                    if ('/emprunt/client/rechercher.php' === $pathinfo) {
                        $ret = array (  '_controller' => 'EmpruntBundle\\Controller\\EmpruntController::rechercherClientAction',  '_route' => 'emprunt_rechercherClient',);
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_emprunt_rechercherClient;
                        }

                        return $ret;
                    }
                    not_emprunt_rechercherClient:

                    // emprunt_Client
                    if (preg_match('#^/emprunt/client/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'emprunt_Client')), array (  '_controller' => 'EmpruntBundle\\Controller\\EmpruntController::EmprunterAction',));
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_emprunt_Client;
                        }

                        return $ret;
                    }
                    not_emprunt_Client:

                    // emprunt_Rendre
                    if (preg_match('#^/emprunt/client/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'emprunt_Rendre')), array (  '_controller' => 'EmpruntBundle\\Controller\\EmpruntController::RendreAction',));
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_emprunt_Rendre;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'emprunt_Rendre'));
                        }

                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_emprunt_Rendre;
                        }

                        return $ret;
                    }
                    not_emprunt_Rendre:

                    // emprunt_showClient2
                    if (preg_match('#^/emprunt/client/(?P<id>[^/]++)/show2$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'emprunt_showClient2')), array (  '_controller' => 'EmpruntBundle\\Controller\\EmpruntController::showClient2Action',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_emprunt_showClient2;
                        }

                        return $ret;
                    }
                    not_emprunt_showClient2:

                }

            }

            elseif (0 === strpos($pathinfo, '/echange')) {
                // echange_index
                if ('/echange' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'EchangeBundle\\Controller\\EchangeController::indexAction',  '_route' => 'echange_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_echange_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'echange_index'));
                    }

                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_echange_index;
                    }

                    return $ret;
                }
                not_echange_index:

                // echange_show
                if (preg_match('#^/echange/(?P<idech>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'echange_show')), array (  '_controller' => 'EchangeBundle\\Controller\\EchangeController::showAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_echange_show;
                    }

                    return $ret;
                }
                not_echange_show:

                // echange_new
                if ('/echange/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'EchangeBundle\\Controller\\EchangeController::newAction',  '_route' => 'echange_new',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_echange_new;
                    }

                    return $ret;
                }
                not_echange_new:

                // echange_edit
                if (preg_match('#^/echange/(?P<idech>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'echange_edit')), array (  '_controller' => 'EchangeBundle\\Controller\\EchangeController::editAction',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_echange_edit;
                    }

                    return $ret;
                }
                not_echange_edit:

                // echange_delete
                if (preg_match('#^/echange/(?P<idech>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'echange_delete')), array (  '_controller' => 'EchangeBundle\\Controller\\EchangeController::deleteAction',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_echange_delete;
                    }

                    return $ret;
                }
                not_echange_delete:

                // echange_supp
                if (0 === strpos($pathinfo, '/echange/supprimer') && preg_match('#^/echange/supprimer/(?P<idech>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'echange_supp')), array (  '_controller' => 'EchangeBundle\\Controller\\EchangeController::supprimerAction',));
                }

                // echange_map
                if ('/echange/map' === $pathinfo) {
                    return array (  '_controller' => 'EchangeBundle\\Controller\\EchangeController::GmapAction',  '_route' => 'echange_map',);
                }

                // echange_pdf
                if (preg_match('#^/echange/(?P<idech>[^/]++)/pdf$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'echange_pdf')), array (  '_controller' => 'EchangeBundle\\Controller\\EchangeController::PDFAction',));
                }

                // echange_index1
                if ('/echange/index' === $pathinfo) {
                    $ret = array (  '_controller' => 'EchangeBundle\\Controller\\EchangeController::index1Action',  '_route' => 'echange_index1',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_echange_index1;
                    }

                    return $ret;
                }
                not_echange_index1:

                // echange_show1
                if (preg_match('#^/echange/(?P<idech>[^/]++)/show1$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'echange_show1')), array (  '_controller' => 'EchangeBundle\\Controller\\EchangeController::show1Action',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_echange_show1;
                    }

                    return $ret;
                }
                not_echange_show1:

                // echange_new1
                if ('/echange/new1' === $pathinfo) {
                    $ret = array (  '_controller' => 'EchangeBundle\\Controller\\EchangeController::new1Action',  '_route' => 'echange_new1',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_echange_new1;
                    }

                    return $ret;
                }
                not_echange_new1:

                // echange_edit1
                if (preg_match('#^/echange/(?P<idech>[^/]++)/edit1$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'echange_edit1')), array (  '_controller' => 'EchangeBundle\\Controller\\EchangeController::edit1Action',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_echange_edit1;
                    }

                    return $ret;
                }
                not_echange_edit1:

                // echange_delete1
                if (preg_match('#^/echange/(?P<idech>[^/]++)/delete1$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'echange_delete1')), array (  '_controller' => 'EchangeBundle\\Controller\\EchangeController::delete1Action',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_echange_delete1;
                    }

                    return $ret;
                }
                not_echange_delete1:

                // echange_supp1
                if (0 === strpos($pathinfo, '/echange/supprimer1') && preg_match('#^/echange/supprimer1/(?P<idech>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'echange_supp1')), array (  '_controller' => 'EchangeBundle\\Controller\\EchangeController::supprimer1Action',));
                }

                // echange_map1
                if ('/echange/map1' === $pathinfo) {
                    return array (  '_controller' => 'EchangeBundle\\Controller\\EchangeController::Gmap1Action',  '_route' => 'echange_map1',);
                }

                // echange_pdf1
                if (preg_match('#^/echange/(?P<idech>[^/]++)/pdf1$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'echange_pdf1')), array (  '_controller' => 'EchangeBundle\\Controller\\EchangeController::PDF1Action',));
                }

            }

            elseif (0 === strpos($pathinfo, '/evenement')) {
                // event_index
                if ('/evenement' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'EvenementBundle\\Controller\\EventController::indexAction',  '_route' => 'event_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_event_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'event_index'));
                    }

                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_event_index;
                    }

                    return $ret;
                }
                not_event_index:

                // event_show
                if (preg_match('#^/evenement/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'event_show')), array (  '_controller' => 'EvenementBundle\\Controller\\EventController::showAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_event_show;
                    }

                    return $ret;
                }
                not_event_show:

                // event_edit
                if (preg_match('#^/evenement/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'event_edit')), array (  '_controller' => 'EvenementBundle\\Controller\\EventController::editAction',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_event_edit;
                    }

                    return $ret;
                }
                not_event_edit:

                // event_delete
                if (preg_match('#^/evenement/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'event_delete')), array (  '_controller' => 'EvenementBundle\\Controller\\EventController::deleteAction',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_event_delete;
                    }

                    return $ret;
                }
                not_event_delete:

                // event_search
                if ('/evenement/search' === $pathinfo) {
                    return array (  '_controller' => 'EvenementBundle\\Controller\\EventController::searchAction',  '_route' => 'event_search',);
                }

                // event_stat
                if ('/evenement/stat' === $pathinfo) {
                    return array (  '_controller' => 'EvenementBundle\\Controller\\StatController::StatAction',  '_route' => 'event_stat',);
                }

                // event_supprimer
                if (preg_match('#^/evenement/(?P<id>[^/]++)/supprimer$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_supprimer')), array (  '_controller' => 'EvenementBundle\\Controller\\EventController::supprimerAction',));
                }

                // event_ajout
                if ('/evenement/ajout' === $pathinfo) {
                    $ret = array (  '_controller' => 'EvenementBundle\\Controller\\EventController::ajouterAction',  '_route' => 'event_ajout',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_event_ajout;
                    }

                    return $ret;
                }
                not_event_ajout:

                // event_all
                if ('/evenement/all' === $pathinfo) {
                    return array (  '_controller' => 'EvenementBundle\\Controller\\EventController::allAction',  '_route' => 'event_all',);
                }

                // event_mail
                if ('/evenement/mail' === $pathinfo) {
                    return array (  '_controller' => 'EvenementBundle\\Controller\\MailController::indexAction',  '_route' => 'event_mail',);
                }

                // event_accuse
                if ('/evenement/success' === $pathinfo) {
                    return array (  '_controller' => 'EvenementBundle\\Controller\\MailController::successAction',  '_route' => 'event_accuse',);
                }

                // event_supprimermobile
                if (0 === strpos($pathinfo, '/evenement/supprimermobile') && preg_match('#^/evenement/supprimermobile/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_supprimermobile')), array (  '_controller' => 'EvenementBundle\\Controller\\EventController::supprimermobileAction',));
                }

                // event_editmobile
                if (0 === strpos($pathinfo, '/evenement/editmobile') && preg_match('#^/evenement/editmobile/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'event_editmobile')), array (  '_controller' => 'EvenementBundle\\Controller\\EventController::editmobileAction',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_event_editmobile;
                    }

                    return $ret;
                }
                not_event_editmobile:

            }

        }

        // contact_client_homepage
        if ('/contact' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'ContactBundle\\Controller\\DefaultController::indexAction',  '_route' => 'contact_client_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_contact_client_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'contact_client_homepage'));
            }

            return $ret;
        }
        not_contact_client_homepage:

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_registration_register;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                }

                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                return $ret;
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_user_registration_check_email;
                }

                return $ret;
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_fos_user_registration_confirm;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_fos_user_registration_confirmed;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_user_resetting_request;
                }

                return $ret;
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_resetting_reset;
                }

                return $ret;
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_fos_user_resetting_send_email;
                }

                return $ret;
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_user_resetting_check_email;
                }

                return $ret;
            }
            not_fos_user_resetting_check_email:

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
