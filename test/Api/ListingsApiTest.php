<?php
/**
 * ListingsApiTest
 * PHP version 5
 *
 * @category Class
 * @package  marketcheck\api\sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Marketcheck Cars API
 *
 * <b>Access the New, Used and Certified cars inventories for all Car Dealers in US.</b> <br/>The data is sourced from online listings by over 44,000 Car dealers in US. At any time, there are about 6.2M searchable listings (about 1.9M unique VINs) for Used & Certified cars and about 6.6M (about 3.9M unique VINs) New Car listings from all over US. We use this API at the back for our website <a href='https://www.marketcheck.com' target='_blank'>www.marketcheck.com</a> and our Android and iOS mobile apps too.<br/><h5> Few useful links : </h5><ul><li>A quick view of the API and the use cases is depicated <a href='https://portals.marketcheck.com/mcapi/' target='_blank'>here</a></li><li>The Postman collection with various usages of the API is shared here https://www.getpostman.com/collections/2752684ff636cdd7bac2</li></ul>
 *
 * OpenAPI spec version: 1.0.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

require __DIR__.'/../../vendor/autoload.php';
require __DIR__.'/../../lib/Api/ListingsApi.php';

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;

use \marketcheck\api\sdk\Configuration;
use \marketcheck\api\sdk\ApiException;
use \marketcheck\api\sdk\ObjectSerializer;

/**
 * ListingsApiTest Class Doc Comment
 *
 * @category Class
 * @package  marketcheck\api\sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ListingsApiTest extends \PHPUnit_Framework_TestCase
{
    private $listing_id = array("4T1B11HK1JU643996-8a68ad13-7ca4-47eb-bc8f-53635b054667",
                                "4T1B11HK9JU644619-fe627386-1868-4b3f-9e64-0dd37e96a6c6",
                                "4T1B11HKXJU647545-5766db96-3c3a-49c7-b2f1-80604adb429f",
                                "JF2GTABC9JH333062-cd9481a0-c474-49cc-90df-9216fed35c10"
                                );
    private $api_key = "your api key";
    private $latitude = null;
    private $longitude = null;
    private $radius = null;
    private $zip = null;
    private $include_lease = null;
    private $include_finance = null;
    private $lease_term = null;
    private $lease_down_payment = null;
    private $lease_emp = null;
    private $finance_loan_term = null;
    private $finance_loan_apr = null;
    private $finance_emp = null;
    private $finance_down_payment = null;
    private $finance_down_payment_per = null;
    private $car_type = null;
    private $seller_type = null;
    private $carfax_1_owner = null;
    private $carfax_clean_title = null;
    private $year = null;
    private $make = null;
    private $model = null;
    private $trim = null;
    private $dealer_id = null;
    private $vin = array("1FA6P8TH2F5348583","1FTEX1EP3FKD56744","1FA6P8TH7F5350202","1FTEX1EP8FKD00296","1FDUF4HY7FED44451");
    private $source = null; 
    private $body_type = null;
    private $body_subtype = null; 
    private $vehicle_type = null; 
    private $vins = null; 
    private $taxonomy_vins = null; 
    private $ymmt = null; 
    private $match = null; 
    private $cylinders = null; 
    private $transmission = null; 
    private $speeds = null; 
    private $doors = null; 
    private $drivetrain = null; 
    private $exterior_color = null;
    private $interior_color = null; 
    private $engine = null; 
    private $engine_type = null; 
    private $engine_aspiration = null; 
    private $engine_block = null; 
    private $miles_range = null; 
    private $price_range = null; 
    private $dom_range = null; 
    private $sort_by = null; 
    private $sort_order = null; 
    private $rows = null; 
    private $start = null; 
    private $facets = null; 
    private $stats = null; 
    private $country = "US"; 
    private $plot = null; 
    private $nodedup = null; 
    private $state = null; 
    private $city = null; 
    private $dealer_name = null; 
    private $trim_o = null; 
    private $trim_r = null; 
    private $dom_active_range = null; 
    private $dom_180_range = null; 
    private $options = null; 
    private $features = null; 
    private $exclude_certified = null;

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for getListing
     *
     * Listing by id.
     *
     */
    public function testGetListing()
    {
        $apiInstance = new marketcheck\api\sdk\Api\ListingsApi(new GuzzleHttp\Client());   
        echo "\nValidate listing formats";
        
        foreach($this->listing_id as $l_id) 
        {
            try 
            {
                $result = $apiInstance->getListing($l_id,$this->api_key);          
                $this->assertEquals("object", gettype($result["media"])); 
                $this->assertEquals("object", gettype($result["extra"])); 
                $this->assertEquals("object", gettype($result["dealer"])); 
                $this->assertEquals("object", gettype($result["build"])); 

                $this->assertEquals("array", gettype($result["media"]["photo_links"]));

                $this->assertEquals("array", gettype($result["extra"]["features"]));
                //$this->assertEquals("string", gettype($result["extra"]["seller_comments"]));   

                $this->assertEquals("string", gettype($result["dealer"]["id"]));
                $this->assertEquals("string", gettype($result["dealer"]["name"]));
                $this->assertEquals("string", gettype($result["dealer"]["street"]));
                $this->assertEquals("string", gettype($result["dealer"]["zip"]));

                $this->assertEquals("string", gettype($result["build"]["year"]));
                $this->assertEquals("string", gettype($result["build"]["make"]));
                $this->assertEquals("string", gettype($result["build"]["model"]));
                $this->assertEquals("string", gettype($result["build"]["engine"]));           
                print_r("\n/listing/$l_id?api_key={{api_key}}: endpoint working fine");            
            } catch (Exception $e) {
                $this->fail($e->getMessage());
            }
        }
    }

    /**
     * Test case for getListingExtra
     *
     * Long text Listings attributes for Listing with the given id.
     *
     */
    public function testGetListingExtra()
    {
        $apiInstance = new marketcheck\api\sdk\Api\ListingsApi(new GuzzleHttp\Client());   
        echo "\nValidate extra fields in listings";
        
        foreach($this->listing_id as $l_id) 
        {
            try 
            {
                $result = $apiInstance->getListingExtra($l_id , $this->api_key);                    
                $this->assertEquals("string", gettype($result["id"]));
                $this->assertEquals("array", gettype($result["options"]));
                $this->assertEquals("array", gettype($result["features"])); 
                //$this->assertEquals("string", gettype($result["seller_comments"])); 
                print_r("\n/listing/$l_id/extra?api_key={{api_key}}: endpoint working fine");            
            } catch (Exception $e) {
                $this->fail($e->getMessage());
            }
        }
    }

    /**
     * Test case for getListingMedia
     *
     * Listing media by id.
     *
     */
    public function testGetListingMedia()
    {
        $apiInstance = new marketcheck\api\sdk\Api\ListingsApi(new GuzzleHttp\Client());   
        echo "\nValidate media fields in listings";

        foreach($this->listing_id as $l_id) 
        {
            try 
            {
                $result = $apiInstance->getListingMedia($l_id , $this->api_key);                
                $this->assertEquals("string", gettype($result["id"]));
                $this->assertEquals("string", gettype($result["photo_url"]));
                $this->assertEquals("array", gettype($result["photo_links"]));    
                print_r("\n/listing/$l_id/media?api_key={{api_key}}: endpoint working fine");            
            } catch (Exception $e) {
                $this->fail($e->getMessage());
            }
        }
    }

    /**
     * Test case for search
     *
     * Gets active car listings for the given search criteria.
     *
     */
    public function testSearch()
    {
        $apiInstance = new marketcheck\api\sdk\Api\ListingsApi(new GuzzleHttp\Client());   
        echo "Validate country";
        $this->latitude = 37.998;
        $this->longitude = -84.522;
        $this->radius = 200;
        try 
        {            
        $result = $apiInstance->search($this->api_key, $this->latitude, $this->longitude, $this->radius, $zip = null, $include_lease = null, $include_finance = null, $lease_term = null, $lease_down_payment = null, $lease_emp = null, $finance_loan_term = null, $finance_loan_apr = null, $finance_emp = null, $finance_down_payment = null, $finance_down_payment_per = null, $car_type = null, $seller_type = null, $carfax_1_owner = null, $carfax_clean_title = null, $year = null, $make = null, $model = null, $trim = null, $dealer_id = null, $vin = null, $source = null, $body_type = null, $body_subtype = null, $vehicle_type = null, $vins = null, $taxonomy_vins = null, $ymmt = null, $match = null, $cylinders = null, $transmission = null, $speeds = null, $doors = null, $drivetrain = null, $exterior_color = null, $interior_color = null, $engine = null, $engine_type = null, $engine_aspiration = null, $engine_block = null, $miles_range = null, $price_range = null, $dom_range = null, $sort_by = null, $sort_order = null, $rows = null, $start = null, $facets = null, $stats = null, $country = $this->country, $plot = null, $nodedup = null, $state = null, $city = null, $dealer_name = null, $trim_o = null, $trim_r = null, $dom_active_range = null, $dom_180_range = null, $options = null, $features = null, $exclude_certified = null);  
        $this->assertNotEquals(sizeof($result["listings"]), 0);
        foreach($result as $listing)
        {
            print_r($listing);
            $this->assertEquals($this->country, $listing["dealer"]);
        }
        echo "\n/search?api_key={{api_key}}&country=$this->country&latitude=37.998&longitude=-84.522&radius=200: endpoint working fine";   
        } catch (Exception $e) {
            $this->fail($e->getMessage());
            }      
    }
}


