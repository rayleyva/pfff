<?php
/*
 * Purpose: Initialize a cURL session
 * Example:   
 *   <?php
 *   // create a new cURL resource
 *   $ch = curl_init();
 *   
 *   // set URL and other appropriate options
 *   curl_setopt($ch, CURLOPT_URL, "http://www.example.com/");
 *   curl_setopt($ch, CURLOPT_HEADER, 0);
 *   
 *   // grab URL and pass it to the browser
 *   curl_exec($ch);
 *   
 *   // close cURL resource, and free up system resources
 *   curl_close($ch);
 *   ?>
 * 
 * Output: 
 */
function curl_init(String $url = null_string) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Copy a cURL handle along with all of its preferences
 * Example:   
 *   <?php
 *   // create a new cURL resource
 *   $ch = curl_init();
 *   
 *   // set URL and other appropriate options
 *   curl_setopt($ch, CURLOPT_URL, 'http://www.example.com/');
 *   curl_setopt($ch, CURLOPT_HEADER, 0);
 *   
 *   // copy the handle
 *   $ch2 = curl_copy_handle($ch);
 *   
 *   // grab URL (http://www.example.com/) and pass it to the browser
 *   curl_exec($ch2);
 *   
 *   // close cURL resources, and free up system resources
 *   curl_close($ch2);
 *   curl_close($ch);
 *   ?>
 * 
 * Output: 
 */
function curl_copy_handle(Resource $ch) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Gets cURL version information
 * Example:   
 *   <?php
 *   // Get curl version array
 *   $version = curl_version();
 *   
 *   // These are the bitfields that can be used 
 *   // to check for features in the curl build
 *   $bitfields = Array(
 *               'CURL_VERSION_IPV6', 
 *               'CURL_VERSION_KERBEROS4', 
 *               'CURL_VERSION_SSL', 
 *               'CURL_VERSION_LIBZ'
 *               );
 *   
 *   
 *   foreach($bitfields as $feature)
 *   {
 *       echo $feature . ($version['features'] & constant($feature) ? ' matches' : ' does not match');
 *       echo PHP_EOL;
 *   }
 *   ?>
 * 
 * Output: 
 */
function curl_version(Int32 $uversion = CURLVERSION_NOW) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Set an option for a cURL transfer
 * Example:   
 *   <?php
 *   // create a new cURL resource
 *   $ch = curl_init();
 *   
 *   // set URL and other appropriate options
 *   curl_setopt($ch, CURLOPT_URL, "http://www.example.com/");
 *   curl_setopt($ch, CURLOPT_HEADER, false);
 *   
 *   // grab URL and pass it to the browser
 *   curl_exec($ch);
 *   
 *   // close cURL resource, and free up system resources
 *   curl_close($ch);
 *   ?>
 * 
 * Output:   
 *   Array
 *   (
 *       [name] => Foo
 *   )
 *   Array
 *   (
 *       [file] => Array
 *           (
 *               [name] => test.png
 *               [type] => image/png
 *               [tmp_name] => /tmp/phpcpjNeQ
 *               [error] => 0
 *               [size] => 279
 *           )
 *   
 *   )
 *   
 */
function curl_setopt(Resource $ch, Int32 $option, Variant $value) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Set multiple options for a cURL transfer
 * Example:   
 *   <?php
 *   // create a new cURL resource
 *   $ch = curl_init();
 *   
 *   // set URL and other appropriate options
 *   $options = array(CURLOPT_URL => 'http://www.example.com/',
 *                    CURLOPT_HEADER => false
 *                   );
 *   
 *   curl_setopt_array($ch, $options);
 *   
 *   // grab URL and pass it to the browser
 *   curl_exec($ch);
 *   
 *   // close cURL resource, and free up system resources
 *   curl_close($ch);
 *   ?>
 * 
 * Output: 
 */
function curl_setopt_array(Resource $ch, VariantVec $options) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Perform a cURL session
 * Example:   
 *   <?php
 *   // create a new cURL resource
 *   $ch = curl_init();
 *   
 *   // set URL and other appropriate options
 *   curl_setopt($ch, CURLOPT_URL, "http://www.example.com/");
 *   curl_setopt($ch, CURLOPT_HEADER, 0);
 *   
 *   // grab URL and pass it to the browser
 *   curl_exec($ch);
 *   
 *   // close cURL resource, and free up system resources
 *   curl_close($ch);
 *   ?>
 * 
 * Output: 
 */
function curl_exec(Resource $ch) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Get information regarding a specific transfer
 * Example:   
 *   <?php
 *   // Create a curl handle
 *   $ch = curl_init('http://www.yahoo.com/');
 *   
 *   // Execute
 *   curl_exec($ch);
 *   
 *   // Check if any error occured
 *   if(!curl_errno($ch))
 *   {
 *    $info = curl_getinfo($ch);
 *   
 *    echo 'Took ' . $info['total_time'] . ' seconds to send a request to ' . $info['url'];
 *   }
 *   
 *   // Close handle
 *   curl_close($ch);
 *   ?>
 * 
 * Output: 
 */
