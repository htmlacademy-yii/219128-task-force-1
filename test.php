<?php
use alext\task\Task;

require 'vendor/autoload.php';

assert_options(ASSERT_ACTIVE, 1);
assert_options(ASSERT_WARNING, 0);
assert_options(ASSERT_QUIET_EVAL, 1);


$task = new Task(1, 'new');

assert($task->getNextStatus('action_respond') == Task::STATUS_NEW, 'respond action');
