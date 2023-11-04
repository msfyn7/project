<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code


define('PROVINCES', array(
    '1' => 'Aceh',
    '2' => 'Sumatera Utara',
    '3' => 'Sumatera Barat',
    '4' => 'Riau',
    '5' => 'Kepulauan Riau',
    '6' => 'Jambi',
    '7' => 'Bengkulu',
    '8' => 'Sumatera Selatan',
    '9' => 'Kepulauan Bangka Belitung',
    '10' => 'Lampung',
    '11' => 'Banten',
    '12' => 'Jakarta',
    '13' => 'Jawa Barat',
    '14' => 'Jawa Tengah',
    '15' => 'Daerah Istimewa Yogyakarta',
    '16' => 'Jawa Timur',
    '17' => 'Bali',
    '18' => 'Nusa Tenggara Barat',
    '19' => 'Nusa Tenggara Timur',
    '20' => 'Kalimantan Barat',
    '21' => 'Kalimantan Tengah',
    '22' => 'Kalimantan Selatan',
    '23' => 'Kalimantan Timur',
    '24' => 'Kalimantan Utara',
    '25' => 'Gorontalo',
    '26' => 'Sulawesi Barat',
    '27' => 'Sulawesi Utara',
    '28' => 'Sulawesi Tengah',
    '29' => 'Sulawesi Selatan',
    '30' => 'Sulawesi Tenggara',
    '31' => 'Maluku',
    '32' => 'Maluku Utara',
    '33' => 'Papua Barat',
    '34' => 'Papua'
));

define('REGENCY', array(
    '1' => 'Kabupaten Bangkalan',
    '2' => 'Kabupaten Banyuwangi',
    '3' => 'Kabupaten Blitar',
    '4' => 'Kabupaten Bojonegoro',
    '5' => 'Kabupaten Bondowoso',
    '6' => 'Kabupaten Gresik',
    '7' => 'Kabupaten Jember',
    '8' => 'Kabupaten Jombang',
    '9' => 'Kabupaten Kediri',
    '10' => 'Kabupaten Lamongan',
    '11' => 'Kabupaten Lumajang',
    '12' => 'Kabupaten Madiun',
    '13' => 'Kabupaten Magetan',
    '14' => 'Kabupaten Malang',
    '15' => 'Kabupaten Mojokerto',
    '16' => 'Kabupaten Nganjuk',
    '17' => 'Kabupaten Ngawi',
    '18' => 'Kabupaten Pacitan',
    '19' => 'Kabupaten Pamekasan',
    '20' => 'Kabupaten Pasuruan',
    '21' => 'Kabupaten Ponorogo',
    '22' => 'Kabupaten Probolinggo',
    '23' => 'Kabupaten Sampang',
    '24' => 'Kabupaten Sidoarjo',
    '25' => 'Kabupaten Situbondo',
    '26' => 'Kabupaten Sumenep',
    '27' => 'Kabupaten Trenggalek',
    '28' => 'Kabupaten Tuban',
    '29' => 'Kabupaten Tulungagung'
));


