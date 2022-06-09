<?php











namespace Composer;

use Composer\Semver\VersionParser;






class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => 'dev-master',
    'version' => 'dev-master',
    'aliases' => 
    array (
    ),
    'reference' => 'e550910a08010b6fc5c53cfcba4b88baafc6e806',
    'name' => 'opencart/opencart',
  ),
  'versions' => 
  array (
    'braintree/braintree_php' => 
    array (
      'pretty_version' => '5.5.0',
      'version' => '5.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8902a072ac04c9eea2996f2683cb56259cbe46fa',
    ),
    'cardinity/cardinity-sdk-php' => 
    array (
      'pretty_version' => 'v1.0.3',
      'version' => '1.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f51f6fbacee393b4eeff7b80be2b1cee77896b4c',
    ),
    'divido/divido-php' => 
    array (
      'pretty_version' => 'v1.15-stable',
      'version' => '1.15.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8edd902ec2be8151331985021107031292b41ca1',
    ),
    'guzzlehttp/guzzle' => 
    array (
      'pretty_version' => '5.3.4',
      'version' => '5.3.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b87eda7a7162f95574032da17e9323c9899cb6b2',
    ),
    'guzzlehttp/log-subscriber' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '99c3c0004165db721d8ef7bbef60c996210e538a',
    ),
    'guzzlehttp/oauth-subscriber' => 
    array (
      'pretty_version' => '0.2.0',
      'version' => '0.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '03f1ebe31d3112526106d0570c80eba6820e86e5',
    ),
    'guzzlehttp/ringphp' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '5e2a174052995663dd68e6b5ad838afd47dd615b',
    ),
    'guzzlehttp/streams' => 
    array (
      'pretty_version' => '3.0.0',
      'version' => '3.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '47aaa48e27dae43d39fc1cea0ccf0d84ac1a2ba5',
    ),
    'klarna/kco_rest' => 
    array (
      'pretty_version' => 'v2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8a2142a2ebb087bb61901d51d1bb9698790e78c5',
    ),
    'opencart/opencart' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
      ),
      'reference' => 'e550910a08010b6fc5c53cfcba4b88baafc6e806',
    ),
    'psr/log' => 
    array (
      'pretty_version' => '1.1.4',
      'version' => '1.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd49695b909c3b7628b6289db5479a1c204601f11',
    ),
    'react/promise' => 
    array (
      'pretty_version' => 'v2.9.0',
      'version' => '2.9.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '234f8fd1023c9158e2314fa9d7d0e6a83db42910',
    ),
    'scssphp/scssphp' => 
    array (
      'pretty_version' => 'v1.10.3',
      'version' => '1.10.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '0f1e1516ed2412ad43e42a6a319e77624ba1f713',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'v1.26.0',
      'version' => '1.26.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6fd1b9a79f6e3cf65f9e679b23af304cd9e010d4',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.26.0',
      'version' => '1.26.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '9344f9cb97f3b19424af1a21a3b0e75b0a7d8d7e',
    ),
    'symfony/translation' => 
    array (
      'pretty_version' => 'v3.0.9',
      'version' => '3.0.9.0',
      'aliases' => 
      array (
      ),
      'reference' => 'eee6c664853fd0576f21ae25725cfffeafe83f26',
    ),
    'symfony/validator' => 
    array (
      'pretty_version' => 'v2.8.52',
      'version' => '2.8.52.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd5d2090bba3139d8ddb79959fbf516e87238fe3a',
    ),
    'twig/twig' => 
    array (
      'pretty_version' => 'v3.4.1',
      'version' => '3.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e939eae92386b69b49cfa4599dd9bead6bf4a342',
    ),
    'zoujingli/wechat-php-sdk' => 
    array (
      'pretty_version' => 'v1.3.18',
      'version' => '1.3.18.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd37d0c1919ede2ee54e65100ac3792e947b1e0ef',
    ),
  ),
);







public static function getInstalledPackages()
{
return array_keys(self::$installed['versions']);
}









public static function isInstalled($packageName)
{
return isset(self::$installed['versions'][$packageName]);
}














public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
if (!isset(self::$installed['versions'][$packageName])) {
throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}

$ranges = array();
if (isset(self::$installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = self::$installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', self::$installed['versions'][$packageName])) {
$ranges = array_merge($ranges, self::$installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', self::$installed['versions'][$packageName])) {
$ranges = array_merge($ranges, self::$installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', self::$installed['versions'][$packageName])) {
$ranges = array_merge($ranges, self::$installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}





public static function getVersion($packageName)
{
if (!isset(self::$installed['versions'][$packageName])) {
throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}

if (!isset(self::$installed['versions'][$packageName]['version'])) {
return null;
}

return self::$installed['versions'][$packageName]['version'];
}





public static function getPrettyVersion($packageName)
{
if (!isset(self::$installed['versions'][$packageName])) {
throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}

if (!isset(self::$installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return self::$installed['versions'][$packageName]['pretty_version'];
}





public static function getReference($packageName)
{
if (!isset(self::$installed['versions'][$packageName])) {
throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}

if (!isset(self::$installed['versions'][$packageName]['reference'])) {
return null;
}

return self::$installed['versions'][$packageName]['reference'];
}





public static function getRootPackage()
{
return self::$installed['root'];
}







public static function getRawData()
{
return self::$installed;
}



















public static function reload($data)
{
self::$installed = $data;
}
}
