<?php
class PluginStringMatch{
  /**
   * Search in string with *.
   * @param string $wildcard_pattern
   * @param string $haystack
   * @return int If no match returns 0.
   */
  public function wildcard($wildcard_pattern, $haystack){
     $regex = wfPhpfunc::str_replace(
       array("\*", "\?"), // wildcard chars
       array('.*','.'),   // regexp chars
       preg_quote($wildcard_pattern)
     );
     return preg_match('#^'.$regex.'$#is', $haystack);
  }
}
