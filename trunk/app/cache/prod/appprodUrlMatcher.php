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
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/admin')) {
            // fenchy_admin_users
            if (rtrim($pathinfo, '/') === '/admin/users') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fenchy_admin_users');
                }

                return array (  '_controller' => 'Fenchy\\AdminBundle\\Controller\\DefaultController::usersAction',  '_route' => 'fenchy_admin_users',);
            }

            // fenchy_admin_user
            if (0 === strpos($pathinfo, '/admin/user') && preg_match('#^/admin/user/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\AdminBundle\\Controller\\DefaultController::userAction',)), array('_route' => 'fenchy_admin_user'));
            }

            // fenchy_admin_search
            if (rtrim($pathinfo, '/') === '/admin/search') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fenchy_admin_search');
                }

                return array (  '_controller' => 'Fenchy\\AdminBundle\\Controller\\DefaultController::searchAction',  '_route' => 'fenchy_admin_search',);
            }

            // fenchy_admin_dictionary_switch
            if ($pathinfo === '/admin/dictionary/switch') {
                return array (  '_controller' => 'Fenchy\\AdminBundle\\Controller\\DefaultController::dictionarySwitchAction',  '_route' => 'fenchy_admin_dictionary_switch',);
            }

            // fenchy_admin_notices
            if (rtrim($pathinfo, '/') === '/admin/notices') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fenchy_admin_notices');
                }

                return array (  '_controller' => 'Fenchy\\AdminBundle\\Controller\\DefaultController::noticesAction',  '_route' => 'fenchy_admin_notices',);
            }

            // fenchy_admin_notice_add_to_dashboard
            if (0 === strpos($pathinfo, '/admin/notices/add-to-dashboard') && preg_match('#^/admin/notices/add\\-to\\-dashboard/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\AdminBundle\\Controller\\DefaultController::addToDashboardAction',)), array('_route' => 'fenchy_admin_notice_add_to_dashboard'));
            }

            // fenchy_admin_notice_remove_from_dashboard
            if (0 === strpos($pathinfo, '/admin/notices/remove-from-dashboard') && preg_match('#^/admin/notices/remove\\-from\\-dashboard/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\AdminBundle\\Controller\\DefaultController::removeFromDashboardAction',)), array('_route' => 'fenchy_admin_notice_remove_from_dashboard'));
            }

            // fenchy_admin_notice
            if (0 === strpos($pathinfo, '/admin/notice') && preg_match('#^/admin/notice/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\AdminBundle\\Controller\\DefaultController::noticeAction',)), array('_route' => 'fenchy_admin_notice'));
            }

            // fenchy_admin_reviews
            if (rtrim($pathinfo, '/') === '/admin/reviews') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fenchy_admin_reviews');
                }

                return array (  '_controller' => 'Fenchy\\AdminBundle\\Controller\\DefaultController::reviewsAction',  '_route' => 'fenchy_admin_reviews',);
            }

            // fenchy_admin_review
            if (0 === strpos($pathinfo, '/admin/review') && preg_match('#^/admin/review/(?<id>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\AdminBundle\\Controller\\DefaultController::reviewAction',)), array('_route' => 'fenchy_admin_review'));
            }

            // fenchy_admin_notice_delete
            if (0 === strpos($pathinfo, '/admin/notice/delete') && preg_match('#^/admin/notice/delete/(?<id>\\d+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\AdminBundle\\Controller\\DefaultController::noticeDeleteAction',)), array('_route' => 'fenchy_admin_notice_delete'));
            }

        }

        // fenchy_notice_indexv2
        if (0 === strpos($pathinfo, '/listings') && preg_match('#^/listings(?:/(?<slug>.*))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\NoticeBundle\\Controller\\GlobalFilterController::indexV2Action',  'slug' => '',)), array('_route' => 'fenchy_notice_indexv2'));
        }

        // fenchy_notice_detailsv2
        if ($pathinfo === '/listing/details') {
            return array (  '_controller' => 'Fenchy\\NoticeBundle\\Controller\\GlobalFilterController::detailsV2Action',  '_route' => 'fenchy_notice_detailsv2',);
        }

        // fenchy_filter_content
        if ($pathinfo === '/listing/content') {
            return array (  '_controller' => 'Fenchy\\NoticeBundle\\Controller\\GlobalFilterController::listAction',  '_route' => 'fenchy_filter_content',);
        }

        // fenchy_what_autocomplete_suggestions
        if ($pathinfo === '/listing/acsuggest') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fenchy_what_autocomplete_suggestions;
            }

            return array (  '_controller' => 'Fenchy\\NoticeBundle\\Controller\\GlobalFilterController::autocompleteSuggestAction',  '_route' => 'fenchy_what_autocomplete_suggestions',);
        }
        not_fenchy_what_autocomplete_suggestions:

        // fenchy_notice_show_slug
        if (preg_match('#^/(?<slug>[a-z0-9\\-]+)/(?<year>\\d+)/(?<month>\\d+)/(?<day>\\d+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\ListingController::showWithSlugAction',)), array('_route' => 'fenchy_notice_show_slug'));
        }

        // fenchy_gallery_delete
        if (0 === strpos($pathinfo, '/gallery/delete') && preg_match('#^/gallery/delete/(?<imageId>\\d+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FenchyGalleryBundle:Default:deleteImage',)), array('_route' => 'fenchy_gallery_delete'));
        }

        // fenchy_gallery_edit_image
        if (0 === strpos($pathinfo, '/gallery/editImage') && preg_match('#^/gallery/editImage/(?<id>\\d+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FenchyGalleryBundle:Default:editImage',)), array('_route' => 'fenchy_gallery_edit_image'));
        }

        // fenchy_gallery_close_and_refresh
        if ($pathinfo === '/gallery/refrest') {
            return array (  '_controller' => 'FenchyGalleryBundle:Default:closeAndRefresh',  '_route' => 'fenchy_gallery_close_and_refresh',);
        }

        // fenchy_gallery_edit
        if (0 === strpos($pathinfo, '/gallery/edit') && preg_match('#^/gallery/edit/(?<id>\\d+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\GalleryBundle\\Controller\\PunkaveController::editAction',)), array('_route' => 'fenchy_gallery_edit'));
        }

        // fenchy_gallery_upload
        if (0 === strpos($pathinfo, '/gallery/upload') && preg_match('#^/gallery/upload/(?<tmpGalleryId>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\GalleryBundle\\Controller\\PunkaveController::uploadAction',)), array('_route' => 'fenchy_gallery_upload'));
        }

        // fenchy_gallery_show
        if (0 === strpos($pathinfo, '/gallery/show') && preg_match('#^/gallery/show/(?<id>\\d+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\GalleryBundle\\Controller\\PunkaveController::showAction',)), array('_route' => 'fenchy_gallery_show'));
        }

        // fenchy_gallery_crop
        if ($pathinfo === '/gallery/crop') {
            return array (  '_controller' => 'Fenchy\\GalleryBundle\\Controller\\PunkaveController::cropAction',  '_route' => 'fenchy_gallery_crop',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            // fenchy_regular_user_index
            if ($pathinfo === '/user/profile') {
                return array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\ProfileController::indexAction',  '_route' => 'fenchy_regular_user_index',);
            }

            // fenchy_regular_user_friend_index
            if (0 === strpos($pathinfo, '/user/contacts') && preg_match('#^/user/contacts(?:/(?<id>\\d+))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\FriendController::indexAction',  'id' => NULL,)), array('_route' => 'fenchy_regular_user_friend_index'));
            }

            // fenchy_regular_user_friend_invite
            if (0 === strpos($pathinfo, '/user/contact/invite') && preg_match('#^/user/contact/invite/(?<id>\\d+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\FriendController::inviteAction',)), array('_route' => 'fenchy_regular_user_friend_invite'));
            }

            // fenchy_regular_user_friend_invitations
            if ($pathinfo === '/user/contact/list') {
                return array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\FriendController::invitationsAction',  '_route' => 'fenchy_regular_user_friend_invitations',);
            }

            // fenchy_regular_user_friend_invitation_response
            if (0 === strpos($pathinfo, '/user/contact/invitation') && preg_match('#^/user/contact/invitation/(?<id>\\d+)/(?<response>accept|reject)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\FriendController::invitationResponseAction',)), array('_route' => 'fenchy_regular_user_friend_invitation_response'));
            }

            // fenchy_regular_user_friend_delete
            if (0 === strpos($pathinfo, '/user/contact/delete') && preg_match('#^/user/contact/delete/(?<friendId>\\d+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\FriendController::deleteAction',)), array('_route' => 'fenchy_regular_user_friend_delete'));
            }

            // fenchy_regular_user_friend_delete_confirm
            if (0 === strpos($pathinfo, '/user/contact/delete-confirm') && preg_match('#^/user/contact/delete\\-confirm/(?<friendId>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fenchy_regular_user_friend_delete_confirm;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\FriendController::deleteConfirmAction',)), array('_route' => 'fenchy_regular_user_friend_delete_confirm'));
            }
            not_fenchy_regular_user_friend_delete_confirm:

            // fenchy_regular_user_settings_general
            if ($pathinfo === '/user/settings/general') {
                return array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\SettingsController::generalAction',  '_route' => 'fenchy_regular_user_settings_general',);
            }

            // fenchy_regular_user_settings_general_save
            if ($pathinfo === '/user/settings/general/save') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fenchy_regular_user_settings_general_save;
                }

                return array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\SettingsController::generalSaveAction',  '_route' => 'fenchy_regular_user_settings_general_save',);
            }
            not_fenchy_regular_user_settings_general_save:

            // fenchy_regular_user_settings_general_changepasword
            if ($pathinfo === '/user/settings/general/changepassword') {
                return array (  '_controller' => 'Fenchy\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fenchy_regular_user_settings_general_changepasword',);
            }

            // fenchy_regular_user_settings_general_delete
            if ($pathinfo === '/user/settings/general/delete') {
                return array (  '_controller' => 'Fenchy\\UserBundle\\Controller\\DefaultController::deleteAction',  '_route' => 'fenchy_regular_user_settings_general_delete',);
            }

            // fenchy_regular_user_settings_popuplocation
            if (0 === strpos($pathinfo, '/user/settings/popuplocation') && preg_match('#^/user/settings/popuplocation(?:/(?<reset>[^/]+))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\SettingsController::popupLocationAction',  'reset' => NULL,)), array('_route' => 'fenchy_regular_user_settings_popuplocation'));
            }

            // fenchy_regular_user_settings_images
            if ($pathinfo === '/user/settings/images') {
                return array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\SettingsController::imagesAction',  '_route' => 'fenchy_regular_user_settings_images',);
            }

            // fenchy_regular_user_settings_location_save
            if ($pathinfo === '/user/settings/location/save') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fenchy_regular_user_settings_location_save;
                }

                return array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\SettingsController::locationSaveAction',  '_route' => 'fenchy_regular_user_settings_location_save',);
            }
            not_fenchy_regular_user_settings_location_save:

            // fenchy_regular_user_settings_notification
            if ($pathinfo === '/user/settings/notification') {
                return array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\SettingsController::notificationAction',  '_route' => 'fenchy_regular_user_settings_notification',);
            }

            // fenchy_regular_user_settings_notification_save
            if ($pathinfo === '/user/settings/notification/save') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fenchy_regular_user_settings_notification_save;
                }

                return array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\SettingsController::notificationSaveAction',  '_route' => 'fenchy_regular_user_settings_notification_save',);
            }
            not_fenchy_regular_user_settings_notification_save:

            // fenchy_regular_user_settings_connect
            if ($pathinfo === '/user/settings/connect') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fenchy_regular_user_settings_connect;
                }

                return array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\SettingsController::connectAction',  '_route' => 'fenchy_regular_user_settings_connect',);
            }
            not_fenchy_regular_user_settings_connect:

            // fenchy_regular_user_settings_ask_again
            if (0 === strpos($pathinfo, '/user/settings/ask_again') && preg_match('#^/user/settings/ask_again(?:/(?<ask_again>[^/]+))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\SettingsController::askAgainAction',  'ask_again' => NULL,)), array('_route' => 'fenchy_regular_user_settings_ask_again'));
            }

            // fenchy_regular_user_notices
            if (0 === strpos($pathinfo, '/user/notices') && preg_match('#^/user/notices/(?<typeId>\\d+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FenchyRegularUserBundle:Notice:index',  'search' => NULL,)), array('_route' => 'fenchy_regular_user_notices'));
            }

            // fenchy_regular_user_notice_add
            if (0 === strpos($pathinfo, '/user/notice/create') && preg_match('#^/user/notice/create/(?<typeId>\\d+)(?:/(?<option>\\d+)(?:/(?<val>\\d+))?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FenchyRegularUserBundle:Notice:add',  'option' => '0',  'val' => '0',)), array('_route' => 'fenchy_regular_user_notice_add'));
            }

            // fenchy_regular_user_notice_menu
            if ($pathinfo === '/user/notice/menu') {
                return array (  '_controller' => 'FenchyRegularUserBundle:Notice:menu',  '_route' => 'fenchy_regular_user_notice_menu',);
            }

            // fenchy_regular_user_notice_submenu
            if ($pathinfo === '/user/notice/submenu') {
                return array (  '_controller' => 'FenchyRegularUserBundle:Notice:submenu',  '_route' => 'fenchy_regular_user_notice_submenu',);
            }

            // fenchy_regular_user_notice_cancel
            if (0 === strpos($pathinfo, '/user/notice/cancel') && preg_match('#^/user/notice/cancel/(?<id>\\d+)/(?<option>\\d+)/(?<val>\\d+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FenchyRegularUserBundle:Notice:cancel',)), array('_route' => 'fenchy_regular_user_notice_cancel'));
            }

            // fenchy_regular_user_notices_type
            if (0 === strpos($pathinfo, '/user/notices') && preg_match('#^/user/notices/(?<type>\\d+)/(?<option>\\d+)/(?<val>\\d+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FenchyRegularUserBundle:Notice:myList',)), array('_route' => 'fenchy_regular_user_notices_type'));
            }

            // fenchy_regular_user_neighbour_notices_type
            if (0 === strpos($pathinfo, '/user/notices') && preg_match('#^/user/notices/(?<neighbour>\\d+)/(?<type>\\d+)/(?<option>\\d+)/(?<val>\\d+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FenchyRegularUserBundle:Notice:neighbourList',)), array('_route' => 'fenchy_regular_user_neighbour_notices_type'));
            }

            // fenchy_regular_user_neighbours_notices
            if (rtrim($pathinfo, '/') === '/user/neighbours/notices') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fenchy_regular_user_neighbours_notices');
                }

                return array (  '_controller' => 'FenchyRegularUserBundle:Notice:list',  '_route' => 'fenchy_regular_user_neighbours_notices',);
            }

            // fenchy_regular_user_notice
            if (0 === strpos($pathinfo, '/user/notice') && preg_match('#^/user/notice/(?<id>\\d+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FenchyRegularUserBundle:Notice:index',)), array('_route' => 'fenchy_regular_user_notice'));
            }

            // fenchy_regular_user_news
            if (0 === strpos($pathinfo, '/user/news') && preg_match('#^/user/news/(?<time>[^/]+)(?:/(?<page>[^/]+))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FenchyRegularUserBundle:Notice:news',  'page' => '1',)), array('_route' => 'fenchy_regular_user_news'));
            }

            // fenchy_regular_user_notice_edit
            if (0 === strpos($pathinfo, '/user/listing/edit') && preg_match('#^/user/listing/edit/(?<id>\\d+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\ListingController::editAction',)), array('_route' => 'fenchy_regular_user_notice_edit'));
            }

            // fenchy_regular_user_notice_delete
            if (0 === strpos($pathinfo, '/user/notice') && preg_match('#^/user/notice/(?<id>\\d+)/delete$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FenchyRegularUserBundle:Notice:delete',)), array('_route' => 'fenchy_regular_user_notice_delete'));
            }

            // fenchy_regular_user_message_notice
            if (0 === strpos($pathinfo, '/user/notice') && preg_match('#^/user/notice/(?<id>\\d+)/message$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\MessageController::noticeAction',)), array('_route' => 'fenchy_regular_user_message_notice'));
            }

            // fenchy_regular_user_message_notice_send
            if (0 === strpos($pathinfo, '/user/notice') && preg_match('#^/user/notice/(?<id>\\d+)/message/send$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fenchy_regular_user_message_notice_send;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\MessageController::noticeSendAction',)), array('_route' => 'fenchy_regular_user_message_notice_send'));
            }
            not_fenchy_regular_user_message_notice_send:

            // fenchy_regular_user_messages_index
            if (0 === strpos($pathinfo, '/user/messages') && preg_match('#^/user/messages(?:/(?<type>all|unread|unreplied|sent|about))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\MessageController::indexAction',  'type' => NULL,)), array('_route' => 'fenchy_regular_user_messages_index'));
            }

            // fenchy_regular_user_messages_read_all
            if ($pathinfo === '/user/messages/read') {
                return array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\MessageController::readAction',  '_route' => 'fenchy_regular_user_messages_read_all',);
            }

            // fenchy_regular_user_messages_view
            if (0 === strpos($pathinfo, '/user/messages') && preg_match('#^/user/messages/(?<id>\\d+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\MessageController::viewAction',)), array('_route' => 'fenchy_regular_user_messages_view'));
            }

            // fenchy_regular_user_messages_delete_selected
            if ($pathinfo === '/user/messages/delete-selected') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fenchy_regular_user_messages_delete_selected;
                }

                return array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\MessageController::deleteSelectedAction',  '_route' => 'fenchy_regular_user_messages_delete_selected',);
            }
            not_fenchy_regular_user_messages_delete_selected:

            // fenchy_regular_user_messages_new
            if (0 === strpos($pathinfo, '/user/messages/new') && preg_match('#^/user/messages/new/(?<id>\\d+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\MessageController::newAction',)), array('_route' => 'fenchy_regular_user_messages_new'));
            }

            // fenchy_regular_user_messages_send
            if (0 === strpos($pathinfo, '/user/messages/send') && preg_match('#^/user/messages/send(?:/(?<prev_id>[^/]+))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fenchy_regular_user_messages_send;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\MessageController::sendAction',  'prev_id' => NULL,)), array('_route' => 'fenchy_regular_user_messages_send'));
            }
            not_fenchy_regular_user_messages_send:

            // fenchy_regular_user_messages_delete
            if (0 === strpos($pathinfo, '/user/messages') && preg_match('#^/user/messages/(?<id>\\d+)/delete$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\MessageController::deleteAction',)), array('_route' => 'fenchy_regular_user_messages_delete'));
            }

            // fenchy_regular_user_about_me
            if ($pathinfo === '/user/aboutMe') {
                return array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\ProfileController::aboutMeAction',  '_route' => 'fenchy_regular_user_about_me',);
            }

            // fenchy_regular_user_interests_and_activities
            if (0 === strpos($pathinfo, '/user/interests_and_activities') && preg_match('#^/user/interests_and_activities(?:/(?<noticeId>[^/]+))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\ProfileController::interestsAndActivitiesAction',  'noticeId' => NULL,)), array('_route' => 'fenchy_regular_user_interests_and_activities'));
            }

            // fenchy_regular_user_neighbours
            if (0 === strpos($pathinfo, '/user/neighbours') && preg_match('#^/user/neighbours(?:/(?<page>\\d+))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FenchyRegularUserBundle:Neighbours:index',  'page' => '1',)), array('_route' => 'fenchy_regular_user_neighbours'));
            }

            // fenchy_regular_user_neighbour_about
            if (0 === strpos($pathinfo, '/user/neighbour') && preg_match('#^/user/neighbour/(?<id>\\d+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FenchyRegularUserBundle:Neighbours:about',)), array('_route' => 'fenchy_regular_user_neighbour_about'));
            }

            // fenchy_regular_user_notice_ioa
            if (0 === strpos($pathinfo, '/user/interest_or_activity') && preg_match('#^/user/interest_or_activity/(?<id>\\d+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FenchyRegularUserBundle:Notice:interestOrActivity',)), array('_route' => 'fenchy_regular_user_notice_ioa'));
            }

            // fenchy_regular_user_chooselang
            if (0 === strpos($pathinfo, '/user/chooselang') && preg_match('#^/user/chooselang/(?<locale>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\ProfileController::chooseLanguageAction',)), array('_route' => 'fenchy_regular_user_chooselang'));
            }

            // fenchy_regular_user_trust_points
            if ($pathinfo === '/user/trust_points') {
                return array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\TrustPointsController::indexAction',  '_route' => 'fenchy_regular_user_trust_points',);
            }

            // fenchy_regular_user_email_change_confirm
            if (0 === strpos($pathinfo, '/user/emailconfirm') && preg_match('#^/user/emailconfirm(?:/(?<token>[^/]+))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fenchy_regular_user_email_change_confirm;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\SettingsController::emailChangeConfirmAction',  'token' => NULL,)), array('_route' => 'fenchy_regular_user_email_change_confirm'));
            }
            not_fenchy_regular_user_email_change_confirm:

            // fenchy_regular_user_email_change_abort
            if (0 === strpos($pathinfo, '/user/emailabort') && preg_match('#^/user/emailabort(?:/(?<token>[^/]+))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fenchy_regular_user_email_change_abort;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\SettingsController::emailChangeAbortAction',  'token' => NULL,)), array('_route' => 'fenchy_regular_user_email_change_abort'));
            }
            not_fenchy_regular_user_email_change_abort:

            // fenchy_regular_user_notice_create1
            if ($pathinfo === '/user/create_listing/category') {
                return array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\ListingController::create1Action',  '_route' => 'fenchy_regular_user_notice_create1',);
            }

            // fenchy_regular_user_notice_create2
            if (0 === strpos($pathinfo, '/user/create_listing/details') && preg_match('#^/user/create_listing/details/(?<typename>[^/]+)(?:/(?<direction>[^/]+))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\ListingController::create2Action',  'direction' => NULL,)), array('_route' => 'fenchy_regular_user_notice_create2'));
            }

            // fenchy_regular_user_user_profilev2
            if (0 === strpos($pathinfo, '/user/userprofile') && preg_match('#^/user/userprofile(?:/(?<userId>[^/]+))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\ProfileController::userProfileV2Action',  'userId' => NULL,)), array('_route' => 'fenchy_regular_user_user_profilev2'));
            }

            // fenchy_regular_user_reviewseditform
            if (0 === strpos($pathinfo, '/user/reviewseditform') && preg_match('#^/user/reviewseditform(?:/(?<reviewId>[^/]+))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\ProfileController::userReviewsEditFormAction',  'reviewId' => NULL,)), array('_route' => 'fenchy_regular_user_reviewseditform'));
            }

            // fenchy_regular_user_reviewssave
            if (0 === strpos($pathinfo, '/user/reviewssave') && preg_match('#^/user/reviewssave(?:/(?<reviewId>[0-9]*)(?:/(?<targetNoticeId>[0-9]*)(?:/(?<targetUserId>[0-9]*))?)?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\ProfileController::userReviewsSaveAction',  'reviewId' => NULL,  'targetNoticeId' => NULL,  'targetUserId' => NULL,)), array('_route' => 'fenchy_regular_user_reviewssave'));
            }

            // fenchy_regular_user_reviewslist
            if (0 === strpos($pathinfo, '/user/reviewslist') && preg_match('#^/user/reviewslist(?:/(?<userId>[^/]+)(?:/(?<noticeId>[^/]+))?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\ProfileController::userReviewsListAction',  'userId' => NULL,  'noticeId' => NULL,)), array('_route' => 'fenchy_regular_user_reviewslist'));
            }

            // fenchy_regular_user_listingslist
            if (0 === strpos($pathinfo, '/user/listingslist') && preg_match('#^/user/listingslist(?:/(?<userId>[^/]+))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\ProfileController::userListingsListAction',  'userId' => NULL,)), array('_route' => 'fenchy_regular_user_listingslist'));
            }

            // fenchy_notice_test
            if ($pathinfo === '/user/test') {
                return array (  '_controller' => 'FenchyRegularUserBundle:Notice:testTagSearch',  '_route' => 'fenchy_notice_test',);
            }

            // fenchy_regular_user_review_add
            if (0 === strpos($pathinfo, '/user/review/add') && preg_match('#^/user/review/add/(?<type>[^/]+)/(?<id>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fenchy_regular_user_review_add;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FenchyRegularUserBundle:Notice:addReview',)), array('_route' => 'fenchy_regular_user_review_add'));
            }
            not_fenchy_regular_user_review_add:

            // fenchy_regular_user_notice_show
            if (0 === strpos($pathinfo, '/user/listing/show') && preg_match('#^/user/listing/show/(?<id>\\d+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\ListingController::showAction',)), array('_route' => 'fenchy_regular_user_notice_show'));
            }

            // fenchy_regular_user_settings_basic
            if ($pathinfo === '/user/settings') {
                return array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\SettingsController::basicAction',  '_route' => 'fenchy_regular_user_settings_basic',);
            }

            // fenchy_regular_user_settings_location
            if ($pathinfo === '/user/settings/location') {
                return array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\SettingsController::locationAction',  '_route' => 'fenchy_regular_user_settings_location',);
            }

            // fenchy_regular_user_settings_account
            if ($pathinfo === '/user/settings/account') {
                return array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\SettingsController::accountAction',  '_route' => 'fenchy_regular_user_settings_account',);
            }

            // fenchy_regular_user_settings_deleteaccount
            if ($pathinfo === '/user/settings/account/delete-account') {
                return array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\SettingsController::deleteAccountAction',  '_route' => 'fenchy_regular_user_settings_deleteaccount',);
            }

            // fenchy_regular_user_settings_changepassword
            if ($pathinfo === '/user/settings/account/change-password') {
                return array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\SettingsController::changePasswordAction',  '_route' => 'fenchy_regular_user_settings_changepassword',);
            }

            // fenchy_regular_user_settings_notifications
            if ($pathinfo === '/user/settings/notifications') {
                return array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\SettingsController::notificationsAction',  '_route' => 'fenchy_regular_user_settings_notifications',);
            }

            // fenchy_regular_user_settings_socialnetworks
            if ($pathinfo === '/user/settings/social-networks') {
                return array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\SettingsController::socialAction',  '_route' => 'fenchy_regular_user_settings_socialnetworks',);
            }

            // fenchy_regular_user_listing_tags
            if ($pathinfo === '/user/listing/tags') {
                return array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\SettingsController::socialAction',  '_route' => 'fenchy_regular_user_listing_tags',);
            }

            // fenchy_regular_user_settings_filllocationpopup
            if ($pathinfo === '/user/settings/fill-location-popup') {
                return array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\SettingsController::fillLocationPopupAction',  '_route' => 'fenchy_regular_user_settings_filllocationpopup',);
            }

            // fenchy_regular_user_listing_manage
            if ($pathinfo === '/user/listing/manage') {
                return array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\ListingController::manageAction',  '_route' => 'fenchy_regular_user_listing_manage',);
            }

            // fenchy_regular_user_listing_delete
            if (0 === strpos($pathinfo, '/user/listing/delete') && preg_match('#^/user/listing/delete/(?<id>\\d+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\ListingController::deleteAction',)), array('_route' => 'fenchy_regular_user_listing_delete'));
            }

            // fenchy_regular_user_listing_delete_confirm
            if (0 === strpos($pathinfo, '/user/listing/delete-confirm') && preg_match('#^/user/listing/delete\\-confirm/(?<id>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fenchy_regular_user_listing_delete_confirm;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\RegularUserBundle\\Controller\\ListingController::deleteConfirmAction',)), array('_route' => 'fenchy_regular_user_listing_delete_confirm'));
            }
            not_fenchy_regular_user_listing_delete_confirm:

        }

        // fenchy_login_facebook
        if ($pathinfo === '/user/signin/facebook') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fenchy_login_facebook;
            }

            return array (  '_controller' => 'Fenchy\\UserBundle\\Controller\\SecurityController::loginFacebookAction',  '_route' => 'fenchy_login_facebook',);
        }
        not_fenchy_login_facebook:

        // fenchy_facebook_login_check
        if ($pathinfo === '/facebook/login_check') {
            return array (  '_controller' => 'Fenchy\\UserBundle\\Controller\\FacebookController::loginCheckAction',  '_route' => 'fenchy_facebook_login_check',);
        }

        // fenchy_facebook_login_finalize
        if ($pathinfo === '/facebook/login/finalize') {
            return array (  '_controller' => 'Fenchy\\UserBundle\\Controller\\FacebookController::finalizeAction',  '_route' => 'fenchy_facebook_login_finalize',);
        }

        // fenchy_connect_facebook
        if ($pathinfo === '/user/connect/facebook') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fenchy_connect_facebook;
            }

            return array (  '_controller' => 'Fenchy\\UserBundle\\Controller\\FacebookController::connectAction',  '_route' => 'fenchy_connect_facebook',);
        }
        not_fenchy_connect_facebook:

        // fenchy_disconnect_facebook
        if ($pathinfo === '/user/disconnect/facebook') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fenchy_disconnect_facebook;
            }

            return array (  '_controller' => 'Fenchy\\UserBundle\\Controller\\FacebookController::disconnectAction',  '_route' => 'fenchy_disconnect_facebook',);
        }
        not_fenchy_disconnect_facebook:

        // fenchy_addtimeline_facebook
        if ($pathinfo === '/user/addtimeline/facebook') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fenchy_addtimeline_facebook;
            }

            return array (  '_controller' => 'Fenchy\\UserBundle\\Controller\\FacebookController::addTimelineAction',  '_route' => 'fenchy_addtimeline_facebook',);
        }
        not_fenchy_addtimeline_facebook:

        // fenchy_disconnect_timeline_facebook
        if ($pathinfo === '/user/disconnect/fbtimeline') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fenchy_disconnect_timeline_facebook;
            }

            return array (  '_controller' => 'Fenchy\\UserBundle\\Controller\\FacebookController::disconnectTimelineAction',  '_route' => 'fenchy_disconnect_timeline_facebook',);
        }
        not_fenchy_disconnect_timeline_facebook:

        // fos_user_security_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Fenchy\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
        }

        // fos_user_security_check
        if ($pathinfo === '/login_check') {
            return array (  '_controller' => 'Fenchy\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
        }

        // fos_user_security_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'Fenchy\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }

        // fos_user_profile_edit
        if ($pathinfo === '/user/profile/edit') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
        }

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'Fenchy\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }

            // fos_user_registration_check_email
            if ($pathinfo === '/register/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'Fenchy\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            // fos_user_registration_confirmed
            if ($pathinfo === '/register/confirmed') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirmed;
                }

                return array (  '_controller' => 'Fenchy\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
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

                return array (  '_controller' => 'Fenchy\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'Fenchy\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'Fenchy\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

        }

        // fos_user_change_password
        if ($pathinfo === '/user/settings/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'Fenchy\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // fenchy_user_reset_password
        if ($pathinfo === '/reset-password') {
            return array (  '_controller' => 'Fenchy\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fenchy_user_reset_password',);
        }

        // reg_token_expired
        if ($pathinfo === '/expired') {
            return array (  '_controller' => 'Fenchy\\UserBundle\\Controller\\DefaultController::tokenExpiredAction',  '_route' => 'reg_token_expired',);
        }

        // fos_user_profile_show
        if ($pathinfo === '/user/neighbours') {
            return array (  '_controller' => 'FenchyRegularUserBundle:Neighbours:index',  '_route' => 'fos_user_profile_show',);
        }

        // connect_twitter
        if ($pathinfo === '/connect/twitter') {
            return array (  '_controller' => 'Fenchy\\UserBundle\\Controller\\TwitterController::connectAction',  '_route' => 'connect_twitter',);
        }

        // disconnect_twitter
        if ($pathinfo === '/disconnect/twitter') {
            return array (  '_controller' => 'Fenchy\\UserBundle\\Controller\\TwitterController::disconnectAction',  '_route' => 'disconnect_twitter',);
        }

        // fenchy_twitter_oauth
        if ($pathinfo === '/twitter') {
            return array (  '_controller' => 'Fenchy\\UserBundle\\Controller\\TwitterController::indexAction',  '_route' => 'fenchy_twitter_oauth',);
        }

        // fenchy_twitter_login
        if ($pathinfo === '/twitter/login') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fenchy_twitter_login;
            }

            return array (  '_controller' => 'Fenchy\\UserBundle\\Controller\\TwitterController::loginAction',  '_route' => 'fenchy_twitter_login',);
        }
        not_fenchy_twitter_login:

        // fenchy_twitter_login_check
        if ($pathinfo === '/twitter/login_check') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fenchy_twitter_login_check;
            }

            return array (  '_controller' => 'Fenchy\\UserBundle\\Controller\\TwitterController::loginCheckAction',  '_route' => 'fenchy_twitter_login_check',);
        }
        not_fenchy_twitter_login_check:

        // fenchy_twitter_login_finalize
        if ($pathinfo === '/twitter/login/finalize') {
            return array (  '_controller' => 'Fenchy\\UserBundle\\Controller\\TwitterController::finalizeAction',  '_route' => 'fenchy_twitter_login_finalize',);
        }

        // fos_user_registration_confirm
        if (0 === strpos($pathinfo, '/confirm') && preg_match('#^/confirm(?:/(?<token>[^/]+))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_registration_confirm;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\UserBundle\\Controller\\DefaultController::confirmAction',  'token' => NULL,)), array('_route' => 'fos_user_registration_confirm'));
        }
        not_fos_user_registration_confirm:

        // fos_user_registration_confirm_finish
        if (0 === strpos($pathinfo, '/confirm') && preg_match('#^/confirm/(?<token>[^/]+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_registration_confirm_finish;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\UserBundle\\Controller\\RegistrationController::confirmAction',)), array('_route' => 'fos_user_registration_confirm_finish'));
        }
        not_fos_user_registration_confirm_finish:

        // fos_user_resetting_reset
        if (0 === strpos($pathinfo, '/reset') && preg_match('#^/reset/(?<token>[^/]+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_resetting_reset;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\UserBundle\\Controller\\ResettingController::resetAction',)), array('_route' => 'fos_user_resetting_reset'));
        }
        not_fos_user_resetting_reset:

        // fos_user_resseting_success
        if ($pathinfo === '/reset-password-success') {
            return array (  '_controller' => 'Fenchy\\UserBundle\\Controller\\ResettingController::successAction',  '_route' => 'fos_user_resseting_success',);
        }

        // fenchy_user_friend
        if ($pathinfo === '/user/friend') {
            return array (  '_controller' => 'Fenchy\\UserBundle\\Controller\\FriendController::indexAction',  '_route' => 'fenchy_user_friend',);
        }

        // fenchy_user_friend_send_success
        if ($pathinfo === '/user/friend/send-success') {
            return array (  '_controller' => 'Fenchy\\UserBundle\\Controller\\FriendController::sendSuccessAction',  '_route' => 'fenchy_user_friend_send_success',);
        }

        // fenchy_user_friend_new_email
        if ($pathinfo === '/user/friend/new-email') {
            return array (  '_controller' => 'Fenchy\\UserBundle\\Controller\\FriendController::newEmailAction',  '_route' => 'fenchy_user_friend_new_email',);
        }

        // fenchy_user_friend_facebook
        if ($pathinfo === '/user/friend/facebook') {
            return array (  '_controller' => 'Fenchy\\UserBundle\\Controller\\FriendController::facebookAction',  '_route' => 'fenchy_user_friend_facebook',);
        }

        // fenchy_user_unsubscribe
        if (0 === strpos($pathinfo, '/user/unsubscribe') && preg_match('#^/user/unsubscribe(?:/(?<hashed_email>[^/]+))?$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\UserBundle\\Controller\\DefaultController::unsubscribeAction',  'hashed_email' => NULL,)), array('_route' => 'fenchy_user_unsubscribe'));
        }

        // fenchy_user_login
        if ($pathinfo === '/user/login') {
            return array (  '_controller' => 'Fenchy\\UserBundle\\Controller\\SecurityController::loginExtendedAction',  '_route' => 'fenchy_user_login',);
        }

        // fenchy_user_widget_test
        if ($pathinfo === '/user/widget/test') {
            return array (  '_controller' => 'Fenchy\\UserBundle\\Controller\\WidgetsController::testAction',  '_route' => 'fenchy_user_widget_test',);
        }

        // fenchy_frontend_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fenchy_frontend_homepage');
            }

            return array (  '_controller' => 'Fenchy\\FrontendBundle\\Controller\\FrontendController::indexv2Action',  '_route' => 'fenchy_frontend_homepage',);
        }

        // fenchy_frontend_indexv2
        if ($pathinfo === '/indexv2') {
            return array (  '_controller' => 'Fenchy\\FrontendBundle\\Controller\\FrontendController::indexV2Action',  '_route' => 'fenchy_frontend_indexv2',);
        }

        // fenchy_frontend_signin
        if ($pathinfo === '/signin') {
            return array (  '_controller' => 'Fenchy\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fenchy_frontend_signin',);
        }

        // fenchy_frontend_presignup
        if ($pathinfo === '/new_at_fenchy') {
            return array (  '_controller' => 'Fenchy\\FrontendBundle\\Controller\\FrontendController::preregisterAction',  '_route' => 'fenchy_frontend_presignup',);
        }

        // fenchy_frontend_signup
        if ($pathinfo === '/signup') {
            return array (  '_controller' => 'Fenchy\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fenchy_frontend_signup',);
        }

        // fenchy_frontend_about
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'Fenchy\\FrontendBundle\\Controller\\FrontendController::aboutAction',  '_route' => 'fenchy_frontend_about',);
        }

        // fenchy_frontend_imprint
        if ($pathinfo === '/imprint') {
            return array (  '_controller' => 'Fenchy\\FrontendBundle\\Controller\\FrontendController::imprintAction',  '_route' => 'fenchy_frontend_imprint',);
        }

        // fenchy_frontend_jobs
        if ($pathinfo === '/jobs') {
            return array (  '_controller' => 'Fenchy\\FrontendBundle\\Controller\\FrontendController::jobsAction',  '_route' => 'fenchy_frontend_jobs',);
        }

        // fenchy_frontend_languages
        if ($pathinfo === '/languages') {
            return array (  '_controller' => 'Fenchy\\FrontendBundle\\Controller\\FrontendController::languagesAction',  '_route' => 'fenchy_frontend_languages',);
        }

        // fenchy_frontend_privacy
        if ($pathinfo === '/privacy') {
            return array (  '_controller' => 'Fenchy\\FrontendBundle\\Controller\\FrontendController::privacyAction',  '_route' => 'fenchy_frontend_privacy',);
        }

        // fenchy_frontend_privacy_popup
        if ($pathinfo === '/privacypopup') {
            return array (  '_controller' => 'Fenchy\\FrontendBundle\\Controller\\FrontendController::privacyPopupAction',  '_route' => 'fenchy_frontend_privacy_popup',);
        }

        // fenchy_frontend_facebook
        if ($pathinfo === '/facebook') {
            return array (  '_controller' => 'Fenchy\\FrontendBundle\\Controller\\FrontendController::facebookAction',  '_route' => 'fenchy_frontend_facebook',);
        }

        // fenchy_frontend_advertising
        if ($pathinfo === '/advertising') {
            return array (  '_controller' => 'Fenchy\\FrontendBundle\\Controller\\FrontendController::advertisingAction',  '_route' => 'fenchy_frontend_advertising',);
        }

        // fenchy_frontend_terms
        if ($pathinfo === '/terms') {
            return array (  '_controller' => 'Fenchy\\FrontendBundle\\Controller\\FrontendController::termsAction',  '_route' => 'fenchy_frontend_terms',);
        }

        // fenchy_frontend_terms_popup
        if ($pathinfo === '/termspopup') {
            return array (  '_controller' => 'Fenchy\\FrontendBundle\\Controller\\FrontendController::termsPopupAction',  '_route' => 'fenchy_frontend_terms_popup',);
        }

        // fenchy_util_homepage
        if (0 === strpos($pathinfo, '/hellyeah') && preg_match('#^/hellyeah/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\UtilBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'fenchy_util_homepage'));
        }

        // fenchy_create_user_sticker
        if (0 === strpos($pathinfo, '/usersticker') && preg_match('#^/usersticker/(?<id>\\d+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\UtilBundle\\Controller\\StickerController::userStickerAction',)), array('_route' => 'fenchy_create_user_sticker'));
        }

        // fenchy_create_notice_sticker
        if (0 === strpos($pathinfo, '/noticesticker') && preg_match('#^/noticesticker/(?<id>\\d+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\UtilBundle\\Controller\\StickerController::noticeStickerAction',)), array('_route' => 'fenchy_create_notice_sticker'));
        }

        // fenchy_create_review_sticker
        if (0 === strpos($pathinfo, '/reviewsticker') && preg_match('#^/reviewsticker/(?<id>\\d+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Fenchy\\UtilBundle\\Controller\\StickerController::reviewStickerAction',)), array('_route' => 'fenchy_create_review_sticker'));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