function curl_getinfo(Resource $ch, Int32 $opt = 0) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Return the last error number
 * Example:   
 *   <?php
 *   // Create a curl handle to a non-existing location
 *   $ch = curl_init('http://404.php.net/');
 *   
 *   // Execute
 *   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 *   curl_exec($ch);
 *   
 *   // Check if any error occured
 *   if(curl_errno($ch))
 *   {
 *       echo 'Curl error: ' . curl_error($ch);
 *   }
 *   
 *   // Close handle
 *   curl_close($ch);
 *   ?>
 * 
 * Output: 
 */
function curl_errno(Resource $ch) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Return a string containing the last error for the current session
 * Example:   
 *   <?php
 *   // Create a curl handle to a non-existing location
 *   $ch = curl_init('http://404.php.net/');
 *   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 *   
 *   if(curl_exec($ch) === false)
 *   {
 *       echo 'Curl error: ' . curl_error($ch);
 *   }
 *   else
 *   {
 *       echo 'Operation completed without any errors';
 *   }
 *   
 *   // Close handle
 *   curl_close($ch);
 *   ?>
 * 
 * Output: 
 */
function curl_error(Resource $ch) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Close a cURL session
 * Example:   
 *   <?php
 *   // create a new cURL resource
 *   $ch = curl_init();
 *   
 *   // set URL and other appropriate options
 *   curl_setopt($ch, CURLOPT_URL, "http://www.example.com/");
 *   curl_setopt($ch, CURLOPT_HEADER, 0);
 *   
 *   // grab URL and pass it to the browser
 *   curl_exec($ch);
 *   
 *   // close cURL resource, and free up system resources
 *   curl_close($ch);
 *   ?>
 * 
 * Output: 
 */
function curl_close(Resource $ch) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Returns a new cURL multi handle
 * Example:   
 *   <?php
 *   // create both cURL resources
 *   $ch1 = curl_init();
 *   $ch2 = curl_init();
 *   
 *   // set URL and other appropriate options
 *   curl_setopt($ch1, CURLOPT_URL, "http://www.example.com/");
 *   curl_setopt($ch1, CURLOPT_HEADER, 0);
 *   curl_setopt($ch2, CURLOPT_URL, "http://www.php.net/");
 *   curl_setopt($ch2, CURLOPT_HEADER, 0);
 *   
 *   //create the multiple cURL handle
 *   $mh = curl_multi_init();
 *   
 *   //add the two handles
 *   curl_multi_add_handle($mh,$ch1);
 *   curl_multi_add_handle($mh,$ch2);
 *   
 *   $running=null;
 *   //execute the handles
 *   do {
 *       usleep(10000);
 *       curl_multi_exec($mh,$running);
 *   } while ($running > 0);
 *   
 *   //close the handles
 *   curl_multi_remove_handle($mh, $ch1);
 *   curl_multi_remove_handle($mh, $ch2);
 *   curl_multi_close($mh);
 *   
 *   ?>
 * 
 * Output: 
 */
