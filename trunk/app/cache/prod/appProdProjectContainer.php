<?php
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\Parameter;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
class appProdProjectContainer extends Container
{
    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();
        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();
        $this->set('service_container', $this);
        $this->scopes = array('request' => 'container');
        $this->scopeChildren = array('request' => array());
    }
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\FileCacheReader(new \Doctrine\Common\Annotations\AnnotationReader(), 'C:/xampp/htdocs/fenchy/trunk/app/cache/prod/annotations', false);
    }
    protected function getAssetic_AssetManagerService()
    {
        $this->services['assetic.asset_manager'] = $instance = new \Assetic\Factory\LazyAssetManager($this->get('assetic.asset_factory'), array('twig' => new \Assetic\Factory\Loader\CachedFormulaLoader(new \Assetic\Extension\Twig\TwigFormulaLoader($this->get('twig')), new \Assetic\Cache\ConfigCache('C:/xampp/htdocs/fenchy/trunk/app/cache/prod/assetic/config'), false)));
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($this->get('templating.loader'), '', 'C:/xampp/htdocs/fenchy/trunk/app/Resources/views', '/\\.[^.]+\\.twig$/'), 'twig');
        return $instance;
    }
    protected function getAssetic_Filter_CssrewriteService()
    {
        return $this->services['assetic.filter.cssrewrite'] = new \Assetic\Filter\CssRewriteFilter();
    }
    protected function getAssetic_FilterManagerService()
    {
        return $this->services['assetic.filter_manager'] = new \Symfony\Bundle\AsseticBundle\FilterManager($this, array('cssrewrite' => 'assetic.filter.cssrewrite'));
    }
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array());
    }
    protected function getCacheWarmerService()
    {
        $a = $this->get('kernel');
        $b = $this->get('templating.filename_parser');
        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, 'C:/xampp/htdocs/fenchy/trunk/app/Resources');
        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, $this->get('templating.locator')), 1 => new \Symfony\Bundle\AsseticBundle\CacheWarmer\AssetManagerCacheWarmer($this), 2 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('router')), 3 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer($this, $c), 4 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->get('doctrine')), 5 => new \JMS\DiExtraBundle\HttpKernel\ControllerInjectorsWarmer($a, $this->get('jms_di_extra.controller_resolver'))));
    }
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array('geography' => array('class' => 'Fenchy\\UtilBundle\\Types\\GeographyType', 'commented' => true), 'geometry' => array('class' => 'Fenchy\\UtilBundle\\Types\\GeometryType', 'commented' => true)));
    }
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = $this->get('annotation_reader');
        $b = new \Gedmo\SoftDeleteable\SoftDeleteableListener();
        $b->setAnnotationReader($a);
        $c = new \Gedmo\Timestampable\TimestampableListener();
        $c->setAnnotationReader($a);
        $d = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $d->addEventSubscriber($b);
        $d->addEventSubscriber($this->get('gedmo.listener.sluggable'));
        $d->addEventSubscriber($c);
        $d->addEventSubscriber(new \FOS\UserBundle\Entity\UserListener($this));
        $d->addEventListener(array(0 => 'prePersist'), $this->get('my.listener.notification'));
        $d->addEventListener(array(0 => 'postUpdate', 1 => 'prePersist'), $this->get('my.listener.reference'));
        return $this->services['doctrine.dbal.default_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('dbname' => 'fenchy', 'host' => 'localhost', 'port' => 5432, 'user' => 'postgres', 'password' => 'salam', 'charset' => 'UTF8', 'driver' => 'pdo_pgsql', 'driverOptions' => array()), new \Doctrine\DBAL\Configuration(), $d, array('geography' => 'geography', 'geometry' => 'geometry'));
    }
    protected function getDoctrine_Orm_DefaultEntityManagerService()
    {
        require_once 'C:/xampp/htdocs/fenchy/trunk/app/cache/prod/jms_diextra/doctrine/EntityManager_51bafa7b15f5e.php';
        $a = $this->get('annotation_reader');
        $b = new \Doctrine\Common\Cache\ArrayCache();
        $b->setNamespace('sf2orm_default_3adf072b0c2415ff8baf27a51c31070e');
        $c = new \Doctrine\Common\Cache\ArrayCache();
        $c->setNamespace('sf2orm_default_3adf072b0c2415ff8baf27a51c31070e');
        $d = new \Doctrine\Common\Cache\ArrayCache();
        $d->setNamespace('sf2orm_default_3adf072b0c2415ff8baf27a51c31070e');
        $e = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($a, array(0 => 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\gedmo\\doctrine-extensions\\lib\\Gedmo\\Translatable\\Entity', 1 => 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\gedmo\\doctrine-extensions\\lib\\Gedmo\\Translator\\Entity', 2 => 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\gedmo\\doctrine-extensions\\lib\\Gedmo\\Loggable\\Entity', 3 => 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\gedmo\\doctrine-extensions\\lib\\Gedmo\\Tree\\Entity', 4 => 'C:\\xampp\\htdocs\\fenchy\\trunk\\src\\Fenchy\\UserBundle\\Entity', 5 => 'C:\\xampp\\htdocs\\fenchy\\trunk\\src\\Fenchy\\RegularUserBundle\\Entity', 6 => 'C:\\xampp\\htdocs\\fenchy\\trunk\\src\\Fenchy\\GalleryBundle\\Entity', 7 => 'C:\\xampp\\htdocs\\fenchy\\trunk\\src\\Fenchy\\NoticeBundle\\Entity', 8 => 'C:\\xampp\\htdocs\\fenchy\\trunk\\src\\Fenchy\\MessageBundle\\Entity', 9 => 'C:\\xampp\\htdocs\\fenchy\\trunk\\src\\Fenchy\\UtilBundle\\Entity', 10 => 'C:\\xampp\\htdocs\\fenchy\\trunk\\src\\Fenchy\\AdminBundle\\Entity'));
        $f = new \Doctrine\ORM\Mapping\Driver\SimplifiedXmlDriver(array('C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\config\\doctrine' => 'FOS\\UserBundle\\Entity'));
        $f->setGlobalBasename('mapping');
        $g = new \Doctrine\ORM\Mapping\Driver\DriverChain();
        $g->addDriver($e, 'Gedmo\\Translatable\\Entity');
        $g->addDriver($e, 'Gedmo\\Translator\\Entity');
        $g->addDriver($e, 'Gedmo\\Loggable\\Entity');
        $g->addDriver($e, 'Gedmo\\Tree\\Entity');
        $g->addDriver($e, 'Fenchy\\UserBundle\\Entity');
        $g->addDriver($e, 'Fenchy\\RegularUserBundle\\Entity');
        $g->addDriver($e, 'Fenchy\\GalleryBundle\\Entity');
        $g->addDriver($e, 'Fenchy\\NoticeBundle\\Entity');
        $g->addDriver($e, 'Fenchy\\MessageBundle\\Entity');
        $g->addDriver($e, 'Fenchy\\UtilBundle\\Entity');
        $g->addDriver($e, 'Fenchy\\AdminBundle\\Entity');
        $g->addDriver($f, 'FOS\\UserBundle\\Entity');
        $h = new \Doctrine\ORM\Configuration();
        $h->setEntityNamespaces(array('Gedmo' => 'Gedmo\\Tree\\Entity', 'FOSUserBundle' => 'FOS\\UserBundle\\Entity', 'UserBundle' => 'Fenchy\\UserBundle\\Entity', 'FenchyRegularUserBundle' => 'Fenchy\\RegularUserBundle\\Entity', 'FenchyGalleryBundle' => 'Fenchy\\GalleryBundle\\Entity', 'FenchyNoticeBundle' => 'Fenchy\\NoticeBundle\\Entity', 'FenchyMessageBundle' => 'Fenchy\\MessageBundle\\Entity', 'FenchyUtilBundle' => 'Fenchy\\UtilBundle\\Entity', 'FenchyAdminBundle' => 'Fenchy\\AdminBundle\\Entity'));
        $h->setMetadataCacheImpl($b);
        $h->setQueryCacheImpl($c);
        $h->setResultCacheImpl($d);
        $h->setMetadataDriverImpl($g);
        $h->setProxyDir('C:/xampp/htdocs/fenchy/trunk/app/cache/prod/doctrine/orm/Proxies');
        $h->setProxyNamespace('Proxies');
        $h->setAutoGenerateProxyClasses(false);
        $h->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $h->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $h->setNamingStrategy(new \Doctrine\ORM\Mapping\DefaultNamingStrategy());
        $h->addCustomStringFunction('to_tsquery', 'Fenchy\\UtilBundle\\DQL\\ToTsQuery');
        $h->addCustomStringFunction('to_tsvector', 'Fenchy\\UtilBundle\\DQL\\ToTsVector');
        $h->addCustomStringFunction('ts_search', 'Fenchy\\UtilBundle\\DQL\\TsSearch');
        $h->addCustomStringFunction('ts_rank_cd', 'Fenchy\\UtilBundle\\DQL\\TsRankCd');
        $h->addCustomStringFunction('similarity', 'Fenchy\\UtilBundle\\DQL\\Similarity');
        $h->addCustomStringFunction('concatSB', 'Fenchy\\UtilBundle\\DQL\\ConcatSB');
        $h->addCustomStringFunction('geoDistance', 'Fenchy\\UtilBundle\\DQL\\GeoDistance');
        $h->addCustomStringFunction('date', 'Fenchy\\UtilBundle\\DQL\\Date');
        $h->addCustomStringFunction('postGIS_ST_Distance', 'Fenchy\\UtilBundle\\DQL\\PostGISSTDistance');
        $h->addCustomStringFunction('postGIS_ST_DWithin', 'Fenchy\\UtilBundle\\DQL\\PostGISSTDWithin');
        $h->addCustomStringFunction('postGIS_KNN_Operator', 'Fenchy\\UtilBundle\\DQL\\PostGISKNNOperator');
        $h->addFilter('softdeleteable', 'Gedmo\\SoftDeleteable\\Filter\\SoftDeleteableFilter');
        $i = call_user_func(array('Doctrine\\ORM\\EntityManager', 'create'), $this->get('doctrine.dbal.default_connection'), $h);
        $this->get('doctrine.orm.default_manager_configurator')->configure($i);
        return $this->services['doctrine.orm.default_entity_manager'] = new \EntityManager51bafa7b15f5e_546a8d27f194334ee012bfe64f629947b07e4919\__CG__\Doctrine\ORM\EntityManager($i, $this);
    }
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(0 => 'softdeleteable'));
    }
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator($this->get('doctrine'));
    }
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer($this->get('doctrine'));
    }
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);
        $instance->addListenerService('kernel.controller', array(0 => 'kernel.listener.locale_listener', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'security.firewall', 1 => 'onKernelRequest'), 8);
        $instance->addListenerService('kernel.response', array(0 => 'security.rememberme.response_listener', 1 => 'onKernelResponse'), 0);
        $instance->addListenerService('kernel.controller', array(0 => 'sensio_framework_extra.controller.listener', 1 => 'onKernelController'), 0);
        $instance->addListenerService('kernel.controller', array(0 => 'sensio_framework_extra.converter.listener', 1 => 'onKernelController'), 0);
        $instance->addListenerService('kernel.controller', array(0 => 'sensio_framework_extra.view.listener', 1 => 'onKernelController'), 0);
        $instance->addListenerService('kernel.view', array(0 => 'sensio_framework_extra.view.listener', 1 => 'onKernelView'), 0);
        $instance->addListenerService('kernel.response', array(0 => 'sensio_framework_extra.cache.listener', 1 => 'onKernelResponse'), 0);
        $instance->addListenerService('security.interactive_login', array(0 => 'fos_user.security.interactive_login_listener', 1 => 'onSecurityInteractiveLogin'), 0);
        $instance->addSubscriberService('response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('streamed_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener');
        $instance->addSubscriberService('locale_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener');
        $instance->addSubscriberService('session_listener', 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('twig.exception_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener');
        return $instance;
    }
    protected function getFenchy_Facebook_UserService()
    {
        return $this->services['fenchy.facebook.user'] = new \Fenchy\UserBundle\Security\User\Provider\FacebookProvider($this->get('fos_facebook.api'), $this->get('fos_user.user_manager'), $this->get('validator'), $this);
    }
    protected function getFenchy_Form_Type_BoolornullService()
    {
        return $this->services['fenchy.form.type.boolornull'] = new \Fenchy\UtilBundle\Form\Type\BoolOrNullType(array(0 => 'no', 1 => 'yes'));
    }
    protected function getFenchy_GalleryManagerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fenchy.gallery_manager', 'request');
        }
        return $this->services['fenchy.gallery_manager'] = $this->scopedServices['request']['fenchy.gallery_manager'] = new \Fenchy\GalleryBundle\Services\GalleryManager($this->get('request'), $this->get('doctrine'), $this->get('punk_ave.file_uploader'), $this->get('fenchy.reputation_counter'), 4, 4, 4);
    }
    protected function getFenchy_MessengerService()
    {
        return $this->services['fenchy.messenger'] = new \Fenchy\MessageBundle\Services\Messenger($this);
    }
    protected function getFenchy_ReputationCounterService()
    {
        return $this->services['fenchy.reputation_counter'] = new \Fenchy\UserBundle\Services\ReputationCounter(1, 1, 1, 5, 1, 0.25, 0.25, 0, 0, 0.25, 0, 0.25, 20);
    }
    protected function getFenchy_Twig_Extension_DebugService()
    {
        return $this->services['fenchy.twig.extension.debug'] = new \Twig_Extension_Debug();
    }
    protected function getFenchy_Twig_FenchyExtensionService()
    {
        return $this->services['fenchy.twig.fenchy_extension'] = new \Fenchy\UtilBundle\Twig\FenchyExtension($this);
    }
    protected function getFenchy_Type_HiddenUserService()
    {
        return $this->services['fenchy.type.hidden_user'] = new \Fenchy\MessageBundle\Form\HiddenUserType($this->get('doctrine.orm.default_entity_manager'));
    }
    protected function getFenchyDictionaryService()
    {
        return $this->services['fenchy_dictionary'] = new \Fenchy\NoticeBundle\Services\Dictionary(1, '/[\\s,]+/', '/[,]+/', $this->get('doctrine'));
    }
    protected function getFenchyUserbundle_Registration_Form_TypeService()
    {
        return $this->services['fenchy_userbundle.registration.form.type'] = new \Fenchy\UserBundle\Form\Type\RegistrationFormType('Fenchy\\UserBundle\\Entity\\User');
    }
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), 'C:/xampp/htdocs/fenchy/trunk/app/Resources');
    }
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }
    protected function getForm_CsrfProviderService()
    {
        return $this->services['form.csrf_provider'] = new \Symfony\Component\Form\Extension\Csrf\CsrfProvider\SessionCsrfProvider($this->get('session'), '3fdd10f551014c353d06f419e23f2aff36');
    }
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory($this->get('form.registry'), $this->get('form.resolved_type_factory'));
    }
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension($this, array('field' => 'form.type.field', 'form' => 'form.type.form', 'birthday' => 'form.type.birthday', 'checkbox' => 'form.type.checkbox', 'choice' => 'form.type.choice', 'collection' => 'form.type.collection', 'country' => 'form.type.country', 'date' => 'form.type.date', 'datetime' => 'form.type.datetime', 'email' => 'form.type.email', 'file' => 'form.type.file', 'hidden' => 'form.type.hidden', 'integer' => 'form.type.integer', 'language' => 'form.type.language', 'locale' => 'form.type.locale', 'money' => 'form.type.money', 'number' => 'form.type.number', 'password' => 'form.type.password', 'percent' => 'form.type.percent', 'radio' => 'form.type.radio', 'repeated' => 'form.type.repeated', 'search' => 'form.type.search', 'textarea' => 'form.type.textarea', 'text' => 'form.type.text', 'time' => 'form.type.time', 'timezone' => 'form.type.timezone', 'url' => 'form.type.url', 'entity' => 'form.type.entity', 'fos_user_username' => 'fos_user.username_form_type', 'fos_user_profile' => 'fos_user.profile.form.type', 'fos_user_registration' => 'fos_user.registration.form.type', 'fos_user_change_password' => 'fos_user.change_password.form.type', 'fos_user_resetting' => 'fos_user.resetting.form.type', 'fenchy_userbundle_registration' => 'fenchy_userbundle.registration.form.type', 'hidden_user' => 'fenchy.type.hidden_user', 'boolornull' => 'fenchy.form.type.boolornull'), array('form' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator', 2 => 'form.type_extension.csrf'), 'repeated' => array(0 => 'form.type_extension.repeated.validator')), array(0 => 'form.type_guesser.validator', 1 => 'form.type_guesser.doctrine'))), $this->get('form.resolved_type_factory'));
    }
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\ResolvedFormTypeFactory();
    }
    protected function getForm_Type_BirthdayService()
    {
        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }
    protected function getForm_Type_CheckboxService()
    {
        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType();
    }
    protected function getForm_Type_CollectionService()
    {
        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }
    protected function getForm_Type_CountryService()
    {
        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }
    protected function getForm_Type_DateService()
    {
        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }
    protected function getForm_Type_DatetimeService()
    {
        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }
    protected function getForm_Type_EmailService()
    {
        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType($this->get('doctrine'));
    }
    protected function getForm_Type_FieldService()
    {
        return $this->services['form.type.field'] = new \Symfony\Component\Form\Extension\Core\Type\FieldType();
    }
    protected function getForm_Type_FileService()
    {
        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType();
    }
    protected function getForm_Type_HiddenService()
    {
        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }
    protected function getForm_Type_IntegerService()
    {
        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }
    protected function getForm_Type_LanguageService()
    {
        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }
    protected function getForm_Type_LocaleService()
    {
        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }
    protected function getForm_Type_MoneyService()
    {
        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }
    protected function getForm_Type_NumberService()
    {
        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }
    protected function getForm_Type_PasswordService()
    {
        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }
    protected function getForm_Type_PercentService()
    {
        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }
    protected function getForm_Type_RadioService()
    {
        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }
    protected function getForm_Type_RepeatedService()
    {
        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }
    protected function getForm_Type_SearchService()
    {
        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }
    protected function getForm_Type_TextService()
    {
        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }
    protected function getForm_Type_TextareaService()
    {
        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }
    protected function getForm_Type_TimeService()
    {
        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }
    protected function getForm_Type_TimezoneService()
    {
        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }
    protected function getForm_Type_UrlService()
    {
        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension($this->get('form.csrf_provider'), true, '_token');
    }
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension();
    }
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension($this->get('validator'));
    }
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser($this->get('doctrine'));
    }
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($this->get('validator.mapping.class_metadata_factory'));
    }
    protected function getFosFacebook_ApiService()
    {
        return $this->services['fos_facebook.api'] = new \FOS\FacebookBundle\Facebook\FacebookSessionPersistence(array('appId' => '290893684349911', 'secret' => 'fbf887b69445ca240b5431d5407b667c', 'cookie' => true, 'domain' => NULL), $this->get('session'));
    }
    protected function getFosFacebook_HelperService()
    {
        return $this->services['fos_facebook.helper'] = new \FOS\FacebookBundle\Templating\Helper\FacebookHelper($this->get('templating'), $this->get('fos_facebook.api'), false, 'en_US', array(0 => 'email', 1 => 'user_birthday', 2 => 'user_location'));
    }
    protected function getFosFacebook_TwigService()
    {
        return $this->services['fos_facebook.twig'] = new \FOS\FacebookBundle\Twig\Extension\FacebookExtension($this);
    }
    protected function getFosTwitter_Anywhere_HelperService()
    {
        return $this->services['fos_twitter.anywhere.helper'] = new \FOS\TwitterBundle\Templating\Helper\TwitterAnywhereHelper($this->get('templating'), 'Jj087NLI2eF0FTbLGFqPDw', '1');
    }
    protected function getFosTwitter_Anywhere_TwigService()
    {
        return $this->services['fos_twitter.anywhere.twig'] = new \FOS\TwitterBundle\Twig\Extension\TwitterAnywhereExtension($this);
    }
    protected function getFosTwitter_ApiService()
    {
        require_once 'C:/xampp/htdocs/fenchy/trunk/app/../vendor/kertz/twitteroauth/twitteroauth/twitteroauth.php';
        return $this->services['fos_twitter.api'] = new \TwitterOAuth('Jj087NLI2eF0FTbLGFqPDw', 'mJYZxB06m787FPcgj64ZBLujRrstyadKp0Q3e0ZAdo', NULL, NULL);
    }
    protected function getFosTwitter_ServiceService()
    {
        return $this->services['fos_twitter.service'] = new \FOS\TwitterBundle\Services\Twitter($this->get('fos_twitter.api'), $this->get('session'), 'http://fenchy/twitter/login_check');
    }
    protected function getFosUser_ChangePassword_FormService()
    {
        return $this->services['fos_user.change_password.form'] = $this->get('form.factory')->createNamed('fos_user_change_password_form', 'fos_user_change_password', NULL, array('validation_groups' => array(0 => 'ChangePassword', 1 => 'Default')));
    }
    protected function getFosUser_ChangePassword_Form_Handler_DefaultService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.change_password.form.handler.default', 'request');
        }
        return $this->services['fos_user.change_password.form.handler.default'] = $this->scopedServices['request']['fos_user.change_password.form.handler.default'] = new \FOS\UserBundle\Form\Handler\ChangePasswordFormHandler($this->get('fos_user.change_password.form'), $this->get('request'), $this->get('fos_user.user_manager'));
    }
    protected function getFosUser_ChangePassword_Form_TypeService()
    {
        return $this->services['fos_user.change_password.form.type'] = new \FOS\UserBundle\Form\Type\ChangePasswordFormType();
    }
    protected function getFosUser_MailerService()
    {
        return $this->services['fos_user.mailer'] = new \FOS\UserBundle\Mailer\TwigSwiftMailer($this->get('mailer'), $this->get('router'), $this->get('twig'), array('template' => array('confirmation' => 'UserBundle:Registration:email.html.twig', 'resetting' => 'UserBundle:Resetting:email.html.twig'), 'from_email' => array('confirmation' => array('vosiem8@gmail.com' => 'Fenchy Robot'), 'resetting' => array('vosiem8@gmail.com' => 'Fenchy Robot'))));
    }
    protected function getFosUser_Profile_FormService()
    {
        return $this->services['fos_user.profile.form'] = $this->get('form.factory')->createNamed('fos_user_profile_form', 'fos_user_profile', NULL, array('validation_groups' => array(0 => 'Profile', 1 => 'Default')));
    }
    protected function getFosUser_Profile_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.profile.form.handler', 'request');
        }
        return $this->services['fos_user.profile.form.handler'] = $this->scopedServices['request']['fos_user.profile.form.handler'] = new \FOS\UserBundle\Form\Handler\ProfileFormHandler($this->get('fos_user.profile.form'), $this->get('request'), $this->get('fos_user.user_manager'));
    }
    protected function getFosUser_Profile_Form_TypeService()
    {
        return $this->services['fos_user.profile.form.type'] = new \FOS\UserBundle\Form\Type\ProfileFormType('Fenchy\\UserBundle\\Entity\\User');
    }
    protected function getFosUser_Registration_FormService()
    {
        return $this->services['fos_user.registration.form'] = $this->get('form.factory')->createNamed('registration', 'fenchy_userbundle_registration', NULL, array('validation_groups' => array(0 => 'Registration', 1 => 'Default')));
    }
    protected function getFosUser_Registration_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.registration.form.handler', 'request');
        }
        return $this->services['fos_user.registration.form.handler'] = $this->scopedServices['request']['fos_user.registration.form.handler'] = new \Fenchy\UserBundle\Form\Handler\RegistrationFormHandler($this->get('fos_user.registration.form'), $this->get('request'), $this->get('fos_user.user_manager'), $this->get('fos_user.mailer'), $this->get('fos_user.util.token_generator'));
    }
    protected function getFosUser_Registration_Form_TypeService()
    {
        return $this->services['fos_user.registration.form.type'] = new \FOS\UserBundle\Form\Type\RegistrationFormType('Fenchy\\UserBundle\\Entity\\User');
    }
    protected function getFosUser_Resetting_FormService()
    {
        return $this->services['fos_user.resetting.form'] = $this->get('form.factory')->createNamed('fos_user_resetting_form', 'fos_user_resetting', NULL, array('validation_groups' => array(0 => 'ResetPassword', 1 => 'Default')));
    }
    protected function getFosUser_Resetting_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.resetting.form.handler', 'request');
        }
        return $this->services['fos_user.resetting.form.handler'] = $this->scopedServices['request']['fos_user.resetting.form.handler'] = new \FOS\UserBundle\Form\Handler\ResettingFormHandler($this->get('fos_user.resetting.form'), $this->get('request'), $this->get('fos_user.user_manager'));
    }
    protected function getFosUser_Resetting_Form_TypeService()
    {
        return $this->services['fos_user.resetting.form.type'] = new \FOS\UserBundle\Form\Type\ResettingFormType();
    }
    protected function getFosUser_Security_InteractiveLoginListenerService()
    {
        return $this->services['fos_user.security.interactive_login_listener'] = new \FOS\UserBundle\Security\InteractiveLoginListener($this->get('fos_user.user_manager'));
    }
    protected function getFosUser_Security_LoginManagerService()
    {
        return $this->services['fos_user.security.login_manager'] = new \FOS\UserBundle\Security\LoginManager($this->get('security.context'), $this->get('security.user_checker'), $this->get('security.authentication.session_strategy'), $this);
    }
    protected function getFosUser_UserManagerService()
    {
        $a = $this->get('fos_user.util.email_canonicalizer');
        return $this->services['fos_user.user_manager'] = new \FOS\UserBundle\Doctrine\UserManager($this->get('security.encoder_factory'), $a, $a, $this->get('fos_user.entity_manager'), 'Fenchy\\UserBundle\\Entity\\User');
    }
    protected function getFosUser_UsernameFormTypeService()
    {
        return $this->services['fos_user.username_form_type'] = new \FOS\UserBundle\Form\Type\UsernameFormType(new \FOS\UserBundle\Form\DataTransformer\UserToUsernameTransformer($this->get('fos_user.user_manager')));
    }
    protected function getFosUser_Util_EmailCanonicalizerService()
    {
        return $this->services['fos_user.util.email_canonicalizer'] = new \FOS\UserBundle\Util\Canonicalizer();
    }
    protected function getFosUser_Util_TokenGeneratorService()
    {
        return $this->services['fos_user.util.token_generator'] = new \FOS\UserBundle\Util\TokenGenerator($this->get('logger'));
    }
    protected function getFosUser_Util_UserManipulatorService()
    {
        return $this->services['fos_user.util.user_manipulator'] = new \FOS\UserBundle\Util\UserManipulator($this->get('fos_user.user_manager'));
    }
    protected function getGedmo_Listener_SluggableService()
    {
        $this->services['gedmo.listener.sluggable'] = $instance = new \Gedmo\Sluggable\SluggableListener();
        $instance->setAnnotationReader($this->get('annotation_reader'));
        return $instance;
    }
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Bundle\FrameworkBundle\HttpKernel($this->get('event_dispatcher'), $this, $this->get('jms_di_extra.controller_resolver'));
    }
    protected function getJmsAop_InterceptorLoaderService()
    {
        return $this->services['jms_aop.interceptor_loader'] = new \JMS\AopBundle\Aop\InterceptorLoader($this, array());
    }
    protected function getJmsAop_PointcutContainerService()
    {
        return $this->services['jms_aop.pointcut_container'] = new \JMS\AopBundle\Aop\PointcutContainer(array('security.access.method_interceptor' => $this->get('security.access.pointcut')));
    }
    protected function getJmsDiExtra_Metadata_ConverterService()
    {
        return $this->services['jms_di_extra.metadata.converter'] = new \JMS\DiExtraBundle\Metadata\MetadataConverter();
    }
    protected function getJmsDiExtra_Metadata_MetadataFactoryService()
    {
        $this->services['jms_di_extra.metadata.metadata_factory'] = $instance = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver($this, 'jms_di_extra.metadata_driver'), 'Metadata\\ClassHierarchyMetadata', false);
        $instance->setCache(new \Metadata\Cache\FileCache('C:/xampp/htdocs/fenchy/trunk/app/cache/prod/jms_diextra/metadata'));
        return $instance;
    }
    protected function getJmsDiExtra_MetadataDriverService()
    {
        return $this->services['jms_di_extra.metadata_driver'] = new \JMS\DiExtraBundle\Metadata\Driver\AnnotationDriver($this->get('annotation_reader'));
    }
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }
    protected function getKernel_Listener_LocaleListenerService()
    {
        return $this->services['kernel.listener.locale_listener'] = new \Fenchy\FrontendBundle\Listener\LocaleListener($this);
    }
    protected function getListfilterService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('listfilter', 'request');
        }
        return $this->services['listfilter'] = $this->scopedServices['request']['listfilter'] = new \Fenchy\NoticeBundle\Services\ListFilter($this, $this->get('doctrine'), $this->get('request'), 0.7, 0.25, $this->get('fenchy_dictionary'));
    }
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener('en', $this->get('router'));
    }
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMailerService()
    {
        return $this->services['mailer'] = new \Swift_Mailer($this->get('swiftmailer.transport'));
    }
    protected function getMonolog_Handler_MainService()
    {
        return $this->services['monolog.handler.main'] = new \Monolog\Handler\FingersCrossedHandler($this->get('monolog.handler.nested'), 400, 0, true, true);
    }
    protected function getMonolog_Handler_NestedService()
    {
        return $this->services['monolog.handler.nested'] = new \Monolog\Handler\StreamHandler('C:/xampp/htdocs/fenchy/trunk/app/logs/prod.log', 100, true);
    }
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMy_Listener_NotificationService()
    {
        return $this->services['my.listener.notification'] = new \Fenchy\UserBundle\Listener\UserNotificationListener();
    }
    protected function getMy_Listener_ReferenceService()
    {
        return $this->services['my.listener.reference'] = new \Fenchy\UserBundle\Listener\UserReferenceListener();
    }
    protected function getMy_Registration_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('my.registration.form.handler', 'request');
        }
        return $this->services['my.registration.form.handler'] = $this->scopedServices['request']['my.registration.form.handler'] = new \Fenchy\UserBundle\Form\Handler\RegistrationFormHandler($this->get('fos_user.registration.form'), $this->get('request'), $this->get('fos_user.user_manager'), $this->get('fos_user.mailer'), $this->get('fos_user.util.token_generator'));
    }
    protected function getMy_Twitter_Registration_Form_HandlerService()
    {
        return $this->services['my.twitter.registration.form.handler'] = new \Fenchy\UserBundle\Form\Handler\TwitterFormHandler($this->get('my.twitter.user'), $this->get('fos_user.mailer'), $this->get('fos_user.util.token_generator'));
    }
    protected function getMy_Twitter_UserService()
    {
        $a = $this->get('fos_user.util.email_canonicalizer');
        return $this->services['my.twitter.user'] = new \Fenchy\UserBundle\Security\User\Provider\TwitterProvider($this->get('fos_twitter.api'), $this->get('validator'), $this->get('session'), $this->get('logger'), $this->get('security.encoder_factory'), $a, $a, $this->get('fos_user.entity_manager'), 'Fenchy\\UserBundle\\Entity\\User');
    }
    protected function getPunkAve_FileUploaderService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('punk_ave.file_uploader', 'request');
        }
        return $this->services['punk_ave.file_uploader'] = $this->scopedServices['request']['punk_ave.file_uploader'] = new \Fenchy\GalleryBundle\Services\FileUploader(array('file_base_path' => 'C:/xampp/htdocs/fenchy/trunk/app/../web/uploads', 'web_base_path' => '/uploads', 'request' => $this->get('request'), 'file_manager' => $this->get('punk_ave.file_uploader_file_manager'), 'allowed_extensions' => array(0 => 'gif', 1 => 'png', 2 => 'jpg', 3 => 'jpeg'), 'sizes' => array('thumbnail' => array('folder' => 'thumbnail', 'max_width' => 124), 'medium' => array('folder' => 'medium', 'max_width' => 710, 'max_height' => 330)), 'originals' => array('folder' => 'originals'), 'crop' => array('small' => array('folder' => 'crop_small', 'width' => 60, 'height' => 60), 'big' => array('folder' => 'crop_big', 'width' => 212, 'height' => 212))));
    }
    protected function getPunkAve_FileUploaderFileManagerService()
    {
        return $this->services['punk_ave.file_uploader_file_manager'] = new \Fenchy\GalleryBundle\Services\FileManager(array('file_base_path' => 'C:/xampp/htdocs/fenchy/trunk/app/../web/uploads'));
    }
    protected function getRequestService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('request', 'request');
        }
        throw new RuntimeException('You have requested a synthetic service ("request"). The DIC does not know how to construct this service.');
    }
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }
    protected function getRouterService()
    {
        return $this->services['router'] = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, 'C:/xampp/htdocs/fenchy/trunk/app/config/routing.yml', array('cache_dir' => 'C:/xampp/htdocs/fenchy/trunk/app/cache/prod', 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appprodUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appprodUrlMatcher', 'strict_requirements' => false), $this->get('router.request_context'), $this->get('monolog.logger.router'));
    }
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('router'), $this->get('router.request_context'), $this->get('monolog.logger.request'));
    }
    protected function getRouting_LoaderService()
    {
        $a = $this->get('file_locator');
        $b = $this->get('annotation_reader');
        $c = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($b);
        $d = new \Symfony\Component\Config\Loader\LoaderResolver();
        $d->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $c));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $c));
        $d->addLoader($c);
        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($this->get('controller_name_converter'), $this->get('monolog.logger.router'), $d);
    }
    protected function getSecurity_Access_MethodInterceptorService()
    {
        return $this->services['security.access.method_interceptor'] = new \JMS\SecurityExtraBundle\Security\Authorization\Interception\MethodSecurityInterceptor($this->get('security.context'), $this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), new \JMS\SecurityExtraBundle\Security\Authorization\AfterInvocation\AfterInvocationManager(array()), new \JMS\SecurityExtraBundle\Security\Authorization\RunAsManager('RunAsToken', 'ROLE_'), $this->get('security.extra.metadata_factory'), $this->get('monolog.logger.security'));
    }
    protected function getSecurity_Access_PointcutService()
    {
        $this->services['security.access.pointcut'] = $instance = new \JMS\SecurityExtraBundle\Security\Authorization\Interception\SecurityPointcut($this->get('security.extra.metadata_factory'), false, array());
        $instance->setSecuredClasses(array());
        return $instance;
    }
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }
    protected function getSecurity_ContextService()
    {
        return $this->services['security.context'] = new \Symfony\Component\Security\Core\SecurityContext($this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), true);
    }
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('Symfony\\Component\\Security\\Core\\User\\User' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder', 'arguments' => array(0 => false)), 'FOS\\UserBundle\\Model\\UserInterface' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder', 'arguments' => array(0 => 'sha512', 1 => true, 2 => 5000))));
    }
    protected function getSecurity_Expressions_CompilerService()
    {
        $a = new \JMS\SecurityExtraBundle\Security\Authorization\Expression\Compiler\ContainerAwareVariableCompiler();
        $a->setMaps(array('trust_resolver' => 'security.authentication.trust_resolver', 'role_hierarchy' => 'security.role_hierarchy', 'permission_evaluator' => 'security.acl.permission_evaluator'), array());
        $this->services['security.expressions.compiler'] = $instance = new \JMS\SecurityExtraBundle\Security\Authorization\Expression\ExpressionCompiler();
        $instance->addFunctionCompiler(new \JMS\SecurityExtraBundle\Security\Acl\Expression\HasPermissionFunctionCompiler());
        $instance->addTypeCompiler(new \JMS\SecurityExtraBundle\Security\Authorization\Expression\Compiler\ParameterExpressionCompiler());
        $instance->addTypeCompiler($a);
        return $instance;
    }
    protected function getSecurity_Extra_MetadataDriverService()
    {
        return $this->services['security.extra.metadata_driver'] = new \Metadata\Driver\DriverChain(array(0 => new \JMS\SecurityExtraBundle\Metadata\Driver\AnnotationDriver($this->get('annotation_reader'))));
    }
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Component\Security\Http\Firewall(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap($this, array('security.firewall.map.context.dev' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/'), 'security.firewall.map.context.login' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/demo/secured/login$'), 'security.firewall.map.context.secured_area' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/demo/secured/'), 'security.firewall.map.context.main' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/'), 'security.firewall.map.context.secured' => new \Symfony\Component\HttpFoundation\RequestMatcher('/secured/.*'), 'security.firewall.map.context.public' => new \Symfony\Component\HttpFoundation\RequestMatcher('/'))), $this->get('event_dispatcher'));
    }
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->services['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL);
    }
    protected function getSecurity_Firewall_Map_Context_LoginService()
    {
        return $this->services['security.firewall.map.context.login'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL);
    }
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        $a = $this->get('security.context');
        $b = $this->get('monolog.logger.security');
        $c = $this->get('event_dispatcher');
        $d = $this->get('security.http_utils');
        $e = $this->get('http_kernel');
        $f = new \Symfony\Component\Security\Http\Firewall\LogoutListener($a, $d, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($d, '/indexv2'), array('csrf_parameter' => '_csrf_token', 'intention' => 'logout', 'logout_path' => '/logout'));
        $f->addHandler($this->get('security.logout.handler.session'));
        $g = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($d, array('default_target_path' => '/listings', 'login_path' => '/user/login', 'always_use_default_target_path' => false, 'target_path_parameter' => '_target_path', 'use_referer' => false));
        $g->setProviderKey('main');
        return $this->services['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($a, array(0 => $this->get('security.user.provider.concrete.in_memory'), 1 => $this->get('fos_user.user_provider.username_email'), 2 => $this->get('my.twitter.user')), 'main', $b, $c), 2 => $f, 3 => new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($a, $this->get('security.authentication.manager'), $this->get('security.authentication.session_strategy'), $d, 'main', $g, new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($e, $d, array('login_path' => '/user/login', 'failure_path' => NULL, 'failure_forward' => false), $b), array('check_path' => '/login_check', 'use_forward' => false, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'intention' => 'authenticate', 'post_only' => true), $b, $c, $this->get('form.csrf_provider')), 4 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($a, '51bafa7a58718', $b), 5 => $this->get('security.access_listener')), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, $this->get('security.authentication.trust_resolver'), $d, 'main', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($e, $d, '/user/login', false), NULL, NULL, $b));
    }
    protected function getSecurity_Firewall_Map_Context_PublicService()
    {
        $a = $this->get('security.context');
        $b = $this->get('monolog.logger.security');
        $c = $this->get('event_dispatcher');
        $d = $this->get('security.http_utils');
        $e = new \Symfony\Component\Security\Http\Firewall\LogoutListener($a, $d, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($d, '/'), array('csrf_parameter' => '_csrf_token', 'intention' => 'logout', 'logout_path' => '/logout'));
        $e->addHandler($this->get('security.logout.handler.session'));
        $f = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($d, array('login_path' => '/user/login', 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path', 'use_referer' => false));
        $f->setProviderKey('public');
        $g = new \FOS\TwitterBundle\Security\Firewall\TwitterListener($a, $this->get('security.authentication.manager'), $this->get('security.authentication.session_strategy'), $d, 'public', $f, new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($this->get('http_kernel'), $d, array('login_path' => '/user/login', 'failure_path' => NULL, 'failure_forward' => false), $b), array('check_path' => '/login_check', 'use_twitter_anywhere' => true, 'use_forward' => false, 'create_user_if_not_exists' => false), $b, $c);
        $g->setUseTwitterAnywhere(true);
        return $this->services['security.firewall.map.context.public'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($a, array(0 => $this->get('security.user.provider.concrete.in_memory'), 1 => $this->get('fos_user.user_provider.username_email'), 2 => $this->get('my.twitter.user')), 'public', $b, $c), 2 => $e, 3 => $g, 4 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($a, '51bafa7a58718', $b), 5 => $this->get('security.access_listener')), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, $this->get('security.authentication.trust_resolver'), $d, 'public', new \FOS\TwitterBundle\Security\EntryPoint\TwitterAuthenticationEntryPoint($this->get('fos_twitter.service')), NULL, NULL, $b));
    }
    protected function getSecurity_Firewall_Map_Context_SecuredService()
    {
        $a = $this->get('security.context');
        $b = $this->get('monolog.logger.security');
        $c = $this->get('event_dispatcher');
        $d = $this->get('security.http_utils');
        $e = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($d, array('always_use_default_target_path' => false, 'default_target_path' => '/', 'login_path' => '/login', 'target_path_parameter' => '_target_path', 'use_referer' => false));
        $e->setProviderKey('secured');
        return $this->services['security.firewall.map.context.secured'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($a, array(0 => $this->get('security.user.provider.concrete.in_memory'), 1 => $this->get('fos_user.user_provider.username_email'), 2 => $this->get('my.twitter.user')), 'secured', $b, $c), 2 => new \FOS\TwitterBundle\Security\Firewall\TwitterListener($a, $this->get('security.authentication.manager'), $this->get('security.authentication.session_strategy'), $d, 'secured', $e, new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($this->get('http_kernel'), $d, array('login_path' => '/login', 'failure_path' => NULL, 'failure_forward' => false), $b), array('check_path' => '/login_check', 'use_forward' => false, 'use_twitter_anywhere' => false, 'create_user_if_not_exists' => false), $b, $c), 3 => $this->get('security.access_listener')), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, $this->get('security.authentication.trust_resolver'), $d, 'secured', new \FOS\TwitterBundle\Security\EntryPoint\TwitterAuthenticationEntryPoint($this->get('fos_twitter.service')), NULL, NULL, $b));
    }
    protected function getSecurity_Firewall_Map_Context_SecuredAreaService()
    {
        $a = $this->get('security.context');
        $b = $this->get('monolog.logger.security');
        $c = $this->get('event_dispatcher');
        $d = $this->get('security.http_utils');
        $e = $this->get('http_kernel');
        $f = new \Symfony\Component\Security\Http\Firewall\LogoutListener($a, $d, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($d, '/demo/'), array('csrf_parameter' => '_csrf_token', 'intention' => 'logout', 'logout_path' => '/demo/secured/logout'));
        $f->addHandler($this->get('security.logout.handler.session'));
        $g = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($d, array('login_path' => '/demo/secured/login', 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path', 'use_referer' => false));
        $g->setProviderKey('secured_area');
        return $this->services['security.firewall.map.context.secured_area'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($a, array(0 => $this->get('security.user.provider.concrete.in_memory'), 1 => $this->get('fos_user.user_provider.username_email'), 2 => $this->get('my.twitter.user')), 'secured_area', $b, $c), 2 => $f, 3 => new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($a, $this->get('security.authentication.manager'), $this->get('security.authentication.session_strategy'), $d, 'secured_area', $g, new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($e, $d, array('login_path' => '/demo/secured/login', 'failure_path' => NULL, 'failure_forward' => false), $b), array('check_path' => '/demo/secured/login_check', 'use_forward' => false, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'intention' => 'authenticate', 'post_only' => true), $b, $c), 4 => $this->get('security.access_listener')), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, $this->get('security.authentication.trust_resolver'), $d, 'secured_area', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($e, $d, '/demo/secured/login', false), NULL, NULL, $b));
    }
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array('ROLE_FULL_USER' => array(0 => 'ROLE_USER'), 'ROLE_ADMIN' => array(0 => 'ROLE_FULL_USER'), 'ROLE_SUPER_ADMIN' => array(0 => 'ROLE_ADMIN')));
    }
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraint\UserPasswordValidator($this->get('security.context'), $this->get('security.encoder_factory'));
    }
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\CacheListener();
    }
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener($this->get('annotation_reader'));
    }
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter($this->get('doctrine'));
    }
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($this->get('sensio_framework_extra.converter.manager'));
    }
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();
        $instance->add($this->get('sensio_framework_extra.converter.doctrine.orm'), 0, 'doctrine.orm');
        $instance->add($this->get('sensio_framework_extra.converter.datetime'), 0, 'datetime');
        return $instance;
    }
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->services['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser($this->get('kernel'));
    }
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session($this->get('session.storage.native'), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }
    protected function getSession_HandlerService()
    {
        return $this->services['session.handler'] = new \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler('C:/xampp/htdocs/fenchy/trunk/app/cache/prod/sessions');
    }
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage('C:/xampp/htdocs/fenchy/trunk/app/cache/prod/sessions');
    }
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array(), $this->get('session.handler'));
    }
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this);
    }
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }
    protected function getSwiftmailer_Plugin_MessageloggerService()
    {
        return $this->services['swiftmailer.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger();
    }
    protected function getSwiftmailer_SpoolService()
    {
        return $this->services['swiftmailer.spool'] = new \Swift_FileSpool('C:/xampp/htdocs/fenchy/trunk/app/Spool');
    }
    protected function getSwiftmailer_TransportService()
    {
        $this->services['swiftmailer.transport'] = $instance = new \Swift_Transport_SpoolTransport($this->get('swiftmailer.transport.eventdispatcher'), $this->get('swiftmailer.spool'));
        $instance->registerPlugin(new \Swift_Plugins_AntiFloodPlugin(1000, 0));
        return $instance;
    }
    protected function getSwiftmailer_Transport_RealService()
    {
        $this->services['swiftmailer.transport.real'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()))), $this->get('swiftmailer.transport.eventdispatcher'));
        $instance->setHost('smtp.googlemail.com');
        $instance->setPort(465);
        $instance->setEncryption('ssl');
        $instance->setUsername('vosiem8@gmail.com');
        $instance->setPassword('info12345678');
        $instance->setAuthMode('login');
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);
        return $instance;
    }
    protected function getTemplatingService()
    {
        $this->services['templating'] = $instance = new \Symfony\Bundle\TwigBundle\TwigEngine($this->get('twig'), $this->get('templating.name_parser'), $this->get('templating.locator'), $this->get('templating.globals'));
        $instance->setDefaultEscapingStrategy(array(0 => $instance, 1 => 'guessDefaultEscapingStrategy'));
        return $instance;
    }
    protected function getTemplating_Asset_PackageFactoryService()
    {
        return $this->services['templating.asset.package_factory'] = new \Symfony\Bundle\FrameworkBundle\Templating\Asset\PackageFactory($this);
    }
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }
    protected function getTemplating_GlobalsService()
    {
        return $this->services['templating.globals'] = new \Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables($this);
    }
    protected function getTemplating_Helper_ActionsService()
    {
        return $this->services['templating.helper.actions'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper($this->get('http_kernel'));
    }
    protected function getTemplating_Helper_AssetsService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('templating.helper.assets', 'request');
        }
        return $this->services['templating.helper.assets'] = $this->scopedServices['request']['templating.helper.assets'] = new \Symfony\Component\Templating\Helper\CoreAssetsHelper(new \Symfony\Bundle\FrameworkBundle\Templating\Asset\PathPackage($this->get('request'), NULL, '%s?%s'), array());
    }
    protected function getTemplating_Helper_CodeService()
    {
        return $this->services['templating.helper.code'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper(NULL, 'C:/xampp/htdocs/fenchy/trunk/app', 'UTF-8');
    }
    protected function getTemplating_Helper_FormService()
    {
        $a = new \Symfony\Bundle\FrameworkBundle\Templating\PhpEngine($this->get('templating.name_parser'), $this, $this->get('templating.loader'), $this->get('templating.globals'));
        $a->setCharset('UTF-8');
        $a->setHelpers(array('slots' => 'templating.helper.slots', 'assets' => 'templating.helper.assets', 'request' => 'templating.helper.request', 'session' => 'templating.helper.session', 'router' => 'templating.helper.router', 'actions' => 'templating.helper.actions', 'code' => 'templating.helper.code', 'translator' => 'templating.helper.translator', 'form' => 'templating.helper.form', 'logout_url' => 'templating.helper.logout_url', 'security' => 'templating.helper.security', 'assetic' => 'assetic.helper.static', 'twitter_anywhere' => 'fos_twitter.anywhere.helper', 'facebook' => 'fos_facebook.helper'));
        return $this->services['templating.helper.form'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper(new \Symfony\Component\Form\FormRenderer(new \Symfony\Component\Form\Extension\Templating\TemplatingRendererEngine($a, array(0 => 'FrameworkBundle:Form')), $this->get('form.csrf_provider')));
    }
    protected function getTemplating_Helper_LogoutUrlService()
    {
        $this->services['templating.helper.logout_url'] = $instance = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper($this, $this->get('router'));
        $instance->registerListener('secured_area', '/demo/secured/logout', 'logout', '_csrf_token', NULL);
        $instance->registerListener('main', '/logout', 'logout', '_csrf_token', NULL);
        $instance->registerListener('public', '/logout', 'logout', '_csrf_token', NULL);
        return $instance;
    }
    protected function getTemplating_Helper_RequestService()
    {
        return $this->services['templating.helper.request'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper($this->get('request'));
    }
    protected function getTemplating_Helper_RouterService()
    {
        return $this->services['templating.helper.router'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper($this->get('router'));
    }
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper($this->get('security.context'));
    }
    protected function getTemplating_Helper_SessionService()
    {
        return $this->services['templating.helper.session'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper($this->get('request'));
    }
    protected function getTemplating_Helper_SlotsService()
    {
        return $this->services['templating.helper.slots'] = new \Symfony\Component\Templating\Helper\SlotsHelper();
    }
    protected function getTemplating_Helper_TranslatorService()
    {
        return $this->services['templating.helper.translator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper($this->get('translator.default'));
    }
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader($this->get('templating.locator'));
    }
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();
        $instance->addExtractor('php', $this->get('translation.extractor.php'));
        $instance->addExtractor('twig', $this->get('twig.translation.extractor'));
        return $instance;
    }
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }
    protected function getTranslation_LoaderService()
    {
        $a = $this->get('translation.loader.xliff');
        $this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();
        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        return $instance;
    }
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtTranslationsLoader();
    }
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();
        $instance->addDumper('php', $this->get('translation.dumper.php'));
        $instance->addDumper('xlf', $this->get('translation.dumper.xliff'));
        $instance->addDumper('po', $this->get('translation.dumper.po'));
        $instance->addDumper('mo', $this->get('translation.dumper.mo'));
        $instance->addDumper('yml', $this->get('translation.dumper.yml'));
        $instance->addDumper('ts', $this->get('translation.dumper.qt'));
        $instance->addDumper('csv', $this->get('translation.dumper.csv'));
        $instance->addDumper('ini', $this->get('translation.dumper.ini'));
        $instance->addDumper('res', $this->get('translation.dumper.res'));
        return $instance;
    }
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, new \Symfony\Component\Translation\MessageSelector(), array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini')), array('cache_dir' => 'C:/xampp/htdocs/fenchy/trunk/app/cache/prod/translations', 'debug' => false));
        $instance->setFallbackLocale('en');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.bg.xlf', 'bg', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ca.xlf', 'ca', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.cs.xlf', 'cs', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.da.xlf', 'da', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.de.xlf', 'de', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.en.xlf', 'en', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.es.xlf', 'es', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.et.xlf', 'et', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.eu.xlf', 'eu', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fa.xlf', 'fa', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fi.xlf', 'fi', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fr.xlf', 'fr', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.he.xlf', 'he', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hr.xlf', 'hr', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hu.xlf', 'hu', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hy.xlf', 'hy', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.id.xlf', 'id', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.it.xlf', 'it', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ja.xlf', 'ja', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.lb.xlf', 'lb', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.lt.xlf', 'lt', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.mn.xlf', 'mn', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.nb.xlf', 'nb', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.nl.xlf', 'nl', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pl.xlf', 'pl', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pt.xlf', 'pt', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pt_BR.xlf', 'pt_BR', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ro.xlf', 'ro', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ru.xlf', 'ru', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sk.xlf', 'sk', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sl.xlf', 'sl', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sr_Cyrl.xlf', 'sr_Cyrl', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sr_Latn.xlf', 'sr_Latn', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sv.xlf', 'sv', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ua.xlf', 'ua', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.zh_CN.xlf', 'zh_CN', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ca.xlf', 'ca', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.cs.xlf', 'cs', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.da.xlf', 'da', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.de.xlf', 'de', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.en.xlf', 'en', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.es.xlf', 'es', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.et.xlf', 'et', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.eu.xlf', 'eu', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fa.xlf', 'fa', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fi.xlf', 'fi', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fr.xlf', 'fr', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.he.xlf', 'he', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hr.xlf', 'hr', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hu.xlf', 'hu', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hy.xlf', 'hy', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.id.xlf', 'id', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.it.xlf', 'it', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ja.xlf', 'ja', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lb.xlf', 'lb', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lt.xlf', 'lt', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.mn.xlf', 'mn', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.nb.xlf', 'nb', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.nl.xlf', 'nl', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pl.xlf', 'pl', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pt.xlf', 'pt', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pt_BR.xlf', 'pt_BR', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ro.xlf', 'ro', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ru.xlf', 'ru', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sk.xlf', 'sk', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sl.xlf', 'sl', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sr_Cyrl.xlf', 'sr_Cyrl', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sr_Latn.xlf', 'sr_Latn', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sv.xlf', 'sv', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ua.xlf', 'ua', 'validators');
        $instance->addResource('xlf', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.zh_CN.xlf', 'zh_CN', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.bg.yml', 'bg', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.ca.yml', 'ca', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.cs.yml', 'cs', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.da.yml', 'da', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.de.yml', 'de', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.en.yml', 'en', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.es.yml', 'es', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.et.yml', 'et', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.fa_IR.yml', 'fa_IR', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.fi.yml', 'fi', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.fr.yml', 'fr', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.hr.yml', 'hr', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.hu.yml', 'hu', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.it.yml', 'it', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.ja.yml', 'ja', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.lb.yml', 'lb', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.lv.yml', 'lv', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.nl.yml', 'nl', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.pl.yml', 'pl', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.pt_BR.yml', 'pt_BR', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.pt_PT.yml', 'pt_PT', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.ro.yml', 'ro', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.ru.yml', 'ru', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.sk.yml', 'sk', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.sl.yml', 'sl', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.sr_Latn.yml', 'sr_Latn', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.sv.yml', 'sv', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.tr.yml', 'tr', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.uk.yml', 'uk', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\FOSUserBundle.zh_CN.yml', 'zh_CN', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.bg.yml', 'bg', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.cs.yml', 'cs', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.da.yml', 'da', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.de.yml', 'de', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.en.yml', 'en', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.es.yml', 'es', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.fa_IR.yml', 'fa_IR', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.fi.yml', 'fi', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.fr.yml', 'fr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.hr.yml', 'hr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.it.yml', 'it', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.ja.yml', 'ja', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.lv.yml', 'lv', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.nl.yml', 'nl', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.pl.yml', 'pl', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.pt_BR.yml', 'pt_BR', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.ru.yml', 'ru', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.sk.yml', 'sk', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.sl.yml', 'sl', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.sr_Latn.yml', 'sr_Latn', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.tr.yml', 'tr', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.uk.yml', 'uk', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/translations\\validators.zh_CN.yml', 'zh_CN', 'validators');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\src\\Fenchy\\FrontendBundle/Resources/translations\\messages.de.yml', 'de', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\src\\Fenchy\\FrontendBundle/Resources/translations\\messages.en.yml', 'en', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\src\\Fenchy\\FrontendBundle/Resources/translations\\messages.pl.yml', 'pl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\src\\Fenchy\\UserBundle/Resources/translations\\FOSUserBundle.de.yml', 'de', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\src\\Fenchy\\UserBundle/Resources/translations\\FOSUserBundle.en.yml', 'en', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\src\\Fenchy\\UserBundle/Resources/translations\\FOSUserBundle.pl.yml', 'pl', 'FOSUserBundle');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\src\\Fenchy\\UserBundle/Resources/translations\\messages.de.yml', 'de', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\src\\Fenchy\\UserBundle/Resources/translations\\messages.en.yml', 'en', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\src\\Fenchy\\UserBundle/Resources/translations\\messages.pl.yml', 'pl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\src\\Fenchy\\RegularUserBundle/Resources/translations\\messages.de.yml', 'de', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\src\\Fenchy\\RegularUserBundle/Resources/translations\\messages.en.yml', 'en', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\src\\Fenchy\\RegularUserBundle/Resources/translations\\messages.pl.yml', 'pl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\src\\Fenchy\\GalleryBundle/Resources/translations\\messages.de.yml', 'de', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\src\\Fenchy\\GalleryBundle/Resources/translations\\messages.en.yml', 'en', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\src\\Fenchy\\GalleryBundle/Resources/translations\\messages.pl.yml', 'pl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\src\\Fenchy\\NoticeBundle/Resources/translations\\messages.de.yml', 'de', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\src\\Fenchy\\NoticeBundle/Resources/translations\\messages.en.yml', 'en', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\src\\Fenchy\\NoticeBundle/Resources/translations\\messages.pl.yml', 'pl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\src\\Fenchy\\MessageBundle/Resources/translations\\messages.de.yml', 'de', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\src\\Fenchy\\MessageBundle/Resources/translations\\messages.en.yml', 'en', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\src\\Fenchy\\MessageBundle/Resources/translations\\messages.pl.yml', 'pl', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\src\\Fenchy\\UtilBundle/Resources/translations\\messages.de.yml', 'de', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\src\\Fenchy\\UtilBundle/Resources/translations\\messages.en.yml', 'en', 'messages');
        $instance->addResource('yml', 'C:\\xampp\\htdocs\\fenchy\\trunk\\src\\Fenchy\\UtilBundle/Resources/translations\\messages.pl.yml', 'pl', 'messages');
        $instance->addResource('yml', 'C:/xampp/htdocs/fenchy/trunk/app/Resources/translations\\messages.en.yml', 'en', 'messages');
        $instance->addResource('yml', 'C:/xampp/htdocs/fenchy/trunk/app/Resources/translations\\messages.pl.yml', 'pl', 'messages');
        return $instance;
    }
    protected function getTwigService()
    {
        $a = $this->get('security.context');
        $this->services['twig'] = $instance = new \Twig_Environment($this->get('twig.loader'), array('debug' => false, 'strict_variables' => false, 'exception_controller' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController::showAction', 'cache' => 'C:/xampp/htdocs/fenchy/trunk/app/cache/prod/twig', 'charset' => 'UTF-8', 'paths' => array()));
        $instance->addExtension($this->get('fenchy.twig.extension.debug'));
        $instance->addExtension($this->get('twig.extension.text'));
        $instance->addExtension(new \Symfony\Bundle\SecurityBundle\Twig\Extension\LogoutUrlExtension($this->get('templating.helper.logout_url')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension($a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator.default')));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\AssetsExtension($this));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\ActionsExtension($this));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\CodeExtension($this));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($this->get('router')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'form_div_layout.html.twig')), $this->get('form.csrf_provider'))));
        $instance->addExtension(new \Symfony\Bundle\AsseticBundle\Twig\AsseticExtension($this->get('assetic.asset_factory'), $this->get('templating.name_parser'), false, array(), array(), new \Symfony\Bundle\AsseticBundle\DefaultValueSupplier($this)));
        $instance->addExtension(new \JMS\SecurityExtraBundle\Twig\SecurityExtension($a));
        $instance->addExtension($this->get('fos_twitter.anywhere.twig'));
        $instance->addExtension($this->get('fos_facebook.twig'));
        $instance->addExtension($this->get('twig.extension.regularuser'));
        $instance->addExtension($this->get('twig.extension.messenger'));
        $instance->addExtension($this->get('fenchy.twig.fenchy_extension'));
        $instance->addGlobal('facebook_app_id', '290893684349911');
        $instance->addGlobal('default_profile_picture', 'images/default_profile_picture.png');
        $instance->addGlobal('default_picture', 'images/default_picture.png');
        $instance->addGlobal('notice_days_before', 0);
        $instance->addGlobal('notice_days_after', 5);
        $instance->addGlobal('activities_to_display', 4);
        $instance->addGlobal('notice_menu_property', 'direction');
        $instance->addGlobal('default_location', 'Berlin, Germany');
        return $instance;
    }
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController::showAction', $this->get('monolog.logger.request'));
    }
    protected function getTwig_Extension_MessengerService()
    {
        return $this->services['twig.extension.messenger'] = new \Fenchy\MessageBundle\Twig\FenchyMessengerExtension($this->get('fenchy.messenger'));
    }
    protected function getTwig_Extension_RegularuserService()
    {
        return $this->services['twig.extension.regularuser'] = new \Fenchy\RegularUserBundle\Twig\FenchyRegularUserExtension($this);
    }
    protected function getTwig_Extension_TextService()
    {
        return $this->services['twig.extension.text'] = new \Twig_Extensions_Extension_Text();
    }
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader($this->get('templating.locator'), $this->get('templating.name_parser'));
        $instance->addPath('C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig/Resources/views/Form');
        return $instance;
    }
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor($this->get('twig'));
    }
    protected function getValidatorService()
    {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator($this->get('validator.mapping.class_metadata_factory'), new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('security.validator.user_password' => 'security.validator.user_password', 'doctrine.orm.validator.unique' => 'doctrine.orm.validator.unique')), array(0 => $this->get('doctrine.orm.validator_initializer'), 1 => new \FOS\UserBundle\Validator\Initializer($this->get('fos_user.user_manager'))));
    }
    protected function getDatabaseConnectionService()
    {
        return $this->get('doctrine.dbal.default_connection');
    }
    protected function getDoctrine_Orm_EntityManagerService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getFacebookService()
    {
        return $this->get('fos_facebook.api');
    }
    protected function getFosUser_ChangePassword_Form_HandlerService()
    {
        return $this->get('fos_user.change_password.form.handler.default');
    }
    protected function getFosUser_Util_UsernameCanonicalizerService()
    {
        return $this->get('fos_user.util.email_canonicalizer');
    }
    protected function getSession_StorageService()
    {
        return $this->get('session.storage.native');
    }
    protected function getTranslatorService()
    {
        return $this->get('translator.default');
    }
    protected function getAssetic_AssetFactoryService()
    {
        return $this->services['assetic.asset_factory'] = new \Symfony\Bundle\AsseticBundle\Factory\AssetFactory($this->get('kernel'), $this, $this->getParameterBag(), 'C:/xampp/htdocs/fenchy/trunk/app/../web', false);
    }
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }
    protected function getFosUser_EntityManagerService()
    {
        return $this->services['fos_user.entity_manager'] = $this->get('doctrine')->getManager(NULL);
    }
    protected function getFosUser_UserProvider_UsernameEmailService()
    {
        return $this->services['fos_user.user_provider.username_email'] = new \FOS\UserBundle\Security\EmailUserProvider($this->get('fos_user.user_manager'));
    }
    protected function getJmsDiExtra_ControllerResolverService()
    {
        return $this->services['jms_di_extra.controller_resolver'] = new \JMS\DiExtraBundle\HttpKernel\ControllerResolver($this, $this->get('controller_name_converter'), $this->get('monolog.logger.request'));
    }
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }
    protected function getSecurity_Access_DecisionManagerService()
    {
        $a = new \JMS\SecurityExtraBundle\Security\Authorization\Expression\LazyLoadingExpressionVoter(new \JMS\SecurityExtraBundle\Security\Authorization\Expression\ContainerAwareExpressionHandler($this));
        $a->setLazyCompiler($this, 'security.expressions.compiler');
        $a->setCacheDir('C:/xampp/htdocs/fenchy/trunk/app/cache/prod/jms_security/expressions');
        return $this->services['security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(array(0 => $a, 1 => new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter($this->get('security.role_hierarchy')), 2 => new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter($this->get('security.authentication.trust_resolver'))), 'affirmative', false, true);
    }
    protected function getSecurity_AccessListenerService()
    {
        return $this->services['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener($this->get('security.context'), $this->get('security.access.decision_manager'), $this->get('security.access_map'), $this->get('security.authentication.manager'), $this->get('monolog.logger.security'));
    }
    protected function getSecurity_AccessMapService()
    {
        $this->services['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/user/chooselang/.*'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/user/signin/facebook'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/user/emailconfirm/.+'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/user/emailabort/.+'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/user/userprofile/*'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/user/reviewslist'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/user/listingslist'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/user/login$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/register'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/resetting'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/connect'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/'), array(0 => 'ROLE_ADMIN'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/user/settings'), array(0 => 'ROLE_USER'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/user/create_listing'), array(0 => 'ROLE_USER'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/user/chooselang/'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/user/messages'), array(0 => 'ROLE_USER'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/user/'), array(0 => 'ROLE_FULL_USER'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/businessuser/'), array(0 => 'ROLE_BUSINESSUSER'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('/.*'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        return $instance;
    }
    protected function getSecurity_Authentication_ManagerService()
    {
        $a = $this->get('security.user_checker');
        $b = $this->get('security.encoder_factory');
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(array(0 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($this->get('security.user.provider.concrete.in_memory'), $a, 'secured_area', $b, true), 1 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($this->get('fos_user.user_provider.username_email'), $a, 'main', $b, true), 2 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('51bafa7a58718'), 3 => new \FOS\TwitterBundle\Security\Authentication\Provider\TwitterProvider($this->get('fos_twitter.service')), 4 => new \FOS\TwitterBundle\Security\Authentication\Provider\TwitterAnywhereProvider('mJYZxB06m787FPcgj64ZBLujRrstyadKp0Q3e0ZAdo', $this->get('my.twitter.user'), $a, false), 5 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('51bafa7a58718')), true);
        $instance->setEventDispatcher($this->get('event_dispatcher'));
        return $instance;
    }
    protected function getSecurity_Authentication_SessionStrategyService()
    {
        return $this->services['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate');
    }
    protected function getSecurity_ChannelListenerService()
    {
        return $this->services['security.channel_listener'] = new \Symfony\Component\Security\Http\Firewall\ChannelListener($this->get('security.access_map'), new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), $this->get('monolog.logger.security'));
    }
    protected function getSecurity_Extra_MetadataFactoryService()
    {
        $this->services['security.extra.metadata_factory'] = $instance = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver($this, 'security.extra.metadata_driver'), new \Metadata\Cache\FileCache('C:/xampp/htdocs/fenchy/trunk/app/cache/prod/jms_security', false));
        $instance->setIncludeInterfaces(true);
        return $instance;
    }
    protected function getSecurity_HttpUtilsService()
    {
        $a = $this->get('router');
        return $this->services['security.http_utils'] = new \Symfony\Component\Security\Http\HttpUtils($a, $a);
    }
    protected function getSecurity_Logout_Handler_SessionService()
    {
        return $this->services['security.logout.handler.session'] = new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler();
    }
    protected function getSecurity_User_Provider_Concrete_InMemoryService()
    {
        $this->services['security.user.provider.concrete.in_memory'] = $instance = new \Symfony\Component\Security\Core\User\InMemoryUserProvider();
        $instance->createUser(new \Symfony\Component\Security\Core\User\User('user', 'userpass', array(0 => 'ROLE_USER')));
        $instance->createUser(new \Symfony\Component\Security\Core\User\User('admin', 'adminpass', array(0 => 'ROLE_ADMIN')));
        return $instance;
    }
    protected function getSecurity_UserCheckerService()
    {
        return $this->services['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker();
    }
    protected function getSwiftmailer_Transport_EventdispatcherService()
    {
        return $this->services['swiftmailer.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher();
    }
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('file_locator'), 'C:/xampp/htdocs/fenchy/trunk/app/cache/prod');
    }
    protected function getValidator_Mapping_ClassMetadataFactoryService()
    {
        return $this->services['validator.mapping.class_metadata_factory'] = new \Symfony\Component\Validator\Mapping\ClassMetadataFactory(new \Symfony\Component\Validator\Mapping\Loader\LoaderChain(array(0 => new \Symfony\Component\Validator\Mapping\Loader\AnnotationLoader($this->get('annotation_reader')), 1 => new \Symfony\Component\Validator\Mapping\Loader\StaticMethodLoader(), 2 => new \Symfony\Component\Validator\Mapping\Loader\XmlFilesLoader(array(0 => 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/config/validation.xml', 1 => 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\config\\validation.xml', 2 => 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\config\\validation\\orm.xml')), 3 => new \Symfony\Component\Validator\Mapping\Loader\YamlFilesLoader(array()))), NULL);
    }
    public function getParameter($name)
    {
        $name = strtolower($name);
        if (!array_key_exists($name, $this->parameters)) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        return $this->parameters[$name];
    }
    public function hasParameter($name)
    {
        return array_key_exists(strtolower($name), $this->parameters);
    }
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }
        return $this->parameterBag;
    }
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => 'C:/xampp/htdocs/fenchy/trunk/app',
            'kernel.environment' => 'prod',
            'kernel.debug' => false,
            'kernel.name' => 'app',
            'kernel.cache_dir' => 'C:/xampp/htdocs/fenchy/trunk/app/cache/prod',
            'kernel.logs_dir' => 'C:/xampp/htdocs/fenchy/trunk/app/logs',
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle',
                'JMSAopBundle' => 'JMS\\AopBundle\\JMSAopBundle',
                'JMSDiExtraBundle' => 'JMS\\DiExtraBundle\\JMSDiExtraBundle',
                'JMSSecurityExtraBundle' => 'JMS\\SecurityExtraBundle\\JMSSecurityExtraBundle',
                'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle',
                'FOSTwitterBundle' => 'FOS\\TwitterBundle\\FOSTwitterBundle',
                'FOSFacebookBundle' => 'FOS\\FacebookBundle\\FOSFacebookBundle',
                'FenchyFrontendBundle' => 'Fenchy\\FrontendBundle\\FenchyFrontendBundle',
                'UserBundle' => 'Fenchy\\UserBundle\\UserBundle',
                'FenchyRegularUserBundle' => 'Fenchy\\RegularUserBundle\\FenchyRegularUserBundle',
                'FenchyGalleryBundle' => 'Fenchy\\GalleryBundle\\FenchyGalleryBundle',
                'FenchyNoticeBundle' => 'Fenchy\\NoticeBundle\\FenchyNoticeBundle',
                'FenchyMessageBundle' => 'Fenchy\\MessageBundle\\FenchyMessageBundle',
                'FenchyUtilBundle' => 'Fenchy\\UtilBundle\\FenchyUtilBundle',
                'FenchyAdminBundle' => 'Fenchy\\AdminBundle\\FenchyAdminBundle',
                'PunkAveFileUploaderBundle' => 'PunkAve\\FileUploaderBundle\\PunkAveFileUploaderBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appProdProjectContainer',
            'database_driver' => 'pdo_pgsql',
            'database_host' => 'localhost',
            'database_port' => 5432,
            'database_name' => 'fenchy',
            'database_user' => 'postgres',
            'database_password' => 'salam',
            'mailer_transport' => 'smtp',
            'mailer_host' => 'smtp.googlemail.com',
            'mailer_port' => 465,
            'mailer_user' => 'vosiem8@gmail.com',
            'mailer_password' => 'info12345678',
            'mailer_encryption' => 'ssl',
            'mailer_auth_mode' => 'login',
            'from_email' => 'vosiem8@gmail.com',
            'from_name' => 'Fenchy Robot',
            'locale' => 'en',
            'secret' => '3fdd10f551014c353d06f419e23f2aff36',
            'database_path' => NULL,
            'twitter_consumer_key' => 'Jj087NLI2eF0FTbLGFqPDw',
            'twitter_consumer_secret' => 'mJYZxB06m787FPcgj64ZBLujRrstyadKp0Q3e0ZAdo',
            'twitter_callback_url' => 'http://fenchy/twitter/login_check',
            'facebook_app_id' => '290893684349911',
            'facebook_secret' => 'fbf887b69445ca240b5431d5407b667c',
            'gallery_notice_max' => 4,
            'gallery_profile_max' => 4,
            'notice_menu_property' => 'direction',
            'title_to_content_search_ratio' => 0.7,
            'gallery_about_me_max' => 4,
            'initial_pagination_limit' => 4,
            'loaded_pagination_limit' => 2,
            'notice_days_before' => 0,
            'notice_days_after' => 5,
            'welcome_message_sender' => 'vosiem8@gmail.com',
            'notifications_enabled' => true,
            'notification_queue_processing_hour' => 2,
            'dictionary_storage' => 1,
            'dictionary_non_tag_delimeter' => '/[\\s,]+/',
            'dictionary_tag_delimeter' => '/[,]+/',
            'minimal_search_similarity_level' => 0.25,
            'points_notice' => 1,
            'points_got_review' => 1,
            'points_review' => 1,
            'points_facebook' => 5,
            'points_contact' => 1,
            'profile_about_percent' => 0.25,
            'profile_first_image_percent' => 0.25,
            'profile_next_image_percent' => 0,
            'profile_next_images_limit' => 0,
            'profile_gender_percent' => 0.25,
            'profile_link_percent' => 0,
            'profile_languages_percent' => 0.25,
            'profile_total_points' => 20,
            'filter_min_distance' => 2000,
            'filter_max_distance' => 5000,
            'filter_default_lat' => 52.519171,
            'filter_default_lng' => 13.406091,
            'file_uploader.max_number_of_files' => 4,
            'file_uploader.allowed_extensions' => array(
                0 => 'gif',
                1 => 'png',
                2 => 'jpg',
                3 => 'jpeg',
            ),
            'file_uploader.originals' => array(
                'folder' => 'originals',
            ),
            'file_uploader.sizes' => array(
                'thumbnail' => array(
                    'folder' => 'thumbnail',
                    'max_width' => 124,
                ),
                'medium' => array(
                    'folder' => 'medium',
                    'max_width' => 710,
                    'max_height' => 330,
                ),
            ),
            'file_uploader.crop' => array(
                'small' => array(
                    'folder' => 'crop_small',
                    'width' => 60,
                    'height' => 60,
                ),
                'big' => array(
                    'folder' => 'crop_big',
                    'width' => 212,
                    'height' => 212,
                ),
            ),
            'reviews_pagination' => 10,
            'distance_slider_default' => 50000,
            'distance_slider_snap' => 100,
            'listings_pagination' => 10,
            'not_found_suggestions' => 5,
            'controller_resolver.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver',
            'controller_name_converter.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser',
            'response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener',
            'streamed_response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener',
            'locale_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener',
            'event_dispatcher.class' => 'Symfony\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
            'http_kernel.class' => 'Symfony\\Bundle\\FrameworkBundle\\HttpKernel',
            'filesystem.class' => 'Symfony\\Component\\Filesystem\\Filesystem',
            'cache_warmer.class' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate',
            'cache_clearer.class' => 'Symfony\\Component\\HttpKernel\\CacheClearer\\ChainCacheClearer',
            'file_locator.class' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
            'translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator',
            'translator.identity.class' => 'Symfony\\Component\\Translation\\IdentityTranslator',
            'translator.selector.class' => 'Symfony\\Component\\Translation\\MessageSelector',
            'translation.loader.php.class' => 'Symfony\\Component\\Translation\\Loader\\PhpFileLoader',
            'translation.loader.yml.class' => 'Symfony\\Component\\Translation\\Loader\\YamlFileLoader',
            'translation.loader.xliff.class' => 'Symfony\\Component\\Translation\\Loader\\XliffFileLoader',
            'translation.loader.po.class' => 'Symfony\\Component\\Translation\\Loader\\PoFileLoader',
            'translation.loader.mo.class' => 'Symfony\\Component\\Translation\\Loader\\MoFileLoader',
            'translation.loader.qt.class' => 'Symfony\\Component\\Translation\\Loader\\QtTranslationsLoader',
            'translation.loader.csv.class' => 'Symfony\\Component\\Translation\\Loader\\CsvFileLoader',
            'translation.loader.res.class' => 'Symfony\\Component\\Translation\\Loader\\IcuResFileLoader',
            'translation.loader.dat.class' => 'Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader',
            'translation.loader.ini.class' => 'Symfony\\Component\\Translation\\Loader\\IniFileLoader',
            'translation.dumper.php.class' => 'Symfony\\Component\\Translation\\Dumper\\PhpFileDumper',
            'translation.dumper.xliff.class' => 'Symfony\\Component\\Translation\\Dumper\\XliffFileDumper',
            'translation.dumper.po.class' => 'Symfony\\Component\\Translation\\Dumper\\PoFileDumper',
            'translation.dumper.mo.class' => 'Symfony\\Component\\Translation\\Dumper\\MoFileDumper',
            'translation.dumper.yml.class' => 'Symfony\\Component\\Translation\\Dumper\\YamlFileDumper',
            'translation.dumper.qt.class' => 'Symfony\\Component\\Translation\\Dumper\\QtFileDumper',
            'translation.dumper.csv.class' => 'Symfony\\Component\\Translation\\Dumper\\CsvFileDumper',
            'translation.dumper.ini.class' => 'Symfony\\Component\\Translation\\Dumper\\IniFileDumper',
            'translation.dumper.res.class' => 'Symfony\\Component\\Translation\\Dumper\\IcuResFileDumper',
            'translation.extractor.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\PhpExtractor',
            'translation.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\TranslationLoader',
            'translation.extractor.class' => 'Symfony\\Component\\Translation\\Extractor\\ChainExtractor',
            'translation.writer.class' => 'Symfony\\Component\\Translation\\Writer\\TranslationWriter',
            'kernel.secret' => '3fdd10f551014c353d06f419e23f2aff36',
            'kernel.trust_proxy_headers' => false,
            'kernel.default_locale' => 'en',
            'session.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Session',
            'session.flashbag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag',
            'session.attribute_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag',
            'session.storage.native.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage',
            'session.storage.mock_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage',
            'session.handler.native_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler',
            'session_listener.class' => 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener',
            'session.storage.options' => array(
            ),
            'session.save_path' => 'C:/xampp/htdocs/fenchy/trunk/app/cache/prod/sessions',
            'form.resolved_type_factory.class' => 'Symfony\\Component\\Form\\ResolvedFormTypeFactory',
            'form.registry.class' => 'Symfony\\Component\\Form\\FormRegistry',
            'form.factory.class' => 'Symfony\\Component\\Form\\FormFactory',
            'form.extension.class' => 'Symfony\\Component\\Form\\Extension\\DependencyInjection\\DependencyInjectionExtension',
            'form.type_guesser.validator.class' => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser',
            'form.csrf_provider.class' => 'Symfony\\Component\\Form\\Extension\\Csrf\\CsrfProvider\\SessionCsrfProvider',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'validator.class' => 'Symfony\\Component\\Validator\\Validator',
            'validator.mapping.class_metadata_factory.class' => 'Symfony\\Component\\Validator\\Mapping\\ClassMetadataFactory',
            'validator.mapping.cache.apc.class' => 'Symfony\\Component\\Validator\\Mapping\\Cache\\ApcCache',
            'validator.mapping.cache.prefix' => '',
            'validator.mapping.loader.loader_chain.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\LoaderChain',
            'validator.mapping.loader.static_method_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\StaticMethodLoader',
            'validator.mapping.loader.annotation_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\AnnotationLoader',
            'validator.mapping.loader.xml_files_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\XmlFilesLoader',
            'validator.mapping.loader.yaml_files_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\YamlFilesLoader',
            'validator.validator_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Validator\\ConstraintValidatorFactory',
            'validator.mapping.loader.xml_files_loader.mapping_files' => array(
                0 => 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/config/validation.xml',
                1 => 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\config\\validation.xml',
                2 => 'C:\\xampp\\htdocs\\fenchy\\trunk\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\config\\validation\\orm.xml',
            ),
            'validator.mapping.loader.yaml_files_loader.mapping_files' => array(
            ),
            'router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\Router',
            'router.request_context.class' => 'Symfony\\Component\\Routing\\RequestContext',
            'routing.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader',
            'routing.resolver.class' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
            'routing.loader.xml.class' => 'Symfony\\Component\\Routing\\Loader\\XmlFileLoader',
            'routing.loader.yml.class' => 'Symfony\\Component\\Routing\\Loader\\YamlFileLoader',
            'routing.loader.php.class' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.cache_warmer.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\RouterCacheWarmer',
            'router.options.matcher.cache_class' => 'appprodUrlMatcher',
            'router.options.generator.cache_class' => 'appprodUrlGenerator',
            'router_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.resource' => 'C:/xampp/htdocs/fenchy/trunk/app/config/routing.yml',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'templating.engine.delegating.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine',
            'templating.name_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser',
            'templating.filename_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateFilenameParser',
            'templating.cache_warmer.template_paths.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplatePathsCacheWarmer',
            'templating.locator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator',
            'templating.loader.filesystem.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\FilesystemLoader',
            'templating.loader.cache.class' => 'Symfony\\Component\\Templating\\Loader\\CacheLoader',
            'templating.loader.chain.class' => 'Symfony\\Component\\Templating\\Loader\\ChainLoader',
            'templating.finder.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplateFinder',
            'templating.engine.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\PhpEngine',
            'templating.helper.slots.class' => 'Symfony\\Component\\Templating\\Helper\\SlotsHelper',
            'templating.helper.assets.class' => 'Symfony\\Component\\Templating\\Helper\\CoreAssetsHelper',
            'templating.helper.actions.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\ActionsHelper',
            'templating.helper.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RouterHelper',
            'templating.helper.request.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RequestHelper',
            'templating.helper.session.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\SessionHelper',
            'templating.helper.code.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\CodeHelper',
            'templating.helper.translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\TranslatorHelper',
            'templating.helper.form.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\FormHelper',
            'templating.form.engine.class' => 'Symfony\\Component\\Form\\Extension\\Templating\\TemplatingRendererEngine',
            'templating.form.renderer.class' => 'Symfony\\Component\\Form\\FormRenderer',
            'templating.globals.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\GlobalVariables',
            'templating.asset.path_package.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Asset\\PathPackage',
            'templating.asset.url_package.class' => 'Symfony\\Component\\Templating\\Asset\\UrlPackage',
            'templating.asset.package_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Asset\\PackageFactory',
            'templating.helper.code.file_link_format' => NULL,
            'templating.helper.form.resources' => array(
                0 => 'FrameworkBundle:Form',
            ),
            'templating.hinclude.default_template' => NULL,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'annotations.reader.class' => 'Doctrine\\Common\\Annotations\\AnnotationReader',
            'annotations.cached_reader.class' => 'Doctrine\\Common\\Annotations\\CachedReader',
            'annotations.file_cache_reader.class' => 'Doctrine\\Common\\Annotations\\FileCacheReader',
            'security.context.class' => 'Symfony\\Component\\Security\\Core\\SecurityContext',
            'security.user_checker.class' => 'Symfony\\Component\\Security\\Core\\User\\UserChecker',
            'security.encoder_factory.generic.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactory',
            'security.encoder.digest.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder',
            'security.encoder.plain.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder',
            'security.user.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\User\\InMemoryUserProvider',
            'security.user.provider.in_memory.user.class' => 'Symfony\\Component\\Security\\Core\\User\\User',
            'security.user.provider.chain.class' => 'Symfony\\Component\\Security\\Core\\User\\ChainUserProvider',
            'security.authentication.trust_resolver.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.authentication.manager.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager',
            'security.authentication.session_strategy.class' => 'Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy',
            'security.access.decision_manager.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager',
            'security.access.simple_role_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleVoter',
            'security.access.authenticated_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter',
            'security.access.role_hierarchy_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleHierarchyVoter',
            'security.firewall.class' => 'Symfony\\Component\\Security\\Http\\Firewall',
            'security.firewall.map.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap',
            'security.firewall.context.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext',
            'security.matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'security.role_hierarchy.class' => 'Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy',
            'security.http_utils.class' => 'Symfony\\Component\\Security\\Http\\HttpUtils',
            'security.validator.user_password.class' => 'Symfony\\Component\\Security\\Core\\Validator\\Constraint\\UserPasswordValidator',
            'security.authentication.retry_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\RetryAuthenticationEntryPoint',
            'security.channel_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ChannelListener',
            'security.authentication.form_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\FormAuthenticationEntryPoint',
            'security.authentication.listener.form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener',
            'security.authentication.listener.basic.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\BasicAuthenticationListener',
            'security.authentication.basic_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\BasicAuthenticationEntryPoint',
            'security.authentication.listener.digest.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\DigestAuthenticationListener',
            'security.authentication.digest_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\DigestAuthenticationEntryPoint',
            'security.authentication.listener.x509.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\X509AuthenticationListener',
            'security.authentication.listener.anonymous.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AnonymousAuthenticationListener',
            'security.authentication.switchuser_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SwitchUserListener',
            'security.logout_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener',
            'security.logout.handler.session.class' => 'Symfony\\Component\\Security\\Http\\Logout\\SessionLogoutHandler',
            'security.logout.handler.cookie_clearing.class' => 'Symfony\\Component\\Security\\Http\\Logout\\CookieClearingLogoutHandler',
            'security.logout.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Logout\\DefaultLogoutSuccessHandler',
            'security.access_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AccessListener',
            'security.access_map.class' => 'Symfony\\Component\\Security\\Http\\AccessMap',
            'security.exception_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener',
            'security.context_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ContextListener',
            'security.authentication.provider.dao.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\DaoAuthenticationProvider',
            'security.authentication.provider.pre_authenticated.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\PreAuthenticatedAuthenticationProvider',
            'security.authentication.provider.anonymous.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AnonymousAuthenticationProvider',
            'security.authentication.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationSuccessHandler',
            'security.authentication.failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationFailureHandler',
            'security.authentication.provider.rememberme.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\RememberMeAuthenticationProvider',
            'security.authentication.listener.rememberme.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\RememberMeListener',
            'security.rememberme.token.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\InMemoryTokenProvider',
            'security.authentication.rememberme.services.persistent.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\PersistentTokenBasedRememberMeServices',
            'security.authentication.rememberme.services.simplehash.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\TokenBasedRememberMeServices',
            'security.rememberme.response_listener.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener',
            'templating.helper.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\LogoutUrlHelper',
            'templating.helper.security.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\SecurityHelper',
            'twig.extension.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Twig\\Extension\\LogoutUrlExtension',
            'twig.extension.security.class' => 'Symfony\\Bridge\\Twig\\Extension\\SecurityExtension',
            'data_collector.security.class' => 'Symfony\\Bundle\\SecurityBundle\\DataCollector\\SecurityDataCollector',
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => true,
            'security.authentication.hide_user_not_found' => true,
            'security.role_hierarchy.roles' => array(
                'ROLE_FULL_USER' => array(
                    0 => 'ROLE_USER',
                ),
                'ROLE_ADMIN' => array(
                    0 => 'ROLE_FULL_USER',
                ),
                'ROLE_SUPER_ADMIN' => array(
                    0 => 'ROLE_ADMIN',
                ),
            ),
            'twig.class' => 'Twig_Environment',
            'twig.loader.class' => 'Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader',
            'templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\TwigEngine',
            'twig.cache_warmer.class' => 'Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheCacheWarmer',
            'twig.extension.trans.class' => 'Symfony\\Bridge\\Twig\\Extension\\TranslationExtension',
            'twig.extension.assets.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\AssetsExtension',
            'twig.extension.actions.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\ActionsExtension',
            'twig.extension.code.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\CodeExtension',
            'twig.extension.routing.class' => 'Symfony\\Bridge\\Twig\\Extension\\RoutingExtension',
            'twig.extension.yaml.class' => 'Symfony\\Bridge\\Twig\\Extension\\YamlExtension',
            'twig.extension.form.class' => 'Symfony\\Bridge\\Twig\\Extension\\FormExtension',
            'twig.form.engine.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRendererEngine',
            'twig.form.renderer.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer',
            'twig.translation.extractor.class' => 'Symfony\\Bridge\\Twig\\Translation\\TwigExtractor',
            'twig.exception_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener',
            'twig.exception_listener.controller' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController::showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
            ),
            'twig.options' => array(
                'debug' => false,
                'strict_variables' => false,
                'exception_controller' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController::showAction',
                'cache' => 'C:/xampp/htdocs/fenchy/trunk/app/cache/prod/twig',
                'charset' => 'UTF-8',
                'paths' => array(
                ),
            ),
            'monolog.logger.class' => 'Symfony\\Bridge\\Monolog\\Logger',
            'monolog.gelf.publisher.class' => 'Gelf\\MessagePublisher',
            'monolog.handler.stream.class' => 'Monolog\\Handler\\StreamHandler',
            'monolog.handler.group.class' => 'Monolog\\Handler\\GroupHandler',
            'monolog.handler.buffer.class' => 'Monolog\\Handler\\BufferHandler',
            'monolog.handler.rotating_file.class' => 'Monolog\\Handler\\RotatingFileHandler',
            'monolog.handler.syslog.class' => 'Monolog\\Handler\\SyslogHandler',
            'monolog.handler.null.class' => 'Monolog\\Handler\\NullHandler',
            'monolog.handler.test.class' => 'Monolog\\Handler\\TestHandler',
            'monolog.handler.gelf.class' => 'Monolog\\Handler\\GelfHandler',
            'monolog.handler.firephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\FirePHPHandler',
            'monolog.handler.chromephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ChromePhpHandler',
            'monolog.handler.debug.class' => 'Symfony\\Bridge\\Monolog\\Handler\\DebugHandler',
            'monolog.handler.swift_mailer.class' => 'Monolog\\Handler\\SwiftMailerHandler',
            'monolog.handler.native_mailer.class' => 'Monolog\\Handler\\NativeMailerHandler',
            'monolog.handler.socket.class' => 'Monolog\\Handler\\SocketHandler',
            'monolog.handler.fingers_crossed.class' => 'Monolog\\Handler\\FingersCrossedHandler',
            'monolog.handler.fingers_crossed.error_level_activation_strategy.class' => 'Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy',
            'monolog.handlers_to_channels' => array(
                'monolog.handler.main' => NULL,
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.plugin.antiflood.threshold' => 1000,
            'swiftmailer.plugin.antiflood.sleep' => 0,
            'swiftmailer.data_collector.class' => 'Symfony\\Bridge\\Swiftmailer\\DataCollector\\MessageDataCollector',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.transport.smtp.encryption' => 'ssl',
            'swiftmailer.transport.smtp.port' => 465,
            'swiftmailer.transport.smtp.host' => 'smtp.googlemail.com',
            'swiftmailer.transport.smtp.username' => 'vosiem8@gmail.com',
            'swiftmailer.transport.smtp.password' => 'info12345678',
            'swiftmailer.transport.smtp.auth_mode' => 'login',
            'swiftmailer.transport.smtp.timeout' => 30,
            'swiftmailer.transport.smtp.source_ip' => NULL,
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.file.path' => 'C:/xampp/htdocs/fenchy/trunk/app/Spool',
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.sender_address' => NULL,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.delivery_whitelist' => array(
            ),
            'assetic.asset_factory.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\AssetFactory',
            'assetic.asset_manager.class' => 'Assetic\\Factory\\LazyAssetManager',
            'assetic.asset_manager_cache_warmer.class' => 'Symfony\\Bundle\\AsseticBundle\\CacheWarmer\\AssetManagerCacheWarmer',
            'assetic.cached_formula_loader.class' => 'Assetic\\Factory\\Loader\\CachedFormulaLoader',
            'assetic.config_cache.class' => 'Assetic\\Cache\\ConfigCache',
            'assetic.config_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\ConfigurationLoader',
            'assetic.config_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\ConfigurationResource',
            'assetic.coalescing_directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\CoalescingDirectoryResource',
            'assetic.directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\DirectoryResource',
            'assetic.filter_manager.class' => 'Symfony\\Bundle\\AsseticBundle\\FilterManager',
            'assetic.worker.ensure_filter.class' => 'Assetic\\Factory\\Worker\\EnsureFilterWorker',
            'assetic.value_supplier.class' => 'Symfony\\Bundle\\AsseticBundle\\DefaultValueSupplier',
            'assetic.node.paths' => array(
            ),
            'assetic.cache_dir' => 'C:/xampp/htdocs/fenchy/trunk/app/cache/prod/assetic',
            'assetic.bundles' => array(
            ),
            'assetic.twig_extension.class' => 'Symfony\\Bundle\\AsseticBundle\\Twig\\AsseticExtension',
            'assetic.twig_formula_loader.class' => 'Assetic\\Extension\\Twig\\TwigFormulaLoader',
            'assetic.helper.dynamic.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\DynamicAsseticHelper',
            'assetic.helper.static.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\StaticAsseticHelper',
            'assetic.php_formula_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\AsseticHelperFormulaLoader',
            'assetic.debug' => false,
            'assetic.use_controller' => false,
            'assetic.enable_profiler' => false,
            'assetic.read_from' => 'C:/xampp/htdocs/fenchy/trunk/app/../web',
            'assetic.write_to' => 'C:/xampp/htdocs/fenchy/trunk/app/../web',
            'assetic.variables' => array(
            ),
            'assetic.java.bin' => 'C:\\Windows\\system32\\java.EXE',
            'assetic.node.bin' => '/usr/bin/node',
            'assetic.ruby.bin' => '/usr/bin/ruby',
            'assetic.sass.bin' => '/usr/bin/sass',
            'assetic.filter.cssrewrite.class' => 'Assetic\\Filter\\CssRewriteFilter',
            'assetic.twig_extension.functions' => array(
            ),
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(
                'geography' => array(
                    'class' => 'Fenchy\\UtilBundle\\Types\\GeographyType',
                    'commented' => true,
                ),
                'geometry' => array(
                    'class' => 'Fenchy\\UtilBundle\\Types\\GeometryType',
                    'commented' => true,
                ),
            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\ORM\\Mapping\\Driver\\DriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.auto_generate_proxy_classes' => false,
            'doctrine.orm.proxy_dir' => 'C:/xampp/htdocs/fenchy/trunk/app/cache/prod/doctrine/orm/Proxies',
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'stof_doctrine_extensions.event_listener.locale.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LocaleListener',
            'stof_doctrine_extensions.event_listener.logger.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LoggerListener',
            'stof_doctrine_extensions.default_locale' => 'en_US',
            'stof_doctrine_extensions.translation_fallback' => false,
            'stof_doctrine_extensions.persist_default_translation' => false,
            'stof_doctrine_extensions.listener.translatable.class' => 'Gedmo\\Translatable\\TranslatableListener',
            'stof_doctrine_extensions.listener.timestampable.class' => 'Gedmo\\Timestampable\\TimestampableListener',
            'stof_doctrine_extensions.listener.sluggable.class' => 'Gedmo\\Sluggable\\SluggableListener',
            'stof_doctrine_extensions.listener.tree.class' => 'Gedmo\\Tree\\TreeListener',
            'stof_doctrine_extensions.listener.loggable.class' => 'Gedmo\\Loggable\\LoggableListener',
            'stof_doctrine_extensions.listener.sortable.class' => 'Gedmo\\Sortable\\SortableListener',
            'stof_doctrine_extensions.listener.softdeleteable.class' => 'Gedmo\\SoftDeleteable\\SoftDeleteableListener',
            'jms_aop.cache_dir' => 'C:/xampp/htdocs/fenchy/trunk/app/cache/prod/jms_aop',
            'jms_aop.interceptor_loader.class' => 'JMS\\AopBundle\\Aop\\InterceptorLoader',
            'jms_di_extra.metadata.driver.annotation_driver.class' => 'JMS\\DiExtraBundle\\Metadata\\Driver\\AnnotationDriver',
            'jms_di_extra.metadata.driver.configured_controller_injections.class' => 'JMS\\DiExtraBundle\\Metadata\\Driver\\ConfiguredControllerInjectionsDriver',
            'jms_di_extra.metadata.driver.lazy_loading_driver.class' => 'Metadata\\Driver\\LazyLoadingDriver',
            'jms_di_extra.metadata.metadata_factory.class' => 'Metadata\\MetadataFactory',
            'jms_di_extra.metadata.cache.file_cache.class' => 'Metadata\\Cache\\FileCache',
            'jms_di_extra.metadata.converter.class' => 'JMS\\DiExtraBundle\\Metadata\\MetadataConverter',
            'jms_di_extra.controller_resolver.class' => 'JMS\\DiExtraBundle\\HttpKernel\\ControllerResolver',
            'jms_di_extra.controller_injectors_warmer.class' => 'JMS\\DiExtraBundle\\HttpKernel\\ControllerInjectorsWarmer',
            'jms_di_extra.all_bundles' => false,
            'jms_di_extra.bundles' => array(
            ),
            'jms_di_extra.directories' => array(
            ),
            'jms_di_extra.cache_dir' => 'C:/xampp/htdocs/fenchy/trunk/app/cache/prod/jms_diextra',
            'jms_di_extra.doctrine_integration' => true,
            'jms_di_extra.doctrine_integration.entity_manager.file' => 'C:/xampp/htdocs/fenchy/trunk/app/cache/prod/jms_diextra/doctrine/EntityManager_51bafa7b15f5e.php',
            'jms_di_extra.doctrine_integration.entity_manager.class' => 'EntityManager51bafa7b15f5e_546a8d27f194334ee012bfe64f629947b07e4919\\__CG__\\Doctrine\\ORM\\EntityManager',
            'security.secured_services' => array(
            ),
            'security.access.method_interceptor.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Interception\\MethodSecurityInterceptor',
            'security.access.method_access_control' => array(
            ),
            'security.access.run_as_manager.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\RunAsManager',
            'security.authentication.provider.run_as.class' => 'JMS\\SecurityExtraBundle\\Security\\Authentication\\Provider\\RunAsAuthenticationProvider',
            'security.run_as.key' => 'RunAsToken',
            'security.run_as.role_prefix' => 'ROLE_',
            'security.access.after_invocation_manager.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\AfterInvocation\\AfterInvocationManager',
            'security.access.after_invocation.acl_provider.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\AfterInvocation\\AclAfterInvocationProvider',
            'security.access.iddqd_voter.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Voter\\IddqdVoter',
            'security.extra.metadata_factory.class' => 'Metadata\\MetadataFactory',
            'security.extra.lazy_loading_driver.class' => 'Metadata\\Driver\\LazyLoadingDriver',
            'security.extra.driver_chain.class' => 'Metadata\\Driver\\DriverChain',
            'security.extra.annotation_driver.class' => 'JMS\\SecurityExtraBundle\\Metadata\\Driver\\AnnotationDriver',
            'security.extra.file_cache.class' => 'Metadata\\Cache\\FileCache',
            'security.access.secure_all_services' => false,
            'security.extra.cache_dir' => 'C:/xampp/htdocs/fenchy/trunk/app/cache/prod/jms_security',
            'security.acl.permission_evaluator.class' => 'JMS\\SecurityExtraBundle\\Security\\Acl\\Expression\\PermissionEvaluator',
            'security.acl.has_permission_compiler.class' => 'JMS\\SecurityExtraBundle\\Security\\Acl\\Expression\\HasPermissionFunctionCompiler',
            'security.expressions.voter.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Expression\\LazyLoadingExpressionVoter',
            'security.expressions.handler.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Expression\\ContainerAwareExpressionHandler',
            'security.expressions.compiler.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Expression\\ExpressionCompiler',
            'security.expressions.expression.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Expression\\Expression',
            'security.expressions.variable_compiler.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Expression\\Compiler\\ContainerAwareVariableCompiler',
            'security.expressions.parameter_compiler.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Expression\\Compiler\\ParameterExpressionCompiler',
            'security.extra.config_driver.class' => 'JMS\\SecurityExtraBundle\\Metadata\\Driver\\ConfigDriver',
            'security.extra.twig_extension.class' => 'JMS\\SecurityExtraBundle\\Twig\\SecurityExtension',
            'security.authenticated_voter.disabled' => false,
            'security.role_voter.disabled' => false,
            'security.acl_voter.disabled' => false,
            'fos_user.validator.password.class' => 'FOS\\UserBundle\\Validator\\PasswordValidator',
            'fos_user.validator.unique.class' => 'FOS\\UserBundle\\Validator\\UniqueValidator',
            'fos_user.security.interactive_login_listener.class' => 'FOS\\UserBundle\\Security\\InteractiveLoginListener',
            'fos_user.security.login_manager.class' => 'FOS\\UserBundle\\Security\\LoginManager',
            'fos_user.resetting.email.template' => 'UserBundle:Resetting:email.html.twig',
            'fos_user.registration.confirmation.template' => 'UserBundle:Registration:email.html.twig',
            'fos_user.storage' => 'orm',
            'fos_user.firewall_name' => 'main',
            'fos_user.model_manager_name' => NULL,
            'fos_user.model.user.class' => 'Fenchy\\UserBundle\\Entity\\User',
            'fos_user.template.engine' => 'twig',
            'fos_user.profile.form.type' => 'fos_user_profile',
            'fos_user.profile.form.name' => 'fos_user_profile_form',
            'fos_user.profile.form.validation_groups' => array(
                0 => 'Profile',
                1 => 'Default',
            ),
            'fos_user.registration.confirmation.from_email' => array(
                'vosiem8@gmail.com' => 'Fenchy Robot',
            ),
            'fos_user.registration.confirmation.enabled' => true,
            'fos_user.registration.form.type' => 'fenchy_userbundle_registration',
            'fos_user.registration.form.name' => 'registration',
            'fos_user.registration.form.validation_groups' => array(
                0 => 'Registration',
                1 => 'Default',
            ),
            'fos_user.change_password.form.type' => 'fos_user_change_password',
            'fos_user.change_password.form.name' => 'fos_user_change_password_form',
            'fos_user.change_password.form.validation_groups' => array(
                0 => 'ChangePassword',
                1 => 'Default',
            ),
            'fos_user.resetting.email.from_email' => array(
                'vosiem8@gmail.com' => 'Fenchy Robot',
            ),
            'fos_user.resetting.token_ttl' => 86400,
            'fos_user.resetting.form.type' => 'fos_user_resetting',
            'fos_user.resetting.form.name' => 'fos_user_resetting_form',
            'fos_user.resetting.form.validation_groups' => array(
                0 => 'ResetPassword',
                1 => 'Default',
            ),
            'fos_twitter.file' => 'C:/xampp/htdocs/fenchy/trunk/app/../vendor/kertz/twitteroauth/twitteroauth/twitteroauth.php',
            'fos_twitter.consumer_key' => 'Jj087NLI2eF0FTbLGFqPDw',
            'fos_twitter.consumer_secret' => 'mJYZxB06m787FPcgj64ZBLujRrstyadKp0Q3e0ZAdo',
            'fos_twitter.access_token' => NULL,
            'fos_twitter.access_token_secret' => NULL,
            'fos_twitter.callback_url' => 'http://fenchy/twitter/login_check',
            'fos_twitter.anywhere_version' => '1',
            'fos_twitter.anywhere.helper.class' => 'FOS\\TwitterBundle\\Templating\\Helper\\TwitterAnywhereHelper',
            'fos_twitter.anywhere.twig.class' => 'FOS\\TwitterBundle\\Twig\\Extension\\TwitterAnywhereExtension',
            'fos_twitter.api.class' => 'TwitterOAuth',
            'fos_twitter.service.class' => 'FOS\\TwitterBundle\\Services\\Twitter',
            'fos_facebook.api.class' => 'FOS\\FacebookBundle\\Facebook\\FacebookSessionPersistence',
            'fos_facebook.helper.class' => 'FOS\\FacebookBundle\\Templating\\Helper\\FacebookHelper',
            'fos_facebook.twig.class' => 'FOS\\FacebookBundle\\Twig\\Extension\\FacebookExtension',
            'fos_facebook.app_id' => '290893684349911',
            'fos_facebook.secret' => 'fbf887b69445ca240b5431d5407b667c',
            'fos_facebook.cookie' => true,
            'fos_facebook.domain' => NULL,
            'fos_facebook.logging' => false,
            'fos_facebook.culture' => 'en_US',
            'fos_facebook.permissions' => array(
                0 => 'email',
                1 => 'user_birthday',
                2 => 'user_location',
            ),
            'fenchy.form.handler.registration.class' => 'Fenchy\\UserBundle\\Form\\Handler\\RegistrationFormHandler',
            'reputation_counter.class' => 'Fenchy\\UserBundle\\Services\\ReputationCounter',
            'dictionary_class' => 'Fenchy\\NoticeBundle\\Services\\Dictionary',
            'fenchy_message.messenger.class' => 'Fenchy\\MessageBundle\\Services\\Messenger',
            'boolornull_options' => array(
                0 => 'no',
                1 => 'yes',
            ),
            'file_uploader.file_base_path' => 'C:/xampp/htdocs/fenchy/trunk/app/../web/uploads',
            'file_uploader.web_base_path' => '/uploads',
        );
    }
}
