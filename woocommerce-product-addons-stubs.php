<?php
/**
 * Generated stub declarations for WooCommerce Product Add-Ons.
 * @see https://dokan.co
 * @see https://github.com/mralaminahamed/phpstan-woocommerce-product-addons-stubs
 */

/**
 * Adds a custom global add-ons list table.
 *
 * @class    WC_PAO_List_Table
 * @version  6.5.1
 */
class WC_PAO_List_Table extends \WP_List_Table
{
    /**
     * Page home URL.
     *
     * @const PAGE_URL
     */
    const PAGE_URL = 'edit.php?post_type=product&page=addons';
    /**
     * Total view records.
     *
     * @var int
     */
    public $total_items = 0;
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Handles the title column output.
     *
     * @param array $item
     */
    public function column_name($item)
    {
    }
    /**
     * Handles the checkbox column output.
     *
     * @param array $item
     */
    public function column_cb($item)
    {
    }
    /**
     * Handles the Priority column output.
     *
     * @param array $item
     */
    public function column_priority($item)
    {
    }
    /**
     * Handles the Product Categories column output.
     *
     * @param array $item
     */
    public function column_product_categories($item)
    {
    }
    /**
     * Handles the Number of fields column output.
     *
     * @param array $item
     */
    public function column_fields($item)
    {
    }
    /**
     * Get a list of columns. The format is:
     * 'internal-name' => 'Title'
     */
    public function get_columns()
    {
    }
    /**
     * Return sortable columns.
     *
     * @return array
     */
    public function get_sortable_columns()
    {
    }
    /**
     * Returns bulk actions.
     *
     * @return array
     */
    protected function get_bulk_actions()
    {
    }
    /**
     * Process bulk actions.
     *
     * @return void
     */
    private function process_bulk_action()
    {
    }
    /**
     * Query the DB and attach items.
     *
     * @return void
     */
    public function prepare_items()
    {
    }
    /**
     * Message to be displayed when there are no items.
     *
     * @return void
     */
    public function no_items()
    {
    }
}
/**
 * Product Add-Ons admin notices handling.
 *
 * @class    WC_PAO_Admin_Notices
 * @version  6.3.2
 */
class WC_PAO_Admin_Notices
{
    /**
     * Notices presisting on the next request.
     * @var array
     */
    public static $meta_box_notices = array();
    /**
     * Notices displayed on the current request.
     * @var array
     */
    public static $admin_notices = array();
    /**
     * Maintenance notices displayed on every request until cleared.
     * @var array
     */
    public static $maintenance_notices = array();
    /**
     * Dismissible notices displayed on the current request.
     * @var array
     */
    public static $dismissed_notices = array();
    /**
     * Constructor.
     */
    public static function init()
    {
    }
    /**
     * Add a notice/error.
     *
     * @param  string   $text
     * @param  mixed    $args
     * @param  boolean  $save_notice
     */
    public static function add_notice($text, $args, $save_notice = \false)
    {
    }
    /**
     * Checks if a notice that belongs to a the specified uniqueness context already exists.
     *
     * @since  6.0.0
     *
     * @param  string  $context
     * @return bool
     */
    private static function unique_notice_exists($context)
    {
    }
    /**
     * Get a setting for a notice type.
     *
     * @since  6.0.0
     *
     * @param  string  $notice_name
     * @param  string  $key
     * @param  mixed   $default
     * @return array
     */
    public static function get_notice_option($notice_name, $key, $default = \null)
    {
    }
    /**
     * Set a setting for a notice type.
     *
     * @since  6.0.0
     *
     * @param  string  $notice_name
     * @param  string  $key
     * @param  mixed   $value
     * @return array
     */
    public static function set_notice_option($notice_name, $key, $value)
    {
    }
    /**
     * Checks if a maintenance notice is visible.
     *
     * @since  6.0.0
     *
     * @param  string  $notice_name
     * @return boolean
     */
    public static function is_maintenance_notice_visible($notice_name)
    {
    }
    /**
     * Checks if a dismissible notice has been dismissed in the past.
     *
     * @since  6.0.0
     *
     * @param  string  $notice_name
     * @return boolean
     */
    public static function is_dismissible_notice_dismissed($notice_name)
    {
    }
    /**
     * Save notices to the DB.
     */
    public static function save_notices()
    {
    }
    /**
     * Show any stored error messages.
     */
    public static function output_notices()
    {
    }
    /**
     * Add a dimissible notice/error.
     *
     * @since  6.0.0
     *
     * @param  string   $text
     * @param  mixed    $args
     */
    public static function add_dismissible_notice($text, $args)
    {
    }
    /**
     * Remove a dismissible notice.
     *
     * @since  6.0.0
     *
     * @param  string  $notice_name
     */
    public static function remove_dismissible_notice($notice_name)
    {
    }
    /**
     * Dismisses a notice. Dismissible maintenance notices cannot be dismissed forever.
     *
     * @since  6.0.0
     *
     * @param  string  $notice
     */
    public static function dismiss_notice($notice)
    {
    }
}
/**
 * Product_Addon_Admin class.
 */
/**
 * Product Add-Ons admin.
 *
 * @class    WC_Product_Addons_Admin
 * @version  6.8.0
 */
class WC_Product_Addons_Admin
{
    /**
     * Store of generated ids.
     *
     * @since 5.0.1
     *
     * @var array
     */
    private $generated_ids = array();
    /**
     * Initialize administrative actions.
     */
    public function __construct()
    {
    }
    /**
     * Add menus
     */
    public function admin_menu()
    {
    }
    /**
     * Include dependencies.
     */
    public function includes()
    {
    }
    /**
     * Injects new add-ons settings section.
     *
     * @param array $sections Other admin settings sections.
     *
     * @return array
     */
    public function add_addons_section(array $sections) : array
    {
    }
    /**
     * Renders the add-ons settings.
     */
    public function add_addons_settings($settings, $section_id)
    {
    }
    /**
     * Get add-on options.
     *
     * @since 3.0.0.
     */
    public function ajax_get_addon_options()
    {
    }
    /**
     * Get add-on field.
     *
     * @since 3.0.0.
     */
    public function ajax_get_addon_field()
    {
    }
    /**
     * AJAX callback for importing product add-ons.
     *
     * @since 6.5.0
     */
    public function ajax_import_addons()
    {
    }
    /**
     * Enqueue scripts and styles.
     *
     * @since 3.0.0
     */
    public function script_styles()
    {
    }
    /**
     * Add screen id to WooCommerce.
     *
     * @param array $screen_ids List of screen IDs.
     * @return array
     */
    public function add_screen_id($screen_ids)
    {
    }
    /**
     * Connect pages with navigation bar.
     *
     * @since 6.4.7
     * @return void
     */
    public static function wc_admin_connect_pao_pages()
    {
    }
    /**
     * Controls the global addons admin page.
     */
    public function global_addons_admin()
    {
    }
    /**
     * Converts the field type key to display name.
     *
     * @since 3.0.0
     * @param string $type
     * @return string $name
     */
    public function convert_type_name($type = '')
    {
    }
    /**
     * Save global addons
     *
     * @return array posted addons data
     */
    public function save_global_addons()
    {
    }
    /**
     * Add product tab.
     */
    public function tab()
    {
    }
    /**
     * Add product panel.
     */
    public function panel()
    {
    }
    /**
     * Backwards compatibility: Add a notice if an add-on title exceeds the 255 characters threshold.
     *
     */
    public function maybe_add_title_max_length_notice()
    {
    }
    /**
     * Process meta box.
     *
     * @param int $post_id Post ID.
     */
    public function process_meta_box($post_id)
    {
    }
    /**
     * Generate a filterable default new addon option.
     *
     * @return array
     */
    public static function get_new_addon_option()
    {
    }
    /**
     * Put posted addon data into an array.
     *
     * @return array
     */
    protected function get_posted_product_addons()
    {
    }
    /**
     * Sanitize the addon.
     *
     * @since 3.0.36
     * @param array $addon Array containing the addon data.
     * @return array
     */
    public function sanitize_addon($addon)
    {
    }
    /**
     * Filters the admin order hidden metas to hide addons.
     *
     * @since 3.0.0
     * @param array $hidden_metas
     */
    public function filter_hidden_order_itemmeta($hidden_metas)
    {
    }
    /**
     * Filters the admin order line item to show only addons.
     *
     * @since 3.0.0
     * @param int $item_id
     * @param object $item
     * @param object $order
     */
    public function filter_order_line_item_html($item_id, $item, $order)
    {
    }
    /**
     * Filters the admin order line item to show only addons.
     *
     * @since 3.0.0
     * @param int $item_id
     * @param object $item
     * @param object $order
     */
    public function filter_order_line_item_after_html($item_id, $item, $order)
    {
    }
    /**
     * Sort addons.
     *
     * @param  array $a First item to compare.
     * @param  array $b Second item to compare.
     * @return bool
     */
    protected function addons_cmp($a, $b)
    {
    }
    /**
     * Generate a unique timestamp and use it as id.
     *
     * @since  5.0.1
     *
     * @param  array  $existing_ids
     * @return int
     */
    protected function generate_id($existing_ids)
    {
    }
    /**
     * Prints warning messages in the admin area.
     *
     * @param string $content
     * @param string $type
     * @return void
     */
    public function output_notice($content, $type)
    {
    }
}
/**
 * WC_Product_Addons_Privacy class
 */
