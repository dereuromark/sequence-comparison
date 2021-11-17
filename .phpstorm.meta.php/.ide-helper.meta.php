<?php
// @link https://confluence.jetbrains.com/display/PhpStorm/PhpStorm+Advanced+Metadata
namespace PHPSTORM_META {

	expectedArguments(
		\App\Model\Entity\IntegerItem::get(),
		0,
		argumentsSet('entityFields:App\Model\Entity\IntegerItem')
	);

	expectedArguments(
		\App\Model\Entity\IntegerItem::getError(),
		0,
		argumentsSet('entityFields:App\Model\Entity\IntegerItem')
	);

	expectedArguments(
		\App\Model\Entity\IntegerItem::getInvalidField(),
		0,
		argumentsSet('entityFields:App\Model\Entity\IntegerItem')
	);

	expectedArguments(
		\App\Model\Entity\IntegerItem::getOriginal(),
		0,
		argumentsSet('entityFields:App\Model\Entity\IntegerItem')
	);

	expectedArguments(
		\App\Model\Entity\IntegerItem::has(),
		0,
		argumentsSet('entityFields:App\Model\Entity\IntegerItem')
	);

	expectedArguments(
		\App\Model\Entity\IntegerItem::hasValue(),
		0,
		argumentsSet('entityFields:App\Model\Entity\IntegerItem')
	);

	expectedArguments(
		\App\Model\Entity\IntegerItem::isDirty(),
		0,
		argumentsSet('entityFields:App\Model\Entity\IntegerItem')
	);

	expectedArguments(
		\App\Model\Entity\IntegerItem::isEmpty(),
		0,
		argumentsSet('entityFields:App\Model\Entity\IntegerItem')
	);

	expectedArguments(
		\App\Model\Entity\IntegerItem::setDirty(),
		0,
		argumentsSet('entityFields:App\Model\Entity\IntegerItem')
	);

	expectedArguments(
		\App\Model\Entity\IntegerItem::setError(),
		0,
		argumentsSet('entityFields:App\Model\Entity\IntegerItem')
	);

	expectedArguments(
		\App\Model\Entity\LexorankItem::get(),
		0,
		argumentsSet('entityFields:App\Model\Entity\LexorankItem')
	);

	expectedArguments(
		\App\Model\Entity\LexorankItem::getError(),
		0,
		argumentsSet('entityFields:App\Model\Entity\LexorankItem')
	);

	expectedArguments(
		\App\Model\Entity\LexorankItem::getInvalidField(),
		0,
		argumentsSet('entityFields:App\Model\Entity\LexorankItem')
	);

	expectedArguments(
		\App\Model\Entity\LexorankItem::getOriginal(),
		0,
		argumentsSet('entityFields:App\Model\Entity\LexorankItem')
	);

	expectedArguments(
		\App\Model\Entity\LexorankItem::has(),
		0,
		argumentsSet('entityFields:App\Model\Entity\LexorankItem')
	);

	expectedArguments(
		\App\Model\Entity\LexorankItem::hasValue(),
		0,
		argumentsSet('entityFields:App\Model\Entity\LexorankItem')
	);

	expectedArguments(
		\App\Model\Entity\LexorankItem::isDirty(),
		0,
		argumentsSet('entityFields:App\Model\Entity\LexorankItem')
	);

	expectedArguments(
		\App\Model\Entity\LexorankItem::isEmpty(),
		0,
		argumentsSet('entityFields:App\Model\Entity\LexorankItem')
	);

	expectedArguments(
		\App\Model\Entity\LexorankItem::setDirty(),
		0,
		argumentsSet('entityFields:App\Model\Entity\LexorankItem')
	);

	expectedArguments(
		\App\Model\Entity\LexorankItem::setError(),
		0,
		argumentsSet('entityFields:App\Model\Entity\LexorankItem')
	);

	expectedArguments(
		\Cake\Cache\Cache::add(),
		2,
		argumentsSet('cacheEngines')
	);

	expectedArguments(
		\Cake\Cache\Cache::clear(),
		0,
		argumentsSet('cacheEngines')
	);

