<?php
/*
 * Purpose: Opens file or URL
 * Example:   
 *   <?php
 *   $handle = fopen("c:\\folder\\resource.txt", "r");
 *   ?>
 * 
 * Output: 
 */
function fopen(String $filename, String $mode, Boolean $use_include_path = false, Resource $context = null_object) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Opens process file pointer
 * Example:   
 *   <?php
 *   $handle = popen("/bin/ls", "r");
 *   ?>
 * 
 * Output: 
 */
function popen(String $command, String $mode) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Closes an open file pointer
 * Example:   
 *   <?php
 *   
 *   $handle = fopen('somefile.txt', 'r');
 *   
 *   fclose($handle);
 *   
 *   ?>
 * 
 * Output: 
 */
function fclose(Resource $handle) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Closes process file pointer
 * Example:   
 *   <?php
 *   $handle = popen('/bin/ls', 'r');
 *   pclose($handle);
 *   ?>
 * 
 * Output: 
 */
function pclose(Resource $handle) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Seeks on a file pointer
 * Example:   
 *   <?php
 *   
 *   $fp = fopen('somefile.txt', 'r');
 *   
 *   // read some data
 *   $data = fgets($fp, 4096);
 *   
 *   // move back to the beginning of the file
 *   // same as rewind($fp);
 *   fseek($fp, 0);
 *   
 *   ?>
 * 
 * Output: 
 */
function fseek(Resource $handle, Int64 $offset, Int64 $whence = SEEK_SET) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Rewind the position of a file pointer
 * Example:   
 *   <?php
 *   $handle = fopen('output.txt', 'r+');
 *   
 *   fwrite($handle, 'Really long sentence.');
 *   rewind($handle);
 *   fwrite($handle, 'Foo');
 *   rewind($handle);
 *   
 *   echo fread($handle, filesize('output.txt'));
 *   
 *   fclose($handle);
 *   ?>
 * 
 * Output:   
 *   Foolly long sentence.
 */
function rewind(Resource $handle) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Returns the current position of the file read/write pointer
 * Example:   
 *   <?php
 *   
 *   // opens a file and read some data
 *   $fp = fopen("/etc/passwd", "r");
 *   $data = fgets($fp, 12);
 *   
 *   // where are we ?
 *   echo ftell($fp); // 11
 *   
 *   fclose($fp);
 *   
 *   ?>
 * 
 * Output: 
 */
function ftell(Resource $handle) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Tests for end-of-file on a file pointer
 * Example:   
 *   <?php
 *   function safe_feof($fp, &$start = NULL) {
 *    $start = microtime(true);
 *   
 *    return feof($fp);
 *   }
 *   
 *   /* Assuming $fp is previously opened by fsockopen()  * / 
 *   
 *   $start = NULL;
 *   $timeout = ini_get('default_socket_timeout');
 *   
 *   while(!safe_feof($fp, $start) && (microtime(true) - $start) < $timeout)
 *   {
 *    /* Handle  * / 
 *   }
 *   ?>
 * 
 * Output: 
 */
function feof(Resource $handle) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Gets information about a file using an open file pointer
 * Example:   
 *   <?php
 *   
 *   // open a file
 *   $fp = fopen("/etc/passwd", "r");
 *   
 *   // gather statistics
 *   $fstat = fstat($fp);
 *   
 *   // close the file
 *   fclose($fp);
 *   
 *   // print only the associative part
 *   print_r(array_slice($fstat, 13));
 *   
 *   ?>
 * 
 * Output:   
 *   Array
 *   (
 *       [dev] => 771
 *       [ino] => 488704
 *       [mode] => 33188
 *       [nlink] => 1
 *       [uid] => 0
 *       [gid] => 0
 *       [rdev] => 0
 *       [size] => 1114
 *       [atime] => 1061067181
 *       [mtime] => 1056136526
 *       [ctime] => 1056136526
 *       [blksize] => 4096
 *       [blocks] => 8
 *   )
 */
function fstat(Resource $handle) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Binary-safe file read
 * Example:   
 *   <?php
 *   // get contents of a file into a string
 *   $filename = "/usr/local/something.txt";
 *   $handle = fopen($filename, "r");
 *   $contents = fread($handle, filesize($filename));
 *   fclose($handle);
 *   ?>
 * 
 * Output: 
 */
function fread(Resource $handle, Int64 $length) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Gets character from file pointer
 * Example:   
 *   <?php
 *   $fp = fopen('somefile.txt', 'r');
 *   if (!$fp) {
 *       echo 'Could not open file somefile.txt';
 *   }
 *   while (false !== ($char = fgetc($fp))) {
 *       echo "$char\n";
 *   }
 *   ?>
 * 
 * Output: 
 */