class WC_Product_Addons_Privacy extends \WC_Abstract_Privacy
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Gets the message of the privacy to display.
     */
    public function get_privacy_message()
    {
    }
}
/**
 * WooCommerce core Product Exporter support.
 *
 * @class    WC_Product_Addons_Product_Export
 * @version  5.0.3
 */
class WC_Product_Addons_Product_Export
{
    /**
     * Hook in.
     */
    public static function init()
    {
    }
    /**
     * Export Product Add-Ons..
     *
     * @param  mixed         $meta_value
     * @param  WC_Meta_Data  $meta
     * @param  WC_Product    $product
     * @param  array         $row
     * @return string        $meta_value
     */
    public static function export_product_addons($meta_value, $meta, $product, $row)
    {
    }
}
/**
 * WooCommerce core Product Importer support.
 *
 * @class    WC_Product_Addons_Product_Import
 * @version  5.0.3
 */
class WC_Product_Addons_Product_Import
{
    /**
     * Hook in.
     */
    public static function init()
    {
    }
    /**
     * Parse Product Add-Ons..
     *
     * @param  array                    $parsed_data
     * @param  WC_Product_CSV_Importer  $importer
     * @return array                    $parsed_data
     */
    public static function import_product_addons($parsed_data, $importer)
    {
    }
}
/**
 * Extends the store public API with add-ons related data.
 *
 * @version 6.8.2
 */
class WC_Product_Addons_Store_API
{
    /**
     * Plugin Identifier, unique to each plugin.
     *
     * @var string
     */
    const IDENTIFIER = 'addons';
    /**
     * Bootstraps the class and hooks required data.
     */
    public static function init()
    {
    }
    /**
     * Registers the actual data into each endpoint.
     */
    public static function extend_store()
    {
    }
    /**
     * Register subscription product data into cart/items endpoint.
     *
     * @param array  $cart_item
     * @return array $item_data
     */
    public static function extend_cart_item_data($cart_item)
    {
    }
    /**
     * Register subscription product schema into cart/items endpoint.
     *
     * @return array Registered schema.
     */
    public static function extend_cart_item_schema()
    {
    }
    /**
     * Aggregates bundle container item prices.
     *
     * @param array  $item_data
     * @param array  $cart_item
     */
    private static function filter_cart_item_prices(&$item_data, $cart_item)
    {
    }
    /**
     * Removes flat fee add-ons from product prices in the cart.
     *
     * @param array $item_data
     * @param array $cart_item
     *
     */
    public static function remove_flat_fees_from_cart_item_price(&$item_data, $cart_item)
    {
    }
    /**
     * Re-adds flat fee add-ons from product prices in the cart.
     *
     * @param array $item_data
     * @param array $cart_item
     *
     */
    public static function add_flat_fees_from_cart_item_price(&$item_data, $cart_item)
    {
    }
    /**
     * Removes flat fee add-ons from aggregated Bundle/Composite prices in the cart.
     *
     * @param array $item_data
     * @param array $cart_item
     *
     */
    public static function remove_flat_fees_from_aggregated_container_prices($item_data, $cart_item)
    {
    }
    /**
     * Re-adds flat fee add-ons to aggregated Bundle/Composite prices in the cart.
     *
     * @param array $item_data
     * @param array $cart_item
     *
     */
    public static function add_flat_fees_to_aggregated_container_prices($item_data, $cart_item)
    {
    }
    /**
     * Convert monetary values from WooCommerce to string based integers, using
     * the smallest unit of a currency.
     *
     * @param string|float  $amount
     * @param int           $decimals
     * @param int           $rounding_mode
     * @return string
     */
    private static function prepare_money_response($amount, $decimals = 2, $rounding_mode = \PHP_ROUND_HALF_UP)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Callbacks.
    |--------------------------------------------------------------------------
    */
    /**
     * Filter store API responses to:
     *
     * - aggregate bundle container prices/subtotals;
     * - keep min/max/step quantity fields in sync.
     *
     * @param  $response  WP_REST_Response
     * @param  $server    WP_REST_Server
     * @param  $request   WP_REST_Request
     * @return WP_REST_Response
     */
    public static function filter_cart_item_data($response, $server, $request)
    {
    }
}
class WC_Product_Add_Ons_Groups_Controller extends \WP_REST_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-product-add-ons/v1';
    /**
     * Endpoint method (GET/POST/PUT...)
     * @var string
     */
    protected $method;
    public function __construct()
    {
    }
    /**
     * Register the route for groups
     *
     * @since 2.9.0
     */
    public function register_routes()
    {
    }
    /**
     * Add (POST/CREATABLE) a global group
     *
     * @since 2.9.0
     * @param $request WP_REST_Request
     * @return WP_REST_Response| mixed
     */
    public function create_item($request)
    {
    }
    /**
     * Get (GET/READABLE) all (global) groups
     *
     * @since 2.9.0
     * @param $request WP_REST_Request
     * @return WP_REST_Response| mixed
     */
    public function get_all($request)
    {
    }
    /**
     * Get (GET/READABLE) a single group
     *
     * @since 2.9.0
     * @param $request WP_REST_Request
     * @return WP_REST_Response| WP_Error
     */
    public function get_item($request)
    {
    }
    /**
     * Update (PUT/EDITABLE) a global group or product
     *
     * @since 2.9.0
     * @param $request WP_REST_Request
     * @return WP_REST_Response| WP_Error
     */
    public function update_item($request)
    {
    }
    /**
     * Delete (DELETE/DELETABLE) a global group
     *
     * @since 2.9.0
     * @param $request array REST API request
     * @return WP_REST_Response| WP_Error
     */
    public function delete_item($request)
    {
    }
    /** Validate the requester's permissions
     *
     * @since 2.9.0
     *
     * @param $request
     * @return boolean|WP_Error
     */
    public function permissions_check($request)
    {
    }
}
/**
 * WC_Product_Addons_Cart_Ajax class
 *
 * @class    WC_Product_Addons_Cart_Ajax
 * @version  6.4.3
 */