	expectedArguments(
		\Cake\Cache\Cache::clearGroup(),
		1,
		argumentsSet('cacheEngines')
	);

	expectedArguments(
		\Cake\Cache\Cache::decrement(),
		2,
		argumentsSet('cacheEngines')
	);

	expectedArguments(
		\Cake\Cache\Cache::delete(),
		1,
		argumentsSet('cacheEngines')
	);

	expectedArguments(
		\Cake\Cache\Cache::deleteMany(),
		1,
		argumentsSet('cacheEngines')
	);

	expectedArguments(
		\Cake\Cache\Cache::increment(),
		2,
		argumentsSet('cacheEngines')
	);

	expectedArguments(
		\Cake\Cache\Cache::read(),
		1,
		argumentsSet('cacheEngines')
	);

	expectedArguments(
		\Cake\Cache\Cache::readMany(),
		1,
		argumentsSet('cacheEngines')
	);

	expectedArguments(
		\Cake\Cache\Cache::remember(),
		2,
		argumentsSet('cacheEngines')
	);

	expectedArguments(
		\Cake\Cache\Cache::write(),
		2,
		argumentsSet('cacheEngines')
	);

	exitPoint(\Cake\Console\ConsoleIo::abort());

	expectedArguments(
		\Cake\Controller\ComponentRegistry::unload(),
		0,
		'Auth',
		'Flash',
		'FormProtection',
		'Paginator',
		'RequestHandler',
		'Security'
	);

	override(
		\Cake\Controller\Controller::loadComponent(0),
		map([
			'Auth' => \Cake\Controller\Component\AuthComponent::class,
			'Flash' => \Cake\Controller\Component\FlashComponent::class,
			'FormProtection' => \Cake\Controller\Component\FormProtectionComponent::class,
			'Paginator' => \Cake\Controller\Component\PaginatorComponent::class,
			'RequestHandler' => \Cake\Controller\Component\RequestHandlerComponent::class,
			'Security' => \Cake\Controller\Component\SecurityComponent::class,
		])
	);

	expectedArguments(
		\Cake\Core\Configure::check(),
		0,
		argumentsSet('configureKeys')
	);

	expectedArguments(
		\Cake\Core\Configure::consume(),
		0,
		argumentsSet('configureKeys')
	);

	expectedArguments(
		\Cake\Core\Configure::consumeOrFail(),
		0,
		argumentsSet('configureKeys')
	);

	expectedArguments(
		\Cake\Core\Configure::delete(),
		0,
		argumentsSet('configureKeys')
	);

	expectedArguments(
		\Cake\Core\Configure::read(),
		0,
		argumentsSet('configureKeys')
	);

	expectedArguments(
		\Cake\Core\Configure::readOrFail(),
		0,
		argumentsSet('configureKeys')
	);

	expectedArguments(
		\Cake\Core\Configure::write(),
		0,
		argumentsSet('configureKeys')
	);

	override(
		\Cake\Core\PluginApplicationInterface::addPlugin(0),
		map([
			'ADmad/Sequence' => \Cake\Http\BaseApplication::class,
			'Bake' => \Cake\Http\BaseApplication::class,
			'Cake/TwigView' => \Cake\Http\BaseApplication::class,
			'DebugKit' => \Cake\Http\BaseApplication::class,
			'IdeHelper' => \Cake\Http\BaseApplication::class,
			'Migrations' => \Cake\Http\BaseApplication::class,
		])
	);

