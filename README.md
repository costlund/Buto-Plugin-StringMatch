# Buto-Plugin-StringMatch



```
wfPlugin::includeonce('string/match');
$match = new PluginStringMatch();
if($match->wildcard('*hi*', 'I say hi to you.') > 0){
  echo 'Match...';
}
```