class WC_Product_Addons_Cart_Ajax
{
    /**
     * Handle ajax endpoints.
     */
    public function __construct()
    {
    }
    /**
     * Calculate tax values for sub total (after options value)
     * Used when we can't calculate tax from form values
     * (since there 4 different combinations of how taxes can be displayed).
     *
     * @since 1.0.0
     */
    public function calculate_tax()
    {
    }
}
/**
 * WC_Product_Addons_Cart class.
 *
 * @class    WC_Product_Addons_Cart
 * @version  6.8.0
 */
class WC_Product_Addons_Cart
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Validate add cart item. Note: Fires before add_cart_item_data.
     *
     * @param bool $passed     If passed validation.
     * @param int  $product_id Product ID.
     * @param int  $qty        Quantity.
     * @return bool
     */
    public function validate_add_cart_item($passed, $product_id, $qty, $post_data = \null)
    {
    }
    /**
     * Add cart item data action. Fires before add to cart action and add cart item filter.
     *
     * @param array $cart_item_data Cart item meta data.
     * @param int   $product_id     Product ID.
     * @param int   $variation_id
     * @param int   $quantity
     *
     * @throws Exception
     *
     * @return array
     */
    public function add_cart_item_data($cart_item_data, $product_id)
    {
    }
    /**
     * Include add-ons line item meta.
     *
     * @param  WC_Order_Item_Product $item          Order item data.
     * @param  string                $cart_item_key Cart item key.
     * @param  array                 $values        Order item values.
     */
    public function order_line_item($item, $cart_item_key, $values)
    {
    }
    /**
     * Filter the order item's meta display value if needed.
     *
     * @param  string         $display_value
     * @param  stdObject      $meta
     * @param  WC_Order_Item  $order_item
     * @return string
     */
    public function order_item_display_meta_value($display_value, $meta = \null, $order_item = \null)
    {
    }
    /**
     * Re-order.
     *
     * @since 3.0.0
     * @param array    $cart_item_meta Cart item data.
     * @param array    $item           Cart item.
     * @param WC_order $order          Order object.
     *
     * @return array Cart item data
     */
    public function re_add_cart_item_data($cart_item_data, $item, $order)
    {
    }
    /**
     * Updates the product price based on the add-ons and the quantity.
     *
     * @param array $cart_item_data Cart item meta data.
     * @param int   $quantity       Quantity of products in that cart item.
     * @param array $prices         Array of prices for that product to use in
     *                              calculations.
     *
     * @return array
     */
    public function update_product_price($cart_item_data, $quantity, $prices)
    {
    }
    /**
     * Add cart item. Fires after add cart item data filter.
     *
     * @since 3.0.0
     * @param array $cart_item_data Cart item meta data.
     *
     * @return array
     */
    public function add_cart_item($cart_item_data)
    {
    }
    /**
     * Update cart item quantity.
     *
     * @param array    $cart_item_key Cart item key.
     * @param integer  $quantity      New quantity of the product.
     * @param integer  $old_quantity  Old quantity of the product.
     * @param \WC_Cart $cart          WC Cart object.
     *
     * @return array
     */
    public function update_price_on_quantity_update($cart_item_key, $quantity, $old_quantity, $cart)
    {
    }
    /**
     * Get cart item from session.
     *
     * @param array $cart_item Cart item data.
     * @param array $values    Cart item values.
     * @return array
     */
    public function get_cart_item_from_session($cart_item, $values)
    {
    }
    /**
     * Get item data.
     *
     * @param array $other_data Other data.
     * @param array $cart_item  Cart item data.
     * @return array
     */
    public function get_item_data($other_data, $cart_item)
    {
    }
    /**
     * Grabs the value of a product addon from order item meta.
     *
     * @param array  $ids Array of addon meta that include id, name and value.
     * @param array  $addon
     * @param string $type Addon type.
     * @return array
     */
    public function get_addon_meta_value($ids, $addon, $type)
    {
    }
    /**
     * Checks if an order item addon meta matches a product level addon.
     *
     * @param array  $addon
     * @param array|object  $meta
     * @return boolean
     */
    public function is_matching_addon($addon, $meta)
    {
    }
    /**
     * Checks if the added product is a grouped product.
     *
     * @param int $product_id Product ID.
     * @return bool
     */
    public function is_grouped_product($product_id)
    {
    }
}
/**
 * 3rd-party Extensions Compatibility.
 *
 * @class    WC_PAO_Compatibility
 * @version  6.7.0
 */
class WC_PAO_Compatibility
{
    /**
     * Array of min required plugin versions.
     *
     * @var array
     */
    private $required = array();
    /**
     * Modules to load.
     *
     * @var array
     */
    private $modules = array();
    /**
     * The single instance of the class.
     *
     * @var WC_PAO_Compatibility
     *
     * @since 6.0.0
     */
    protected static $_instance = \null;
    /**
     * Main WC_PAO_Compatibility instance.
     *
     * Ensures only one instance of WC_PAO_Compatibility is loaded or can be loaded.
     *
     * @static
     * @return WC_PAO_Compatibility
     * @since  6.0.0
     */
    public static function instance()
    {
    }
    /**
     * Cloning is forbidden.
     *
     * @since 6.0.0
     */
    public function __clone()
    {
    }
    /**
     * Unserializing instances of this class is forbidden.
     *
     * @since 6.0.0
     */
    public function __wakeup()
    {
    }
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Initialize.
     *
     * @since  6.0.0
     *
     * @return void
     */
    protected function load_modules()
    {
    }
    /**
     * Core compatibility functions.
     *
     * @since  6.1.3
     * @return void
     */
    public static function core_includes()
    {
    }
    /**
     * Load compatibility classes.
     *
     * @return void
     */
    public function module_includes()
    {
    }
    /**
     * Get min module version.
     *
     * @since  6.0.0
     * @return bool
     */
    public function get_required_module_version($module)
    {
    }
    /**
     * Checks minimum required versions of compatible/integrated extensions.
     */
    public function check_required_versions()
    {
    }
}
/**
 * Product_Addon_Display class.
 *
 * @version 6.8.0
 */