	override(
		\Cake\Database\TypeFactory::build(0),
		map([
			'biginteger' => \Cake\Database\Type\IntegerType::class,
			'binary' => \Cake\Database\Type\BinaryType::class,
			'binaryuuid' => \Cake\Database\Type\BinaryUuidType::class,
			'boolean' => \Cake\Database\Type\BoolType::class,
			'char' => \Cake\Database\Type\StringType::class,
			'date' => \Cake\Database\Type\DateType::class,
			'datetime' => \Cake\Database\Type\DateTimeType::class,
			'datetimefractional' => \Cake\Database\Type\DateTimeFractionalType::class,
			'decimal' => \Cake\Database\Type\DecimalType::class,
			'float' => \Cake\Database\Type\FloatType::class,
			'integer' => \Cake\Database\Type\IntegerType::class,
			'json' => \Cake\Database\Type\JsonType::class,
			'smallinteger' => \Cake\Database\Type\IntegerType::class,
			'string' => \Cake\Database\Type\StringType::class,
			'text' => \Cake\Database\Type\StringType::class,
			'time' => \Cake\Database\Type\StringType::class,
			'timestamp' => \Cake\Database\Type\DateTimeType::class,
			'timestampfractional' => \Cake\Database\Type\DateTimeFractionalType::class,
			'timestamptimezone' => \Cake\Database\Type\DateTimeTimezoneType::class,
			'tinyinteger' => \Cake\Database\Type\IntegerType::class,
			'uuid' => \Cake\Database\Type\UuidType::class,
		])
	);

	expectedArguments(
		\Cake\Database\TypeFactory::map(),
		0,
		'biginteger',
		'binary',
		'binaryuuid',
		'boolean',
		'char',
		'date',
		'datetime',
		'datetimefractional',
		'decimal',
		'float',
		'integer',
		'json',
		'smallinteger',
		'string',
		'text',
		'time',
		'timestamp',
		'timestampfractional',
		'timestamptimezone',
		'tinyinteger',
		'uuid'
	);

	expectedArguments(
		\Cake\Datasource\ConnectionManager::get(),
		0,
		'default',
		'test'
	);

	override(
		\Cake\Datasource\ModelAwareTrait::loadModel(0),
		map([
			'DebugKit.Panels' => \DebugKit\Model\Table\PanelsTable::class,
			'DebugKit.Requests' => \DebugKit\Model\Table\RequestsTable::class,
			'IntegerItems' => \App\Model\Table\IntegerItemsTable::class,
			'LexorankItems' => \App\Model\Table\LexorankItemsTable::class,
		])
	);

	override(
		\Cake\Datasource\QueryInterface::find(0),
		map([
			'all' => \Cake\ORM\Query::class,
			'list' => \Cake\ORM\Query::class,
			'recent' => \Cake\ORM\Query::class,
			'threaded' => \Cake\ORM\Query::class,
		])
	);

	expectedArguments(
		\Cake\Http\ServerRequest::getParam(),
		0,
		'_ext',
		'_matchedRoute',
		'action',
		'controller',
		'pass',
		'plugin',
		'prefix'
	);

	override(
		\Cake\ORM\Association::find(0),
		map([
			'all' => \Cake\ORM\Query::class,
			'list' => \Cake\ORM\Query::class,
			'recent' => \Cake\ORM\Query::class,
			'threaded' => \Cake\ORM\Query::class,
		])
	);

	override(
		\Cake\ORM\Locator\LocatorAwareTrait::fetchTable(0),
		map([
			'DebugKit.Panels' => \DebugKit\Model\Table\PanelsTable::class,
			'DebugKit.Requests' => \DebugKit\Model\Table\RequestsTable::class,
			'IntegerItems' => \App\Model\Table\IntegerItemsTable::class,
			'LexorankItems' => \App\Model\Table\LexorankItemsTable::class,
		])
	);

	override(
		\Cake\ORM\Locator\LocatorInterface::get(0),
		map([
			'DebugKit.Panels' => \DebugKit\Model\Table\PanelsTable::class,
			'DebugKit.Requests' => \DebugKit\Model\Table\RequestsTable::class,
			'IntegerItems' => \App\Model\Table\IntegerItemsTable::class,
			'LexorankItems' => \App\Model\Table\LexorankItemsTable::class,
		])
	);

	expectedArguments(
		\Cake\ORM\Table::addBehavior(),
		0,
		'ADmad/Sequence.Sequence',
		'CounterCache',
		'DebugKit.Timed',
		'LexoSequence',
		'Timestamp',
		'Translate',
		'Tree'
	);

	override(
		\Cake\ORM\Table::belongToMany(0),
		map([
			'DebugKit.Panels' => \Cake\ORM\Association\BelongsToMany::class,
			'DebugKit.Requests' => \Cake\ORM\Association\BelongsToMany::class,
			'IntegerItems' => \Cake\ORM\Association\BelongsToMany::class,
			'LexorankItems' => \Cake\ORM\Association\BelongsToMany::class,
		])
	);

