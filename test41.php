<?php

$array = array(
    'one' => array('one1', 'one2'),
    'two' => array('two1', 'two2'),
    'three' => array('three1', 'three2', 'three3')
);

print("<pre>");
print_r($array);
print("</pre>");

echo '----------------------------------------------------------------';
print('<pre>');
foreach($array as $key => $value){
    echo '<br />';
    echo '['.$key.'] => Array'.'<br />';
    echo '      ('.'<br />';
    foreach($value as $key1 => $value1){
        echo '          ['.$key1.'] => '.$value1;
        echo '<br />';
    }
    echo '      )'.'<br />';
}
print("</pre>");

?>