class WC_Product_Addons_Display
{
    public $show_num_chars;
    /**
     * Initialize frontend actions.
     */
    public function __construct()
    {
    }
    /**
     * Enqueue add-ons styles.
     */
    public function styles()
    {
    }
    /**
     * Enqueue add-ons scripts.
     */
    public function addon_scripts()
    {
    }
    /**
     * Adds support for WooCommerce Quick View adding a new script.
     */
    public function quick_view_single_compat()
    {
    }
    /**
     * Display add-ons.
     *
     * @param int|bool    $post_id Post ID (default: false).
     * @param string|bool $prefix  Add-on prefix.
     */
    public function display($post_id = \false, $prefix = \false)
    {
    }
    /**
     * Update totals to include product add-ons.
     *
     * @param int $post_id Post ID.
     */
    public function totals($post_id)
    {
    }
    /**
     * Render placeholder for addons notices
     *
     * @param int $post_id Post ID.
     */
    public function notices($post_id)
    {
    }
    /**
     * Get add-on field HTML.
     *
     * @param array $addon Add-on field data.
     * @return string
     */
    public function get_addon_html($addon)
    {
    }
    /**
     * Get multiple choice HTML.
     *
     * @since 3.0.0
     * @param array $addon Add-on field data.
     */
    public function get_multiple_choice_html($addon)
    {
    }
    /**
     * Get image swatches field HTML.
     *
     * @param array $addon Add-on field data.
     */
    public function get_image_html($addon)
    {
    }
    /**
     * Get checkbox field HTML.
     *
     * @param array $addon Add-on field data.
     */
    public function get_checkbox_html($addon)
    {
    }
    /**
     * Get radio button field HTML.
     *
     * @param array $addon Add-on field data.
     */
    public function get_radiobutton_html($addon)
    {
    }
    /**
     * Get select field HTML.
     *
     * @param array $addon Add-on field data.
     */
    public function get_select_html($addon)
    {
    }
    /**
     * Get custom field HTML.
     *
     * @param array $addon Add-on field data.
     */
    public function get_custom_text_html($addon)
    {
    }
    /**
     * Get custom textarea field HTML.
     *
     * @param array $addon Add-on field data.
     */
    public function get_custom_textarea_html($addon)
    {
    }
    /**
     * Get file upload field HTML.
     *
     * @param array $addon Add-on field data.
     */
    public function get_file_upload_html($addon)
    {
    }
    /**
     * Get custom price field HTML.
     *
     * @param array $addon Add-on field data.
     */
    public function get_custom_price_html($addon)
    {
    }
    /**
     * Get input multiplier field HTML.
     *
     * @param array $addon Add-on field data.
     */
    public function get_input_multiplier_html($addon)
    {
    }
    /**
     * Get datepicker field HTML.
     *
     * @param array $addon Add-on field data.
     */
    public function get_datepicker_html($addon)
    {
    }
    /**
     * Checks if the product has any required add-ons.
     *
     * Since this is an expensive operation, the result is cached.
     *
     * @param int $product_id Product ID.
     * @return bool
     */
    protected function check_required_addons($product_id)
    {
    }
    /**
     * Add to cart text.
     *
     * @since 1.0.0
     * @version 2.9.0
     * @param string $text Add to cart text.
     * @param object $product
     * @return string
     */
    public function add_to_cart_text($text, $product = \null)
    {
    }
    /**
     * Product has options filter. This tells WooCommerce if a product has required options. This will prevent the user
     * adding the item to the cart without first selecting them on the product page.
     *
     * @param boolean $has_options True if the product has options.
     * @param object  $product Product object.
     * @return boolean
     */
    public function has_options($has_options, $product)
    {
    }
    /**
     * Removes ajax-add-to-cart functionality in WC 2.5 when a product has required add-ons.
     *
     * @param  bool       $supports If support a feature.
     * @param  string     $feature  Feature to support.
     * @param  WC_Product $product  Product data.
     * @return bool
     */
    public function ajax_add_to_cart_supports($supports, $feature, $product)
    {
    }
    /**
     * Include product add-ons to add to cart URL.
     *
     * @since 1.0.0
     * @version 2.9.0
     * @param string $url Add to cart URL.
     * @param object $product
     * @return string
     */
    public function add_to_cart_url($url, $product = \null)
    {
    }
    /**
     * Don't let products with required addons be added to cart when viewing grouped products.
     *
     * @param  bool       $purchasable If product is purchasable.
     * @param  WC_Product $product     Product data.
     * @return bool
     */
    public function prevent_purchase_at_grouped_level($purchasable, $product)
    {
    }
    /**
     * Removes the cost of flat fee add-ons from the displayed price in the cart.
     *
     * @param string $price_html
     * @param array  $cart_item
     * @param string $cart_item_key
     * @return bool
     */
    public function remove_flat_fees_from_cart_item_price($price_html, $cart_item, $cart_item_key)
    {
    }
    /**
     * Re-adds the cost of flat fee add-ons to the cart item price.
     *
     * @param string $price_html
     * @param array  $cart_item
     * @param string $cart_item_key
     * @return bool
     */
    public function add_flat_fees_to_cart_item_price($price_html, $cart_item, $cart_item_key)
    {
    }
    /**
     * Fix the display of uploaded files.
     *
     * @param  string $meta_value Meta value.
     * @return string
     */
    public function fix_file_uploaded_display($meta_value, $meta = \null, $item = \null)
    {
    }
    /**
     * Fix product addons position on variable products - show them after a single variation description
     * or out of stock message.
     */
    public function reposition_display_for_variable_product()
    {
    }
}
class WC_Product_Addons_Helper
{
    /**
     * Gets global product addons. The result is cached.
     *
     * @return array
     */
    protected static function get_global_product_addons()
    {
    }
    /**
     * Gets product addons from its terms. The result is cached.
     *
     * @param int $product_id The product ID.
     * @return array
     */
    protected static function get_product_term_addons($product_id)
    {
    }
    /**
     * Gets addons assigned to a product by ID.
     *
     * @param  int    $post_id ID of the product to get addons for.
     * @param  string $prefix for addon field names. Defaults to postid.
     * @param  bool   $inc_parent Set to false to not include parent product addons.
     * @param  bool   $inc_global Set to false to not include global addons.
     * @return array
     */
    public static function get_product_addons($post_id, $prefix = \false, $inc_parent = \true, $inc_global = \true)
    {
    }
    /**
     * Display prices according to shop settings.
     *
     * @version 2.8.2
     *
     * @param  float      $price     Price to display.
     * @param  WC_Product $cart_item Product from cart.
     *
     * @return float
     */
    public static function get_product_addon_price_for_display($price, $cart_item = \null)
    {
    }
    /**
     * Return tax display mode depending on context.
     *
     * @return string
     */
    public static function get_product_addon_tax_display_mode()
    {
    }
    /**
     * Checks if addon field is required.
     *
     * @since 3.0.0
     * @param array $addon
     * @return bool
     */
    public static function is_addon_required($addon = array())
    {
    }
    /**
     * Checks if addon should display description.
     *
     * @since 3.07.28
     * @param  array $addon  Current add-on.
     * @return bool          True if should display description.
     */
    public static function should_display_description($addon = array())
    {
    }
    /**
     * Get addon restriction data
     *
     * @param array $addon Add-on field data.
     */
    public static function get_restriction_data($addon)
    {
    }
    /**
     * Checks WC version for backwards compatibility.
     *
     * @since 3.0.0
     * @param string $version
     */
    public static function is_wc_gte($version)
    {
    }
    /**
     * Checks WC version for backwards compatibility.
     *
     * @since 3.0.0
     * @param string $version
     */
    public static function is_wc_gt($version)
    {
    }
    /**
     * Checks if server can handle upload filesize.
     *
     * @since 3.0.0
     * @return bool
     */
    public static function can_upload($file)
    {
    }
    /**
     * Checks if file exceeds upload size limit.
     *
     * @since 3.0.33
     * @param  array $post_file File from $_FILES.
     * @return bool             True if over size limit.
     */
    public static function is_filesize_over_limit($post_file)
    {
    }
    /**
     * Get the placeholder image URL for image swatch
     * with no selection.
     *
     * @return string
     */
    public static function no_image_select_placeholder_src()
    {
    }
    /**
     * Create a clone of the current product/cart item/order item and set its price equal to the add-on price.
     * This will allow extensions to discount the add-on price.
     *
     * @param WC_Product $product
     * @param float      $price
     *
     * @return WC_Product
     *
     */
    public static function create_product_with_filtered_addon_prices($product, $price)
    {
    }
    /**
     * Get the date format for JS.
     *
     * Hint: Doesn't support time formats.
     *
     * @since  6.8.0
     *
     * @param  string $date_format (Optional) Date format in PHP
     * @return string The date format for JS
     */
    public static function wc_pao_get_js_date_format($date_format = \null)
    {
    }
    /**
     * Get the timestamp type.
     *
     * @since  6.8.0
     *
     * @return string
     */
    public static function wc_pao_get_date_input_timezone_reference()
    {
    }
    /**
     * Get the store's GMT offset.
     *
     * @since  6.8.0
     *
     * @return float
     */
    public static function wc_pao_get_gmt_offset()
    {
    }
    /**
     * Takes a timestamp in GMT and converts it to store's timezone.
     *
     * @since 6.8.0
     *
     * @param  int   $timestamp
     * @param  float $offset
     * @return int
     */
    public static function wc_pao_convert_timestamp_to_gmt_offset($timestamp, $gmt_offset = \null)
    {
    }
}
/**
 * Installation/Migration Class.
 *
 * Handles the activation/installation of the plugin.
 *
 * @package  Installation
 * @version  6.1.3
 */