	override(
		\Cake\ORM\Table::belongsTo(0),
		map([
			'DebugKit.Panels' => \Cake\ORM\Association\BelongsTo::class,
			'DebugKit.Requests' => \Cake\ORM\Association\BelongsTo::class,
			'IntegerItems' => \Cake\ORM\Association\BelongsTo::class,
			'LexorankItems' => \Cake\ORM\Association\BelongsTo::class,
		])
	);

	override(
		\Cake\ORM\Table::find(0),
		map([
			'all' => \Cake\ORM\Query::class,
			'list' => \Cake\ORM\Query::class,
			'recent' => \Cake\ORM\Query::class,
			'threaded' => \Cake\ORM\Query::class,
		])
	);

	override(
		\Cake\ORM\Table::hasMany(0),
		map([
			'DebugKit.Panels' => \Cake\ORM\Association\HasMany::class,
			'DebugKit.Requests' => \Cake\ORM\Association\HasMany::class,
			'IntegerItems' => \Cake\ORM\Association\HasMany::class,
			'LexorankItems' => \Cake\ORM\Association\HasMany::class,
		])
	);

	override(
		\Cake\ORM\Table::hasOne(0),
		map([
			'DebugKit.Panels' => \Cake\ORM\Association\HasOne::class,
			'DebugKit.Requests' => \Cake\ORM\Association\HasOne::class,
			'IntegerItems' => \Cake\ORM\Association\HasOne::class,
			'LexorankItems' => \Cake\ORM\Association\HasOne::class,
		])
	);

	expectedArguments(
		\Cake\ORM\Table::removeBehavior(),
		0,
		'CounterCache',
		'LexoSequence',
		'Sequence',
		'Timed',
		'Timestamp',
		'Translate',
		'Tree'
	);

	override(
		\Cake\ORM\TableRegistry::get(0),
		map([
			'DebugKit.Panels' => \DebugKit\Model\Table\PanelsTable::class,
			'DebugKit.Requests' => \DebugKit\Model\Table\RequestsTable::class,
			'IntegerItems' => \App\Model\Table\IntegerItemsTable::class,
			'LexorankItems' => \App\Model\Table\LexorankItemsTable::class,
		])
	);

	expectedArguments(
		\Cake\Routing\Router::pathUrl(),
		0,
		argumentsSet('routePaths')
	);

