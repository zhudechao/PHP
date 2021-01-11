# 模型原生sql

查询并分组

```php
TestModel::selectRaw("DATE_FORMAT(date_range,'%Y%m') as ym")->groupBy("ym")->get()->toArray();
```

```php
TestModel::selectRaw("*")->whereRaw("DATE_FORMAT(date_range,'%Y%m') = '".$ym."'")->get()->toArray();
```

