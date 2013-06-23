<?php
require_once('lib/jellybean.php');

$schema = new jellybean(
    array(
        'driver' => 'sqlite',
        'dbname' => 'test.db'
    )
);

$users = $schema->table('users');

echo("Found " . $users->count() . " row(s)\n");
foreach ($users->search() as $user) {
    echo( $user['name'] . "\n");
}

// active users only
$active = $users->search(array('status' => 'active'));
echo("Found " . $users->count() . " active users\n");
echo(var_dump($active[0]));
?>