	expectedArguments(
		\Cake\TestSuite\TestCase::addFixture(),
		0,
		'app.IntegerItems',
		'app.LexorankItems',
		'core.Articles',
		'core.ArticlesMoreTranslations',
		'core.ArticlesTags',
		'core.ArticlesTranslations',
		'core.Attachments',
		'core.AuthUsers',
		'core.Authors',
		'core.AuthorsTags',
		'core.AuthorsTranslations',
		'core.BinaryUuidItems',
		'core.BinaryUuidItemsBinaryUuidTags',
		'core.BinaryUuidTags',
		'core.CakeSessions',
		'core.Categories',
		'core.ColumnSchemaAwareTypeValues',
		'core.Comments',
		'core.CommentsTranslations',
		'core.CompositeIncrements',
		'core.CounterCacheCategories',
		'core.CounterCacheComments',
		'core.CounterCachePosts',
		'core.CounterCacheUserCategoryPosts',
		'core.CounterCacheUsers',
		'core.Datatypes',
		'core.DateKeys',
		'core.FeaturedTags',
		'core.Members',
		'core.MenuLinkTrees',
		'core.NullableAuthors',
		'core.NumberTrees',
		'core.OrderedUuidItems',
		'core.Orders',
		'core.OtherArticles',
		'core.PolymorphicTagged',
		'core.Posts',
		'core.Products',
		'core.Profiles',
		'core.Sections',
		'core.SectionsMembers',
		'core.SectionsTranslations',
		'core.Sessions',
		'core.SiteArticles',
		'core.SiteArticlesTags',
		'core.SiteAuthors',
		'core.SiteTags',
		'core.SpecialTags',
		'core.SpecialTagsTranslations',
		'core.Tags',
		'core.TagsShadowTranslations',
		'core.TagsTranslations',
		'core.TestPluginComments',
		'core.Things',
		'core.Translates',
		'core.UniqueAuthors',
		'core.Users',
		'core.UuidItems',
		'plugin.Bake.Articles',
		'plugin.Bake.ArticlesTags',
		'plugin.Bake.Authors',
		'plugin.Bake.BakeArticles',
		'plugin.Bake.BakeArticlesBakeTags',
		'plugin.Bake.BakeCar',
		'plugin.Bake.BakeComments',
		'plugin.Bake.BakeTags',
		'plugin.Bake.BakeTemplateAuthors',
		'plugin.Bake.BakeTemplateProfiles',
		'plugin.Bake.BakeTemplateRoles',
		'plugin.Bake.BinaryTests',
		'plugin.Bake.Categories',
		'plugin.Bake.CategoriesProducts',
		'plugin.Bake.CategoryThreads',
		'plugin.Bake.Comments',
		'plugin.Bake.Datatypes',
		'plugin.Bake.HiddenFields',
		'plugin.Bake.Invitations',
		'plugin.Bake.NumberTrees',
		'plugin.Bake.OldProducts',
		'plugin.Bake.Posts',
		'plugin.Bake.ProductVersions',
		'plugin.Bake.Products',
		'plugin.Bake.Tags',
		'plugin.Bake.TodoItems',
		'plugin.Bake.TodoItemsTodoLabels',
		'plugin.Bake.TodoLabels',
		'plugin.Bake.TodoTasks',
		'plugin.Bake.UniqueFields',
		'plugin.Bake.Users',
		'plugin.DebugKit.Panels',
		'plugin.DebugKit.Requests',
		'plugin.IdeHelper.BarBars',
		'plugin.IdeHelper.Cars',
		'plugin.IdeHelper.Foo',
		'plugin.IdeHelper.Houses',
		'plugin.IdeHelper.Wheels',
		'plugin.IdeHelper.Windows'
	);

	expectedArguments(
		\Cake\Validation\Validator::allowEmptyArray(),
		2,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\Validation\Validator::allowEmptyDate(),
		2,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\Validation\Validator::allowEmptyDateTime(),
		2,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\Validation\Validator::allowEmptyFile(),
		2,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\Validation\Validator::allowEmptyFor(),
		2,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\Validation\Validator::allowEmptyString(),
		2,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\Validation\Validator::allowEmptyTime(),
		2,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\Validation\Validator::notEmptyArray(),
		2,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\Validation\Validator::notEmptyDate(),
		2,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\Validation\Validator::notEmptyDateTime(),
		2,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\Validation\Validator::notEmptyFile(),
		2,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\Validation\Validator::notEmptyString(),
		2,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\Validation\Validator::notEmptyTime(),
		2,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\Validation\Validator::requirePresence(),
		1,
		argumentsSet('validationWhen')
	);

	expectedArguments(
		\Cake\View\Helper\FormHelper::control(),
		0,
		'created',
		'id',
		'modified',
		'name',
		'position'
	);

	expectedArguments(
		\Cake\View\Helper\HtmlHelper::linkFromPath(),
		1,
		argumentsSet('routePaths')
	);

	expectedArguments(
		\Cake\View\Helper\UrlHelper::buildFromPath(),
		0,
		argumentsSet('routePaths')
	);

	expectedArguments(
		\Cake\View\View::element(),
		0,
		'Cake/TwigView.twig_panel',
		'DebugKit.cache_panel',
		'DebugKit.deprecations_panel',
		'DebugKit.environment_panel',
		'DebugKit.history_panel',
		'DebugKit.include_panel',
		'DebugKit.log_panel',
		'DebugKit.mail_panel',
		'DebugKit.packages_panel',
		'DebugKit.preview_header',
		'DebugKit.request_panel',
		'DebugKit.routes_panel',
		'DebugKit.session_panel',
		'DebugKit.sql_log_panel',
		'DebugKit.timer_panel',
		'DebugKit.variables_panel',
		'flash/default',
		'flash/error',
		'flash/success'
	);

