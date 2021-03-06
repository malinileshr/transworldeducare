<?php
class SgpbPopupConfig
{
	public static function addDefine($name, $value)
	{
		if (!defined($name)) {
			define($name, $value);
		}
	}

	public static function init()
	{
		self::addDefine('SGPB_POPUP_FREE_MIN_VERSION', '3.0.2');
		self::addDefine('SGPB_POPUP_PRO_MIN_VERSION', '4.0');

		self::addDefine('SGPB_POPUP_PKG_FREE', 1);
		self::addDefine('SGPB_POPUP_PKG_SILVER', 2);
		self::addDefine('SGPB_POPUP_PKG_GOLD', 3);
		self::addDefine('SGPB_POPUP_PKG_PLATINUM', 4);
		self::addDefine('SG_POPUP_PRO_URL', 'https://popup-builder.com/#prices');
		self::addDefine('SG_POPUP_EXTENSIONS_URL', 'https://popup-builder.com/#extensions');
		self::addDefine('SG_POPUP_SUPPORT_URL', 'https://wordpress.org/support/plugin/popup-builder');
		self::addDefine('SG_POPUP_TICKET_URL', 'https://sygnoos.ladesk.com/submit_ticket');
		self::addDefine('SG_POPUP_RATE_US_URL', 'https://wordpress.org/support/plugin/popup-builder/reviews/?filter=5');
		self::addDefine('SG_POPUP_IFRAME_URL', 'https://popup-builder.com/downloads/iframe/');
		self::addDefine('SG_POPUP_SCROLL_URL', 'https://popup-builder.com/downloads/scroll/');
		self::addDefine('SG_POPUP_AD_BLOCK_URL', 'https://popup-builder.com/downloads/adblock/');
		self::addDefine('SG_POPUP_ANALYTICS_URL', 'https://popup-builder.com/downloads/analytics/');
		self::addDefine('SG_POPUP_EXIT_INTENT_URL', 'https://popup-builder.com/downloads/exit-intent/');
		self::addDefine('SG_POPUP_MAILCHIMP_URL', 'https://popup-builder.com/downloads/mailchimp/');
		self::addDefine('SG_POPUP_AWEBER_URL', 'https://popup-builder.com/downloads/aweber/');
		self::addDefine('SG_POPUP_WOOCOMMERCE_URL', 'https://popup-builder.com/downloads/woocommerce/');
		self::addDefine('SG_POPUP_RECENT_SALES_URL', 'https://popup-builder.com/downloads/recent-sales/');
		self::addDefine('SG_POPUP_VIDEO_URL', 'https://popup-builder.com/downloads/video/');
		self::addDefine('SG_POPUP_SOCIAL_URL', 'https://popup-builder.com/downloads/social/');
		self::addDefine('SG_POPUP_COUNTDOWN_URL', 'https://popup-builder.com/downloads/countdown/');
		self::addDefine('SG_POPUP_RESTRICTION_URL', 'https://popup-builder.com/downloads/age-restriction-popup/');
		self::addDefine('SG_POPUP_CONTACT_FORM_URL', 'https://popup-builder.com/downloads/contact-popup/');
		self::addDefine('SG_POPUP_INACTIVITY_URL', 'https://popup-builder.com/downloads/inactivity/');
		self::addDefine('SG_POPUP_SCHEDULING_URL', 'https://popup-builder.com/downloads/scheduling/');
		self::addDefine('SG_POPUP_GEO_TARGETING_URL', 'https://popup-builder.com/downloads/geo-targeting/');
		self::addDefine('SG_POPUP_RANDOM_URL', 'https://popup-builder.com/downloads/random/');
		self::addDefine('SG_POPUP_ADVANCED_CLOSING_URL', 'https://popup-builder.com/downloads/advanced-closing/');
		self::addDefine('SG_POPUP_ADVANCED_TARGETING_URL', 'https://popup-builder.com/downloads/advanced-targeting/');
		self::addDefine('SG_POPUP_ALL_EXTENSIONS_URL', 'https://popup-builder.com/downloads/category/extensions/');
		self::addDefine('SG_POPUP_LOGIN_URL', 'https://popup-builder.com/downloads/login-popup/');
		self::addDefine('SG_POPUP_REGISTRATION_URL', 'https://popup-builder.com/downloads/registration-popup/');
		self::addDefine('SG_POPUP_SUBSCRIPTION_PLUS_URL', 'https://popup-builder.com/downloads/subscription-plus-popup/');
		self::addDefine('SG_POPUP_PUSH_NOTIFICATION_URL', 'https://popup-builder.com/downloads/web-push-notification-popup/');
		self::addDefine('SG_POPUP_ADMIN_URL', admin_url());
		self::addDefine('SG_POPUP_BUILDER_URL', plugins_url().'/'.SG_POPUP_FOLDER_NAME.'/');
		self::addDefine('SG_POPUP_BUILDER_PATH', WP_PLUGIN_DIR.'/'.SG_POPUP_FOLDER_NAME.'/');
		self::addDefine('SG_POPUP_COM_PATH', SG_POPUP_BUILDER_PATH.'com/');
		self::addDefine('SG_POPUP_CONFIG_PATH', SG_POPUP_COM_PATH.'config/');
		self::addDefine('SG_POPUP_PUBLIC_PATH', SG_POPUP_BUILDER_PATH.'public/');
		self::addDefine('SG_POPUP_CLASSES_PATH', SG_POPUP_COM_PATH.'classes/');
		self::addDefine('SG_POPUP_DATA_TABLES_PATH', SG_POPUP_CLASSES_PATH.'dataTable/');
		self::addDefine('SG_POPUP_CLASSES_POPUPS_PATH', SG_POPUP_CLASSES_PATH.'popups/');
		self::addDefine('SG_POPUP_EXTENSION_PATH', SG_POPUP_CLASSES_PATH.'extension/');
		self::addDefine('SG_POPUP_LIBS_PATH', SG_POPUP_COM_PATH.'libs/');
		self::addDefine('SG_POPUP_HELPERS_PATH', SG_POPUP_COM_PATH.'helpers/');
		self::addDefine('SG_POPUP_JS_PATH', SG_POPUP_PUBLIC_PATH.'js/');
		self::addDefine('SG_POPUP_CSS_PATH', SG_POPUP_PUBLIC_PATH.'css/');
		self::addDefine('SG_POPUP_VIEWS_PATH', SG_POPUP_PUBLIC_PATH.'views/');
		self::addDefine('SG_POPUP_TYPE_OPTIONS_PATH', SG_POPUP_VIEWS_PATH.'options/');
		self::addDefine('SG_POPUP_TYPE_MAIN_PATH', SG_POPUP_VIEWS_PATH.'main/');
		self::addDefine('SG_POPUP_PUBLIC_URL', SG_POPUP_BUILDER_URL.'public/');
		self::addDefine('SG_POPUP_JS_URL', SG_POPUP_PUBLIC_URL.'js/');
		self::addDefine('SG_POPUP_CSS_URL', SG_POPUP_PUBLIC_URL.'css/');
		self::addDefine('SG_POPUP_IMG_URL', SG_POPUP_PUBLIC_URL.'img/');
		self::addDefine('SG_POPUP_SOUND_URL', SG_POPUP_PUBLIC_URL.'sound/');
		self::addDefine('SG_POPUP_VIEWS_URL', SG_POPUP_PUBLIC_URL.'views/');
		self::addDefine('SG_POPUP_EMAIL_TEMPLATES_URL', SG_POPUP_VIEWS_URL.'emailTemplates/');
		self::addDefine('SG_POPUP_DEFAULT_TIME_ZONE', 'UTC');
		self::addDefine('SG_POPUP_CATEGORY_TAXONOMY', 'popup-categories');
		self::addDefine('SG_POPUP_MINIMUM_PHP_VERSION', '5.3.3');
		self::addDefine('SG_POPUP_POST_TYPE', 'popupbuilder');
		self::addDefine('SG_POPUP_NEWSLETTER_PAGE', 'sgpbNewsletter');
		self::addDefine('SG_POPUP_SETTINGS_PAGE', 'sgpbSettings');
		self::addDefine('SG_POPUP_SUBSCRIBERS_PAGE', 'sgpbSubscribers');
		self::addDefine('SG_POPUP_SUPPORT_PAGE', 'sgpbSupport');
		self::addDefine('SGPB_POPUP_LICENSE', 'license');
		self::addDefine('SG_POPUP_EXTEND_PAGE', 'extend');
		self::addDefine('SGPB_FILTER_REPEAT_INTERVAL', 50);
		self::addDefine('SG_POPUP_TEXT_DOMAIN', 'popupBuilder');
		self::addDefine('SG_POPUP_STORE_URL', 'https://popup-builder.com/');
		self::addDefine('SG_POPUP_AUTHOR', 'Sygnoos');
		self::addDefine('SG_POPUP_KEY', 'POPUP_BUILDER');
		self::addDefine('SG_AJAX_NONCE', 'popupBuilderAjaxNonce');
		self::addDefine('SG_CONDITION_FIRST_RULE', 0);
		self::addDefine('SGPB_AJAX_STATUS_FALSE', 0);
		self::addDefine('SGPB_AJAX_STATUS_TRUE', 1);
		self::addDefine('SGPB_SUBSCRIBERS_TABLE_NAME', 'sgpb_subscribers');
		self::addDefine('SGPB_POSTS_TABLE_NAME', 'posts');
		self::addDefine('SGPB_APP_POPUP_TABLE_LIMIT', 15);
		self::addDefine('SGPB_SUBSCRIBERS_ERROR_TABLE_NAME', 'sgpb_subscription_error_log');
		self::addDefine('SGPB_CRON_REPEAT_INTERVAL', 1);
		self::addDefine('SGPB_BANNER_CRON_TEXT_URL', 'https://popup-builder.com/sgpb-banner.php?banner=main');
		self::addDefine('SGPB_METABOX_BANNER_CRON_TEXT_URL', 'https://popup-builder.com/sgpb-banner.php?banner=sidebar1');
		self::addDefine('SGPB_FACEBOOK_APP_ID', 1725074220856984);
		self::addDefine('SGPB_POPUP_TYPE_RESTRICTION', 'ageRestriction');
		self::addDefine('SGPB_POPUP_DEFAULT_SOUND', 'popupOpenSound.wav');
		self::addDefine('SGPB_POPUP_EXTENSIONS_PATH', SG_POPUP_COM_PATH.'extensions/');
		self::addDefine('SGPB_POPUP_ADVANCED_CLOSING_PLUGIN_KEY', 'popupbuilder-advanced-closing/PopupBuilderAdvancedClosing.php');
		self::addDefine('SGPB_DONT_SHOW_POPUP_EXPIRY', 365);
		self::addDefine('SGPB_CONTACT_FORM_7_BEHAVIOR_KEY', 'contact-form-7');
		self::addDefine('SGPB_CSS_CLASS_ACTIONS_KEY', 'setByCssClass');
		self::addDefine('SGPB_CLICK_ACTION_KEY', 'setByClick');
		self::addDefine('SGPB_HOVER_ACTION_KEY', 'setByHover');
		self::addDefine('SG_COUNTDOWN_COUNTER_SECONDS_SHOW', 1);
		self::addDefine('SG_COUNTDOWN_COUNTER_SECONDS_HIDE', 2);
		self::addDefine('SGPB_POPUP_SCHEDULING_EXTENSION_KEY', 'popupbuilder-scheduling/PopupBuilderScheduling.php');
		self::addDefine('SGPB_POPUP_GEO_TARGETING_EXTENSION_KEY', 'popupbuilder-geo-targeting/PopupBuilderGeoTargeting.php');
		self::addDefine('SGPB_POPUP_ADVANCED_TARGETING_EXTENSION_KEY', 'popupbuilder-advanced-targeting/PopupBuilderAdvancedTargeting.php');
		self::addDefine('SGPB_POPUP_SUBSCRIPTION_PLUS_EXTENSION_KEY', 'popupbuilder-subscription-plus/PopupBuilderSubscriptionPlus.php');
		self::addDefine('SGPB_ASK_REVIEW_POPUP_COUNT', 80);
		self::addDefine('SGPB_REVIEW_POPUP_PERIOD', 30);
		self::addDefine('SGPB_POPUP_EXPORT_FILE_NAME', 'PopupBuilderPopups.xml');
		self::addDefine('SG_POPUP_AUTORESPONDER_POST_TYPE', 'sgpbautoresponder');
		self::popupTypesInit();
	}