class WC_Product_Addons_Install
{
    /**
     * Initialize hooks.
     *
     * @since 3.0.0
     * @return bool
     */
    public static function init()
    {
    }
    /**
     * Run the installation.
     *
     * @since 3.0.0
     * @return bool
     */
    private static function run()
    {
    }
    /**
     * Updates the plugin version in db.
     *
     * @since 3.0.0
     * @return bool
     */
    private static function update_plugin_version()
    {
    }
    /**
     * 3.0 migration script.
     *
     * @since 3.0.0
     */
    private static function migration_3_0()
    {
    }
    /**
     * 3.0 migration script for product level.
     *
     * @since 3.0.0
     */
    private static function migration_3_0_product()
    {
    }
    /**
     * Schedule cron events.
     *
     * @since 6.1.3
     */
    private static function create_events()
    {
    }
}
/**
 * Admin notices handling.
 *
 * @class    WC_PAO_Notices
 * @version  6.0.0
 */
class WC_PAO_Notices
{
    /**
     * Notice options.
     * @var array
     */
    public static $notice_options = array();
    /**
     * Determines if notice options should be updated in the DB.
     * @var boolean
     */
    private static $should_update = \false;
    /**
     * Constructor.
     */
    public static function init()
    {
    }
    /**
     * Get a setting for a notice type.
     *
     * @param  string  $notice_name
     * @param  string  $key
     * @param  mixed   $default
     * @return array
     */
    public static function get_notice_option($notice_name, $key, $default = \null)
    {
    }
    /**
     * Set a setting for a notice type.
     *
     * @param  string  $notice_name
     * @param  string  $key
     * @param  mixed   $value
     * @return array
     */
    public static function set_notice_option($notice_name, $key, $value)
    {
    }
    /**
     * Save notice options to the DB.
     */
    public static function save_notice_options()
    {
    }
}
/**
 * Product Add-Ons Tracker.
 *
 * @class    WC_PAO_Tracker
 * @version  6.1.3
 */
class WC_PAO_Tracker
{
    /**
     * Property to store reusable query data.
     *
     * @var array
     */
    private static $reusable_data = array();
    /**
     * Property to store and share tracking data in the class.
     *
     * @var array
     */
    private static $data = array();
    /**
     * Property to store the starting time of the process.
     *
     * @var int
     */
    private static $start_time = 0;
    /**
     * Property to store the tracking events.
     *
     * @var array
     */
    private static $tracking_events = array();
    /**
     * Property to store the HPOS table name.
     *
     * @var string
     */
    private static $hpos_orders_table = '';
    /**
     * Property to store how often the data will be invalidated.
     *
     * @var string
     */
    private static $invalidation_interval = '-1 week';
    /**
     * Initialize the tracker.
     */
    public static function init()
    {
    }
    /**
     * Add PAO data to the tracked data.
     *
     * @param  array  $data
     * @return array  all the tracking data.
     */
    public static function add_tracking_data($data)
    {
    }
    /**
     * Get all tracking data from options.
     *
     * @return array PAO's tracking data.
     */
    private static function get_tracking_data()
    {
    }
    /**
     * Calculates all tracking-related data for the previous month and year.
     * Runs independently in a background task.
     *
     * @see ::maybe_calculate_tracking_data().
     */
    private static function calculate_tracking_data()
    {
    }
    /**
     * Maybe calculate orders data. Also, handles the caching strategy.
     *
     * @return bool Returns true if the data are re-calculated, false otherwise.
     */
    public static function maybe_calculate_tracking_data()
    {
    }
    /**
     * Track product addons first date when saving a product (wp-admin / rest api).
     *
     * @param  WC_Product  $product
     */
    public static function track_product_addons($product)
    {
    }
    /**
     * Calculate product aggregation data.
     *
     * @return void
     */
    private static function calculate_product_data()
    {
    }
    /**
     * Calculate order data.
     *
     * @return void
     */
    private static function calculate_order_data()
    {
    }
    /**
     * Get any reusable data, without re-querying the DB.
     *
     * @param  array  $key  Reusable data key.
     * @return mixed
     */
    private static function get_reusable_data($key = '')
    {
    }
    /**
     * Check if all the main aggregations have pending data.
     *
     * @return bool Pending status.
     */
    private static function has_pending_calculations()
    {
    }
    /**
     * Check if execution time is high or if available memory is almost consumed.
     *
     * @return bool Returns true if we're about to consume our available resources.
     */
    private static function time_or_memory_exceeded()
    {
    }
    /**
     * Initialize data if they are empty month/year has changed.
     *
     * @return void
     */
    private static function maybe_initialize_data()
    {
    }
    /**
     * Time exceeded.
     *
     * Ensures the batch never exceeds a sensible time limit.
     * A timeout limit of 30s is common on shared hosting.
     *
     * @return bool
     */
    private static function time_exceeded()
    {
    }
    /**
     * Memory exceeded
     *
     * Ensures the batch process never exceeds 90%
     * of the maximum WordPress memory.
     *
     * @return bool
     */
    private static function memory_exceeded()
    {
    }
    /**
     * Get memory limit.
     *
     * @return int
     */
    private static function get_memory_limit()
    {
    }
    /**
     * Increase iterations.
     *
     * @return void
     */
    private static function increase_iterations()
    {
    }
    /**
     * Set starting time.
     *
     * @return void
     */
    private static function set_start_time()
    {
    }
    /**
     * Set data from option.
     *
     * @return void
     */
    private static function read_data()
    {
    }
    /**
     * Set option with data.
     *
     * @return void
     */
    private static function set_option_data()
    {
    }
}
/**
 * Tracks support.
 *
 * @class    WC_PAO_Tracks
 * @version  6.3.3
 */
class WC_PAO_Tracks
{
    /**
     * Tracks event name prefix.
     */
    const PREFIX = 'pao_';
    /**
     * Hook in.
     */
    public static function init()
    {
    }
    /**
     * Records a 'product_with_addons_created' event in Tracks every time add-ons are added to product that didn't have add-ons before.
     *
     * @param  WC_Product  $product
     * @return void
     */
    public static function record_product_with_addons_created_event($product)
    {
    }
    /**
     * Records a 'global_addon_created' event in Tracks every time a global add-on is created.
     *
     * @return void
     */
    public static function record_global_addon_created_event()
    {
    }
    /**
     * Record an event in Tracks - this is the preferred way to record events from PHP.
     *
     * @param string $event_name The name of the event.
     * @param array  $props Custom properties to send with the event.
     * @return bool|WP_Error True for success or WP_Error if the event pixel could not be fired.
     */
    public static function record_event($event_name, $props = array())
    {
    }
}
/**
 * Functions for WC core back-compatibility.
 *
 * @class    WC_PAO_Core_Compatibility
 * @version  6.8.2
 */
