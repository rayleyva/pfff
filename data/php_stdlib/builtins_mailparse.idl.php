<?php
/*
 * Purpose: Send mail
 * Example:   
 *   <?php
 *   $text = str_replace("\n.", "\n..", $text);
 *   ?>
 * 
 * Output: 
 */
function mail(String $to, String $subject, String $message, String $additional_headers = null_string, String $additional_parameters = null_string) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Calculate the hash value needed by EZMLM
 * Example:   
 *   <?php
 *   
 *   $user = "joecool@example.com";
 *   $hash = ezmlm_hash($user);
 *   $query = sprintf("INSERT INTO sample VALUES (%s, '%s')", $hash, $user);
 *   $db->query($query); // using PHPLIB db interface
 *   
 *   ?>
 * 
 * Output: 
 */
function ezmlm_hash(String $addr) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Create a mime mail resource
 * Example: 
 * 
 * Output: 
 */
function mailparse_msg_create() {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Frees a MIME resource
 * Example: 
 * 
 * Output: 
 */
function mailparse_msg_free(Resource $mimemail) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Parses a file
 * Example: 
 * 
 * Output: 
 */
function mailparse_msg_parse_file(String $filename) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Incrementally parse data into buffer
 * Example: 
 * 
 * Output: 
 */
function mailparse_msg_parse(Resource $mimemail, String $data) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Extracts/decodes a message section
 * Example: 
 * 
 * Output: 
 */
function mailparse_msg_extract_part_file(Resource $mimemail, String $filename, String $callbackfunc = null_string) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Extracts a message section including headers without decoding the transfer encoding
 * Example: 
 * 
 * Output: 
 */
function mailparse_msg_extract_whole_part_file(Resource $mimemail, String $filename, String $callbackfunc = null_string) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose:    Extracts/decodes a message section
 * Example: 
 * 
 * Output: 
 */
function mailparse_msg_extract_part(Resource $mimemail, String $msgbody, String $callbackfunc = null_string) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Returns an associative array of info about the message
 * Example: 
 * 
 * Output: 
 */
function mailparse_msg_get_part_data(Resource $mimemail) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Returns a handle on a given section in a mimemessage
 * Example: 
 * 
 * Output: 
 */
function mailparse_msg_get_part(Resource $mimemail, String $mimesection) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Returns an array of mime section names in the supplied message
 * Example: 
 * 
 * Output: 
 */
function mailparse_msg_get_structure(Resource $mimemail) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Parse RFC 822 compliant addresses
 * Example:   
 *   <?php
 *   
 *   $to = 'Wez Furlong <wez@example.com>, doe@example.com';
 *   var_dump(mailparse_rfc822_parse_addresses($to));
 *   
 *   ?>
 * 
 * Output:   
 *   array(2) {
 *     [0]=>
 *     array(3) {
 *       ["display"]=>
 *       string(11) "Wez Furlong"
 *       ["address"]=>
 *       string(15) "wez@example.com"
 *       ["is_group"]=>
 *       bool(false)
 *     }
 *     [1]=>
 *     array(3) {
 *       ["display"]=>
 *       string(15) "doe@example.com"
 *       ["address"]=>
 *       string(15) "doe@example.com"
 *       ["is_group"]=>
 *       bool(false)
 *     }
 *   }
 */
function mailparse_rfc822_parse_addresses(String $addresses) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose:    Streams data from source file pointer, apply encoding and write to destfp 
 * Example:   
 *   <?php
 *   
 *   // email.eml contents: hello, this is some text=hello.
 *   $fp = fopen('email.eml', 'r');
 *   
 *   $dest = tmpfile();
 *   
 *   mailparse_stream_encode($fp, $dest, "quoted-printable");
 *   
 *   rewind($dest);
 *   
 *   // Display new file contents
 *   fpassthru($dest);
 *   
 *   ?>
 * 
 * Output:   
 *   hello, this is some text=3Dhello.
 */
function mailparse_stream_encode(Resource $sourcefp, Resource $destfp, String $encoding) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose:    Scans the data from fp and extract each embedded uuencoded file
 * Example:   
 *   <?php
 *   
 *   $text = <<<EOD
 *   To: fred@example.com
 *   
 *   hello, this is some text hello.
 *   blah blah blah.
 *   
 *   begin 644 test.txt
 *   /=&AI<R!I<R!A('1E<W0*
 *   `
 *   end
 *   
 *   EOD;
 *   
 *   $fp = tmpfile();
 *   fwrite($fp, $text);
 *   
 *   $data = mailparse_uudecode_all($fp);
 *   
 *   echo "BODY\n";
 *   readfile($data[0]["filename"]);
 *   echo "UUE ({$data[1]['origfilename']})\n";
 *   readfile($data[1]["filename"]);
 *   
 *   // Clean up
 *   unlink($data[0]["filename"]);
 *   unlink($data[1]["filename"]);
 *   
 *   ?>
 * 
 * Output:   
 *   BODY
 *   To: fred@example.com
 *   
 *   hello, this is some text hello.
 *   blah blah blah.
 *   
 *   UUE (test.txt)
 *   this is a test
 */
function mailparse_uudecode_all(Resource $fp) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Gets the best way of encoding
 * Example:   
 *   <?php
 *   
 *   $fp = fopen('somemail.eml', 'r');
 *   echo 'Best encoding: ' . mailparse_determine_best_xfer_encoding($fp);
 *   
 *   ?>
 * 
 * Output:   
 *   Best encoding: 7bit
 */
function mailparse_determine_best_xfer_encoding(Resource $fp) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