	override(
		\Cake\View\View::loadHelper(0),
		map([
			'Bake.Bake' => \Bake\View\Helper\BakeHelper::class,
			'Bake.DocBlock' => \Bake\View\Helper\DocBlockHelper::class,
			'Breadcrumbs' => \Cake\View\Helper\BreadcrumbsHelper::class,
			'DebugKit.Credentials' => \DebugKit\View\Helper\CredentialsHelper::class,
			'DebugKit.SimpleGraph' => \DebugKit\View\Helper\SimpleGraphHelper::class,
			'DebugKit.Toolbar' => \DebugKit\View\Helper\ToolbarHelper::class,
			'Flash' => \Cake\View\Helper\FlashHelper::class,
			'Form' => \Cake\View\Helper\FormHelper::class,
			'Html' => \Cake\View\Helper\HtmlHelper::class,
			'IdeHelper.DocBlock' => \IdeHelper\View\Helper\DocBlockHelper::class,
			'Migrations.Migration' => \Migrations\View\Helper\MigrationHelper::class,
			'Number' => \Cake\View\Helper\NumberHelper::class,
			'Paginator' => \Cake\View\Helper\PaginatorHelper::class,
			'Text' => \Cake\View\Helper\TextHelper::class,
			'Time' => \Cake\View\Helper\TimeHelper::class,
			'Url' => \Cake\View\Helper\UrlHelper::class,
		])
	);

	expectedArguments(
		\Cake\View\ViewBuilder::addHelper(),
		0,
		'Bake.Bake',
		'Bake.DocBlock',
		'Breadcrumbs',
		'DebugKit.Credentials',
		'DebugKit.SimpleGraph',
		'DebugKit.Toolbar',
		'Flash',
		'Form',
		'Html',
		'IdeHelper.DocBlock',
		'Migrations.Migration',
		'Number',
		'Paginator',
		'Text',
		'Time',
		'Url'
	);

	expectedArguments(
		\Cake\View\ViewBuilder::setLayout(),
		0,
		'DebugKit.dashboard',
		'DebugKit.mailer',
		'DebugKit.toolbar',
		'ajax',
		'default',
		'error'
	);

	expectedArguments(
		\Migrations\AbstractMigration::table(),
		0,
		argumentsSet('tableNames')
	);

	expectedArguments(
		\Migrations\AbstractSeed::table(),
		0,
		argumentsSet('tableNames')
	);

	expectedArguments(
		\Migrations\Table::addColumn(),
		0,
		argumentsSet('columnNames')
	);

	expectedArguments(
		\Migrations\Table::addColumn(),
		1,
		argumentsSet('columnTypes')
	);

	expectedArguments(
		\Migrations\Table::changeColumn(),
		0,
		argumentsSet('columnNames')
	);

	expectedArguments(
		\Migrations\Table::changeColumn(),
		1,
		argumentsSet('columnTypes')
	);

	expectedArguments(
		\Migrations\Table::hasColumn(),
		0,
		argumentsSet('columnNames')
	);

	expectedArguments(
		\Migrations\Table::removeColumn(),
		0,
		argumentsSet('columnNames')
	);

	expectedArguments(
		\Migrations\Table::renameColumn(),
		0,
		argumentsSet('columnNames')
	);

	expectedArguments(
		\Migrations\Table::renameColumn(),
		1,
		argumentsSet('columnNames')
	);

	expectedArguments(
		\Phinx\Seed\AbstractSeed::table(),
		0,
		argumentsSet('tableNames')
	);

	expectedArguments(
		\__d(),
		0,
		'a_dmad/sequence',
		'bake',
		'cake',
		'cake/twig_view',
		'debug_kit',
		'ide_helper',
		'migrations'
	);