function fgetc(Resource $handle) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Gets line from file pointer
 * Example:   
 *   <?php
 *   $handle = @fopen("/tmp/inputfile.txt", "r");
 *   if ($handle) {
 *       while (!feof($handle)) {
 *           $buffer = fgets($handle, 4096);
 *           echo $buffer;
 *       }
 *       fclose($handle);
 *   }
 *   ?>
 * 
 * Output: 
 */
function fgets(Resource $handle, Int64 $length = 1024) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Gets line from file pointer and strip HTML tags
 * Example:   
 *   <?php
 *   $str = <<<EOD
 *   <html><body>
 *    <p>Welcome! Today is the <?php echo(date('jS')); ?> of <?= date('F'); ?>.</p>
 *   </body></html>
 *   Text outside of the HTML block.
 *   EOD;
 *   file_put_contents('sample.php', $str);
 *   
 *   $handle = @fopen("sample.php", "r");
 *   if ($handle) {
 *       while (!feof($handle)) {
 *           $buffer = fgetss($handle, 4096);
 *           echo $buffer;
 *       }
 *       fclose($handle);
 *   }
 *   ?>
 * 
 * Output:   
 *    Welcome! Today is the  of .
 *   
 *   Text outside of the HTML block.
 */
function fgetss(Resource $handle, Int64 $length = 0, String $allowable_tags = null_string) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Parses input from a file according to a format
 * Example:   
 *   <?php
 *   $handle = fopen("users.txt", "r");
 *   while ($userinfo = fscanf($handle, "%s\t%s\t%s\n")) {
 *       list ($name, $profession, $countrycode) = $userinfo;
 *       //... do something with the values
 *   }
 *   fclose($handle);
 *   ?>
 * 
 * Output: 
 */
function fscanf(Resource $handle, String $format) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
 $args = func_num_args(); // fake code to say variable #args
 
}

/*
 * Purpose: Output all remaining data on a file pointer
 * Example:   
 *   <?php
 *   
 *   // open the file in a binary mode
 *   $name = './img/ok.png';
 *   $fp = fopen($name, 'rb');
 *   
 *   // send the right headers
 *   header("Content-Type: image/png");
 *   header("Content-Length: " . filesize($name));
 *   
 *   // dump the picture and stop the script
 *   fpassthru($fp);
 *   exit;
 *   
 *   ?>
 * 
 * Output: 
 */
function fpassthru(Resource $handle) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Binary-safe file write
 * Example:   
 *   <?php
 *   function fwrite_stream($fp, $string) {
 *       for ($written = 0; $written < strlen($string); $written += $fwrite) {
 *           $fwrite = fwrite($fp, substr($string, $written));
 *           if ($fwrite === false) {
 *               return $written;
 *           }
 *       }
 *       return $written;
 *   }
 *   ?>
 * 
 * Output: 
 */
function fwrite(Resource $handle, String $data, Int64 $length = 0) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: &Alias;  <function>fwrite</function>
 * Example: 
 * 
 * Output: 
 */
function fputs(Resource $handle, String $data, Int64 $length = 0) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Write a formatted string to a stream
 * Example:   
 *   <?php
 *   if (!($fp = fopen('date.txt', 'w'))) {
 *       return;
 *   }
 *   
 *   fprintf($fp, "%04d-%02d-%02d", $year, $month, $day);
 *   // will write the formatted ISO date to date.txt
 *   ?>
 * 
 * Output: 
 */
function fprintf(Resource $handle, String $format) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
 $args = func_num_args(); // fake code to say variable #args
 
}

/*
 * Purpose: Write a formatted string to a stream
 * Example:   
 *   <?php
 *   if (!($fp = fopen('date.txt', 'w')))
 *       return;
 *   
 *   vfprintf($fp, "%04d-%02d-%02d", array($year, $month, $day));
 *   // will write the formatted ISO date to date.txt
 *   ?>
 * 
 * Output: 
 */
function vfprintf(Resource $handle, String $format, VariantVec $args) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Flushes the output to a file
 * Example:   
 *   <?php
 *   $filename = 'bar.txt';
 *   
 *   $file = fopen($filename, 'r+');
 *   rewind($file);
 *   fwrite($file, 'Foo');
 *   fflush($file);
 *   ftruncate($file, ftell($file));
 *   fclose($file);
 *   ?>
 * 
 * Output: 
 */
function fflush(Resource $handle) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Truncates a file to a given length
 * Example:   
 *   <?php
 *   $filename = 'lorem_ipsum.txt';
 *   
 *   $handle = fopen($filename, 'r+');
 *   ftruncate($handle, rand(1, filesize($filename)));
 *   rewind($handle);
 *   echo fread($handle, filesize($filename));
 *   fclose($handle);
 *   ?>
 * 
 * Output: 
 */