class WC_PAO_Core_Compatibility
{
    /**
     * Cache 'gte' comparison results.
     *
     * @var array
     */
    private static $is_wc_version_gte = array();
    /**
     * Cache 'gt' comparison results.
     *
     * @var array
     */
    private static $is_wc_version_gt = array();
    /**
     * Cache 'gt' comparison results for WP version.
     *
     * @var    array
     */
    private static $is_wp_version_gt = array();
    /**
     * Cache 'gte' comparison results for WP version.
     *
     * @var    array
     */
    private static $is_wp_version_gte = array();
    /**
     * Cache 'is_wc_admin_active' result.
     *
     * @var   bool
     */
    private static $is_wc_admin_active;
    /**
     * Current REST request stack.
     * An array containing WP_REST_Request instances.
     *
     * @since 6.8.2
     *
     * @var array
     */
    private static $requests = array();
    /**
     * Cache HPOS status.
     *
     * @var bool
     */
    private static $is_hpos_enabled = \null;
    /**
     * Constructor.
     */
    public static function init()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Callbacks.
    |--------------------------------------------------------------------------
    */
    /**
     * Pops the current request from the execution stack.
     *
     * @since  6.8.2
     *
     * @param  WP_REST_Response $response
     * @param  WP_REST_Server|array $handler
     * @param  WP_REST_Request  $request
     * @return mixed
     */
    public static function pop_rest_request($response)
    {
    }
    /**
     * Saves the current hydration request.
     *
     * @since  6.8.2
     *
     * @param  mixed            $result
     * @param  WP_REST_Request  $request
     * @return mixed
     */
    public static function save_hydration_request($result, $request)
    {
    }
    /**
     * Saves the current rest request.
     *
     * @param  mixed            $result
     * @param  WP_REST_Server   $server
     * @param  WP_REST_Request  $request
     * @return mixed
     */
    public static function save_rest_request($result, $server, $request)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Utilities.
    |--------------------------------------------------------------------------
    */
    /**
     * Helper method to get the version of the currently installed WooCommerce.
     *
     * @return string
     */
    private static function get_wc_version()
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is greater than or equal to $version.
     *
     * @param  string  $version the version to compare
     * @return boolean true if the installed version of WooCommerce is > $version
     */
    public static function is_wc_version_gte($version)
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is greater than $version.
     *
     * @param  string  $version the version to compare
     * @return boolean true if the installed version of WooCommerce is > $version
     */
    public static function is_wc_version_gt($version)
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is greater than or equal to $version.
     *
     * @param  string  $version
     * @return boolean
     */
    public static function is_wp_version_gt($version)
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is greater than or equal to $version.
     *
     * @param  string  $version
     * @return boolean
     */
    public static function is_wp_version_gte($version)
    {
    }
    /**
     * Whether this is a Store/REST API request.
     *
     * @return boolean
     */
    public static function is_api_request()
    {
    }
    /**
     * Returns the current Store/REST API request or false.
     *
     * @return WP_REST_Request|false
     */
    public static function get_api_request()
    {
    }
    /**
     * Whether this is a Store API request.
     *
     * @param  string  $route
     * @return boolean
     */
    public static function is_store_api_request($route = '')
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Compatibility wrappers.
    |--------------------------------------------------------------------------
    */
    /**
     * Backwards compatible logging using 'WC_Logger' class.
     *
     * @param  string  $message
     * @param  string  $level
     * @param  string  $context
     */
    public static function log($message, $level, $context)
    {
    }
    /**
     * Back-compat wrapper for 'is_rest_api_request'.
     *
     * @return boolean
     */
    public static function is_rest_api_request()
    {
    }
    /**
     * Compatibility wrapper for invalidating cache groups.
     *
     * @param  string  $group
     * @return void
     */
    public static function invalidate_cache_group($group)
    {
    }
    /**
     * True if 'wc-admin' is active.
     *
     * @return boolean
     */
    public static function is_wc_admin_active()
    {
    }
    /**
     * Returns true if is a react based admin page.
     *
     * @return boolean
     */
    public static function is_admin_or_embed_page()
    {
    }
    /**
     * Check if the usage of the custom orders table is enabled.
     *
     * @return bool
     */
    public static function is_hpos_enabled()
    {
    }
    /**
     * Returns true if site is using block theme.
     *
     * @since  6.3.1
     *
     * @return boolean
     */
    public static function wc_current_theme_is_fse_theme()
    {
    }
}
/**
 * WooCommerce Blocks Compatibility.
 *
 * @version 6.4.0
 */
class WC_Product_Addons_Blocks_Compatibility
{
    /**
     * Initialize.
     */
    public static function init()
    {
    }
}
/**
 * PayPal Compatibility.
 *
 * @version 6.6.0
 */
class WC_Product_Addons_PayPal_Compatibility
{
    // Hide smart buttons in product pages with add-ons.
    public static function init()
    {
    }
    /**
     * Hide smart buttons in product pages with add-ons.
     *
     * @param  bool       $is_supported
     * @param  WC_Product $product
     * @return bool
     */
    public static function handle_smart_buttons($is_supported, $product)
    {
    }
}
/**
 * Stripe Compatibility.
 *
 * @version 6.6.0
 */
class WC_Product_Addons_Stripe_Compatibility
{
    // Hide express checkout buttons in product pages with add-ons.
    public static function init()
    {
    }
    /**
     * Hide express checkout buttons in product pages with add-ons.
     *
     * @param  bool       $hide_button
     * @param  WP_Post    $post
     * @return bool
     */
    public static function handle_express_checkout_buttons($hide_button, $post)
    {
    }
}
/**
 * WooPayments Compatibility.
 *
 * @version 6.7.0
 */
class WC_Product_Addons_WC_Payments_Compatibility
{
    // Hide express checkout buttons in product pages with add-ons.
    public static function init()
    {
    }
    /**
     * Hide express checkout buttons in product pages with add-ons.
     *
     * @param  bool       $is_supported
     * @param  WC_Product $product
     * @return bool
     */
    public static function handle_express_checkout_buttons($is_supported, $product)
    {
    }
}
/**
 * Product Addon Fields
 *
 * @package woocommerce-product-addons
 */
/**
 * WC_Product_Addons_Field class.
 */
abstract class WC_Product_Addons_Field
{
    /**
     * Addon data.
     *
     * @var array
     */
    public $addon;
    /**
     * Addon value.
     *
     * @var string
     */
    public $value;
    /**
     * Constructor
     *
     * @param array  $addon Addon data.
     * @param string $value Addon value.
     */
    public function __construct($addon, $value = '')
    {
    }
    /**
     * Get data for the posted addon
     */
    public function get_cart_item_data()
    {
    }
    /**
     * Validate an addon
     *
     * @return bool pass or fail, or WP_Error
     */
    public function validate()
    {
    }
    /**
     * Get the name of the posted addon
     *
     * @return string
     */
    public function get_field_name()
    {
    }
    /**
     * Get the label for an option
     *
     * @param  string $option The option array object.
     * @return string
     */
    public function get_option_label($option)
    {
    }
    /**
     * Get the price for an option
     *
     * @param  string $option The option array object.
     * @return string
     */
    public function get_option_price($option)
    {
    }
}
/**
 * Custom fields (text)
 *
 * @package woocommerce-product-addons
 */
/**
 * WC_Product_Addons_Field_Custom class
 */
class WC_Product_Addons_Field_Custom extends \WC_Product_Addons_Field
{
    /**
     * Validate an addon
     *
     * @return bool pass, or WP_Error
     */
    public function validate()
    {
    }
    /**
     * Process this field after being posted
     *
     * @return array on success, WP_ERROR on failure
     */
    public function get_cart_item_data()
    {
    }
}
/**
 * Date picker field
 *
 * @since   6.8.0
 * @version 6.8.0
 */
