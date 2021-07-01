# phone-check
固话和手机号自动解析并验证

install
```shell script
composer require ogenes/phone-check
```

demo
```shell script
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

```
