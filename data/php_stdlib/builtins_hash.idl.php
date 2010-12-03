<?php
/*
 * Purpose: Generate a hash value (message digest)
 * Example:   
 *   <?php
 *   echo hash('ripemd160', 'The quick brown fox jumped over the lazy dog.');
 *   ?>
 * 
 * Output:   
 *   ec457d0a974c48d5685a7efa03d137dc8bbde7e3
 */
function hash(String $algo, String $data, Boolean $raw_output = false) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Return a list of registered hashing algorithms
 * Example:   
 *   <?php
 *   print_r(hash_algos());
 *   ?>
 * 
 * Output:   
 *   Array
 *   (
 *       [0] => md4
 *       [1] => md5
 *       [2] => sha1
 *       [3] => sha256
 *       [4] => sha384
 *       [5] => sha512
 *       [6] => ripemd128
 *       [7] => ripemd160
 *       [8] => whirlpool
 *       [9] => tiger128,3
 *       [10] => tiger160,3
 *       [11] => tiger192,3
 *       [12] => tiger128,4
 *       [13] => tiger160,4
 *       [14] => tiger192,4
 *       [15] => snefru
 *       [16] => gost
 *       [17] => adler32
 *       [18] => crc32
 *       [19] => crc32b
 *       [20] => haval128,3
 *       [21] => haval160,3
 *       [22] => haval192,3
 *       [23] => haval224,3
 *       [24] => haval256,3
 *       [25] => haval128,4
 *       [26] => haval160,4
 *       [27] => haval192,4
 *       [28] => haval224,4
 *       [29] => haval256,4
 *       [30] => haval128,5
 *       [31] => haval160,5
 *       [32] => haval192,5
 *       [33] => haval224,5
 *       [34] => haval256,5
 *   )
 */
function hash_algos() {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Initialize an incremental hashing context
 * Example:   
 *   <?php
 *   $ctx = hash_init('md5');
 *   hash_update($ctx, 'The quick brown fox ');
 *   hash_update($ctx, 'jumped over the lazy dog.');
 *   echo hash_final($ctx);
 *   ?>
 * 
 * Output:   
 *   5c6ffbdd40d9556b73a21e63c3e0e904
 */
function hash_init(String $algo, Int32 $options = 0, String $key = null_string) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Generate a hash value using the contents of a given file
 * Example:   
 *   <?php
 *   /* Create a file to calculate hash of  * / 
 *   file_put_contents('example.txt', 'The quick brown fox jumped over the lazy dog.');
 *   
 *   echo hash_file('md5', 'example.txt');
 *   ?>
 * 
 * Output:   
 *   5c6ffbdd40d9556b73a21e63c3e0e904
 */
function hash_file(String $algo, String $filename, Boolean $raw_output = false) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Finalize an incremental hash and return resulting digest
 * Example:   
 *   <?php
 *   $ctx = hash_init('sha1');
 *   hash_update($ctx, 'The quick brown fox jumped over the lazy dog.');
 *   echo hash_final($ctx);
 *   ?>
 * 
 * Output:   
 *   c0854fb9fb03c41cce3802cb0d220529e6eef94e
 */
function hash_final(Resource $context, Boolean $raw_output = false) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Generate a keyed hash value using the HMAC method and the contents of a given file
 * Example:   
 *   <?php
 *   /* Create a file to calculate hash of  * / 
 *   file_put_contents('example.txt', 'The quick brown fox jumped over the lazy dog.');
 *   
 *   echo hash_hmac_file('md5', 'example.txt', 'secret');
 *   ?>
 * 
 * Output:   
 *   7eb2b5c37443418fc77c136dd20e859c
 */
function hash_hmac_file(String $algo, String $filename, String $key, Boolean $raw_output = false) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Generate a keyed hash value using the HMAC method
 * Example:   
 *   <?php
 *   echo hash_hmac('ripemd160', 'The quick brown fox jumped over the lazy dog.', 'secret');
 *   ?>
 * 
 * Output:   
 *   b8e7ae12510bdfb1812e463a7f086122cf37e4f7
 */
function hash_hmac(String $algo, String $data, String $key, Boolean $raw_output = false) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Pump data into an active hashing context from a file
 * Example: 
 * 
 * Output: 
 */
function hash_update_file(Resource $init_context, String $filename, Resource $stream_context = null) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Pump data into an active hashing context from an open stream
 * Example:   
 *   <?php
 *   $fp = tmpfile();
 *   fwrite($fp, 'The quick brown fox jumped over the lazy dog.');
 *   rewind($fp);
 *   
 *   $ctx = hash_init('md5');
 *   hash_update_stream($ctx, $fp);
 *   echo hash_final($ctx);
 *   ?>
 * 
 * Output:   
 *   5c6ffbdd40d9556b73a21e63c3e0e904
 */
function hash_update_stream(Resource $context, Resource $handle, Int32 $length = -1) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Pump data into an active hashing context
 * Example: 
 * 
 * Output: 
 */
function hash_update(Resource $context, String $data) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