	expectedArguments(
		\env(),
		0,
		'BASH_PROFILE',
		'BIND_DNSSEC_VALIDATE',
		'BIND_DNS_RESOLVER',
		'BIND_EXPIRY_TIME',
		'BIND_LOG_DNS_QUERIES',
		'BIND_MAX_CACHE_TIME',
		'BIND_REFRESH_TIME',
		'BIND_RETRY_TIME',
		'BIND_TTL_TIME',
		'CGI_MODE',
		'COMPOSER_MEMORY_LIMIT',
		'CONTENT_LENGTH',
		'CONTENT_TYPE',
		'DEBUG_COMPOSE_ENTRYPOINT',
		'DEBUG_ENTRYPOINT',
		'DEVILBOX_PATH',
		'DEVILBOX_UI_ENABLE',
		'DEVILBOX_UI_PASSWORD',
		'DEVILBOX_UI_PROTECT',
		'DEVILBOX_UI_SSL_CN',
		'DEVILBOX_VENDOR_PHPMYADMIN_AUTOLOGIN',
		'DEVILBOX_VENDOR_PHPPGADMIN_AUTOLOGIN',
		'DISABLE_MODULES',
		'DNS_CHECK_TIMEOUT',
		'DOCKER_LOGS',
		'DOCUMENT_ROOT',
		'DOCUMENT_URI',
		'ENABLE_MAIL',
		'ENABLE_MODULES',
		'EXTRA_HOSTS',
		'FORWARD_PORTS_TO_LOCALHOST',
		'GATEWAY_INTERFACE',
		'GPG_KEYS',
		'HOME',
		'HOSTNAME',
		'HOST_PATH_BACKUPDIR',
		'HOST_PATH_HTTPD_DATADIR',
		'HOST_PATH_SSH_DIR',
		'HOST_PORT_BIND',
		'HOST_PORT_HTTPD',
		'HOST_PORT_HTTPD_SSL',
		'HOST_PORT_MEMCD',
		'HOST_PORT_MONGO',
		'HOST_PORT_MYSQL',
		'HOST_PORT_PGSQL',
		'HOST_PORT_REDIS',
		'HTTPD_DOCROOT_DIR',
		'HTTPD_NGINX_WORKER_CONNECTIONS',
		'HTTPD_NGINX_WORKER_PROCESSES',
		'HTTPD_SERVER',
		'HTTPD_TEMPLATE_DIR',
		'HTTPD_TIMEOUT_TO_PHP_FPM',
		'HTTPD_VHOST_SSL_TYPE',
		'HTTPS',
		'HTTP_ACCEPT',
		'HTTP_ACCEPT_ENCODING',
		'HTTP_ACCEPT_LANGUAGE',
		'HTTP_CONNECTION',
		'HTTP_COOKIE',
		'HTTP_HOST',
		'HTTP_USER_AGENT',
		'INFOPATH',
		'LC_ALL',
		'LOCAL_LISTEN_ADDR',
		'LS_COLORS',
		'MANPATH',
		'MEMCD_SERVER',
		'MONGO_SERVER',
		'MOUNT_OPTIONS',
		'MYSQL_BACKUP_HOST',
		'MYSQL_BACKUP_PASS',
		'MYSQL_BACKUP_USER',
		'MYSQL_ROOT_PASSWORD',
		'MYSQL_SERVER',
		'MY_GID',
		'MY_GROUP',
		'MY_UID',
		'MY_USER',
		'NEW_GID',
		'NEW_UID',
		'NVM_BIN',
		'NVM_CD_FLAGS',
		'NVM_DIR',
		'NVM_INC',
		'OLDPWD',
		'PATH',
		'PATH_TRANSLATED',
		'PGSQL_HOST_AUTH_METHOD',
		'PGSQL_ROOT_PASSWORD',
		'PGSQL_ROOT_USER',
		'PGSQL_SERVER',
		'PHPIZE_DEPS',
		'PHP_ASC_URL',
		'PHP_CFLAGS',
		'PHP_CPPFLAGS',
		'PHP_EXTRA_CONFIGURE_ARGS',
		'PHP_INI_DIR',
		'PHP_LDFLAGS',
		'PHP_MAIL_CATCH_ALL',
		'PHP_MODULES_DISABLE',
		'PHP_MODULES_ENABLE',
		'PHP_SELF',
		'PHP_SERVER',
		'PHP_SHA256',
		'PHP_URL',
		'PHP_VERSION',
		'PWD',
		'QUERY_STRING',
		'REDIRECT_STATUS',
		'REDIS_ARGS',
		'REDIS_SERVER',
		'REMOTE_ADDR',
		'REMOTE_PORT',
		'REQUEST_METHOD',
		'REQUEST_SCHEME',
		'REQUEST_TIME',
		'REQUEST_TIME_FLOAT',
		'REQUEST_URI',
		'SCRIPT_FILENAME',
		'SCRIPT_NAME',
		'SERVER_NAME',
		'SERVER_PORT',
		'SERVER_PROTOCOL',
		'SHLVL',
		'TERM',
		'TIMEZONE',
		'TLD_SUFFIX',
		'VIPSHOME',
		'argc',
		'argv'
	);