class WC_Product_Addons_Field_Datepicker extends \WC_Product_Addons_Field
{
    /**
     * The addon field
     *
     * @var array
     */
    public $addon;
    /**
     * The selected value/date.
     *
     * @var string
     */
    public $value;
    /**
     * The timestamp of the selected value/date.
     *
     * @var int
     */
    public $timestamp;
    /**
     * The offset of the selected value/date.
     *
     * @var float
     */
    public $offset;
    /**
     * Constructor
     */
    public function __construct($addon, $value = '', $timestamp = '', $offset = '')
    {
    }
    /**
     * Validate an addon
     * @return bool pass, or WP_Error
     */
    public function validate()
    {
    }
    /**
     * Process this field after being posted
     * @return array on success, WP_ERROR on failure
     */
    public function get_cart_item_data()
    {
    }
}
/**
 * File Upload field
 */
class WC_Product_Addons_Field_File_Upload extends \WC_Product_Addons_Field
{
    public $addon;
    public $value;
    public $test;
    /**
     * Constructor
     */
    public function __construct($addon, $value = '', $test = \false)
    {
    }
    /**
     * Validate an addon
     * @return bool pass, or WP_Error
     */
    public function validate()
    {
    }
    /**
     * Process this field after being posted
     * @return array on success, WP_ERROR on failure
     */
    public function get_cart_item_data()
    {
    }
    /**
     * Handle file upload
     * @param  string $file
     * @return array
     */
    public function handle_upload($file)
    {
    }
    /**
     * upload_dir function.
     *
     * @access public
     * @param mixed $pathdata
     * @return void
     */
    public function upload_dir($pathdata)
    {
    }
}
/**
 * Checkbox/radios field
 */
class WC_Product_Addons_Field_List extends \WC_Product_Addons_Field
{
    /**
     * Validate an addon
     *
     * @return bool|WP_Error
     */
    public function validate()
    {
    }
    /**
     * Process this field after being posted
     *
     * @return array|WP_Error Array on success and WP_Error on failure
     */
    public function get_cart_item_data()
    {
    }
}
/**
 * Select field
 */
class WC_Product_Addons_Field_Select extends \WC_Product_Addons_Field
{
    /**
     * Validate an addon
     * @return bool pass or fail, or WP_Error
     */
    public function validate()
    {
    }
    /**
     * Process this field after being posted
     * @return array on success, WP_ERROR on failure
     */
    public function get_cart_item_data()
    {
    }
}
class WC_Product_Addons_Global_Group
{
    /**
     * Gets a global add-on group from the provided post in a structure intended for a REST API response
     *
     * @since 2.9.0
     *
     * @throws Exception
     * @param WP_Post $post
     * @return array
     */
    public static function get_group($post)
    {
    }
    /**
     * Updates a new global add-on group post using the provided arguments (after validating them)
     *
     * @since 2.9.0
     *
     * @throws Exception
     * @param array $args
     * @return array
     */
    public static function create_group($args)
    {
    }
    /**
     * Updates a global add-on group post using the provided arguments (after validating them)
     *
     * @since 2.9.0
     *
     * @throws Exception
     * @param WP_Post $post
     * @param array $args
     * @return array
     */
    public static function update_group($post, $args)
    {
    }
    /**
     * Updates a global add-on group post's name
     *
     * @since 2.9.0
     *
     * @throws Exception
     * @param WP_Post $post
     * @param string $name
     */
    protected static function set_name($post, $name)
    {
    }
    /**
     * Updates a global add-on group post's priority
     *
     * @since 2.9.0
     *
     * @throws Exception
     * @param WP_Post $post
     * @param int $priority
     */
    protected static function set_priority($post, $priority)
    {
    }
    /**
     * Updates a global add-on group post's applicable product categories (or all products)
     *
     * @since 2.9.0
     *
     * @throws Exception
     * @param WP_Post $post
     * @param array $category_ids
     */
    protected static function set_restrict_to_categories($post, $category_ids)
    {
    }
    /**
     * Updates a global add-on group post's fields and options
     *
     * @since 2.9.0
     *
     * @throws Exception
     * @param WP_Post $post
     * @param array $fields
     */
    protected static function set_fields($post, $fields)
    {
    }
}
class WC_Product_Addons_Group_Validator
{
    /**
     * Validates that the passed update is valid to apply to a global add-ons group
     *
     * @since 2.9.0
     *
     * @param array $update
     * @throws Exception If the passed update is invalid for any reason
     * @return true
     */
    public static function is_valid_global_addons_group_update($update)
    {
    }
    /**
     * Validates that the passed update is valid to apply to a product's add-ons
     *
     * @since 2.9.0
     *
     * @param array $update
     * @throws Exception If the passed update is invalid for any reason
     * @return true
     */
    public static function is_valid_product_addons_update($update)
    {
    }
    ///////////////////////////////////////////////////////////////////////////////////////////////
    /**
     * Validates the passed data against the passed schema.  Note: Used recursively.
     *
     * @since 2.9.0
     *
     * @param array $data The data to validate
     * @param array $schema The schema against which to validate it
     * @throws Exception If the passed data fails validation
     * @return true
     */
    protected static function validate($data, $schema)
    {
    }
    /**
     * Validates that the passed argument is a string. Used in validation schemas.
     *
     * @since 2.9.0
     *
     * @param string $arg The data to validate
     * @throws Exception If the passed data is not a string
     * @return true
     */
    protected static function is_string($arg)
    {
    }
    /**
     * Validates that the passed argument is a valid price type. Used in validation schemas.
     *
     * @since 3.0.34.
     *
     * @param string $arg The data to validate.
     * @throws Exception  If the passed data is not a valid price type.
     * @return true
     */
    protected static function is_valid_price_type($arg)
    {
    }
    /**
     * Validates that the passed argument is a NON EMPTY string. Used in validation schemas.
     *
     * @since 2.9.0
     *
     * @param string $arg The data to validate
     * @throws Exception If the passed data is not a string or is empty
     * @return true
     */
    protected static function is_non_empty_string($arg)
    {
    }
    /**
     * Validates that the passed argument is a 0 or a 1. Used in validation schemas.
     * Note that "false" in JSON will arrive as an empty string, so we also allow that.
     * Also note that "true" in JSON will arrive as a "1".
     *
     * @since 2.9.0
     *
     * @param string|integer|boolean $arg The data to validate
     * @throws Exception If the passed data is not a 0 or 1
     * @return true
     */
    protected static function is_zero_or_one($arg)
    {
    }
    /**
     * Validates that the passed argument is an array. The array can be empty. Used in validation schemas.
     *
     * @since 2.9.0
     *
     * @param array $arg The data to validate
     * @throws Exception If the passed data is not an array
     * @return true
     */
    protected static function is_array($arg)
    {
    }
    /**
     * Validates that the passed argument is a positive integer (zero is also acceptable). Floating point
     * numbers are NOT acceptable. Used in validation schemas.
     *
     * @since 2.9.0
     *
     * @param integer $arg The data to validate
     * @throws Exception If the passed data is not a positive integer
     * @return true
     */
    protected static function is_positive_integer($arg)
    {
    }
    /**
     * Validates that the passed argument is empty or numeric. Integer AND floating point
     * numbers ARE acceptable. Used in validation schemas.
     *
     * @since 2.9.0
     *
     * @param integer|float|string $arg The data to validate
     * @throws Exception If the passed data is not empty or numeric
     * @return true
     */
    protected static function is_empty_or_numeric($arg)
    {
    }
    /**
     * Validates that the passed argument is empty or an integer. Floating point
     * numbers are NOT acceptable. Used in validation schemas.
     *
     * @since 2.9.0
     *
     * @param integer|string $arg The data to validate
     * @throws Exception If the passed data is not empty or an integer
     * @return true
     */
    protected static function is_empty_or_integer($arg)
    {
    }
    /**
     * Validates that the passed argument is an array of valid product category IDs. An empty array
     * IS acceptable. Used in validation schemas.
     *
     * @since 2.9.0
     *
     * @param array $arg The data to validate
     * @throws Exception If the passed data is not an array of valid product category IDs
     * @return true
     */
    protected static function is_array_of_product_category_ids($arg)
    {
    }
    /**
     * Validates that the passed argument is an array of add-on fields. An empty array
     * IS acceptable. This also validates each option in the field's options array against
     * the field type. Used in validation schemas.
     *
     * @since 2.9.0
     *
     * @param array $arg The data to validate
     * @throws Exception If the passed data is not an array of add-on fields
     * @return true
     */
    protected static function is_array_of_fields($arg)
    {
    }
    /**
     * Validates that the passed argument is valid field type. Used in validation schemas.
     *
     * @since 2.9.0
     *
     * @param string $arg The data to validate
     * @throws Exception If the passed data is not a valid field type
     * @return true
     */
    protected static function is_field_type($arg)
    {
    }
    /**
     * Validates that the passed argument is an array of basic options (i.e. options that only have
     * a label and optional price.) An empty array IS acceptable. Used in validation schemas.
     *
     * @since 2.9.0
     *
     * @param array $arg The data to validate
     * @throws Exception If the passed data is not an array of basic options
     * @return true
     */
    protected static function is_array_of_basic_options($arg)
    {
    }
    /**
     * Validates that the passed argument is an array of options with optional integer limits.
     * An empty array IS acceptable. Used in validation schemas.
     *
     * @since 2.9.0
     *
     * @param array $arg The data to validate
     * @throws Exception If the passed data is not an array of options with integer limits
     * @return true
     */
    protected static function is_array_of_options_with_optional_integer_limits($arg)
    {
    }
    /**
     * Validates that the passed argument is an array of options with optional float limits.
     * An empty array IS acceptable. Used in validation schemas.
     *
     * @since 2.9.0
     *
     * @param array $arg The data to validate
     * @throws Exception If the passed data is not an array of options with float limits
     * @return true
     */
    protected static function is_array_of_options_with_optional_float_limits($arg)
    {
    }
}
class WC_Product_Addons_Groups
{
    /**
     * Returns all the global groups (if any) and their add-ons
     *
     * @since 2.9.0
     *
     * @return array
     */
    public static function get_all_global_groups()
    {
    }
    /**
     * Given a global group ID or a product ID, returns add-ons in a structure intended for a REST API response
     *
     * @since 2.9.0
     *
     * @param integer $id
     * @return array
     */
    public static function get_group($id)
    {
    }
    /**
     * Given a global group ID or a product ID, updates add-ons from the args provided
     *
     * @since 2.9.0
     *
     * @param integer $id
     * @param array $args
     * @return array
     */
    public static function update_group($id, $args)
    {
    }
    /**
     * Given a global group ID, deletes it
     *
     * @since 2.9.0
     *
     * @param integer $id
     * @return array
     */
    public static function delete_group($id)
    {
    }
    /**
     * Tells you if the passed ID corresponds to a global group
     *
     * @since 2.9.0
     *
     * @param integer $id
     * @return array
     */
    public static function is_a_global_group_id($id)
    {
    }
    /**
     * For backwards compatibility, each option needs to have a label, price, min and max
     * key when stored in meta, even if the field type does not require such a key
     *
     * @since 2.9.0
     *
     * @param array $fields
     * @return array
     */
    public static function coerce_options_to_contain_all_keys_before_saving_to_meta($fields)
    {
    }
    /**
     * For backwards compatibility, we let each option have a label, price, min and max
     * key when stored in meta, even though all those fields are not used by each field type.
     * This function removes inappropriate keys in options based on the field type, and is
     * used to help keep the REST API responses consistent with the structure of the requests.
     *
     * @since 2.9.0
     *
     * @param array $fields
     * @return array
     */
    public static function coerce_options_to_remove_field_type_inappropriate_keys($fields)
    {
    }
}
class WC_Product_Addons_Product_Group
{
    /**
     * Gets a product's add-on "group" from the provided post in a structure intended for a REST API response
     *
     * @since 2.9.0
     *
     * @throws Exception
     * @param WP_Post $post
     * @return array
     */
    public static function get_group($post)
    {
    }
    /**
     * Updates a product's add-ons "group" using the provided arguments (after validating them)
     *
     * @since 2.9.0
     *
     * @throws Exception
     * @param WP_Post $post
     * @param array $args
     * @return array
     */
    public static function update_group($post, $args)
    {
    }
    /**
     * Updates a product's "exclude global add-ons" flag
     *
     * @since 2.9.0
     *
     * @param WP_Post $post
     * @param mixed $value
     * @param array $category_ids
     */
    protected static function set_exclude_global_add_ons($post, $value)
    {
    }
    /**
     * Gets a product's "exclude global add-ons" flag
     *
     * @since 2.9.0
     * @returns bool
     */
    protected static function get_exclude_global_add_ons($post)
    {
    }
    /**
     * Updates a product's add-on fields and options
     *
     * @since 2.9.0
     *
     * @throws Exception
     * @param WP_Post $post
     * @param array $fields
     */
    protected static function set_fields($post, $fields)
    {
    }
}
/**
 * Handles the settings conversion from pre 3.0.
 *
 * @since 3.0.0
 */
