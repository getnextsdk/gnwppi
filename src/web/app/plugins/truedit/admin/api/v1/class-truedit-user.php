<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/truedit/
 * @since      1.0.0
 *
 * @package    TruEdit
 * @subpackage TruEdit/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    TruEdit
 * @subpackage TruEdit/includes
 * @author     TruEdit <test@test.com>
 */
class TruEdit_ApiRoute_User implements TruEdit_ApiRoute {

    private $plugin_name;
    private $version;

    private $route_version;
    private $route;
    private $routes;

    public function __construct($plugin_name, $version) {

        $this->plugin_name = $plugin_name;
        $this->version = $version;

        $this->route = 'user/sessionInfo';
        $this->route_version = 1;
        
        $this->routes = [
            'read' => [
                'route' => $this->route,
                'options' => [
                    'methods' => WP_REST_Server::READABLE,
                    'callback' => [
                        $this,
                        'read'
                    ]
                ]
            ]
        ];
    }

	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_dependencies() {}

    /**
     * Get/Set
     * --------------------------------------------
     */
    public function get_route_version() {
        return $this->route_version;
    }

    public function get_routes() {
        return $this->routes;
    }

    /**
     * CRUD
     * --------------------------------------------
     */
    public function read( WP_REST_Request $request ) {

        try {

            $resource = new TruEdit_Resource_Check();
            $res = $resource->check();
    
            $session_info = json_decode($res->getResult());
    
            return new WP_REST_Response($session_info, 200);
            
        } catch (\Swagger\Client\ApiException $e) {

            return TruEdit_Handle::swagger_exception($e);
            
        } catch (TruEdit_Exception $e) {
            
            return TruEdit_Handle::truedit_exception($e);
            
        } catch (Exception $e) {

            return TruEdit_Handle::exception($e);

        }
        
    }

    public function create( WP_REST_Request $request ) {

    }

    public function update( WP_REST_Request $request ) {

    }
    
    public function delete( WP_REST_Request $request ) {

    }

}