function ftruncate(Resource $handle, Int64 $size) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Portable advisory file locking
 * Example:   
 *   <?php
 *   
 *   $fp = fopen("/tmp/lock.txt", "r+");
 *   
 *   if (flock($fp, LOCK_EX)) { // do an exclusive lock
 *       ftruncate($fp, 0); // truncate file
 *       fwrite($fp, "Write something here\n");
 *       flock($fp, LOCK_UN); // release the lock
 *   } else {
 *       echo "Couldn't get the lock!";
 *   }
 *   
 *   fclose($fp);
 *   
 *   ?>
 * 
 * Output: 
 */
function flock(Resource $handle, Int32 $operation, Boolean &$wouldblock = null) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Format line as CSV and write to file pointer
 * Example:   
 *   <?php
 *   
 *   $list = array (
 *       array('aaa', 'bbb', 'ccc', 'dddd'),
 *       array('123', '456', '789'),
 *       array('"aaa"', '"bbb"')
 *   );
 *   
 *   $fp = fopen('file.csv', 'w');
 *   
 *   foreach ($list as $fields) {
 *       fputcsv($fp, $fields);
 *   }
 *   
 *   fclose($fp);
 *   ?>
 * 
 * Output:   
 *   aaa,bbb,ccc,dddd
 *   123,456,789
 *   """aaa""","""bbb"""
 *   
 */
function fputcsv(Resource $handle, VariantVec $fields, String $delimiter = ",", String $enclosure = "\"") {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Gets line from file pointer and parse for CSV fields
 * Example:   
 *   <?php
 *   $row = 1;
 *   if (($handle = fopen("test.csv", "r")) !== FALSE) {
 *       while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
 *           $num = count($data);
 *           echo "<p> $num fields in line $row: <br /></p>\n";
 *           $row++;
 *           for ($c=0; $c < $num; $c++) {
 *               echo $data[$c] . "<br />\n";
 *           }
 *       }
 *       fclose($handle);
 *   }
 *   ?>
 * 
 * Output: 
 */