function curl_multi_init() {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Add a normal cURL handle to a cURL multi handle
 * Example:   
 *   <?php
 *   // create both cURL resources
 *   $ch1 = curl_init();
 *   $ch2 = curl_init();
 *   
 *   // set URL and other appropriate options
 *   curl_setopt($ch1, CURLOPT_URL, "http://www.example.com/");
 *   curl_setopt($ch1, CURLOPT_HEADER, 0);
 *   curl_setopt($ch2, CURLOPT_URL, "http://www.php.net/");
 *   curl_setopt($ch2, CURLOPT_HEADER, 0);
 *   
 *   //create the multiple cURL handle
 *   $mh = curl_multi_init();
 *   
 *   //add the two handles
 *   curl_multi_add_handle($mh,$ch1);
 *   curl_multi_add_handle($mh,$ch2);
 *   
 *   $running=null;
 *   //execute the handles
 *   do {
 *       curl_multi_exec($mh,$running);
 *   } while($running > 0);
 *   
 *   //close all the handles
 *   curl_multi_remove_handle($mh, $ch1);
 *   curl_multi_remove_handle($mh, $ch2);
 *   curl_multi_close($mh);
 *   ?>
 * 
 * Output: 
 */
function curl_multi_add_handle(Resource $mh, Resource $ch) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Remove a multi handle from a set of cURL handles
 * Example: 
 * 
 * Output: 
 */
function curl_multi_remove_handle(Resource $mh, Resource $ch) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Run the sub-connections of the current cURL handle
 * Example:   
 *   <?php
 *   // create both cURL resources
 *   $ch1 = curl_init();
 *   $ch2 = curl_init();
 *   
 *   // set URL and other appropriate options
 *   curl_setopt($ch1, CURLOPT_URL, "http://lxr.php.net/");
 *   curl_setopt($ch1, CURLOPT_HEADER, 0);
 *   curl_setopt($ch2, CURLOPT_URL, "http://www.php.net/");
 *   curl_setopt($ch2, CURLOPT_HEADER, 0);
 *   
 *   //create the multiple cURL handle
 *   $mh = curl_multi_init();
 *   
 *   //add the two handles
 *   curl_multi_add_handle($mh,$ch1);
 *   curl_multi_add_handle($mh,$ch2);
 *   
 *   $active = null;
 *   //execute the handles
 *   do {
 *       $mrc = curl_multi_exec($mh, $active);
 *   } while ($mrc == CURLM_CALL_MULTI_PERFORM);
 *   
 *   while ($active && $mrc == CURLM_OK) {
 *       if (curl_multi_select($mh) != -1) {
 *           do {
 *               $mrc = curl_multi_exec($mh, $active);
 *           } while ($mrc == CURLM_CALL_MULTI_PERFORM);
 *       }
 *   }
 *   
 *   //close the handles
 *   curl_multi_remove_handle($mh, $ch1);
 *   curl_multi_remove_handle($mh, $ch2);
 *   curl_multi_close($mh);
 *   
 *   ?>
 * 
 * Output: 
 */
function curl_multi_exec(Resource $mh, Int32 &$still_running) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Wait for activity on any curl_multi connection
 * Example: 
 * 
 * Output: 
 */
function curl_multi_select(Resource $mh, Double $timeout = 1.0) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Return the content of a cURL handle if  <constant>CURLOPT_RETURNTRANSFER</constant>  is set
 * Example: 
 * 
 * Output: 
 */
function curl_multi_getcontent(Resource $ch) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Get information about the current transfers
 * Example:   
 *   <?php
 *   
 *   $urls = array(
 *      "http://www.cnn.com/",
 *      "http://www.bbc.co.uk/",
 *      "http://www.yahoo.com/"
 *   );
 *   
 *   $mh = curl_multi_init();
 *   
 *   foreach ($urls as $i => $url) {
 *       $conn[$i] = curl_init($url);
 *       curl_setopt($conn[$i], CURLOPT_RETURNTRANSFER, 1);
 *       curl_multi_add_handle($mh, $conn[$i]);
 *   }
 *   
 *   do {
 *       $status = curl_multi_exec($mh, $active);
 *       $info = curl_multi_info_read($mh);
 *       if (false !== $info) {
 *           var_dump($info);
 *       }
 *   } while ($status === CURLM_CALL_MULTI_PERFORM || $active);
 *   
 *   foreach ($urls as $i => $url) {
 *       $res[$i] = curl_multi_getcontent($conn[$i]);
 *       curl_close($conn[$i]);
 *   }
 *   
 *   var_dump(curl_multi_info_read($mh));
 *   
 *   ?>
 * 
 * Output:   
 *   array(3) {
 *     ["msg"]=>
 *     int(1)
 *     ["result"]=>
 *     int(0)
 *     ["handle"]=>
 *     resource(5) of type (curl)
 *   }
 *   array(3) {
 *     ["msg"]=>
 *     int(1)
 *     ["result"]=>
 *     int(0)
 *     ["handle"]=>
 *     resource(7) of type (curl)
 *   }
 *   array(3) {
 *     ["msg"]=>
 *     int(1)
 *     ["result"]=>
 *     int(0)
 *     ["handle"]=>
 *     resource(6) of type (curl)
 *   }
 *   bool(false)
 */
function curl_multi_info_read(Resource $mh, Int32 &$msgs_in_queue = null) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Close a set of cURL handles
 * Example:   
 *   <?php
 *   // create both cURL resources
 *   $ch1 = curl_init();
 *   $ch2 = curl_init();
 *   
 *   // set URL and other appropriate options
 *   curl_setopt($ch1, CURLOPT_URL, "http://www.example.com/");
 *   curl_setopt($ch1, CURLOPT_HEADER, 0);
 *   curl_setopt($ch2, CURLOPT_URL, "http://www.php.net/");
 *   curl_setopt($ch2, CURLOPT_HEADER, 0);
 *   
 *   //create the multiple cURL handle
 *   $mh = curl_multi_init();
 *   
 *   //add the two handles
 *   curl_multi_add_handle($mh,$ch1);
 *   curl_multi_add_handle($mh,$ch2);
 *   
 *   $running=null;
 *   //execute the handles
 *   do {
 *       curl_multi_exec($mh,$running);
 *   } while ($running > 0);
 *   
 *   //close the handles
 *   curl_multi_remove_handle($mh, $ch1);
 *   curl_multi_remove_handle($mh, $ch2);
 *   curl_multi_close($mh);
 *   
 *   ?>
 * 
 * Output: 
 */
function curl_multi_close(Resource $mh) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

