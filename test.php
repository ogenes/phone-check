<?php

/**
 * Created by phone-check.
 * User: ogenes
 * Date: 2021/6/30
 */
include "./vendor/autoload.php";
use Ogenes\PhoneCheck\Client;


try
{
    $tel = "(0376) 803 9551;13478946254‬‬";
    $ret = Client::analysis($tel);
} catch (InvalidArgumentException  $e)
{
    $ret = $e->getMessage();
}
print_r($ret);