class WC_Product_Addons_3_0_Conversion_Helper
{
    /**
     * Performs the conversion.
     *
     * @since 3.0.0
     * @param array $addon_fields
     * @return array $updated_addon_fields Updated add-on fields.
     */
    public static function do_conversion($addon_fields)
    {
    }
    /**
     * Converts the field type to restrictions.
     *
     * @since 3.0.0
     * @param string $field_type
     * @return string $restrictions_type
     */
    public static function convert_restrictions($field_type)
    {
    }
    /**
     * Converts the field type.
     *
     * @since 3.0.0
     * @param string $previous_type
     * @return string $new_type
     */
    public static function convert_type($previous_type)
    {
    }
    /**
     * Adds a heading field.
     *
     * @since 3.0.0
     * @param array $field
     * @return array $heading
     */
    public static function generate_heading($field)
    {
    }
    /**
     * Converts the field to 3.0 compatible.
     *
     * @since 3.0.0
     * @param array $field Field setting.
     * @return array Converted field setting data.
     */
    public static function convert($field = array())
    {
    }
}
class WC_Product_Addons_Migration_3_0_Product
{
    /**
     * Constructor
     *
     * @since 3.0.0
     */
    public function __construct()
    {
    }
    /**
     * Try to run migration on product.
     *
     * @since 3.0.0
     */
    public function migrate()
    {
    }
}
class WC_Product_Addons_Migration_3_0
{
    /**
     * Constructor
     *
     * @since 3.0.0
     */
    public function __construct()
    {
    }
    /**
     * Run the migration.
     *
     * @since 3.0.0
     */
    private function run()
    {
    }
    /**
     * Migrate all Global add-ons.
     *
     * @since 3.0.0
     * @todo We should remove the saved backup "_product_addons_old" in the future.
     */
    private function migrate_global_addons()
    {
    }
}
// phpcs:disable WordPress.Files.FileName
/**
 * WooCommerce fallback notice.
 *
 * @since 4.1.2
 */
function woocommerce_product_addons_missing_wc_notice()
{
}
/**
 * Activation.
 *
 * @since 3.0.0
 */
function woocommerce_product_addons_activation()
{
}
/**
 * Handle plugin deactivation process.
 *
 * @since 6.1.3
 */
function woocommerce_product_addons_deactivation()
{
}
/**
 * Init product addons.
 */
function woocommerce_product_addons_init()
{
}