//$result = $apiInstance->search($this->api_key, $this->latitude, $this->longitude, $this->radius, $this->zip, $this->include_lease, $this->include_finance, $this->lease_term, $this->lease_down_payment, $this->lease_emp, $this->finance_loan_term, $this->finance_loan_apr, $this->finance_emp, $this->finance_down_payment, $this->finance_down_payment_per, $this->car_type, $this->seller_type, $this->carfax_1_owner, $this->carfax_clean_title, $this->year, $this->make, $this->model, $this->trim, $this->dealer_id, $this->vin, $this->source, $this->body_type, $this->body_subtype, $this->vehicle_type, $this->vins, $this->taxonomy_vins, $this->ymmt, $this->match, $this->cylinders, $this->transmission, $this->speeds, $this->doors, $this->drivetrain, $this->exterior_color, $this->interior_color, $this->engine, $this->engine_type, $this->engine_aspiration, $this->engine_block, $this->miles_range, $this->price_range, $this->dom_range, $this->sort_by, $this->sort_order, $this->rows, $this->start, $this->facets, $this->stats, $this->country, $this->plot, $this->nodedup, $this->state, $this->city, $this->dealer_name, $this->trim_o, $this->trim_r, $this->dom_active_range, $this->dom_180_range, $this->options, $this->features, $this->exclude_certified);  
                