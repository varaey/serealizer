# Serialize library

This library convert Object props to needed *format*.

__Like__:
- JSON
- Yaml
- XML

### How to use:
1) do next command (in terminal) in current directory (for install needed libraries)
```
composer install
```
2) for start test, use next command (in terminal) in current directory
```
php tests/start.php
```
### Description
For converting Object to __JSON__:
```
$toJson = new \serealizeme\SerializeToJson(new Object);
echo $toJson->getResult();
```
For converting Object to __Yaml__:
```
$toYaml = new \serealizeme\SerializeToYaml(new Object);
echo $toYaml->getResult();
```
For converting Object to __XML__:
```
$toXml = new \serealizeme\SerializeToXml(new Object);
echo $toXml->getResult();
```

> Best regards,
> Your student Kuzemskyi S