function fgetcsv(Resource $handle, Int64 $length = 0, String $delimiter = ",", String $enclosure = "\"") {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Reads entire file into a string
 * Example:   
 *   <?php
 *   $homepage = file_get_contents('http://www.example.com/');
 *   echo $homepage;
 *   ?>
 * 
 * Output:   
 *   string(14) "lle Bjori Ro" 
 */
function file_get_contents(String $filename, Boolean $use_include_path = false, Resource $context = null_object, Int64 $offset = 0, Int64 $maxlen = 0) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Write a string to a file
 * Example:   
 *   <?php
 *   $file = 'people.txt';
 *   // Open the file to get existing content
 *   $current = file_get_contents($file);
 *   // Append a new person to the file
 *   $current .= "John Smith\n";
 *   // Write the contents back to the file
 *   file_put_contents($file, $current);
 *   ?>
 * 
 * Output: 
 */
function file_put_contents(String $filename, Variant $data, Int32 $flags = 0, Resource $context = null_object) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Reads entire file into an array
 * Example:   
 *   <?php
 *   // Get a file into an array.  In this example we'll go through HTTP to get
 *   // the HTML source of a URL.
 *   $lines = file('http://www.example.com/');
 *   
 *   // Loop through our array, show HTML source as HTML source; and line numbers too.
 *   foreach ($lines as $line_num => $line) {
 *       echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
 *   }
 *   
 *   // Another example, let's get a web page into a string.  See also file_get_contents().
 *   $html = implode('', file('http://www.example.com/'));
 *   
 *   // Using the optional flags parameter since PHP 5
 *   $trimmed = file('somefile.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
 *   ?>
 * 
 * Output: 
 */
function file(String $filename, Int32 $flags = 0, Resource $context = null_object) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Outputs a file
 * Example:   
 *   <?php
 *   $file = 'monkey.gif';
 *   
 *   if (file_exists($file)) {
 *       header('Content-Description: File Transfer');
 *       header('Content-Type: application/octet-stream');
 *       header('Content-Disposition: attachment; filename='.basename($file));
 *       header('Content-Transfer-Encoding: binary');
 *       header('Expires: 0');
 *       header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
 *       header('Pragma: public');
 *       header('Content-Length: ' . filesize($file));
 *       ob_clean();
 *       flush();
 *       readfile($file);
 *       exit;
 *   }
 *   ?>
 * 
 * Output: 
 */
function readfile(String $filename, Boolean $use_include_path = false, Resource $context = null_object) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Moves an uploaded file to a new location
 * Example:   
 *   <?php
 *   $uploads_dir = '/uploads';
 *   foreach ($_FILES["pictures"]["error"] as $key => $error) {
 *       if ($error == UPLOAD_ERR_OK) {
 *           $tmp_name = $_FILES["pictures"]["tmp_name"][$key];
 *           $name = $_FILES["pictures"]["name"][$key];
 *           move_uploaded_file($tmp_name, "$uploads_dir/$name");
 *       }
 *   }
 *   ?>
 * 
 * Output: 
 */
function move_uploaded_file(String $filename, String $destination) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Parse a configuration file
 * Example:   
 *   ; This is a sample configuration file
 *   ; Comments start with ';', as in php.ini
 *   
 *   [first_section]
 *   one = 1
 *   five = 5
 *   animal = BIRD
 *   
 *   [second_section]
 *   path = "/usr/local/bin"
 *   URL = "http://www.example.com/~username"
 *   
 *   [third_section]
 *   phpversion[] = "5.0"
 *   phpversion[] = "5.1"
 *   phpversion[] = "5.2"
 *   phpversion[] = "5.3"
 * 
 * Output:   
 *   Array
 *   (
 *       [one] => 1
 *       [five] => 5
 *       [animal] => Dodo bird
 *       [path] => /usr/local/bin
 *       [URL] => http://www.example.com/~username
 *       [phpversion] => Array
 *           (
 *               [0] => 5.0
 *               [1] => 5.1
 *               [2] => 5.2
 *               [3] => 5.3
 *           )
 *   
 *   )
 *   Array
 *   (
 *       [first_section] => Array
 *           (
 *               [one] => 1
 *               [five] => 5
 *               [animal] => Dodo bird
 *           )
 *   
 *       [second_section] => Array
 *           (
 *               [path] => /usr/local/bin
 *               [URL] => http://www.example.com/~username
 *           )
 *   
 *       [third_section] => Array
 *           (
 *               [phpversion] => Array
 *                   (
 *                       [0] => 5.0
 *                       [1] => 5.1
 *                       [2] => 5.2
 *                       [3] => 5.3
 *                   )
 *   
 *           )
 *   
 *   )
 */
function parse_ini_file(String $filename, Boolean $process_sections = false) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Calculates the md5 hash of a given file
 * Example:   
 *   <?php
 *   $file = 'php-5.3.0alpha2-Win32-VC9-x64.zip';
 *   
 *   echo 'MD5 file hash of ' . $file . ': ' . md5_file($file);
 *   ?>
 * 
 * Output: 
 */
function md5_file(String $filename, Boolean $raw_output = false) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Calculate the sha1 hash of a file
 * Example:   
 *   <?php
 *   foreach(glob('/home/Kalle/myproject/*.php') as $ent)
 *   {
 *       if(is_dir($ent))
 *       {
 *           continue;
 *       }
 *   
 *       echo $ent . ' (SHA1: ' . sha1_file($ent) . ')', PHP_EOL;
 *   }
 *   ?>
 * 
 * Output: 
 */
function sha1_file(String $filename, Boolean $raw_output = false) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Changes file mode
 * Example:   
 *   <?php
 *   chmod("/somedir/somefile", 755);   // decimal; probably incorrect
 *   chmod("/somedir/somefile", "u+rwx,go+rx"); // string; incorrect
 *   chmod("/somedir/somefile", 0755);  // octal; correct value of mode
 *   ?>
 * 
 * Output: 
 */
function chmod(String $filename, Int64 $mode) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Changes file owner
 * Example:   
 *   <?php
 *   
 *   // File name and username to use
 *   $file_name= "foo.php";
 *   $path = "/home/sites/php.net/public_html/sandbox/" . $file_name ;
 *   $user_name = "root";
 *   
 *   // Set the user
 *   chown($path, $user_name);
 *   
 *   // Check the result
 *   $stat = stat($path);
 *   print_r(posix_getpwuid($stat['uid']));
 *   
 *   ?>
 * 
 * Output:   
 *   array(7) {
 *     ["name"]=>
 *     string(13) "php.net"
 *     ["passwd"]=>
 *     string(1) "x"
 *     ["uid"]=>
 *     int(148864)
 *     ["gid"]=>
 *     int(148910)
 *     ["gecos"]=>
 *     string(13) "php.net"
 *     ["dir"]=>
 *     string(25) "/home/sites/php.net"
 *     ["shell"]=>
 *     string(13) "/sbin/nologin"
 *   }
 */
function chown(String $filename, Primitive $user) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Changes user ownership of symlink
 * Example:   
 *   <?php
 *   $target = 'output.php';
 *   $link = 'output.html';
 *   symlink($target, $link);
 *   
 *   lchown($link, 8);
 *   ?>
 * 
 * Output: 
 */
function lchown(String $filename, Variant $user) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Changes file group
 * Example:   
 *   <?php
 *   $filename = 'shared_file.txt';
 *   $format = "%s's Group ID @ %s: %d\n";
 *   printf($format, $filename, date('r'), filegroup($filename));
 *   chgrp($filename, 8);
 *   printf($format, $filename, date('r'), filegroup($filename));
 *   ?>
 * 
 * Output: 
 */
function chgrp(String $filename, Primitive $group) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Changes group ownership of symlink
 * Example:   
 *   <?php
 *   $target = 'output.php';
 *   $link = 'output.html';
 *   symlink($target, $link);
 *   
 *   lchgrp($link, 8);
 *   ?>
 * 
 * Output: 
 */
function lchgrp(String $filename, Variant $group) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Sets access and modification time of file
 * Example:   
 *   <?php
 *   if (touch($filename)) {
 *       echo $filename . ' modification time has been changed to present time';
 *   } else {
 *       echo 'Sorry, could not change modification time of ' . $filename;
 *   }
 *   ?>
 * 
 * Output: 
 */
function touch(String $filename, Int64 $mtime = 0, Int64 $atime = 0) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Copies file
 * Example:   
 *   <?php
 *   $file = 'example.txt';
 *   $newfile = 'example.txt.bak';
 *   
 *   if (!copy($file, $newfile)) {
 *       echo "failed to copy $file...\n";
 *   }
 *   ?>
 * 
 * Output: 
 */
function copy(String $source, String $dest, Resource $context = null_object) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Renames a file or directory
 * Example:   
 *   <?php
 *   rename("/tmp/tmp_file.txt", "/home/user/login/docs/my_file.txt");
 *   ?>
 * 
 * Output: 
 */
function rename(String $oldname, String $newname, Resource $context = null_object) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Changes the current umask
 * Example:   
 *   <?php
 *   $old = umask(0);
 *   chmod("/path/some_dir/some_file.txt", 0755);
 *   umask($old);
 *   
 *   // Checking
 *   if ($old != umask()) {
 *       die('An error occured while changing back the umask');
 *   }
 *   ?>
 * 
 * Output: 
 */
function umask(Variant $mask = null_variant) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Deletes a file
 * Example:   
 *   <?php
 *   $fh = fopen('test.html', 'a');
 *   fwrite($fh, '<h1>Hello world!</h1>');
 *   fclose($fh);
 *   
 *   unlink('test.html');
 *   ?>
 * 
 * Output: 
 */
function unlink(String $filename, Resource $context = null_object) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Create a hard link
 * Example:   
 *   <?php
 *   
 *   $from_path = 'source.ext';  // This is the file that already exists
 *   $to_path   = 'newfile.ext'; // This the filename that you want to link it to
 *   
 *   link($from_path, $to_path);
 *   ?>
 * 
 * Output: 
 */
function link(String $target, String $link) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Creates a symbolic link
 * Example:   
 *   <?php
 *   $target = 'uploads.php';
 *   $link = 'uploads';
 *   symlink($target, $link);
 *   
 *   echo readlink($link);
 *   ?>
 * 
 * Output: 
 */
function symlink(String $target, String $link) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Returns filename component of path
 * Example:   
 *   <?php
 *   $path = "/home/httpd/html/index.php";
 *   $file = basename($path);         // $file is set to "index.php"
 *   $file = basename($path, ".php"); // $file is set to "index"
 *   ?>
 * 
 * Output: 
 */
function basename(String $path, String $suffix = null_string) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Match filename against a pattern
 * Example:   
 *   <?php
 *   if (fnmatch("*gr[ae]y", $color)) {
 *     echo "some form of gray ...";
 *   }
 *   ?>
 * 
 * Output: 
 */
function fnmatch(String $pattern, String $filename, Int32 $flags = 0) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Find pathnames matching a pattern
 * Example:   
 *   <?php
 *   foreach (glob("*.txt") as $filename) {
 *       echo "$filename size " . filesize($filename) . "\n";
 *   }
 *   ?>
 * 
 * Output:   
 *   funclist.txt size 44686
 *   funcsummary.txt size 267625
 *   quickref.txt size 137820
 */
function glob(String $pattern, Int32 $flags = 0) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Create file with unique file name
 * Example:   
 *   <?php
 *   $tmpfname = tempnam("/tmp", "FOO");
 *   
 *   $handle = fopen($tmpfname, "w");
 *   fwrite($handle, "writing to tempfile");
 *   fclose($handle);
 *   
 *   // do here something
 *   
 *   unlink($tmpfname);
 *   ?>
 * 
 * Output: 
 */
function tempnam(String $dir, String $prefix) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Creates a temporary file
 * Example:   
 *   <?php
 *   $temp = tmpfile();
 *   fwrite($temp, "writing to tempfile");
 *   fseek($temp, 0);
 *   echo fread($temp, 1024);
 *   fclose($temp); // this removes the file
 *   ?>
 * 
 * Output:   
 *   writing to tempfile
 */
function tmpfile() {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Gets file permissions
 * Example:   
 *   <?php
 *   echo substr(sprintf('%o', fileperms('/tmp')), -4);
 *   echo substr(sprintf('%o', fileperms('/etc/passwd')), -4);
 *   ?>
 * 
 * Output:   
 *   1777
 *   0644
 */
function fileperms(String $filename) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Gets file inode
 * Example:   
 *   <?php
 *   $filename = 'index.php';
 *   if (getmyinode() == fileinode($filename)) {
 *       echo 'You are checking the current file.';
 *   }
 *   ?>
 * 
 * Output: 
 */
function fileinode(String $filename) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Gets file size
 * Example:   
 *   <?php
 *   
 *   // outputs e.g.  somefile.txt: 1024 bytes
 *   
 *   $filename = 'somefile.txt';
 *   echo $filename . ': ' . filesize($filename) . ' bytes';
 *   
 *   ?>
 * 
 * Output: 
 */
function filesize(String $filename) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Gets file owner
 * Example:   
 *   <?php
 *   $filename = 'index.php';
 *   print_r(posix_getpwuid(fileowner($filename)));
 *   ?>
 * 
 * Output: 
 */
function fileowner(String $filename) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Gets file group
 * Example:   
 *   <?php
 *   $filename = 'index.php';
 *   print_r(posix_getgrgid(filegroup($filename)));
 *   ?>
 * 
 * Output: 
 */
function filegroup(String $filename) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Gets last access time of file
 * Example:   
 *   <?php
 *   
 *   // outputs e.g.  somefile.txt was last accessed: December 29 2002 22:16:23.
 *   
 *   $filename = 'somefile.txt';
 *   if (file_exists($filename)) {
 *       echo "$filename was last accessed: " . date("F d Y H:i:s.", fileatime($filename));
 *   }
 *   
 *   ?>
 * 
 * Output: 
 */
function fileatime(String $filename) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Gets file modification time
 * Example:   
 *   <?php
 *   // outputs e.g.  somefile.txt was last modified: December 29 2002 22:16:23.
 *   
 *   $filename = 'somefile.txt';
 *   if (file_exists($filename)) {
 *       echo "$filename was last modified: " . date ("F d Y H:i:s.", filemtime($filename));
 *   }
 *   ?>
 * 
 * Output: 
 */
function filemtime(String $filename) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Gets inode change time of file
 * Example:   
 *   <?php
 *   
 *   // outputs e.g.  somefile.txt was last changed: December 29 2002 22:16:23.
 *   
 *   $filename = 'somefile.txt';
 *   if (file_exists($filename)) {
 *       echo "$filename was last changed: " . date("F d Y H:i:s.", filectime($filename));
 *   }
 *   
 *   ?>
 * 
 * Output: 
 */
function filectime(String $filename) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Gets file type
 * Example:   
 *   <?php
 *   
 *   echo filetype('/etc/passwd');  // file
 *   echo filetype('/etc/');        // dir
 *   
 *   ?>
 * 
 * Output: 
 */
function filetype(String $filename) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Gets information about a link
 * Example:   
 *   <?php
 *   
 *   echo linkinfo('/vmlinuz'); // 835
 *   
 *   ?>
 * 
 * Output: 
 */
function linkinfo(String $filename) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Tells whether the filename is writable
 * Example:   
 *   <?php
 *   $filename = 'test.txt';
 *   if (is_writable($filename)) {
 *       echo 'The file is writable';
 *   } else {
 *       echo 'The file is not writable';
 *   }
 *   ?>
 * 
 * Output: 
 */
function is_writable(String $filename) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: &Alias;  <function>is_writable</function>
 * Example: 
 * 
 * Output: 
 */
function is_writeable(String $filename) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Tells whether a file exists and is readable
 * Example:   
 *   <?php
 *   $filename = 'test.txt';
 *   if (is_readable($filename)) {
 *       echo 'The file is readable';
 *   } else {
 *       echo 'The file is not readable';
 *   }
 *   ?>
 * 
 * Output: 
 */
function is_readable(String $filename) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Tells whether the filename is executable
 * Example:   
 *   <?php
 *   
 *   $file = '/home/vincent/somefile.sh';
 *   
 *   if (is_executable($file)) {
 *       echo $file.' is executable';
 *   } else {
 *       echo $file.' is not executable';
 *   }
 *   
 *   ?>
 * 
 * Output: 
 */
function is_executable(String $filename) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Tells whether the filename is a regular file
 * Example:   
 *   <?php
 *   var_dump(is_file('a_file.txt')) . "\n";
 *   var_dump(is_file('/usr/bin/')) . "\n";
 *   ?>
 * 
 * Output:   
 *   bool(true)
 *   bool(false)
 */
function is_file(String $filename) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Tells whether the filename is a directory
 * Example:   
 *   <?php
 *   var_dump(is_dir('a_file.txt'));
 *   var_dump(is_dir('bogus_dir/abc'));
 *   
 *   var_dump(is_dir('..')); //one dir up
 *   ?>
 * 
 * Output:   
 *   bool(false)
 *   bool(false)
 *   bool(true)
 */
function is_dir(String $filename) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Tells whether the filename is a symbolic link
 * Example:   
 *   <?php
 *   $link = 'uploads';
 *   
 *   if (is_link($link)) {
 *       echo(readlink($link));
 *   } else {
 *       symlink('uploads.php', $link);
 *   }
 *   ?>
 * 
 * Output: 
 */
function is_link(String $filename) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Tells whether the file was uploaded via HTTP POST
 * Example:   
 *   <?php
 *   
 *   if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
 *      echo "File ". $_FILES['userfile']['name'] ." uploaded successfully.\n";
 *      echo "Displaying contents\n";
 *      readfile($_FILES['userfile']['tmp_name']);
 *   } else {
 *      echo "Possible file upload attack: ";
 *      echo "filename '". $_FILES['userfile']['tmp_name'] . "'.";
 *   }
 *   
 *   ?>
 * 
 * Output: 
 */
function is_uploaded_file(String $filename) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Checks whether a file or directory exists
 * Example:   
 *   <?php
 *   $filename = '/path/to/foo.txt';
 *   
 *   if (file_exists($filename)) {
 *       echo "The file $filename exists";
 *   } else {
 *       echo "The file $filename does not exist";
 *   }
 *   ?>
 * 
 * Output: 
 */
function file_exists(String $filename) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Gives information about a file
 * Example:   
 *   <?php
 *   /* Get file stat  * / 
 *   $stat = stat('C:\php\php.exe');
 *   
 *   /*
 *    * Print file access time, this is the same 
 *    * as calling fileatime()
 *     * / 
 *   echo 'Access time: ' . $stat['atime'];
 *   
 *   /*
 *    * Print file modification time, this is the 
 *    * same as calling filemtime()
 *     * / 
 *   echo 'Modification time: ' . $stat['mtime'];
 *   
 *   /* Print the device number  * / 
 *   echo 'Device number: ' . $stat['dev'];
 *   ?>
 * 
 * Output: 
 */
function stat(String $filename) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Gives information about a file or symbolic link
 * Example:   
 *   <?php
 *   symlink('uploads.php', 'uploads');
 *   
 *   // Contrast information for uploads.php and uploads
 *   array_diff(stat('uploads'), lstat('uploads'));
 *   ?>
 * 
 * Output:   
 *   Array
 *   (
 *       [ino] => 97236376
 *       [mode] => 33188
 *       [size] => 34
 *       [atime] => 1223580003
 *       [mtime] => 1223581848
 *       [ctime] => 1223581848
 *       [blocks] => 8
 *   )
 */
function lstat(String $filename) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Clears file status cache
 * Example:   
 *   <?php
 *   $file = 'output_log.txt';
 *   
 *   function get_owner($file)
 *   {
 *       $stat = stat($file);
 *       $user = posix_getpwuid($stat['uid']);
 *       return $user['name'];
 *   }
 *   
 *   $format = "UID @ %s: %s\n";
 *   
 *   printf($format, date('r'), get_owner($file));
 *   
 *   chown($file, 'ross');
 *   printf($format, date('r'), get_owner($file));
 *   
 *   clearstatcache();
 *   printf($format, date('r'), get_owner($file));
 *   ?>
 * 
 * Output:   
 *   UID @ Sun, 12 Oct 2008 20:48:28 +0100: root
 *   UID @ Sun, 12 Oct 2008 20:48:28 +0100: root
 *   UID @ Sun, 12 Oct 2008 20:48:28 +0100: ross
 */
function clearstatcache() {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Returns the target of a symbolic link
 * Example:   
 *   <?php
 *   
 *   // output e.g. /boot/vmlinux-2.4.20-xfs
 *   echo readlink('/vmlinuz');
 *   
 *   ?>
 * 
 * Output: 
 */
function readlink(String $path) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Returns canonicalized absolute pathname
 * Example:   
 *   <?php
 *   chdir('/var/www/');
 *   echo realpath('./../../etc/passwd');
 *   ?>
 * 
 * Output:   
 *   /etc/passwd
 */
function realpath(String $path) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Returns information about a file path
 * Example:   
 *   <?php
 *   $path_parts = pathinfo('/www/htdocs/inc/lib.inc.php');
 *   
 *   echo $path_parts['dirname'], "\n";
 *   echo $path_parts['basename'], "\n";
 *   echo $path_parts['extension'], "\n";
 *   echo $path_parts['filename'], "\n"; // since PHP 5.2.0
 *   ?>
 * 
 * Output:   
 *   /www/htdocs/inc
 *   lib.inc.php
 *   php
 *   lib.inc
 */
function pathinfo(String $path, Int32 $opt = 15) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Returns available space on filesystem or disk partition
 * Example:   
 *   <?php
 *   // $df contains the number of bytes available on "/"
 *   $df = disk_free_space("/");
 *   
 *   // On Windows:
 *   disk_free_space("C:");
 *   disk_free_space("D:");
 *   ?>
 * 
 * Output: 
 */
function disk_free_space(String $directory) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: &Alias;  <function>disk_free_space</function>
 * Example: 
 * 
 * Output: 
 */
function diskfreespace(String $directory) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Returns the total size of a filesystem or disk partition
 * Example:   
 *   <?php
 *   // $df contains the total number of bytes available on "/"
 *   $df = disk_total_space("/");
 *   
 *   // On Windows:
 *   disk_total_space("C:");
 *   disk_total_space("D:");
 *   ?>
 * 
 * Output: 
 */
function disk_total_space(String $directory) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Makes directory
 * Example:   
 *   <?php
 *   mkdir("/path/to/my/dir", 0700);
 *   ?>
 * 
 * Output: 
 */
function mkdir(String $pathname, Int64 $mode = 0, Boolean $recursive = false, Resource $context = null_object) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Removes directory
 * Example:   
 *   <?php
 *   if (!is_dir('examples')) {
 *       mkdir('examples');
 *   }
 *   
 *   rmdir('examples');
 *   ?>
 * 
 * Output: 
 */
function rmdir(String $dirname, Resource $context = null_object) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Returns directory name component of path
 * Example:   
 *   <?php
 *   $path = "/etc/passwd";
 *   $file = dirname($path); // $file is set to "/etc"
 *   ?>
 * 
 * Output: 
 */
function dirname(String $path) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Gets the current working directory
 * Example:   
 *   <?php
 *   
 *   // current directory
 *   echo getcwd() . "\n";
 *   
 *   chdir('cvs');
 *   
 *   // current directory
 *   echo getcwd() . "\n";
 *   
 *   ?>
 * 
 * Output:   
 *   /home/didou
 *   /home/didou/cvs
 */
function getcwd() {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Change directory
 * Example:   
 *   <?php
 *   
 *   // current directory
 *   echo getcwd() . "\n";
 *   
 *   chdir('public_html');
 *   
 *   // current directory
 *   echo getcwd() . "\n";
 *   
 *   ?>
 * 
 * Output:   
 *   /home/vincent
 *   /home/vincent/public_html
 */
function chdir(String $directory) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Change the root directory
 * Example: 
 * 
 * Output: 
 */
function chroot(String $directory) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

function dir(String $directory) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Open directory handle
 * Example:   
 *   <?php
 *   $dir = "/etc/php5/";
 *   
 *   // Open a known directory, and proceed to read its contents
 *   if (is_dir($dir)) {
 *       if ($dh = opendir($dir)) {
 *           while (($file = readdir($dh)) !== false) {
 *               echo "filename: $file : filetype: " . filetype($dir . $file) . "\n";
 *           }
 *           closedir($dh);
 *       }
 *   }
 *   ?>
 * 
 * Output:   
 *   filename: . : filetype: dir
 *   filename: .. : filetype: dir
 *   filename: apache : filetype: dir
 *   filename: cgi : filetype: dir
 *   filename: cli : filetype: dir
 */
function opendir(String $path, Resource $context = null) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Read entry from directory handle
 * Example:   
 *   <?php
 *   
 *   if ($handle = opendir('/path/to/files')) {
 *       echo "Directory handle: $handle\n";
 *       echo "Files:\n";
 *   
 *       /* This is the correct way to loop over the directory.  * / 
 *       while (false !== ($file = readdir($handle))) {
 *           echo "$file\n";
 *       }
 *   
 *       /* This is the WRONG way to loop over the directory.  * / 
 *       while ($file = readdir($handle)) {
 *           echo "$file\n";
 *       }
 *   
 *       closedir($handle);
 *   }
 *   ?>
 * 
 * Output: 
 */
function readdir(Resource $dir_handle) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Rewind directory handle
 * Example: 
 * 
 * Output: 
 */
function rewinddir(Resource $dir_handle) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: List files and directories inside the specified path
 * Example:   
 *   <?php
 *   $dir    = '/tmp';
 *   $files1 = scandir($dir);
 *   $files2 = scandir($dir, 1);
 *   
 *   print_r($files1);
 *   print_r($files2);
 *   ?>
 * 
 * Output:   
 *   Array
 *   (
 *       [0] => .
 *       [1] => ..
 *       [2] => bar.php
 *       [3] => foo.txt
 *       [4] => somedir
 *   )
 *   Array
 *   (
 *       [0] => somedir
 *       [1] => foo.txt
 *       [2] => bar.php
 *       [3] => ..
 *       [4] => .
 *   )
 */
function scandir(String $directory, Boolean $descending = false, Resource $context = null) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Close directory handle
 * Example:   
 *   <?php
 *   $dir = "/etc/php5/";
 *   
 *   // Open a known directory, read directory into variable and then close
 *   if (is_dir($dir)) {
 *       if ($dh = opendir($dir)) {
 *           $directory = readdir($dh);
 *           closedir($dh);
 *       }
 *   }
 *   ?>
 * 
 * Output: 
 */
function closedir(Resource $dir_handle) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