	public static function popupTypesInit()
	{
		global $SGPB_POPUP_TYPES;

		$SGPB_POPUP_TYPES['typeName'] = apply_filters('sgpbAddPopupType', array(
			'image' => SGPB_POPUP_PKG_FREE,
			'html' => SGPB_POPUP_PKG_FREE,
			'fblike' => SGPB_POPUP_PKG_FREE,
			'subscription' => SGPB_POPUP_PKG_FREE
		));

		$SGPB_POPUP_TYPES['typePath'] = apply_filters('sgpbAddPopupTypePath', array(
			'image' => SG_POPUP_CLASSES_POPUPS_PATH,
			'html' => SG_POPUP_CLASSES_POPUPS_PATH,
			'fblike' => SG_POPUP_CLASSES_POPUPS_PATH,
			'subscription' => SG_POPUP_CLASSES_POPUPS_PATH
		));

		$SGPB_POPUP_TYPES['typeLabels'] = apply_filters('sgpbAddPopupTypeLabels', array(
			'image' => __('Image', SG_POPUP_TEXT_DOMAIN),
			'html' => __('HTML', SG_POPUP_TEXT_DOMAIN),
			'fblike' => __('Facebook', SG_POPUP_TEXT_DOMAIN),
			'subscription' => __('Subscription', SG_POPUP_TEXT_DOMAIN)
		));
	}
}

SgpbPopupConfig::init();