	expectedArguments(
		\urlArray(),
		0,
		argumentsSet('routePaths')
	);

	registerArgumentsSet(
		'cacheEngines',
		'_cake_core_',
		'_cake_model_',
		'_cake_routes_',
		'default'
	);

	registerArgumentsSet(
		'columnNames',
		'created',
		'id',
		'modified',
		'name',
		'position'
	);

	registerArgumentsSet(
		'columnTypes',
		'biginteger',
		'binary',
		'binaryuuid',
		'bit',
		'blob',
		'boolean',
		'char',
		'date',
		'datetime',
		'decimal',
		'double',
		'enum',
		'float',
		'geometry',
		'integer',
		'json',
		'linestring',
		'longblob',
		'mediumblob',
		'mediuminteger',
		'point',
		'polygon',
		'set',
		'smallinteger',
		'string',
		'text',
		'time',
		'timestamp',
		'tinyblob',
		'tinyinteger',
		'uuid',
		'varbinary',
		'year'
	);

	registerArgumentsSet(
		'configureKeys',
		'App',
		'App.base',
		'App.cssBaseUrl',
		'App.defaultLocale',
		'App.defaultTimezone',
		'App.dir',
		'App.encoding',
		'App.fullBaseUrl',
		'App.imageBaseUrl',
		'App.jsBaseUrl',
		'App.namespace',
		'App.paths',
		'App.paths.locales',
		'App.paths.plugins',
		'App.paths.templates',
		'App.webroot',
		'App.wwwRoot',
		'Asset',
		'Debugger',
		'Debugger.editor',
		'Error',
		'Error.errorLevel',
		'Error.exceptionRenderer',
		'Error.ignoredDeprecationPaths',
		'Error.log',
		'Error.skipLog',
		'Error.trace',
		'Security',
		'Session',
		'Session.defaults',
		'debug',
		'plugins',
		'plugins.ADmad/Sequence',
		'plugins.Bake',
		'plugins.Cake/TwigView',
		'plugins.DebugKit',
		'plugins.IdeHelper',
		'plugins.Migrations'
	);

	registerArgumentsSet(
		'entityFields:App\Model\Entity\IntegerItem',
		'created',
		'id',
		'modified',
		'name',
		'position'
	);

	registerArgumentsSet(
		'entityFields:App\Model\Entity\LexorankItem',
		'created',
		'id',
		'modified',
		'name',
		'position'
	);

	registerArgumentsSet(
		'routePaths',
		'DebugKit.Composer::checkDependencies',
		'DebugKit.Dashboard::index',
		'DebugKit.Dashboard::reset',
		'DebugKit.MailPreview::email',
		'DebugKit.MailPreview::index',
		'DebugKit.MailPreview::sent',
		'DebugKit.Panels::index',
		'DebugKit.Panels::latestHistory',
		'DebugKit.Panels::view',
		'DebugKit.Requests::view',
		'DebugKit.Toolbar::clearCache',
		'IntegerItems::add',
		'IntegerItems::delete',
		'IntegerItems::edit',
		'IntegerItems::index',
		'IntegerItems::view',
		'LexorankItems::add',
		'LexorankItems::delete',
		'LexorankItems::edit',
		'LexorankItems::index',
		'LexorankItems::view',
		'Pages::display'
	);

	registerArgumentsSet(
		'tableNames',
		'integer_items',
		'lexorank_items'
	);

	registerArgumentsSet(
		'validationWhen',
		'create',
		'update'
	);

}
